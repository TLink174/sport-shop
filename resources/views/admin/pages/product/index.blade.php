@extends('admin.layouts.main')
@section('title_page')
    List Product - {{ config('app.name') }}
@endsection
@section('name_user')
    Nam 077
@endsection
@section('css_custom')
    <link href="{{asset('/admin/assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet"
          type="text/css"/>

@endsection
@section('js_custom')
    <script src="{{asset('/admin/assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
    <script !src="">
        $("#kt_datatable_horizontal_scroll").DataTable({
            dom: 'Bfrtip',
            order: [],
        });
    </script>
@endsection
@section('menu')
    @php
        $menu_parent = 'product';
        $menu_child = 'index';
    @endphp
@endsection
@section('title_component')
    Product
@endsection
@section('title_layout')
    List Product
@endsection
@section('actions_layout')
    @can('product-create')
    <a href="{{route('admin.product.create')}}" class="btn btn-primary btn-sm mr-2 mb-2 mb-lg-0">
        <i class="fa fa-plus"></i> Add Product
    </a>
    @endcan
@endsection
@section('title_card')
    List Product
@endsection

@section('footer_card')
{{--    {{$productCategories->links()}}--}}

@endsection
@section('content_layout')
    <!--begin::Card-->
    @php
        if (!function_exists('currency_format')) {
function currency_format($number, $suffix = 'đ') {
if (!empty($number)) {
return number_format($number, 0, ',', ',');
}
}
}
    @endphp
    @foreach($productCategories as $productCategory)
    <div class="card shadow-sm card-bordered mb-10">
        <div class="card-header collapsible cursor-pointer rotate" data-bs-toggle="collapse"
             data-bs-target="#kt_docs_card_collapsible{{$productCategory->id}}">
            <h3 class="card-title">{{$productCategory -> name}}</h3>
            <div class="card-toolbar rotate-180">
                <span class="svg-icon svg-icon-1">
                   <i class="fa fa-angle-down"></i>
                </span>
            </div>
        </div>


        <div id="kt_docs_card_collapsible{{$productCategory->id}}" class="collapse show">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="kt_datatable_horizontal_scroll{{$productCategory->id}}" class="table table-row-dashed gy-5 gs-7">
                        <thead>
                        <tr class="fw-semibold fs-6 text-gray-800">
                            <th class="w-10px pe-2 sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 29.9px;">
                                <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                    <input class="form-check-input" type="checkbox" data-kt-check="true"
                                           data-kt-check-target="#kt_datatable_horizontal_scroll{{$productCategory->id}} .form-check-input" value="1">
                                </div>
                            </th>
                            <th class="min-w-50">ID</th>
                            <th class="min-w-200px">Name</th>
                            <th class="min-w-150px">Slug</th>
                            <th class="min-w-200px">Description</th>
                            <th class="min-w-200px">Price</th>
                            <th class="min-w-200px">Image</th>
                            <th class="min-w-200px">ID Category Product</th>
                            <th class="min-w-200px">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($productCategory->products as $product)
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1">
                                    </div>
                                </td>
                                <td>{{$product->id}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->slug}}</td>
                                <td>{{$product->description}}</td>
                                <td>{{currency_format($product->price)}}<sup>đ</sup></td>
                                <td>
                                    <img class="img-fluid" src="{{$product->image}}" alt="">
                                </td>
                                <td>{{$product->id_category}}</td>

                                <td>
                                    <a href="{{route('admin.product.edit', $product->id)}}"
                                       class="btn btn-sm btn-clean btn-icon btn-icon-md btn-circle btn-primary mr-2" title="Edit">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    @if($product->deleted_at == null)
                                        <a href="{{route('admin.product.delete', $product->id)}}"
                                           class="btn btn-sm btn-clean btn-icon btn-icon-md btn-circle btn-danger" title="Delete">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    @else
                                        <a href="{{route('admin.product.restore', $product->id)}}"
                                           class="btn btn-sm btn-clean btn-icon btn-icon-md btn-circle btn-warning" title="Restore">
                                            <i class="fa fa-undo"></i>
                                        </a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">
                @yield('footer_card')
            </div>
        </div>
    </div>
    <!--end::Card-->
    @endforeach
@endsection

