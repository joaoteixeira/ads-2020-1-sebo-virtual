@extends('layouts.admin')
    
@section('title','PaginaInicial')

@section('content')

        <!-- Styles -->
        <style>
            *{
                box-sizing:border-box;
                margin:0;
            }

            html, body {
                background-color: #F6F6F6;
                position: relative;
                width: 100%;
                height: 1780px;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                margin: 0;
                box-sizing: border-box;
                padding: 0;
            }
            
            #container-header{
                width: 1366px;
                height: 80px;
                background: #ffffff;
                margin: 0 auto;
                position:relative;
            }
            
            .navbar-expand-lg{
                position: fixed;
                width: 100%;
                height: 80px;
                left: 0px;
                top: 0px;
           
            }

            .navbar-light{
                /*barra inferio*/
                position: absolute;
                left: 0%;
                right: 0%;
                top: 40%;
                bottom: 0%;
                /* azul secundario 2 */
                background: #27496D;
                box-shadow: inset 0px 4px 4px rgba(0, 0, 0, 0.25);
            }
            
            .bg-light{
                /*barra superior */
                position: fixed;
                left: 0%;
                right: 0%;
                top: 0%;
                bottom: 100%;
                /* azul secundario */
                background: #142850;
                border: 1px solid #000000;
                box-sizing: border-box;
                box-shadow: inset 0px 4px 4px rgba(0, 0, 0, 0.25), inset 0px 4px 4px rgba(0, 0, 0, 0.25);
            }

            .botao01{
                font-family: "Nunito";
                color:#ffffff;
                font-size: 16px;
                line-height: 25px;
                text-align: center;
                text-decoration: none;
                text-transform: uppercase;
                cursor:pointer;
                position: absolute;
                left:60%;
                right: 15%;
                top: 50%;
                bottom: 12.5%;
                /* azul bt */
                background: #00A8CC;
                background: -webkit-linear-gradient(bottom, #00A8CC;, #F9F9F9 70%);
                background: -moz-linear-gradient(bottom, #00A8CC;, #F9F9F9 70%);
                background: linear-gradient(bottom, #00A8CC;, #F9F9F9 70%);
                
                border: 0.10px solid  #dae1e7;
                border-radius: 3px;
                box-shadow:0 3px 0 rgba(0, 0, 0, .3),
                            0 2px 7px rgba(0, 0, 0, 0.2);
                text-shadow:0px 1px 0px rgba(000,000,000,0.9),
		                    0px 1px 0px rgba(255,255,255,0.3);
                
                background: -webkit-linear-gradient(
                linear, left top, left bottom,
                from(#00a7cc),
                to(#00a7cc));

                background: linear-gradient(
                top,
                #00a7cc 0%,
                #00a7cc);
                border-radius: 19px;    
            }

            .txtBusca{
                position: absolute;
                left:25%;
                right: 20%;
                top: 50%;
                bottom: 12.5%;
                /* branc */
                background: #FFFFFF;
                border-radius: 20px;
                font-family: "Nunito";
                color:#000000;
                font-size: 16px;
                text-align: center;
            }

            .article{
                width: 15%;
                height: 1780px;
                float: left;
            }

            .aside{
                width: 85%;
                height: 1780px;
                float: right;
            }

            .container-01{
                width: 1200px;
                height: 50px;
                background: #F6F6F6;
                margin: 0 auto;
                
            }
            .container-02{
                width: 270px;
                height: 580px;
                background:#F6F6F6;
                right:1600px;
                position:static;
                margin:30px 70px 0px
            }
                        
            .card{
                width: 270px;
                height: 227px;
                left: 215px;
                right:200px;
                background: #FFFFFF;  
            }
             
            .card-title{
                font-family: "Nunito";
                color:#1b1b2f;
                font-size: 16px;
                text-align: center;                
            }   

            .card-title02{
                font-family: "Nunito";
                color:#1b1b2f;
                font-size: 12px;
                text-align: center;                
            }         

            .card-text{
                font-family: "Nunito";
                color:#1b1b2f;
                font-size: 12px;
                text-align: justify;
                letter-spacing: .1rem;  
            }

            .card01{
                width: 160px;
                height: 220px;
                background:#F6F6F6;
                float:left;
                display: inline-block;
                width:16%;
            }
            
            .card-title01{

                color:#1b1b2f;
                font-size: 18px;
                font-family: 'Merriweather Sans', sans-serif;
                background:#F6F6F6;
                text-align: justify;
                height: 20px;
                border-radius: 5px;
                box-shadow: 20px 10px 70px 0 rgba(68, 88, 144, 0.2);
                transition: all 0.3s ease-in-out;
            }

           .btn-primary{
                text-decoration: none;
                text-transform: uppercase;   
           }

           .footer{
                width: 100%;
                height: 50px;
                border: 1px solid black;
                clear: both;
           }

           .py-4{
                width: 100%;
                height: 50px;
                font-family: "Nunito";
                color:#1b1b2f;
                font-size: 16px;
                text-align: center;  
                background: #27496D;
                clear: both;                
           }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: relative;
                right: 10px;
                top: 18px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            
            .container-03{
                width: 1200px;
                height: 230px;
                background:#F6F6F6;
                margin: 0 auto;  
            }
            .container-04{
                width: 1200px;
                height: 1370px;
                background:#F6F6F6;
                margin: 0 auto;  
            }

            .card-bt {
                padding-top: 0;
            }

            .card-bt .card-bt00 {
                padding: 40px 30px;
                position:static;
                overflow: hidden;

                box-shadow: 5px 10px 29px 0 rgba(68, 88, 144, 0.2);
                transition: all 0.3s ease-in-out;
                border-radius: 10px;
                margin: 0px 170px 0px;

                background-image: url('imagens/books7.jpg');
                background-repeat: no-repeat;
                background-size:840px 220px;
                bottom: 0;
                color: black;
                padding: 3em;
                left:200px;
                text-align: left;
                top: 0;
                width: 70%;
                height: 220px; 
                align: center;               
            }

            .card-bt00 .icon {
                margin: 0px 30px 30px;
                display: inline-block;
                text-align: center;
            }

            .card-bt00 .icon i {
                font-size: 36px;
                line-height: 1;
                color: #f6b024;
            }

            .card-bt00 .title {
                font-family: "Nunito";
                color:#1b1b2f;
                font-weight: 700;
                margin-bottom: 15px;
                font-size: 16px;
                text-align: center;
            }

            .card-bt00 .title h2 {
                color: #05579e;
            }
            
            .card-bt00 .description {
                font-size: 15px;
                line-height: 28px;
                margin-bottom: 0;
                color:#1b1b2f;
            }

            .card-bt01 {
                padding-top: 0;
            }

            .card-bt01 .card-bt01 {
                padding: 40px 30px;
                position:static;
                overflow: hidden;
                
                box-shadow: 5px 10px 29px 0 rgba(68, 88, 144, 0.2);
                transition: all 0.3s ease-in-out;
                border-radius: 10px;
                margin: 0px 0px 30px;

                bottom: 0;
                color: black;
                left: 0;
                overflow: auto;
                padding: 3em;
                right:200px;
                text-align: center;
                top: 0;
                width: 1200px;
                height: 320px;                
            }
            .card-title{
                font-family: "Nunito";
                color:#1b1b2f;
                font-weight: 700;
                vertical-align: 30px;
                font-size: 16px;
            }

            .section {
                padding: 60px 0;
                overflow: hidden;
            }

            .section-bg {
                background-color: #f1f8ff;
            }

            .section-title {
                text-align: center;
                padding-bottom: 30px;
            }

            .section-title h2 {
                font-size: 32px;
                font-weight: bold;
                text-transform: uppercase;
                margin-bottom: 20px;
                padding-bottom: 0;
                color: #054a85;
            }

            .section-title p {
                margin-bottom: 0;
                font-style: italic;
            }

            .text-center a[href] {
                border: 0;
                padding: 5px 25px;
                color: #fff;
                transition: 0.4s;
                border-radius: 50px;
                border: 3px solid  #fff;
                background: #50D890;
                cursor:pointer;
                margin: 0px 60px 0px;
                text-decoration: none;
            }

            .text-center a[href]:hover {
                background:  #00A8CC;;
                color:#fff;
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

            .contact:before {
                content: "";
                background: rgba(255, 255, 255, 0.7);
                bottom: 0;
                top: 0;
                left: 0;
                right: 0;
            }

            .card-link{
                text-decoration: none;
                text-transform: uppercase;
                color:   #EBF0F6;;
                background: #00A8CC;
                font-size: 16px;
                line-height: 50px;
                text-align: center;
              
                border: 0.10px solid  #dae1e7;
                border-radius: 40px;
                box-shadow: 0 1.5px 0 rgba(0, 0, 0, .3),
                            0 2px 7px rgba(0, 0, 0, 0.2);
                            padding: 4px 20px;
            }
            
            .card-body{
                
                height: 30px;
            }

        </style>
  
    
        
        
        <div class="article"> 
            <div class="container-02">   
                <div class="card">
                    <div class="card-body-card">
                        <h5 class="card-title">SUGESTÕES DE LEITURA</h5> 
                        <a href="/Sugestao" class="btn btn-primary">   
                            <img src="imagens/leitura2.jpg"  width="270px" height="190px">  
                        </a>
                    </div>    
                </div>
                <br>
                <div class="card">
                    <div class="card-body-card">
                        <h5 class="card-title">DESTAQUES</h5>
                        <a href="/Destaque" class="btn btn-primary">   
                            <img src="imagens/leitura3.jpg"  width="270px" height="190px"> 
                        </a>
                    </div>        
                </div> 
                <br>   
                <div class="card">
                    <div class="card-body-card">
                        <h5 class="card-title">AUTOR DO MÊS</h5>
                        <a href="/Autor" class="btn btn-primary">   
                            <img src="imagens/book5.png" width="270px" height="190px" >  
                        </a>
                    </div>
                </div>
            </div>
        </div> 
        <div class="aside">
            <section id="card-bt" class="card-bt">
                <div class="container-03">
                    <div class="row">
                        <div class="col-md-6 col-lg-3 align-items-stretch md-5 md-lg-0 aos-init aos animate" data-aos="fade-up">                        
                            <div class="card-bt00">
                                <div class="icon">  
                                     <h2> Pegue o que precisar <br>
                                     Doe o que puder</h2>          
                                    <p class="description"></p>
                                </div>
                                    <div class="text-center">   
                                        <a href="/Doacao">Faça sua doação</a>
                                    </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section> 
            <br>
            <br>
            <section id="card-bt01" class="card-bt01">
                <div class="container-04">                                
                    <div class="row">
                        <div class="" >           
                            <div class="card-title01">
                            <h5>NOVIDADES</h5>
                        </div>
                        <div class="card-bt01">                                       
                            <div class="card01">      
                                <a href="#" class="btn btn-primary"> 
                                <img class="card-img-top" src="imagens/UM AMOR DE INVERNO.png" width="140px" height="150px" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <a href="#" class="btn btn-primary"> 
                                    <h5 class="card-title02">UM AMOR DE INVERNO<br></h5>
                                    <p class="card-text"></p>
                                    </a>
                                </div>
                                <div class="text-center01">
                                    <a href="/Requerimento" class="card-link">REQUISITAR</a>
                                </div>
                            </div>  
                            <div class="card01" >
                                <a href="#" class="btn btn-primary"> 
                                <img class="card-img-top" src="imagens/Um Caminho Para a Liberdade.jpg" width="140px" height="150px" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <a href="#" class="btn btn-primary"> 
                                    <h5 class="card-title02">UM CAMINHO PARA A LIBERDADE</h5>
                                    <p class="card-text"></p>
                                    </a>
                                </div>
                                <div class="text-center01">
                                    <a href="/Requerimento" class="card-link">REQUISITAR</a>   
                                </div>
                            </div>
                            <div class="card01">
                                <a href="#" class="btn btn-primary"> 
                                <img class="card-img-top" src="imagens/O Café da Praia.png" width="140px" height="150px" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <a href="#" class="btn btn-primary"> 
                                    <h5 class="card-title02">O CAFÉ DA PRAIA</h5>
                                    <p class="card-text"></p>
                                    </a>
                                </div>
                                <div class="text-center01">
                                    <a href="/Requerimento" class="card-link">REQUISITAR</a>
                                </div>        
                            </div>
                            <div class="card01">
                                <a href="#" class="btn btn-primary"> 
                                <img class="card-img-top" src="imagens/O Lado Bom Do Lado Ruim.png" width="140px" height="150px" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <a href="#" class="btn btn-primary"> 
                                    <h5 class="card-title02">O LADO BOM DO LADO RUIM</h5>
                                    <p class="card-text"></p>
                                    </a>
                                </div>
                                <div class="text-center01">
                                    <a href="/Requerimento" class="card-link">REQUISITAR</a>
                                </div>        
                            </div>
                            <div class="card01" >
                                <a href="#" class="btn btn-primary"> 
                                <img class="card-img-top" src="imagens/capadelivro.jpg" width="140px" height="150px" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <a href="#" class="btn btn-primary"> 
                                    <h5 class="card-title02">O PODER DO HÁBITO</h5>
                                    <p class="card-text"></p>
                                    </a>
                                </div>
                                <div class="text-center01">
                                    <a href="/Requirimento" class="card-link">REQUISITAR</a>
                                </div>        
                            </div>
                            <div class="card01" >
                                <a href="#" class="btn btn-primary"> 
                                <img class="card-img-top" src="imagens/livroD.jpg" width="140px" height="150px" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <a href="#" class="btn btn-primary"> 
                                    <h5 class="card-title02">A PACIENTE SILENCIOSA</h5>
                                    <p class="card-text"></p>
                                    </a>
                                </div>
                                <div class="text-center01">
                                    <a href="/Requerimento" class="card-link">REQUISITAR</a>
                                </div>        
                            </div>
                        </div>
                    </div>
                    <div class="card-title01">MAIS POPULARES</div>
                        <div class="card-bt01">      
                            <div class="card01" >
                                <a href="#" class="btn btn-primary"> 
                                <img class="card-img-top" src="imagens/livroF.jpg" width="140px" height="150px" alt="Imagem de capa do card"></a>
                                <div class="card-body">
                                    <a href="#" class="btn btn-primary"> 
                                    <h5 class="card-title02">O SOL É PARA TODOS</h5>
                                    <p class="card-text02"></p>
                                    </a>
                                </div>
                                <div class="text-center01">
                                    <a href="/Requerimento" class="card-link">REQUISITAR</a>
                                </div>
                            </div>
                            <div class="card01" >
                                <a href="#" class="btn btn-primary"> 
                                <img class="card-img-top" src="imagens/livroG.jpg" width="140px" height="150px" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <a href="#" class="btn btn-primary"> 
                                    <h5 class="card-title02">LARANJA MECÂNICA</h5>
                                    <p class="card-text"></p>
                                    </a>
                                </div>
                                <div class="text-center01">
                                    <a href="/Requerimento" class="card-link">REQUISITAR</a>
                                </div>
                            </div>
                            <div class="card01" >
                                <a href="#" class="btn btn-primary"> 
                                <img class="card-img-top" src="imagens/livroC.jpg" width="140px" height="150px" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <a href="#" class="btn btn-primary"> 
                                    <h5 class="card-title02">MINHA VERSÃO DE VOCÊ</h5>
                                    <p class="card-text"></p>
                                    </a>
                                </div>
                                <div class="text-center01">
                                    <a href="/Requerimento" class="card-link">REQUISITAR</a>
                                </div>
                            </div>
                            <div class="card01" >
                                <a href="#" class="btn btn-primary"> 
                                <img class="card-img-top" src="imagens/O Labirinto do Fauno.jpg" width="140px" height="150px" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <a href="#" class="btn btn-primary"> 
                                    <h5 class="card-title02">O LABIRINTO DO FAUNO</h5>
                                    <p class="card-text"></p>
                                    </a>
                                </div>
                                <div class="text-center01">
                                    <a href="/Requerimento" class="card-link">REQUISITAR</a>
                                </div>
                            </div>
                            <div class="card01" >
                                <a href="#" class="btn btn-primary"> 
                                <img class="card-img-top" src="imagens/livroH.jpg" width="140px" height="150px" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <a href="#" class="btn btn-primary"> 
                                    <h5 class="card-title02">OS MÉDICOS DA MORTE</h5>
                                    <p class="card-text"></p>
                                    </a>
                                </div>
                                <div class="text-center01">
                                    <a href="/Requerimento" class="card-link">REQUISITAR</a>
                                </div>
                            </div>
                            <div class="card01" >
                                <a href="#" class="btn btn-primary"> 
                                <img class="card-img-top" src="imagens/livroj.png" width="140px" height="150px" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <a href="#" class="btn btn-primary"> 
                                    <h5 class="card-title02">ANNE DE GREEN GLABES</h5>
                                    <p class="card-text"></p>
                                    </a>
                                </div>
                                <div class="text-center01">
                                    <a href="/Requerimento" class="card-link">REQUISITAR</a>
                                </div>
                            </div>
                        </div>                                      
                    <div class="card-title01">LITERATURA BRASILEIRA</div>
                        <div class="card-bt01">      
                            <div class="card01" >
                                <a href="#" class="btn btn-primary"> 
                                <img class="card-img-top" src="imagens/LAÇOS DE FAMILIA.JPG" width="140px" height="150px" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <a href="#" class="btn btn-primary"> 
                                    <h5 class="card-title02">LAÇOS DE FAMÍLIA</h5>
                                    <p class="card-text"></p>
                                    </a>
                                </div>
                                <div class="text-center01">
                                    <a href="/Requerimento" class="card-link">REQUISITAR</a>
                                </div>
                            </div>
                            <div class="card01" >
                                <a href="#" class="btn btn-primary"> 
                                <img class="card-img-top" src="imagens/Constituição Federal.jpg" width="140px" height="150px" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <a href="#" class="btn btn-primary"> 
                                    <h5 class="card-title02">CONSTITUIÇÃO FEDERAL</h5>
                                    <p class="card-text"></p>
                                    </a>
                                </div>
                                <div class="text-center01">
                                    <a href="/Requerimento" class="card-link">REQUISITAR</a>
                                </div>
                            </div>
                            <div class="card01" >
                                <a href="#" class="btn btn-primary"> 
                                <img class="card-img-top" src="imagens/livroK.jpg" width="140px" height="150px" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <a href="#" class="btn btn-primary"> 
                                    <h5 class="card-title02">ALIENISTA</h5>
                                    <p class="card-text"></p>
                                    </a>
                                </div>
                                <div class="text-center01">
                                    <a href="/Requerimento" class="card-link">REQUISITAR</a>
                                </div>
                            </div>
                            <div class="card01" >
                                <a href="#" class="btn btn-primary"> 
                                <img class="card-img-top" src="imagens/livrom.jpg" width="140px" height="150px" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <a href="#" class="btn btn-primary"> 
                                    <h5 class="card-title02">IRACEMA</h5>
                                    <p class="card-text"></p>
                                    </a>
                                </div>
                                <div class="text-center01">
                                    <a href="/Requerimento" class="card-link">REQUISITAR</a>
                                </div>
                            </div>
                            <div class="card01" >
                                <a href="#" class="btn btn-primary"> 
                                <img class="card-img-top" src="imagens/livroN.jpg" width="140px" height="150px" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <a href="#" class="btn btn-primary"> 
                                    <h5 class="card-title02">A PISTA E A RAZÃO</h5>
                                    <p class="card-text"></p>
                                    </a>
                                </div>
                                <div class="text-center01">
                                    <a href="/Requerimento" class="card-link">REQUISITAR</a>
                                </div>
                            </div>
                            <div class="card01" >
                                <a href="#" class="btn btn-primary"> 
                                <img class="card-img-top" src="imagens/livroP.jpg" width="140px" height="150px" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <a href="#" class="btn btn-primary"> 
                                    <h5 class="card-title02">ERAMOS SEIS</h5>
                                    <p class="card-text"></p>
                                    </a>
                                </div>
                                <div class="text-center01">
                                    <a href="/Requerimento" class="card-link">REQUISITAR</a>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>                     
            </section>                       
        </div>    
        
@endsection
