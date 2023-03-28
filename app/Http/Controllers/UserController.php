<?php

namespace App\Http\Controllers;

use App\Forms\UserForm;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::paginate();

        return view('admin.users.index', compact('users'));
    }

    public function admin()
    {
        return view('admin.dashboard-admin');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $form = \FormBuilder::create(UserForm::class, [
            'url' => route('admin.users.store'),
            'method' => 'POST'
        ]);

        return \view('admin.users.create', compact('form'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        \Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'roles' => ['required'],
            'cpf' => ['required', 'cpf', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'cadastro' => ['required', 'unique:users'],
            'celular' => ['required', 'string', 'unique:users'],
            'ramal' => ['required', 'string'],
            'lotacao' => ['required', 'string', 'max:255'],
        ], [
            'roles.required' => 'Escolha pelo menos uma opção do campo Nível de acesso',
            'cpf.unique' => 'Este CPF já está cadastrado em nosso sistema',
            'cadastro.unique' => 'Este usuário já está cadastrado em nosso sistema',
            'email.unique' => 'Este email já está cadastrado em nosso sistema',
            'celular.unique' => 'Este celular já está cadastrado em nosso sistema',
        ])->validate();

        $user = User::create([
            'name' => $data['name'],
            'cpf' => $data['cpf'],
            'email' => $data['email'],
            'cadastro' => $data['cadastro'],
            'celular' => $data['celular'],
            'lotacao' => $data['lotacao'],
            'ramal' => $data['ramal'],
            'password' => Hash::make('password'),
        ]);
        $user->roles()->attach($data['roles']);

        $request->session()->flash('msg', 'Usuário Criado com sucesso');
        return redirect()->route('admin.users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $form = \FormBuilder::create(UserForm::class, [
            'url' => route('admin.users.update', ['user' => $user->id]),
            'method' => 'PUT',
            'model' => $user
        ]);

        return \view('admin.users.edit', compact('form', 'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $data = $request->all();
        \Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'roles' => ['required'],
            'cpf' => ['required', 'cpf', Rule::unique('users')->ignore($user->id)],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'cadastro' => ['required', Rule::unique('users')->ignore($user->id)],
            'celular' => ['required', 'string', Rule::unique('users')->ignore($user->id)],
            'ramal' => ['required', 'string'],
            'lotacao' => ['required', 'string', 'max:255'],
        ], [
            'roles.required' => 'Escolha pelo menos uma opção do campo Nível de acesso',
            'cpf.unique' => 'Este CPF já está cadastrado em nosso sistema',
            'cadastro.unique' => 'Este usuário já está cadastrado em nosso sistema',
            'email.unique' => 'Este email já está cadastrado em nosso sistema',
            'celular.unique' => 'Este celular já está cadastrado em nosso sistema',
        ])->validate();
        $user->roles()->sync($data['roles']);
        $user->fill($data);
        $user->save();

        $request->session()->flash('msg', 'Registro atualizado');
        return redirect()->route('admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request  $request, User $user)
    {
        $user->roles()->detach();
        $user->delete();

        $request->session()->flash('msg', 'Registro deletado');
        return redirect()->route('admin.users.index');
    }
}
