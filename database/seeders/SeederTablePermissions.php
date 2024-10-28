<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class SeederTablePermissions extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permisos = [
            // Operaciones sobre la tabla roles
            'acciones-admin',
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',

            // Acciones usuarios
            'ver-usuario',
            'crear-usuario',
            'editar-usuario',
            'borrar-usuario',

            // Acciones pedidos
            'ver-pedido',
            'crear-pedido',
            'editar-pedido',
            'borrar-pedido',

            // Acciones personal
            'ver-personal',
            'crear-personal',
            'editar-personal',
            'borrar-personal',

            // Acciones reportes
            'ver-reporte',
            'crear-reporte',
            'editar-reporte',
            'borrar-reporte',

            // Acciones platillos
            'ver-platillo',
            'crear-platillo',
            'editar-platillo',
            'borrar-platillo',
        ];

        foreach ($permisos as $permiso) {
            Permission::create(['name' => $permiso]);
        }
    }
}
