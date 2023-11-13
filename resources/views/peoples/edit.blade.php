@extends('layout.master')

@section('content')
<h1>sua</h1>

@if(\Session::has('msg'))
<div class="alert alert-danger">
    {{ \Session::get('msg') }}
</div>
@endif

<form action="{{ route('peoples.update',$people) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    
    <label for="">image</label>
    <img src="{{ \Storage::url($people->image) }}" alt="" width="100">
    <input type="file" name="image" id="" value="{{ $people ->image }}">

    <label for="">name</label>
    <input type="text" name="name" id="" value="{{ $people ->name }}">

    <label for="">reg date</label>
    <input type="text" name="date" id="" value="{{ $people ->date}}">

    <label for="">mail</label>
    <input type="text" name="gmail" id="" value="{{ $people ->gmail }}">

    <label for="">phone</label>
    <input type="text" name="phone" id="" value="{{ $people ->phone }}">

    <label for="">country</label>
    <input type="text" name="country" id="" value="{{ $people ->country }}">
    
    <label for="">total oder</label>
    <input type="text" name="oder" id="" value="{{ $people ->oder }}">

    <a href="{{ route('peoples.index') }}">trang danh sach</a>

    <button type="submit">Save</button>
</form>
@endsection