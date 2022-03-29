@include('admin.layouts.header')
@include('admin.layouts.side_bar')
<style>
   .product_active{
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
               Item Manager > Products
               <div class="page-title-subheading">Choose between regular React Bootstrap tables or advanced dynamic ones.</div>
            </div>
         </div>
         <div class="page-title-actions">
            {{-- <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom"
               class="btn-shadow mr-3 btn btn-dark">
            <i class="fa fa-star"></i>
            </button> --}}
            <div class="d-inline-block dropdown">
               <a href="{{url('admin/product/create')}}" class="btn-shadow btn btn-info">Create</a>
            </div>
         </div>
      </div>
   </div>
   <div class="main-card mb-3 card">
      <div class="card-body">
         <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
            <thead>
               <tr>
                   <th>S.no</th>
                   {{-- <th>Relation</th> --}}
                  <th>Title</th>
                  <th>Image</th>
                  <th>Sale Price</th>
                  <th>Actual Price</th>
                  <th>Save ₹/%</th>
                  <th>Size/Stock/Length</th>
                  <th>Status</th>
                  <th>Action</th>
               </tr>
            </thead>
            <tbody>
                <?php $sno = 0; ?>
                @foreach ($products as $item)
                <?php $sno++; ?>
                    <tr>
                        <td>{{$sno}}</td>
                        {{-- <td>
                            <div class="mb-2 mr-2 badge badge-success">Cat: {{$item->category['title']}}</div>
                            <br>
                            <div class="mb-2 mr-2 badge badge-primary">Sub-Cat: {{$item->sub_category['title']}}</div>
                        </td> --}}
                        <td>@if($item['title'])
                            <b> {{$item['title']}}</b>
                            <br>
                            <div class="mb-2 mr-2 badge badge-success">Cat: {{$item->category['title']}}</div>
                            <br>
                            <div class="mb-2 mr-2 badge badge-primary">Sub-Cat: {{$item->sub_category['title']}}</div>
                            @else N/A @endif</td>
                        <td>
                            @if ($item['single_img'])
                                <img src="{{asset($item['single_img'])}}" alt="{{$item['title']}}" style="width: 60px;">
                                @else
                                N/A
                            @endif

                        </td>
                        <td>₹{{$item['price']}}</td>
                        <td>@if($item['old_price'] != null)₹{{$item['old_price']}}@else ₹{{$item['price']}} @endif</td>
                        <td>
                            @if($item['discount_price'] != 0)
                            <div class="mb-2 mr-2 badge badge-success">₹{{$item['discount_price']}} / {{$item['discount_percent']}}%</div>
                            @else N/A
                            @endif
                        </td>
                        <td>
                            @foreach ($item->product_size as $sizes)
                            @if($sizes['stock'] <= 5 && $sizes['stock'] != 0)
                            <div class="mb-2 mr-2 badge badge-warning">{{$sizes['size']}} / {{$sizes['stock']}} </div>
                            @elseif ($sizes['stock'] >= 15)
                            <div class="mb-2 mr-2 badge badge-success">{{$sizes['size']}} / {{$sizes['stock']}} </div>
                            @elseif ($sizes['stock'] == 0)
                            <div class="mb-2 mr-2 badge badge-danger">{{$sizes['size']}} / {{$sizes['stock']}} </div>
                            @else
                            <div class="mb-2 mr-2 badge badge-primary">{{$sizes['size']}} / {{$sizes['stock']}} </div>
                            @endif
                            @endforeach
                        </td>
                        <td>
                            @if ($item['status'] == 1)
                            <div class="mb-2 mr-2 badge badge-success">In-Stock</div>
                            @else
                            <div class="mb-2 mr-2 badge badge-danger">No-Stock</div>
                            @endif
                        </td>
                        <td><a href="{{url('admin/product/edit?'.'id='.$item['id'])}}">edit <i class="metismenu-icon pe-7s-pen"></i></a></td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
               <tr>
                <th>S.no</th>
                   {{-- <th>Relation</th> --}}
                  <th>Title</th>
                  <th>Image</th>
                  <th>Sale Price</th>
                  <th>Actual Price</th>
                  <th>Save</th>
                  <th>Size/Stock/Length</th>
                  <th>Status</th>
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
        document.getElementById('item_manager').className = 'mm-active';
        document.getElementById('item_manager_list').className = 'mm-show';
    };
</script>
