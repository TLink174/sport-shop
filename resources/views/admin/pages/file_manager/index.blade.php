@extends('admin.layouts.main')
@section('title_page')
    File Manager- Admin - {{ config('app.name') }}
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
        $menu_parent = 'file-manager';
        $menu_child = 'index';
    @endphp
@endsection
@section('title_component')
    File Manager
@endsection
@section('title_layout')
     File Manager
@endsection
@section('actions_layout')

@endsection
@section('title_card')
    File Manager
@endsection

@section('footer_card')

@endsection
@section('content_layout')
    <div>
        <iframe src="/laravel-filemanager" style="width: 100%; height: 500px; overflow: hidden; border-radius: 5px"></iframe>
    </div>
    <!--end::Card-->
@endsection

