@include('layouts.includes.header')
<body>
<div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
    <div class="container-fluid fixed-top p-4 bg-blue">
        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                @auth
                    <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"><strong class="text-white">Painel de controle</strong></a>
                @else
                    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"><strong class="text-white">Entrar</strong></a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"><strong class="text-white">Cadastre-se</strong></a>
                    @endif
                @endauth
            </div>
        @endif
        <div class="d-flex justify-content-start font-branc">
            <a href="{{route('/')}}" ><img src="{{asset('images/logo.png')}}" alt="" class="img-fluid" width="136px"></a>
        </div>
    </div>
    <div class="p-6 sm:px-20 bg-white border-b border-gray-200" style="width: 95%;">
        <div id="admin-content">
            <div class="container-admin">
                <div class="row">
                    <div class="col-md-12">
                        <div class="w-auto p-3">

                            <div class="panel-heading-admin">
                                @foreach($dados as $dado)
                                    <div class="col-12">
                                        <h5>Resultado Eleição Governador 2º Turno<strong>{{$dado->nm_urna_candidato}}</strong> </h5>
                                        <h5>Total de Votos: <strong>{{number_format((float)$dado->total_votos,0, '', '.')}}</strong></h5>
                                    </div>
                            </div>
                            <div class="panel-body">
                                <div class="form-search">
                                    <form action="{{route('show_governo-2t', ['cand' => $dado->sq_candidato ])}}" method="get">
                                        <label class="label-search">Pesquisar município</label>
                                        <x-input id="search" class="mt-1 w-full" type="search" name="search" placeholder="nome do municipio" />
                                        <div class="buton-search">
                                            <x-button class="ml-4 buton-sch">
                                                {{ __('Pesquisar') }}
                                            </x-button>
                                        </div>
                                    </form>
                                </div>

                                <div class="row btn-new-reset">
                                    <div class="btn-hero">
                                        <p><a href="{{route('governo-2t')}}" class="btn btn-success btn-assinar">Voltar</a></p>
                                        <p><a href="{{route('show_governo-2t', ['cand' => $dado->sq_candidato ])}}" class="btn btn-primary btn-assinar">Limpar</a></p>
                                            @break
                                        @endforeach
                                    </div>
                                </div>
                                <div class="row" style="margin-left: 10px; margin-right: 10px;">
                                   <table class="table table-striped">
                                       <thead>
                                            <tr>
                                                <th>Municipio</th>
                                                <th style="text-align: right;">Total Votos</th>
                                                <th style="text-align: center;">Ações</th>
                                            </tr>
                                       </thead>
                                       @foreach($depests as $depest)
                                           <tr>
                                               <td>{{$depest->nm_municipio}} </td>
                                               <td style="text-align: right;">{{number_format((float)$depest->total_votos,0, '', '.')}}</td>
                                               <td style="text-align: center; color: #0a58f6;"><a href="{{route('show_munic_gov-2t', ['munic' => $depest->cod_municipio])}}"><i class="fas fa-eye"></i></a></td>
                                           </tr>
                                       @endforeach
                                   </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.includes.footer')
</body>
</html>
