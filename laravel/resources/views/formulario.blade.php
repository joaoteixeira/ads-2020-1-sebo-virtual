@extends('layouts.admin')
    
@section('title','Formulario')

@section('content')

<link rel="stylesheet" href="{{ asset('css/formulario.css') }}"/>  
<div class="aside">         
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="section-title"><h2>Página de Busca</h2></div>   
          <div class="discovery-pagination-controls panel-footer">
            <form action="simple-search" method="get">
              <input type="hidden" value="" name="location" />
              <input type="hidden" value="" name="query" />
                <label for="rpp" style="margin: 0px 10px 0px">Resultados/Página</label>
                  <select class="custom-select d-block w-100"  name="rpp" >
                  <option value="5" selected="selected">5</option>
                    <option value="10" >5</option>
                    <option value="15" >15</option>
                    <option value="20" >20</option>
                    <option value="25" >25</option>
                    <option value="30" >30</option>
                    <option value="35" >35</option>
                    <option value="40" >40</option>
                    <option value="45" >45</option>
                    <option value="50" >50</option>
                  </select>
                <label for="sort_by">Ordenar registros por</label>
                  <select name="sort_by">
                    <option value="score">Autor</option>
                    <option value="dc.title_sort" >Título</option> <option value="dc.date.issued_dt" >Título</option>
                  </select>
                <label for="order">Ordenar</label>
                  <select name="order">
                    <option value="ASC" >Crescente</option>
                    <option value="DESC" selected="selected">Descendente</option>
                  </select>
                  <input type="hidden" name="etal" value="0"/>
                  <input class="btn btn-default" type="submit" name="submit_search" value="Atualizar"/>
              </form>
            </div>
          </div>   
          <table class="table"  width="500" height="100" >
            <thead>
              <tr >
                <th>#</th>
                <th>Nome</th>           
                <th>Autor</th>
                </tr>
              </thead>
            <tbody>
            @foreach($livros as $livro)
              <tr>
              <td>{{$livro->id}}</td>
                <td >{{$livro->nome}}</td>
                <td>{{$livro->autor}}</td>
              </tr>
          @endforeach
          </tbody>
        </table>
      </div>
</div>
@endsection