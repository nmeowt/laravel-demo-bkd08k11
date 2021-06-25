@extends('layouts.app')
@section('main-content')
    <div class="card">
        {{-- Thêm thì các bạn sử dụng cho chị post --}}
        <form method="post" action="{{ route('major.store') }}">
            @csrf
            <div class=" card-header">
                <h4 class="card-title">
                    Thêm ngành học
                </h4>
            </div>
            <div class="card-content">
                <div class="form-group">
                    <label>Thêm ngành</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <button type="submit" class="btn btn-fill btn-info">Submit</button>
            </div>
        </form>
    </div>
@endsection
