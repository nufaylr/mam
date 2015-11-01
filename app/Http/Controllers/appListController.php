<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Apps;
use App\Types;
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
        $appList = Apps::where('publish', 1)->orderBy('id', 'desc')->get();
        return view('home',['apps' => $appList]);
    }

    public function appItem($aid) {
       $getAppsRelativeToId = Apps::with('getAppType')->where('id', $aid)->where('publish', 1)->get();
       $deviceListed = $this->checkForDeviceIsListed();
       $appLinkPath = $this->getDeviceItem($deviceListed['id'], $getAppsRelativeToId);
       return view('appdetails', ['appsDetails' => $getAppsRelativeToId[0]['attributes'], 'linkPath' => $appLinkPath]);
    }

    public function checkForDeviceIsListed() {
        $getUsersDeviceTyp = $this->detectDevice();
        $deviceDatabase = Types::where('platform', $getUsersDeviceTyp)->get();
        $sendData = array();
        if(  isset($deviceDatabase->lists('id')[0]) ){
            $sendData['platform'] = $deviceDatabase->lists('platform')[0];
            $sendData['id'] = $deviceDatabase->lists('id')[0];
        } else {
            $sendData['platform'] = '';
            $sendData['id'] = '';
        }
        return $sendData;
    }

    public function getDeviceItem($deviceListedId, $getAppsRelativeToId) {
        foreach ($getAppsRelativeToId as $array) {
            foreach ($array['relations'] as $object) {
                foreach ($object as $value) {
                   if($value['attributes']['id'] == $deviceListedId){
                        return 'mdm/'.$array['attributes']['app_slug'].'/'.$value['attributes']['platform'].'/'.$array['attributes']['app_slug'].$value['attributes']['file_extension'];
                   }
                }
            }
        }
        return 'mdm/_none';
    }

    public function detectDevice() {
        // @ https://github.com/jenssegers/agent
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
