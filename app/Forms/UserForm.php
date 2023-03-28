<?php

namespace App\Forms;

use App\Models\Role;
use Kris\LaravelFormBuilder\Form;

class UserForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text',[
                'label' => 'Nome',
                'label_attr' => ['class' => 'control-label required'],
                'attr' => [
                    'oninput' => 'handleInput(event)',
                    'required' => 'required',
                    'placeholder' => 'digite o nome',
                ],
            ])
            ->add('cpf', 'text', [
                'label' => 'CPF',
                'label_attr' => ['class' => 'control-label required'],
                'attr' => [
                    'required' => 'required',
                    'id' => 'cpf',
                    'placeholder' => 'digite o cpf apenas números'
                ],
            ])
            ->add('email', 'email', [
                'label' => 'E-mail',
                'label_attr' => ['class' => 'control-label required'],
                'attr' => [
                    'required' => 'required',
                    'id' => 'email',
                    'placeholder' => 'digite o seu email'
                ],
            ])
            ->add('celular', 'text', [
                'label' => 'Celular',
                'label_attr' => ['class' => 'control-label required'],
                'attr' => ['required' => 'required'],
            ])
            ->add('cadastro', 'text', [
                'label' => 'Cadastro',
                'label_attr' => ['class' => 'control-label required'],
                'attr' => ['required' => 'required'],
            ])
            ->add('lotacao', 'text', [
                'label' => 'Setor',
                'label_attr' => ['class' => 'control-label required'],
                'attr' => ['required' => 'required'],
            ])
            ->add('ramal', 'text', [
                'label' => 'Ramal',
                'label_attr' => ['class' => 'control-label required'],
                'attr' => ['required' => 'required', 'placeholder' => 'digite o seu ramal'],
            ])
            ->add('roles', 'choice', [
                'label' => 'Nível de acesso',
                'label_attr' => ['class' => 'control-label required'],
                'attr' => ['required' => 'required'],
                'choices' => Role::pluck('system', 'id')->toArray(),
                'choice_options' => [
                    'wrapper' => ['class' => 'wrapper'],
                    'label_attr' => ['class' => 'label-class'],
                ],
                'selected' => $this->model ? $this->model->roles->pluck('id')->toArray() : '',
                'multiple' => true,
                'expanded' => true,
            ]);
    }
}
