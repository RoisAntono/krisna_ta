<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProdukModel;
use App\Models\User;
use App\Models\TransaksiModel;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name' => 'Rois',
            'last_name' => 'Antono',
            'username' => 'rois123',
            'password' => bcrypt('rois123'),
            'alamat' => 'Jl.Jakarta',
            'email' => 'rois@gmail.com',
            'telepon' => '082523123232',
            'level_admin' => '1'
        ]);

        User::create([
            'first_name' => 'Krisna',
            'last_name' => 'Dewi Rahmawati',
            'username' => 'krisna123',
            'password' => bcrypt('krisna123'),
            'alamat' => 'Jl.Soekarno',
            'email' => 'krisna@gmail.com',
            'telepon' => '082521321345',
            'level_admin' => '0'
        ]);

        ProdukModel::create([
            'nama' => 'Mouse',
            'kategori' => 'Elektronik',
            'deskripsi' => 'Tikus',
            'harga' => '25000',
        ]);

        ProdukModel::create([
            'nama' => 'Keyboard',
            'kategori' => 'Elektronik',
            'deskripsi' => 'Keyboard eRGiBi',
            'harga' => '300000',
        ]);

        ProdukModel::create([
            'nama' => 'Charger',
            'kategori' => 'Elektronik',
            'deskripsi' => 'Fash Charger',
            'harga' => '50000',
        ]);

        ProdukModel::create([
            'nama' => 'Monitor',
            'kategori' => 'Elektronik',
            'deskripsi' => 'Monitor LED',
            'harga' => '2300000',
        ]);
        
        TransaksiModel::create([
            'pembeli' => 'Krisna',
            'produk_id' => '1',
        ]);
        
        TransaksiModel::create([
            'pembeli' => 'Rois',
            'produk_id' => '2',
        ]);
        
        TransaksiModel::create([
            'pembeli' => 'Hasan',
            'produk_id' => '4',
        ]);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
