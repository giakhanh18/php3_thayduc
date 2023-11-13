@extends('layout.master')

@section('content')
    <h1>Thêm mới danh mục</h1>

    @if(\Session::has('msg'))
        <div class="alert alert-danger">
            {{ \Session::get('msg') }}
        </div>
    @endif

    <form action="{{ route('students.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        
        <label for="">Ten lop</label>
        <input type="text" class="form-control" name="tenlop" id="">

        <label for="">Ma sv</label>
        <input type="text" class="form-control" name="masv" id="">

        <label for="">Ten sv</label>
        <input type="text" class="form-control" name="tensv" id="">

        <label for="">Img</label>
        <input type="file" class="form-control" name="image" id="">

        <label for="">status</label>

        <label for="">Co Mat</label>
        <input type="radio" value="{{ \App\Models\Student::CO }}" name="status" id="">

        <label for="">VAng Mat</label>
        <input type="radio" value="{{ \App\Models\Student::KO }}" name="status" id="">


        <br><br>
        <a href="{{ route('students.index') }}" class="btn btn-info">Quay lại  danh sách</a>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
