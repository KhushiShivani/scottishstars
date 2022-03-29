@include('admin.layouts.header')
@include('admin.layouts.side_bar')

<style>
    .dashboard_active{
        color: #3f6ad8 !important;
        background: #e0f3ff;
        font-weight: bold;
    }
</style>

<?php
use App\Models\User;
use App\Models\Product;
use App\Models\Category;

$users = User::orderBy('created_at','DESC')->limit(10)->get();
$user_count = User::count();
$product_count = Product::count();
$category_count = Category::count();

// dd($total_revenue);
?>

{{-- <div class="app-main"> --}}

    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div class="page-title-icon">
                            <i class="pe-7s-magic-wand icon-gradient bg-mean-fruit"></i>
                        </div>
                        <div>Welcome To Analytics Dashboard
                            <div class="page-title-subheading">This is an example dashboard created using build-in elements and components.</div>
                        </div>
                    </div>

                 </div>
            </div>

            {{-- <div class="tabs-animation"> --}}
                <div class="mb-3 card">
                    <div class="card-header-tab card-header">
                        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                            <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                            Portfolio Performance
                        </div>

                    </div>
                    <div class="no-gutters row">
                        <div class="col-sm-6 col-md-4 col-xl-4">
                            <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                                <div class="icon-wrapper rounded-circle">
                                    <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                                    <i class="lnr-laptop-phone text-dark opacity-8"></i>
                                </div>
                                <div class="widget-chart-content">
                                    <div class="widget-subheading">Total Users</div>
                                    <div class="widget-numbers"><?= number_format($user_count) ?></div>

                                </div>
                            </div>
                            <div class="divider m-0 d-md-none d-sm-block"></div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-xl-4">
                            <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                                <div class="icon-wrapper rounded-circle">
                                    <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                                    <i class="lnr-graduation-hat text-white"></i>
                                </div>
                                <div class="widget-chart-content">
                                    <div class="widget-subheading">Total Products</div>
                                    <div class="widget-numbers"><span>{{$product_count}}</span></div>

                                </div>
                            </div>
                            <div class="divider m-0 d-md-none d-sm-block"></div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-xl-4">
                            <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                                <div class="icon-wrapper rounded-circle">
                                    <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                                    <i class="lnr-apartment text-white"></i>
                                </div>
                                <div class="widget-chart-content">
                                    <div class="widget-subheading">Total Category</div>
                                    <div class="widget-numbers text-success"><span>{{$category_count}}</span></div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="main-card mb-3 card">
                            <div class="card-header">Latest Users

                            </div>
                            <div class="table-responsive">
                                <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th>Name</th>
                                            <th class="text-center">Email</th>
                                            <th class="text-center">Role</th>
                                            <th class="text-center">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $sno = 0; ?>
                                        @foreach ($users as $item)
                                        <?php $sno++; ?>
                                            <tr>
                                                <td class="text-center text-muted">#{{$sno}}</td>
                                                <td>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">

                                                            <div class="widget-content-left flex2">
                                                                <div class="widget-heading">{{$item['name']}}</div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">{{$item['email']}}</td>
                                                <td>
                                                    @if ($item['role'] == 1)
                                                    <div class="mb-2 mr-2 badge badge-success">Admin</div>
                                                    @else
                                                    <div class="mb-2 mr-2 badge badge-primary">User</div>
                                                    @endif
                                                </td>
                                                <td class="text-center" style="width: 150px;">
                                                    <div class="mb-2 mr-2 badge badge-info">Active</div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>


            {{-- </div> --}}
        </div>

@include('admin.layouts.footer')
<script>
    window.onload = function() {
        document.getElementById('item_manager').className = 'mm-active';
        document.getElementById('item_manager_list').className = 'mm-show';
    };
</script>
