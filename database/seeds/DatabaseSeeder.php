<?php


use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);

        $roleSuperAdmin = Role::create(['name' => 'SuperAdmin']);
        $roleAdmin = Role::create(['name' => 'Admin']);
        $roleUser = Role::create(['name' => 'Usuario']);

        Permission::create(['name' => 'ver.verMenu'])->syncRoles([$roleSuperAdmin, $roleAdmin]);
        Permission::create(['name' => 'ver.Usuarios'])->syncRoles([$roleSuperAdmin, $roleAdmin]);
        Permission::create(['name' => 'ver.tablas'])->syncRoles([$roleSuperAdmin]);
        Permission::create(['name' => 'ver.menus'])->syncRoles([$roleSuperAdmin, $roleAdmin]);

        User::create([
            'name' => 'Aguilar',
            'email' => 'bgarcia3@gmail.com',
            'password' => bcrypt('12345678'),

        ])->assignRole($roleSuperAdmin);

        User::create([
            'name' => 'Usuario',
            'email' => 'bbgarcia3@gmail.com',
            'password' => bcrypt('12345678'),

        ])->assignRole($roleUser);
    }


}
