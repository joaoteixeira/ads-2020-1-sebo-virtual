@extends('layouts.admin')
    
    @section('title','leitores')
    
    @section('content')
    
    <link rel="stylesheet" href="{{ asset('css/leitores.css') }}"/>        
    <div class="aside">
    <table class="table"  width="500" height="100" >
            <thead>
              <tr >
                <th>Nome</th>           
                <th>Telefone</th>
                <th>email</th>
                </tr>
              </thead>
            <tbody>
            @foreach($leitores as $leitor)
              <tr>
              <td>{{$loop->iteration}}</td> 
                <td >{{$leitores->nome}}</td>
                <td>{{$leitores->telefone}}</td>
                <td>{{$leitores->email}}</td>
             
          @endforeach
          </tbody>
        </table>
     
        <div class="card-body-card">                      
          <img src="imagens/leitor.jpg" width="450px" height="400px"  style="margin:-550px 800px 300px"  >  
                  
      </div>
    </div>
       
    @endsection
    
