@extends('admin.layouts.main')
@section('title_page')
    List Color - Admin - {{ config('app.name') }}
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
        $menu_parent = 'color';
        $menu_child = 'index';
    @endphp
@endsection
@section('title_component')
    Color
@endsection
@section('title_layout')
    List Color
@endsection
@section('actions_layout')
    @can('color-create')
        <a href="{{route('admin.color.create')}}" class="btn btn-primary">
            <i class="fa fa-plus"></i> Create Color
        </a>
    @endcan
@endsection
@section('title_card')
    List Color
@endsection
@section('content_card')
    <div class="table-responsive">
        <table id="kt_datatable_horizontal_scroll" class="table table-row-dashed gy-5 gs-7">
            <thead>
            <tr class="fw-semibold fs-6 text-gray-800">
                <th class="w-10px pe-2 sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 29.9px;">
                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                        <input class="form-check-input" type="checkbox" data-kt-check="true"
                               data-kt-check-target="#kt_datatable_horizontal_scroll .form-check-input" value="1">
                    </div>
                </th>
                <th class="min-w-50">#</th>
                <th class="min-w-200px">Name color</th>
                <th class="min-w-150px">Item</th>
                @if(auth()->user()->can('color-update') || auth()->user()->can('color-delete') || auth()->user()->can('color-restore'))
                    <th class="min-w-100px">Action</th>
                @endif

            </tr>
            </thead>
            <tbody>
            @foreach($colors as $color)
                <tr>
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1">
                        </div>
                    </td>
                    <td>{{$color->id}}</td>
                    <td>{{$color->name}}</td>
                    <td>
                        <svg width="100" height="50">
                            <rect  width="30" height="30"
                                  style="fill:{{$color->value}}" />
                        </svg>
                    </td>
                    <td>
                        @can('color-update')
                            <a href="{{route('admin.color.edit',$color->id)}}"
                               class="btn btn-sm btn-clean btn-icon btn-icon-md btn-circle btn-primary mr-2"
                               title="Edit">
                                <i class="fa fa-edit"></i>
                            </a>
                        @endcan
                        @if($color->deleted_at == null)

                                <a href="{{route('admin.color.delete',$color->id)}}"
                                   class="btn btn-sm btn-clean btn-icon btn-icon-md btn-circle btn-danger mr-2"
                                   title="Edit">
                                    <i class="fa fa-trash"></i>
                                </a>
                        @else
                                <a href="{{route('admin.color.restore',$color->id)}}"
                                   class="btn btn-sm btn-clean btn-icon btn-icon-md btn-circle btn-warning mr-2"
                                   title="Restore">
                                    <i class="fa fa-undo"></i>
                                </a>
                        @endif
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
@endsection
@section('footer_card')
    {{$colors->links()}}
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

