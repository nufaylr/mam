<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Apps;
use App\AppList;
use Jenssegers\Agent\Agent;

class appListController extends Controller
{
    /**
     * Checking for user auth.
    */

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $_appList = Apps::where('publish', 1)->orderBy('id', 'desc')->get();
        return view('home',['apps' => $_appList]);
    }

    public function appItem($aid) {
       $_diviseTyp = $this->detectDevice();

       //Geting App By Device       
      // $_appList = AppList::with('getAppList')->where('app_id', $aid)->get();
       //$_appType = AppList::with('getAppType')->where('app_id', $aid)->get();
       
       dd(AppList::with('getAppType')->get());

       return view('appdetails');
    }

    public function detectDevice() {
        //https://github.com/jenssegers/agent
        $agent = new Agent();
        if($agent->isMobile() || $agent->isTablet()){
            if($agent->is('android')){
                return 'android';
            }
            if($agent->is('iOS')){
                return 'ios';
            }
            return $agent->platform();
        }

        if($agent->isDesktop()){
            if($agent->is('Windows')){
                return 'windows';
            }
            if($agent->is('OS X')){
                return 'OSX';
            }
            return 'desktop';
        }
    }

}
