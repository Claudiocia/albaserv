<?php

namespace App\Http\Controllers;

use App\Forms\AmbientesForm;
use App\Models\Ala;
use App\Models\Ambiente;
use App\Models\Andar;
use App\Models\Predio;
use Illuminate\Http\Request;

class AmbienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ambientes = Ambiente::with('andar')->get();

        return view('pesq.ambientes.index', compact('ambientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $predios = Predio::all();
        return view('pesq.ambientes.create', compact('predios'));
    }

    public function getAlas(int $id)
    {
        $alas = Ala::wherePredioId($id)->pluck('nome', 'id')->toArray();
        return \Response::json($alas);
    }

    public function getAndars(int $id)
    {
        $andars = Andar::whereAlaId($id)->pluck('nome', 'id')->toArray();
        return \Response::json($andars);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        \Validator::make($data, [
            'nome' => ['required', 'string', 'max:255'],
            'tipo' => ['required'],
            'num' => $data['tipo'] == 'Gabinete' && ($data['predio'] == 3 || $data['predio'] == 4) ? ['required'] : [],
        ], [
            'nome.required' => 'Informe o nome do setor ou local que será cadastrado',
            'tipo.required' => 'É obrigatório escolher um tipo de uso para o local cadastrado',
            'num.required' => 'Para cadastrar um gabinete nos Edf. Wilson Lins ou Nelson David Ribeiro precisa colocar o número'
        ])->validate();
        if ($data['num'] == null){
            $data['num'] = 's/n';
        }

        $predio = Predio::whereId($data['predio'])->first();
        $data['tag'] = $data['nome'].' '.$data['tipo'].' '.$predio->nome;

        Ambiente::create($data);

        $request->session()->flash('msg', 'Ambiente criado com sucesso');
        return redirect()->route('pesq.ambientes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ambiente $ambiente)
    {
        return view('pesq.ambientes.show', compact('ambiente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ambiente $ambiente)
    {
        $predios = Predio::all();
        return view('pesq.ambientes.edit', compact( 'ambiente', 'predios'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ambiente $ambiente)
    {
        $data = $request->all();
        \Validator::make($data, [
            'nome' => ['required', 'string', 'max:255'],
            'tipo' => ['required'],
            'num' => $data['tipo'] == 'Gabinete' && ($data['predio'] == 3 || $data['predio'] == 4) ? ['required'] : [],
        ], [
            'nome.required' => 'Informe o nome do setor ou local que será cadastrado',
            'tipo.required' => 'É obrigatório escolher um tipo de uso para o local cadastrado',
            'num.required' => 'Para cadastrar um gabinete nos Edf. Wilson Lins ou Nelson David Ribeiro precisa colocar o número'
        ])->validate();
        if ($data['num'] == null){
            $data['num'] = 's/n';
        }
        $predio = Predio::whereId($data['predio'])->first();
        $data['tag'] = $data['nome'].' '.$data['tipo'].' '.$predio->nome;
        $ambiente->fill($data);
        $ambiente->save();

        $request->session()->flash('msg', 'Registro atualizado');
        return redirect()->route('pesq.ambientes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Ambiente $ambiente)
    {
        $ambiente->delete();
        $request->session()->flash('msg', 'Registro deletado');
        return redirect()->route('pesq.ambientes.index');
    }
}
