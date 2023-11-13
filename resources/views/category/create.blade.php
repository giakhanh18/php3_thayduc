@extends('layout.master')
@section('content')
<h1>tao moi category</h1>
<form action="{{ route('category.store') }}" method="POST">
    @csrf
        <label for="">name</label>
        <input type="text" name="name" id=""><br>

        <label for="">excerpt</label>
        <input type="text" name="excerpt" id=""><br>

        <label for="">is_active : </label><br>
        <input type="radio" name="is_active" id="" value="{{\App\Models\Category::BOOLEAN_ONE }}">
        <label for="">1</label><br>

        <input type="radio" name="is_active" id="" value="{{\App\Models\Category::BOOLEAN_ZERO }}">
        <label for="">0</label> <br>

        <button><a href="{{ route('category.index') }}">danh sach</a></button>
        
        <button type="submit" class="btn btn-primary"> gui </button>
</form>
@endsection