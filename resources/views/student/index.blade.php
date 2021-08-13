@extends('layouts.app')
@section('main-content')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Danh sách sinh viên</h4>
            <form method="get" action="">
                <label>Chọn lớp</label>
                <select name="grade">
                    <option value="">-----</option>
                    @foreach ($grades as $grade)
                        <option value="{{ $grade->idGrade }}" @if ($grade->idGrade == $idGrade) {{ 'selected' }} @endif>
                            {{ $grade->nameGrade . 'K' . $grade->nameCourse }}
                        </option>
                    @endforeach
                </select>
                <button class="btn btn-xs btn-fill">Oke</button>
            </form>
            <br>
            <a href="{{ route('student.add-by-excel') }}" class="btn btn-primary">Thêm bằng excel</a>
        </div>

        <div class="card-content table-responsive table-full-width">
            <table class="table table-striped">
                <thead>
                    <th>Mã</th>
                    <th>Tên</th>
                    <th>Email</th>
                    <th>Ngày sinh</th>
                    <th>Giới tính</th>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td>{{ $student->idStudent }}</td>
                            <td>{{ $student->FullName }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->dateBirth }}</td>
                            <td>{{ $student->GenderName }}</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            {{-- <div class="text-center">
                {{ $majors->appends(['search' => $search])->links() }}
            </div> --}}
        </div>
    </div>

@endsection
