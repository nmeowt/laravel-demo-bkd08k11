<?php

namespace App\Exports;

use App\Models\Student;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class StudentExport implements FromCollection, WithHeadings, WithStyles
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        // Viết lại câu query cho trùng khớp
        $data = Student::join('grade', 'student.idGrade', '=', 'grade.idGrade')->join('course', 'grade.idCourse', '=', 'course.idCourse')->select('firstName', 'lastName', 'email', 'dateBirth', 'gender', 'grade.nameGrade', 'course.nameCourse')->get();
        return $data;
    }

    public function headings(): array
    {
        return [
            'Họ',
            'Tên',
            'Email',
            'Ngày sinh',
            'Giới tính',
            'Lớp',
            'Khóa',
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            // Style the first row as bold text.
            1    => ['font' => ['bold' => true]],
        ];
    }
}
