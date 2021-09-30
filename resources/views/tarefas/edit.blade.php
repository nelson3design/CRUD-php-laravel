@extends('layout.adminAdd')

@section('title',)

@section('contentAdd')


<div class="edit">

                    <form action="/edit/{{ $event->id }}" method="GET" class="gravar">
                       @csrf
                       @method('PUT')
                        <label for="addNome">Nome</label>
                        <input type="text" class="addNome" name="item[]">
    
                        <label for="addEmail">Email</label>
                        <input type="text" class="addEmail" name="intem[]">
    
                        <label for="addIdade">Data de Nacimento</label>
                        <input type="number" class="addIdade" name="item[]">
    
                        <label for="addTel">Telefone</label>
                        <input type="tel" class="addTel" name="item[]">
    
                        <input type="submit" class="btngrava" name="gravar" value="Atualizar">
                    </form>
                </div>

@endsection