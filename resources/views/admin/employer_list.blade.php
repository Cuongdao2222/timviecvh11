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


<h2>Danh sách nhà tuyển dụng</h2>


<table>

    <?php 
        $data = DB::table('employ_info')->get();
    ?>

    <tr>
        <th>Tên nhà tuyển dụng</th>
        <th>Danh sách công việc đã đăng</th>
        <th>Danh sách cv đã nộp</th>
        <th>Chọn nổi bật</th>
        
        <th>Xóa</th>
    </tr>
    <tr>
        @if(!empty($data))
            @foreach($data as $value)
            <td>{{ $value->name }}</td>
            <td><a href="#"> <button type="button" class="btn btn-primary">Xem</button> </a></td>
            <td>
                <button type="button" class="btn btn-primary"  onclick="data_apply_cv({{ $value->id }})">Xem</button>
            </td>
            <td>chọn</td>
           
            <td><a href="">Xóa</a></td>
            @endforeach
        @endif    
        
        
    </tr>


    
    
    </table>

    <!-- Modal -->

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Danh sách Job đã nộp </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript">

    function data_apply_cv(id) {
       
        $.ajax({
            type: 'GET',
            url: "{{ route('view-apply-job') }}",
            data:{
                id:id
            },
           
            success: function(result){
              
               $('.modal-body').append(result);
                 $('#exampleModal').modal('show');
              
                
            }
        });
        
    }
   
    
   
</script>
@endsection