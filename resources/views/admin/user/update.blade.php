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
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="gender" class="">Gender</label>
                                        <select name="gender" id="gender" class="form-control">
                                            <option value="1" {{$old_data['gender'] == 1 ? "selected" : ""}}>Male</option>
                                            <option value="2" {{$old_data['gender'] == 2 ? "selected" : ""}}>Female</option>
                                            <option value="3" {{$old_data['gender'] == 3 ? "selected" : ""}}>Kid</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="style_code" class="">Style Code</label>
                                        <select name="style_code" id="style_code" class="form-control">
                                            <option value="LNHSS-0001" {{$old_data['style_code'] == 'LNHSS-0001' ? "selected" : ""}}>LNHSS-0001</option>
                                            <option value="LNHSS-0002" {{$old_data['style_code'] == 'LNHSS-0002' ? "selected" : ""}}>LNHSS-0002</option>
                                            <option value="LNHSS-0003" {{$old_data['style_code'] == 'LNHSS-0003' ? "selected" : ""}}>LNHSS-0003</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="sleeves" class="">Sleeves</label>
                                        <select name="sleeves" id="sleeves" class="form-control">
                                            <option value="null" {{$old_data['sleeves'] == 'null' ? "selected" : ""}}>Null</option>
                                            <option value="full_sleeve" {{$old_data['sleeves'] == 'full_sleeve' ? "selected" : ""}}>Full Sleeve</option>
                                            <option value="half_sleeve" {{$old_data['sleeves'] == 'half_sleeve' ? "selected" : ""}}>Half Sleeve</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="color" class="">Color</label>
                                        <select name="color" id="color" class="form-control">
                                            <option value="red" {{$old_data['color'] == 'red' ? "selected" : ""}}>Red</option>
                                            <option value="yellow" {{$old_data['color'] == 'yellow' ? "selected" : ""}}>Yellow</option>
                                            <option value="blue" {{$old_data['color'] == 'blue' ? "selected" : ""}}>Blue</option>
                                            <option value="orange" {{$old_data['color'] == 'orange' ? "selected" : ""}}>Orange</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="sleeves" class="">Collar Type</label>
                                        <select name="collar_type" id="collar_type" class="form-control">
                                            <option value="null" {{$old_data['collar_type'] == 'null' ? "selected" : ""}}>Null</option>
                                            <option value="regular" {{$old_data['collar_type'] == 'regular' ? "selected" : ""}}>Regular</option>
                                            <option value="collar_less" {{$old_data['collar_type'] == 'collar_less' ? "selected" : ""}}>Collar Less</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="fabric" class="">Fabric</label>
                                        <select name="fabric" id="fabric" class="form-control">
                                            <option value="linen" {{$old_data['fabric'] == 'linen' ? "selected" : ""}}>Linen</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="pattern" class="">Pattern</label>
                                        <select name="pattern" id="pattern" class="form-control">
                                            <option value="solid" {{$old_data['pattern'] == 'solid' ? "selected" : ""}}>Solid</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="fitting" class="">Fitting</label>
                                        <select name="fitting" id="fitting" class="form-control">
                                            <option value="null" {{$old_data['fitting'] == 'null' ? "selected" : ""}}>Null</option>
                                            <option value="regular_fit" {{$old_data['fitting'] == 'regular_fit' ? "selected" : ""}}>Regular Fit</option>
                                            <option value="slim_fit" {{$old_data['fitting'] == 'slim_fit' ? "selected" : ""}}>Slim Fit</option>
                                            <option value="tailor_fit" {{$old_data['fitting'] == 'tailor_fit' ? "selected" : ""}}>Tailor Fit</option>
                                            <option value="skinny_fit" {{$old_data['fitting'] == 'skinny_fit' ? "selected" : ""}}>Skinny Fit</option>
                                            <option value="Athletic_fit" {{$old_data['fitting'] == 'Athletic_fit' ? "selected" : ""}}>Athletic Fit</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="closure" class="">Closure</label>
                                        <select name="closure" id="closure" class="form-control">
                                            <option value="null" {{$old_data['closure'] == 'null' ? "selected" : ""}}>Null</option>
                                            <option value="zip" {{$old_data['closure'] == 'zip' ? "selected" : ""}}>Zip</option>
                                            <option value="button" {{$old_data['closure'] == 'button' ? "selected" : ""}}>Button</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="tag" class="">Product Tag <i class="fa fa-info-circle" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="This tag will append to this product. And visible on the product."></i></label>
                                        <select name="tag" id="tag" class="form-control">
                                            <option value="null" {{$old_data['tag'] == 'null' ? "selected" : ""}}>Null</option>
                                            <option value="recommended" {{$old_data['tag'] == 'recommended' ? "selected" : ""}}>Recommended</option>
                                            <option value="sale" {{$old_data['tag'] == 'sale' ? "selected" : ""}}>On Sale</option>
                                            <option value="featured" {{$old_data['tag'] == 'featured' ? "selected" : ""}}>Featured</option>
                                        </select>
                                    </div>
                                </div>
                                {{-- <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="sku" class="">SKU* <i class="fa fa-info-circle" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Stock Keeping unit.Click on 'generate SKU' button to get SKU for product."></i></label>
                                        <div class="input-group">
                                            <input type="text" name="sku" id="sku" class="form-control" required onkeypress="return false;">
                                            <div class="input-group-append">
                                                <button type="button" id="generate_sku" class="btn btn-success">Generate SKU</button>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="position-relative form-group">
                                <label for="title" class="">Title*</label>
                                <input name="title" value="{{$old_data['title']}}" id="title" placeholder="Enter Title" type="text" class="form-control" required>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="price" class="">Current Price*</label>
                                        <input name="price" value="{{$old_data['price']}}" id="price" placeholder="Enter Current Price" type="number" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="old_price" class="">Old Price <i class="fa fa-info-circle" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Fill only, If any offer price to the product."></i></label>
                                        <input name="old_price" value="{{$old_data['old_price']}}" id="old_price" placeholder="Enter Old Price" type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="status" class="">Status</label>
                                        <select name="status" id="status" class="form-control">
                                            <option value="1" {{$old_data['status'] == '1' ? "selected" : ""}}>In-Stock</option>
                                            <option value="0" {{$old_data['status'] == '0' ? "selected" : ""}}>Out-Of-Stock</option>
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
                                        <label for="sharing_img" class="">Sharing Image*</label>
                                        <input name="sharing_img" id="sharing_img" type="file" class="form-control-file">
                                        <small class="form-text text-muted">This will visible when you share product via social media. Size less than <span style="color: red"><b>500kb</b></span>
                                        </small>
                                        <img src="{{asset($old_data['sharing_img'])}}" alt="" class="old_img_stls">
                                        <input type="hidden" value="{{$old_data['sharing_img']}}" name="old_sharing_img">
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
                            <div class="position-relative form-group">
                                <label for="washcare" class="">WashCare</label>
                                <textarea id="wash_care" name="wash_care">{{$old_data['wash_care']}}</textarea>
                            </div>

                            <div id="membersDiv">

                                    <?php $label = 0; ?>
                                    @foreach ($old_data->product_size as $sizes)
                                    <div class="form-group row memberDiv">
                                    <?php $label++; ?>
                                        <div class="col-sm-5">
                                            @if($label == 1)
                                                <label>Size* <span style="font-size: 11px;">(S,M,L,XL,XXL,XXL)</span> <span style="font-weight:bold;color:red;font-size:11px;">Note: Enter "free" if it is raw cloth item</span></label>
                                            @endif
                                            <input type="text" value="{{$sizes['size']}}" class="form-control" id="size" name="size[]" placeholder="Enter Size">
                                        </div>
                                        <div class="col-sm-3">
                                            @if($label == 1)
                                                <label>Length <i class="fa fa-info-circle" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Fill this field, only when you create raw cloth(unstitched) item. Other wise leave it as empty."></i></label>
                                            @endif
                                            <input type="text" value="{{$sizes['length']}}" class="form-control" id="length" name="length[]" placeholder="Enter if it is unstitched">
                                        </div>
                                        <div class="col-sm-2">
                                            @if($label == 1)
                                                <label>Stock*</label>
                                            @endif
                                            <input type="number" value="{{$sizes['stock']}}" class="form-control" id="stock" name="stock[]" placeholder="Stock">
                                        </div>
                                        @if ($label == 1)
                                        <div class="col-sm-1">
                                            <button type="button" class="btn btn-primary add-memb-btn" style="
                                            position: relative;
                                            top: 30px;
                                        ">Add</button>
                                        </div>
                                        @else
                                        <div class="col-sm-1">
                                            <button type="button" class="btn btn-primary rem-memb-btn">Remove</button>
                                        </div>
                                        @endif
                                    </div>
                                    @endforeach



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
    ClassicEditor
            .create( document.querySelector( '#wash_care' ) )
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
<script>
      //cloning member UI
      $(document).on('click','.add-memb-btn',function(){
        //   alert('hi');
            let membersUI = '<div class="form-group row memberDiv">'+
                '<div class="col-sm-5">'+
                    '<input type="text" class="form-control" name="size[]" placeholder="Enter Size">'+
                '</div>'+
                '<div class="col-sm-3">'+
                    '<input type="text" class="form-control" name="length[]" placeholder="Enter if it is unstitched">'+
                '</div>'+
                '<div class="col-sm-2">'+
                    '<input type="number" class="form-control" name="stock[]" placeholder="Stock">'+
                '</div>'+

                '<div class="col-sm-1">'+
                    '<button type="button" class="btn btn-primary rem-memb-btn">Remove</button>'+
                '</div>'+
            '</div>';
            $('#membersDiv').append(membersUI);
        });
        //removing member UI
        $(document).on('click','.rem-memb-btn',function(){
            $(this).parents('.memberDiv').remove();
        });
</script>

