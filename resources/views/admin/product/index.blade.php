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
               <i class="pe-7s-server icon-gradient bg-tempting-azure"></i>
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
                   {{-- <th>Relation</th> --}}
                  <th>Title</th>
                  <th>Image</th>
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


                        <td>
                            @if ($item['status'] == 1)
                            <div class="mb-2 mr-2 badge badge-success">Active</div>
                            @else
                            <div class="mb-2 mr-2 badge badge-danger">In-Active</div>
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
