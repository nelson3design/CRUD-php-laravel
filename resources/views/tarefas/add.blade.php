   @extends('layout.adminAdd')

@section('title','Adicionar')

@section('contentAdd')


  
  <div class="done">

                    <form action="/add" method="POST" class="gravar">
                        @csrf
    
                        <label for="addNome">Nome</label>
                        <input type="text" class="addNome" name="nome">
        
                        <label for="addEmail">Email</label>
                        <input type="text" class="addEmail" name="email">
        
                        <label for="addIdade">Data de Nacimento</label>
                        <input type="number" class="addIdade" name="idade">
        
                        <label for="addTel">Telefone</label>
                        <input type="tel" class="addTel" name="telefone">
        
                        <input type="submit" class="btngrava" name="gravar" value="Gravar">
                    </form>
                </div>

                 @endsection