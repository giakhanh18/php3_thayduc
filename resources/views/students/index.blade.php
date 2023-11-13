@extends('layout.master')
@section('content')
<table class="table">
    <h2>danh sachs</h2>
    <a href="{{ route('students.create') }}">ADD</a>
    <thead>
        <tr>
            <td>id</td>
            <td>lop</td>
            <td>ma</td>
            <td>ten</td>
            <td>anh</td>
            <td>trang thai</td>
            <td>action</td>
        </tr>
    </thead>
    @foreach ($data  as $st)
    <tr>
        <td>{{ $st->id }}</td>
        <td>{{ $st->tenlop }}</td>
        <td>{{ $st->masv }}</td>
        <td>{{ $st->tensv }}</td>
        <td>
            <img src="{{ asset($st->image) }}" alt="" width="100">
        </td>
        <td>{{ $st->status}}</td>
        <td>
            <a href="{{ route('students.show',$st) }}" class="btn btn primary">Show</a>

            <a href="{{ route('students.edit',$st )}}" class="btn btn primary">Edit</a>

            <form action="{{ route('students.destroy',$st) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" 
                 class="btn btn primary" 
                 onclick="return confirm('bn muốn xóa ')">
                 Delete
                </button>
            
            </form>
        </td>
    </tr>
    @endforeach
</table>
{{ $data ->links()}}
@endsection