@extends('layouts.app')

@section('content')
    <div class = 'common'>
    <h1>Maintenance Details</h1>
    <a  href='/roomt' class='btn btn-secondary btn-sm'>Back</a>
    
    <hr>
    @if($maintenance -> count() > 0)
    <table class='table'>
        <thead class ='thead-light'>

            <tr>
                <th scope="col">Description</th>
                <th scope="col">Status</th>
                
            </tr>
        </thead>
            
        <tbody>
                @foreach($maintenance as $main)
            <tr>
                <td scope='row'>
                    {{$main->issue_desc}}</td>
                <td>{{$main->status}}</td>
            
            </tr>
            </tbody>
                @endforeach
    @else
            <p>No maintenance found</p>
    @endif
    </table>

@endsection