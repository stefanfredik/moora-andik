<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KuotaModel;

class Auth extends BaseController {
    public function __construct() {
        $this->kuotaModel = new KuotaModel();
    }
    public function index() {
        //
    }

    public function login() {
        $data = [
            "title" => "Halaman Login",
            "dataKuota" => $this->kuotaModel->findAll(),
        ];
        return view("login/index", $data);
    }
}
