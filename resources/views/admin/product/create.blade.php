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
</style>

{{--
<div class="">
--}}
<div class="app-main__outer">
<div class="app-main__inner">

   {{-- <div class="main-card mb-3 card">
      <div class="card-body"> --}}
        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">Create Product</h5>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{url('admin/product/store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="category" class="">Category</label>
                                        <select name="sub_cat_id" id="category" class="multiselect-dropdown form-control">
                                            @foreach ($sub_categories as $item)
                                                <option value="{{$item['id']}}">{{$item['title']}}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>

                            </div>
                            <div class="position-relative form-group">
                                <label for="title" class="">Title*</label>
                                <input name="title" id="title" placeholder="Enter Title" type="text" class="form-control" required>
                            </div>

                            <div class="row">

                                <div class="col-md-3">
                                    <div class="position-relative form-group">
                                        <label for="status" class="">Status</label>
                                        <select name="status" id="status" class="form-control">
                                            <option value="1" selected>Active</option>
                                            <option value="0">In-Active</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="single_img" class="">Single Image*</label>
                                        <input name="single_img" id="single_img" type="file" class="form-control-file" required>
                                        <small class="form-text text-muted">This visible as a product image in all the places. Size less than <span style="color: red"><b>500kb</b></span>
                                        </small>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="gallery" class="">Gallery*</label>
                                        <input name="gallery[]" id="gallery" type="file" class="form-control-file" required multiple>
                                        <small class="form-text text-muted">You can select multiple images here. Size less than <span style="color: red"><b>500kb</b></span> each image
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div class="position-relative form-group">
                                <label for="description" class="">Description</label>
                                <textarea id="description" name="description"></textarea>
                            </div>

                            <button class="mt-1 btn btn-primary" type="submit">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
      {{-- </div>
   </div> --}}
</div>
@include('admin.layouts.footer')
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
