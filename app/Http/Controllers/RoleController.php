<?php

namespace App\Http\Controllers;

use App\Forms\RoleForm;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::with('users')->paginate();

        return view('admin.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $form = \FormBuilder::create(RoleForm::class, [
            'url' => route('admin.roles.store'),
            'method' => 'POST'
        ]);

        return view('admin.roles.create', compact('form'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        \Validator::make($data, [
            'nome' => ['required', 'string', 'max:255'],
            'system' => ['required', 'string', 'max:20', 'unique:roles'],
        ], [
            'nome.required' => 'Digite o nome do sistema',
            'nome.max' => 'O nome não pode ser maior que 255 caracteres',
            'system.unique' => 'Esta sigla já está em uso por outro sistema',
            'system.max' => 'A sigla deve ser curta',
        ])->validate();
        Role::create($data);

        $request->session()->flash('msg', 'Sistema criado com sucesso');
        return redirect()->route('admin.roles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        return view('admin.roles.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        $form = \FormBuilder::create(RoleForm::class, [
            'url' => route('admin.roles.update', ['role' => $role->id]),
            'method' => 'PUT',
            'model' => $role
        ]);

        return view('admin.roles.edit', compact('form', 'role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        $data = $request->all();
        \Validator::make($data, [
            'nome' => ['required', 'string', 'max:255'],
            'system' => ['required', 'string', 'max:20',Rule::unique('roles')->ignore($role->id)],
        ], [
            'nome.required' => 'Digite o nome do sistema',
            'nome.max' => 'O nome não pode ser maior que 255 caracteres',
            'system.unique' => 'Esta sigla já está em uso por outro sistema',
            'system.max' => 'A sigla deve ser curta',
        ])->validate();

        $role->fill($data);
        $role->save();

        $request->session()->flash('msg', 'Registro atualizado');
        return redirect()->route('admin.roles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Role $role)
    {
        $role->users()->detach();
        $role->delete();

        $request->session()->flash('msg', 'Registro deletado');
        return redirect()->route('admin.roles.index');
    }
}
