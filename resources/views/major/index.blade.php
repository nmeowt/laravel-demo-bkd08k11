@extends('layouts.app')
@section('main-content')
    <div class="text-right">
        <a href="{{ route('major.create') }}" class="btn btn-info btn-fill btn-wd">Thêm ngành</a>
    </div>
    <br>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Danh sách các ngành</h4>
            <form class="navbar-form navbar-left navbar-search-form" role="search">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
                    <input type="text" value="{{ $search }}" name="search" class="form-control"
                        placeholder="Search...">
                </div>
            </form>
        </div>

        <div class="card-content table-responsive table-full-width">
            <table class="table table-striped">
                <thead>
                    <th>Mã</th>
                    <th>Tên</th>
                    <th>Xem</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </thead>
                <tbody>
                    @foreach ($majors as $major)
                        <tr>
                            <td>{{ $major->idMajor }}</td>
                            <td>{{ $major->nameMajor }}</td>
                            <td><a class="btn btn-primary btn-sm"
                                    href="{{ route('major.show', $major->idMajor) }}">Xem</a></td>
                            <td><a class="btn btn-warning btn-sm"
                                    href="{{ route('major.edit', $major->idMajor) }}">Sửa</a></td>
                            <td>
                                <form action="{{ route('major.destroy', $major->idMajor) }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger btn-sm">Xóa</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            <div class="text-center">
                {{ $majors->appends(['search' => $search])->links() }}
            </div>
        </div>
    </div>

@endsection
