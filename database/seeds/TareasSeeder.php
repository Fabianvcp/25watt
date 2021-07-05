<?php

use App\Tarea;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class TareasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tarea::truncate();
        User::truncate();
        DB::table('tareas')->insert([
            [
                'tarea' => 'Entrega de presupuesto',
                "created_at" => Carbon::now()->subDay()
            ]
        ]);

        $admin = new User;
        $admin->name = 'Administrador';
        $admin->email = 'admin@gmail.com';
        $admin->password = '123123';
        $admin->save();
    }
}
