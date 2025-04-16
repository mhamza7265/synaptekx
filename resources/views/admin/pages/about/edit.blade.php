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
                                    <form>
                                        <div id="carousel-container">
                                            <div class="hero-carousel-item card-body border p-3 mb-3">
                                                <span>Select Background:</span>
                                                <div class="input-group d-flex align-items-center mt-2">
                                                    <span class="input-group-btn">
                                                    <a class="lfm btn btn-primary" style="border-top-right-radius: 0; border-bottom-right-radius: 0" data-input="thumbnail_0" data-preview="holder_0">
                                                        <i class="fa fa-picture-o"></i> Choose
                                                    </a>
                                                    </span>
                                                    <input id="thumbnail_0" style="height: 36px" class="form-control" type="text" name="bg_file">
                                                </div>
                                                <div id="holder_0" style="margin-top:15px; max-height:100px;"></div>
                                        
                                                <span class="d-block mt-3">Title</span>
                                                <input type="text" class="form-control mb-2" name="hero_title">
                                        
                                                <span class="d-block mt-2">Subtitle</span>
                                                <textarea class="form-control" name="hero_subtitle" rows="2"></textarea>
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
                                    <form>
                                        <div id="about-feature-sections">
                                            <div class="card-body border p-3 mb-3 position-relative">
                                                <span>Title:</span>
                                                <div class="form-group">
                                                    <input type="text" class="form-control mt-2" name="about_feature_section_title[]"" >
                                                </div>
                                                
                                                <span class="d-block mt-4">Description:</span>
                                                <textarea name="about_feature_section_desc[]" class="form-control mt-2"></textarea>

                                                <span class="d-block mt-3">Select Image:</span>
                                                <div class="input-group d-flex align-items-center mt-2">
                                                    <span class="input-group-btn">
                                                    <a class="lfm_file btn btn-primary" style="border-top-right-radius: 0; border-bottom-right-radius: 0" data-input="section_1_thumbnail" data-preview="section_1_holder">
                                                        <i class="fa fa-picture-o"></i> Choose
                                                    </a>
                                                    </span>
                                                    <input id="section_1_thumbnail" style="height: 36px" class="form-control" type="text" name="about_feature_section_image[]">
                                                </div>
                                                <div id="section_1_holder" style="margin-top:15px; max-height:100px;"></div>
                                            </div>
                                        </div>
                                        <button class="btn btn-md btn-success">Save</button>
                                    </form>
                                    <button type="button" class="btn btn-success mt-3 mx-auto d-block" id="add-feature-section">Add Section</button>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-2">
                            <div class="card-header" id="headingFive10">
                                <section class="mb-0 mt-0">
                                    <div style="display: flex; justify-content: space-between; cursor: pointer;" role="menu" class="collapsed" data-bs-toggle="collapse" data-bs-target="#withoutSpacingAccordionFive" aria-expanded="false" aria-controls="withoutSpacingAccordionFive">
                                        Why SynaptekX <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                    </div>
                                </section>
                            </div>
                            <div id="withoutSpacingAccordionFive" class="collapse" aria-labelledby="headingFive10" data-bs-parent="#withoutSpacing">
                                <div class="container py-3">
                                    <form>
                                        <div class="card-body">
                                            <span>Section Title:</span>
                                            <div class="form-group">
                                                <input type="text" class="form-control mt-2" name="about_sticky_section_title" value="{{old('about_sticky_section_title')}}" >
                                            </div>

                                            <hr>

                                            <div id="details-section">
                                                <div class="feature_detail">
                                                    <span class="d-block mt-4">Feature Title:</span>
                                                    <input type="text" class="form-control" name="detail_title[]">
                                                    <span class="d-block mt-4">Feature Description:</span>
                                                    <textarea name="detail_description[]" class="form-control mt-2" rows="3"></textarea>
                                                    <hr>
                                                </div>
                                            </div>
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
                                    <form>
                                        <div id="about-feature-sections-two">
                                            <div class="card-body border p-3 mb-3 position-relative">
                                                <span>Title:</span>
                                                <div class="form-group">
                                                    <input type="text" class="form-control mt-2" name="about_feature_section2_title[]" >
                                                </div>
                                                
                                                <span class="d-block mt-4">Description:</span>
                                                <textarea name="about_feature_section2_desc[]" class="form-control mt-2"></textarea>

                                                <span class="d-block mt-3">Select Image:</span>
                                                <div class="input-group d-flex align-items-center mt-2">
                                                    <span class="input-group-btn">
                                                    <a class="lfm_file btn btn-primary" style="border-top-right-radius: 0; border-bottom-right-radius: 0" data-input="section_1_thumbnail" data-preview="section_1_holder">
                                                        <i class="fa fa-picture-o"></i> Choose
                                                    </a>
                                                    </span>
                                                    <input id="section_1_thumbnail" style="height: 36px" class="form-control" type="text" name="about_feature_section2_image[]">
                                                </div>
                                                <div id="section_1_holder" style="margin-top:15px; max-height:100px;"></div>
                                            </div>
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
            $('#lfm').filemanager('file');
            $('.lfm_file').filemanager('file');

            $('#add-feature').click(function () {
                const html = `
                    <div class="feature_detail">
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
                            <input type="text" class="form-control mt-2" name="about_feature_section_title[]">
                        </div>

                        <span class="d-block mt-4">Description:</span>
                        <textarea name="about_feature_section_desc[]" class="form-control mt-2"></textarea>

                        <span class="d-block mt-3">Select Image:</span>
                        <div class="input-group d-flex align-items-center mt-2">
                            <span class="input-group-btn">
                                <a class="lfm_file btn btn-primary" style="border-top-right-radius: 0; border-bottom-right-radius: 0"
                                    data-input="thumbnail_${randomValue}" data-preview="holder_${randomValue}">
                                    <i class="fa fa-picture-o"></i> Choose
                                </a>
                            </span>
                            <input id="thumbnail_${randomValue}" style="height: 36px" class="form-control" type="text" name="about_feature_section_image[]">
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
                            <input type="text" class="form-control mt-2" name="about_feature_section2_title[]">
                        </div>

                        <span class="d-block mt-4">Description:</span>
                        <textarea name="about_feature_section2_desc[]" class="form-control mt-2"></textarea>

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
                            <input id="thumbnail_${randomValue}" style="height: 36px" class="form-control" type="text" name="about_feature_section2_image[]">
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
    </script>
@endsection