@extends('layouts.admin')
    
@section('title','create')

@section('content')

  
<style>


</style>
<link rel="stylesheet" href="{{ asset('css/leitores.css') }}"/>        
<div class="aside">
  <section id="contact" class="contact">         
    <div class="container"  data-aos="fade-up">
    <div class="section-title"><h2>Preencha as informações <br>abaixo  para realizar seu cadastro</h2></div>
      <div class="row mt-1 d-flex justify-content-end" data-aos="fade-right" data-aos-delay="100">
        <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="100">
          <form action="{{route('clientes.store')}}" method="post" role="form" class="php-email-form">
          @csrf
            <div class="form-row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="nome" data-rule="minlen:4" data-msg="Insira no mínimo 4 letras" />
                <div class="validate"></div>
              </div>
              <div class="col-md-6 form-group">   
                <input type="text" class="form-control" name="telefone" id="telefone" placeholder="telefone: (xx)xxxxx-xxxx" data-rule="minlen:4" data-msg="Insira seu telefone" />
                <div class="validate"></div>
              </div>
              <div class="col-md-6 form-group">
                <input type="text" name="email" class="form-control" id="name" placeholder="ana@email.com" data-rule="minlen:4" data-msg="Insira seu email" />
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Cadastro realizado</div>
              </div>
            <div class="row mt-3">
              <div class="col">
                <button  type="submit">Finalizar Cadastro</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
 
    <div class="card-body-card">                      
      <img src="imagens/leitor.jpg" width="450px" height="400px"  style="margin:-550px 800px 300px"  >  
              
  </div>
</div>


      


   
@endsection
