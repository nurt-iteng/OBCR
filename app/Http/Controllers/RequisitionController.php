<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequisitionController extends Controller
{
    public function index () {
        return view('admin.requisition.show-requisition');
    }
    public function demo () {
        return view('admin.requisition.test-page');
    }




}
