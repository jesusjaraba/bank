<!-- Modal --><!-- ADD BANK-->
<div  class="modal fade" id="modal-add-bank" >
  <div class="modal-dialog modal-sm">

    <!-- Modal content-->
    <div class="modal-content">
 
       
      
      <div class="modal-body">
       {!! Form::open(['url' =>URL::route('bank.store'), 'method' => 'post', 'files' => true]) !!}
               
                <div class="form-group"> 
                    <label for="inputCode" required >Codigo</label>
                    <input type="text" class="form-control" id="code" name="code" required="required" >
                </div>
                <div class="form-group">
                    <label for="inputAdress">Dirección<span class="required">*</span></label>
                    <input type="text" class="form-control" id="address" name="address" required="required" 
                    placeholder="Dirección del banco">
                </div>

                <button  class="btn btn-block btn-success">Agregar Banco</button>

      </div>

          



                {!! Form::close() !!}
      </div>
      
   

  </div>
</div>

