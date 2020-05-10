@extends('layouts.admin')
    
@section('title','contato')

@section('content')

<style>
.faq .faq-list {
  padding: 0;
  width: 1100px;
  margin: 30px 30px 130px;
}

.faq .faq-list ul {
  padding: 0;
  list-style: none;
}

.faq .faq-list li + li {
  margin-top: 15px;
}

.faq .faq-list li {
  padding: 10px;
  background: #fff;
  border-radius: 6px;
 
}

.faq .faq-list a {
  display: block;
  position: static;
  font-family: "Nunito", sans-serif;
  font-size: 16px;
  line-height: 24px;
  font-weight: 200;
  padding: 0 40px;
  outline: none;
}

.faq .faq-list .icon-show, .faq .faq-list .icon-close {
  font-size: 24px;
  position: absolute;
  right: 0;
  top: 0;
}

.faq .faq-list p {
  margin-bottom: 0;
  padding: 10px 0 0 0;
}

.section-title01 h2{
  margin:60px 400px 10px;
  font-size: 30px;
 font-family: 'Merriweather Sans', sans-serif;
}

.faq .faq-list a.collapsed {
  color: #343a40;
}

.faq .faq-list a.collapsed:hover {
  color: #0880e8;
}

.faq .faq-list a.collapsed  {
  display: inline-block;
}

.faq .faq-list a.collapsed .icon-close {
  display: none;
}

@media (max-width: 1200px) {
  .faq .faq-list {
    padding: 0;
  }
}

.contact {
 
  position:static;
 
}
.section-title{
  margin:60px 380px 10px;
}
.contact:before {
  content: "";
  background: rgba(255, 255, 255, 0.7);
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
}

.contact .php-email-form {
  width: 75%;
  background: #F6F6F6;
  height: 550px;
}

.contact .php-email-form .form-group {
  padding-bottom: 8px;
  margin: 0px 380px 0px;
}


.contact .php-email-form .validate {
  display: none;
  color: red;
  margin: 0 0 15px 0;
  font-weight: 400;
  font-size: 13px;
}

.contact .php-email-form .error-message {
  display: none;
  color: #fff;
  background: #ed3c0d;
  text-align: center;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .sent-message {
  display: none;
  color: #fff;
  background: #18d26e;
  text-align: center;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .loading {
  display: none;
  background: #fff;
  text-align: center;
  padding: 15px;
}

.contact .php-email-form .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid #18d26e;
  border-top-color: #eee;
  -webkit-animation: animate-loading 1s linear infinite;
  animation: animate-loading 1s linear infinite;
}

.contact .php-email-form input, .contact .php-email-form textarea {
  border-radius: 4px;
  box-shadow: none;
  font-size: 14px;
}

.contact .php-email-form input {
  height: 40px;
  width: 380px;
}

.contact .php-email-form textarea {
  padding: 10px 12px;
  width: 380px;
  height: 250px;
}

.contact .php-email-form button[type="submit"] {
  border: 0;
  padding: 10px 32px;
  color: #00A8CC;
  transition: 0.4s;
  border-radius: 50px;
  border: 2px solid #00A8CC;
  background: #fff;
  margin: 0px 380px 0px;
  cursor:pointer;
}

.contact .php-email-form button[type="submit"]:hover {
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


.question {
  border-bottom: 1px solid #010101;
  padding: 10px 0;
  
}

.question input,
.question .answer { display: none }

.question label {
  display: inline-block;
  font-weight: bold;
  margin-bottom: 5px;
  width: 100%;
  cursor:pointer;
}

.question input:checked ~ .answer {
  display: block
}
.card-form{
  position:static;
}
</style>
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
