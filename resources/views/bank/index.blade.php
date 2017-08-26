@extends('layout.layout')

@section('content')

	@include('bank.modal-add-bank')
    @include('bank.modal-edit-bank')

<div class="x_panel">
        <div class="x_title">
            <h2> Bank List</h2>

            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <p class="text-muted font-13 m-b-30">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-add-bank">Add Banks</button>
             </p>
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>Code</th>
                        <th>Address</th>
                        <th>Opciones</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($objBanks as $objBank)
                        <tr data-id="{{$objBank->id}}">
                            <td>{{$objBank->code}}</td>
                            <td>{{$objBank->address}}</td>
                            

                            <td>
                                <button class="btn btn-primary editar-banco">Edit Bank</button>

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
       
        
 $('.editar-banco').on('click', function (e) {
            e.preventDefault();
            var fila = $(this).parents('tr');
            var id = fila.data('id');
            console.log(id);
            $.ajax({

                

                type: 'GET',
                url: 'bank/show/'+id,
                success: function (data) {
                    console.log(data);
                    $('#modal-bank-id').val(data.id);
                    $('#modal-edit-codigo').val(data.code);
                    $('#modal-edit-address').val(data.address);
                   
             


                    $("#modal-edit-bank").modal('toggle');
                }
            });
        });

        $('#editBank').on('submit', function (e) {
            e.preventDefault();
            var id=$("#modal-bank-id").val();

            $.ajax({
                type: 'PUT',
                url: 'bank/'+id,
                data: $('#editBank').serialize(),
                success: function(){
                    
                    location.reload();
                }
            });
        });

    </script>

@endsection