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
                <input type="text" name="nome" class="form-control" id="name" placeholder="nome" data-rule="minlen:4" data-msg="Insira no mínimo 4 letras" />
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
    <svg id="Capa_1" enable-background="new 0 0 512 512" height="300" viewBox="0 0 512 512" width="300" xmlns="http://www.w3.org/2000/svg" style="margin:-700px 800px 300px" fill="#40bad5"><g><path d="m426 30h-35v-15c0-8.284-6.716-15-15-15h-240c-8.284 0-15 6.716-15 15v45h305c2.757 0 5 2.243 5 5v25c0 27.57-22.43 50-50 50h-3.791c7.097-15.637 11.618-32.515 13.169-50h-268.756c4.426 49.897 32.948 94.887 76.936 120.023l3.459 1.977h107.967l3.459-1.977c18.08-10.331 33.54-24.022 45.795-40.023h21.762c44.112 0 80-35.888 80-80v-25c0-19.299-15.701-35-35-35z"/><g><path d="m509.481 415.32c3.068-4.603 3.354-10.521.744-15.398s-7.693-7.922-13.225-7.922h-437c-33.084 0-60 26.916-60 60s26.916 60 60 60h437c5.532 0 10.615-3.045 13.225-7.922 2.61-4.878 2.324-10.796-.744-15.398l-11.68-17.52c-3.795-5.692-5.801-12.318-5.801-19.16s2.006-13.468 5.801-19.16zm-112.481 51.68h-282c-8.284 0-15-6.716-15-15s6.716-15 15-15h282c8.284 0 15 6.716 15 15s-6.716 15-15 15z"/><path d="m2.519 338.68c-3.068 4.603-3.354 10.521-.744 15.398s7.693 7.922 13.225 7.922h437c33.084 0 60-26.916 60-60s-26.916-60-60-60h-437c-5.532 0-10.615 3.045-13.225 7.922-2.61 4.878-2.324 10.796.744 15.398l11.68 17.52c3.795 5.692 5.801 12.318 5.801 19.16s-2.006 13.468-5.801 19.16zm112.481-51.68h282c8.284 0 15 6.716 15 15s-6.716 15-15 15h-282c-8.284 0-15-6.716-15-15s6.716-15 15-15z"/></g></g></svg>
              
  </div>
</div>


      


   
@endsection
