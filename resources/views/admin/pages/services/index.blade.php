@extends('admin.layouts.main')

@section('styles')
    <link rel="stylesheet" href="{{asset('plugins/table/datatable/datatables.css')}}">
    @vite(['resources/scss/light/plugins/table/datatable/dt-global_style.scss'])
    @vite(['resources/scss/light/plugins/table/datatable/custom_dt_custom.scss'])
@endsection

@section('content')
    <div class="page-meta d-flex justify-content-between align-items-center w-100 mb-2">
        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                {{-- <li class="breadcrumb-item"><a href="#">Pages</a></li> --}}
                <li class="breadcrumb-item active" aria-current="page">Services Pages</li>
            </ol>
        </nav>
        <a href="{{route('admin.services.create')}}" class="btn btn-md btn-success d-block">Create New</a>
    </div>

    <div class="row layout-spacing">
        <div class="col-lg-12">
            <div class="statbox widget box box-shadow">
                <div class="widget-content widget-content-area">
                    <table id="style-1" class="table style-1 dt-table-hover non-hover">
                        <thead>
                            <tr>
                                <th class="checkbox-column dt-no-sorting"> Record no. </th>
                                <th>Title</th>
                                <th class="text-center dt-no-sorting">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($services as $service)
                                <tr>
                                    <td class="checkbox-column"> {{$loop->iteration}} </td>
                                    <td class="user-name">{{$service->name}}</td>
                                    <td class="text-center">
                                        <a class="btn btn-sm btn-success" href="{{route('services', ['slug' => $service->slug])}}" target="_blank">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a class="btn btn-sm btn-warning" href="{{route('admin.services.edit', $service->id)}}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <form class=" d-inline-block" action="{{route('admin.services.destroy', $service->id)}}" method="POST">
                                            @csrf 
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this service?');">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
<script type="module" src="{{asset('plugins/global/vendors.min.js')}}"></script>
@vite(['resources/assets/js/custom.js'])
<script type="module" src="{{asset('plugins/table/datatable/datatables.js')}}"></script>

<script type="module">
    const c1 = $('#style-1').DataTable({
        headerCallback:function(e, a, t, n, s) {
            e.getElementsByTagName("th")[0].innerHTML=`
            <div class="form-check form-check-primary d-block">
                <input class="form-check-input chk-parent" type="checkbox" id="form-check-default">
            </div>`
        },
        columnDefs:[{
            targets:0, width:"30px", className:"", orderable:!1, render:function(e, a, t, n) {
                return `
                <div class="form-check form-check-primary d-block">
                    <input class="form-check-input child-chk" type="checkbox" id="form-check-default">
                </div>`
            }
        }],
        "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
        "<'table-responsive'tr>" +
        "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
        "oLanguage": {
            "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
            "sInfo": "Showing page _PAGE_ of _PAGES_",
            "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
            "sSearchPlaceholder": "Search...",
        "sLengthMenu": "Results :  _MENU_",
        },
        "lengthMenu": [5, 10, 20, 50],
        "pageLength": 10
    });

    multiCheck(c1);
</script>
@endsection