@include('admin.layouts.header')
@include('admin.layouts.side_bar')
{{-- <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script> --}}

<style>
   .product_active{
   color: #3f6ad8 !important;
   background: #e0f3ff;
   font-weight: bold;
   }
   .form-control-file{
    width: auto;
   }
   .old_img_stls {
    width:70px;
    border: 1px solid #3f6ad8;
    margin: 1px;
    padding: 1px;
    border-radius: 2px;
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
                        <h5 class="card-title">Update Product</h5>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{url('admin/product/update')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <input type="hidden" value="{{$old_data['id']}}" name="product_id">
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="category" class="">Category</label>
                                        <select name="sub_cat_id" id="category" class="multiselect-dropdown form-control">
                                            @foreach ($sub_categories as $item)
                                                <option value="{{$item['id']}}" {{$item['id'] == $old_data['sub_cat_id'] ? "selected" : ""}}>{{$item['title']}}</option>
                                            @endforeach
                                        </select>
                                        {{-- <select name="sub_cat_id" id="category" class="form-control">
                                            @foreach ($sub_categories as $item)
                                                <option value="{{$item['id']}}">{{$item['title']}}</option>
                                            @endforeach
                                        </select> --}}
                                    </div>
                                </div>

                            </div>
                            <div class="position-relative form-group">
                                <label for="title" class="">Title*</label>
                                <input name="title" value="{{$old_data['title']}}" id="title" placeholder="Enter Title" type="text" class="form-control" required>
                            </div>

                            <div class="row">

                                <div class="col-md-3">
                                    <div class="position-relative form-group">
                                        <label for="status" class="">Status</label>
                                        <select name="status" id="status" class="form-control">
                                            <option value="1" {{$old_data['status'] == '1' ? "selected" : ""}}>Active</option>
                                            <option value="0" {{$old_data['status'] == '0' ? "selected" : ""}}>In-Active</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="single_img" class="">Single Image*</label>
                                        <input name="single_img" id="single_img" type="file" class="form-control-file">
                                        <small class="form-text text-muted">This visible as a product image in all the places. Size less than <span style="color: red"><b>500kb</b></span>
                                        </small>
                                        <img src="{{asset($old_data['single_img'])}}" alt="" class="old_img_stls">
                                        <input type="hidden" value="{{$old_data['single_img']}}" name="old_single_img">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="gallery" class="">Gallery*</label>
                                        <input name="gallery[]" id="gallery" type="file" class="form-control-file" multiple>
                                        <small class="form-text text-muted">You can select multiple images here. Size less than <span style="color: red"><b>500kb</b></span> each image
                                        </small>
                                        <?php $images = explode(',',$old_data['gallery']); ?>
                                        @foreach (array_slice($images,0,3) as $image)
                                        <img src="{{asset($image)}}" alt="" class="old_img_stls">
                                        @endforeach
                                        @if (count($images) > 3)
                                            <a href="#!" data-toggle="modal" data-target="#gallery_modal">More+</a>
                                        @endif
                                        <input type="hidden" value="{{$old_data['gallery']}}" name="old_gallery">
                                    </div>
                                </div>
                            </div>
                            <div class="position-relative form-group">
                                <label for="description" class="">Description</label>
                                <textarea id="description" name="description">{{$old_data['description']}}</textarea>
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

<div class="modal fade" id="gallery_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Gallery</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($images as $image)
                    <img src="{{asset($image)}}" alt="" class="old_img_stls" style="width:100px">
                @endforeach
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.ckeditor.com/ckeditor5/32.0.0/classic/ckeditor.js"></script>
{{-- <script>
    CKEDITOR.replace( 'description' );
</script> --}}
<script>
    ClassicEditor
            .create( document.querySelector( '#description' ) )
            .then( editor => {
                    console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            } );
</script>

<script>
    window.onload = function() {
        document.getElementById('item_manager').className = 'mm-active';
        document.getElementById('item_manager_list').className = 'mm-show';
    };
</script>


