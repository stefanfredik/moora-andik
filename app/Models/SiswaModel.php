<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'datasiswa';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id', 'nisn', 'nama_siswa', 'jenis_kelamin', 'alamat', 'kelas'];


    public function findAllData()
    {
        $this->select('datasiswa.*');
        $this->select('kriteriasiswa.*', 'kriteriasiswa.id as Kri');
        $this->join('kriteriasiswa', 'datasiswa.id = kriteriasiswa.id_siswa', 'left', 'datasiswa.id as pend');
        return $this->findAll();
    }

    public function findAllNonPeserta()
    {
        $this->select("datasiswa.*");
        // $this->select("datablt.*");
        $this->join("peserta", "peserta.id_siswa = datasiswa.id", "left")->where("peserta.id", NULL);
        return $this->findAll();
    }


    public function findAllsiswa()
    {
        $this->select("datasiswa.*");
        $this->select("peserta.id_siswa as peserta");
        $this->join("peserta", "peserta.id_siswa = siswa.id", "left");
        return $this->findAll();
    }
}
