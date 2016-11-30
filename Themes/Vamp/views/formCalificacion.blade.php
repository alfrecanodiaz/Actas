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
            
            <div class="widget ">
              
              <div class="widget-header">
                <i class="icon-list-alt"></i>
                <h3>Formulario de calificaciones</h3>
            </div> <!-- /widget-header -->
          
          <div class="widget-content">
            
            
            
            <div class="tabbable">
            <ul class="nav nav-tabs">
              <li class="active">
                <a href="#primerparcial" data-toggle="tab">Primer parcial</a>
              </li>
              <li ><a href="#segundoparcial" data-toggle="tab">Segundo parcial</a></li>
              <li ><a href="#tercerparcial" data-toggle="tab">Tercer parcial</a></li>
              <li ><a href="#final" data-toggle="tab">Final</a></li>
            </ul>
            
            <br>
            
              <div class="tab-content">

              <!-- PRIMER PARCIAL-->
                <div class="tab-pane active" id="primerparcial">
                <form id="edit-profile" class="form-horizontal">
                  <fieldset>
                    
                    
                    <div class="control-group">                     
                      <label class="control-label" for="firstname">Calificación</label>
                      <div class="controls">
                        <input type="text" class="span2" id="firstname" value="">
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->
                    
                                        
                                        
                    <div class="control-group">                     
                      <label class="control-label">Ordinario</label>
                      
                        <div class="controls">
                            <label class="checkbox inline">
                              <input type="checkbox">
                            </label>
                        </div>    <!-- /controls -->    
                    </div> <!-- /control-group -->
                                        
                                        
                    <div class="control-group">                     
                      <label class="control-label">Extraordinario</label>
                      
                         <div class="controls">
                            <label class="radio inline">
                              <input type="radio"  name="radiobtns">
                            </label>
                          </div>  <!-- /controls -->      
                    </div> <!-- /control-group -->

                     <br />
                    
                    <div class="form-actions">
                      <button type="submit" class="btn btn-primary">Guardar</button> 
                      <button class="btn btn">Cancelar</button>
                    </div> <!-- /form-actions -->
                  </fieldset>
                </form>
                </div>
                
                <!-- SEGUNDO PARCIAL-->
                <div class="tab-pane" id="segundoparcial">
                  <form id="edit-profile" class="form-horizontal">
                  <fieldset>
                    
                    
                    <div class="control-group">                     
                      <label class="control-label" for="firstname">Calificación</label>
                      <div class="controls">
                        <input type="text" class="span2" id="firstname" value="">
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->
                    
                                        
                                        
                    <div class="control-group">                     
                      <label class="control-label">Ordinario</label>
                      
                        <div class="controls">
                            <label class="checkbox inline">
                              <input type="checkbox">
                            </label>
                        </div>    <!-- /controls -->    
                    </div> <!-- /control-group -->
                                        
                                        
                    <div class="control-group">                     
                      <label class="control-label">Extraordinario</label>
                      
                         <div class="controls">
                            <label class="radio inline">
                              <input type="radio"  name="radiobtns">
                            </label>
                          </div>  <!-- /controls -->      
                    </div> <!-- /control-group -->

                     <br />
                    
                    <div class="form-actions">
                      <button type="submit" class="btn btn-primary">Guardar</button> 
                      <button class="btn btn">Cancelar</button>
                    </div> <!-- /form-actions -->
                  </fieldset>
                </form>
                </div>


                <!-- TERCER PARCIAL-->
                <div class="tab-pane" id="tercerparcial">
                  <form id="edit-profile" class="form-horizontal">
                  <fieldset>
                    
                    
                    <div class="control-group">                     
                      <label class="control-label" for="firstname">Calificación</label>
                      <div class="controls">
                        <input type="text" class="span2" id="firstname" value="">
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->
                    
                                        
                                        
                    <div class="control-group">                     
                      <label class="control-label">Ordinario</label>
                      
                        <div class="controls">
                            <label class="checkbox inline">
                              <input type="checkbox">
                            </label>
                        </div>    <!-- /controls -->    
                    </div> <!-- /control-group -->
                                        
                                        
                    <div class="control-group">                     
                      <label class="control-label">Extraordinario</label>
                      
                         <div class="controls">
                            <label class="radio inline">
                              <input type="radio"  name="radiobtns">
                            </label>
                          </div>  <!-- /controls -->      
                    </div> <!-- /control-group -->

                     <br />
                    
                    <div class="form-actions">
                      <button type="submit" class="btn btn-primary">Guardar</button> 
                      <button class="btn btn">Cancelar</button>
                    </div> <!-- /form-actions -->
                  </fieldset>
                </form>
                </div>

                <!-- FINAL-->
                <div class="tab-pane" id="final">
                  <form id="edit-profile" class="form-horizontal">
                  <fieldset>
                    
                    
                    <div class="control-group">                     
                      <label class="control-label" for="firstname">Calificación</label>
                      <div class="controls">
                        <input type="text" class="span2" id="firstname" value="">
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->
                    
                                        
                                        
                    <div class="control-group">                     
                      <label class="control-label">Ordinario</label>
                      
                        <div class="controls">
                            <label class="checkbox inline">
                              <input type="checkbox">
                            </label>
                        </div>    <!-- /controls -->    
                    </div> <!-- /control-group -->
                                        
                                        
                    <div class="control-group">                     
                      <label class="control-label">Extraordinario</label>
                      
                         <div class="controls">
                            <label class="radio inline">
                              <input type="radio"  name="radiobtns">
                            </label>
                          </div>  <!-- /controls -->      
                    </div> <!-- /control-group -->

                     <br />
                    
                    <div class="form-actions">
                      <button type="submit" class="btn btn-primary">Guardar</button> 
                      <button class="btn btn">Cancelar</button>
                    </div> <!-- /form-actions -->
                  </fieldset>
                </form>
                </div>

                
              </div>
              
              
            </div>
            
            
            
            
            
          </div> <!-- /widget-content -->
            
        </div> <!-- /widget -->
            
        </div> <!-- /span8 -->
          
          
          
          
        </div> <!-- /row -->
  
      </div> <!-- /container -->
      
  </div> <!-- /main-inner -->
    
</div> <!-- /main -->


@section('scripts')



@stop


@stop
