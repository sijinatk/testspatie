<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
    	//$role1 = Role::create(['name' => 'ms_owner','tenent_id' => '3']);
    	//$role2 = Role::create(['name' => 'ms_admin','tenent_id' => '3']);
        
        //$permission1 = Permission::create(['name' => 'change location','permission' => 'change location']);

    	//$role1=Role::find(3);
    	/*$permission1 =Permission::find(3);
        $role1->givePermissionTo($permission1);*/

        /*$permission2 =Permission::find(4);
        $role1->givePermissionTo($permission2);*/
        
       // $permissions =Permission::all();
        //$role1->syncPermissions($permissions);
		//$permission1->assignRole($role2);

		
      /*  $users = User::find(1);
		$permissionNames = $users->getPermissionsViaRoles();
		print_r($permissionNames);*/

		/*$users = User::role('mindster_admin')->get();
		print_r($users);*/
		$user=User::find(2);
		$user->givePermissionTo('aufait_admin');
		//$user->assignRole('aufait_admin');
    	  return view('admin/dashboard');
	}

}
