@extends('layouts.app')
@section('main-content')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Demo File</h4>
        </div>

        <div class="card-content">
            <form action="{{ route('file.upload-file') }}" method="post" enctype="multipart/form-data">
                @csrf
                Chọn file: <input type="file" name="file">
                <br>
                <button>Đăng</button>
            </form>
        </div>
    </div>

@endsection
