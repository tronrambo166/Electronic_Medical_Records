<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Admin::create([
        'name' => 'admin',
        'username' => 'admin',
        'email' => 'admin@gmail.com',
        'password' => bcrypt('admin'),
       ]);
    }
}
