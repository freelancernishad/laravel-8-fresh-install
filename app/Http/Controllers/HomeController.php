<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use SimpleSoftwareIO\QrCode\Facades\QrCode;

use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    // php artisan make:export UsersExport --model=User

    public function index()
    {

        //return QrCode::generate('Make me into a QrCode!');
        return view('admin.index');





           // return Excel::download(new UsersExport, 'users.xlsx');



        return view('home');

    }



}
