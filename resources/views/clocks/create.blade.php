@extends('layout.master')

@section('content')
    <h1>them moi</h1>

    @if(\Session::has('msg'))
        <div class="alert alert-danger">
            {{ \Session::get('msg') }}
        </div>
    @endif

    <form action="{{ route('clocks.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <label for="">Name</label>
        <input type="text" class="form-control" name="ten" >

        <label for="">Img</label>
        <input type="file" class="form-control" name="image" >

        <label for="">price</label>
        <input type="text" name="price" class="form-control" id="">
        
        <label for="">price sale</label>
        <input type="text" name="price_sale"  class="form-control" id="">

        <label for="">Status</label>

        <input type="radio" value="{{ \App\Models\Clock::CB}}" name="status" >
        <label for="">On</label>

        <input type="radio" value="{{ \App\Models\Clock::CL }}" name="status" >
        <label for="">OFF</label>

        <br><br>
        <a href="{{ route('clocks.index') }}" class="btn btn-info">Quay lại  danh sách</a>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
