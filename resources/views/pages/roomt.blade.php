@extends('layouts.app')
    @section('content')
        <div class='common'>

            <h1>ROOMS</h1>
            <p>This is the rooms information </p>


            <tr>
                <th scope="col">Room Number</th>
                <th scope="col">Monthly Rent</th>
                <th scope="col">Availability</th>
                <th scope="col">  </th>
                
            </tr>
            </thead>
            
            <tr>
                <td scope='row'>
                    {{$roomt->room_num}}</td>
                <td>{{$roomt->monthly_rent}}</td>
                <td>{{$roomt->availability}}</td>
                <td> </td>

                <td>
                    switch({{$roomt->availability}}){
                        case 'Occupied':
                        break;

                        case 'Available':
                        break;

                        case 'Under Maintenance':
                        <a href='/roomt/{{$roomt->id}}/maintenance'>
                            Details</a>
                        break;

                    }
                    <a href='/bills/{{$boarder->id}}' class='button btn-dark btn-sm'>Bills</a></td>

                

            <td><a href='/boarders/{{$boarder->id}}/edit' class='btn btn-primary'>Update</a>
            
        </div>
    @endsection