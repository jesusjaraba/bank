@extends('layout.layout')

@section('content')

	@include('customer.modal-add-customers')
    @include('customer.modal-edit-customers')


<div class="x_panel">

        <div class="x_title">
            <h2>List Customers</h2>

            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <p class="text-muted font-13 m-b-30">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-add-customer">Add customer</button>


            </p>
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>name</th>
                        <th>Address</th>
                        <th>cedula</th>
                        <th>dob</th>
                        <th>Bank</th>
                        <th>Opciones</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($objCustomers as $customer)
                        <tr data-id="{{$customer->id}}">
                            <td>{{$customer->name}}</td>
                            <td>{{$customer->address}}</td>
                            <td>{{$customer->cedula}}</td>
                            <td>{{$customer->dob}}</td>

                        <td>{{$customer->bank->code}}, {{$customer->bank->address}}</td>


                            <td>
                                <button class="btn btn-primary edit-customer">Edit</button>
                                
 {!! link_to_route('viewCustomer', $title = 'Ver Cuentas', $parameters = $customer->id, $attributes = ['class'=>'btn btn-primary']) !!}
                            </td>
                        </tr>
                    @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection


@section('script')

    <script type="text/javascript">
        

 $('.edit-customer').on('click', function (e) {
            e.preventDefault();
            var fila = $(this).parents('tr');
            var id = fila.data('id');
            console.log(id);
            $.ajax({

                

                type: 'GET',
                url: 'customer/show/'+id,
                success: function (data) {
                    console.log(data);
                    $('#modal-edit-id').val(data.id);
                    $('#modal-edit-name').val(data.name);
                    $('#modal-edit-address').val(data.address);
                    $('#modal-edit-dob').val(data.dob);
                    $('#modal-edit-cc').val(data.cedula);
                    $('#modal-edit-bank').val(data.horario);
                    $('select[id="modal-edit-bank"]').val(data.Bank_id);


                    $("#modal-edit-customer").modal('toggle');
                }
            });
        });

        $('#editCustomer').on('submit', function (e) {
            e.preventDefault();
            var id=$("#modal-edit-id").val();

            $.ajax({
                type: 'PUT',
                url: 'customer/'+id,
                data: $('#editCustomer').serialize(),
                success: function(){
                    
                    location.reload();
                }
            });
        });

        

    </script>

@endsection