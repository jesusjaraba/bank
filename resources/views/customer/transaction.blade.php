@extends('layout.layout')

@section('content')

@include('customer.modal-add-account')
@include('customer.modal-add-card')


<div class="x_panel">

        <br>

        <h2> Lista de cuentas de {{$nameCustomer}}</h2>

        <div class="x_content">
            <p class="text-muted font-13 m-b-30">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-add-account">Add Acount</button>


            </p>



            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>Tipo de cuenta</th>
                        <th>Dueño</th>
                        
                        
                        <th>Opciones</th>

                    </tr>
                    </thead>
                    <tbody>
                    @if($accounts->count() > 0)

                    @foreach($accounts as $account)
                        <tr data-id="{{$account->id}}">
                            <td>{{$account->type}}</td>
                            <td>{{$account->owner}}</td>
                           

                            <td>
                            
                                <button class="btn btn-primary tarjeta">Asignar tarjeta</button>

                                {!! link_to_route('viewInfo', $title = 'Ver tarjeta', $parameters = $account->id, $attributes = ['class'=>'btn btn-primary']) !!}

                            </td>
                        </tr>
                    @endforeach
@endif

                    </tbody>
                </table>
            
        </div>
    </div>

@endsection


@section('script')

    <script type="text/javascript">
        

 $('.tarjeta').on('click', function (e) {
            e.preventDefault();
            var fila = $(this).parents('tr');
            var id = fila.data('id');
                
                    $('#account_id').val(id);
                    
                    $("#modal-add-card").modal('toggle');
                
            
        });

        

    </script>

@endsection