<div class="box-body">
    <p>
        {!! Form::normalInput('nombre', 'Nombre y Apellido', $errors) !!}
        {!! Form::normalInput('codigo', 'Cedula de Identidad', $errors) !!}
        {!! Form::normalInput('username', 'Nombre de usuario', $errors) !!}
        {!! Form::normalInput('email', 'Email', $errors) !!}
        {!! Form::normalInput('password', 'Contraseña', $errors) !!}
    </p>
</div>
