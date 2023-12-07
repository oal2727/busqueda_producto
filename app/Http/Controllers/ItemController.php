<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Models\UnidadAlquiler;
class ItemController extends Controller
{
    public function index(Request $request){


        $asesorName = $request->query('search');
        $defaultPage = (int)($request->query('page') ?? 1); 
        $defaultPerPage = (int)($request->query('perPage') ?? 10);

        $unidadAlquilers = UnidadAlquiler::with('cliente.asesor');
            
        if($asesorName){
            $unidadAlquilers->when($asesorName, function ($query) use ($asesorName) {
                $query->whereHas('cliente.asesor', function ($subquery) use ($asesorName) {
                    $subquery->where('nombre', 'like', '%' . $asesorName . '%');
                });
            });
        }

        $total = $unidadAlquilers->get();
        $totalResults = count($total);


        $skip = ($defaultPage - 1) * $defaultPerPage;
        $take = $defaultPerPage;

        $unidadAlquilers = $unidadAlquilers
        ->offset($skip)
        ->limit($defaultPerPage) 
        ->get();
        //mapear para facilitar la entrega a la vista
        $transformData = $unidadAlquilers->collect($unidadAlquilers)->map(function($row){
            return [
                "codigo"=>$row["codigo"],
                "tipo_ua"=>$row["tipo_ua"],
                "marca"=>$row["marca"],
                "procesador"=>$row["procesador"],
                "generacion"=>$row["generacion"],
                "nombre_cliente"=>$row->cliente["empresa"],
                "rubro_cliente"=>$row->cliente["sector"],
                "nombre_asesor"=>$row->cliente->asesor["nombre"],
            ];
        });
        return Inertia::render('Item/index',[
            "items"=>$transformData,
            'filters' => [
                'search' => $asesorName,
            ],
            'pagination' => [
                'currentPage' => $defaultPage,
                'perPage' => $defaultPerPage,
                'totalResults' => $totalResults,
            ],
        ]);
    }
}
