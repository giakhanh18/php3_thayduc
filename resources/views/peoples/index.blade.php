@extends('layout.master')

@section('content')
<h1>danh sach</h1>

<a href="{{ route('peoples.create') }}">ADD</a>

@if (\Session::has('msg'))
    <div class="alert alert-seccess">
        {{ \Session::get('msg') }}
    </div>
@endif

<table class="'table">
    <tr>
        <td>id</td>
        <td>image</td>
        <td>name</td>
        <td>reg date</td>
        <td>mail</td>
        <td>phone</td>
        <td>country</td>
        <td>total oder</td>
        <td>action</td>
    </tr>

    @foreach ($data as $pp)
        <tr>
            <td>{{ $pp ->id}}</td>
            <td>
                <img src="{{ \Storage::url($pp->image) }}" alt="" width="100">
            </td>
            <td>{{ $pp ->name}}</td>
            <td>{{ $pp ->date}}</td>
            <td>{{ $pp ->gmail }}</td>
            <td>{{ $pp ->phone }}</td>
            <td>{{ $pp ->country }}</td>
            <td>{{ $pp ->oder }}</td>

            <td>
                <a href="{{ route('peoples.show',$pp) }}">show</a>
                <a href="{{ route('peoples.edit',$pp) }}">edit</a>
                <form action="{{ route('peoples.destroy',$pp) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('bn muon xoa')">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
@endsection