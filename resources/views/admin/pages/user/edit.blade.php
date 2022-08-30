@extends('admin.layouts.main')
@section('title_page')
    Edit User - Admin - {{ config('app.name') }}
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
        $menu_parent = 'user';
        $menu_child = 'edit';
    @endphp
@endsection
@section('title_component')
    User
@endsection
@section('title_layout')
    Edit User
@endsection
@section('actions_layout')
    <a href="{{route('admin.users.create')}}" class="btn btn-primary btn-sm mr-2 mb-2 mb-lg-0">
        <i class="fa fa-list"></i> List User
    </a>
@endsection
@section('title_card')
    Edit User
@endsection
@section('content_card')
    <form action="{{route('admin.users.update', $user->id)}}" method="post" class="form-control-sm">
        @csrf
        <div class="mb-10">
            <label for="exampleFormControlInput1" class="required form-label">Name User</label>
            <input name="name" type="text" class="form-control form-control-solid"
                   placeholder="Enter name category" {{old('name')}} value="{{$user->name}}">
        </div>
        <div class="mb-10">
            <label for="exampleFormControlInput1" class="required form-label">Email User</label>
            <input name="email" type="text" class="form-control form-control-solid"
                   placeholder="Enter name category" {{old('email')}} value="{{$user->email}}">
        </div>
        <div class="mb-10">
            <label for="exampleFormControlInput1" class="required form-label">Password User</label>
            <input name="password" type="password" class="form-control form-control-solid"
                   placeholder="Enter name category" {{old('password')}}>
        </div>
        <div class="mb-10">
            <label for="" class="form-label">Role</label>
            <select class="form-select form-select-solid " data-control="select2" data-placeholder="Select an option"
                    data-allow-clear="true" multiple="multiple" name="roles[]">
                @foreach($roles as $role)
                    <option
                        value="{{$role->id}}" {{$user->roles->contains($role->id) ? 'selected' : ''}}>{{$role->name}}</option>
                @endforeach
            </select>
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

