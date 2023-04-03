<?php

namespace App\Http\Controllers;

use App\Forms\AlebrasForm;
use App\Models\Alebra;
use Illuminate\Http\Request;

class AlebraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alebras = Alebra::orderBy('id')->get();

        return view('pesq.alebras.index', compact('alebras'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $form = \FormBuilder::create(AlebrasForm::class, [
           'url' => route('pesq.alebras.store'),
           'method' => 'POST',
        ]);

        return view('pesq.alebras.create', compact('form'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        \Validator::make($data, [
            'chave' => ['required', 'string', 'max:255'],
            'nome' => ['required', 'string', 'max:255'],
            'sigla' => ['required', 'string', 'max:12'],
            'end' => ['required', 'string', 'max:255'],
            'cidade' => ['required', 'string', 'max:255'],
            'uf' => ['required', 'max:2'],
            'url' => ['required', 'max:255', 'url'],
            'tag' =>['required'],
        ])->validate();

        Alebra::create($data);

        $request->session()->flash('msg', 'Unidade Legislativa criada com sucesso');
        return redirect()->route('pesq.alebras.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Alebra $alebra)
    {
        return view('pesq.alebras.show', compact('alebra'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alebra $alebra)
    {
        $form = \FormBuilder::create(AlebrasForm::class, [
            'url' => route('pesq.alebras.update', ['alebra' => $alebra->id]),
            'method' => 'PUT',
            'model' => $alebra,
        ]);

        return view('pesq.alebras.edit', compact('form', 'alebra'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alebra $alebra)
    {
        $data = $request->all();

        \Validator::make($data, [
            'nome' => ['required', 'string', 'max:255'],
            'sigla' => ['required', 'string', 'max:12'],
            'end' => ['required', 'string', 'max:255'],
            'cidade' => ['required', 'string', 'max:255'],
            'uf' => ['required', 'max:2'],
            'url' => ['required', 'max:255', 'url'],
            'tag' =>['required'],
        ])->validate();

        $alebra->fill($data);
        $alebra->save();

        $request->session()->flash('msg', 'Registro atualizado');
        return redirect()->route('pesq.alebras.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Alebra $alebra)
    {
        $alebra->delete();

        $request->session()->flash('msg', 'Registro deletado');
        return redirect()->route('pesq.alebras.index');
    }
}
