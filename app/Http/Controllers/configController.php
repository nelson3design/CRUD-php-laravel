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
     $event->telefone =$request->telefone;
     $event->save();
     return redirect('/')->with('msg','Usuário adicionado com sucesso!');
    }

     public function edit($id){
         $event = Event::findOrFail($id);
     return view('tarefas.edit',['event' =>$event]);
     return redirect('/')->with('msg','Usuário editado com sucesso!');
    }

     public function editAction(){
     
    }
     public function del($id){
       Event::findOrFail($id)->delete();
       return redirect('/')->with('msg2','Usuario excluido com sucesso!');
    }

     public function done(Request $request){
       Event::finOrFail($request->id)->done($request->all());
        return redirect('/')->with('msg3','Usuario editado com sucesso!');
    }
    
}
