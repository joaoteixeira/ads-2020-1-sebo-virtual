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
            <svg id="Layer_1" enable-background="new 0 0 512 512" viewBox="0 0 512 512"  xmlns="http://www.w3.org/2000/svg" width="450px" height="400px"  style="margin:-550px 800px 300px" fill="#40bad5"><g><path d="m88 456c-8.837 0-16-7.164-16-16v-374c0-36.393 29.607-66 66-66h286c8.837 0 16 7.164 16 16v368c0 8.836-7.163 16-16 16s-16-7.164-16-16v-352h-270c-18.748 0-34 15.252-34 34v374c0 8.836-7.163 16-16 16z"/><path d="m424 512h-280c-39.701 0-72-32.299-72-72s32.299-72 72-72h280c8.837 0 16 7.164 16 16s-7.163 16-16 16h-280c-22.056 0-40 17.944-40 40s17.944 40 40 40h280c8.837 0 16 7.164 16 16s-7.163 16-16 16z"/><path d="m424 456h-280c-8.837 0-16-7.164-16-16s7.163-16 16-16h280c8.837 0 16 7.164 16 16s-7.163 16-16 16z"/><path d="m160 400c-8.837 0-16-7.164-16-16v-368c0-8.836 7.163-16 16-16s16 7.164 16 16v368c0 8.836-7.163 16-16 16z"/></g></svg> 
                          
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

@endsection

