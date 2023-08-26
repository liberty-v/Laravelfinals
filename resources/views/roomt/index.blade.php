@extends('layouts.app')

@section('content')
    <div class = 'common'>
    <h1 id='bold'>Room Details
    </h1>
    <a  href='/boarders' class='btn btn-secondary btn-sm'>Back</a>
    
    <hr>
    @if($roomt -> count() >0)
    <table class='table'>
        <thead class ='thead-dark'>

            <tr>
                <th scope="col">Room Number</th>
                <th scope="col">Monthly Rent</th>
                <th scope="col">Availability</th>
                <th scope="col">  </th>
 
            </tr>
        </thead>
            
        <tbody>
                @foreach($roomt as $room)
            <tr>
                <td scope='row' id='bold'>
                    {{$room->room_num}}</td>
                <td>{{$room->monthly_rent}}</td>
                <td>{{$room->availability}}</td>
                
                <td>
                    @if($room->availability == 'Under Maintenance')
                    <a href='/maintenance/{{$room->id}}' class='button btn-dark btn-sm'>Details</a></td>
                    @endif
            </td>
            </tr>
            </tbody>
    
    
            @endforeach
    @else
            <p>No rooms found</p>
    @endif
    </table>

@endsection