<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Http\Request
//use Illuminate\Support\Facades\Request;
use App\Http\Requests;
use App\Note;
use \Illuminate\Support\Facades\Redirect;

class NotesController extends Controller
{
  public function index(){
    $notes = Note::paginate(20);
   //return View::make
    return view('notes/list',  compact('notes'));
  }
  public function store(){
      $this->validate(request(), [
        //array de reglas
       //especificar nombres de campos y los valores son las reglas de validacion
        'note'=>['required','max:200'] 
      ]);
      //return $request-> metiendole parametro en la funcion Request $request inyeccion de dependencias
     // return Request::only(['note']); facades
      $data= request()->all();
      Note::create($data);
      return Redirect::to('notes');//facades
      //return redirect()->to('notes') helper 
      
      
  }
  public function create(){
      return view('notes/create');      
  }
  public function show($note){
      $note = Note::findOrFail($note);
                           //['note'=>$note     ] 
      return view('notes/details',compact('note'));
  }
}
