<?php

namespace App\Http\Controllers;
use App\User;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    //
	public function testconnect() {
		try {
			DB::connection()->getPdo();
			if (DB::connection()->getDatabaseName()) {
				echo 'Yes! Successfully connected to the DB: ' . DB::connection()->getDatabaseName();
			} else {
				die('Could not find the database. Please check your configuration.');
			}
		} catch (\Exception $e) {
			die('Could not open connection to database server.  Please check your configuration.');
		}
	}
	public function list(){

		$users=User::paginate(3);
		//dd( $user3)
		return view('user.list_users')->with('users',$users);
	}
}
