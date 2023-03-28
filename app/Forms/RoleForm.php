<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class RoleForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('nome', 'text', [
                'label' => 'Sistema',
                'label_attr' => ['class' => 'control-label required'],
                'attr' => [
                    'required' => 'required',
                    'id' => 'nome',
                    'placeholder' => 'digite o nome do sistema'
                ],
            ])
            ->add('system', 'text', [
                'label' => 'Sigla do sistema',
                'label_attr' => ['class' => 'control-label required'],
                'attr' => [
                    'required' => 'required',
                    'id' => 'system',
                    'placeholder' => 'digite uma sigla para o sistema'
                ],
            ]);
    }
}
