<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/borrar', 'TestController@borrar');

Route::get('/words/lote', 'TestController@lote');
Route::post('/words/lote', 'TestController@lote');
Route::get('/words/eliminar/{id}'.'_'.'{nueva_carpeta}', 'TestController@destroy');
//Route::patch('/lote', 'TestController@lote');
Route::match(["get", "post"],'/import', 'TestController@import');
Route::get('/import', 'TestController@import');

Route::post('/words/vistalote', 'TestController@vistalote');
Route::get('/words/vistalote{id}', 'TestController@vistalote_fecha');
Route::get('/words/listarlote', 'TestController@listarlote');

///////////////////////////////////////////////////////////////////////////


//Route::get('words/duplicados', 'WordsController@duplicados');


//Route::get('import-export-view', 'ExcelController@importExportView')->name('import.export.view');

//Route::post('import-file', 'ExcelController@importFile')->name('import.file');
//Route::post('import', 'ExcelController@importFile')->name('import');


//Route::get('export-file/{type}', 'ExcelController@exportFile')->name('export.file');
/*
Route::get('/export_excel', 'ExportExcelController@index');

Route::get('/export_excel/excel', 'ExportExcelController@excel')->name('export_excel.excel');
*/
/*Route::get('/generic_judgments', function () {
    return view('generic_judgments');
});*/
Route::group(['middleware' => 'auth'], function() {

Route::get('/plantilla', function () {
    return view('plantilla');
});
Route::resource('students', 'StudentController');
Route::resource('generic_judgments', 'Generic_JudgmentsController');
Route::resource('word2definitions', 'Word2DefinitionsController');
//Route::resource('word', 'WordController');
Route::resource('words', 'WordsController');
//Route::resource('/words', 'WordsController');

//Route::resource('words/1/edit', 'WordsController');
//Route::get('words', 'WordsController@inde')->name('users');

//Route::post('words/1/edit', 'WordsController');
//Route::resource('words/edit', 'WordsController@edit');

//Route::resource('generic_judgments/create', 'Generic_JudgmentsController@create');
//Route::resource('/', 'Generic_Judgments');
Route::get('words/profile', 'UserController@profile');
Route::post('words/updateprofile', 'UserController@updateProfile');


});
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::post('/import-excel', 'ExcelController@importFile');
Route::post('/export', 'ExcelController@store');