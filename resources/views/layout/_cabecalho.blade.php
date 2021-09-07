<html>
    <head>
      <title>@yield('titulo')</title>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">


      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
        <nav>
            <div class="nav-wrapper deep-orange">
                <a href="#!" class="brand-logo">EletroStar</a>
                <a href="#" data-target="mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="/">Home</a></li>
                    @if (Auth::guest())
                         <li><a href="{{route('site.login')}}">Login</a></li>
                    @else
                         <li><a href="{{route('admin.clientes')}}">Clientes</a></li>
                         <li><a href="{{route('admin.produtos')}}">Produtos</a></li>
                         <li><a href="{{route('admin.unidades')}}">Unidades</a></li>
                         <li><a href="{{route('admin.pedidos')}}">Pedidos</a></li>
                         
                         <li><a href="{{route('site.login.sair')}}">Sair</a></li>
                    @endif

                </ul>
            </div>
        </nav>
        <ul class="sidenav" id="mobile">
            <li><a href="/">Home</a></li>
            @if (Auth::guest())
                <li><a href="{{route('site.login')}}">Cursos</a></li>
            @else
                <li><a href="{{route('admin.clientes')}}">Clientes</a></li>
                <li><a href="{{route('admin.produtos')}}">Produtos</a></li>
                <li><a href="{{route('admin.unidades')}}">Unidades</a></li>
                <li><a href="{{route('admin.pedidos')}}">Pedidos</a></li>
               
                <li><a href="{{route('site.login.sair')}}">Sair</a></li>
            @endif
        </ul>
