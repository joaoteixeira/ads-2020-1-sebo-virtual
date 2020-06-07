@extends('layouts.admin')
    
@section('title','PaginaInicial')

@section('content')

<link rel="stylesheet" href="{{ asset('css/paginaInicial.css') }}"/> 
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
