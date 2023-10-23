<?php

namespace App\Models;

use CodeIgniter\Model;

class PesertaModel extends Model {
    protected $DBGroup          = 'default';
    protected $table            = 'peserta';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = false;
    protected $allowedFields    = ['id', 'id_penduduk', 'tahun', 'periode'];

    public function findAllPeserta() {
        $this->select('datapenduduk.*');
        $this->select('peserta.*');
        $this->join('datapenduduk', 'datapenduduk.id = peserta.id_penduduk ');
        return $this->findAll();
    }

    public function findPeserta($id) {
        $this->select('peserta.id as id_peserta');
        $this->select('datapenduduk.*');
        $this->select('peserta.*');
        $this->join('datapenduduk', 'datapenduduk.id = peserta.id_penduduk');
        return $this->find($id);
    }


    public function findDoubleKK($noKK) {
        $this->select("*");
        $this->where("datapenduduk.no_kk", $noKK);
        $this->join('datapenduduk', 'datapenduduk.id = peserta.id_penduduk ');
        // return $this->findAll();
        $count = $this->countAllResults();

        if ($count >= 1) {
            return true;
        } else {
            return false;
        }
    }
}
