<div class="box-body">
    <p>
        {!! Form::normalSelect('materia_id', 'Materia', $errors, $materias) !!}
        {!! Form::normalSelect('profesor_id', 'Profesor', $errors, $profesores) !!}
        {!! Form::normalSelect('aula_id', 'Aula', $errors, $aulas) !!}
        {!! Form::normalSelect('turno_id', 'Turno', $errors, $turnos) !!}
        {!! Form::normalSelect('seccion_id', 'Sección', $errors, $secciones) !!}
        {!! Form::normalSelect('convocatoria_id', 'Convocatoria', $errors, $convocatorias) !!}
        {!! Form::normalSelect('semestre_id', 'Semestre', $errors, $semestres) !!}
    </p>
</div>
