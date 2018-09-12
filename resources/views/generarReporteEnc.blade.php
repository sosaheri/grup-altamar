               <?php 
                ini_set('max_execution_time', 0);
                ini_set('memory_limit', '2048M');
                	$fecha = date("Y-m-d");

					$nuevafecha = strtotime ( '-7 day' , strtotime ( $fecha ) ) ;
					$nuevafecha = date ( 'Y-m-j' , $nuevafecha );
                ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Reporte</title>
      <link rel="stylesheet" href="{!! asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css')!!}">
  </head>
  <body>
<span class="pull-right">Desde {{ $nuevafecha }} hasta {{ date('Y-m-d') }}</span>
<div><img height="45px" src="{{ url('logo.png') }}" alt="Logo altamar"></div>

<span class="text-center"><h1>Encomiendas</h1></span>

    <table class="table">
     				<tr>
     			  <th>Nro.</th>
                  <th>Remitente</th>
                  <th>Teléfono del Remitente</th>
                  <th>Correlativo</th>
                  <th>Fecha de Recepción</th>
                  <th>Descripción</th>
                  <th>Peso</th>
                  <th>Receptor</th>
                  <th>Teléfono del Receptor</th>
                  <th>Fecha de Salida</th>


                </tr>

 
                @if(count($transacciones) > 0)
						@foreach($transacciones->where('fechaRecepcion', '>',$nuevafecha ) as $encomiendas)
                              
                        	<tr>
                                <td>{{ $encomiendas->id }}</td>
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

                
    </table>



  </body>
</html>