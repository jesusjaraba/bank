<!-- Modal -->
<div id="modal-add-customer" class="modal fade" >
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
     
      <div class="modal-body">
       {!! Form::open(['url' =>URL::route('customer.store'), 'method' => 'post', 'files' => true]) !!}
                <div class="form-group">
                    <label for="inputNombre" required >Nombre</label>
                    <input type="text" id="name" name="name" required="required" class="form-control">
                    
                </div>

                 <div class="form-group">
                    <label for="inputAddress" required>Dirección
                    </label>
                    <input type="text" id="address" name="address" required="required" class="form-control">
                    </div>
               

                   <div class="form-group">
                    <label for="inputDOB">Fecha de nacimiento
                    </label>
                     <input type="date" id="dob" name="dob" required="required" class="form-control ">
                    
                </div>

                 <div class="form-group">
                    <label for="inputCedula">Cedula</label>
                    <input type="text" id="cc" name="cc" required="required" class="form-control">
                 </div>
               
                <div class="form-group">
                   <label style="display: block;" class="control-label" for="categoriaTrabajo">Banco</label>
                    <select required id="bank" name="bank" class="form-control">

                            @foreach($objBanks as $bank)

                            <option value='{{$bank->id}}'>{{$bank->code}} , {{$bank->address}}</option>
                            
                            @endforeach
                               
                            </select>
                </div>

                <button type="submit" class="btn btn-block btn-success">Agregar Cliente</button>

                {!! Form::close() !!}
                </div>
      </div>
      <div class="modal-footer">
      
      </div>
    </div>

  </div>
</div>