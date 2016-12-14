<div class="box-body">
    <p>
        {!! Form::normalInput('seccion', 'Sección', $errors, $secciones) !!}
        {!! Form::normalSelect('departamento_id', 'Departamento', $errors, $departamentos) !!}
    </p>
</div>
