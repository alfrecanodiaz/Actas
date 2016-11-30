@extends('layouts.master')

@section('title')
    Profesores | @parent
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
                    <th> Profesor ID </th>
                    <th> Nombre</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach ($profesores as $profesor)
                  	<tr>
	                    <td>{{$profesor->id}}</td>
	                    <td>{{$profesor->nombre}}</td>
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
      $('#profesores').addClass('active');
      
    });
</script>

@stop


@stop
