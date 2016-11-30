<div class="box-body">
    <p>
        {!! Form::normalInput('temporada', 'Temporada', $errors, $cursos) !!}
        {!! Form::normalSelect('materia_id', 'Materia', $errors, $materias) !!}
        {!! Form::normalSelect('profesor_id', 'Profesor', $errors, $profesores) !!}
    </p>
</div>
