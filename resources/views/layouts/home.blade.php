<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BMJ CRÉD</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('assets/css/home/style.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/home/mediaquery.min.css') }}">
</head>

<body>
    <div class="container">
        <div class="inicial">
            <div class="bmj">
                <div class="titulo">
                    <h1>BMJ CRED</h1>
                </div>
                
            </div>
            <div class="menu">
                <div class="icone" id="btn-icone">
                    <span class="btn btn-hamb">
                        <img src="{{ url('assets/img/menu.png') }}" alt="">
                    </span>
                </div>
                <div class="menu-ativo" id="hamb">
                    <div class="titulo-2">
                        <h1>BMJ CRED</h1>
                    </div>
                    <div class="menu-links">
                        <a href="">PORQUE ESCOLHER A BMJ</a>
                    </div>
                    <div class="menu-links">
                        <a href=""> O QUE PODEMOS FAZER POR VOCÊ?</a>
                    </div>
                    <div class="menu-links">
                        <a href="">SIMULAÇÃO </a>
                    </div>
                    <div class="menu-links">
                        <a href="">DÚVIDAS FREQUENTES</a>
                    </div>
                    <div class="menu-links">
                        <a href="">EDUCAÇÃO FINANCEIRA</a>
                    </div>
                    <div class="menu-links">
                        <a href="">CONTATO</a>
                    </div>
                    <div class="contatos">
                        <div>
                            <span>(41) 3031-3228</span>
                        </div>
                        <div>
                            <span>(41) 3031-6845</span>
                        </div>                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        @yield('content')
    </div>
    <footer></footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/home/script.js"></script>
</body>

</html>
