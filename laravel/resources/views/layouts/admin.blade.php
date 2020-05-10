<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>@yield('title')</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="estilo.css"/>
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
            .content{
                width: 100%;
                height: 1780px;
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
                position:absolute;
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
                 box-shadow: 0 3px 0 rgba(0, 0, 0, .3),
                               0 2px 7px rgba(0, 0, 0, 0.2);
                text-shadow: 0px 1px 0px rgba(000,000,000,0.9),
		                        0px 1px 0px rgba(255,255,255,0.3);
                font-family: "Nunito";
                color:#ffffff;
                font-size: 16px;
                line-height: 25px;
                text-align: center;
                text-decoration: none;
                text-transform: uppercase;
                cursor:pointer;
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

           .btn-primary{
                text-decoration: none;
                text-transform: uppercase;
                
           }
           .footer{
                width:100%;
                height:15px;
                border: 1px solid black;
                clear: both;
                
           }
           .py-4{
                width: 100%;
                height:15px;
                font-family: "Nunito";
                color:#1b1b2f;
                font-size: 16px;
                text-align: center;  
                background: #27496D;
                clear: both;                
           }

    </style>
    <!-- Custom styles for this template -->
    <link href="{{asset('css/album.css')}}" rel="stylesheet">
  </head>
    <body>
        <header>
            <div id="container-header"> 
            <div class="navbar navbar-expand-lg navbar-light bg-light">
                <nav class="navbar navbar-light bg-light">  
                    <a href="/" class="btn btn-primary">
                    <svg height="35" viewBox="0 0 512 512" width="30" xmlns="http://www.w3.org/2000/svg" position="absolute" style="margin:0px 80px"> ><path d="m416 512h-320c-53.023438 0-96-42.976562-96-96v-320c0-53.023438 42.976562-96 96-96h320c53.023438 0 96 42.976562 96 96v320c0 53.023438-42.976562 96-96 96zm0 0" fill="#40bad5" position="absolute" style="margin:0px 100px"/><path d="m379.9375 243.710938-118.402344-113.488282c-3.085937-2.957031-7.984375-2.957031-11.070312 0l-118.527344 113.617188c-2.496094 2.496094-3.9375 5.96875-3.9375 9.488281 0 7.359375 5.984375 13.328125 13.328125 13.328125h18.671875v96c0 11.792969 9.550781 21.34375 21.328125 21.34375h149.328125c11.792969 0 21.34375-9.550781 21.34375-21.328125v-96h18.671875c7.359375 0 13.328125-5.984375 13.328125-13.328125 0-3.535156-1.441406-7.007812-4.0625-9.632812zm0 0" fill="#142850"/></svg>      
                    </a>
                    <a href="/Contato" class="btn btn-primary">           
                    <svg enable-background="new 0 0 32 32" height="35" viewBox="0 0 32 32" width="30" xmlns="http://www.w3.org/2000/svg" position="absolute" style="margin:0px -65px"><path d="m26 32h-20c-3.314 0-6-2.686-6-6v-20c0-3.314 2.686-6 6-6h20c3.314 0 6 2.686 6 6v20c0 3.314-2.686 6-6 6z" fill="#40bad5"/><path d="m22.333 10.667h-12.666c-.919 0-1.667.747-1.667 1.666v7.333c0 .919.748 1.667 1.667 1.667h12.667c.919 0 1.667-.748 1.667-1.667v-7.333c-.001-.919-.749-1.666-1.668-1.666zm.334 3.606-5.74 3c-.287.147-.607.227-.927.227s-.633-.08-.927-.227l-5.74-3v-1.507l6.353 3.32c.193.1.433.1.627 0l6.353-3.32v1.507z" fill="#142850"/></svg>      
                    </a>
                </nav>             
                <nav class="navbar navbar-light">
                    <img src="imagens/mobilia.svg"  width="60px" height="35" style="margin:5px 250px">
                </nav>
                <div class="Busca">
                    <form class=""  action="search" method="get">
                        <div class="form-group">
                            <input type="text" class="txtBusca" placeholder="procure por: assunto, titulo, autor" size="80">
                        </div>
                        <button id="botao01" type="submit" class="botao01" position="fixed"  >Pesquisar</button>
                    </form>
                    </div>  
                </div> 
            </div> 
        </header>
        <div class="container-01"> </div>
        
        <div class="content">
                <div class="title m-b-md">
                @yield('content')
                </div>
        <footer id="sticky-footer" class="py-4 bg-dark text-white-50" >
            <div class="container-text-center">
                <small> SEBO VIRTUAL &copy; 🎥 &#10084; </small>
            </div>
        </footer>
    
        </body>
</html>