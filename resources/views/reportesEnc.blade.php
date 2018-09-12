@extends('admin.layout')

@section('content')

<h1>Reportes Encomiendas</h1>


<div class="box">
            <div class="box-header">
              <h3 class="pull-left">Encomiendas</h3>
              <h3 class="pull-right"><a href="{{action('ReportesController@downloadPDF')}}" target="_blank"

                >Imprimir Últimos 7 días</a></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Remitente</th>
                  <th>Teléfono Remitente</th>
                  <th>Correlativo</th>
                  <th>Fecha Recepción</th>
                  <th>Descripción</th>
                  <th>Peso</th>
                  <th>Receptor</th>
                  <th>Teléfono de receptor</th>
                   <th>Fecha de Salida</th>

                </tr>
                </thead>
                <tbody>
				@if(count($enc) > 0)
                        @foreach($enc->all() as $encomiendas)                	
			                <tr>
			                 
			    	<td>{{$encomiendas->NombreyApellidoRemitente}}</td>
    				<td>{{$encomiendas->TelefonodeRemitente}}</td>
    				<td>{{$encomiendas->NumerodeCorrelativo}}</td>
    				<td>{{$encomiendas->fechaRecepcion}}</td>
    				<td>{{$encomiendas->descripcion}}</td>
    				<td>{{$encomiendas->PesoEncomienda}}</td>
    				<td>{{$encomiendas->NombreyApellidoReceptor}}</td>
    				<td>{{$encomiendas->TelefonoReceptor}}</td>
    				<td>{{$encomiendas->FechaDeSalida}}</td>
			                </tr>
			            @endforeach
			    @endif    
                
                <tfoot>
                <tr>
                  <th>Remitente</th>
                  <th>Teléfono Remitente</th>
                  <th>Correlativo</th>
                  <th>Fecha Recepción</th>
                  <th>Descripción</th>
                  <th>Peso</th>
                  <th>Receptor</th>
                  <th>Teléfono de receptor</th>
                   <th>Fecha de Salida</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->





@stop