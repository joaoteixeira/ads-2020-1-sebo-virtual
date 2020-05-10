@extends('layouts.admin')
    
@section('title','doacao')

@section('content')

<style>

.contact {
 
 position:static;

}
.section-title h2{
 margin:180px 180px 50px;
 font-size: 30px;
 font-family: 'Merriweather Sans', sans-serif;
}
.contact:before {
 content: "";
 background: rgba(255, 255, 255, 0.7);
 bottom: 0;
 top: 0;
 left: 0;
 right: 0;
}

.contact .info {
 width: 100%;

}

.contact .info i {
 font-size: 20px;
 background:#fff ;
 color: #0880e8;
 float: left;
 width: 80px;
 height: 50px;
 display: flex;
 justify-content: center;
 align-items: center;
 border-radius: 50px;
 transition: all 0.3s ease-in-out;
}

.contact .info h4 {
 padding: 0 0 0 60px;
 font-size: 20px;
 font-weight: 700;
 margin-bottom: 5px;
 color: #043c6d;
 
}

.contact .info p {
 padding: 0 0 0 60px;
 margin-bottom: 0;
 font-size: 14px;
 color: #444444;
}

.contact .info .email, .contact .info .phone {
 margin-top: 40px;
}



.contact .php-email-form {
 width: 75%;
 background: #F6F6F6;
 height: 550px;
}


.contact .php-email-form .form-group {
 padding-bottom: 50px;
 margin: 0px 200px 0px;
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
.col button[type="submit"] {
  border: 0;
  padding: 10px 32px;
  color: #00A8CC;
  transition: 0.4s;
  border-radius: 50px;
  border: 2px solid #00A8CC;
  background: #fff;
  margin: 0px 200px 0px;
  cursor:pointer;
}

.col button[type="submit"]:hover {
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
  <section id="contact" class="contact">         
    <div class="container"  data-aos="fade-up">
    <div class="section-title"><h2>Preencha as informações <br>abaixo  para realizar sua doação</h2></div>
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
                <div class="sent-message">Obrigada por sua doação. Endereço para entrega: rua Monte Aslam n.9, Bairro Mesa de Pedra<br> Se Preferir entre em contato e nos informe o endereço para a recolha de sua doação</div>
              </div>
            <div class="row mt-3">
              <div class="col">
                <button  type="submit">Finalizar Doação</button>
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
