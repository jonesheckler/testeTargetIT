<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        // seta todas as permissões para o admin e para o grupo diretoria
        $permissions = Permission::all();
        $role_admin = Role::findByName('admin');
        $role_user = Role::findByName('usuario');
        $role_admin->syncPermissions($permissions);

        // create admin
        $user = \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'mw10@mw10.com.br',
            'password' => bcrypt('12345678'),
            'telefone' => '54 1111-1111',
            'cpf' => '837.122.050-23'
        ]);
        $user->assignRole($role_admin);


        // create user
        $user = \App\Models\User::factory()->create([
            'name' => 'User',
            'email' => 'user@mw10.com.br',
            'password' => bcrypt('12345678'),
            'telefone' => '54 1111-1111',
            'cpf' => '664.289.960-14'
        ]);
        $user->assignRole($role_user);

    }
}
