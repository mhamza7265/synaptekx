@extends('admin.layouts.main')
@section('content')
<div class="content-wrapper">
    <div class="row layout-top-spacing">
        <div class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-content widget-content-area icon-accordion-content">
                    <h3 class="text-center pb-2">Edit Cookie Policy Page</h3>
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
                                        <input type="text" name="meta_title" value="{{$page->meta_title}}" class="form-control mt-2">
                                        @error('meta_title')
                                            <div class="text-danger">{{ $message }}</div>                                            
                                        @enderror

                                        <span class="d-block mt-3">Meta Description</span>
                                        <textarea name="meta_description" class="form-control mt-2" rows="3">{{$page->meta_description}}</textarea>
                                        @error('meta_description')
                                            <div class="text-danger">{{ $message }}</div>                                            
                                        @enderror

                                        <button class="btn btn-md btn-success mt-3">Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-2">
                            <div class="card-header" id="headingMeta2">
                                <section class="mb-0 mt-0">
                                    <div style="display: flex; justify-content: space-between; cursor: pointer;" role="menu" class="" data-bs-toggle="collapse" data-bs-target="#withoutSpacingAccordionMeta" aria-expanded="false" aria-controls="withoutSpacingAccordionMeta">
                                        Hero Section  <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                    </div>
                                </section>
                            </div>
                            <div id="withoutSpacingAccordionMeta" class="collapse" aria-labelledby="headingMeta2" data-bs-parent="#withoutSpacing">
                                <form method="post" action="{{ route('admin.legal.hero.update', ['slug' => 'cookies-policy'])}}">
                                    @csrf
                                    <div class="container py-3">
                                        <span>Background Image:</span>
                                        <div class="input-group d-flex align-items-center mt-2">
                                            <span class="input-group-btn">
                                            <a class="lfm_file btn btn-primary" style="border-top-right-radius: 0; border-bottom-right-radius: 0" data-input="section_1_thumbnail" data-preview="section_1_holder">
                                                <i class="fa fa-picture-o"></i> Choose
                                            </a>
                                            </span>
                                            <input id="section_1_thumbnail" value="{{data_get($page->sections, 'hero.hero_image' , '')}}" style="height: 36px" class="form-control" type="text" name="bg_image">
                                        </div>
                                        <div id="section_1_holder" style="margin-top:15px; max-height:100px;">
                                            @if (!empty(data_get($page->sections, 'hero.hero_image' , '')))
                                                <img src="{{ asset(data_get($page->sections, 'hero.hero_image' , '')) }}" style="height: 5rem;">
                                            @endif
                                        </div>
                                        @error('bg_image')
                                            <div class="text-danger">{{ $message }}</div>                                            
                                        @enderror

                                        <span class="d-block mt-3">Title:</span>
                                        <input type="text" name="title" value="{{data_get($page->sections, 'hero.hero_title' , '')}}" class="form-control mt-2">
                                        @error('title')
                                            <div class="text-danger">{{ $message }}</div>                                            
                                        @enderror

                                        <button class="btn btn-md btn-success mt-3">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card mt-2">
                            <div class="card-header" id="headingTwo2">
                                <section class="mb-0 mt-0">
                                    <div style="display: flex; justify-content: space-between; cursor: pointer;" role="menu" class="collapsed" data-bs-toggle="collapse" data-bs-target="#withoutSpacingAccordionTwo" aria-expanded="false" aria-controls="withoutSpacingAccordionTwo">
                                        Content  <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                    </div>
                                </section>
                            </div>
                            <div id="withoutSpacingAccordionTwo" class="collapse" aria-labelledby="headingTwo2" data-bs-parent="#withoutSpacing">
                                <form method="post" action="{{ route('admin.legal.content.update', ['slug' => 'cookies-policy'])}}">
                                    @csrf
                                    <div class="container py-3">
                                        <span class="d-block mt-4">Content:</span>
                                        <textarea id="summernote-0" name="cookie_policy_content" class="form-control summernote mt-2">{{data_get($page->sections, 'content' ,'')}}</textarea>
                                        @error('cookie_policy_content')
                                            <div class="text-danger">{{ $message }}</div>                                            
                                        @enderror

                                        <button class="btn btn-md btn-success mt-3">Save</button>
                                    </div>
                                </form>
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
        $(document).ready(function() {
            $('#lfm').filemanager('image');
            $('.lfm_file').filemanager('image');

            function initializeSummernote(selector) {
                $(selector).summernote({
                    height: 200,
                    toolbar: [
                        // ['insert', ['lfm']],
                        ['font', ['bold']],
                        ['fontsize', ['fontsize']],
                        ['insert', ['link']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['view', ['codeview']]
                    ],
                    fontSizes: ['8', '10', '12', '14', '16', '18', '20', '24', '28', '32', '36', '48', '64', '72'],
                    callbacks: {
                        onImageUpload: function (files) {
                            uploadFile(files[0], this);
                        },
                        onMediaDelete: function (target) {
                            deleteFile(target[0].src);
                        }
                    },
                });
            }

            // Initialize all existing editors
            initializeSummernote('.summernote');

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