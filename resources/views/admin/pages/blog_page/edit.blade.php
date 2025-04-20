@extends('admin.layouts.main')
@section('content')
<div class="content-wrapper">
    <div class="row layout-top-spacing">
        <div class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-content widget-content-area icon-accordion-content">
                    <h4 class="text-center pb-2">Blog Page Content</h4>
                    <div id="withoutSpacing" class="no-outer-spacing accordion">
                        <div class="card">
                            <div class="card-header" id="headingMeta5">
                                <section class="mb-0 mt-0">
                                    <div style="display: flex; justify-content: space-between; cursor: pointer;" role="menu" class="" data-bs-toggle="collapse" data-bs-target="#withoutSpacingAccordionMeta5" aria-expanded="true" aria-controls="withoutSpacingAccordionMeta5">
                                        Page Metas  <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                    </div>
                                </section>
                            </div>

                            <div id="withoutSpacingAccordionMeta5" class="collapse show" aria-labelledby="headingMeta5" data-bs-parent="#withoutSpacing">
                                <div class="container py-3">
                                    <form method="post" action="{{ route('admin.page-meta.update', ['slug' => $page->slug]) }}">
                                        @csrf 
                                        <span class="d-block mt-3">Meta Title</span>
                                        <input type="text" name="meta_title" value="{{$page->meta_title}}" class="form-control mt-2" required>
                                        @error('meta_title')
                                            <div class="text-danger">{{ $message }}</div>                                            
                                        @enderror

                                        <span class="d-block mt-3">Meta Description</span>
                                        <textarea name="meta_description" class="form-control mt-2" rows="3" required>{{$page->meta_description}}</textarea>
                                        @error('meta_description')
                                            <div class="text-danger">{{ $message }}</div>                                            
                                        @enderror

                                        <button class="btn btn-md btn-success mt-3">Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-2">
                            <div class="card-header" id="headingOne2">
                                <section class="mb-0 mt-0">
                                    <div style="display: flex; justify-content: space-between; cursor: pointer;" role="menu" class="" data-bs-toggle="collapse" data-bs-target="#withoutSpacingAccordionOne" aria-expanded="false" aria-controls="withoutSpacingAccordionOne">
                                        Hero Section  <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                    </div>
                                </section>
                            </div>

                            <div id="withoutSpacingAccordionOne" class="collapse" aria-labelledby="headingOne2" data-bs-parent="#withoutSpacing">
                                <div class="container py-3">
                                    <form method="post" action="{{ route('admin.blogs-page.hero.update')}}">
                                        @csrf
                                        <div id="carousel-container">
                                            <div class="hero-carousel-item card-body border p-3 mb-3">
                                        
                                                <span>Select Background:</span>
                                                <div class="input-group d-flex align-items-center mt-2">
                                                    <span class="input-group-btn">
                                                    <a class="lfm_file btn btn-primary" style="border-top-right-radius: 0; border-bottom-right-radius: 0" data-input="thumbnail_0" data-preview="holder_0">
                                                        <i class="fa fa-picture-o"></i> Choose
                                                    </a>
                                                    </span>
                                                    <input id="thumbnail_0" style="height: 36px" class="form-control" value="{{data_get($page->sections, 'hero.hero_image' , '')}}" type="text" name="bg_image" required>
                                                </div>
                                                <div id="holder_0" style="margin-top:15px; max-height:100px;">
                                                    @if (!empty(data_get($page->sections, 'hero.hero_image' , '')))
                                                        <img src="{{ asset(data_get($page->sections, 'hero.hero_image' , '')) }}" style="height: 5rem;">
                                                    @endif
                                                </div>
                                                @error('bg_image')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                        
                                                <span class="d-block mt-3">Title</span>
                                                <input type="text" class="form-control mb-2" value="{{data_get($page->sections, 'hero.hero_title' , '')}}" name="hero_title" required>
                                                @error('hero_title')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <button class="btn btn-md btn-success">Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-2">
                            <div class="card-header" id="headingTwo2">
                                <section class="mb-0 mt-0">
                                    <div style="display: flex; justify-content: space-between; cursor: pointer;" role="menu" class="collapsed" data-bs-toggle="collapse" data-bs-target="#withoutSpacingAccordionTwo" aria-expanded="false" aria-controls="withoutSpacingAccordionTwo">
                                        {{$page->sections['section_title'] ?? ''}}  <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                    </div>
                                </section>
                            </div>
                            <div id="withoutSpacingAccordionTwo" class="collapse" aria-labelledby="headingTwo2" data-bs-parent="#withoutSpacing">
                                <div class="container py-3">
                                    <form method="post" action="{{ route('admin.blogs-page.details.update')}}">
                                        @csrf
                                        <div class="card-body">
                                            <span>Section Title:</span>
                                            <input type="text" class="form-control mt-2"  value="{{data_get($page->sections, 'section_title' , '')}}" name="section_title" required>
                                        </div>
                                        @error('section_title')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror

                                        <button class="btn btn-md btn-success">Save</button>
                                    </form>
                                </div>
                            </div>
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
    $(document).ready(function () {
        $('.lfm_file').filemanager('image');
        @if ($errors->any())
            $(document).ready(function(){
                // Ensure error messages are passed in correctly to toastr
                @foreach ($errors->all() as $error)
                toastr.error("{{ $error }}", "Error", {
                    closeButton: true,
                    progressBar: true
                });
                @endforeach
            })
        @endif
    })
</script>
@endsection