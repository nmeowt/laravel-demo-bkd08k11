@extends('layouts.app')
@section('main-content')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Danh sách file đã đăng</h4>
        </div>

        <div class="card-content table-responsive table-full-width">
            <table class="table table-striped">
                <thead>
                    <th>Mã</th>
                    <th>Tên</th>
                    <th>Download</th>
                </thead>
                <tbody>
                    @foreach ($files as $file)
                        <tr>
                            <td>{{ $file->id }}</td>
                            <td>{{ $file->fileName }}</td>
                            <td>
                                <form action="{{ route('file.download-file') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="file" value="{{ $file->fileUrl }}">
                                    <button>Download</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

@endsection
