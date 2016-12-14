<div class="box-body">
    <p>
        {!! Form::normalInput('nombre', 'Nombre y Apellido', $errors, $profesores) !!}
        {!! Form::normalInput('codigo', 'Cedula de Identidad', $errors, $profesores) !!}
        {!! Form::normalInput('username', 'Nombre de usuario', $errors, $profesores) !!}
        {!! Form::normalInput('email', 'Email', $errors, $profesores) !!}
        {!! Form::normalInput('password', 'Contraseña', $errors, $profesores) !!}
    </p>
</div>
