<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KomikSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'judul' => 'Naruto',
                'slugh' => 'naruto',
                'penulis' => 'Masashi Kishimoto',
                'penerbit' => 'Shonen Jump',
                'sampul' => 'naruto.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'judul' => 'One Piece',
                'slugh' => 'one-piece',
                'penulis' => 'Eichiro Oda',
                'penerbit' => 'Gramedia',
                'sampul' => 'onepiece.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ];

        // Insert data
        $this->db->table('komik')->insertBatch($data);
    }
}
