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
                                <h5>Resultado Eleição Senador</h5>
                                <div class="form-search">
                                    <form action="{{route('senado')}}" method="get">
                                        <label class="label-search">Pesquisar</label>
                                        <x-input id="search" class="mt-1 w-full" type="search" name="search" placeholder="nome do candidato" />
                                        <div class="buton-search">
                                            <x-button class="ml-4 buton-sch">
                                                {{ __('Pesquisar') }}
                                            </x-button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="panel-body">

                                <div class="row btn-new-reset">
                                    <div class="btn-hero">
                                        <p><a href="{{route('eleicoes')}}" class="btn btn-success btn-assinar">Voltar</a></p>
                                        <p><a href="{{route('senado')}}" class="btn btn-primary btn-assinar">Limpar</a></p>
                                    </div>
                                </div>
                                <div class="row" style="margin-left: 10px; margin-right: 10px;">
                                   <table class="table table-striped">
                                       <thead>
                                            <tr>
                                                <th>Nome Candidato</th>
                                                <th>Partido/Federação</th>
                                                <th>Status</th>
                                                <th style="text-align: right;">Total Votos</th>
                                                <th style="text-align: center;">Ações</th>
                                            </tr>
                                       </thead>
                                       @foreach($depests as $depest)
                                           <tr>
                                               <td>{{$depest->nm_urna_candidato}} ({{$depest->sg_partido}})</td>
                                               <td>{{$depest->ds_composicao_coligacao}}</td>
                                               <td>{{$depest->ds_sit_tot_turno}}</td>
                                               <td style="text-align: right;">{{number_format((float)$depest->total_votos,0, '', '.')}}</td>
                                               <td style="text-align: center; color: #0a58f6;"><a href="{{route('show_senado', ['cand' => $depest->sq_candidato])}}"><i class="fas fa-eye"></i></a></td>
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
