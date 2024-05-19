<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SiswaModel;
use CodeIgniter\API\ResponseTrait;

class Datasiswa extends BaseController
{
    use ResponseTrait;

    var $meta = [
        'url' => 'datasiswa',
        'title' => 'Data Siswa',
        'subtitle' => 'Halaman Siswa'
    ];


    public function __construct()
    {
        $this->siswaModel = new siswaModel();
    }

    public function index()
    {

        $data = [
            'title' => 'Data Siswa',
            'meta'   => $this->meta,
            'meta'  => $this->meta
        ];

        return view('/siswa/index', $data);
    }

    public function tambah()
    {



        $data = [
            'title' => 'Tambah Data Siswa',
            'meta'   => $this->meta
        ];

        return view('/siswa/tambah', $data);
    }

    public function table()
    {
        $data = [
            'title' => 'Data siswa',
            'meta'   => $this->meta,
            'dataSiswa' => $this->siswaModel->findAll(),
        ];

        return view('/siswa/table', $data);
    }



    public function edit($id)
    {
        $data = [
            'title' => 'Edit Data siswa',
            'siswa'  => $this->siswaModel->find($id),
            'meta'      => $this->meta
        ];

        return view('/siswa/edit', $data);
    }



    public function detail($id)
    {
        $data = [
            'title' => 'Detail Data siswa',
            'siswa'  => $this->siswaModel->find($id),
            'meta'   => $this->meta
        ];

        return $this->respond(view('/siswa/detail', $data), 200);
    }

    public function store()
    {
        $rules = [
            'nisn'  => [
                'rules'  => 'required|is_unique[datasiswa.nisn]',
                'errors' => [
                    'is_unique' => 'Nomor NISN yang anda masukan sudah digunakan.'
                ]
            ],
        ];

        if (!$this->validate($rules)) {
            return $this->respond([
                'status' => 'error',
                'error' => $this->validation->getErrors()
            ], 400);
        }

        $data = $this->request->getPost();
        $this->siswaModel->save($data);

        $res = [
            'status' => 'success',
            'msg'   => 'Data siswa Berhasil Ditambahkan.',
            // 'data'  => $data
        ];

        return $this->respond($res, 200);
    }

    public function update($id)
    {
        $data = $this->request->getPost();
        $this->siswaModel->update($id, $data);

        $res = [
            'status' => 'success',
            'msg'   => 'Data berhasil Diupdate.',
            'data'  => $data
        ];

        return $this->respond($res, 200);
    }

    public function delete($id)
    {
        $this->siswaModel->delete($id);

        $res = [
            'status'    => 'success',
            'msg'     => 'Data berhasil dihapus.',
        ];

        return $this->respond($res, 200);
    }


    // upload

    // upload
    public function doupload()
    {

        $rules = [
            'excel_file' => [
                'rules' => [
                    'ext_in[excel_file,excel,xlsx]'
                ],
                'errors' => [
                    'required' => 'File Belum Diupload.',
                    'ext_in' => 'Jenis File tidak Cocok dengan kriteria.'
                ]
            ],
        ];

        if (!$this->validate($rules)) {
            return $this->respond([
                'status' => 'error',
                'error' => $this->validation->getError("excel_file")
            ], 400);
        }

        $file = $this->request->getFile("excel_file");
        $fileName = $file->getName();
        $file->move(WRITEPATH . 'uploads/siswa', $fileName, true);
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        $spreadsheet = $reader->load(WRITEPATH . 'uploads/siswa/' . $fileName);
        $dataExcel = $spreadsheet->getSheet(0)->toArray();
        array_shift($dataExcel);

        $data  = array();

        foreach ($dataExcel as $t) {
            $dt["nik"] = $t[0];
            $dt["no_kk"] = $t[1];
            $dt["nama_lengkap"] = $t[2];
            $dt["alamat"] = $t[3];
            $dt["kelurahan"] = $t[4];
            $dt["kecamatan"] = $t[5];
            $dt["kabupaten"] = $t[6];
            $dt["provinsi"] = $t[7];
            array_push($data, $dt);
        }


        foreach ($data as $dt) {
            $this->siswaModel->save($dt);
        }

        unlink(WRITEPATH . 'uploads/siswa/' . $fileName);

        $res = [
            'status' => 'success',
            'msg'   => 'Data Excel Berhasil di Import.',
            'data'  => $data
        ];

        return $this->respond($res, 200);
    }


    public function upload()
    {
        $data = [
            'title' => 'Upload Data siswa dari File Excel',
            'meta'   => $this->meta
        ];

        return view('/siswa/upload', $data);
    }
}
