@extends('admin.layouts.main')
@section('title_page')
    Create Size - Admin - {{ config('app.name') }}
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

@endsection
@section('menu')
    @php
        $menu_parent = 'size';
        $menu_child = 'create';
    @endphp
@endsection
@section('title_component')
    Size
@endsection
@section('title_layout')
    Create Size
@endsection
@section('actions_layout')
    @can('size-list')
        <a href="{{route('admin.size.index')}}" class="btn btn-primary">
            <i class="fa fa-list"></i> List Size
        </a>
    @endcan
@endsection
@section('title_card')
    Create Size
@endsection
@section('content_card')
    <form action="{{route('admin.size.store')}}" method="post" class="form-control-sm">
        @csrf

        <div class="mb-10">
            <label for="exampleFormControlInput1" class="required form-label">Name Size</label>
            <input name="name" type="text" class="form-control form-control-solid"
                   placeholder="Enter name size" {{old('name')}}>
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

