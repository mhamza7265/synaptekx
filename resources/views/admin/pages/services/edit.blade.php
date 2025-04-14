@extends('admin.layouts.main')
@section('content')
<div class="content-wrapper">
    <div class="row layout-top-spacing">
        <div class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-content widget-content-area icon-accordion-content">
                    <h4 class="text-center pb-2">Services Page Content</h4>
                    <div id="withoutSpacing" class="no-outer-spacing accordion">
                        <div class="card">
                            <div class="card-header" id="headingMeta2">
                                <section class="mb-0 mt-0">
                                    <div style="display: flex; justify-content: space-between; cursor: pointer;" role="menu" class="" data-bs-toggle="collapse" data-bs-target="#withoutSpacingAccordionMeta" aria-expanded="true" aria-controls="withoutSpacingAccordionMeta">
                                        Page Metas  <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                    </div>
                                </section>
                            </div>

                            <div id="withoutSpacingAccordionMeta" class="collapse show" aria-labelledby="headingMeta2" data-bs-parent="#withoutSpacing">
                                <div class="container py-3">
                                    <form>
                                        <span class="d-block mt-3">Meta Title</span>
                                        <input type="text" name="meta_title" class="form-control mt-2">

                                        <span class="d-block mt-3">Meta Description</span>
                                        <textarea name="meta_description" class="form-control mt-2" rows="3"></textarea>

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
                            <div class="card-header" id="headingFive10">
                                <section class="mb-0 mt-0">
                                    <div style="display: flex; justify-content: space-between; cursor: pointer;" role="menu" class="collapsed" data-bs-toggle="collapse" data-bs-target="#withoutSpacingAccordionFive" aria-expanded="false" aria-controls="withoutSpacingAccordionFive">
                                        Empowering Businesses to Transform & Grow <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                    </div>
                                </section>
                            </div>
                            <div id="withoutSpacingAccordionFive" class="collapse" aria-labelledby="headingFive10" data-bs-parent="#withoutSpacing">
                                <div class="container py-3">
                                    <form>
                                        <div class="card-body">
                                            <span>Section Title:</span>
                                            <div class="form-group">
                                                <input type="text" class="form-control mt-2" name="section_1_title" value="{{old('section_1_title')}}" >
                                            </div>

                                            <hr>

                                            <div id="details-section">
                                                <div class="feature_detail border p-3 mb-3 position-relative">
                                                    <span class="d-block mt-4">Feature Title:</span>
                                                    <input type="text" class="form-control" name="detail_title[]">
                                                    <span class="d-block mt-4">Feature Description:</span>
                                                    <textarea name="detail_description[]" class="form-control mt-2" rows="3"></textarea>
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
                            <div class="card-header" id="headingTwo2">
                                <section class="mb-0 mt-0">
                                    <div style="display: flex; justify-content: space-between; cursor: pointer;" role="menu" class="collapsed" data-bs-toggle="collapse" data-bs-target="#withoutSpacingAccordionTwo" aria-expanded="false" aria-controls="withoutSpacingAccordionTwo">
                                        The Digital Transformation Journey  <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                    </div>
                                </section>
                            </div>
                            <div id="withoutSpacingAccordionTwo" class="collapse" aria-labelledby="headingTwo2" data-bs-parent="#withoutSpacing">
                                <div class="container py-3">
                                    <form>
                                        <div class="card-body">
                                            <span class="d-block mt-3">Section Title:</span>
                                            <div class="form-group">
                                                <input class="form-control mt-2" name="transformation_title" >
                                            </div>

                                            <span class="d-block mt-3">Select Infograph:</span>
                                            <div class="input-group d-flex align-items-center mt-2">
                                                <span class="input-group-btn">
                                                <a class="lfm_file btn btn-primary" style="border-top-right-radius: 0; border-bottom-right-radius: 0" data-input="infograph_thumbnail" data-preview="infograph_holder">
                                                    <i class="fa fa-picture-o"></i> Choose
                                                </a>
                                                </span>
                                                <input id="infograph_thumbnail" style="height: 36px" class="form-control" type="text" name="infograph">
                                            </div>
                                            <div id="infograph_holder" style="margin-top:15px; max-height:100px;"></div>
                                        </div>
                                        <button class="btn btn-md btn-success">Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-2">
                            <div class="card-header" id="headingThree10">
                                <section class="mb-0 mt-0">
                                    <div style="display: flex; justify-content: space-between; cursor: pointer;" role="menu" class="collapsed" data-bs-toggle="collapse" data-bs-target="#withoutSpacingAccordionThree" aria-expanded="false" aria-controls="withoutSpacingAccordionThree">
                                        Feature Sections <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                    </div>
                                </section>
                            </div>
                            <div id="withoutSpacingAccordionThree" class="collapse" aria-labelledby="headingThree10" data-bs-parent="#withoutSpacing">
                                <div class="container py-3">
                                    <form>
                                        <div id="feature-sections">
                                            <div class="card-body border p-3 mb-3 position-relative">
                                                <span>Title:</span>
                                                <div class="form-group">
                                                    <input type="text" class="form-control mt-2" name="feature_section_title[]" >
                                                </div>
                                                
                                                <span class="d-block mt-4">Description:</span>
                                                <textarea name="feature_section_desc[]" class="form-control summernote mt-2"></textarea>

                                                <span class="d-block mt-3">Select Image:</span>
                                                <div class="input-group d-flex align-items-center mt-2">
                                                    <span class="input-group-btn">
                                                    <a class="lfm_file btn btn-primary" style="border-top-right-radius: 0; border-bottom-right-radius: 0" data-input="section_3_thumbnail" data-preview="section_3_holder">
                                                        <i class="fa fa-picture-o"></i> Choose
                                                    </a>
                                                    </span>
                                                    <input id="section_3_thumbnail" style="height: 36px" class="form-control" type="text" name="feature_section_image[]">
                                                </div>
                                                <div id="section_3_holder" style="margin-top:15px; max-height:100px;"></div>
                                            </div>
                                        </div>
                                        <button class="btn btn-md btn-success">Save</button>
                                    </form>
                                    <button type="button" class="btn btn-success mt-3 mx-auto d-block" id="add-feature-section">Add Section</button>
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
                    <div class="feature_detail border p-3 mb-3 position-relative">
                        <button class="btn feature-detail-dlt-btn position-absolute" style="top:5px; right:5px;">
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

            $(document).on('click', '.feature-detail-dlt-btn', function(){
                if(confirm('Do you want to delete this?')){
                    $(this).closest('.feature_detail').remove();
                }
            })
        })
    </script>
    <script>
        $(document).ready(function () {
            function initializeSummernote(selector) {
                $(selector).summernote({
                    height: 200,
                    toolbar: [
                        ['fontsize', ['fontsize']],
                        ['color', ['color']],
                        ['font', ['bold', 'clear']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['view', ['codeview']]
                    ],
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

            function uploadFile(file, editable) {
                let data = new FormData();
                data.append("upload", file);

                $.ajax({
                    url: '/laravel-filemanager/upload?type=Images&_token={{ csrf_token() }}',
                    type: "POST",
                    data: data,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        $(editable).summernote('insertImage', response.url);
                    },
                    error: function () {
                        alert('Image upload failed');
                    }
                });
            }

            function deleteFile(src) {
                $.post('/laravel-filemanager/delete', {
                    src: src,
                    _token: '{{ csrf_token() }}'
                }, function (response) {
                    console.log('Deleted');
                });
            }

            // Initialize all existing editors
            initializeSummernote('.summernote');

            $('#add-feature-section').click(function () {
                const randomValue = Math.floor(Math.random() * 100000); // Generate a better unique ID

                const html = `
                    <div class="card-body border p-3 mb-3 position-relative">
                        <button class="btn section-dlt-btn position-absolute" style="top:5px; right:5px;">
                            <i class="fa fa-trash text-danger"></i>
                        </button>

                        <span>Title:</span>
                        <div class="form-group">
                            <input type="text" class="form-control mt-2" name="feature_section_title[]">
                        </div>

                        <span class="d-block mt-4">Description:</span>
                        <textarea name="feature_section_desc[]" class="form-control summernote mt-2"></textarea>

                        <span class="d-block mt-3">Select Image:</span>
                        <div class="input-group d-flex align-items-center mt-2">
                            <span class="input-group-btn">
                                <a class="lfm_file btn btn-primary" style="border-top-right-radius: 0; border-bottom-right-radius: 0"
                                    data-input="thumbnail_${randomValue}" data-preview="holder_${randomValue}">
                                    <i class="fa fa-picture-o"></i> Choose
                                </a>
                            </span>
                            <input id="thumbnail_${randomValue}" style="height: 36px" class="form-control" type="text" name="feature_section_image[]">
                        </div>
                        <div id="holder_${randomValue}" style="margin-top:15px; max-height:100px;"></div>
                    </div>
                `;

                // Convert to jQuery object
                let $newItem = $(html);

                // Reset values
                $newItem.find('input[type="text"], textarea').val('');

                // Append to DOM
                $('#feature-sections').append($newItem);

                // Re-init file manager
                $('.lfm_file').filemanager('image');

                // Re-initialize summernote
                initializeSummernote('.summernote');
            });


            $(document).on('click', '.section-dlt-btn', function(){
                if(confirm('Do you want to delete this section?')){
                    $(this).closest('.card-body').remove();
                }
            })
        });
    </script>
@endsection