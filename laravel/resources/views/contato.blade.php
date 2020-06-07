@extends('layouts.admin')
    
@section('title','contato')

@section('content')

<link rel="stylesheet" href="{{ asset('css/contato.css') }}"/>
<div class="aside"> 
  <section id="faq" class="faq section-bg">
    <div class="container" data-aos="fade-up">
      <div class="section-title01">
        <h2>Perguntas Frequentes</h2>
      </div>
      <div class="faq-list">
        <ul> 
          <li data-aos="fade-up" data-aos="fade-up" data-aos-delay="100" > 
            <div class='question'>
              <input type='checkbox' id='question-1'>
                <a data-toggle="collapse" href="#faq-list-3" class="collapsed">
                    <label for='question-1'>O que é o SEBO VIRTUAL?</label>
                </a>
              <div class='answer'> É uma plataforma de troca de livros, servindo para quem deseja doar e quem deseja um novo livro.</div>     
            </div>
          </li>
          <li data-aos="fade-up" data-aos-delay="200">
            <div class='question'>
              <input type='checkbox' id='question-2'>
                <a data-toggle="collapse" href="#faq-list-3" class="collapsed">
                  <label for='question-2'>Como faço minha doação?</label>
                </a>
              <div class='answer'>Logo após clicar no botão FAÇA SUA DOAÇÃO você deve preencher seus dados, apertar o botão finalizar doação e será informado o local de entrega de sua doação, mas se preferir pode acessar o campo contato e vamos até você.</div>               
            </div>
          </li>
            <li data-aos="fade-up" data-aos-delay="300">
              <div class='question'>
                <input type='checkbox' id='question-3'>
                  <a data-toggle="collapse" href="#faq-list-3" class="collapsed">
                   <label for='question-3'>Como requisitar um livro?</label>
                </a>
              <div class='answer'>Apertando em requisar você será encaminhado para um formulário, depois de preenchê-lo aperte em finalizar e será informado sobre o local de recolha de seu livro.</div>
            </div>
          </li>
            <li data-aos="fade-up" data-aos-delay="400">
              <div class='question'>
                <input type='checkbox' id='question-4'>
                  <a data-toggle="collapse" href="#faq-list-3" class="collapsed">
                   <label for='question-4'>Como encontro um livro que preciso?</label>
                  </a>
                <div class='answer'>Você deverá realizar uma pesquisa, preenchendo o campo especifico com nome da obra ou autor e logo após apertar em pesquisar.</div>
              </div>
            </li>
              <li data-aos="fade-up" data-aos-delay="500">
                <div class='question'>
                  <input type='checkbox' id='question-5'>
                    <a data-toggle="collapse" href="#faq-list-3" class="collapsed">
                      <label for='question-5'>Posso reqisitar mais de um livro?</label>
                    </a>
                  <div class='answer'>Sim, não a limite para as requisições. </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>
     <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <div class="section-title"><h2>Fale conosco</h2></div>
        <div class="row mt-1 d-flex justify-content-end" data-aos="fade-right" data-aos-delay="100">
         <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="100">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="form-row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Nome" data-rule="minlen:4" data-msg="Insira no mínimo 4 letras" />
                  <div class="validate"></div>
                </div>
              <div class="col-md-6 form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="email@exemplo.com" data-rule="email" data-msg="Insira um email valido" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" data-rule="minlen:4" data-msg="Por favor preencha o assunto" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="" placeholder=""></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Sua mensagem foi enviada. Obrigada!</div>
            </div>
            <div class="text-center"><button type="submit">Enviar mensagem</button></div>
          </form>
        </div>
      </div>
    </div>
  </section>
</div>
    
@endsection
