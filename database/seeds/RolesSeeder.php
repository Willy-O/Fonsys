<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(['name' => 'Administrador']);
        $role->givePermissionTo(
            ['create beneficiaries', 'edit beneficiaries', 'delete beneficiaries',
             'create clousures', 'edit clousures', 'delete clousures',
             'create contracts', 'edit contracts', 'delete contracts',
             'create projectsData', 'edit projectsData', 'delete projectsData',
             'create projectsInfo', 'edit projectsInfo', 'delete projectsInfo',
             'create trackings', 'edit trackings', 'delete trackings',]);
        
        $role = Role::create(['name' => 'Gerente de proyecto']);
        $role->givePermissionTo(
            ['create projectsData', 'edit projectsData', 'delete projectsData']);

        $role = Role::create(['name' => 'Analista de gestión de proyectos']);
        $role->givePermissionTo(
            ['create projectsInfo', 'edit projectsInfo', 'delete projectsInfo']);

        // ***************************** CREAR ******************************************
        $role = Role::create(['name' => 'Gerente de planificación, presupuesto y organización']);
        // $role->givePermissionTo('');

        $role = Role::create(['name' => 'Consultor jurídico']);
        $role->givePermissionTo(
            ['create contracts', 'edit contracts', 'delete contracts',]);
        
        $role = Role::create(['name' => 'Coordinador de seguimiento y control']);
        $role->givePermissionTo(
            ['create trackings', 'edit trackings', 'delete trackings',]);
        
        $role = Role::create(['name' => 'Coordinador de cierre y difusión']);
        $role->givePermissionTo(
            ['create clousures', 'edit clousures', 'delete clousures',]);

        $role = Role::create(['name' => 'Auditoria']);
        // $role->givePermissionTo(
        //     ['solo vistas',]);
    }
}
