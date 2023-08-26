@extends('layouts.app')

@section('content')
    <div class = 'common'>
    <h1 id='bold'>Boarders
    </h1>
    
    <a href='/boarders/create' class='btn btn-primary btn-sm'>+</a>&nbsp;
    <td><a href='/bills' class='btn btn-success btn-sm'>Bills</a></td>
    <a href='/roomt' class='btn btn-dark btn-sm'>Room</a>
    <br><br>
    
    @if(count($boarderz) > 0)
        @foreach($boarderz as $boarder)
        <hr>
        <small>Room Number:</small>
        <h3><a href='/boarders/{{$boarder->id}}'>{{$boarder->room_number}}</h3></a>
        @endforeach
    @else
            <p>No boarders found</p>
    @endif

    </table>
    </div>

@endsection