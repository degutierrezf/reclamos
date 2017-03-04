<?php

namespace App\Http\Controllers;

use App\Complaint as Complaint;
use Carbon;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;
use DB;



class ComplaintsController extends Controller
{

    public function index()
    {
        return view('home');
    }

    public function VallesBiobio()
    {

        $complaints = Complaint::all();

        return view('VallesBiobio.index',[
            'complaints'=>$complaints
        ]);
    }

}
