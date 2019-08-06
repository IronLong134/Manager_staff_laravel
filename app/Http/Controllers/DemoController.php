<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DemoController extends Controller
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
}
