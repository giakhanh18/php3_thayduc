@extends('layout.master')

@section('content')
    <h1>Xem chi tiết: {{ $clock->name }}</h1>

    <ul>
        <li>ID: {{ $clock->id }}</li>
        <li>Name: {{ $clock->ten }}</li>
        <li>Img: <img src="{{ \Storage::url($clock->image) }}" alt="" width="50px"> </li>
        <li>Giá :   @if ($clock->price)
            <del class="text-danger">${{ $clock->price }}</del>
            {{ $clock->price_sale }}
        @else
            {{ $clock->price }}
        @endif</li>
        <li>Status: {{ $clock->status ? 'ON' : 'OFF' }}</li>
    </ul>

    <a href="{{ route('clocks.index') }}" class="btn btn-info">Quay lại  danh sách</a>
@endsection
