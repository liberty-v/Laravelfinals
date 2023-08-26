@extends('layouts.app')

@section('content')
<div class='common'>
    <h1>Room: {{$boarder->room_number}}</h1>
    <a  href='/boarders' class='btn btn-secondary btn-sm'>Back</a>
    <br>
    <br>
    <table class='table'>
        <thead class ='thead-dark'>

            <tr>
                <th scope="col">Room Number</th>
                <th scope="col">Occupant</th>
                <th scope="col">Contact Number</th>
                <th scope="col"> Bills </th>
                <th scope="col"> Actions </th>
                
            </tr>
            </thead>
            <tr>
                <td scope='row'>
                    {{$boarder->room_number}}</td>
                <td>{{$boarder->first_name}}
                    {{$boarder->last_name}}</td>
                <td>{{$boarder->contact_number}}</td>

                <td><a href='/bills/{{$boarder->id}}' class='button btn-dark btn-sm'>Bills</a></td>

                

            
            <td>

                <a href='/boarders/{{$boarder->id}}/edit' class='btn btn-primary btn-sm'>Update</a>
            
            {!!Form::open(['action' => ['App\Http\Controllers\BoarderzController@destroy',$boarder->id], 'method'=> 'POST'])!!}
                {{Form::hidden('_method','DELETE')}}
                {{Form::submit('Delete',['class' => 'btn btn-danger btn-sm'])}}
            {!!Form::close()!!}
            </td>
            
            </table>
</div>
@endsection