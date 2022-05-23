<?php

namespace App\Http\Controllers;

use App\Models\Noticias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index() {
        $noticias = Noticias::select('noticias.*','categorias.id as cid','categorias.categoria',DB::RAW('date_format(noticias.data,"%d/%m/%Y") data1'))
            ->join('categorias','categorias.id','=','noticias.categorias_id')
            ->orderby('data','desc')
            ->paginate(3);
        return view('home',['noticias'=>$noticias]);
    }
}
