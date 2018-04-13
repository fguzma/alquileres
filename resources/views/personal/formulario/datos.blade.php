        

          <div class="row ">
            <div class="col-md-6">
              <div class="form-group">
                  {!!Form::label('Nombre:')!!}
                  {!!Form::text('Nombre',null,['class'=>'form-control','placeholder'=>'Nombre del Personal'])!!}
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                  {!!Form::label('Apellido:')!!}
                  {!!Form::text('Apellido',null,['class'=>'form-control','placeholder'=>'Apellido del Personal'])!!}
              </div>
            </div>
          </div>

           <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                  {!!Form::label('Direccion:')!!}
                  {!!Form::text('Direccion',null,['class'=>'form-control','placeholder'=>'Direccion del personal'])!!}
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                  {!!Form::label('Fehca de nacimiento:')!!}
                  {!!Form::text('Fecha_Nac',null,['class'=>'form-control','placeholder'=>' dia/mes/año'])!!}
              </div>
            </div>
          </div> 

          