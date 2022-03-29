@include('admin.layouts.header')
@include('admin.layouts.side_bar')
<style>
   .product_reviews_active{
   color: #3f6ad8 !important;
   background: #e0f3ff;
   font-weight: bold;
   }
</style>
{{--
<div class="">
--}}
<div class="app-main__outer">
<div class="app-main__inner">
   <div class="app-page-title">
      <div class="page-title-wrapper">
         <div class="page-title-heading">
            <div class="page-title-icon">
               <i class="pe-7s-medal icon-gradient bg-tempting-azure"></i>
            </div>
            <div>
               User Manager > Product reviews
               <div class="page-title-subheading">Choose between regular React Bootstrap tables or advanced dynamic ones.</div>
            </div>
         </div>
         <div class="page-title-actions">
            {{-- <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom"
               class="btn-shadow mr-3 btn btn-dark">
            <i class="fa fa-star"></i>
            </button> --}}
            {{-- <div class="d-inline-block dropdown">
               <a href="{{url('admin/product/create')}}" class="btn-shadow btn btn-info">Create</a>
            </div> --}}
         </div>
      </div>
   </div>
   <div class="main-card mb-3 card">
    <div class="flash-message">
        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
          @if(Session::has('alert-' . $msg))
          <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
          @endif
        @endforeach
    </div>
      <div class="card-body">
         <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
            <thead>
               <tr>
                    <th>S.no</th>
                    <th>Order Id</th>
                    <th>Rating</th>
                    <th>Message</th>
                    <th>Product</th>
                    <th>Image</th>
                    <th>Reviewed On</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $sno = 0; ?>
                @foreach ($reviews as $item)
                <?php $sno++; ?>
                    <tr>
                        <td>{{$sno}}</td>
                        <td>{{$item['order_id']}}</td>
                        <td>
                            <?php  for($i=0;$i<$item['rating'];$i++){ ?>
                                <i class="fa fa-star" style="color: #EDB867;"></i>
                            <?php }?>
                        </td>
                        <td>{{$item['message']}}</td>
                        <td>{{$item->product['title']}}</td>
                        <td><img src="{{asset($item->product['single_img'])}}" alt="{{$item->product['title']}}" style="width: 60px;"></td>
                        <td>{{$item['created_at']}}</td>
                        <td>
                            <div class="card-body">
                                @if ($item['visible'] == 1)
                                <input type="checkbox" checked onchange="changeFunc(event,'{{$item['id']}}','{{$item['visible']}}');" data-toggle="toggle" data-on="Visible" data-off="Hide" data-onstyle="success" data-offstyle="danger">
                                @else
                                <input type="checkbox" onchange="changeFunc(event,'{{$item['id']}}','{{$item['visible']}}');" data-toggle="toggle" data-on="Visible" data-off="Hide" data-onstyle="success" data-offstyle="danger">
                                @endif
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
               <tr>
                    <th>S.no</th>
                    <th>Order Id</th>
                    <th>Rating</th>
                    <th>Message</th>
                    <th>Product</th>
                    <th>Image</th>
                    <th>Reviewed On</th>
                    <th>Action</th>
               </tr>
            </tfoot>
         </table>
      </div>
   </div>
</div>
@include('admin.layouts.footer')
<script>
    window.onload = function() {
        document.getElementById('user_manager').className = 'mm-active';
        document.getElementById('user_manager_list').className = 'mm-show';
    };
</script>
<script>
    function changeFunc(e,id,visibility){
        $.ajax({
                "type": "POST",
                url: "{{url('admin/users/update-review-status')}}",
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                data: {
                    id: id,
                    visibility: visibility
                },
                success: function(data){
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Review Published',
                        showConfirmButton: false,
                        timer: 2500
                    });
                    setTimeout(() => {
                        location.reload();
                    }, 2000);

                },
                error: function(data){
                    console.log("error:", data);
                }
        });
    }
</script>
