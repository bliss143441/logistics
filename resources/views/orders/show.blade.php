@extends('master')
<title>Order Details</title>
@section('content')
    <h1>Order Details</h1>
    <div class="content">
    <p>ID: {{$order->id}}</p>
    <p>Origin: {{$order->from}}</p>
    <p>Destination: {{$order->to}}</p>
        <p>Created: {{$order->created_at}}</p>
        <p>Last Update: {{$order->updated_at}}</p>
    </div>
    <p>
        <a href="/orders/{{$order->id}}/edit">Edit</a>
    </p>
    {{--<p>--}}
        {{--<a href="/orders/{{$order->id}}/delete">Delete</a>--}}
    {{--</p>--}}

@endsection