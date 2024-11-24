<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProdutoController extends Controller
{
    public function index()
    {
        $response = Http::get('http://localhost:8080/produtos');
        $produtos = $response->json();

        return view('produtos.index', compact('produtos'));
    }

    public function store(Request $request)
    {
        $response = Http::post('http://localhost:8080/produtos', $request->all());

        return redirect('/')->with('success', 'Produto adicionado com sucesso!');
    }

    public function edit($id)
    {
        $response = Http::get("http://localhost:8080/produtos/{$id}");
        $produto = $response->json();

        return view('produtos.edit', compact('produto'));
    }

    public function update(Request $request, $id)
    {
        Http::put("http://localhost:8080/produtos/{$id}", $request->all());

        return redirect('/')->with('success', 'Produto atualizado com sucesso!');
    }

    public function destroy($id)
    {
        Http::delete("http://localhost:8080/produtos/{$id}");

        return redirect('/')->with('success', 'Produto excluído com sucesso!');
    }
}
