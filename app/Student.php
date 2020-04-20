<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $table = 'students';


    public function getAllStudent()
    {
        $query = self::select([
           'student_code',
           'student_name',
           'student_age',
           'student_phone',
           'student_address',
        ])
        ->from($this->table)
        ->where(['student_is_deleted' => 0])
        ->orderBy('student_name', 'ASC');
        return $query->get();
    }
}
