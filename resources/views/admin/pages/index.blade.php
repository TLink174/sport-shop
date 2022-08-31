@extends('admin.layouts.main')
@section('title_page')
    Admin - {{ config('app.name') }}
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
        $menu_parent = 'main';
        $menu_child = 'index';
    @endphp
@endsection
@section('title_component')
    Dashboard
@endsection
@section('title_layout')
    Dashboard
@endsection
@section('actions_layout')

@endsection
@section('title_card')

@endsection

@section('footer_card')

@endsection
@section('content_layout')

@endsection

