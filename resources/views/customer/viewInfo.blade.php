@extends('layout.layout')

@section('content')

<div class="x_panel">

        <br>
 <br> <br> <br>
  


            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                       <th>Number card</th>
                        <th>ownedby</th>
                        <th>bank</th>
                        <th>balance</th>
                        <th>Opciones</th>

                    </tr>
                    </thead>
                    <tbody>
                    @if($cardInfo->count() > 0)

	                    @foreach($cardInfo as $card)
	                        <tr data-id="{{$card->id}}">
	                        <td>{{$card->cardno}}</td>
	                            <td>{{$card->ownedby}}</td>
	                            
	                    <td>{{$card->banks->code}}</td>
                        <td>{{$card->balance}}</td>

	                            <td>
	                            {!! link_to_route('transaction.client', $title = 'Transferir', $parameters = $card->cardno, $attributes = ['class'=>'btn btn-primary']) !!}
	                              
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

   

@endsection