<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class configController extends Controller
{
    public function list(){

        $search = request('search');

        if($search){
           
            $events= Event::where([
                ['nome','like','%'.$search.'%']
            ])->get();
        }else{

            $events = Event::all();
        }
     return view('tarefas.list',[
       'events'=>$events,'search' =>$search
     ]);
    }

     public function add(){
     return view('tarefas.add');
    }

     public function addAction(Request $request){
        
     $event = new Event;
     $event->nome =$request->nome;
     $event->email =$request->email;
     $event->idade =$request->idade;
     $event->telefone =$request->input('telefone');
     $event->save();
     return redirect('/')->with('msg','Usuário adicionado com sucesso!');
    }

     public function edit($id){
         $event = Event::findOrFail($id);
         $events = Event::all();
     return view('tarefas.edit',['event' =>$event]);
    
    }

    
     public function del($id){
       Event::findOrFail($id)->delete();
       return redirect('/')->with('msg2','Usuario excluido com sucesso!');
    }

     public function update(Request $request){
        
       Event::findOrFail($request->id)->update($request->all());

        return redirect('/')->with('msg3','Usuario editado com sucesso!');
    }

 
}
