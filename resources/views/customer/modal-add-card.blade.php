<div class="modal fade" id="modal-add-card">
     <div class="modal-dialog modal-sm">
       <div class="modal-content">
         
         <div class="modal-body">
       
          {!! Form::open(['url' =>URL::route('card.store'), 'method' => 'post', 'files' => true]) !!}
           
           <input type="hidden"  id="account_id" name="account_id">
          <div class="form-group">
             <label for="inputName">Dueño</label>
             <input type="text" class="form-control" id="ownedby"  name="ownedby" value="{{$nameCustomer}}" readonly="true">

             <input type="hidden" name="Customer_id" id="Customer_id" value="{{$idCustomer}}">

            <input type="hidden" name="bank" id="bank" value="{{$idBank}}">
             </div>
              <div class="form-group">
             <label for="inputAddress">Numero tarjeta</label>
             <input type="number" class="form-control" id="numTarjeta"  name="numTarjeta" placeholder="Numero de  Tarteja.." required="">
             </div>

             <div class="form-group">
             <label for="inputAddress">Valor inicial</label>
             <input type="number" class="form-control" id="balance"  name="balance" placeholder="Monto inicial." required="">
             </div>
              
           <button  class="btn btn-block btn-success">
           agregar tarjeta</button>

         {!! Form::close() !!}

         </div><!--modal.body-->
        
       </div><!--content-->
     </div>
   </div>