        

          <div class="row ">
            <div class="col-md-3"></div>
            <div class="col-md-6">
              <div class="form-group text-center">
                {!!Form::label('Servicio:')!!}
                <select class="form-control" name="ID_Servicio">
                  @foreach($servicios as $servicio)
                  <option>{!!"ID".$servicio->Nombre!!}</option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>
          
          <div class="row ">
            <div class="col-md-6">
              <div class="form-group">
                  {!!Form::label('Nombre:')!!}
                  {!!Form::text('Nombre',null,['class'=>'form-control','placeholder'=>'Nombre del articulo'])!!}
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                  {!!Form::label('Cantidad:')!!}
                  {!!Form::text('Cantidad',null,['class'=>'form-control','placeholder'=>'Cantidad'])!!}
              </div>
            </div>
          </div>

           <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                  {!!Form::label('Costo de Alquiler:')!!}
                  {!!Form::text('Costo_Alquiler',null,['class'=>'form-control','placeholder'=>'Costo de Alquiler'])!!}
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                  {!!Form::label('Costo de Objeto:')!!}
                  {!!Form::text('Costo_Objeto',null,['class'=>'form-control','placeholder'=>' Costo de Objeto'])!!}
              </div>
            </div>
          </div> 

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                {!!Form::label('Disponibilidad:')!!}
                <div class="btn-group" data-toggle="buttons" name="opcion">
                  <label class="btn btn-secondary active">
                    <input type="radio" name="options" id="option1" autocomplete="off" checked value="SI"> SI
                  </label>
                  <label class="btn btn-secondary">
                    <input type="radio" name="options" id="option2" autocomplete="off" value="NO"> NO
                  </label>
                </div>
              </div>
            </div>
          </div> 

          