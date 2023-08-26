@extends('layouts.app')

@section('content')
    <div class = 'common'>
    <h1 id='bold'>Bills
    </h1>
    <a href='/bills/create' class='btn btn-primary btn-sm'>+</a>
    <a  href='/boarders' class='btn btn-secondary btn-sm'>Back</a>
    
    @if(count($bills) > 0)
    <hr>
    
    <table class='table'>
        @foreach($bills as $bill)

        <thead class='thead-dark'>

        <tr>
            <th scope="col">
               Room number: 
                {{$bill->boarder->room_number}}</th>
            <th scope="col"><a href='/bills/{{$bill->boarder_id}}'
                 class='float-right btn-sm btn btn-secondary'> Details </a></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td scope='row' > 
                Month: {{$bill->month}}</td>
            <td>{{$bill->status}}</td>
        </tr>
    </tbody>
    
        @endforeach
    </table>
    @else
            
            <p><hr>No bills found</p>
    @endif
    </div>
@endsection