<?php

namespace App\Imports;

use App\Models\Grade;
use App\Models\Student;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StudentImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        // Chuyển dạng ngày tháng từ excel
        $UNIX_DATE = ($row["ngay_sinh"] - 25569) * 86400;
        $idCourse = DB::table('course')->where('nameCourse', $row["khoa"])->value('idCourse');

        $data = [
            "lastName" => $row['ho'],
            "firstName" => $row['ten'],
            "email" => $row["email"],
            "dateBirth" => gmdate("Y-m-d", $UNIX_DATE),
            "gender" => ($row["gioi_tinh"] == 'Nam') ? 1 : 0,
            "idGrade"  => Grade::where('nameGrade', $row["lop"])->where('idCourse', $idCourse)->value('idGrade'),
        ];
        return new Student($data);
    }
}
