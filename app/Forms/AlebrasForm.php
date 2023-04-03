<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class AlebrasForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('chave', 'hidden', [
                'value' => 'ASSEMBLEIAS LEGISLATIVAS DO BRASIL'
            ])
            ->add('nome', 'text', [
                'label' => 'Nome',
                'label_attr' => ['class' => 'control-label required'],
                'attr' => [
                    'required' => 'required',
                    'placeholder' => 'digite o nome da casa legislativa',
                ],
            ])
            ->add('sigla', 'text', [
                'label' => 'Sigla',
                'label_attr' => ['class' => 'control-label required'],
                'attr' => [
                    'required' => 'required',
                    'placeholder' => 'digite uma sigla para a casa legislativa',
                ],
            ])
            ->add('presid', 'text', [
                'label' => 'Presidente',
                'label_attr' => ['class' => 'control-label'],
                'attr' => [
                    'placeholder' => 'digite o nome do presidente da casa legislativa',
                ],
            ])
            ->add('end', 'text', [
                'label' => 'Endereço',
                'label_attr' => ['class' => 'control-label required'],
                'attr' => [
                    'required' => 'required',
                    'placeholder' => 'digite o endereço da casa legislativa',
                ],
            ])
            ->add('bairro', 'text', [
                'label' => 'Bairro',
                'label_attr' => ['class' => 'control-label'],
                'attr' => [
                    'placeholder' => 'digite o bairro da casa legislativa',
                ],
            ])
            ->add('cep', 'text', [
                'label' => 'CEP',
                'label_attr' => ['class' => 'control-label'],
                'attr' => [
                    'placeholder' => 'digite o CEP da casa legislativa',
                    'id' => 'cep',
                ],
            ])
            ->add('cidade', 'text', [
                'label' => 'Cidade',
                'label_attr' => ['class' => 'control-label required'],
                'attr' => [
                    'required' => 'required',
                    'placeholder' => 'digite a cidade da casa legislativa',
                ],
            ])
            ->add('uf', 'text', [
                'label' => 'Estado',
                'label_attr' => ['class' => 'control-label required'],
                'attr' => [
                    'required' => 'required',
                    'placeholder' => 'digite a sigla do estado da casa legislativa',
                    'id' => 'uf'
                ],
            ])
            ->add('tel', 'text', [
                'label' => 'Telefone com ddd',
                'label_attr' => ['class' => 'control-label'],
                'attr' => [
                    'placeholder' => 'digite o telefone da casa legislativa',
                    'id' => 'tel'
                ],
            ])
            ->add('url', 'text', [
                'label' => 'Endereço do site',
                'label_attr' => ['class' => 'control-label required'],
                'attr' => [
                    'required' => 'required',
                    'placeholder' => 'digite o endereço do site com o http:// da casa legislativa',
                    'id' => 'url'
                ],
            ])
            ->add('email', 'text', [
                'label' => 'E-mail',
                'label_attr' => ['class' => 'control-label'],
                'attr' => [
                    'placeholder' => 'digite o email da casa legislativa',
                ],
            ])
            ->add('tag', 'textarea', [
                'label' => 'Palavras chaves',
                'label_attr' => ['class' => 'control-label required'],
                'attr' => [
                    'class' => 'ckeditor form-control',
                    'required' => 'required',
                    'placeholder' => 'digite as palavras separadas por espaços sem virgulas que possam ser usadas para pesquisar sobre esta casa legislativa',
                ],
            ]);
    }
}
