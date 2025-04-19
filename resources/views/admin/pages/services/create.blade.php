@extends('admin.layouts.main')
@section('content')
<div class="content-wrapper">
    <div class="row layout-top-spacing">
        <div class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-content widget-content-area icon-accordion-content">
                    <h4 class="text-center pb-2">Create New Service Page</h4>
                    <div class="card">
                        <div class="container py-3">
                            <form action="{{ route('admin.services.store') }}" method="POST">
                                @csrf
                                <span class="d-block mt-3">Page Title:</span>
                                <input type="text" name="name" class="form-control mt-2" required>
                                @error('name')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror

                                <span class="d-block mt-3">Meta Title:</span>
                                <input type="text" name="meta_title" class="form-control mt-2" required>
                                @error('meta_title')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror

                                <span class="d-block mt-3">Meta Description:</span>
                                <textarea name="meta_description" class="form-control my-2" rows="3" required></textarea>
                                @error('meta_description')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror

                                <span>Select Page Icon:</span>
                                <div class="input-group d-flex align-items-center mt-2">
                                    <span class="input-group-btn">
                                    <a class="lfm_file btn btn-primary" style="border-top-right-radius: 0; border-bottom-right-radius: 0" data-input="thumbnail_0" data-preview="holder_0">
                                        <i class="fa fa-picture-o"></i> Choose
                                    </a>
                                    </span>
                                    <input id="thumbnail_0" style="height: 36px" value="" class="form-control" type="text" name="page_icon" required>
                                </div>
                                <div id="holder_0" style="margin-top:15px; max-height:100px;">
                                    {{-- @if (!empty($page->sections['hero_section']['bg_image'] ?? ''))
                                        <img src="{{ $page->sections['hero_section']['bg_image'] ?? '' }}" style="height: 5rem;">
                                    @endif --}}
                                </div>
                                @error('page_icon')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror

                                <button class="btn btn-md btn-success mt-3">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script>
        $(document).ready(function() {
            $('.lfm_file').filemanager('image');
        })
    </script>
@endsection