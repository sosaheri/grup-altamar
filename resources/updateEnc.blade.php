@extends('admin.layout')

@section('content')

<h1>Actualización de Transacciones de Encomiendas</h1>

<div class="col-md-6 col-md-offset-3">
		<div class="box box-primary">
           
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="{{ url('/editEnc') }}">
              <div class="box-body">
              {{ csrf_field() }}
              

                <div class="box-header with-border">
              		<h3 class="box-title">Datos de Remitente</h3>
            	</div>

                <div class="form-group">
            	<label for="formEncomiendas">Nombre y Apellido</label>
                  <input type="text" class="form-control" name="EncNombreApellidoRem" id="EncNombreApellidoRem" placeholder="Nombre y Apellido" required>
                </div>

                <div class="form-group">
                  <label for="formEncomiendas">Documento de Identidad</label>
                  <input type="text" class="form-control" id="EncDocIden" name="EncDocIden" placeholder="Documento de identidad" required>
                </div>

                <div class="form-group">
                  <label for="formEncomiendas">Teléfono del Remitente</label>
                  <input type="text" class="form-control" id="EncTelrem" name="EncTelrem"  data-inputmask='"mask": "(999) 999-9999"' data-mask placeholder="(999) 999-9999" required>
                </div>

                <div class="form-group">
                  <label for="formEncomiendas">Número de Correlativo</label>
                  <input type="text" class="form-control" id="EncNumCor" name="EncNumCor" placeholder="Número de Correlativo" required>
                </div>

                <div class="form-group">
                  <label for=formEncomiendas">Fecha de Recepción</label>
                  <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" name="fechaRecepcion" id="datepicker" required>
                </div>
                </div>

                <div class="form-group">
                  <label for="formEncomiendas">Descripción de envio</label>
                  <textarea name="descripcion" class="form-control" rows="3" placeholder="Descripción de envio" required></textarea>
                </div>

                <div class="form-group">
                  <label for="formEncomiendas">Peso de envio</label>
                  <input type="text" class="form-control" id="EncPeso" name="EncPeso" placeholder="Peso de envio" required>
                  <div>
                  <p class="help-block">En Kilogramos.</p>
                </div>
                </div>

                <div class="box-header with-border">
              		<h3 class="box-title">Datos de Receptor</h3>
            	</div>

                <div class="form-group">
                  <label for="formEncomiendas">Nombre y Apellido</label>

                  <input type="text" class="form-control" id="EncNombreApellidoRec" name="EncNombreApellidoRec" placeholder="Nombre y Apellido" required>
                </div>

                <div class="form-group">
                  <label for="formEncomiendas">Documento de Identidad</label>
                  <input type="text" class="form-control" id="EncDocIdenRec" name="EncDocIdenRec" placeholder="Documento de Identidad" required>
                </div>

                <div class="form-group">
                  <label for="formEncomiendas">Teléfono del Receptor</label>
                  <input type="text" class="form-control" id="EncTelrec" name="EncTelrec" data-inputmask='"mask": "(999) 999-9999"' data-mask placeholder="(999) 999-9999" required>
                </div>

                <div class="form-group">
                  <label>Dirección de Retiro</label>
                  <select id="DireccionRet" name="DireccionRet" class="form-control" required>
                    <option value="Caracas">Caracas</option>
                    <option value="Interior">Interior</option>

                  </select>
                </div>

                <div class="form-group">
                  <label for=formEncomiendas">Fecha de Salida de Envio</label>
                  <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" name="FechaDeSalida" id="datepicker2" required>
                </div>
                </div>                                                                                                                               

                

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Actualizar</button>
              </div>
            </form>
          </div>
</div>




@stop