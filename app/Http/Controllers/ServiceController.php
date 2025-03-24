<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function stevedoring()
    {
        return view('services/stevedoring');
    }
    public function vesselAgency()
    {
        return view('services/vesselAgency');
    }
    public function chartering()
    {
        return view('services/chartering');
    }
    public function customClearance()
    {
        return view('services/customClearance');
    }
    public function warehousingStorage()
    {
        return view('services/warehousingStorage');
    }
    public function railHaulage()
    {
        return view('services/railHaulage');
    }
    public function roadHaulage()
    {
        return view('services/roadHaulage');
    }
    public function freightForwarding()
    {
        return view('services/freightForwarding');
    }
    public function cfs()
    {
        return view('services/cfs');
    }
    public function cranesAndForklifts()
    {
        return view('services/cranesAndForklifts');
    }
}
