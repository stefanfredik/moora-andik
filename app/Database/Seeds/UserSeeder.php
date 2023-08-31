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
        $this->db->query("insert into auth_groups (name,description) values ('kepala-lurah','Kepala Lurah')");
        $this->db->query("insert into auth_groups (name,description) values ('pendamping-pkh','Pendamping PKH')");

        $data = [
            'nama_user' => "Admin",
            'username' => "admin",
            'password_hash' => Password::hash("12345678"),
            'active'    => "1"
        ];

        $this->userModel->withGroup("admin")->save($data);
    }
}
