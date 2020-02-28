<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class LicenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('licencias')->insert([
            'nombre' => 'Cesar',
            'apellido' => 'Perez Lopez',
            'curp' => 'PELC880426HYNCL970',
            'nacionalidad' => 'Mexicana',
            'fecha_expedicion' => '2020/01/03',
            'fecha_vencimiento' => '2030/01/03',
            'periodo' => '5',
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);
    }
}
