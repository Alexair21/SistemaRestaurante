<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission; // Add this line

class SeederTablePermissions extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permisos = [
            //Operaciones sobre la tabla roles
            'acciones-admin',
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',

            //Operaciones
            'ver-busquedas',

            //acciones expediente
            'ver-expediente',
            'crear-expediente',
            'editar-expediente',
            'borrar-expediente',

            //acciones proyecto
            'ver-proyecto',
            'crear-proyecto',
            'editar-proyecto',
            'borrar-proyecto',

            //Acciones internas
            'acciones-internas',

            'acciones-externas',

            //Acciones para carpeta y archivo
            'acciones-carpeta-archivo',
            'acciones-eliminar-carpeta-archivo'
        ];

        foreach ($permisos as $permiso) {
            Permission::create(['name' => $permiso]);
        }

    }
}
