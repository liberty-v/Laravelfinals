@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}
                    
                </div>

                <br>
                <div class='panel-body'>
                    
                    <h4>&nbsp;&nbsp;
                        Boarders Added 
                        &nbsp;<a href='/boarders/create' class='btn btn-primary btn-sm text-right'>Add</a>
                    </h4>
                    
                    <table class='table table-striped'>
                        <tr>
                            <th>Room</th>
                            <th></th>
                        </tr>
                        @foreach($boarderz as $boarder)
                            <tr>
                                <td>{{$boarder->room_number}}</td>
                                <td><a href='/boarders/{{$boarder->id}}/edit' class='btn btn-primary btn-sm float-right'>edit</td>
                                <td>
                                    {!!Form::open(['action' => ['App\Http\Controllers\BoarderzController@destroy',$boarder->id], 'method'=> 'POST','class'=>'float-right'])!!}
                                    {{Form::hidden('_method','DELETE')}}
                                    {{Form::submit('Delete',['class' => 'btn btn-danger '])}}
                                    {!!Form::close()!!}
                                </td>
                            </tr>
                        @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
