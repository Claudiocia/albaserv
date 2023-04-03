<?php

namespace App\Forms;

use App\Models\Predio;
use Kris\LaravelFormBuilder\Form;

class AmbientesForm extends Form
{
    public function buildForm()
    {
        $tipo = [
            'Administrativo' => 'Administrativo',
            'Legislativo' => 'Legislativo',
            'Gabinete' => 'Gabinete',
            'Operacional' => 'Operacional',
        ];
        $this
            ->add('chave', 'hidden', [
                'value' => 'Adm ALBA',
            ])
            ->add('nome', 'text', [
                'label' => 'Nome do setor / local',
                'label_attr' => ['class' => 'control-label required'],
                'attr' => [
                    'required' => 'required',
                    'placeholder' => 'digite o nome do setor ou do espaço a ser cadastrado',
                ],
            ])
            ->add('tipo', 'choice', [
                'label' => 'Tipo de uso do espaço',
                'label_attr' => ['class' => 'control-label required'],
                'attr' => ['required' => 'required'],
                'choices' => $tipo,
                'choice_options' => [
                    'wrapper' => ['class' => 'choice-wrapper-my'],
                    'label_attr' => ['class' => 'label-class'],
                ],
                'selected' => $this->model ? $this->model->tipo : '',
                'multiple' => false,
                'expanded' => true,
            ])
            ->add('predio', 'choice', [
                'label' => 'Prédio',
                'label_attr' => ['class' => 'control-label required'],
                'attr' => ['required' => 'required', 'id' => 'predio'],
                'choices' => Predio::pluck('nome', 'id')->toArray(),
                'choice_options' => [
                    'wrapper' => ['class' => 'wrapper'],
                    'label_attr' => ['class' => 'label-class'],
                ],
                'selected' => $this->model->andar->ala->predio->id,
                'multiple' => false,
                'expanded' => false,
            ])
            ->add('ala', 'choice', [
                'label' => 'Ala',
                'label_attr' => ['class' => 'control-label required'],
                'attr' => ['id' => 'ala'],
                'choices' => [],
                'choice_options' => [
                    'wrapper' => ['class' => 'wrapper'],
                    'label_attr' => ['class' => 'label-class'],
                ],
                'empty_value' => $this->model->andar->ala->nome,
                'selected' => $this->model->andar->ala->id,
                'multiple' => false,
                'expanded' => false,
            ])
            ->add('andar_id', 'choice', [
                'label' => 'Andar',
                'label_attr' => ['class' => 'control-label required'],
                'attr' => ['id' => 'andar'],
                'choices' => [],
                'choice_options' => [
                    'wrapper' => ['class' => 'wrapper'],
                    'label_attr' => ['class' => 'label-class'],
                ],
                'empty_value' => $this->model->andar->nome,
                'selected' => $this->model->andar->id,
                'multiple' => false,
                'expanded' => false,
            ])
            ->add('num', 'text')
            ->add('tag', 'text');
    }
}
