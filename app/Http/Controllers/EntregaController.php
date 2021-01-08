<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Equipologin;
use DataTables;

//use Request;

use Validator;
use Response;
use Illuminate\Support\Facades\DB;

class EntregaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        if($request->ajax()){
            $data = Equipologin::where( [['tipo_reparto', '=', 'entrega']]  )->get();

           // dd($data);

            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('dowload', function($raw){
                        $btn2 = ' <a href="javascript:void(0)"  data-id="'.$raw->id.'" data-original-title="Ver"  id="botonFile"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/1200px-PDF_file_icon.svg.png" title="descargar" alt="descargar" id="img" with="50"  width="30" height="30"></a>';

                        return $btn2;
                    })
                    ->addColumn('action', function($row){

                        $btn = ' <a href="javascript:void(0)"  data-id="'.$row->id.'" data-original-title="Ver" class="ver btn btn-primary btn-sm verDevolucion" id="botonView">Ver</a>';
   
                           $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-warning btn-sm editEntrega">Edit</a>';
   
                           $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteEntrega">Delete</a>';
    
                            return $btn;
                    })
                    ->rawColumns(['dowload', 'action'])
                    ->make(true);
            }

        

        return view('ingreso.entrega.index');
    }

    public function file($id){
        $pdf = Equipologin::find($id);
        $pathToFile = "upload/".$pdf->archivo;



        if($pathToFile === null){
            return redirect('ingreso.entrega.index')->with('warnign', 'no existe el dni');
        }else{
            return response()->download($pathToFile);
        }
        

        
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $datos = Equipologin::find($id);

        return view('ingreso.entrega.show', compact('datos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Equipologin::find($id);
        return response()->json($product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
