<?php
namespace App\Http\Controllers;
use Auth;
use Illuminate\Support\Facades\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\RedirectResponse;
use DB;
use Session;
use App\FMSUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
class LoginController extends Controller
{
	public function getHomepage(){
		try {
		    DB::connection()->getPdo();
		} catch (\Exception $e) {
		    die("Could not connect to the database.  Please check your configuration.");
		}
		return view('login');
	}
	public function login(){
	 	$inputs = array(
    	 		"username" => Input::get('email'),
    	 		"password" => Input::get('password')
    	 		);
    	 	if(($user = FMSUsers::where('username', '=',$inputs['username'])->first())&&(Hash::check($inputs['password'], $user->password))){
    	 		 $role = DB::table('dvUsers')->where('username', $inputs['username'])->value('UserType');
         //         $userDesignation = DB::table('fms_users')->where('Username', $inputs['username'])->value('Designation');
         //         $userlevel = DB::table('fms_users')->where('Username', $inputs['username'])->value('Userlevel');
                 $loggedusername = DB::table('dvUsers')->where('username', $inputs['username'])->value('username');
                 $dbfname = DB::table('dvUsers')->where('username', $inputs['username'])->value('Firstname');
                 $dblname = DB::table('dvUsers')->where('username', $inputs['username'])->value('Lastname');
                 $dbname = $dbfname.' '.$dblname;
    	 		 	if($role=='Admin'){
                        Session::put('fullname', $dbname);
                        Session::put('username', $loggedusername);
                       return response()->json(['redirect'=> 'dashboard']);
                    }
    	 	}else{
    	 		return response()->json(['error'=> 'Wrong Credentials Entered!'],500);
    	 	}    	 	
    }
    public function getLogout()
    {
        Auth::logout();
        Session::flush();
        return redirect('/');
    }

}