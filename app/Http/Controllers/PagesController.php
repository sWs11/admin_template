<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PagesController extends Controller
{
    public function index() {
        return view('pages.index');
    }

    public function dashboard() {
        return view('pages.dashboard');
    }

    public function page1() {

        $debug_data = [];

        $user = Auth::user();
//        $role = Role::create(['name' => 'Super admin']); // створити роль
//        $permission = Permission::create(['name' => 'Create users']); // створити доступ

        $role = Role::where('id', 1)->first();
        $permission = Permission::where('id', 1)->first();

//        $role->givePermissionTo($permission); // дати дозвіл $permission для ролі $role

        // get a list of all permissions directly assigned to the user
//        $permissionNames = $user->getPermissionNames(); // колекція імен всіх доступів
//        $permissions = $user->permissions; // колекція обєктів всіх доступів


//        $user->givePermissionTo('Can all'); // дати дозвіл користувачу
//        $user->revokePermissionTo('Can all'); // забрати дозвіл в користувача

//        $permissions = $user->getDirectPermissions();
//        $permissions = $user->getPermissionsViaRoles();
//        $permissions = $user->getAllPermissions();

//        $user->assignRole('Super admin'); // надати роль користувачеві

//        $is_have_can_all = $user->hasPermissionTo('Can all'); // перевірити чи має користувач доступ Can all

        $debug_data['$user->roles()'] = $user->roles;
        $debug_data['$user->getDirectPermissions()'] = $user->getDirectPermissions();
        $debug_data['$user->getPermissionsViaRoles()'] = $user->getPermissionsViaRoles();
        $debug_data['$user->getAllPermissions()'] = $user->getAllPermissions();
        $debug_data['$user->hasPermissionTo(\'edit articles\');'] = $user->hasPermissionTo('Can all');

        debug($debug_data);

        return view('pages.page_1');
    }

    public function page2() {
        return view('pages.page_2');
    }

    public function page3() {
        return view('pages.page_3');
    }

    public function page4() {
        return view('pages.page_4');
    }

    public function page5() {
        return view('pages.page_5');
    }
}
