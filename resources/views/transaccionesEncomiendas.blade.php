@extends('admin.layout')

@section('content')

<h1>Transacciones de Encomiendas en el Sistema</h1>

<div class="col-md-10 col-md-offset-1">
	<div class="box">
		 <div class="box-header">
	              <h3 class="box-title">Encomiendas</h3>

	              <div class="box-tools">
                <ul class="pagination pagination-sm no-margin pull-right">
                  <li><a href="#">&laquo;</a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">&raquo;</a></li>
                </ul>
              </div>
	     </div>

	     <div class="box-body table-responsive no-padding">
              <table class="table table-hover">

              @if(session('info'))

                    <div class="alert alert-success alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <h4><i class="icon fa fa-check"></i> {{ session('info') }}</h4>
                      
                    </div>

              @endif
                

                <tr>
                  <th>Fecha de Recepción</th>
                  <th>Nombre Receptor</th>
                  <th>Operador</th>
                  <th>PDF</th>

                </tr>
                
                @if(count($transacciones) > 0)
                        @foreach($transacciones->all() as $encomiendas)
                              <tr>
                                <td>{{$encomiendas->fechaRecepcion}}</td>
                                <td>{{$encomiendas->NombreyApellidoReceptor}}</td>
                                <td>{{$encomiendas->operador}}</td>
                                <td></td>
                                <td><a href='{{ url("/readEnc/{$encomiendas->id}") }}'><span class="label label-info">Ver</span></a> |
                                @if((Auth::user()->name == $encomiendas->operador) OR (Auth::user()->rol == 'administrador'))
  
                                      <a href='{{ url("/updateEnc/{$encomiendas->id}") }}'><span class="label label-warning">Editar</span></a> |
                                    <a href="{{ url("/deleteEnc/{$encomiendas->id}") }}"><span class="label label-danger">Borrar</span></a> |
                                @endif
                              </td>
                                
                              </tr>
                          @endforeach
                @endif

                
              </table>
            </div>
 	</div>
</div>

@stop