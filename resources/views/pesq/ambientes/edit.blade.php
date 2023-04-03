@extends('layouts.pesq')

@section('conteudo')
<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    <div id="admin-content">
        <div class="container-admin">
            <div class="row">
                <div class="col-md-12">
                    <div class="w-auto p-3">
                        <div class="panel-heading-admin">
                            <h5>Editar Estrut ALBA</h5>
                        </div>
                        <div class="panel-body">
                            <div class="row btn-new-reset">
                                <div class="btn-hero">
                                    <p><a href="{{route('pesq.ambientes.index')}}" class="btn btn-success btn-salvar">Voltar</a></p>
                                </div>
                            </div>
                            <div class="form-admin">
                                <x-validation-errors class="mb-4" />
                                <form method="POST" action="{{route('pesq.ambientes.update', ['ambiente' => $ambiente->id])}}">
                                    @method('PUT')
                                    @csrf
                                    <x-input id="chave" type="hidden" name="chave" value="Adm ALBA"  />

                                    <div class="row bloco-div desk">
                                        <div class="nome dt-nasc">
                                            <x-label class="label-form required" for="nome" value="{{ __('Nome do setor / local') }}" />
                                            <x-input id="nome" class="block mt-1 w-full" type="text" name="nome" value="{{$ambiente->nome}}" required autofocus autocomplete="nome" />
                                        </div>
                                        <div class="nome dt-nasc">
                                            <x-label class="label-form required" for="tipo" value="{{ __('Tipo de uso do espaço') }}" />
                                            <select class="custom-select" id="tipo" name="tipo">
                                                <option selected value="{{$ambiente->tipo}}">{{$ambiente->tipo}}</option>
                                                <option value="Administrativo">Administrativo</option>
                                                <option value="Legislativo">Legislativo</option>
                                                <option value="Gabinete">Gabinete</option>
                                                <option value="Operacional">Operacional</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row bloco-div desk">
                                        <div class="nome dt-nasc">
                                            <x-label class="label-form required" for="predio" value="{{ __('Prédio') }}" />
                                            <select class="custom-select" id="predio" name="predio">
                                                <option selected value="{{$ambiente->andar->ala->predio->id}}">{{$ambiente->andar->ala->predio->nome}}</option>
                                                @foreach($predios as $predio)
                                                    <option value="{{$predio->id}}">{{$predio->nome}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="nome dt-nasc">
                                            <x-label class="label-form required" for="ala" value="{{ __('Ala') }}" />
                                            <select class="custom-select" id="ala" name="ala">
                                                <option selected value="{{$ambiente->andar->ala->id}}">{{$ambiente->andar->ala->nome}}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row bloco-div desk">
                                        <div class="nome dt-nasc">
                                            <x-label class="label-form required" for="andar" value="{{ __('Andar') }}" />
                                            <select class="custom-select" id="andar" name="andar_id" required>
                                                <option selected value="{{$ambiente->andar->id}}">{{$ambiente->andar->nome}}</option>
                                            </select>
                                        </div>
                                        <div class="nome dt-nasc">
                                            <x-label class="label-form" for="num" value="{{ __('Número caso exista') }}" />
                                            <x-input id="num" class="block mt-1 w-full" type="text" name="num" value="{{$ambiente->num}}" autofocus autocomplete="num" />
                                        </div>
                                    </div>
                                    <br/>
                                    <div class="row d-flex justify-content-end mr-5">
                                        <x-button class="btn btn-salvar justify-center">
                                            {{ __(' Salvar') }}
                                        </x-button>
                                    </div>
                                </form>
                            </div>
                            <div class="row btn-new-reset">
                                <div class="btn-hero">
                                    <p><a href="{{route('pesq.ambientes.index')}}" class="btn btn-success btn-salvar">Voltar</a></p>
                                </div>
                            </div>
                        </div>
                        </div>
                </div>
            </div>
        </div>


    </div>
</div>
@endsection
