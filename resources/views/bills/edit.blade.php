@extends('layouts.app')

@section('content')
<div class='common'>
    <h1 id=bold>Edit Bill</h1>
    <a href='/bills' class='btn btn-secondary btn-sm'>Back</a>
    <br><hr>
    <div>
    {!! Form::open(['action' => ['App\Http\Controllers\BillsController@update', $bill->id], 'method' => 'POST']) !!}
        <div class='form-group'>

            {{Form::label('boarder_id','Room number:')}}
            {{Form::select('boarder_id', ['1' => 'D1',
                                          '2' => 'D2',
                                          '3' => 'U1',
                                          '4' => 'U2'], $bill->boarder_id, ['class' =>'form-control','placeholder' => 'Pick a room...'])}}

            {{Form::label('month','Month:')}}
            {{Form::select('month', ['January' => 'January',
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
                                     'December' => 'December'], $bill->month, ['class' =>'form-control','placeholder' => 'Select a month...'])}}


            {{Form::label('due_date','Due Date')}}
            {{Form::date('due_date', $bill->due_date, ['class' =>'form-control'])}}

            {{Form::label('rent','Rent:')}}
            {{Form::text('rent',$bill->rent, ['class' =>'form-control'])}}

            {{Form::label('electricity','Electricity:')}}
            {{Form::text('electricity', $bill->electricity, ['class' =>'form-control'])}}

            {{Form::label('water','Water:')}}
            {{Form::text('water', $bill->water, ['class' =>'form-control'])}}

            {{Form::label('status','Status:')}}
            {{Form::select('status', ['Paid' => 'Paid',
                                      'Unpaid' => 'Unpaid'], $bill->status, ['class' =>'form-control','placeholder' => 'Bill status...'])}}
            
        <hr>
        </div>
        {{Form::hidden("_method",'PUT')}}
        {{Form::submit('Update', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
    </div>
</div>
@endsection