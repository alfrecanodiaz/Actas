@extends('layouts.master')

@section('title')
    Cursos | @parent
@stop

@section('meta')
@stop

@section('style')

@stop

@section('content')


<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span12">
          
          <!-- widget -->
          <div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Cursos</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th> Curso ID </th>
                    <th> Temporada</th>
                    <th> Materia</th>
                    <th> Profesor</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach ($cursos as $curso)
                  	<tr>
	                    <td>{{$curso->id}}</td>
	                    <td>{{$curso->temporada}}</td>
	                    <td>{{$curso->materias->nombre}}</td>
                      <td>{{$curso->profesores->nombre}}</td>
                    </tr>
                  @endforeach
                
                </tbody>
              </table>
            </div>
            <!-- /widget-content --> 
          </div>
          <!-- /widget -->

        </div>
        <!-- /span12 --> 
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 
</div>
<!-- /main -->


@section('scripts')

<script>
    $(function() 
    {
      $('#cursos').addClass('active');
      
    });
</script>

@stop


@stop
