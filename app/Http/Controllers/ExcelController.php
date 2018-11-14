<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Imports\wordsImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

use App\Imports\YourImport;
use Maatwebsite\Excel\Importer;

use App\Exports\YourExport;

use DB;

use App\words;



class ExcelController extends Controller

{

	/**

     * Create a new controller instance.

     *

     * @return void

     */

    public function importExportView(){

        return view('import_export');

    }



    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function importFile(Request $request){

       // if($request->hasFile('sample_file')){
           // $table->string('id_word')->nullable();



            $path = $request->file('sample_file');
            $cover = $request->file('sample_file');
            


           $data = Excel::import(new wordsImport, $path);
            

           /* Excel::import(new UsersImport, 'users.xlsx');
        
            return redirect('/')->with('success', 'All good!');*/

           /* if($data->count()){

                foreach ($data as $key => $value) {

                    $arr[] = ['grapheme' => $value->grapheme];

                }

                if(!empty($arr)){

                    DB::table('words')->insert($arr);

                    dd('Insert Recorded successfully.');

                }

            }*/
           // return redirect('/')->with('success', 'All good!');



      //  }

        dd('Request data does not have any files to import.');      

    } 



    /**

     * Create a new controller instance.

     *

     * @return void

     */
/*
    public function exportFile($type){

        $products = Product::get()->toArray();



        return \Excel::create('hdtuto_demo', function($excel) use ($products) {

            $excel->sheet('sheet name', function($sheet) use ($products)

            {

                $sheet->fromArray($products);

            });

        })->download($type);

    }      */

}