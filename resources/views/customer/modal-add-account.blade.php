<div class="modal fade" id="modal-add-account">
     <div class="modal-dialog modal-sm">
       <div class="modal-content">
         
         <div class="modal-body">
       
          {!! Form::open(['url' =>URL::route('account.store'), 'method' => 'post', 'files' => true]) !!}
           <div class="form-group">
           		<label for="inputType">Tipo de cuenta</label>
            
            	 <select class="form-control" id="type" name="type" name="type">
				  <option value="Ahorro">Ahorro</option>
				  <option value="Corriente">Corriente</option>
  				</select>
           </div>
          <div class="form-group">
             <label for="inputName">Dueño de la cuenta</label>
             <input type="text" class="form-control" id="owner"  name="owner" value="{{$nameCustomer}}" readonly="true">

             <input type="hidden" name="Customer_id" id="Customer_id" value="{{$idCustomer}}">
             </div>
             
              
           <button  class="btn btn-block btn-success">
           Create Customer </button>

         {!! Form::close() !!}

         </div><!--modal.body-->
        
       </div><!--content-->
     </div>
   </div>
   ------------
   