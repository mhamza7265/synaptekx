@extends('admin.layouts.main')

    {{-- @section('title', 'Dashboard') --}}

    @section('styles')
        <link rel="stylesheet" href="{{asset('plugins/apex/apexcharts.css')}}">

        @vite(['resources/scss/light/assets/components/list-group.scss'])
        @vite(['resources/scss/light/assets/widgets/modules-widgets.scss'])

        @vite(['resources/scss/dark/assets/components/list-group.scss'])
        @vite(['resources/scss/dark/assets/widgets/modules-widgets.scss'])
    @endsection

    @section('content')
    <div class="row layout-top-spacing">
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
            <div class="widget-one widget">
                <div class="widget-content">
                    <div class="w-numeric-value">
                        <div class="w-icon">
                            {{-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg> --}}
                            <img src="{{asset('images/admin/pages.svg')}}" alt="pages">
                        </div>
                        <div class="w-content">
                            <span class="w-value">{{count($services)}}</span>
                            <span class="w-numeric-title">Service{{count($services) > 1 ? 's' : ''}} Page{{count($services) > 1 ? 's' : ''}}</span>
                        </div>
                    </div>
                    <div class="w-chart">
                        <div class="output" id="total-orders"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
            <div class="widget-one widget">
                <div class="widget-content">
                    <div class="w-numeric-value">
                        <div class="w-icon">
                            {{-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg> --}}
                            <img src="{{asset('images/admin/blog.svg')}}" alt="blogs">
                        </div>
                        <div class="w-content">
                            <span class="w-value">{{$blogs->count()}}</span>
                            <span class="w-numeric-title">Total Blogs</span>
                        </div>
                    </div>
                    <div class="w-chart">
                        <div class="output" id="revenue-chart"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
            <div class="widget-one widget">
                <div class="widget-content">
                    <div class="w-numeric-value">
                        <div class="w-icon">
                            {{-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg> --}}
                            <img src="{{asset('images/admin/blog.svg')}}" alt="blogs">
                        </div>
                        <div class="w-content">
                            <span class="w-value">{{$blogs->where('status', 'published')->count()}}</span>
                            <span class="w-numeric-title">Blogs Published</span>
                        </div>
                    </div>
                    <div class="w-chart">
                        <div class="output" id="profit-chart"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    @section('scripts')
        <script src="{{asset('plugins/apex/apexcharts.min.js')}}"></script>
        {{-- Sales --}}
        @vite(['resources/assets/js/widgets/_wTwo.js'])
        @vite(['resources/assets/js/widgets/_wOne.js'])
        @vite(['resources/assets/js/widgets/_wChartOne.js'])
        @vite(['resources/assets/js/widgets/_wChartTwo.js'])
        @vite(['resources/assets/js/widgets/_wActivityFour.js'])
    @endsection