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
                            <svg  viewBox="0 0 512 512" width="270px" height="200px" xmlns="http://www.w3.org/2000/svg"><g id="flat"><path d="m360 488h-40a8 8 0 0 1 0-16h40a8 8 0 0 1 0 16z" fill="#ea9d2d"/><path d="m352 408h-24a8 8 0 0 1 0-16h24a8 8 0 0 1 0 16z" fill="#ea9d2d"/><path d="m280 248h98.264a20 20 0 0 1 10.6 3.04l59.136 36.96-8 32-57.044-32.35-18.956-12.397z" fill="#55300b"/><path d="m348.838 164.744 19.162-28.744 24 40z" fill="#027e2a"/><path d="m328 152 64 24-32 72-64-24z" fill="#02a437"/><path d="m208 192-48 104h32l24-48z" fill="#fdc9a6"/><path d="m192.914 224.686 31.086 23.314 16-24-24-40-8 8z" fill="#2cbff4"/><path d="m112 296h208a48 48 0 0 1 48 48 48 48 0 0 1 -48 48h-208a0 0 0 0 1 0 0v-96a0 0 0 0 1 0 0z" fill="#d32b39"/><rect fill="#fdc9a6" height="80" rx="32" width="64" x="208" y="88"/><path d="m272 112h-48l-16 16-11.631-29.078a22.362 22.362 0 0 1 2.156-20.71 22.363 22.363 0 0 1 25.675-8.812l7.8 2.6 6.274-12.549a23.634 23.634 0 0 1 29.917-11.374 23.635 23.635 0 0 1 13.948 28.437z" fill="#683b0d"/><path d="m224 168-16 24v33.39a28 28 0 0 0 2.956 12.522l29.044 58.088 40-48-16-24-8-56z" fill="#0296e5"/><path d="m232 224 90.325 20.844a17.822 17.822 0 0 0 19.951-9.4 17.825 17.825 0 0 0 -11.253-25.168l-67.023-18.276z" fill="#fdc9a6"/><path d="m264 192-4.326-17.3a19.4 19.4 0 0 0 -18.823-14.7 19.4 19.4 0 0 0 -18.824 24.109l9.973 39.891z" fill="#2cbff4"/><path d="m280 248 86.536 21.634a20 20 0 0 1 13.426 11.28l28.038 63.086-24 24-32-72h-112z" fill="#683b0d"/><path d="m448 288 16-8 24 8-16 40-32-8z" fill="#cbcbcb"/><path d="m408 344 32 16v24l-48 8-8-24z" fill="#cbcbcb"/><path d="m111 312h-24a8 8 0 0 1 0-16h24a8 8 0 0 1 0 16z" fill="#d32b39"/><path d="m128 400h-40a8 8 0 0 1 0-16h40a8 8 0 0 1 0 16z" fill="#d32b39"/><path d="m112 328h208a16 16 0 0 1 16 16 16 16 0 0 1 -16 16h-208z" fill="#cbcbcb"/><path d="m80 392h208a48 48 0 0 1 48 48 48 48 0 0 1 -48 48h-208a0 0 0 0 1 0 0v-96a0 0 0 0 1 0 0z" fill="#ea9d2d" transform="matrix(-1 0 0 -1 416 880)"/><path d="m336 424h-208a16 16 0 0 0 -16 16 16 16 0 0 0 16 16h208z" fill="#cbcbcb"/><path d="m137.373 174.627-1.373 1.373h-48l-1.373-1.373a77.254 77.254 0 0 1 -22.627-54.627 48 48 0 0 1 48-48 48 48 0 0 1 48 48 77.254 77.254 0 0 1 -22.627 54.627z" fill="#ea9d2d"/><path d="m133.657 114.343a8 8 0 0 0 -11.314 0l-10.343 10.344-10.343-10.344a8 8 0 0 0 -11.314 11.314l13.657 13.657v36.686a8 8 0 0 0 16 0v-36.686l13.657-13.657a8 8 0 0 0 0-11.314z" fill="#c38325"/><g fill="#fbb540"><path d="m112 48a8 8 0 0 1 -8-8v-16a8 8 0 0 1 16 0v16a8 8 0 0 1 -8 8z"/><path d="m76.008 57.647a8 8 0 0 1 -6.936-4l-8-13.856a8 8 0 1 1 13.856-8l8 13.856a8 8 0 0 1 -6.92 12z"/><path d="m49.639 84a7.957 7.957 0 0 1 -3.993-1.073l-13.856-8a8 8 0 0 1 8-13.856l13.856 8a8 8 0 0 1 -4.007 14.929z"/><path d="m40 120h-16a8 8 0 0 1 0-16h16a8 8 0 0 1 0 16z"/><path d="m35.8 164a8 8 0 0 1 -4.008-14.929l13.856-8a8 8 0 0 1 8 13.856l-13.856 8a7.969 7.969 0 0 1 -3.992 1.073z"/><path d="m147.992 57.647a8 8 0 0 1 -6.92-12l8-13.856a8 8 0 1 1 13.856 8l-8 13.856a8 8 0 0 1 -6.936 4z"/></g><path d="m136 208-16 16h-16l-16-16v-32h48z" fill="#cbcbcb"/><path d="m88 208h48l-16 16h-16z" fill="#eaeae8"/></g></svg>  
                        </a>
                    </div>    
                </div>
                <br>   
                <div class="card">
                    <div class="card-body-card">
                        <h5 class="card-title">AUTOR DO MÊS</h5>
                        <a href="/Autor" class="btn btn-primary">   
                        <svg  viewBox="0 0 64 64" width="270px" height="200px" xmlns="http://www.w3.org/2000/svg" fill="#40bad5"><g id="Light-Lamp-Idea-Blub-Creative"><path d="m26.55 29.38a1 1 0 0 1 .45.83v2.61l10-1.67v-.94a1 1 0 0 1 .45-.83 10 10 0 1 0 -10.9 0zm.743-7.087a1 1 0 0 1 1.414 0l2.236 2.236 5.3-6.18a1 1 0 0 1 1.518 1.3l-6 7a1 1 0 0 1 -.721.348h-.04a1 1 0 0 1 -.707-.293l-3-3a1 1 0 0 1 0-1.411z"/><path d="m29 45h6a1 1 0 0 0 1-1v-2.653l2.164-.361a1 1 0 1 0 -.328-1.972l-12 2a1 1 0 0 0 .164 1.986.927.927 0 0 0 .165-.014l1.835-.306v1.32a1 1 0 0 0 1 1z"/><path d="m9 52h51v-5h-50a6 6 0 0 0 0 12h50v-5h-51a1 1 0 0 1 0-2z"/><path d="m32 7a1 1 0 0 0 1-1v-3a1 1 0 0 0 -2 0v3a1 1 0 0 0 1 1z"/><path d="m14 21h3a1 1 0 0 0 0-2h-3a1 1 0 0 0 0 2z"/><path d="m47 21h3a1 1 0 0 0 0-2h-3a1 1 0 0 0 0 2z"/><path d="m20.293 10.707a1 1 0 0 0 1.414-1.414l-2-2a1 1 0 1 0 -1.414 1.414z"/><path d="m43 11a1 1 0 0 0 .707-.293l2-2a1 1 0 1 0 -1.414-1.414l-2 2a1 1 0 0 0 .707 1.707z"/><path d="m37.836 35.014-12 2a1 1 0 0 0 .164 1.986.927.927 0 0 0 .165-.014l12-2a1 1 0 1 0 -.328-1.972z"/></g></svg>  
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
                            <div class="card-bt00" >
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
                                <a href="/Livro" class="btn btn-primary"> 
                                <img src="https://img.buzzfeed.com/buzzfeed-static/static/2017-07/12/14/asset/buzzfeed-prod-fastlane-02/sub-buzz-14262-1499883093-3.jpg?downsize=600:*&output-format=auto&output-quality=auto" width="140px" height="150px" alt="Imagem de capa do card"/>
                                <div class="card-body">
                                    <a href="#" class="btn btn-primary"> 
                                    <h5 class="card-title02">A MENINA QUE ROUBAVA LIVROS<br></h5>
                                    <p class="card-text"></p>
                                    </a>
                                </div>
                                <div class="text-center01">
                                    <a href="/Requerimento" class="card-link">REQUISITAR</a>
                                </div>
                            </div>  
                            <div class="card01" >
                                <a href="/Livro" class="btn btn-primary"> 
                                <img class="card-img-top" src="https://img.buzzfeed.com/buzzfeed-static/static/2017-07/12/10/asset/buzzfeed-prod-fastlane-02/sub-buzz-1192-1499870627-1.png?downsize=600:*&output-format=auto&output-quality=auto" width="140px" height="150px" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <a href="#" class="btn btn-primary"> 
                                    <h5 class="card-title02">ADMIRAVÁVEL MUNDO NOVO</h5>
                                    <p class="card-text"></p>
                                    </a>
                                </div>
                                <div class="text-center01">
                                    <a href="/Requerimento" class="card-link">REQUISITAR</a>   
                                </div>
                            </div>
                            <div class="card01">
                                <a href="/Livro" class="btn btn-primary"> 
                                <img class="card-img-top" src="https://img.buzzfeed.com/buzzfeed-static/static/2017-07/12/13/asset/buzzfeed-prod-fastlane-02/sub-buzz-12897-1499881486-16.png?downsize=700%3A%2A&output-quality=auto&output-format=auto" width="140px" height="150px" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <a href="#" class="btn btn-primary"> 
                                    <h5 class="card-title02">OUTROS JEITOS DE USAR A BOCA</h5>
                                    <p class="card-text"></p>
                                    </a>
                                </div>
                                <div class="text-center01">
                                    <a href="/Requerimento" class="card-link">REQUISITAR</a>
                                </div>        
                            </div>
                            <div class="card01">
                                <a href="/Livro" class="btn btn-primary"> 
                                <img class="card-img-top" src="https://4.bp.blogspot.com/-B902NPbN6lI/V49g40ZXtJI/AAAAAAAAbLo/8Gkw1KK0K3cwwnV_k58gl-Bh1uuYnNxzQCLcB/s1600/13720588_1227151630683267_1762470487_o.jpg" width="140px" height="150px" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <a href="#" class="btn btn-primary"> 
                                    <h5 class="card-title02">A REVOLUÇÃO DOS BICHOS</h5>
                                    <p class="card-text"></p>
                                    </a>
                                </div>
                                <div class="text-center01">
                                    <a href="/Requerimento" class="card-link">REQUISITAR</a>
                                </div>        
                            </div>
                            <div class="card01" >
                                <a href="/Livro" class="btn btn-primary"> 
                                <img class="card-img-top" src="https://img.buzzfeed.com/buzzfeed-static/static/2017-07/11/16/asset/buzzfeed-prod-fastlane-02/sub-buzz-19365-1499804693-2.jpg?downsize=600:*&output-format=auto&output-quality=auto" width="140px" height="150px" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <a href="#" class="btn btn-primary"> 
                                    <h5 class="card-title02">A MARCA DE UMA LÁGRIMA</h5>
                                    <p class="card-text"></p>
                                    </a>
                                </div>
                                <div class="text-center01">
                                    <a href="/Requirimento" class="card-link">REQUISITAR</a>
                                </div>        
                            </div>
                            <div class="card01" >
                                <a href="/Livro" class="btn btn-primary"> 
                                <img class="card-img-top" src="https://img.buzzfeed.com/buzzfeed-static/static/2017-07/12/15/asset/buzzfeed-prod-fastlane-03/sub-buzz-26454-1499886357-4.png?downsize=600:*&output-format=auto&output-quality=auto" width="140px" height="150px" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <a href="#" class="btn btn-primary"> 
                                    <h5 class="card-title02">AMERICANAH</h5>
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
                                <a href="/Livro" class="btn btn-primary"> 
                                <img class="card-img-top" src="https://img.buzzfeed.com/buzzfeed-static/static/2017-07/12/14/asset/buzzfeed-prod-fastlane-01/sub-buzz-7071-1499883463-14.jpg?downsize=600:*&output-format=auto&output-quality=auto" width="140px" height="150px" alt="Imagem de capa do card"></a>
                                <div class="card-body">
                                    <a href="#" class="btn btn-primary"> 
                                    <h5 class="card-title02">ORGULHO E PRECONCEITO</h5>
                                    <p class="card-text02"></p>
                                    </a>
                                </div>
                                <div class="text-center01">
                                    <a href="/Requerimento" class="card-link">REQUISITAR</a>
                                </div>
                            </div>
                            <div class="card01" >
                                <a href="/Livro" class="btn btn-primary"> 
                                <img class="card-img-top" src="https://img.buzzfeed.com/buzzfeed-static/static/2017-07/12/14/asset/buzzfeed-prod-fastlane-01/sub-buzz-8536-1499885308-7.jpg?downsize=600:*&output-format=auto&output-quality=auto" width="140px" height="150px" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <a href="#" class="btn btn-primary"> 
                                    <h5 class="card-title02">EXTRAORDINÁRIO</h5>
                                    <p class="card-text"></p>
                                    </a>
                                </div>
                                <div class="text-center01">
                                    <a href="/Requerimento" class="card-link">REQUISITAR</a>
                                </div>
                            </div>
                            <div class="card01" >
                                <a href="/Livro" class="btn btn-primary"> 
                                <img class="card-img-top" src="https://img.buzzfeed.com/buzzfeed-static/static/2017-07/12/13/asset/buzzfeed-prod-fastlane-03/sub-buzz-22327-1499880519-7.jpg?downsize=600:*&output-format=auto&output-quality=auto" width="140px" height="150px" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <a href="#" class="btn btn-primary"> 
                                    <h5 class="card-title02">O CAÇADOR DE PIPAS</h5>
                                    <p class="card-text"></p>
                                    </a>
                                </div>
                                <div class="text-center01">
                                    <a href="/Requerimento" class="card-link">REQUISITAR</a>
                                </div>
                            </div>
                            <div class="card01" >
                                <a href="/Livro" class="btn btn-primary"> 
                                <img class="card-img-top" src="https://img.buzzfeed.com/buzzfeed-static/static/2017-07/12/10/asset/buzzfeed-prod-fastlane-02/sub-buzz-649-1499870194-11.jpg?downsize=600:*&output-format=auto&output-quality=auto" width="140px" height="150px" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <a href="#" class="btn btn-primary"> 
                                    <h5 class="card-title02">A INSUSTENTÁVEL LEVEZA DO SER</h5>
                                    <p class="card-text"></p>
                                    </a>
                                </div>
                                <div class="text-center01">
                                    <a href="/Requerimento" class="card-link">REQUISITAR</a>
                                </div>
                            </div>
                            <div class="card01" >
                                <a href="/Livro" class="btn btn-primary"> 
                                <img class="card-img-top" src="https://img.buzzfeed.com/buzzfeed-static/static/2017-07/12/10/asset/buzzfeed-prod-fastlane-02/sub-buzz-32520-1499869314-6.jpg?downsize=600:*&output-format=auto&output-quality=auto" width="140px" height="150px" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <a href="#" class="btn btn-primary"> 
                                    <h5 class="card-title02">FRASER E BILLY</h5>
                                    <p class="card-text"></p>
                                    </a>
                                </div>
                                <div class="text-center01">
                                    <a href="/Requerimento" class="card-link">REQUISITAR</a>
                                </div>
                            </div>
                            <div class="card01" >
                                <a href="/Livro" class="btn btn-primary"> 
                                <img class="card-img-top" src="https://img.buzzfeed.com/buzzfeed-static/static/2017-07/12/10/asset/buzzfeed-prod-fastlane-01/sub-buzz-24591-1499868761-16.jpg?downsize=600:*&output-format=auto&output-quality=auto" width="140px" height="150px" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <a href="#" class="btn btn-primary"> 
                                    <h5 class="card-title02">A SOMBRA DO VENTO</h5>
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
                                <a href="/Livro" class="btn btn-primary"> 
                                <img class="card-img-top" src="https://img.buzzfeed.com/buzzfeed-static/static/2017-07/12/14/asset/buzzfeed-prod-fastlane-02/sub-buzz-15142-1499884676-1.jpg?downsize=600:*&output-format=auto&output-quality=auto" width="140px" height="150px" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <a href="#" class="btn btn-primary"> 
                                    <h5 class="card-title02">GRANDE SERTÃO VEREDAS</h5>
                                    <p class="card-text"></p>
                                    </a>
                                </div>
                                <div class="text-center01">
                                    <a href="/Requerimento" class="card-link">REQUISITAR</a>
                                </div>
                            </div>
                            <div class="card01" >
                                <a href="/Livro" class="btn btn-primary"> 
                                <img class="card-img-top" src="https://img.buzzfeed.com/buzzfeed-static/static/2017-07/12/13/asset/buzzfeed-prod-fastlane-03/sub-buzz-21803-1499879464-5.jpg?downsize=600:*&output-format=auto&output-quality=auto" width="140px" height="150px" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <a href="#" class="btn btn-primary"> 
                                    <h5 class="card-title02">CAMILO MORTÁGUA</h5>
                                    <p class="card-text"></p>
                                    </a>
                                </div>
                                <div class="text-center01">
                                    <a href="/Requerimento" class="card-link">REQUISITAR</a>
                                </div>
                            </div>
                            <div class="card01" >
                                <a href="/Livro" class="btn btn-primary"> 
                                <img class="card-img-top" src="https://img.buzzfeed.com/buzzfeed-static/static/2017-07/12/11/asset/buzzfeed-prod-fastlane-01/sub-buzz-32536-1499872848-9.jpg?downsize=600:*&output-format=auto&output-quality=auto" width="140px" height="150px" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <a href="#" class="btn btn-primary"> 
                                    <h5 class="card-title02">HISTÓRIA DO NOVO SOBRENOME</h5>
                                    <p class="card-text"></p>
                                    </a>
                                </div>
                                <div class="text-center01">
                                    <a href="/Requerimento" class="card-link">REQUISITAR</a>
                                </div>
                            </div>
                            <div class="card01" >
                                <a href="/Livro" class="btn btn-primary"> 
                                <img class="card-img-top" src="https://img.buzzfeed.com/buzzfeed-static/static/2017-07/12/10/asset/buzzfeed-prod-fastlane-01/sub-buzz-26521-1499871265-8.jpg?downsize=600:*&output-format=auto&output-quality=auto" width="140px" height="150px" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <a href="#" class="btn btn-primary"> 
                                    <h5 class="card-title02">O HOMEM QUE DESAFIOU O DIABO</h5>
                                    <p class="card-text"></p>
                                    </a>
                                </div>
                                <div class="text-center01">
                                    <a href="/Requerimento" class="card-link">REQUISITAR</a>
                                </div>
                            </div>
                            <div class="card01" >
                                <a href="/Livro" class="btn btn-primary"> 
                                <img class="card-img-top" src="https://img.buzzfeed.com/buzzfeed-static/static/2017-07/12/13/asset/buzzfeed-prod-fastlane-02/sub-buzz-13399-1499881990-1.jpg?downsize=600:*&output-format=auto&output-quality=auto" width="140px" height="150px" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <a href="#" class="btn btn-primary"> 
                                    <h5 class="card-title02">PARAÍSOS ARTIFICIAIS</h5>
                                    <p class="card-text"></p>
                                    </a>
                                </div>
                                <div class="text-center01">
                                    <a href="/Requerimento" class="card-link">REQUISITAR</a>
                                </div>
                            </div>
                            <div class="card01" >
                                <a href="/Livro" class="btn btn-primary"> 
                                <img class="card-img-top" src="http://1.bp.blogspot.com/-C_v-IIqyL4A/Tsm3iD20fGI/AAAAAAAAAjU/mwfpVWr_JXE/s1600/O+alienista.jpg" width="140px" height="150px" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <a href="#" class="btn btn-primary"> 
                                    <h5 class="card-title02">O ALIENISTA</h5>
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
