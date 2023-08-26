@extends('layouts.app')

@section('content')
<div class='common'>
    <h1 id=bold>Add Bill</h1>
    <a href='/bills' class='btn btn-secondary btn-sm'>Back</a>
    <br><hr>
    <div>
    {!! Form::open(['action' => 'App\Http\Controllers\BillsController@store', 'method' => 'POST']) !!}
        <div class='form-group'>

            {{Form::label('boarder_id','Room number:')}}
            {{Form::select('boarder_id', ['1' => 'D1',
                                          '2' => 'D2',
                                          '3' => 'U1',
                                          '4' => 'U2'], null, ['class' =>'form-control','placeholder' => 'Pick a room...'])}}

            {{Form::label("month",'Month:')}}
            {{Form::select( "month", ['January' => 'January',
                                     'February' => 'February',
                                     'March' => 'March',
                                     'April' => 'April',
                                     'May' => 'May',
                                     'June' => 'June',
                                     'July' => 'July',
                                     'August' => 'August',
                                     'September' => 'September',
                                     'October' => 'October',
                                     'November' => 'November',
                                     'December' => 'December'], null, ['class' =>'form-control','placeholder' => 'Select a month...'])}}


            {{Form::label('due_date','Due Date')}}
            {{Form::date('due_date', 'null', ['class' =>'form-control'])}}

            {{Form::label('rent','Rent:')}}
            {{Form::text('rent', 'PHP ', ['class' =>'form-control'])}}

            {{Form::label('electricity','Electricity:')}}
            {{Form::text('electricity', 'PHP ', ['class' =>'form-control'])}}

            {{Form::label('water','Water:')}}
            {{Form::text('water', 'PHP ', ['class' =>'form-control'])}}

            {{Form::label('status','Status:')}}
            {{Form::select('status', ['Paid' => 'Paid',
                                      'Unpaid' => 'Unpaid'], null, ['class' =>'form-control','placeholder' => 'Bill status...'])}}
            
        <hr>
        </div>
        {{Form::submit('Add', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
    </div>
</div>
@endsection