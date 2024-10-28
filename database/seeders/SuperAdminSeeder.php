<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear el usuario Super Admin
        $superAdmin = User::create([
            'name' => 'Super Admin',
            'email' => 'admin@gmail.com',
            'password' => '12345678', // No cifrar aquí
        ]);

        // Crear el rol Super Admin
        $rolSuperAdmin = Role::create(['name' => 'Super Admin']);
        $permisosSuperAdmin = Permission::pluck('id', 'id')->all();
        $rolSuperAdmin->syncPermissions($permisosSuperAdmin);
        $superAdmin->assignRole($rolSuperAdmin->id);
    }
}
