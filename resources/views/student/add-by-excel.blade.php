@extends('layouts.app')
@section('main-content')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Thêm sinh viên bằng excel</h4>
            <p>Lưu ý: các cột sẽ có tên là (Mã Sinh Viên, Họ, Tên, Email, Ngày sinh, Giới tính, Lớp)</p>

            Download file mẫu:
            <a href="{{ asset('upload/file-mau.xlsx') }}" download> Mẫu excel để điền </a>
            <br>
            <br>

            <form action="{{ route('student.add-by-excel-process') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="file" name="excel-file" class="form-control"
                    accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">
                <button>Oke</button>
            </form>
            <br>
        </div>
    </div>

@endsection
