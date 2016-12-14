@extends('layouts.master')

@section('title')
    Login | @parent
@stop

@section('meta')

@stop

@section('style')

{!! Theme::style('css/pages/signin.css') !!}

<style>
    #navegador-principal {display:none;}
    #sub-navegador {display:none;}
    #extra-footer {display:none;}
    #footer {display:none;}
    .alertas{margin-top: 30px;}
</style>

@stop

@section('content')


    <div class="navbar navbar-fixed-top">

    <div class="navbar-inner">

            <div class="container">

                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                    </a>

                    <a class="brand" href="index.html">
                            Gestión de Actas de Notas				
                    </a>		

                    <!--<div class="nav-collapse">
                            <ul class="nav pull-right">

                                    <li class="">						
                                            <a href="signup.html" class="">
                                                    Don't have an account?
                                            </a>

                                    </li>

                                    <li class="">						
                                            <a href="index.html" class="">
                                                    <i class="icon-chevron-left"></i>
                                                    Back to Homepage
                                            </a>

                                    </li>
                            </ul>

                    </div>--><!--/.nav-collapse -->	

            </div> <!-- /container -->

    </div> <!-- /navbar-inner -->

    </div> <!-- /navbar -->


<div class="container-fluid">

    <div class="alertas">
        @if(session('error'))

            <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4>{!! session('error') !!}</h4>
            </div>

        @elseif(session('usuario'))

            <div class="alert alert-warning">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4>{!! session('usuario') !!}</h4>
            </div>

        @endif
    </div>

    <div class="account-container">

        <div class="content clearfix">

                <h1>Inicio de Sesión</h1>		

                {!!Form::open(array('route' => 'doLogin','method' => 'POST'))!!}
                
                    <div class="login-fields">

                            <p>Ingresa tus datos</p>

                            <div class="field">
                                    <label for="username">Usuario</label>
                                    <input type="text" id="username" name="username" value="" placeholder="Usuario" class="login username-field" autocomplete="off">
                            </div> <!-- /field -->

                            <div class="field">
                                    <label for="password">Contraseña:</label>
                                    <input type="password" id="password" name="password" value="" placeholder="Contraseña" class="login password-field" autocomplete="off">

                    </div> <!-- /login-fields -->

                    <div class="login-actions">

                            <!--<span class="login-checkbox">
                                    <input id="Field" name="Field" type="checkbox" class="field login-checkbox" value="First Choice" tabindex="4" />
                                    <label class="choice" for="Field">Keep me signed in</label>
                            </span>-->

                            <button class="button btn btn-success btn-large" type="submit">Ingresar</button>

                    </div> <!-- .actions -->
                    
                {!!Form::close()!!}


                    </div> <!-- /content -->

        </div> <!-- /account-container -->

    </div>

</div>



    <!--<div class="login-extra">
    <a href="#">Reset Password</a>
    </div>--> <!-- /login-extra -->


@section('scripts')

{!! Theme::script('js/signin.js') !!}

@stop


@stop