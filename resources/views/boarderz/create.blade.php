@extends('layouts.app')

@section('content')
<div class='common'>
    <h1>Add Boarder</h1>
    <a href='/boarders' class='btn btn-secondary '>Back</a>
    <br><br>
    <div>
    {!! Form::open(['action' => 'App\Http\Controllers\BoarderzController@store', 'method' => 'POST']) !!}
        <div class='form-group'>
            {{Form::label('first_name','First name:')}}
            {{Form::text('first_name', '', ['class' =>'form-control','placeholder' => 'First name'])}}

            {{Form::label('last_name','Last name:')}}
            {{Form::text('last_name', '', ['class' =>'form-control','placeholder' => 'Last name'])}}

            {{Form::label('contact_number','Contact Number:')}}
            {{Form::text('contact_number', '', ['class' =>'form-control','placeholder' => 'Contact number'])}}

            {{Form::label('room_number','Room number:')}}
            {{Form::select('room_number', ['D1' => 'D1',
                                           'D2' => 'D2',
                                           'U1' => 'U1',
                                           'U2' => 'U2'], null, ['class' =>'form-control','placeholder' => 'Pick a room...'])}}
        </div>
        {{Form::submit('Add', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
    </div>
</div>
@endsection