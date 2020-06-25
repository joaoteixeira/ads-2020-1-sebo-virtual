<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>@yield('title')</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/admin.css') }}"/>

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
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="60px" height="35" style="margin:5px 250px" fill="#40bad5"
	 viewBox="0 0 351.72 351.72" style="enable-background:new 0 0 351.72 351.72;" xml:space="preserve">
<g>
	<g>
		<path d="M286.66,0h-30.28v102.48c0,7.2-7.28,10.76-12.92,1.72l-20-32l-20,32c-5.68,9-12.92,5.48-12.92-1.72V0H89.02
			c-24.541,0.066-44.4,19.979-44.4,44.52v262.8c0.066,24.494,19.906,44.334,44.4,44.4H286.7c5.406-0.009,10.587-2.167,14.4-6
			c3.833-3.813,5.991-8.994,6-14.4V20.44C307.078,9.16,297.94,0.022,286.66,0z M290.46,298.92l-192.88,0.24
			c-4.204,0.29-7.549,3.636-7.839,7.839c-0.321,4.65,3.189,8.68,7.839,9.001h192.88l-0.04,15.52c0.002,0.925-0.357,1.815-1,2.48
			c-0.665,0.643-1.555,1.002-2.48,1H89.02c-15.188,0-27.5-12.312-27.5-27.5c0-15.188,12.312-27.5,27.5-27.5h197.92
			c1.935,0.022,3.498,1.585,3.52,3.52V298.92z"/>
	</g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>

                    
                </nav>
                <div class="Busca">
                    <form class=""  action="search" method="get">
                        <div class="form-group">
                            <input type="text" class="txtBusca" placeholder="procure por: assunto, titulo, autor" size="80">
                        </div>
                        <a href="/Formulario" id="botao01"  class="botao01">Pesquisar</a>
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
                <small>SEBO VIRTUAL &copy;</small>
            </div>
        </footer>
        </body>
</html>