@extends('layouts.admin')
    
@section('title','requerimento')

@section('content')

<link rel="stylesheet" href="{{ asset('css/requerimento.css') }}"/> 
<div class="aside">
  <section id="contact" class="contact">         
    <div class="container"  data-aos="fade-up">
    <div class="section-title"><h2>Preencha as informações abaixo <br> para ter acesso a seu livro</h2></div>
      <div class="row mt-1 d-flex justify-content-end" data-aos="fade-right" data-aos-delay="100">
        <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="100">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
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
                <div class="sent-message">Requisição feita com sucesso. Recolha seu livro no endereço: rua Monte Aslam n.9, Bairro Mesa de Pedra!</div>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col">
                <div class="text-center">
                  <button type="submit">Finalizar Requisição</button>
                </div>
              </div>
            </div>
          </form>
            <div class="card-body-card">                      
            <img src="imagens/leitor2.jpg" width="450px" height="400px"  style="margin:-550px 800px 300px"  >              
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

@endsection

