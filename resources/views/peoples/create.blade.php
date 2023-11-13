@extends('layout.master')

@section('content')
<h1>them moi</h1>

@if(\Session::has('msg'))
<div class="alert alert-danger">
    {{ \Session::get('msg') }}
</div>
@endif

<form action="{{ route('peoples.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    
    <label for="">image</label>
    <input type="file" name="image" id="">

    <label for="">name</label>
    <input type="text" name="name" id="">

    <label for="">reg date</label>
    <input type="text" name="date" id="">

    <label for="">mail</label>
    <input type="text" name="gmail" id="">

    <label for="">phone</label>
    <input type="text" name="phone" id="">

    <label for="">country</label>
    <input type="text" name="country" id="">
    
    <label for="">total oder</label>
    <input type="text" name="oder" id="">

    <a href="{{ route('peoples.index') }}">trang danh sach</a>

    <button type="submit">Save</button>
</form>
@endsection