@extends('admin.layouts.main')
@section('title_page')
    Create Product - Admin - {{ config('app.name') }}
@endsection
@section('name_user')
    {{auth()->user()->name}}

@endsection
@section('email_user')
    {{auth()->user()->email}}
@endsection
@section('css_custom')
    <link href="{{asset('/admin/assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css"/>
@endsection
@section('js_custom')
    <script src="{{asset('/admin/assets/plugins/global/plugins.bundle.js')}}"></script>
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script src=""></script>
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
        $menu_child = 'create';
    @endphp
@endsection
@section('title_component')
    Product
@endsection
@section('title_layout')
    Create Product
@endsection
@section('actions_layout')
    <a href="{{route('admin.product.create')}}" class="btn btn-primary btn-sm mr-2 mb-2 mb-lg-0">
        <i class="fa fa-list"></i> List Product
    </a>
@endsection
@section('title_card')
    Create Product
@endsection
@section('content_card')

    <form action="{{route('admin.product.store')}}" method="post" class="form-control-sm">
        @csrf


        <div class="mb-10">
            <label for="exampleFormControlInput1" class="required form-label">Category Product</label>
            <select class="form-select form-select-solid" data-control="select2"
                    data-placeholder="Select category" data-select2-id="1" name="id_category">
                @foreach($categoryProduct as $productCategory)
                    <option value="{{$productCategory->id}}">{{$productCategory->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-10">
            <label for="exampleFormControlInput1" class="required form-label">Name Product</label>
            <input name="name" type="text" class="form-control form-control-solid"
                   placeholder="Enter name product" value="{{old('name')}}">
        </div>
        <div class="mb-10">
            <label for="exampleFormControlInput1" class="required form-label">Image</label>
            <div class="input-group">
                <span class="input-group-btn"><a id="lfm" data-input="thumbnail" data-preview="holder"
                                                 class="btn btn-primary"><i
                            class="fa fa-picture-o"></i> Choose</a></span>
                <input name="image" id="thumbnail" class="form-control" type="text" name="filepath">
            </div>
            <img id="holder" style="margin-top:15px;max-height:100px;">
        </div>
        <div class="mb-10">
            <label for="exampleFormControlInput1" class="required form-label">Size</label>
            <select class="form-select form-select-solid tag2 "
                    data-placeholder="Select an option" data-allow-clear="true" multiple="multiple" name="sizes[]">
                @foreach($sizes as $size)
                    <option value="{{$size->name}}">{{$size->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-10">
            <label for="exampleFormControlInput1" class="required form-label">Color</label>
            <select class="form-select form-select-solid tag2 "
                    data-placeholder="Select an option" data-allow-clear="true" multiple="multiple" name="colors[]">
                @foreach($colors as $color)
                    <option value="{{$color->value}}">{{$color->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-10">
            <label for="exampleFormControlInput1" class="required form-label">Price</label>
            <input name="price" type="" class="form-control form-control-solid"
                   placeholder="Enter price" value="{{old('price')}}">
        </div>
        <div class="mb-10">
            <label for="exampleFormControlInput1" class="required form-label">Description</label>
            <textarea name="description" id="" cols="20" rows="10"
                      class="form-control form-control-solid">{{old('description')}}</textarea>
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

