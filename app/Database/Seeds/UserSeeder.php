<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\Users;
use Myth\Auth\Password;

class UserSeeder extends Seeder
{
    public function run()
    {
        $this->userModel = new Users();


        $this->db->query("insert into auth_groups (name,description) values ('admin','Admin')");
        $this->db->query("insert into auth_groups (name,description) values ('kepala-sekolah','Kepala Sekolah')");


        $data = [
            'nama_user' => "Admin",
            'username' => "admin",
            'password_hash' => Password::hash("12345678"),
            'active'    => "1"
        ];

        $this->userModel->withGroup("admin")->save($data);
    }
}
