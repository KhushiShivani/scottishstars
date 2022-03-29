@include('admin.layouts.header')
@include('admin.layouts.side_bar')
<style>
   .sub_category_active{
   color: #3f6ad8 !important;
   background: #e0f3ff;
   font-weight: bold;
   }
   .form-control-file{
    width: auto;
   }
</style>
{{--
<div class="">
--}}
<div class="app-main__outer">
<div class="app-main__inner">
   {{-- <div class="app-page-title">
      <div class="page-title-wrapper">
         <div class="page-title-heading">
            <div class="page-title-icon">
               <i class="pe-7s-medal icon-gradient bg-tempting-azure"></i>
            </div>
            <div>
               Create Banner
               <div class="page-title-subheading">Choose between regular React Bootstrap tables or advanced dynamic ones.</div>
            </div>
         </div>

      </div>
   </div> --}}
   {{-- <div class="main-card mb-3 card">
      <div class="card-body"> --}}
        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">Update Sub Category => {{$old_data['title']}}</h5>
                        <form action="{{url('admin/sub-category/update')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$old_data['id']}}">
                            <div class="position-relative form-group">
                                <label for="category" class="">Category</label>
                                <select name="cat_id" id="category" class="form-control">
                                    @foreach ($categories as $item)
                                        <option value="{{$item['id']}}" {{$item['id'] == $old_data['cat_id'] ? "selected" : ""}}>{{$item['title']}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="position-relative form-group">
                                <label for="title" class="">Title</label>
                                <input type="text" name="title" value="{{$old_data['title']}}" id="title" placeholder="Enter Title" class="form-control" required>
                            </div>
                            <div class="position-relative form-group">
                                <label for="description" class="">Description</label>
                                <textarea name="description" id="description" class="form-control">{{$old_data['description']}}</textarea>
                            </div>
                            <div class="position-relative form-group">
                                <label for="sortOrder" class="">Sort Order</label>
                                <input type="number" name="sort_order" value="{{$old_data['sort_order']}}" id="sortOrder" placeholder="Enter Image Sort Order" class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label for="status" class="">Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="1" {{$old_data['status'] == 1 ? "selected" : ""}}>Active</option>
                                    <option value="0" {{$old_data['status'] == 0 ? "selected" : ""}}>In-Active</option>
                                </select>
                            </div>

                            <div class="position-relative form-group">
                                <label for="image" class="">Image</label>
                                @if ($old_data['img_url'])
                                    <img src="{{asset($old_data['img_url'])}}" alt="old_image" style="width: 60px;">
                                    <br>
                                    <input type="hidden" name="old_img_url" value="{{$old_data['img_url']}}">
                                @endif
                                <input name="img_url" id="image" type="file" class="form-control-file">
                                <small class="form-text text-muted">You can select image here.
                                </small>
                            </div>
                            <button class="mt-1 btn btn-primary" type="submit">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
      {{-- </div>
   </div> --}}
</div>
@include('admin.layouts.footer')
<script>
    window.onload = function() {
        document.getElementById('item_manager').className = 'mm-active';
        document.getElementById('item_manager_list').className = 'mm-show';
    };
</script>
