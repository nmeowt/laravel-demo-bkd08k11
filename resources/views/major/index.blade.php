@extends('layouts.app')
@section('main-content')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Danh sách các ngành</h4>
        </div>
        <div class="card-content table-responsive table-full-width">
            <table class="table table-striped">
                <thead>
                    <th>Mã</th>
                    <th>Tên</th>
                </thead>
                <tbody>
                    @foreach ($majors as $major)
                        <tr>
                            <td>{{ $major->idMajor }}</td>
                            <td>{{ $major->nameMajor }}</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
