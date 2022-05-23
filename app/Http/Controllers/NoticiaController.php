<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticias;
use Illuminate\Support\Facades\DB;

class NoticiaController extends Controller
{
    //
    public function categorias($id) {
        $noticias = Noticias::select('noticias.*','categorias.id as cid','categorias.categoria',
            DB::RAW('date_format(noticias.data,"%d/%m/%Y") data1'))
            ->join('categorias','categorias.id','=','noticias.categorias_id')
            ->where('noticias.categorias_id','=',$id)
            ->orderby('data','desc')
            ->paginate(3);
        return view('categorias',["noticias"=>$noticias]);
    }

    public function noticia($id) {
        $noticia = Noticias::select('noticias.*','categorias.id as cid','categorias.categoria',
            DB::RAW('date_format(noticias.data,"%d/%m/%Y") data1'))
            ->join('categorias','categorias.id','=','noticias.categorias_id')
            ->where('noticias.id','=',$id)
            ->orderby('data','desc')
            ->first();
        return view('noticia',["noticia"=>$noticia]);
    }
}
