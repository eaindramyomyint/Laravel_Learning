<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index() {
        return view ('form');
    }
    public function getData(Request $req) {

        $searchName = $req->name;
        $searchEmail = $req->email;
        $dateFrom = $req->datefrom;
        $dateTo = $req->dateto;

        $data = DB::tabel('users')
                ->select ( `id`, `name`, `email`, `created_at`, `updated_at`)
                ->where('name','LIKE',"%{$searchName}%")
                ->where('email','LIKE',"%{$searchEmail}%")
                ->whereBetween('created_at',[$dateFrom."00:00:00",$dateTo."23:59:59"])
                ->get();
                
        return $data;
    }
}
