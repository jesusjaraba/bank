<!-- Modal -->
<div id="modal-edit-customer" class="modal fade">
  <div class="modal-dialog modal-sm">

    <!-- Modal content-->
    <div class="modal-content">
      
      <div class="modal-body">
       {!! Form::open(['route'=>['customer.update',':CUSTOMERS_ID'],'method'=> 'put', 'autocomplete'=> 'on','id'=>'editCustomer',
                 'class' =>'form-horizontal form-label-left']) !!}
                <input type="hidden" name="modal-edit-id" id="modal-edit-id">

                <div class="form-group">
                    <label for="inputNombre">Nombre</label>
                     <input type="text" id="modal-edit-name" name="modal-edit-name" required="required" class="form-control">
                </div>
            
                <div class="form-group">
                    <label for="inputAddress">Dirección</label>
                    <input type="text" id="modal-edit-address" name="modal-edit-address" required="required" class="form-control ">
                </div>

                <div class="form-group">
                    <label for="inputDob">Fecha de nacimiento</label>
                    <input type="date" id="modal-edit-dob" name="modal-edit-dob" required="required" class="form-control col-md-7 col-xs-12">
                    
                </div>

                 <div class="form-group">
                    <label for="cedula">cedula</label>
                    <input type="text" id="modal-edit-cc" name="modal-edit-cc" required="required" class="form-control">
                    
                </div>

                <div class="form-group">
                    <label class="control-label" for="categoriaTrabajo">Banco</label>
                    <select required id="modal-edit-bank" name="modal-edit-bank" class="form-control">

                     @foreach($objBanks as $bank)

                      <option value='{{$bank->id}}'>{{$bank->code}} , {{$bank->address}}</option>
                            
                      @endforeach
                               
                      </select>
                </div>

                <button type="submit" class="btn  btn-block btn-success">Editar</button>

                {!! Form::close() !!}
      </div>
          </div>

  </div>
</div>