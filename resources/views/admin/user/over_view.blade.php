@include('admin.layouts.header')
@include('admin.layouts.side_bar')

<style>
    .user_overview_active{
        color: #3f6ad8 !important;
        background: #e0f3ff;
        font-weight: bold;
    }
</style>

{{-- <div class="app-main"> --}}

    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div class="page-title-icon">
                            <i class="pe-7s-graph1 icon-gradient bg-mean-fruit"></i>
                        </div>
                        <div>Analytics Dashboard
                            <div class="page-title-subheading">This is an over view dashboard created using item's present in the database.</div>
                        </div>
                    </div>
                    {{-- <div class="page-title-actions">
                        <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom"
                            class="btn-shadow mr-3 btn btn-dark">
                            <i class="fa fa-star"></i>
                        </button>
                        <div class="d-inline-block dropdown">
                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                                <span class="btn-icon-wrapper pr-2 opacity-7">
                                    <i class="fa fa-business-time fa-w-20"></i>
                                </span>
                                Buttons
                            </button>
                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link">
                                            <i class="nav-link-icon lnr-inbox"></i>
                                            <span> Inbox</span>
                                            <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link">
                                            <i class="nav-link-icon lnr-book"></i>
                                            <span> Book</span>
                                            <div class="ml-auto badge badge-pill badge-danger">5</div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link">
                                            <i class="nav-link-icon lnr-picture"></i>
                                            <span> Picture</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a disabled class="nav-link disabled">
                                            <i class="nav-link-icon lnr-file-empty"></i>
                                            <span> File Disabled</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>    --}}
                 </div>
            </div>
            {{-- <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                <li class="nav-item">
                    <a role="tab" class="nav-link active" href="index.html">
                        <span>Variation 1</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a role="tab" class="nav-link" href="analytics-variation.html">
                        <span>Variation 2</span>
                    </a>
                </li>
            </ul> --}}
            {{-- <div class="tabs-animation"> --}}
                <div class="mb-3 card">
                    <div class="card-header-tab card-header">
                        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                            <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                            Items Overview
                        </div>
                        {{-- <div class="btn-actions-pane-right text-capitalize">
                            <button class="btn-wide btn-outline-2x mr-md-2 btn btn-outline-focus btn-sm">View All</button>
                        </div> --}}
                    </div>
                    <div class="no-gutters row">
                        <div class="col-sm-6 col-md-4 col-xl-4">
                            <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                                <div class="icon-wrapper rounded-circle">
                                    <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                                    <i class="lnr-gift text-dark opacity-8"></i>
                                </div>
                                <div class="widget-chart-content">
                                    <div class="widget-subheading"><b>Categories</b></div>
                                    <div class="widget-numbers">{{$active_cat_count}}/{{$cat_count}}</div>
                                    <div class="widget-description opacity-8 text-focus">
                                        {{-- <div class="d-inline text-danger pr-1">
                                            <i class="fa fa-angle-down"></i>
                                            <span class="pl-1">54.1%</span>
                                        </div> --}}
                                        Active/Total
                                    </div>
                                </div>
                            </div>
                            <div class="divider m-0 d-md-none d-sm-block"></div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-xl-4">
                            <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                                <div class="icon-wrapper rounded-circle">
                                    <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                                    <i class="lnr-pie-chart text-white"></i>
                                </div>
                                <div class="widget-chart-content">
                                    <div class="widget-subheading"><b>Sub Categories</b></div>
                                    <div class="widget-numbers"><span>{{$active_sub_cat_count}}/{{$sub_cat_count}}</span></div>
                                    <div class="widget-description opacity-8 text-focus">
                                        Active/Total
                                        {{-- <span class="text-info pl-1">
                                            <i class="fa fa-angle-down"></i>
                                            <span class="pl-1">14.1%</span>
                                        </span> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="divider m-0 d-md-none d-sm-block"></div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-xl-4">
                            <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                                <div class="icon-wrapper rounded-circle">
                                    <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                                    <i class="lnr-database text-white"></i>
                                </div>
                                <div class="widget-chart-content">
                                    <div class="widget-subheading"><b>Products</b></div>
                                    <div class="widget-numbers text-success"><span>{{$active_product_count}}/{{$product_count}}</span></div>
                                    <div class="widget-description text-focus">
                                        In-Stock/Total
                                        {{-- <span class="text-warning pl-1">
                                            <i class="fa fa-angle-up"></i>
                                            <span class="pl-1">7.35%</span>
                                        </span> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="text-center d-block p-3 card-footer">
                        <button class="btn-pill btn-shadow btn-wide fsize-1 btn btn-primary btn-lg">
                            <span class="mr-2 opacity-7">
                                <i class="icon icon-anim-pulse ion-ios-analytics-outline"></i>
                            </span>
                            <span class="mr-1">View Complete Report</span>
                        </button>
                    </div> --}}
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="main-card mb-3 card">
                            <div class="card-header">Out Of Stock Items
                                {{-- <div class="btn-actions-pane-right">
                                    <div role="group" class="btn-group-sm btn-group">
                                        <button class="active btn btn-focus">Last Week</button>
                                        <button class="btn btn-focus">All Month</button>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="table-responsive">
                                <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th>Title</th>
                                            <th>Image</th>
                                            <th>Size</th>
                                            <th>Stock</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (sizeof($out_of_stock_items) != 0)
                                        <?php $sno = 0; ?>
                                        @foreach ($out_of_stock_items as $item)
                                        <?php $sno++; ?>
                                        <tr>
                                            <td class="text-center text-muted">#{{$sno}}</td>
                                            <td>@if($item->products['title'])
                                                <a href="{{url('admin/product/edit?'.'id='.$item->products['id'])}}"><b> {{$item->products['title']}}</b></a>
                                                @else N/A @endif</td>
                                            <td>
                                                @if ($item->products['single_img'])
                                                    <img src="{{asset($item->products['single_img'])}}" alt="{{$item->products['title']}}" style="width: 60px;">
                                                    @else
                                                    N/A
                                                @endif

                                            </td>
                                            <td><div class="badge badge-primary">{{$item['size']}}</div></td>
                                            <td>
                                                <div class="badge badge-danger">{{$item['stock']}}</div>
                                            </td>
                                            <td>
                                                @if ($item->products['status'] == 1)
                                                <div class="mb-2 mr-2 badge badge-success">In-Stock</div>
                                                @else
                                                <div class="mb-2 mr-2 badge badge-danger">No-Stock</div>
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                        @else
                                        <tr>
                                            <td colspan="6" class="text-center">No records found.</td>
                                        </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                            {{-- <div class="d-block text-center card-footer">
                                <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger">
                                    <i class="pe-7s-trash btn-icon-wrapper"> </i></button>
                                <button class="btn-wide btn btn-success">Save</button>
                            </div> --}}
                        </div>
                    </div>
                </div>

                <div class="card no-shadow bg-transparent no-border rm-borders mb-3">
                    <div class="card">
                        <div class="no-gutters row">
                            <div class="col-md-12 col-lg-4">
                                <ul class="list-group list-group-flush">
                                    <li class="bg-transparent list-group-item">
                                        <div class="widget-content p-0">
                                            <div class="widget-content-outer">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left">
                                                        <div class="widget-heading">Total Orders</div>
                                                        <div class="widget-subheading">Last year expenses</div>
                                                    </div>
                                                    <div class="widget-content-right">
                                                        <div class="widget-numbers text-success">1896</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="bg-transparent list-group-item">
                                        <div class="widget-content p-0">
                                            <div class="widget-content-outer">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left">
                                                        <div class="widget-heading">Clients</div>
                                                        <div class="widget-subheading">Total Clients Profit</div>
                                                    </div>
                                                    <div class="widget-content-right">
                                                        <div class="widget-numbers text-primary">$12.6k</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-12 col-lg-4">
                                <ul class="list-group list-group-flush">
                                    <li class="bg-transparent list-group-item">
                                        <div class="widget-content p-0">
                                            <div class="widget-content-outer">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left">
                                                        <div class="widget-heading">Followers</div>
                                                        <div class="widget-subheading">People Interested</div>
                                                    </div>
                                                    <div class="widget-content-right">
                                                        <div class="widget-numbers text-danger">45,9%</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="bg-transparent list-group-item">
                                        <div class="widget-content p-0">
                                            <div class="widget-content-outer">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left">
                                                        <div class="widget-heading">Products Sold</div>
                                                        <div class="widget-subheading">Total revenue streams</div>
                                                    </div>
                                                    <div class="widget-content-right">
                                                        <div class="widget-numbers text-warning">$3M</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-12 col-lg-4">
                                <ul class="list-group list-group-flush">
                                    <li class="bg-transparent list-group-item">
                                        <div class="widget-content p-0">
                                            <div class="widget-content-outer">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left">
                                                        <div class="widget-heading">Total Orders</div>
                                                        <div class="widget-subheading">Last year expenses</div>
                                                    </div>
                                                    <div class="widget-content-right">
                                                        <div class="widget-numbers text-success">1896</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="bg-transparent list-group-item">
                                        <div class="widget-content p-0">
                                            <div class="widget-content-outer">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left">
                                                        <div class="widget-heading">Clients</div>
                                                        <div class="widget-subheading">Total Clients Profit</div>
                                                    </div>
                                                    <div class="widget-content-right">
                                                        <div class="widget-numbers text-primary">$12.6k</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            {{-- </div> --}}
        </div>

@include('admin.layouts.footer')
<script>
    window.onload = function() {
        document.getElementById('user_manager').className = 'mm-active';
        document.getElementById('user_manager_list').className = 'mm-show';
    };
</script>
