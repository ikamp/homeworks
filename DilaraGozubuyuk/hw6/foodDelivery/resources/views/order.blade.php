@extends('master')
@section('content')
    <table>
        <tr>
            <td>Food Name</td>
            <td>Price</td>
            <td>Quantity</td>
        </tr>
        @foreach($Orders as $order)
            <tr>
                <td>{{$order->name}}</td>
                <td>{{$order->price}}</td>
                <td>{{$order->quantity}}</td>
            </tr>
        @endforeach
    </table>
@endsection