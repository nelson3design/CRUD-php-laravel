@extends('layout.adminAdd')

@section('title','Editar')

@section('contentAdd')


<div class="edit">

                    <form action="/update/{{ $event->id }}" method="POST" class="gravar">
                       @csrf
                       @method('PUT')
                        <label for="addNome">Nome</label>
                        <input type="text" class="addNome" name="nome" value="{{$event->nome}}">
    
                        <label for="addEmail">Email</label>
                        <input type="text" class="addEmail" name="email" value="{{$event->email}}">
    
                        <label for="addIdade">Data de Nacimento</label>
                        <input type="date" class="addIdade" name="idade" value="{{$event->idade}}">
    
                        <label for="addTel">Telefone</label>
                        <input type="tel" class="addTel" name="telefone" value="({{substr($event->telefone,0,2)}}) {{substr($event->telefone,2,5)}}-{{substr($event->telefone,7,5)}}" pattern="[(0-9)]{2}[0-9]{5}[0-9]{4}">
    
                        <input type="submit" class="btngrava" name="" value="Atualizar">
                    </form>
                </div>

@endsection