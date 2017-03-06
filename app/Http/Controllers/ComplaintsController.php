<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use App\Complaint as Complaint;
use Carbon;
use App\Access;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;
use DB;

class ComplaintsController extends Controller
{

    public function index()
    {
        $ac = Access::getAccesos();
        return view('home', ['access' => $ac]);
    }

    public function guardar(){

        $var1 = $_POST['optionsRadios'];
        $var2 = $_POST['rut'];
        $var3 = $_POST['nombre'];
        $var4 = $_POST['direccion'];
        $var5 = $_POST['comuna'];
        $var6 = $_POST['correo'];
        $var7 = $_POST['telefono'];
        $var8 = $_POST['tipo_v'];
        $var9 = $_POST['patente'];
        $var10 = $_POST['asunto'];
        $var11 = $_POST['mensaje'];
        $var12 = 1;
        $var13 = $_POST['concession'];;

        DB::table('complaints')->insert([
            'type_contact' => $var1,
            'rut_person' => $var2,
            'name_person' => $var3,
            'address' => $var4,
            'city' => $var5,
            'email' => $var6,
            'phone' => $var7,
            'type_vehicle' => $var8,
            'pp_vehicle' => $var9,
            'subject' => $var10,
            'message' => $var11,
            'state' => $var12,
            'concession_idconcession' => $var13,
        ]);

        return back();

    }

    public function VallesBiobio()
    {
        return view('VallesBiobio.form');
    }

    public function RdelDesierto()
    {
        return view('RdelDesierto.form');
    }

    public function RdelLimari()
    {
        return view('RdelLimari.form');
    }

    public function VdelDesierto()
    {
        return view('VdelDesierto.form');
    }

    public function RdelAlgarrobo()
    {
        return view('RdelAlgarrobo.form');
    }

    public function rHggzTfqae()
    {
        $ac = Access::getAccesos();
        $complaints = Complaint::where('concession_idconcession', '1')->get();

        return view('VallesBiobio.index', [
            'complaints' => $complaints,
            'access' => $ac
        ]);
    }

    public function VVvarLnNDb()
    {
        $ac = Access::getAccesos();
        $complaints = Complaint::where('concession_idconcession', '2')->get();

        return view('RdelDesierto.index', [
            'complaints' => $complaints,
            'access' => $ac
        ]);
    }

    public function ajPqZqzAYd()
    {
        $ac = Access::getAccesos();
        $complaints = Complaint::where('concession_idconcession', '3')->get();

        return view('RdelLimari.index', [
            'complaints' => $complaints,
            'access' => $ac
        ]);
    }

    public function qPRxTCuQpe()
    {
        $ac = Access::getAccesos();
        $complaints = Complaint::where('concession_idconcession', '4')->get();

        return view('VdelDesierto.index', [
            'complaints' => $complaints,
            'access' => $ac
        ]);
    }

    public function J5apvq8zq()
    {
        $ac = Access::getAccesos();
        $complaints = Complaint::where('concession_idconcession', '5')->get();

        return view('RdelAlgarrobo.index', [
            'complaints' => $complaints,
            'access' => $ac
        ]);
    }

}
