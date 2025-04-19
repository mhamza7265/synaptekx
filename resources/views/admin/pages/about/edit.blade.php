@extends('admin.layouts.main')
@section('content')
<div class="content-wrapper">
    <div class="row layout-top-spacing">
        <div class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-content widget-content-area icon-accordion-content">
                    <h4 class="text-center pb-2">About Page Content</h4>
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
                            <div class="card-header" id="headingOne2">
                                <section class="mb-0 mt-0">
                                    <div style="display: flex; justify-content: space-between; cursor: pointer;" role="menu" class="" data-bs-toggle="collapse" data-bs-target="#withoutSpacingAccordionOne" aria-expanded="false" aria-controls="withoutSpacingAccordionOne">
                                        Hero Section  <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                    </div>
                                </section>
                            </div>

                            <div id="withoutSpacingAccordionOne" class="collapse" aria-labelledby="headingOne2" data-bs-parent="#withoutSpacing">
                                <div class="container py-3">
                                    <form method="post" action="{{ route('admin.about-page.hero.update')}}">
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
                                                    <input id="thumbnail_0" style="height: 36px" class="form-control" value="{{$page->sections['hero_section']['bg_image'] ?? ''}}" type="text" name="bg_image">
                                                </div>
                                                <div id="holder_0" style="margin-top:15px; max-height:100px;">
                                                    @if (!empty($page->sections['hero_section']['bg_image'] ?? ''))
                                                        <img src="{{ $page->sections['hero_section']['bg_image'] ?? '' }}" style="height: 5rem;">
                                                    @endif
                                                </div>
                                        
                                                <span class="d-block mt-3">Title</span>
                                                <input type="text" class="form-control mb-2" value="{{$page->sections['hero_section']['hero_title'] ?? ''}}" name="hero_title">
                                        
                                                <span class="d-block mt-2">Subtitle</span>
                                                <textarea class="form-control" name="hero_subtitle" rows="2">{{$page->sections['hero_section']['hero_subtitle'] ?? ''}}</textarea>
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
                                        Feature Sections  <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                    </div>
                                </section>
                            </div>
                            <div id="withoutSpacingAccordionTwo" class="collapse" aria-labelledby="headingTwo2" data-bs-parent="#withoutSpacing">
                                <div class="container py-3">
                                    <form method="post" action="{{ route('admin.about-page.feature.update')}}">
                                        @csrf
                                        <div id="about-feature-sections">
                                            @if (isset($page->sections['all']))
                                                @foreach ($page->sections['all'] as $section)
                                                    @if ($section['type'] == 'repeating')
                                                        <div class="card-body border p-3 mb-3 position-relative">
                                                            <button type="button" class="btn section-dlt-btn-two position-absolute" data-index="{{$loop->index}}" style="top:5px; right:5px;">
                                                                <i class="fa fa-trash text-danger"></i>
                                                            </button>

                                                            <span>Title:</span>
                                                            <div class="form-group">
                                                                <input type="text" class="form-control mt-2" value="{{$section['data']['section_title'] ?? ''}}" name="section_title[]" >
                                                            </div>
                                                            
                                                            <span class="d-block mt-4">Description:</span>
                                                            <textarea name="section_desc[]" class="form-control mt-2">{{$section['data']['section_desc'] ?? ''}}</textarea>
            
                                                            <span class="d-block mt-3">Select Image:</span>
                                                            <div class="input-group d-flex align-items-center mt-2">
                                                                <span class="input-group-btn">
                                                                <a class="lfm_file btn btn-primary" style="border-top-right-radius: 0; border-bottom-right-radius: 0" data-input="section_1_thumbnail" data-preview="section_1_holder">
                                                                    <i class="fa fa-picture-o"></i> Choose
                                                                </a>
                                                                </span>
                                                                <input id="section_1_thumbnail" style="height: 36px" class="form-control" type="text" value="{{$section['data']['section_image'] ?? ''}}" name="section_image[]">
                                                            </div>
                                                            <div id="section_1_holder" style="margin-top:15px; max-height:100px;">
                                                                @if (!empty($section['data']['section_image'] ?? ''))
                                                                    <img src="{{ $section['data']['section_image'] ?? '' }}" style="height: 5rem;">
                                                                @endif
                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="card-body border p-3 mb-3 position-relative">
                                                            <span>Title:</span>
                                                            <div class="form-group">
                                                                <input type="text" class="form-control mt-2" name="section_title[]" >
                                                            </div>
                                                            
                                                            <span class="d-block mt-4">Description:</span>
                                                            <textarea name="section_desc[]" class="form-control mt-2"></textarea>
            
                                                            <span class="d-block mt-3">Select Image:</span>
                                                            <div class="input-group d-flex align-items-center mt-2">
                                                                <span class="input-group-btn">
                                                                <a class="lfm_file btn btn-primary" style="border-top-right-radius: 0; border-bottom-right-radius: 0" data-input="section_1_thumbnail" data-preview="section_1_holder">
                                                                    <i class="fa fa-picture-o"></i> Choose
                                                                </a>
                                                                </span>
                                                                <input id="section_1_thumbnail" style="height: 36px" class="form-control" type="text" name="section_image[]">
                                                            </div>
                                                            <div id="section_1_holder" style="margin-top:15px; max-height:100px;"></div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            @endif
                                        </div>
                                        <button class="btn btn-md btn-success">Save</button>
                                    </form>
                                    <form id="delete-feature-section-form" method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="type" value="repeating">
                                        <input type="hidden" name="group" value="features">
                                    </form>
                                    <button type="button" class="btn btn-success mt-3 mx-auto d-block" id="add-feature-section">Add Section</button>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-2">
                            <div class="card-header" id="headingFive10">
                                <section class="mb-0 mt-0">
                                    <div style="display: flex; justify-content: space-between; cursor: pointer;" role="menu" class="collapsed" data-bs-toggle="collapse" data-bs-target="#withoutSpacingAccordionFive" aria-expanded="false" aria-controls="withoutSpacingAccordionFive">
                                        @foreach ($page->sections['all'] as $section)
                                            @if (is_array($section) && isset($section['type']) && $section['type'] === 'unique')
                                                {{$section['title'] ?? ''}}
                                            @endif
                                        @endforeach
                                        <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                    </div>
                                </section>
                            </div>
                            <div id="withoutSpacingAccordionFive" class="collapse" aria-labelledby="headingFive10" data-bs-parent="#withoutSpacing">
                                <div class="container py-3">
                                    <form method="POST" action="{{route('admin.about-page.sticky-section.update')}}">
                                        @csrf
                                        <div class="card-body">
                                            @if ($page->sections['all'])
                                                @foreach ($page->sections['all'] as $section)
                                                    @if (is_array($section) && isset($section['type']) && $section['type'] === 'unique')
                                                        {{-- {{dd($section)}} --}}
                                                        <span>Section Title:</span>
                                                        <input type="text" class="form-control mt-2" value="{{ $section['title'] ?? ''}}" name="section_title" >
            
                                                        <hr>
            
                                                        <div id="details-section">
                                                            @foreach ($section['data']['details'] as $detail)
                                                                <div class="feature_detail position-relative pt-1">
                                                                    <button type="button" class="btn detail-dlt-btn position-absolute" data-index="{{$loop->index}}" style="top:0px; right:0px;">
                                                                        <i class="fa fa-trash text-danger"></i>
                                                                    </button>
                                                                    <span class="d-block mt-4">Feature Title:</span>
                                                                    <input type="text" class="form-control" value="{{$detail['title']}}" name="detail_title[]">
                                                                    <span class="d-block mt-4">Feature Description:</span>
                                                                    <textarea name="detail_description[]" class="form-control mt-2" rows="3">{{$detail['description']}}</textarea>
                                                                    <hr>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    @endif
                                                @endforeach
                                            @endif
                                        </div>
                                        <button class="btn btn-md btn-success">Save</button>
                                    </form>
                                    <button type="button" class="btn btn-success mt-3 mx-auto d-block" id="add-feature">Add Feature Detail</button>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-2">
                            <div class="card-header" id="headingfeature">
                                <section class="mb-0 mt-0">
                                    <div style="display: flex; justify-content: space-between; cursor: pointer;" role="menu" class="collapsed" data-bs-toggle="collapse" data-bs-target="#withoutSpacingAccordionFeature" aria-expanded="false" aria-controls="withoutSpacingAccordionFeature">
                                        Feature Sections  <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                    </div>
                                </section>
                            </div>
                            <div id="withoutSpacingAccordionFeature" class="collapse" aria-labelledby="headingfeature" data-bs-parent="#withoutSpacing">
                                <div class="container py-3">
                                    <form method="POST" action="{{route('admin.about-page.feature-two.update')}}">
                                        @csrf
                                        <div id="about-feature-sections-two">
                                            @if (isset($page->sections['all']))
                                                @foreach ($page->sections['all'] as $section)
                                                    @if ($section['type'] == 'repeating_2')
                                                        <div class="card-body border p-3 mb-3 position-relative">
                                                            <button type="button" class="btn section-two-dlt-btn-two position-absolute" data-index="{{$loop->index}}" style="top:5px; right:5px;">
                                                                <i class="fa fa-trash text-danger"></i>
                                                            </button>
                                                            <span>Title:</span>
                                                            <div class="form-group">
                                                                <input type="text" class="form-control mt-2" value="{{$section['data']['section_title'] ?? ''}}" name="section_title[]" >
                                                            </div>
                                                            
                                                            <span class="d-block mt-4">Description:</span>
                                                            <textarea name="section_desc[]" class="form-control mt-2">{{$section['data']['section_desc'] ?? ''}}</textarea>

                                                            <span class="d-block mt-3">Select Image:</span>
                                                            <div class="input-group d-flex align-items-center mt-2">
                                                                <span class="input-group-btn">
                                                                <a class="lfm_file btn btn-primary" style="border-top-right-radius: 0; border-bottom-right-radius: 0" data-input="feat_1_thumbnail" data-preview="feat_1_holder">
                                                                    <i class="fa fa-picture-o"></i> Choose
                                                                </a>
                                                                </span>
                                                                <input id="feat_1_thumbnail" style="height: 36px" class="form-control" value="{{$section['data']['section_image'] ?? ''}}" type="text" name="feat_image[]">
                                                            </div>
                                                            <div id="feat_1_holder" style="margin-top:15px; max-height:100px;">
                                                                @if (!empty($section['data']['section_image'] ?? ''))
                                                                    <img src="{{$section['data']['section_image'] ?? ''}}" style="height: 5rem;">
                                                                @endif
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            @endif
                                        </div>
                                        <button class="btn btn-md btn-success">Save</button>
                                    </form>
                                    <button type="button" class="btn btn-success mt-3 mx-auto d-block" id="add-feature-section-two">Add Section</button>
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
        $(document).ready(function() {
            $('#lfm').filemanager('image');
            $('.lfm_file').filemanager('image');

            $('#add-feature').click(function () {
                const html = `
                    <div class="feature_detail position-relative pt-1">
                        <button type="button" class="btn detail-dlt-btn-two position-absolute" style="top:5px; right:5px;">
                            <i class="fa fa-trash text-danger"></i>
                        </button>
                        <span class="d-block mt-4">Feature Title:</span>
                        <input type="text" class="form-control" name="detail_title[]">
                        <span class="d-block mt-4">Feature Description:</span>
                        <textarea name="detail_description[]" class="form-control mt-2" rows="3"></textarea>
                        <hr>
                    </div>
                `;
                $("#details-section").append(html);
                toggleAddButton();
            });

            function toggleAddButton() {
                if($('#details-section .feature_detail').length > 4){
                    $('#add-feature').addClass('d-none');
                }else{
                    $('#add-feature').removeClass('d-none');
                }
            }

            toggleAddButton();

            $('#add-feature-section').click(function () {
                // Generate a unique identifier
                const randomValue = Math.floor(Math.random() * 100000);

                // Template HTML with dynamic IDs
                const html = `
                    <div class="card-body border p-3 mb-3 position-relative">
                        <button class="btn section-dlt-btn position-absolute" style="top:5px; right:5px;">
                            <i class="fa fa-trash text-danger"></i>
                        </button>

                        <span>Title:</span>
                        <div class="form-group">
                            <input type="text" class="form-control mt-2" name="section_title[]">
                        </div>

                        <span class="d-block mt-4">Description:</span>
                        <textarea name="section_desc[]" class="form-control mt-2"></textarea>

                        <span class="d-block mt-3">Select Image:</span>
                        <div class="input-group d-flex align-items-center mt-2">
                            <span class="input-group-btn">
                                <a class="lfm_file btn btn-primary" style="border-top-right-radius: 0; border-bottom-right-radius: 0"
                                    data-input="thumbnail_${randomValue}" data-preview="holder_${randomValue}">
                                    <i class="fa fa-picture-o"></i> Choose
                                </a>
                            </span>
                            <input id="thumbnail_${randomValue}" style="height: 36px" class="form-control" type="text" name="section_image[]">
                        </div>
                        <div id="holder_${randomValue}" style="margin-top:15px; max-height:100px;"></div>
                    </div>
                `;

                // Convert HTML string to jQuery object
                let $newItem = $(html);

                // Clear any residual values
                $newItem.find('input[type="text"], textarea').val('');

                // Append to container
                $('#about-feature-sections').append($newItem);

                // Re-initialize file manager for new elements
                $('.lfm_file').filemanager('image');
            });


            $(document).on('click', '.section-dlt-btn', function(){
                if(confirm('Do you want to delete this section?')){
                    $(this).closest('.card-body').remove();
                }
            })

            $('#add-feature-section-two').click(function () {
                // Generate a unique identifier
                const randomValue = Math.floor(Math.random() * 100000);

                // Template HTML with dynamic IDs
                const html = `
                    <div class="card-body border p-3 mb-3 position-relative">
                        <button class="btn section-dlt-btn position-absolute" style="top:5px; right:5px;">
                            <i class="fa fa-trash text-danger"></i>
                        </button>

                        <span>Title:</span>
                        <div class="form-group">
                            <input type="text" class="form-control mt-2" name="section_title[]">
                        </div>

                        <span class="d-block mt-4">Description:</span>
                        <textarea name="section_desc[]" class="form-control mt-2"></textarea>

                        <span class="d-block mt-3">Select Image:</span>
                        <div class="input-group d-flex align-items-center mt-2">
                            <span class="input-group-btn">
                                <a class="lfm_file btn btn-primary"
                                style="border-top-right-radius: 0; border-bottom-right-radius: 0"
                                data-input="thumbnail_${randomValue}"
                                data-preview="holder_${randomValue}">
                                    <i class="fa fa-picture-o"></i> Choose
                                </a>
                            </span>
                            <input id="thumbnail_${randomValue}" style="height: 36px" class="form-control" type="text" name="feat_image[]">
                        </div>
                        <div id="holder_${randomValue}" style="margin-top:15px; max-height:100px;"></div>
                    </div>
                `;

                // Convert to jQuery object
                let $newItem = $(html);

                // Clear any pre-filled values
                $newItem.find('input[type="text"], textarea').val('');

                // Append to the DOM
                $('#about-feature-sections-two').append($newItem);

                // Re-initialize file manager
                $('.lfm_file').filemanager('image');
            });

        })

        $('.section-dlt-btn-two').on('click', function () {
            if(confirm('Do you want to delete this?')) {
                const index = $(this).data('index');
                const $form = $('#delete-feature-section-form');
                $form.attr('action', `/admin/about-page/feature/delete/${index}`);
                $form.submit();
            }
        });

        $('.detail-dlt-btn').on('click', function () {
            if(confirm('Do you want to delete this?')) {
                const index = $(this).data('index');
                const $form = $('#delete-feature-section-form');
                $form.attr('action', `/admin/about-page/sticky-section/delete/${index}`);
                $form.submit();
            }
        });

        $(document).on('click', '.detail-dlt-btn-two', function () {
            if(confirm('Do you want to delete this?')) {
                let parent = $(this).closest('.feature_detail');
                parent.remove();
            }
        });

        $('.section-two-dlt-btn-two').on('click', function () {
            if(confirm('Do you want to delete this?')) {
                const index = $(this).data('index');
                const $form = $('#delete-feature-section-form');
                $form.attr('action', `/admin/about-page/feature/delete/${index}`);
                $form.find('input[name="type"]').val('repeating_2');
                $form.find('input[name="group"]').val('features_2');
                $form.submit();
            }
        });
    </script>
@endsection