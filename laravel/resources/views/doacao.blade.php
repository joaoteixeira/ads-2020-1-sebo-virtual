@extends('layouts.admin')
    
@section('title','doacao')

@section('content')

<link rel="stylesheet" href="{{ asset('css/doacao.css') }}"/>        
<div class="aside">
  <section id="contact" class="contact">         
    <div class="container"  data-aos="fade-up">
    <div class="section-title"><h2>Preencha as informações <br>abaixo  para realizar sua doação</h2></div>
      <div class="row mt-1 d-flex justify-content-end" data-aos="fade-right" data-aos-delay="100">
        <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="100">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="form-row">
             
              <div class="col-md-6 form-group">
                <input type="text" class="form-control" name="nome_livro" id="nome_livro" placeholder="nome do livro" data-rule="minlen:4" data-msg="Insira o nome do livro que deseja requisitar" />
                <div class="validate"></div>
              </div>
              <div class="col-md-6 form-group"> 
                <input type="text" class="form-control" name="autor" id="autor" placeholder="nome do autor" data-rule="minlen:4" data-msg="Insira o nome do autor" />
                <div class="validate"></div>
              </div> 
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Obrigada por sua doação. Endereço para entrega: rua Monte Aslam n.9, Bairro Mesa de Pedra<br> Se Preferir entre em contato e nos informe o endereço para a recolha de sua doação</div>
              </div>
            <div class="row mt-3">
              <div class="col">
             
              <a href="{{route('clientes.create')}}" >Finalizar Doação</a>
                
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
