<div id="modal-edit-bank" class="modal fade">
  <div class="modal-dialog modal-sm">

    <!-- Modal content-->
    <div class="modal-content">
      
      <div class="modal-body">
       {!! Form::open(['route'=>['bank.update',':BANK_ID'],'method'=> 'put', 'autocomplete'=> 'on','id'=>'editBank',
                 'class' =>'form-horizontal form-label-left']) !!}
                <input type="hidden" name="modal-bank-id" id="modal-bank-id">

                <div class="form-group">
                    <label for="inputCodigo">Codigo</label>
                     <input type="text" id="modal-edit-codigo" name="modal-edit-codigo" required="required" class="form-control">
                </div>
            
                <div class="form-group">
                    <label for="inputAddress">Dirección</label>
                    <input type="text" id="modal-edit-address" name="modal-edit-address" required="required" class="form-control ">
                </div>

              
                <button type="submit" class="btn  btn-block btn-success">Editar</button>

                {!! Form::close() !!}
      </div>
          </div>

  </div>
</div>