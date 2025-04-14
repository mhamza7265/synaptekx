@extends('admin.layouts.main')
    @section('title', 'Pages')

    @section('styles')
        <link rel="stylesheet" href="{{asset('plugins/table/datatable/datatables.css')}}">
        @vite(['resources/scss/light/plugins/table/datatable/dt-global_style.scss'])
        @vite(['resources/scss/light/plugins/table/datatable/custom_dt_custom.scss'])
    @endsection

    @section('content')
        <div class="page-meta">
            <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    {{-- <li class="breadcrumb-item"><a href="#">Pages</a></li> --}}
                    <li class="breadcrumb-item active" aria-current="page">Pages</li>
                </ol>
            </nav>
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
                                <tr>
                                    <td class="checkbox-column"> 1 </td>
                                    <td class="user-name">Home</td>
                                    <td class="text-center">
                                        <a class="btn btn-sm btn-success" href="{{route('home')}}" target="_blank">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a class="btn btn-sm btn-warning" href="{{route('admin.home-page.edit')}}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        {{-- <div class="dropdown">
                                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                            </a>
    
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                                <a class="btn btn-sm btn-success" href="{{route('home')}}" target="_blank">View</a>
                                                <a class="btn btn-sm btn-warning" href="{{route('admin.home-page.edit')}}">Edit</a>
                                            </div>
                                        </div> --}}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="checkbox-column"> 2 </td>
                                    <td class="user-name">Services</td>
                                    <td class="text-center">
                                        <a class="btn btn-sm btn-success" href="{{route('admin.services.index')}}">Details</a>
                                        <a href="{{route('admin.services.create')}}" class="btn btn-sm btn-success">Create New</a>
                                        {{-- <div class="dropdown">
                                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
                                                <a class="dropdown-item" href="{{route('admin.services.index')}}">Details</a>
                                            </div>
                                        </div> --}}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="checkbox-column"> 3 </td>
                                    <td class="user-name">About Us</td>
                                    <td class="text-center">
                                        <a class="btn btn-sm btn-success" href="{{route('about')}}" target="_blank">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a class="btn btn-sm btn-warning" href="{{route('admin.about-page.edit')}}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        {{-- <div class="dropdown">
                                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
                                                <a class="dropdown-item" href="{{route('about')}}" target="_blank">View</a>
                                                <a class="dropdown-item" href="{{route('admin.about-page.edit')}}">Edit</a>
                                            </div>
                                        </div> --}}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="checkbox-column"> 4 </td>
                                    <td class="user-name">Partners</td>
                                    <td class="text-center">
                                        <a class="btn btn-sm btn-success" href="{{route('partners')}}" target="_blank">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a class="btn btn-sm btn-warning" href="{{route('admin.partners-page.edit')}}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        {{-- <div class="dropdown">
                                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
                                                <a class="dropdown-item" href="{{route('about')}}" target="_blank">View</a>
                                                <a class="dropdown-item" href="{{route('admin.about-page.edit')}}">Edit</a>
                                            </div>
                                        </div> --}}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="checkbox-column"> 5 </td>
                                    <td class="user-name">Contact</td>
                                    <td class="text-center">
                                        <a class="btn btn-sm btn-success" href="{{route('contact')}}" target="_blank">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a class="btn btn-sm btn-warning" href="{{route('admin.contact-page.edit')}}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        {{-- <div class="dropdown">
                                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
                                                <a class="dropdown-item" href="{{route('contact')}}" target="_blank">View</a>
                                                <a class="dropdown-item" href="{{route('admin.contact-page.edit')}}">Edit</a>
                                            </div>
                                        </div> --}}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="checkbox-column"> 6 </td>
                                    <td class="user-name">Privacy Policy</td>
                                    <td class="text-center">
                                        <a class="btn btn-sm btn-success" href="{{route('privacy-policy')}}" target="_blank">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a class="btn btn-sm btn-warning" href="{{route('admin.privacy-policy.edit')}}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="checkbox-column"> 7 </td>
                                    <td class="user-name">Cookies Policy</td>
                                    <td class="text-center">
                                        <a class="btn btn-sm btn-success" href="{{route('cookie-policy')}}" target="_blank">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a class="btn btn-sm btn-warning" href="{{route('admin.cookies-policy.edit')}}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="checkbox-column"> 8 </td>
                                    <td class="user-name">Terms of Website Use</td>
                                    <td class="text-center">
                                        <a class="btn btn-sm btn-success" href="{{route('terms-of-website-use')}}" target="_blank">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a class="btn btn-sm btn-warning" href="{{route('admin.terms-of-use.edit')}}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="checkbox-column"> 9 </td>
                                    <td class="user-name">Blogs</td>
                                    <td class="text-center">
                                        <a class="btn btn-sm btn-success" href="{{route('blogs')}}" target="_blank">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a class="btn btn-sm btn-warning" href="{{route('admin.blogs-page.edit')}}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                    </td>
                                </tr>
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