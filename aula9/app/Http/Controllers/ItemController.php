<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // listar todos os items do banco de dados
        return Item::orderByDesc('id')->paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // criar um item
        // validar os valores
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100']
        ]);

        // chamar o model
        $item = Item::create($validated);

        // retornar o item
        return response()->json($item, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        // busca primeiro de acordo com o valor
        $item = Item::find($id);

        // valida se existe na tabela
        if (!$item) {
            return response()->json(['message' => 'Item não encontrado'], 404);
        }

        return $item;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(int $id, Request $request)
    {
        // busca primeiro de acordo com o valor
        $item = Item::find($id);

        // valida se existe na tabela
        if (!$item) {
            return response()->json(['message' => 'Item não encontrado'], 404);
        }

        // validar os valores
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100']
        ]);

        // atualizar o objeto
        $item = $item->update($validated);

        return $item;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(int $id)
    {
        // busca primeiro de acordo com o valor
        $item = Item::find($id);

        // valida se existe na tabela
        if (!$item) {
            return response()->json(['message' => 'Item não encontrado'], 404);
        }

        // deletar um valor
        $item->delete();

        return response()->noContent();
    }
}
