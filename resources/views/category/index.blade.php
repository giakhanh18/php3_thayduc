@extends('layout.master')

@section('content')
 <h1>danh sach</h1>
 <a href="{{ route('category.create') }}">them</a>
 <table class="table">
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>excerpt</th>;
            <th>is_active</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->excerpt }}</td>
                <td>{{ $item->is_active }}</td>
                <td>
                    <a href="{{ route('category.show',$item) }}">show</a>
                    <a href="{{ route('category.edit',$item) }}">show</a>

                    <form action="{{ route('category.destroy') }}" method="POST">
                        @csrf
                        @method('DELETE')
                        
                    </form>
                </td>
                <td></td>
            </tr>
        @endforeach
    </tbody>
   
 </table>
 {{ $data->links() }}
 @endsection