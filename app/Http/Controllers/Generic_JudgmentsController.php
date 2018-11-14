<?php

namespace App\Http\Controllers;

//use App\Generic_Judgments;
use Illuminate\Http\Request;
use App;
//use Illuminate\Support\Facades\Session;
//use function Psy\debug;


class Generic_JudgmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $generic = App\generic_judgments::all();
        return view('generic_judgments.index',compact('generic'));
  

    /* $generic_judgments = Generic_Judgments::orderBy('id_generic_judgment')->get();
        return view('generic_judgments.index', ['generic_judgments' => $generic_judgments]);*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('generic_judgments.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request([
            'cat_data_type', 'cat_state', 'obs', 'created_by', 'created_at', 'updated_by', 'updated_at', 'deleted_by','deleted_at'
        ]);
        App\generic_judgments::create([
           //'id_generic_judgment' => $data['id_generic_judgment'],
            'cat_data_type' => $data['cat_data_type'],
            'cat_state' => $data['cat_state'],
            'obs' => $data['obs'],
            'created_by' => $data['created_by'],
            'created_at' => $data['created_at'],
            'updated_by' => $data['updated_by'],
            'updated_at' => $data['updated_at'],
            'deleted_by' => $data['deleted_by'],
            'deleted_at' => $data['deleted_at']
        ]);
        return redirect()->route('generic_judgments.index');
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
