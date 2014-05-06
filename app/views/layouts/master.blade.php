<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <title>{{Lang::get('text.titol')}}</title>
    {{ HTML::style('packages/bootstrap/css/bootstrap.min.css') }}
    {{ HTML::style('css/main.css')}}
</head>
<body>
 
    <div class="container">
        <div class="header">
                <ul class="nav nav-pills pull-right">
                    @if(!Auth::check())  
                        <li>{{ HTML::link('users/register', Lang::get('text.registrar-se')) }}</li>   
                        <li>{{ HTML::link('users/login', Lang::get('text.accedeix')) }}</li> 
                    @else
                        <li>{{ HTML::link('users/logout', Lang::get('text.desconnexio')) }}</li>
                    @endif  
                    <li><a href="{{ URL::to('idioma/ca')}}">CA</a></li>
                    <li><a href="{{ URL::to('idioma/es')}}">ES</a></li>
                </ul>
                <h3 class="text-muted">{{ HTML::link('index', Lang::get('text.titol')) }}</h3> 
        </div>
    </div> 
             
 
    <div class="container">
        @if(Session::has('message'))
            <p class="alert alert-warning">{{ Session::get('message') }}</p>
        @endif

        @yield('content')

    </div>
    
 
    </body>
</html>