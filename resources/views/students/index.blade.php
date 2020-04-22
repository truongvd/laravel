@extends('layouts.master')

@section('students.title')
    Trang chủ
@stop
@section('students.js')
    <script type="text/javascript" src="/js/StudentController.js"></script>
@stop
@section('students.content')
<div class="container">
<h4 class="text-center"></h4>
    <div class="" style="margin-bottom: 10px;">
        <button id="btn-create-student" type="button" class="btn btn-sm btn-success">Thêm</button>
    </div>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">Mã SV</th>
            <th scope="col">Họ tên</th>
            <th scope="col">Tuổi</th>
            <th scope="col">Địa chỉ</th>
            <th scope="col">Số điện thoại</th>
            <th scope="col">Giới tính</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
                <tr>
                    <th scope="row">{{$student->student_code}}</th>
                    <td>{{$student->student_name}}</td>
                    <td>{{$student->student_age}}</td>
                    <td>{{$student->student_addess}}</td>
                    <td>{{$student->student_phone}}</td>
                    <td>{{$student->student_sex}}</td>
                    <td style="width: 12%">
                        <button type="button" class="btn btn-sm btn-primary">Sửa</button>
                        <button type="button" class="btn btn-sm btn-danger">Xoá</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <nav aria-label="...">
        <ul class="pagination">
            <li class="page-item disabled">
                <span class="page-link">Previous</span>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active" aria-current="page">
      <span class="page-link">
        2
        <span class="sr-only">(current)</span>
      </span>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
    <div id="addStudent"></div>
</div>
@stop
