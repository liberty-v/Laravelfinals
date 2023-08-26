@extends('layouts.app')

@section('content')
<div class='common'>
    <h1>Bill </h1>
    <a  href='/bills' class='btn btn-secondary btn-sm'>Back</a>
    <br>
    <br>
    @if ($bills ->count() >0)
    <table class='table'>
        <thead class ='thead-dark'>

            <tr>
                <th scope="col">Month</th>
                <th scope="col">Due Date</th>
                <th scope="col">Room number</th>
                <th scope="col">Rent</th>
                <th scope="col">Electricity</th>
                <th scope="col">Water</th>
                <th scope="col">Status</th>
                <th scope="col"> Actions </th>

                
            </tr>
        </thead>
        <tbody>
            @foreach ($bills as $bill)
            <tr>
                <td scope='row'>
                    {{$bill->month}}</td>
                <td>{{$bill->due_date}}</td>
                <td>{{$bill->boarder->room_number}}</td>
                <td>{{$bill->rent}}</td>
                <td>{{$bill->electricity}}</td>
                <td>{{$bill->water}}</td>
                <td>{{$bill->status}}</td>
              
            <td><a href='/bills/{{$bill->id}}/edit' class='btn btn-primary'>Update</a>

            {!!Form::open(['action' => ['App\Http\Controllers\BillsController@destroy',$bill->id], 'method'=> 'POST'])!!}
                {{Form::hidden('_method','DELETE')}}
                {{Form::submit('Delete',['class' => 'btn btn-danger '])}}
            {!!Form::close()!!}
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
            <p> Bill not found! </p>
    @endif
</div>
  
@endsection