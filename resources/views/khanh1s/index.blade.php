@extends('layout.master')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>khanh1 đây </h2>
            </div>
            <div class="mb-3">
                <a class="btn btn-success" href="{{ route('khanh1s.create') }}"> Create New </a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <th>title</th>
            <th>image</th>
            <th>status</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($data as $khanh1)
        <tr>
            <td>{{ $khanh1->id }}</td>
            <td>{{ $khanh1->title }}</td>
            <td>
                <img src="{{ asset($khanh1->image) }}" width="100">
            </td>
            
            <td>{{ $khanh1->status }}</td>
            <td>
                <form action="{{ route('khanh1s.destroy', $khanh1->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('khanh1s.show', $khanh1->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('khanh1s.edit', $khanh1->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {{ $data->links() }}
@endsection