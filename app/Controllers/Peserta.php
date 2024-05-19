<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KriteriaModel;
use App\Models\PesertaModel;
use App\Models\SiswaModel;
use App\Models\SubkriteriaModel;
use CodeIgniter\API\ResponseTrait;

class Peserta extends BaseController
{
    use ResponseTrait;
    var $meta = [
        'url' => 'datapeserta',
        'title' => 'Data Peserta',
        'subtitle' => 'Halaman Data Peserta'
    ];


    public function __construct()
    {
        $this->pesertaModel = new PesertaModel();
        $this->siswaModel = new SiswaModel();
        $this->kriteriaModel = new KriteriaModel();
        $this->subKriteriaModel = new SubkriteriaModel();
    }

    public function index()
    {

        $data = [
            'title' => $this->meta["title"],
            'meta'   => $this->meta,
        ];

        return view('/peserta/index', $data);
    }

    public function table()
    {
        $data = [
            'title' => $this->meta["title"],
            'meta'   => $this->meta,
            'dataPeserta' => $this->pesertaModel->findAllPeserta()
        ];

        return view('/peserta/table', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => "Tambah " . $this->meta["title"],
            'meta'   => $this->meta,
            'dataSiswa' => $this->siswaModel->findAllNonPeserta(),
            'dataKriteria' => $this->kriteriaModel->findAll(),
            'dataSubkriteria' => $this->subKriteriaModel->findAll(),
            'dataPeserta' => $this->pesertaModel->findAll(),
        ];

        return view('/peserta/tambah', $data);
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Data Siswa Terdaftar',
            'meta'   => $this->meta,
            'dataSiswa' => $this->siswaModel->findAll(),
            'dataKriteria' => $this->kriteriaModel->findAll(),
            'dataSubkriteria' => $this->subKriteriaModel->findAll(),
            'peserta' => $this->pesertaModel->find($id),
        ];

        // dd($data['peserta']);

        return view('/peserta/edit', $data);
    }


    public function detail($id)
    {

        $data = [
            'dataKriteria'  => $this->kriteriaModel->findAll(),
            'dataSubkriteria' => $this->subKriteriaModel->findAll(),
            'dataSiswa' => $this->siswaModel->findAll(),
            'peserta' => $this->pesertaModel->findPeserta($id),
            'meta'   => $this->meta
        ];

        // dd($this->pesertaModel->findAllPeserta($id)[0]);

        $data['title'] = 'Detail ' . $data['peserta']['nama_siswa'];
        return $this->respond(view('/peserta/detail', $data), 200);
    }

    // CRUD


    public function store()
    {
        $data = $this->request->getPost();

        $idSiswa = $data["id_siswa"];
        $nisn = $this->siswaModel->select("nisn")->where("id", $idSiswa)->first();


        // return $this->respond($this->pesertaModel->findDoubleKK($noKK), 200);

        if ($this->pesertaModel->findDoubleNisn($nisn)) {
            return $this->respond([
                'status' => 'error',
                'error' => [
                    "id_siswa" => "NISN Siswa yang anda pilih sudah terdaftar."
                ]
            ], 400);
        }

        $this->pesertaModel->save($data);

        $res = [
            'status' => 'success',
            'msg'   => 'Data Peserta Berhasil Ditambahkan.',
            'data'  => $data
        ];

        return $this->respond($res, 200);
    }

    public function update($id)
    {
        $data = $this->request->getPost();
        $this->pesertaModel->update($id, $data);

        $res = [
            'status' => 'success',
            'msg'   => 'Data Berhasil Diupdate.',
        ];

        return $this->respond($res, 200);
    }


    public function delete($id)
    {
        $this->pesertaModel->delete($id);
        $res = [
            'status'    => 'success',
            'msg'     => 'Data berhasil dihapus.',
        ];

        return $this->respond($res, 200);
    }
}
