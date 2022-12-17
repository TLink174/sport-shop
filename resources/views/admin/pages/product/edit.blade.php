@extends('admin.layouts.main')
@section('title_page')
    Create Product - Admin - {{ config('app.name') }}
@endsection
@section('name_user')
    Nam 077
@endsection
@section('css_custom')
    <link href="{{asset('/admin/assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css"/>
@endsection
@section('js_custom')
    <script src="{{asset('/admin/assets/plugins/global/plugins.bundle.js')}}"></script>
    <script>
        $(".tag2").select2({
            tags: true,
            tokenSeparators: [',']
        })
    </script>
    <script !src="">
        $('#lfm').filemanager('image');
    </script>
@endsection
@section('menu')
    @php
        $menu_parent = 'product';
        $menu_child = 'edit';
    @endphp
@endsection
@section('title_component')
    Product
@endsection
@section('title_layout')
    Edit Product
@endsection
@section('actions_layout')
    @can('product-list')
    <a href="{{route('admin.product.index')}}" class="btn btn-primary btn-sm mr-2 mb-2 mb-lg-0">
        <i class="fa fa-list"></i> List product
    </a>
    @endcan
@endsection
@section('title_card')
    Create product
@endsection
@section('content_card')
    <form action="{{route('admin.product.update', $product->id)}}" method="post" class="form-control-sm">
        @csrf
        <div class="mb-10">
            <label for="exampleFormControlInput1" class="required form-label">Category Product</label>
            <select class="form-select form-select-solid" data-control="select2"
                    data-placeholder="Select category" data-select2-id="1" name="id_category">
                @foreach($categoryProduct as $productCategory)
                    <option @if($product->id_category == $productCategory->id) selected
                            @endif value="{{$productCategory->id}}">{{$productCategory->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-10">
            <label for="exampleFormControlInput1" class="required form-label">Name product</label>
            <input name="name" value="{{$product -> name}}" type="text" class="form-control form-control-solid"
                   placeholder="Enter name product" {{old('name')}}>
        </div>
        <div class="mb-10">
            <label for="exampleFormControlInput1" class="required form-label">Size</label>
            <select class="form-select form-select-solid tag2 "
                    data-placeholder="Select an option" data-allow-clear="true" multiple="multiple" name="sizes[]">
                @foreach($sizes as $size)
                    <option @if(in_array($size->id, $product->sizes->pluck('id')->toArray())) selected
                            @endif value="{{$size->name}}">{{$size->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-10">
            <label for="exampleFormControlInput1" class="required form-label">Color</label>
            <select class="form-select form-select-solid tag2 "
                    data-placeholder="Select an option" data-allow-clear="true" multiple="multiple" name="colors[]">
                @foreach($colors as $color)
                    <option @if(in_array($color->id, $product->colors->pluck('id')->toArray())) selected
                            @endif value="{{$color->name}}">{{$color->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-10">
            <label for="exampleFormControlInput1" class="required form-label">Price</label>
            <input name="price" value="{{$product -> price}}" type="" class="form-control form-control-solid"
                   placeholder="Enter price product" {{old('price')}}>
        </div>
        <div class="mb-10">
            <label for="exampleFormControlInput1" class="required form-label">Description</label>
            <textarea name="description" id="" cols="20" rows="10" class="form-control form-control-solid">{{$product -> description}}</textarea>
        </div>
        <div class="mb-10">
            <button class="btn btn-primary btn-sm mr-2 mb-2 mb-lg-0">
                <i class="fa fa-save"></i> Save
            </button>
        </div>

    </form>
@endsection
@section('footer_card')

@endsection
@section('content_layout')
    <!--begin::Card-->
    <div class="card shadow-sm card-bordered">
        <div class="card-header collapsible cursor-pointer rotate" data-bs-toggle="collapse"
             data-bs-target="#kt_docs_card_collapsible">
            <h3 class="card-title">@yield('title_card')</h3>
            <div class="card-toolbar rotate-180">
                <span class="svg-icon svg-icon-1">
                   <i class="fa fa-angle-down"></i>
                </span>
            </div>
        </div>
        <div id="kt_docs_card_collapsible" class="collapse show">
            <div class="card-body">
                @yield('content_card')
            </div>
            <div class="card-footer">
                @yield('footer_card')
            </div>
        </div>
    </div>
    <!--end::Card-->
@endsection

