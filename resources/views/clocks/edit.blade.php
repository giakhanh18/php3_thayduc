@extends('layout.master')

@section('content')
    <h1>Cập nhật : {{ $clock->name }}</h1>

    @if (\Session::has('msg'))
        <div class="alert alert-success">
            {{ \Session::get('msg') }}
        </div>
    @endif

    <form action="{{ route('clocks.update', $clock) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="">Name</label>
        <input type="text" class="form-control" name="ten" id="ten" value="{{ $clock->ten }}">

        <label for="">Img</label>
        <input type="file" class="form-control" name="image" id="image">
        <img src="{{ \Storage::url($clock->image) }}" alt="" width="50px">

        <label for="">Price</label>
        <input type="text" name="price" id="" class="form-control" value="{{ $clock->price }}" >

        <label for="">Price sale</label>
        <input type="text" name="price_sale" id="" class="form-control" value="{{ $clock->price_sale }}">

        <label for="">Status</label>

        <input type="radio" value="{{ \App\Models\Clock::CL }}" @if ($clock->status == \App\Models\Clock::CL) checked @endif
            name="status" id="">
        <label for="">ON</label>

        <input type="radio" value="{{ \App\Models\Clock::CB }}" @if ($clock->status == \App\Models\Clock::CB) checked @endif
            name="status" id="">
        <label for="">OFF</label>


        <br><br>
        <a href="{{ route('clocks.index') }}" class="btn btn-info">Quay lại danh sách</a>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
