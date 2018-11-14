<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\words;
use DB;
class WordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $wor = words::join('generic_judgments','id_generic_judgment', '=', 'generic_judgments.id_generic_judgment')
        ->select('word.id_generic_judgment')
        ->get();

       // $wor = App\word::where('id_word',1)->get();
        return view('word.index',compact('wor'));

        //return view('word.index',compact('wor'));
        //return $this->belongsTo();

     /*   $wor=DB::table('generic_judgments')
        ->join('word', 'word.id_generic_judgment', '=', 'generic_judgments.id_generic_judgment')
        ->select('generic_judgments.id_generic_judgment','word.id_word')
        ->get();
        return view('word.index',compact('wor'));*/

        
       // $wor = App\word::all();
        //return view('word.index',compact('wor'));
       // $wor = App\word::where('id_word',1)->get();
       // $war = App\generic_judgments::orderBy('id_generic_judgment')->get();
       // return view('word.index', ['wor' => $wor,'war' => $war]);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
