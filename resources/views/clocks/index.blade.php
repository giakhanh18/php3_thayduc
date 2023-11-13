@extends('layout.master')

@section('content')
    <h1>
        danh sach</h1>

    <a href="{{ route('clocks.create') }}">ADD</a>

    @if (\Session::has('msg'))
        <div class="alert alert-success">
            {{ \Session::get('mag') }}
        </div>
    @endif

    <table class="table">

        <tr>
            <td>id</td>
            <td>anh</td>
            <td>ten</td>
            <td>price sale</td>
            <td>status</td>
            <td>action</td>
        </tr>

        @foreach ($data as $cl)
            <tr>
                <td>{{ $cl->id }}</td>
                <td>
                    <img src="{{ \Storage::url($cl->image) }}" alt="" width="50px">
                    {{-- <img src="{{ asset($cl->image) }}" alt="" width="100"> --}}
                </td>
                <td>{{ $cl->ten }}</td>

                <td>
                    @if ($cl->price)
                        <del class="text-danger">${{ $cl->price }}</del>
                        {{ $cl->price_sale }}
                    @else
                        {{ $cl->price }}
                    @endif
                </td>


                <td class="{{ $cl->status === 'on' ? 'text-success' : 'text-danger' }}">
                    {{ $cl->status }}
                </td>

                <td>

                    <a href="{{ route('clocks.show', $cl) }}">show</a>
                    <a href="{{ route('clocks.edit', $cl) }}">edit</a>
                    <form action="{{ route('clocks.destroy', $cl) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('bn muon xoa')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach

    </table>
    {{ $data->links() }}
@endsection
