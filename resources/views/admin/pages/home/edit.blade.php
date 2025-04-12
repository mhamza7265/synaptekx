@extends('admin.layouts.main')
@section('content')
<div class="content-wrapper">
    <div class="row layout-top-spacing">
        <div class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-content widget-content-area icon-accordion-content">
                    <h4 class="text-center pb-2">Home Page Content</h4>
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
                        <div class="card">
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
                                                <span class="d-block mb-2">Select Background Type:</span>
                                                <div class="d-flex align-items-center mb-3">
                                                    <span class="me-2">Image</span>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" name="bg_type[]" value="video">
                                                    </div>
                                                    <span class="ms-3">Video</span>
                                                </div>
                                        
                                                <span>Select Background:</span>
                                                <div class="input-group d-flex align-items-center mt-2">
                                                    <span class="input-group-btn">
                                                    <a class="lfm btn btn-primary" style="border-top-right-radius: 0; border-bottom-right-radius: 0" data-input="thumbnail_0" data-preview="holder_0">
                                                        <i class="fa fa-picture-o"></i> Choose
                                                    </a>
                                                    </span>
                                                    <input id="thumbnail_0" style="height: 36px" class="form-control" type="text" name="filepath[]">
                                                </div>
                                                <div id="holder_0" style="margin-top:15px; max-height:100px;"></div>
                                        
                                                <span class="d-block mt-3">Title</span>
                                                <input type="text" class="form-control mb-2" name="hero_title[]">
                                        
                                                <span class="d-block mt-2">Subtitle</span>
                                                <textarea class="form-control" name="hero_subtitle[]" rows="2"></textarea>
                                            </div>
                                        </div>
                                        <button class="btn btn-md btn-success">Save</button>
                                    </form>
                                    <button type="button" class="btn btn-success mt-3 mx-auto d-block" id="add-carousel">Add Carousel</button>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingTwo2">
                                <section class="mb-0 mt-0">
                                    <div style="display: flex; justify-content: space-between; cursor: pointer;" role="menu" class="collapsed" data-bs-toggle="collapse" data-bs-target="#withoutSpacingAccordionTwo" aria-expanded="false" aria-controls="withoutSpacingAccordionTwo">
                                        Digital Services  <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                    </div>
                                </section>
                            </div>
                            <div id="withoutSpacingAccordionTwo" class="collapse" aria-labelledby="headingTwo2" data-bs-parent="#withoutSpacing">
                                <div class="container py-3">
                                    <form>
                                        <div id="digitalServicesContainer">
                                            <div class="card-body">
                                                <span>Title:</span>
                                                <div class="form-group">
                                                    <input type="text" class="form-control mt-2" name="digital_service_title[]" >
                                                </div>
                                                
                                                <span class="d-block mt-4">Content:</span>
                                                <textarea id="summernote-0" name="digital_service_content[]" class="form-control summernote mt-2">{{ old('digital_service_content.0') }}</textarea>
                                            </div>
                                        </div>
                                        <button class="btn btn-md btn-success">Save</button>
                                    </form>
                                    <button type="button" class="btn btn-success mt-3 mx-auto d-block" id="add-services">Add Service</button>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree10">
                                <section class="mb-0 mt-0">
                                    <div style="display: flex; justify-content: space-between; cursor: pointer;" role="menu" class="collapsed" data-bs-toggle="collapse" data-bs-target="#withoutSpacingAccordionThree" aria-expanded="false" aria-controls="withoutSpacingAccordionThree">
                                        Transformation <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                    </div>
                                </section>
                            </div>
                            <div id="withoutSpacingAccordionThree" class="collapse" aria-labelledby="headingThree10" data-bs-parent="#withoutSpacing">
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
                        <div class="card">
                            <div class="card-header" id="headingFour10">
                                <section class="mb-0 mt-0">
                                    <div style="display: flex; justify-content: space-between; cursor: pointer;" role="menu" class="collapsed" data-bs-toggle="collapse" data-bs-target="#withoutSpacingAccordionFour" aria-expanded="false" aria-controls="withoutSpacingAccordionFour">
                                        Features <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                    </div>
                                </section>
                            </div>
                            <div id="withoutSpacingAccordionFour" class="collapse" aria-labelledby="headingFour10" data-bs-parent="#withoutSpacing">
                                <div class="container py-3">
                                    <form>
                                        <div class="card-body">
                                            <span class="d-block mt-3">Section Title:</span>
                                            <div class="form-group">
                                                <input class="form-control mt-2" name="features_title" >
                                            </div>

                                            <hr>

                                            <span class="d-block mt-3">Select Icon:</span>
                                            <div class="input-group d-flex align-items-center mt-2">
                                                <span class="input-group-btn">
                                                <a class="lfm_file btn btn-primary" style="border-top-right-radius: 0; border-bottom-right-radius: 0" data-input="feature_1_icon_thumbnail" data-preview="feature_1_icon_holder">
                                                    <i class="fa fa-picture-o"></i> Choose
                                                </a>
                                                </span>
                                                <input id="feature_1_icon_thumbnail" style="height: 36px" class="form-control" type="text" name="feature_icon[]">
                                            </div>
                                            <div id="feature_1_icon_holder" style="margin-top:15px; max-height:100px;"></div>

                                            <span class="d-block mt-3">Title:</span>
                                            <div class="form-group">
                                                <input class="form-control mt-2" name="feature_1_title" >
                                            </div>

                                            <span class="d-block mt-3">Subtitle:</span>
                                            <div class="form-group">
                                                <textarea class="form-control mt-2" name="feature_1_subtitle" rows="3"></textarea>
                                            </div>

                                            <hr>

                                            <span class="d-block mt-3">Select Icon:</span>
                                            <div class="input-group d-flex align-items-center mt-2">
                                                <span class="input-group-btn">
                                                <a class="lfm_file btn btn-primary" style="border-top-right-radius: 0; border-bottom-right-radius: 0" data-input="feature_2_icon_thumbnail" data-preview="feature_2_icon_holder">
                                                    <i class="fa fa-picture-o"></i> Choose
                                                </a>
                                                </span>
                                                <input id="feature_2_icon_thumbnail" style="height: 36px" class="form-control" type="text" name="feature_icon[]">
                                            </div>
                                            <div id="feature_2_icon_holder" style="margin-top:15px; max-height:100px;"></div>

                                            <span class="d-block mt-3">Title:</span>
                                            <div class="form-group">
                                                <input class="form-control mt-2" name="feature_title[]" >
                                            </div>

                                            <span class="d-block mt-3">Subtitle:</span>
                                            <div class="form-group">
                                                <textarea class="form-control mt-2" name="feature_subtitle[]" rows="3"></textarea>
                                            </div>

                                            <hr>

                                            <span class="d-block mt-3">Select Icon:</span>
                                            <div class="input-group d-flex align-items-center mt-2">
                                                <span class="input-group-btn">
                                                <a class="lfm_file btn btn-primary" style="border-top-right-radius: 0; border-bottom-right-radius: 0" data-input="feature_3_icon_thumbnail" data-preview="feature_3_icon_holder">
                                                    <i class="fa fa-picture-o"></i> Choose
                                                </a>
                                                </span>
                                                <input id="feature_3_icon_thumbnail" style="height: 36px" class="form-control" type="text" name="feature_icon[]">
                                            </div>
                                            <div id="feature_3_icon_holder" style="margin-top:15px; max-height:100px;"></div>

                                            <span class="d-block mt-3">Title:</span>
                                            <div class="form-group">
                                                <input class="form-control mt-2" name="feature_title[]" >
                                            </div>

                                            <span class="d-block mt-3">Subtitle:</span>
                                            <div class="form-group">
                                                <textarea class="form-control mt-2" name="feature_subtitle[]" rows="3"></textarea>
                                            </div>

                                            <hr>

                                            <span class="d-block mt-3">Select Icon:</span>
                                            <div class="input-group d-flex align-items-center mt-2">
                                                <span class="input-group-btn">
                                                <a class="lfm_file btn btn-primary" style="border-top-right-radius: 0; border-bottom-right-radius: 0" data-input="feature_4_icon_thumbnail" data-preview="feature_4_icon_holder">
                                                    <i class="fa fa-picture-o"></i> Choose
                                                </a>
                                                </span>
                                                <input id="feature_4_icon_thumbnail" style="height: 36px" class="form-control" type="text" name="feature_icon[]">
                                            </div>
                                            <div id="feature_4_icon_holder" style="margin-top:15px; max-height:100px;"></div>

                                            <span class="d-block mt-3">Title:</span>
                                            <div class="form-group">
                                                <input class="form-control mt-2" name="feature_title[]" >
                                            </div>

                                            <span class="d-block mt-3">Subtitle:</span>
                                            <div class="form-group">
                                                <textarea class="form-control mt-2" name="feature_subtitle[]" rows="3"></textarea>
                                            </div>
                                        </div>
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
        $(document).ready(function() {
            $('#lfm').filemanager('file');
            $('.lfm_file').filemanager('file');

            let carouselIndex = 1;

            $('#add-carousel').click(function () {
                let newItem = $('.hero-carousel-item').first().clone();

                // Reset values
                newItem.find('input, textarea').val('');

                // Update file input + preview ID
                newItem.find('.lfm').each(function () {
                    let inputId = 'thumbnail_' + carouselIndex;
                    let previewId = 'holder_' + carouselIndex;

                    $(this).attr('data-input', inputId).attr('data-preview', previewId);
                });

                newItem.find('input[name="filepath[]"]').attr('id', 'thumbnail_' + carouselIndex);
                newItem.find('[id^="holder_"]').attr('id', 'holder_' + carouselIndex);

                carouselIndex++;


                $('#carousel-container').append(newItem);

                toggleAddButton();

                // Re-init file manager
                $('.lfm').filemanager('image');
            });

            function toggleAddButton() {
                if($('#carousel-container .hero-carousel-item').length > 4){
                    $('#add-carousel').addClass('d-none');
                }else{
                    $('#add-carousel').removeClass('d-none');
                }
            }

            toggleAddButton();
        })
    </script>

    <script>
        $(document).ready(function () {
            function initializeSummernote(selector) {
                $(selector).summernote({
                    height: 200,
                    toolbar: [
                        ['insert', ['lfm']],
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
                    buttons: {
                        lfm: function (context) {
                            var ui = $.summernote.ui;
                            var button = ui.button({
                                contents: '<i class="note-icon-picture"></i>',
                                tooltip: 'Insert image with LFM',
                                click: function () {
                                    window.open('/laravel-filemanager?type=Images', 'lfm', 'width=900,height=600');
                                    window.SetUrl = function (items) {
                                        items.forEach(function (item) {
                                            const html = '<p><img src="' + item.url + '" style="display:block;"></p><p><br></p>';
                                            context.invoke('pasteHTML', html);
                                        });
                                    };
                                }
                            });
                            return button.render();
                        }
                    }
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

            // Add new block dynamically
            $('#add-services').click(function () {
                const id = 'summernote-' + Date.now();
                const html = `
                    <div class="card-body">
                        <span>Title:</span>
                        <div class="form-group">
                            <input type="text" class="form-control mt-2" name="digital_service_title[]">
                        </div>

                        <span class="d-block mt-4">Content:</span>
                        <textarea id="${id}" name="digital_service_content[]" class="form-control summernote mt-2"></textarea>
                    </div>
                `;
                $("#digitalServicesContainer").append(html);
                initializeSummernote(`#${id}`);
            });
        });
    </script>
@endsection