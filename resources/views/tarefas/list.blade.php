@extends('layout.admin')

@section('title',)

@section('content')
@foreach($events as $event)



                    <div class="table">
                      
                    
                        <table>
        
                            <thead>
                                <tr class="linha1">
                                    <td>nome</td>
                                    <td>email</td>
                                    <td>idade</td>
                                    <td>telefone</td>
                                    <td>ações</td>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$event->nome}}</td>
                                    <td>{{$event->email}}</td>
                                  
                                     <td>{{$event->year-substr($event->idade,0,4)}} anos</td>

                               
                                    
                                    <td>({{substr($event->telefone,0,2)}}) {{substr($event->telefone,2,5)}}-{{substr($event->telefone,7,5)}}</td>
                                    <td>
                                      
                                         <div class="btnClick">

                                             <a href="edit/{{$event->id}}">
     
                                             <input type="submit" value="Edit" name="edit" class="edit">
                                            </a>
                                            
     
     
                                             <form action="/{{$event->id}}" method="GET">
                                               @csrf
                                               @method('DELETE')
                                             <input type="submit" value="Excluir" name="del" class="del">
                                              </form>
                                         </div>

                                    </td>
                                </tr>
                                
        
                            </tbody>
                        </table>

                      
                    </div>
                    
                
  @endforeach
  @endsection