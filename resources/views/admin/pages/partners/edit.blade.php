@extends('admin.layouts.main')
@section('content')
<div class="content-wrapper">
    <div class="row layout-top-spacing">
        <div class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-content widget-content-area icon-accordion-content">
                    <h4 class="text-center pb-2">Partners Page Content</h4>
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
                                                    <input id="thumbnail_0" style="height: 36px" class="form-control" type="text" name="bg_image">
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
                                        Elite Partners  <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                    </div>
                                </section>
                            </div>
                            <div id="withoutSpacingAccordionTwo" class="collapse" aria-labelledby="headingTwo2" data-bs-parent="#withoutSpacing">
                                <div class="container py-3">
                                    <form>
                                        <span>Section Title:</span>
                                        <input type="text" class="form-control mb-2" name="elite_partners_section_title">
                                        <div id="elite-partners-section" class="mt-3">
                                            <div class="card-body border p-3 mb-3 position-relative">
                                                <span class="d-block mt-3">Select Logo:</span>
                                                <div class="input-group d-flex align-items-center mt-2">
                                                    <span class="input-group-btn">
                                                    <a class="lfm_file btn btn-primary" style="border-top-right-radius: 0; border-bottom-right-radius: 0" data-input="section_1_thumbnail" data-preview="section_1_holder">
                                                        <i class="fa fa-picture-o"></i> Choose
                                                    </a>
                                                    </span>
                                                    <input id="section_1_thumbnail" style="height: 36px" class="form-control" type="text" name="elite_partner_logo-1[]">
                                                </div>
                                                <div id="section_1_holder" style="margin-top:15px; max-height:100px;"></div>

                                                <div class="elite_partner_details">
                                                    <div class="elite_partner_detail border p-3 mb-3 position-relative">
                                                        <span>Title:</span>
                                                        <input type="text" class="form-control mt-2" name="about_feature_section_title-1[]" >
                                                        
                                                        <span class="d-block mt-3">Description:</span>
                                                        <textarea name="about_feature_section_desc-1[]" class="form-control mt-2"></textarea>
                                                    </div>
                                                </div>
                                                <button type="button" class="add-partner-detail btn btn-success mt-3 mx-auto d-block">Add Partner Detail</button>
                                            </div>
                                        </div>
                                        <button class="btn btn-md btn-success">Save</button>
                                    </form>
                                    <button type="button" class="btn btn-success mt-3 mx-auto d-block" id="add-elite-partner">Add Elite Partner</button>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-2">
                            <div class="card-header" id="headingFive10">
                                <section class="mb-0 mt-0">
                                    <div style="display: flex; justify-content: space-between; cursor: pointer;" role="menu" class="collapsed" data-bs-toggle="collapse" data-bs-target="#withoutSpacingAccordionFive" aria-expanded="false" aria-controls="withoutSpacingAccordionFive">
                                        All Partners <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                    </div>
                                </section>
                            </div>
                            <div id="withoutSpacingAccordionFive" class="collapse" aria-labelledby="headingFive10" data-bs-parent="#withoutSpacing">
                                <div class="container py-3">
                                    <form>
                                        <div class="card-body">
                                            <span>Section Title:</span>
                                            <input type="text" class="form-control mb-2" name="all_partners_section_title">
                                            <div id="allPartnersContainer" class="mt-3">
                                                <div class="partner-container border p-3 mb-3 position-relative">
                                                    <span>Partner Logo:</span>
                                                    <div class="input-group d-flex align-items-center mt-2">
                                                        <span class="input-group-btn">
                                                        <a class="lfm_file btn btn-primary" style="border-top-right-radius: 0; border-bottom-right-radius: 0" data-input="partner_thumbnail_1" data-preview="partner_holder_1">
                                                            <i class="fa fa-picture-o"></i> Choose
                                                        </a>
                                                        </span>
                                                        <input id="partner_thumbnail_1" style="height: 36px" class="form-control" type="text" name="partner_logo[]">
                                                    </div>
                                                    <div id="partner_holder_1" style="margin-top:15px; max-height:100px;"></div>
                                                    
                                                    <span class="d-block mt-4">Content:</span>
                                                    <textarea id="summernote-0" name="partners_content[]" class="form-control summernote mt-2">{{ old('digital_service_content.0') }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-md btn-success">Save</button>
                                    </form>
                                    <button type="button" class="btn btn-success mt-3 mx-auto d-block" id="add-partner">Add Partner</button>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-2">
                            <div class="card-header" id="headingfeature">
                                <section class="mb-0 mt-0">
                                    <div style="display: flex; justify-content: space-between; cursor: pointer;" role="menu" class="collapsed" data-bs-toggle="collapse" data-bs-target="#withoutSpacingAccordionFeature" aria-expanded="false" aria-controls="withoutSpacingAccordionFeature">
                                        Events & Webinars  <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                    </div>
                                </section>
                            </div>
                            <div id="withoutSpacingAccordionFeature" class="collapse" aria-labelledby="headingfeature" data-bs-parent="#withoutSpacing">
                                <div class="container py-3">
                                    <form>
                                        <span>Section Title:</span>
                                        <input type="text" class="form-control mb-2" name="events_webinars_section_title">
                                        <div id="events-and-webinars-section" class="mt-3">
                                            <div class="card-body border p-3 mb-3 position-relative">
                                                <span class="d-block mt-3">Select Image:</span>
                                                <div class="input-group d-flex align-items-center mt-2">
                                                    <span class="input-group-btn">
                                                    <a class="lfm_file btn btn-primary" style="border-top-right-radius: 0; border-bottom-right-radius: 0" data-input="events_thumbnail-1" data-preview="events_holder-1">
                                                        <i class="fa fa-picture-o"></i> Choose
                                                    </a>
                                                    </span>
                                                    <input id="events_thumbnail-1" style="height: 36px" class="form-control" type="text" name="events_image[]">
                                                </div>
                                                <div id="events_holder-1" style="margin-top:15px; max-height:100px;"></div>

                                                <span>Title:</span>
                                                <input type="text" class="form-control mt-2" name="event_title[]" >
                                                
                                                <span class="d-block mt-4">Description:</span>
                                                <textarea name="event_desc[]" class="form-control mt-2"></textarea>
                                            </div>
                                        </div>
                                        <button class="btn btn-md btn-success">Save</button>
                                    </form>
                                    <button type="button" class="btn btn-success mt-3 mx-auto d-block" id="add-event">Add Events or Webinars</button>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-2">
                            <div class="card-header" id="headingfeature1">
                                <section class="mb-0 mt-0">
                                    <div style="display: flex; justify-content: space-between; cursor: pointer;" role="menu" class="collapsed" data-bs-toggle="collapse" data-bs-target="#withoutSpacingAccordionFeature1" aria-expanded="false" aria-controls="withoutSpacingAccordionFeature1">
                                        Related Capabilities  <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                    </div>
                                </section>
                            </div>
                            <div id="withoutSpacingAccordionFeature1" class="collapse" aria-labelledby="headingfeature1" data-bs-parent="#withoutSpacing">
                                <div class="container py-3">
                                    <form>
                                        <span>Section Title:</span>
                                        <input type="text" class="form-control mb-2" name="capabilities_section_title">
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
            $('#lfm').filemanager('image');
            $('.lfm_file').filemanager('image');

            $(document).on('click', '.add-partner-detail', function() {
                let deleteBtn = `<button class="btn partner-detail-dlt-btn position-absolute" style="top:5px; right:5px;">
                                    <i class="fa fa-trash text-danger"></i>
                                </button>`
                let html = $(this).siblings('.elite_partner_details').find('.elite_partner_detail').first().clone();
                html.addClass('mt-3');
                html.prepend(deleteBtn);
                html.find('input[type="text"], textarea').val('');
                $(this).siblings('.elite_partner_details').append(html);
            });

            $(document).on('click', '.partner-detail-dlt-btn', function(){
                if(confirm('Do you want to delete this?')){
                    $(this).closest('.elite_partner_detail').remove();
                }
            })

            $('#add-elite-partner').click(function(){
                let childCount = $('#elite-partners-section').find('.card-body').length;
                let html = `
                            <div class="card-body border p-3 mb-3 position-relative">
                                <span class="d-block mt-3">Select Logo:</span>
                                <div class="input-group d-flex align-items-center mt-2">
                                    <span class="input-group-btn">
                                    <a class="lfm_file btn btn-primary" style="border-top-right-radius: 0; border-bottom-right-radius: 0" data-input="section_1_thumbnail-${childCount + 1}" data-preview="section_1_holder-${childCount + 1}">
                                        <i class="fa fa-picture-o"></i> Choose
                                    </a>
                                    </span>
                                    <input id="section_1_thumbnail-${childCount + 1}" style="height: 36px" class="form-control" type="text" name="elite_partner_logo-${childCount + 1}">
                                </div>
                                <div id="section_1_holder-${childCount + 1}" style="margin-top:15px; max-height:100px;"></div>

                                <div class="elite_partner_details">
                                    <div class="elite_partner_detail border p-3 mb-3 position-relative">
                                        <span>Title:</span>
                                        <input type="text" class="form-control mt-2" name="about_feature_section_title-${childCount + 1}[]" >
                                        
                                        <span class="d-block mt-3">Description:</span>
                                        <textarea name="about_feature_section_desc-${childCount + 1}[]" class="form-control mt-2"></textarea>
                                    </div>
                                </div>
                                <button type="button" class="add-partner-detail btn btn-success mt-3 mx-auto d-block">Add Partner Detail</button>
                            </div>
                            `;
                let newHtml = $(html);
                newHtml.find('input[type="text"], textarea').val('');
                $('#elite-partners-section').append(newHtml);
                $('.lfm_file').filemanager('image');
            })

            function initializeSummernote(selector) {
                $(selector).summernote({
                    height: 200,
                    toolbar: [
                        ['insert', ['lfm']],
                        ['font', ['bold']],
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
             $('#add-partner').click(function () {
                const id = 'summernote-' + Date.now();
                const childCount = $('#allPartnersContainer').find('.partner-container').length;
                const html = `
                <div class="partner-container border p-3 mb-3 position-relative">
                    <button class="btn services-dlt-btn position-absolute" style="top:5px; right:5px;">
                        <i class="fa fa-trash text-danger"></i>
                    </button>

                    <span>Partner Logo:</span>
                    <div class="input-group d-flex align-items-center mt-2">
                        <span class="input-group-btn">
                        <a class="lfm_file btn btn-primary" style="border-top-right-radius: 0; border-bottom-right-radius: 0" data-input="partner_thumbnail_1-${childCount + 1}" data-preview="partner_holder_1-${childCount + 1}">
                            <i class="fa fa-picture-o"></i> Choose
                        </a>
                        </span>
                        <input id="partner_thumbnail_1-${childCount + 1}" style="height: 36px" class="form-control" type="text" name="partner_logo[]">
                    </div>
                    <div id="partner_holder_1-${childCount + 1}" style="margin-top:15px; max-height:100px;"></div>

                    <span class="d-block mt-4">Content:</span>
                    <textarea id="${id}" name="partner_content[]" class="form-control summernote mt-2"></textarea>
                </div>
                `;
                $("#allPartnersContainer").append(html);
                initializeSummernote(`#${id}`);
                $('.lfm_file').filemanager('image');
            });

            $(document).on('click', '.services-dlt-btn', function () {
                if(confirm('Do you want to delete this service?')) {
                    $(this).closest('.services-container').remove();
                }
            });

            $('#add-event').click(function(){
                const childCount = $('#events-and-webinars-section').find('.card-body').length;
                const html = `
                                <div class="card-body border p-3 mb-3 position-relative">
                                    <button class="btn event-dlt-btn position-absolute" style="top:5px; right:5px;">
                                        <i class="fa fa-trash text-danger"></i>
                                    </button>
                                    <span class="d-block mt-3">Select Image:</span>
                                    <div class="input-group d-flex align-items-center mt-2">
                                        <span class="input-group-btn">
                                        <a class="lfm_file btn btn-primary" style="border-top-right-radius: 0; border-bottom-right-radius: 0" data-input="events_thumbnail-${childCount + 1}" data-preview="events_holder-${childCount + 1}">
                                            <i class="fa fa-picture-o"></i> Choose
                                        </a>
                                        </span>
                                        <input id="events_thumbnail-${childCount + 1}" style="height: 36px" class="form-control" type="text" name="events_image[]">
                                    </div>
                                    <div id="events_holder-${childCount + 1}" style="margin-top:15px; max-height:100px;"></div>

                                    <span>Title:</span>
                                    <input type="text" class="form-control mt-2" name="event_title[]" >
                                    
                                    <span class="d-block mt-4">Description:</span>
                                    <textarea name="event_desc[]" class="form-control mt-2"></textarea>
                                </div>
                             `
                // Convert HTML string to jQuery object
                let $newItem = $(html);

                // Reset values
                $newItem.find('input[type="text"], textarea').val('');
                $('#events-and-webinars-section').append($newItem);
                $('.lfm_file').filemanager('image');
            })

            $(document).on('click', '.event-dlt-btn', function () {
                if(confirm('Do you want to delete this event/ webinar?')) {
                    $(this).closest('.card-body').remove();
                }
            })
        })
    </script>
@endsection