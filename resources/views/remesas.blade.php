@extends('admin.layout')

@section('content')

<h1>Gestión de Remesas</h1>

<div class="col-md-6 col-md-offset-3">
		<div class="box box-primary">
           
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="{{ url('addRem') }}">
              {{ csrf_field() }}

              @if( count($errors) > 0)
                  @foreach( $errors->all() as $error )
                        
                        

                        <div class="callout callout-danger">
                            <h4>¡Atención!</h4>

                            <p>{{ $error }}</p>
                      </div>

                  @endforeach
              @endif
              <div class="box-body">

                <div class="form-group">
                  <label for=FormRemesas">Fecha de Deposito</label>
                  <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" name="RemFechaDeposito" id="datepicker3">
                </div>
                </div> 

                <div class="form-group">
            	<label for="FormRemesas">Hora de Deposito</label>
                  <div class="input-group">
                    <input type="text" id="RemHoraDeposito" name="RemHoraDeposito" class="form-control timepicker">

                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                  </div>
                </div>

				<div class="form-group">
                  <label for="FormRemesas">Banco</label>
                  <select name="RemBanco" id="RemBanco" class="form-control">
                    <option value="BBVA 1">BBVA</option>
                    <option value="2">BBP</option>
                    <option value="3">BBVA</option>
                    <option value="4">BBP</option>
                    <option value="5">BBVA</option>
                    <option value="6">BBP</option>
                    <option value="7">BBVA</option>
                    <option value="8">BBP</option>
                    <option value="9">BBVA</option>
                    <option value="10">BBP</option>
                    <option value="11">BBVA</option>
                    <option value="12">BBP</option>
                    <option value="13">BBVA</option>                                                                                                    
                  </select>
                </div>

                <div class="form-group">
                  <label for="FormRemesas">Número de Referencia del Deposito</label>
                  <input type="text" class="form-control" name="RemNumRef" id="RemNumRef" placeholder="Número de Referencia del Deposito">
                </div>

                <div class="form-group">
                  <label for="FormRemesas">Oficina Altamar</label>
                  <select name="RemOficina" id="RemOficina" class="form-control">
                    <option values="Comas">Comas</option>
                    <option values="Miraflores">Miraflores</option>
                    <option values="Altamar">Altamar</option>
                                                                                                    
                  </select>
                </div>

                <div class="form-group">
                  <label for="FormRemesas">Beneficiario</label>
                  <input type="text" class="form-control" id="RemBene" name="RemBene" placeholder="Beneficiario">                  
                </div>

                <div class="form-group">
                  <label for="FormRemesas">Monto</label>

                  <input type="text" class="form-control" id="RemMonto" name="RemMonto" placeholder="Monto">
                </div>

                <div class="form-group">
                  <label for="FormRemesas">Tasa del Día</label>
                  <input type="text" class="form-control" id="Remtasa" name="Remtasa" placeholder="Tasa del Día">
                </div>

                <div class="form-group">
                  <label for="FormRemesas">Banco Receptor</label>
                  <input type="text" class="form-control" id="RemBancoRec" name="RemBancoRec" placeholder="Banco Receptor">
                </div>

                                                                                                                              

                

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Guardar</button>
              </div>
            </form>
          </div>
</div>

@stop