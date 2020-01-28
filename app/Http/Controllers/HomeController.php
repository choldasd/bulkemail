<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\SendEmail;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
	
	public function sendemail(Request $request){
		if($request->isMethod('get')){
			return view('create');
		}else{
			ini_set('max_execution_time','300');
			$emails = $request->emails;
			$emails_arr = explode(",",$emails);
			
			foreach($emails_arr as $key => $email){
				//$abc = SendEmail::dispatchNow($email); ->addSeconds(120)
				$emailJob = (new SendEmail($email))->delay(Carbon::now()->addSeconds(5));
				dispatch($emailJob);
			}
			dd("Done");
			
		}
	}
	
	
}
