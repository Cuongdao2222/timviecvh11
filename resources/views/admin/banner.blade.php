@extends('admin.layout.app')
@section('content') 

<section class="content">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Banners</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right" href="https://dienmaynguoiviet.vn/admins/banners/create">
                    Add New
                    </a>
                </div>
            </div>
        </div>
    </section>
    <div class="content px-3">
        <div class="clearfix"></div>
        <div class="card">
            <div class="card-body p-0">
                <select name="option" onchange="location = this.value;">
                    <option value="https://dienmaynguoiviet.vn/admins/banners?option=0">Banner slide home</option>
                    <option value="https://dienmaynguoiviet.vn/admins/banners?option=1" selected="">Banner top</option>
                    <option value="https://dienmaynguoiviet.vn/admins/banners?option=2">Banner bên phải slider home</option>
                    <option value="https://dienmaynguoiviet.vn/admins/banners?option=3">Banner dưới slider home</option>
                    <option value="https://dienmaynguoiviet.vn/admins/banners?option=4">Banner category</option>
                    <option value="https://dienmaynguoiviet.vn/admins/banners?option=5">Banner trên phần sale home</option>
                </select>
                <table id="tb_padding" border="1" bordercolor="#CCCCCC" width="100%">
                    <tbody>
                        <tr style="background-color:#EEE; font-weight:bold;">
                            <td style="width:40px">STT</td>
                            <td>Thông tin</td>
                            <td style="width:60px">Thứ tự</td>
                            <td style="width:60px">Click</td>
                            <td style="width:130px">Chỉnh sửa</td>
                        </tr>
                        <tr id="row_402" onmouseover="this.className='row-hover'" onmouseout="this.className=''" class="">
                            <td>1</td>
                            <!--<td><a class='preview_media' href="javascript:;">Xem nhanh <span></span></a></td>-->    
                            <td>
                                <div class="peek-view-banner"><img border="0" src="https://dienmaynguoiviet.vn/uploads/banner/1656900873_65UP7720.jpg" width="200"></div>
                                <b style="color:#F00">Thông tin</b><br>
                                <table cellpadding="0" cellspacing="0">
                                    <tbody>
                                        <tr>
                                            <td>Tên gọi</td>
                                            <td>: <b>banner top</b></td>
                                        </tr>
                                        <tr>
                                            <td>File</td>
                                            <td>: <input type="text" readonly="" size="80" value="/media/banner/15_Aprd99119ca42e35bfa7fbc7fba9ab1d88a.jpg"></td>
                                        </tr>
                                        <tr>
                                            <td>Kích thước</td>
                                            <td>: Rộng x Cao (Width x Height) = 1920px x 44px </td>
                                        </tr>
                                        <tr>
                                            <td>Link</td>
                                            <td>: <input type="text" readonly="" size="35" value="#"></td>
                                        </tr>
                                        <tr>
                                            <td>Thời gian</td>
                                            <td>23/05/2022</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                            <td>
                                <input id="stt12" type="text" size="5" value="0" onchange="update_banner_order('12')">
                                <span id="order_12"></span>
                            </td>
                            <td>0</td>
                            <td>
                                <span id="status_402">
                                <a href="https://dienmaynguoiviet.vn/admins/activeBanner?id=12&amp;active=1">Bật lên</a>
                                </span> 
                                <br> 
                                <a href="https://dienmaynguoiviet.vn/admins/banners/12/edit">Sửa lại</a> <br>
                                <!-- <a href="javascript:void(0);" onclick="delete_this('402')">Xóa</a> -->
                            </td>
                        </tr>
                    </tbody>
                </table>
                <script type="text/javascript">
                    function update_banner_order(id) {
                    
                       
                        $.ajax({
                       
                        type: 'GET',
                            url: "https://dienmaynguoiviet.vn/admins/update-banner-stt",
                            data: {
                                id: id,
                                val:$('#stt'+id).val(),
                                
                            },
                            success: function(result){
                    
                                $('#order_'+id).text('');
                    
                                $('#order_'+id).text('Thành công');
                    
                                
                            }
                        });
                    }
                </script>
                <div class="card-footer clearfix">
                    <div class="float-right">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection