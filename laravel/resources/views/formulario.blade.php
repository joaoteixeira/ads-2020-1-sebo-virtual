@extends('layouts.admin')
    
@section('title','Formulario')

@section('content')

<style>
.col-md-9{
  width:50%;
}
.discovery-pagination-controls{
  border-radius: 6px;
  box-shadow: none;
  background: #dae1e7;
  margin: 0px 0px 50px;
  padding: 8px;
}

.section-title h2{
 margin:50px 10px 50px;
 font-size: 30px;
 font-family: 'Merriweather Sans', sans-serif;
}

.evenRowCol{
margin:0px 50px 0px;
}

.btn-default[type="submit"] {
  border: 0;
  padding: 5px 20px;
  color: #00A8CC;
  transition: 0.4s;
  border-radius: 50px;
  border: 2px solid #00A8CC;
  background: #fff;
  margin: 0px 20px 0px;
  cursor:pointer;
}

.btn-default[type="submit"]:hover {
  background: #00A8CC;
  color: #fff;
}

@-webkit-keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

@keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

</style>

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
          <table class="table"  width="350" height="100" >
            <thead>
              <tr >
                <th>Título</th>           
                <th>Autor</th>
                </tr>
              </thead>
            <tbody>
              <tr align="center">
                <td >Dom Camurro</td>
                <td>Machado de Assis</td>
            </tr>
          </tbody>
        </table>
      </div>
</div>
@endsection