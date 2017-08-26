 @extends('layout.layout')

@section('content')


<div class="x_panel">
        <div class="x_title">
            <h2> listado de transacciones</h2>

            <div class="clearfix"></div>
        </div>
        <div class="x_content">
           

           {!! Form::open(['url' =>URL::route('transaction.store'), 'method' => 'post', 'files' => true]) !!}
               
               <input type="hidden" value="{{$numberCard}}" name="card" id="card">
                <div class="form-group"> 
                    <label for="inputCode" required >No tarjeta de destino</label>
                    <input type="text" class="form-control" id="cardDesti" name="cardDesti" required="required" placeholder=" No. tarjeta de destino">
                </div>
                <div class="form-group">
                    <label for="inputAdress">Valor<span class="required">*</span></label>
                    <input type="text" class="form-control" id="value" name="value" required="required" 
                    placeholder="Dirección del banco">
                </div>

            

                <button  class="btn btn-block btn-success">Aceptar</button>

                </div>

    


                {!! Form::close() !!}

                <br>

            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                
                        <th>Cuenta destino</th>
                        <th>monto</th>
            

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($transactions as $transaction)
                        <tr data-id="{{$transaction->id}}">
                        
                            <td>{{$transaction->customer->debitCard->cardno}}</td>
                            <td>{{$transaction->value}}</td>
                        </tr>
                    @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection


@push('script')

    <script type="text/javascript">
       
        

    </script>

@endpush