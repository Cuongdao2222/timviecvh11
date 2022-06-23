@extends('admin.layout.app')
@section('content') 

<style type="text/css">
    
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }
    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }
    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>


<h2>Danh sách ứng viên</h2>


<table>

    <?php 
        $data = App\user::get();
    ?>

    <tr>
        <th>Tên ứng viên</th>
        <th>Cv ứng viên</th>
        <th>Lịch sử nộp cv</th>
        <th>Chọn nổi bật</th>
        <th>Sửa</th>
        <th>Xóa</th>
    </tr>
    <tr>
        @if(!empty($data))
            @foreach($data as $value)
            <td>{{ $value->name }}</td>
            <td>Maria Anders</td>
            <td>Germany</td>
            <td>chọn</td>
            <td><a href="">Sửa</a></td>
            <td><a href="">Xóa</a></td>
            @endforeach
        @endif    
        
        
    </tr>
    
</table>
@endsection