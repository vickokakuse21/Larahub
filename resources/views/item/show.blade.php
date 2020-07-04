@extends('master')
@section('content')
    <div>
        <h3>Detail Item</h3>
        <p>Item's name : {{$item->name}} </p>
        <p>Item's description : {{$item->description}}</p>
        <p>Item's price : {{$item->price}}</p>
        <p>Item's stock : {{$item->stock}}</p>
    </div>
    <div>
        <h3>Jawaban</h3>
        <p></p>
    </div>
@endsection