<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequisitionController extends Controller
{
    public function showExportForm () {
        return view('admin.requisition.export-requisition');
    }
    public function showImportForm () {
        return view('admin.requisition.import-requisition');
    }
    public function showDepotToDepotForm () {
        return view('admin.requisition.depot-to-depot');
    }
    public function showEntireFactoryForm () {
        return view('admin.requisition.entire-factory');
    }












    public function demo () {
        return view('admin.requisition.test-page');
    }




}
