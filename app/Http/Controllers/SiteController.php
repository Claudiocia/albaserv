<?php

namespace App\Http\Controllers;

use App\Models\ResultDetalhe;
use App\Models\ResultEleit;
use DB;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        return view('welcome');
    }


    /**
     * Mostrar a página de acesso aos resultados das eleições
     */
    public function eleicoes()
    {
        return \view('eleicoes');
    }

   public function depest(Request $request)
   {
       $search = $request->get('search');
       if ($search == null) {
           $depests = ResultEleit::select('nm_urna_candidato', 'sq_candidato', 'ds_sit_tot_turno', 'ds_composicao_coligacao', 'sg_partido', DB::raw('SUM(qt_votos_nominais_validos) as total_votos'))
               ->where('cd_cargo', '=', 7)
               ->whereIn('cd_sit_tot_turno', [2, 3])
               ->groupBy('nm_urna_candidato')
               ->orderBy('total_votos', 'desc')
               ->get();
           $suplentes = ResultEleit::select('nm_urna_candidato', 'sq_candidato', 'ds_sit_tot_turno', 'ds_composicao_coligacao', 'sg_partido', DB::raw('SUM(qt_votos_nominais_validos) as total_votos'))
               ->where('cd_cargo', '=', 7)
               ->where('cd_sit_tot_turno', '=', 5)
               ->groupBy('nm_urna_candidato')
               ->orderBy('total_votos', 'desc')
               ->get();

           $naoeleitos = ResultEleit::select('nm_urna_candidato', 'sq_candidato', 'ds_sit_tot_turno', 'ds_composicao_coligacao', 'sg_partido', DB::raw('SUM(qt_votos_nominais_validos) as total_votos'))
               ->where('cd_cargo', '=', 7)
               ->where('cd_sit_tot_turno', '=', 4)
               ->groupBy('nm_urna_candidato')
               ->orderBy('total_votos', 'desc')
               ->get();

       }else {
           $depests = ResultEleit::select('nm_urna_candidato', 'sq_candidato', 'ds_sit_tot_turno', 'ds_composicao_coligacao', 'sg_partido', DB::raw('SUM(qt_votos_nominais_validos) as total_votos'))
               ->where('cd_cargo', '=', 7)
               ->whereIn('cd_sit_tot_turno', [2, 3])
               ->where('nm_urna_candidato', 'LIKE', '%'.$search.'%')
               ->groupBy('nm_urna_candidato')
               ->orderBy('total_votos', 'desc')
               ->get();
           $suplentes = ResultEleit::select('nm_urna_candidato', 'sq_candidato', 'ds_sit_tot_turno', 'ds_composicao_coligacao', 'sg_partido', DB::raw('SUM(qt_votos_nominais_validos) as total_votos'))
               ->where('cd_cargo', '=', 7)
               ->where('cd_sit_tot_turno', '=', 5)
               ->where('nm_urna_candidato', 'LIKE', '%'.$search.'%')
               ->groupBy('nm_urna_candidato')
               ->orderBy('total_votos', 'desc')
               ->get();

           $naoeleitos = ResultEleit::select('nm_urna_candidato', 'sq_candidato', 'ds_sit_tot_turno', 'ds_composicao_coligacao', 'sg_partido', DB::raw('SUM(qt_votos_nominais_validos) as total_votos'))
               ->where('cd_cargo', '=', 7)
               ->where('cd_sit_tot_turno', '=', 4)
               ->where('nm_urna_candidato', 'LIKE', '%'.$search.'%')
               ->groupBy('nm_urna_candidato')
               ->orderBy('total_votos', 'desc')
               ->get();

       }
       return \view('depest', compact('depests', 'suplentes', 'naoeleitos'));
   }

   public function showDepest(string $cand, Request $request)
   {
       $search = $request->get('search');
       $dados = ResultEleit::select('nm_urna_candidato', 'sq_candidato', DB::raw('SUM(qt_votos_nominais_validos) as total_votos'))
           ->where('sq_candidato', '=', $cand)
           ->groupBy('nm_urna_candidato')->get();
       if ($search != null){
           $depests = ResultEleit::select('nm_municipio', 'nm_urna_candidato', 'cod_municipio', 'sq_candidato', 'ds_sit_tot_turno', 'ds_composicao_coligacao', 'sg_partido', DB::raw('SUM(qt_votos_nominais_validos) as total_votos'))
               ->where('cd_cargo', '=', 7)
               ->where('sq_candidato', '=', $cand)
               ->where('nm_municipio', 'LIKE', '%'.$search.'%')
               ->groupBy('nm_municipio')
               ->orderBy('total_votos', 'desc')
               ->get();
       }else {
           $depests = ResultEleit::select('nm_municipio', 'nm_urna_candidato', 'cod_municipio', 'sq_candidato', 'ds_sit_tot_turno', 'ds_composicao_coligacao', 'sg_partido', DB::raw('SUM(qt_votos_nominais_validos) as total_votos'))
               ->where('cd_cargo', '=', 7)
               ->where('sq_candidato', '=', $cand)
               ->where('qt_votos_nominais_validos', '>', 0)
               ->groupBy('nm_municipio')
               ->orderBy('total_votos', 'desc')
               ->get();
       }
       return \view('show_depest', compact('depests', 'dados'));
   }

   public function showMunic(string $munic, Request $request)
   {
       $search = $request->get('search');
       $detalhe = ResultDetalhe::select('nm_municipio',
           DB::raw('SUM(qt_aptos) as aptos'),
           DB::raw( 'SUM(qt_total_votos_nulos) as nulos'),
           DB::raw( 'SUM(qt_total_votos_anulados) as anulados'),
           DB::raw( 'SUM(qt_votos_brancos) as brancos'),
           DB::raw( 'SUM(qt_abstencoes) as abstencoes'),
           DB::raw( 'SUM(qt_votos_validos) as validos'))
           ->where('cd_municipio', '=', $munic)
           ->where('cd_cargo', '=', 7)
           ->where('nr_turno', '=', 1)->first();
       $dados = ResultEleit::select('nm_municipio', DB::raw('SUM(qt_votos_nominais_validos) as total_votos'))
           ->where('cod_municipio', '=', $munic)
           ->where('cd_cargo', '=', 7)
           ->where('nr_turno', '=', 1)->first();
       if ($search == null) {
           $depests = ResultEleit::select('nm_urna_candidato', 'sq_candidato', 'ds_sit_tot_turno', 'ds_composicao_coligacao', 'sg_partido', DB::raw('SUM(qt_votos_nominais_validos) as total_votos'))
               ->where('cd_cargo', '=', 7)
               ->whereIn('cd_sit_tot_turno', [2, 3])
               ->where('cod_municipio', '=', $munic)
               ->where('qt_votos_nominais_validos', '>', 0)
               ->groupBy('nm_urna_candidato')
               ->orderBy('total_votos', 'desc')
               ->get();
           $suplentes = ResultEleit::select('nm_urna_candidato', 'sq_candidato', 'ds_sit_tot_turno', 'ds_composicao_coligacao', 'sg_partido', DB::raw('SUM(qt_votos_nominais_validos) as total_votos'))
               ->where('cd_cargo', '=', 7)
               ->where('cd_sit_tot_turno', '=', 5)
               ->where('cod_municipio', '=', $munic)
               ->where('qt_votos_nominais_validos', '>', 0)
               ->groupBy('nm_urna_candidato')
               ->orderBy('total_votos', 'desc')
               ->get();

           $naoeleitos = ResultEleit::select('nm_urna_candidato', 'sq_candidato', 'ds_sit_tot_turno', 'ds_composicao_coligacao', 'sg_partido', DB::raw('SUM(qt_votos_nominais_validos) as total_votos'))
               ->where('cd_cargo', '=', 7)
               ->where('cd_sit_tot_turno', '=', 4)
               ->where('cod_municipio', '=', $munic)
               ->where('qt_votos_nominais_validos', '>', 0)
               ->groupBy('nm_urna_candidato')
               ->orderBy('total_votos', 'desc')
               ->get();

       }else {
           $depests = ResultEleit::select('nm_urna_candidato', 'sq_candidato', 'ds_sit_tot_turno', 'ds_composicao_coligacao', 'sg_partido', DB::raw('SUM(qt_votos_nominais_validos) as total_votos'))
               ->where('cd_cargo', '=', 7)
               ->whereIn('cd_sit_tot_turno', [2, 3])
               ->where('nm_urna_candidato', 'LIKE', '%'.$search.'%')
               ->where('cod_municipio', '=', $munic)
               ->where('qt_votos_nominais_validos', '>', 0)
               ->groupBy('nm_urna_candidato')
               ->orderBy('total_votos', 'desc')
               ->get();
           $suplentes = ResultEleit::select('nm_urna_candidato', 'sq_candidato', 'ds_sit_tot_turno', 'ds_composicao_coligacao', 'sg_partido', DB::raw('SUM(qt_votos_nominais_validos) as total_votos'))
               ->where('cd_cargo', '=', 7)
               ->where('cd_sit_tot_turno', '=', 5)
               ->where('nm_urna_candidato', 'LIKE', '%'.$search.'%')
               ->where('cod_municipio', '=', $munic)
               ->where('qt_votos_nominais_validos', '>', 0)
               ->groupBy('nm_urna_candidato')
               ->orderBy('total_votos', 'desc')
               ->get();

           $naoeleitos = ResultEleit::select('nm_urna_candidato', 'sq_candidato', 'ds_sit_tot_turno', 'ds_composicao_coligacao', 'sg_partido', DB::raw('SUM(qt_votos_nominais_validos) as total_votos'))
               ->where('cd_cargo', '=', 7)
               ->where('cd_sit_tot_turno', '=', 4)
               ->where('nm_urna_candidato', 'LIKE', '%'.$search.'%')
               ->where('cod_municipio', '=', $munic)
               ->where('qt_votos_nominais_validos', '>', 0)
               ->groupBy('nm_urna_candidato')
               ->orderBy('total_votos', 'desc')
               ->get();

       }
       return \view('show_munic', compact('depests', 'suplentes', 'naoeleitos', 'dados', 'munic', 'detalhe'));
   }

   /* metodos para eleição dep federal */
    public function depfed(Request $request)
    {
        $search = $request->get('search');
        if ($search == null) {
            $depests = ResultEleit::select('nm_urna_candidato', 'sq_candidato', 'ds_sit_tot_turno', 'ds_composicao_coligacao', 'sg_partido', DB::raw('SUM(qt_votos_nominais_validos) as total_votos'))
                ->where('cd_cargo', '=', 6)
                ->whereIn('cd_sit_tot_turno', [2, 3])
                ->groupBy('nm_urna_candidato')
                ->orderBy('total_votos', 'desc')
                ->get();
            $suplentes = ResultEleit::select('nm_urna_candidato', 'sq_candidato', 'ds_sit_tot_turno', 'ds_composicao_coligacao', 'sg_partido', DB::raw('SUM(qt_votos_nominais_validos) as total_votos'))
                ->where('cd_cargo', '=', 6)
                ->where('cd_sit_tot_turno', '=', 5)
                ->groupBy('nm_urna_candidato')
                ->orderBy('total_votos', 'desc')
                ->get();

            $naoeleitos = ResultEleit::select('nm_urna_candidato', 'sq_candidato', 'ds_sit_tot_turno', 'ds_composicao_coligacao', 'sg_partido', DB::raw('SUM(qt_votos_nominais_validos) as total_votos'))
                ->where('cd_cargo', '=', 6)
                ->where('cd_sit_tot_turno', '=', 4)
                ->groupBy('nm_urna_candidato')
                ->orderBy('total_votos', 'desc')
                ->get();

        }else {
            $depests = ResultEleit::select('nm_urna_candidato', 'sq_candidato', 'ds_sit_tot_turno', 'ds_composicao_coligacao', 'sg_partido', DB::raw('SUM(qt_votos_nominais_validos) as total_votos'))
                ->where('cd_cargo', '=', 6)
                ->whereIn('cd_sit_tot_turno', [2, 3])
                ->where('nm_urna_candidato', 'LIKE', '%'.$search.'%')
                ->groupBy('nm_urna_candidato')
                ->orderBy('total_votos', 'desc')
                ->get();
            $suplentes = ResultEleit::select('nm_urna_candidato', 'sq_candidato', 'ds_sit_tot_turno', 'ds_composicao_coligacao', 'sg_partido', DB::raw('SUM(qt_votos_nominais_validos) as total_votos'))
                ->where('cd_cargo', '=', 6)
                ->where('cd_sit_tot_turno', '=', 5)
                ->where('nm_urna_candidato', 'LIKE', '%'.$search.'%')
                ->groupBy('nm_urna_candidato')
                ->orderBy('total_votos', 'desc')
                ->get();

            $naoeleitos = ResultEleit::select('nm_urna_candidato', 'sq_candidato', 'ds_sit_tot_turno', 'ds_composicao_coligacao', 'sg_partido', DB::raw('SUM(qt_votos_nominais_validos) as total_votos'))
                ->where('cd_cargo', '=', 6)
                ->where('cd_sit_tot_turno', '=', 4)
                ->where('nm_urna_candidato', 'LIKE', '%'.$search.'%')
                ->groupBy('nm_urna_candidato')
                ->orderBy('total_votos', 'desc')
                ->get();

        }
        return \view('depfed', compact('depests', 'suplentes', 'naoeleitos'));
    }

    public function showDepfed(string $cand, Request $request)
    {
        $search = $request->get('search');
        $dados = ResultEleit::select('nm_urna_candidato', 'sq_candidato', DB::raw('SUM(qt_votos_nominais_validos) as total_votos'))
            ->where('sq_candidato', '=', $cand)
            ->groupBy('nm_urna_candidato')->get();
        if ($search != null){
            $depests = ResultEleit::select('nm_municipio', 'nm_urna_candidato', 'cod_municipio', 'sq_candidato', 'ds_sit_tot_turno', 'ds_composicao_coligacao', 'sg_partido', DB::raw('SUM(qt_votos_nominais_validos) as total_votos'))
                ->where('cd_cargo', '=', 6)
                ->where('sq_candidato', '=', $cand)
                ->where('nm_municipio', 'LIKE', '%'.$search.'%')
                ->groupBy('nm_municipio')
                ->orderBy('total_votos', 'desc')
                ->get();
        }else {
            $depests = ResultEleit::select('nm_municipio', 'nm_urna_candidato', 'cod_municipio', 'sq_candidato', 'ds_sit_tot_turno', 'ds_composicao_coligacao', 'sg_partido', DB::raw('SUM(qt_votos_nominais_validos) as total_votos'))
                ->where('cd_cargo', '=', 6)
                ->where('sq_candidato', '=', $cand)
                ->where('qt_votos_nominais_validos', '>', 0)
                ->groupBy('nm_municipio')
                ->orderBy('total_votos', 'desc')
                ->get();
        }
        return \view('show_depfed', compact('depests', 'dados'));
    }

    public function showMunicFed(string $munic, Request $request)
    {
        $search = $request->get('search');
        $detalhe = ResultDetalhe::select('nm_municipio',
            DB::raw('SUM(qt_aptos) as aptos'),
            DB::raw( 'SUM(qt_total_votos_nulos) as nulos'),
            DB::raw( 'SUM(qt_total_votos_anulados) as anulados'),
            DB::raw( 'SUM(qt_votos_brancos) as brancos'),
            DB::raw( 'SUM(qt_abstencoes) as abstencoes'),
            DB::raw( 'SUM(qt_votos_validos) as validos'))
            ->where('cd_municipio', '=', $munic)
            ->where('cd_cargo', '=', 6)
            ->where('nr_turno', '=', 1)->first();
        $dados = ResultEleit::select('nm_municipio', DB::raw('SUM(qt_votos_nominais_validos) as total_votos'))
            ->where('cod_municipio', '=', $munic)
            ->where('cd_cargo', '=', 6)
            ->where('nr_turno', '=', 1)->first();
        if ($search == null) {
            $depests = ResultEleit::select('nm_urna_candidato', 'sq_candidato', 'ds_sit_tot_turno', 'ds_composicao_coligacao', 'sg_partido', DB::raw('SUM(qt_votos_nominais_validos) as total_votos'))
                ->where('cd_cargo', '=', 6)
                ->whereIn('cd_sit_tot_turno', [2, 3])
                ->where('cod_municipio', '=', $munic)
                ->where('qt_votos_nominais_validos', '>', 0)
                ->groupBy('nm_urna_candidato')
                ->orderBy('total_votos', 'desc')
                ->get();
            $suplentes = ResultEleit::select('nm_urna_candidato', 'sq_candidato', 'ds_sit_tot_turno', 'ds_composicao_coligacao', 'sg_partido', DB::raw('SUM(qt_votos_nominais_validos) as total_votos'))
                ->where('cd_cargo', '=', 6)
                ->where('cd_sit_tot_turno', '=', 5)
                ->where('cod_municipio', '=', $munic)
                ->where('qt_votos_nominais_validos', '>', 0)
                ->groupBy('nm_urna_candidato')
                ->orderBy('total_votos', 'desc')
                ->get();

            $naoeleitos = ResultEleit::select('nm_urna_candidato', 'sq_candidato', 'ds_sit_tot_turno', 'ds_composicao_coligacao', 'sg_partido', DB::raw('SUM(qt_votos_nominais_validos) as total_votos'))
                ->where('cd_cargo', '=', 6)
                ->where('cd_sit_tot_turno', '=', 4)
                ->where('cod_municipio', '=', $munic)
                ->where('qt_votos_nominais_validos', '>', 0)
                ->groupBy('nm_urna_candidato')
                ->orderBy('total_votos', 'desc')
                ->get();

        }else {
            $depests = ResultEleit::select('nm_urna_candidato', 'sq_candidato', 'ds_sit_tot_turno', 'ds_composicao_coligacao', 'sg_partido', DB::raw('SUM(qt_votos_nominais_validos) as total_votos'))
                ->where('cd_cargo', '=', 6)
                ->whereIn('cd_sit_tot_turno', [2, 3])
                ->where('nm_urna_candidato', 'LIKE', '%'.$search.'%')
                ->where('cod_municipio', '=', $munic)
                ->where('qt_votos_nominais_validos', '>', 0)
                ->groupBy('nm_urna_candidato')
                ->orderBy('total_votos', 'desc')
                ->get();
            $suplentes = ResultEleit::select('nm_urna_candidato', 'sq_candidato', 'ds_sit_tot_turno', 'ds_composicao_coligacao', 'sg_partido', DB::raw('SUM(qt_votos_nominais_validos) as total_votos'))
                ->where('cd_cargo', '=', 6)
                ->where('cd_sit_tot_turno', '=', 5)
                ->where('nm_urna_candidato', 'LIKE', '%'.$search.'%')
                ->where('cod_municipio', '=', $munic)
                ->where('qt_votos_nominais_validos', '>', 0)
                ->groupBy('nm_urna_candidato')
                ->orderBy('total_votos', 'desc')
                ->get();

            $naoeleitos = ResultEleit::select('nm_urna_candidato', 'sq_candidato', 'ds_sit_tot_turno', 'ds_composicao_coligacao', 'sg_partido', DB::raw('SUM(qt_votos_nominais_validos) as total_votos'))
                ->where('cd_cargo', '=', 6)
                ->where('cd_sit_tot_turno', '=', 4)
                ->where('nm_urna_candidato', 'LIKE', '%'.$search.'%')
                ->where('cod_municipio', '=', $munic)
                ->where('qt_votos_nominais_validos', '>', 0)
                ->groupBy('nm_urna_candidato')
                ->orderBy('total_votos', 'desc')
                ->get();

        }
        return \view('show_munic_fed', compact('depests', 'suplentes', 'naoeleitos', 'dados', 'munic', 'detalhe'));
    }

    /* metodos que chamam eleição do senado */
    public function senado(Request $request)
    {
        $search = $request->get('search');
        if ($search == null) {
            $depests = ResultEleit::select('nm_urna_candidato', 'sq_candidato', 'ds_sit_tot_turno', 'ds_composicao_coligacao', 'sg_partido', DB::raw('SUM(qt_votos_nominais_validos) as total_votos'))
                ->where('cd_cargo', '=', 5)
                ->whereIn('cd_sit_tot_turno', [1, 4])
                ->groupBy('nm_urna_candidato')
                ->orderBy('total_votos', 'desc')
                ->get();
        }else {
            $depests = ResultEleit::select('nm_urna_candidato', 'sq_candidato', 'ds_sit_tot_turno', 'ds_composicao_coligacao', 'sg_partido', DB::raw('SUM(qt_votos_nominais_validos) as total_votos'))
                ->where('cd_cargo', '=', 5)
                ->whereIn('cd_sit_tot_turno',  [1, 4])
                ->where('nm_urna_candidato', 'LIKE', '%'.$search.'%')
                ->groupBy('nm_urna_candidato')
                ->orderBy('total_votos', 'desc')
                ->get();
        }
        return \view('senado', compact('depests'));
    }

    public function showSenado(string $cand, Request $request)
    {
        $search = $request->get('search');
        $dados = ResultEleit::select('nm_urna_candidato', 'sq_candidato', DB::raw('SUM(qt_votos_nominais_validos) as total_votos'))
            ->where('sq_candidato', '=', $cand)
            ->groupBy('nm_urna_candidato')->get();
        if ($search != null){
            $depests = ResultEleit::select('nm_municipio', 'nm_urna_candidato', 'cod_municipio', 'sq_candidato', 'ds_sit_tot_turno', 'ds_composicao_coligacao', 'sg_partido', DB::raw('SUM(qt_votos_nominais_validos) as total_votos'))
                ->where('cd_cargo', '=', 5)
                ->where('sq_candidato', '=', $cand)
                ->where('nm_municipio', 'LIKE', '%'.$search.'%')
                ->groupBy('nm_municipio')
                ->orderBy('total_votos', 'desc')
                ->get();
        }else {
            $depests = ResultEleit::select('nm_municipio', 'nm_urna_candidato', 'cod_municipio', 'sq_candidato', 'ds_sit_tot_turno', 'ds_composicao_coligacao', 'sg_partido', DB::raw('SUM(qt_votos_nominais_validos) as total_votos'))
                ->where('cd_cargo', '=', 5)
                ->where('sq_candidato', '=', $cand)
                ->where('qt_votos_nominais_validos', '>', 0)
                ->groupBy('nm_municipio')
                ->orderBy('total_votos', 'desc')
                ->get();
        }
        return \view('show_senado', compact('depests', 'dados'));
    }

    public function showMunicSen(string $munic, Request $request)
    {
        $search = $request->get('search');
        $detalhe = ResultDetalhe::select('nm_municipio',
            DB::raw('SUM(qt_aptos) as aptos'),
            DB::raw( 'SUM(qt_total_votos_nulos) as nulos'),
            DB::raw( 'SUM(qt_total_votos_anulados) as anulados'),
            DB::raw( 'SUM(qt_votos_brancos) as brancos'),
            DB::raw( 'SUM(qt_abstencoes) as abstencoes'),
            DB::raw( 'SUM(qt_votos_validos) as validos'))
            ->where('cd_municipio', '=', $munic)
            ->where('cd_cargo', '=', 5)
            ->where('nr_turno', '=', 1)->first();
        $dados = ResultEleit::select('nm_municipio', DB::raw('SUM(qt_votos_nominais_validos) as total_votos'))
            ->where('cod_municipio', '=', $munic)
            ->where('cd_cargo', '=', 5)
            ->where('nr_turno', '=', 1)->first();
        if ($search == null) {
            $depests = ResultEleit::select('nm_urna_candidato', 'sq_candidato', 'ds_sit_tot_turno', 'ds_composicao_coligacao', 'sg_partido', DB::raw('SUM(qt_votos_nominais_validos) as total_votos'))
                ->where('cd_cargo', '=', 5)
                ->whereIn('cd_sit_tot_turno', [1, 4])
                ->where('cod_municipio', '=', $munic)
                ->where('qt_votos_nominais_validos', '>', 0)
                ->groupBy('nm_urna_candidato')
                ->orderBy('total_votos', 'desc')
                ->get();

        }else {
            $depests = ResultEleit::select('nm_urna_candidato', 'sq_candidato', 'ds_sit_tot_turno', 'ds_composicao_coligacao', 'sg_partido', DB::raw('SUM(qt_votos_nominais_validos) as total_votos'))
                ->where('cd_cargo', '=', 5)
                ->whereIn('cd_sit_tot_turno',  [1, 4])
                ->where('nm_urna_candidato', 'LIKE', '%'.$search.'%')
                ->where('cod_municipio', '=', $munic)
                ->where('qt_votos_nominais_validos', '>', 0)
                ->groupBy('nm_urna_candidato')
                ->orderBy('total_votos', 'desc')
                ->get();
        }
        return \view('show_munic_sen', compact('depests','dados', 'munic', 'detalhe'));
    }

    /* metodos que chamam eleição de governador 1T */
    public function governo(Request $request)
    {
        $search = $request->get('search');
        if ($search == null) {
            $depests = ResultEleit::select('nm_urna_candidato', 'sq_candidato', 'ds_sit_tot_turno', 'ds_composicao_coligacao', 'sg_partido', DB::raw('SUM(qt_votos_nominais_validos) as total_votos'))
                ->where('nr_turno', '=', 1)
                ->where('cd_cargo', '=', 3)
                ->whereIn('cd_sit_tot_turno', [1, 4, 6])
                ->groupBy('nm_urna_candidato')
                ->orderBy('total_votos', 'desc')
                ->get();
        }else {
            $depests = ResultEleit::select('nm_urna_candidato', 'sq_candidato', 'ds_sit_tot_turno', 'ds_composicao_coligacao', 'sg_partido', DB::raw('SUM(qt_votos_nominais_validos) as total_votos'))
                ->where('nr_turno', '=', 1)
                ->where('cd_cargo', '=', 3)
                ->whereIn('cd_sit_tot_turno',  [1, 4, 6])
                ->where('nm_urna_candidato', 'LIKE', '%'.$search.'%')
                ->groupBy('nm_urna_candidato')
                ->orderBy('total_votos', 'desc')
                ->get();
        }
        return \view('governo', compact('depests'));
    }

    public function showGoverno(string $cand, Request $request)
    {
        $search = $request->get('search');
        $dados = ResultEleit::select('nm_urna_candidato', 'sq_candidato', DB::raw('SUM(qt_votos_nominais_validos) as total_votos'))
            ->where('sq_candidato', '=', $cand)
            ->where('nr_turno', '=', 1)
            ->groupBy('nm_urna_candidato')->get();
        if ($search != null){
            $depests = ResultEleit::select('nm_municipio', 'nm_urna_candidato', 'cod_municipio', 'sq_candidato', 'ds_sit_tot_turno', 'ds_composicao_coligacao', 'sg_partido', DB::raw('SUM(qt_votos_nominais_validos) as total_votos'))
                ->where('nr_turno', '=', 1)
                ->where('cd_cargo', '=', 3)
                ->where('sq_candidato', '=', $cand)
                ->where('nm_municipio', 'LIKE', '%'.$search.'%')
                ->groupBy('nm_municipio')
                ->orderBy('total_votos', 'desc')
                ->get();
        }else {
            $depests = ResultEleit::select('nm_municipio', 'nm_urna_candidato', 'cod_municipio', 'sq_candidato', 'ds_sit_tot_turno', 'ds_composicao_coligacao', 'sg_partido', DB::raw('SUM(qt_votos_nominais_validos) as total_votos'))
                ->where('nr_turno', '=', 1)
                ->where('cd_cargo', '=', 3)
                ->where('sq_candidato', '=', $cand)
                ->where('qt_votos_nominais_validos', '>', 0)
                ->groupBy('nm_municipio')
                ->orderBy('total_votos', 'desc')
                ->get();
        }
        return \view('show_governo', compact('depests', 'dados'));
    }

    public function showMunicGov(string $munic, Request $request)
    {
        $search = $request->get('search');
        $detalhe = ResultDetalhe::select('nm_municipio',
            DB::raw('SUM(qt_aptos) as aptos'),
            DB::raw( 'SUM(qt_total_votos_nulos) as nulos'),
            DB::raw( 'SUM(qt_total_votos_anulados) as anulados'),
            DB::raw( 'SUM(qt_votos_brancos) as brancos'),
            DB::raw( 'SUM(qt_abstencoes) as abstencoes'),
            DB::raw( 'SUM(qt_votos_validos) as validos'))
            ->where('cd_municipio', '=', $munic)
            ->where('cd_cargo', '=', 3)
            ->where('nr_turno', '=', 1)->first();
        $dados = ResultEleit::select('nm_municipio', DB::raw('SUM(qt_votos_nominais_validos) as total_votos'))
            ->where('cod_municipio', '=', $munic)
            ->where('cd_cargo', '=', 3)
            ->where('nr_turno', '=', 1)->first();
        if ($search == null) {
            $depests = ResultEleit::select('nm_urna_candidato', 'sq_candidato', 'ds_sit_tot_turno', 'ds_composicao_coligacao', 'sg_partido', DB::raw('SUM(qt_votos_nominais_validos) as total_votos'))
                ->where('nr_turno', '=', 1)
                ->where('cd_cargo', '=', 3)
                ->whereIn('cd_sit_tot_turno', [1, 4, 6])
                ->where('cod_municipio', '=', $munic)
                ->where('qt_votos_nominais_validos', '>', 0)
                ->groupBy('nm_urna_candidato')
                ->orderBy('total_votos', 'desc')
                ->get();

        }else {
            $depests = ResultEleit::select('nm_urna_candidato', 'sq_candidato', 'ds_sit_tot_turno', 'ds_composicao_coligacao', 'sg_partido', DB::raw('SUM(qt_votos_nominais_validos) as total_votos'))
                ->where('nr_turno', '=', 1)
                ->where('cd_cargo', '=', 3)
                ->whereIn('cd_sit_tot_turno',  [1, 4, 6])
                ->where('nm_urna_candidato', 'LIKE', '%'.$search.'%')
                ->where('cod_municipio', '=', $munic)
                ->where('qt_votos_nominais_validos', '>', 0)
                ->groupBy('nm_urna_candidato')
                ->orderBy('total_votos', 'desc')
                ->get();
        }
        return \view('show_munic_gov', compact('depests','dados', 'munic', 'detalhe'));
    }

    /* metodos que chamam eleição de governador 2T */
    public function governo2t(Request $request)
    {
        $search = $request->get('search');
        if ($search == null) {
            $depests = ResultEleit::select('nm_urna_candidato', 'sq_candidato', 'ds_sit_tot_turno', 'ds_composicao_coligacao', 'sg_partido', DB::raw('SUM(qt_votos_nominais_validos) as total_votos'))
                ->where('nr_turno', '=', 2)
                ->where('cd_cargo', '=', 3)
                ->whereIn('cd_sit_tot_turno', [1, 4, 6])
                ->groupBy('nm_urna_candidato')
                ->orderBy('total_votos', 'desc')
                ->get();
        }else {
            $depests = ResultEleit::select('nm_urna_candidato', 'sq_candidato', 'ds_sit_tot_turno', 'ds_composicao_coligacao', 'sg_partido', DB::raw('SUM(qt_votos_nominais_validos) as total_votos'))
                ->where('nr_turno', '=', 2)
                ->where('cd_cargo', '=', 3)
                ->whereIn('cd_sit_tot_turno',  [1, 4, 6])
                ->where('nm_urna_candidato', 'LIKE', '%'.$search.'%')
                ->groupBy('nm_urna_candidato')
                ->orderBy('total_votos', 'desc')
                ->get();
        }
        return \view('governo-2t', compact('depests'));
    }

    public function showGoverno2t(string $cand, Request $request)
    {
        $search = $request->get('search');
        $dados = ResultEleit::select('nm_urna_candidato', 'sq_candidato', DB::raw('SUM(qt_votos_nominais_validos) as total_votos'))
            ->where('sq_candidato', '=', $cand)
            ->where('nr_turno', '=', 2)
            ->groupBy('nm_urna_candidato')->get();
        if ($search != null){
            $depests = ResultEleit::select('nm_municipio', 'nm_urna_candidato', 'cod_municipio', 'sq_candidato', 'ds_sit_tot_turno', 'ds_composicao_coligacao', 'sg_partido', DB::raw('SUM(qt_votos_nominais_validos) as total_votos'))
                ->where('nr_turno', '=', 2)
                ->where('cd_cargo', '=', 3)
                ->where('sq_candidato', '=', $cand)
                ->where('nm_municipio', 'LIKE', '%'.$search.'%')
                ->groupBy('nm_municipio')
                ->orderBy('total_votos', 'desc')
                ->get();
        }else {
            $depests = ResultEleit::select('nm_municipio', 'nm_urna_candidato', 'cod_municipio', 'sq_candidato', 'ds_sit_tot_turno', 'ds_composicao_coligacao', 'sg_partido', DB::raw('SUM(qt_votos_nominais_validos) as total_votos'))
                ->where('nr_turno', '=', 2)
                ->where('cd_cargo', '=', 3)
                ->where('sq_candidato', '=', $cand)
                ->where('qt_votos_nominais_validos', '>', 0)
                ->groupBy('nm_municipio')
                ->orderBy('total_votos', 'desc')
                ->get();
        }
        return \view('show_governo-2t', compact('depests', 'dados'));
    }

    public function showMunicGov2t(string $munic, Request $request)
    {
        $search = $request->get('search');
        $detalhe = ResultDetalhe::select('nm_municipio',
            DB::raw('SUM(qt_aptos) as aptos'),
            DB::raw( 'SUM(qt_total_votos_nulos) as nulos'),
            DB::raw( 'SUM(qt_total_votos_anulados) as anulados'),
            DB::raw( 'SUM(qt_votos_brancos) as brancos'),
            DB::raw( 'SUM(qt_abstencoes) as abstencoes'),
            DB::raw( 'SUM(qt_votos_validos) as validos'))
            ->where('cd_municipio', '=', $munic)
            ->where('cd_cargo', '=', 3)
            ->where('nr_turno', '=', 2)->first();
        $dados = ResultEleit::select('nm_municipio', DB::raw('SUM(qt_votos_nominais_validos) as total_votos'))
            ->where('cod_municipio', '=', $munic)
            ->where('cd_cargo', '=', 3)
            ->where('nr_turno', '=', 2)->first();
        if ($search == null) {
            $depests = ResultEleit::select('nm_urna_candidato', 'sq_candidato', 'ds_sit_tot_turno', 'ds_composicao_coligacao', 'sg_partido', DB::raw('SUM(qt_votos_nominais_validos) as total_votos'))
                ->where('nr_turno', '=', 2)
                ->where('cd_cargo', '=', 3)
                ->whereIn('cd_sit_tot_turno', [1, 4, 6])
                ->where('cod_municipio', '=', $munic)
                ->where('qt_votos_nominais_validos', '>', 0)
                ->groupBy('nm_urna_candidato')
                ->orderBy('total_votos', 'desc')
                ->get();

        }else {
            $depests = ResultEleit::select('nm_urna_candidato', 'sq_candidato', 'ds_sit_tot_turno', 'ds_composicao_coligacao', 'sg_partido', DB::raw('SUM(qt_votos_nominais_validos) as total_votos'))
                ->where('nr_turno', '=', 2)
                ->where('cd_cargo', '=', 3)
                ->whereIn('cd_sit_tot_turno',  [1, 4, 6])
                ->where('nm_urna_candidato', 'LIKE', '%'.$search.'%')
                ->where('cod_municipio', '=', $munic)
                ->where('qt_votos_nominais_validos', '>', 0)
                ->groupBy('nm_urna_candidato')
                ->orderBy('total_votos', 'desc')
                ->get();
        }
        return \view('show_munic_gov-2t', compact('depests','dados', 'munic', 'detalhe'));
    }
}
