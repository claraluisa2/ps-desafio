<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ProdutoController extends Controller
{
    private Produto $produtos;

    public function construct(Produto $produtos)
    {
        $this-> produtos - $produtos;

    }


    public function index()
    {
        $produtos = Produto::all();

        return view('produto.index', compact('produtos'));
    }


    public function create()
    {
        $categorias = Categoria::all();
        return view('produto.crud', compact('categorias'));
    }


    public function store(Request $request)
    {
        $rules = [
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string|max:255',
            'preco'=> 'required|numeric',
            'quantidade'=> 'required',
            'categoria_id'=> 'required',
            ];

        $data = $request->validate($rules);

        if ($request->hasFile('imagem')){
            $data['imagem'] = $request->file('imagem')->store('produtos', 'public');
        }

        Produto::create($data);

        return redirect()->route('produto.index')->with('sucess', 'Produto cadastrado com sucesso!');

    }


    public function show($id)
    {
        $produto = Produto::find($id);
        $produto->load('categorias');
        return response()->json($produto);
    }


    public function edit($id)
    {
        $produto = Produto::find($id);
        $categorias = Categoria::all();

        return view('produto.crud', compact('produto', 'categorias'));
    }


    public function update(Request $request, $id)
    {
        $rules = [
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string|max:255',
            'preco'=> 'required|numeric',
            'quantidade'=> 'required',
            'categoria_id'=> 'required',
            ];

        $data = $request->validate($rules);

        $produto = Produto::find($id);

        if ($request->hasFile('imagem')){
            Storage::delete('public/'.$produto->imagem);
            $data['imagem'] = $request->file('imagem')->store('produtos', 'public');
        }

        $produto->update($data);

        return redirect()->route('produto.index')->with('sucess', 'Produto atualizado com sucesso!');

    }

    public function destroy($id)
    {
        $produto = Produto::find($id);
        Storage::delete('public/'.$produto->imagem);
        $produto->delete();

        return redirect()->route('produto.index')->with('sucess', 'Produto excluído com sucesso!');

    }
}
