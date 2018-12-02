<?php

namespace App\Http\Controllers;

use App\Models\Monster;
use Illuminate\Http\Request;
use App\Exports\MonstersExport;
use App\Imports\MonstersImport;
use Maatwebsite\Excel\Facades\Excel;

class MonsterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
     * @param  \App\Models\Monster  $monster
     * @return \Illuminate\Http\Response
     */
    public function show(Monster $monster)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Monster  $monster
     * @return \Illuminate\Http\Response
     */
    public function edit(Monster $monster)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Monster  $monster
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Monster $monster)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Monster  $monster
     * @return \Illuminate\Http\Response
     */
    public function destroy(Monster $monster)
    {
        //
    }

    /**
     * Resolve o envio do arquivo.
     *
     * @param Request $request
     * @return void
     */
    public function importOld(Request $request)
    {
        /*
         * O campo do form com o arquivo tinha o atributo name="file".
         */
        if($request->file('imported-file')) {
            $path = $request->file('imported-file')->getRealPath();
            $data = Excel::load($path, function($reader) {
                })->get();
            print_r($data);exit;
            // if(!empty($data) && $data->count()) {
            //     $data = $data->toArray();
            //     for($i=0;$i<count($data);$i++) {
            //         $dataImported[] = $data[$i];
            //     }
            // }

            //Monster::insert($dataImported);
        }
        return back();
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function importExportView()
    {
       return view('import');
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function export() 
    {
        return Excel::download(new MonstersExport, 'MonstersExport.xlsx');
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function import() 
    {
        Excel::import(new MonstersImport,request()->file('imported-file'));
           
        return back();
    }
}
