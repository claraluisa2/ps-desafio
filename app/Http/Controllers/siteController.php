<?php

namespace App\Http\Controllers;
use App\Models\Produto;
use App\Models\Categoria;
use Illuminate\Http\Request;


class siteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $produtos = Produto::where('id','>', '7')->get();

        return view('site.index', compact('produtos'));
    }


    public function medidas()
    {


        return view('site.medidas');
    }

    public function produtos()

    {

        $produtos = Produto::all();
        $produtos->load('categorias');
        return view('site.produtos', compact('produtos'));



    }


}
