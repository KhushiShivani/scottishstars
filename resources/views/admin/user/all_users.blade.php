@include('admin.layouts.header')
@include('admin.layouts.side_bar')
<style>
   .all_users_active{
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
               <i class="pe-7s-users icon-gradient bg-tempting-azure"></i>
            </div>
            <div>
               User Management > All Users
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
      <div class="card-body">
         <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
            <thead>
               <tr>
                    <th>S.no</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php $sno = 0; ?>
                @foreach ($users as $item)
                <?php $sno++; ?>
                    <tr>
                        <td>{{$sno}}</td>

                        <td>@if($item['name'])
                            <b> {{$item['name']}}</b>
                            @else N/A @endif
                        </td>
                        <td>{{$item['email']}}</td>
                        <td>
                            @if ($item['role'] == 1)
                            <div class="mb-2 mr-2 badge badge-success">Admin</div>
                            @else
                            <div class="mb-2 mr-2 badge badge-primary">User</div>
                            @endif
                        </td>
                        <td>
                            <div class="mb-2 mr-2 badge badge-info">Active</div>
                        </td>
                        {{-- <td>
                            @if ($item['status'] == 1)
                            <div class="mb-2 mr-2 badge badge-success">In-Stock</div>
                            @else
                            <div class="mb-2 mr-2 badge badge-danger">No-Stock</div>
                            @endif
                        </td> --}}
                        {{-- <td><a href="{{url('admin/product/edit?'.'id='.$item['id'])}}">edit <i class="metismenu-icon pe-7s-pen"></i></a></td> --}}
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>S.no</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Status</th>
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
