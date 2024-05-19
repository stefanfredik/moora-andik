<?php

namespace App\Models;

use CodeIgniter\Model;

class PesertaModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'peserta';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = false;
    protected $allowedFields    = ['id', 'id_siswa', 'tahun', 'periode'];

    public function findAllPeserta()
    {
        $this->select('datasiswa.*');
        $this->select('peserta.*');
        $this->join('datasiswa', 'datasiswa.id = peserta.id_siswa ');
        return $this->findAll();
    }

    public function findPeserta($id)
    {
        $this->select('peserta.id as id_peserta');
        $this->select('datasiswa.*');
        $this->select('peserta.*');
        $this->join('datasiswa', 'datasiswa.id = peserta.id_siswa');
        return $this->find($id);
    }


    public function findDoubleNisn($nisn)
    {
        $this->select("*");
        $this->where("datasiswa.nisn", $nisn);
        $this->join('datasiswa', 'datasiswa.id = peserta.id_siswa ');
        // return $this->findAll();
        $count = $this->countAllResults();

        if ($count >= 1) {
            return true;
        } else {
            return false;
        }
    }
}
