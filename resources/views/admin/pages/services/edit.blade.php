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
                            <div class="card-header" id="headingMeta5">
                                <section class="mb-0 mt-0">
                                    <div style="display: flex; justify-content: space-between; cursor: pointer;" role="menu" class="" data-bs-toggle="collapse" data-bs-target="#withoutSpacingAccordionMeta5" aria-expanded="true" aria-controls="withoutSpacingAccordionMeta5">
                                        Page Metas  <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                    </div>
                                </section>
                            </div>

                            <div id="withoutSpacingAccordionMeta5" class="collapse show" aria-labelledby="headingMeta5" data-bs-parent="#withoutSpacing">
                                <div class="container py-3">
                                    <form method="post" action="{{ route('admin.page-meta.update', ['slug' => $service->slug]) }}">
                                        @csrf 
                                        <span class="d-block mt-3">Meta Title</span>
                                        <input type="text" name="meta_title" value="{{$service->meta_title}}" class="form-control mt-2" required>
                                        @error('meta_title')
                                            <div class="text-danger">{{ $message }}</div>                                            
                                        @enderror

                                        <span class="d-block mt-3">Meta Description</span>
                                        <textarea name="meta_description" class="form-control mt-2" rows="3" required>{{$service->meta_description}}</textarea>
                                        @error('meta_description')
                                            <div class="text-danger">{{ $message }}</div>                                            
                                        @enderror

                                        <button class="btn btn-md btn-success mt-3">Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-2">
                            <div class="card-header" id="headingFour">
                                <section class="mb-0 mt-0">
                                    <div style="display: flex; justify-content: space-between; cursor: pointer;" role="menu" class="" data-bs-toggle="collapse" data-bs-target="#withoutSpacingAccordion44" aria-expanded="false" aria-controls="withoutSpacingAccordion44">
                                        Page Data  <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                    </div>
                                </section>
                            </div>

                            <div id="withoutSpacingAccordion44" class="collapse" aria-labelledby="headingFour" data-bs-parent="#withoutSpacing">
                                <div class="container py-3">
                                    <form method="POST" action="{{ route('admin.service-page.update', $service->id) }}">
                                        @csrf
                                        <span class="d-block mt-3">Page Title:</span>
                                        <input type="text" name="name" value="{{$service->name}}" class="form-control mt-2" required>
                                        @error('name')
                                            <div class="text-danger">{{$message}}</div>
                                        @enderror

                                        <span class="d-block mt-3">Select Page Icon:</span>
                                        <div class="input-group d-flex align-items-center mt-2">
                                            <span class="input-group-btn">
                                            <a class="lfm_file btn btn-primary" style="border-top-right-radius: 0; border-bottom-right-radius: 0" data-input="thumbnail_0" data-preview="holder_0">
                                                <i class="fa fa-picture-o"></i> Choose
                                            </a>
                                            </span>
                                            <input id="thumbnail_0" style="height: 36px" value="{{$service->page_icon}}" class="form-control" type="text" name="page_icon" required>
                                        </div>
                                        <div id="holder_0" style="margin-top:15px; max-height:100px;">
                                            @if (!empty($service->page_icon ?? ''))
                                                <img src="{{ $service->page_icon ?? '' }}" style="height: 5rem;">
                                            @endif
                                        </div>
                                        @error('page_icon')
                                            <div class="text-danger">{{$message}}</div>
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
                                    <form method="POST" action="{{ route('admin.service-page.hero.update', $service->id) }}">
                                        @csrf
                                        <div id="carousel-container">
                                            <div class="hero-carousel-item card-body border p-3 mb-3">                                        
                                                <span>Select Background:</span>
                                                <div class="input-group d-flex align-items-center mt-2">
                                                    <span class="input-group-btn">
                                                    <a class="lfm_file btn btn-primary" style="border-top-right-radius: 0; border-bottom-right-radius: 0" data-input="thumbnail_bg" data-preview="holder_bg">
                                                        <i class="fa fa-picture-o"></i> Choose
                                                    </a>
                                                    </span>
                                                    <input id="thumbnail_bg" style="height: 36px" value="{{$service->sections['hero_section']['bg_image'] ?? ''}}" class="form-control" type="text" name="bg_image" required>
                                                </div>
                                                <div id="holder_bg" style="margin-top:15px; max-height:100px;">
                                                    @if (!empty($service->sections['hero_section']['bg_image'] ?? ''))
                                                        <img src="{{ $service->sections['hero_section']['bg_image'] ?? '' }}" style="height: 5rem;">
                                                    @endif
                                                </div>
                                        
                                                <span class="d-block mt-3">Title</span>
                                                <input type="text" class="form-control mb-2" value="{{$service->sections['hero_section']['hero_title'] ?? ''}}" name="hero_title">
                                        
                                                <span class="d-block mt-2">Subtitle</span>
                                                <textarea class="form-control" name="hero_subtitle" rows="2" required>{{$service->sections['hero_section']['hero_subtitle'] ?? ''}}</textarea>
                                            </div>
                                        </div>
                                        <button class="btn btn-md btn-success">Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-2">
                            <div class="card-header" id="headingSix80">
                                <section class="mb-0 mt-0">
                                    <div style="display: flex; justify-content: space-between; cursor: pointer;" role="menu" class="collapsed" data-bs-toggle="collapse" data-bs-target="#withoutSpacingAccordionFiveFive" aria-expanded="false" aria-controls="withoutSpacingAccordionFiveFive">
                                        Service Description <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                    </div>
                                </section>
                            </div>
                            <div id="withoutSpacingAccordionFiveFive" class="collapse" aria-labelledby="headingSix80" data-bs-parent="#withoutSpacing">
                                <div class="container py-3">
                                    <form method="POST" action="{{ route('admin.service-page.description.update', $service->id) }}">
                                        @csrf
                                        <div id="service-description">
                                            <span class="d-block mt-4">Content:</span>
                                            <textarea name="service_description" class="form-control summernote mt-2" required>{{$service->service_description}}</textarea>
                                        </div>

                                        <button type="submit" class="btn btn-md btn-success mt-3">Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-2">
                            <div class="card-header" id="headingFive10">
                                <section class="mb-0 mt-0">
                                    <div style="display: flex; justify-content: space-between; cursor: pointer;" role="menu" class="collapsed" data-bs-toggle="collapse" data-bs-target="#withoutSpacingAccordionFive" aria-expanded="false" aria-controls="withoutSpacingAccordionFive">
                                        @foreach ($service->sections['all'] as $section)
                                            @if ($section['type'] == 'repeating'&& $section['group'] == 'features')
                                            {{$section['title']}} @endif @endforeach <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                    </div>
                                </section>
                            </div>
                            <div id="withoutSpacingAccordionFive" class="collapse" aria-labelledby="headingFive10" data-bs-parent="#withoutSpacing">
                                <div class="container py-3">
                                    <form method="POST" action="{{ route('admin.service-page.feature.update', $service->id) }}">
                                        @csrf
                                        @foreach ($service->sections['all'] as $section)
                                            @if ($section['type'] == 'repeating'&& $section['group'] == 'features')
                                                <div class="card-body">
                                                    <span>Section Title:</span>
                                                    <input type="text" class="form-control mt-2" name="section_title" value="{{$section['title']}}" required>

                                                    <span class="d-block mt-3">Display Title:</span>
                                                    <input class="form-control mt-2" value="{{$section['display_title'] ?? ''}}" name="display_title" required>
        
                                                    <hr>
        
                                                    <div id="details-section">
                                                        @foreach ($section['data']['details'] as $detail)
                                                            <div class="feature_detail border p-3 mb-3 position-relative">
                                                                <button type="button" class="btn feature-detail-dlt-button position-absolute" data-index="{{$loop->index}}" data-service="{{$service->id}}" style="top:5px; right:5px;">
                                                                    <i class="fa fa-trash text-danger"></i>
                                                                </button>
                                                                <span class="d-block mt-4">Detail Title:</span>
                                                                <input type="text" class="form-control" value="{{$detail['detail_title']}}" name="detail_title[]" required>
                                                                <span class="d-block mt-4">Detail Description:</span>
                                                                <textarea name="detail_description[]" class="form-control mt-2" rows="3" required>{{$detail['detail_description']}}</textarea>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                        <button class="btn btn-md btn-success">Save</button>
                                    </form>
                                    <button type="button" class="btn btn-success mt-3 mx-auto d-block" id="add-feature">Add Detail</button>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-2">
                            <div class="card-header" id="headingTwo2">
                                <section class="mb-0 mt-0">
                                    <div style="display: flex; justify-content: space-between; cursor: pointer;" role="menu" class="collapsed" data-bs-toggle="collapse" data-bs-target="#withoutSpacingAccordionTwo" aria-expanded="false" aria-controls="withoutSpacingAccordionTwo">
                                        @foreach ($service->sections['all'] as $section)
                                            @if ($section['type'] == 'single' && $section['group'] == 'transform')
                                            {{$section['title'] ?? ''}} @endif @endforeach  <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                    </div>
                                </section>
                            </div>
                            <div id="withoutSpacingAccordionTwo" class="collapse" aria-labelledby="headingTwo2" data-bs-parent="#withoutSpacing">
                                <div class="container py-3">
                                    <form method="POST" action="{{ route('admin.service-page.transform.update', $service->id) }}">
                                        @csrf
                                        @foreach ($service->sections['all'] as $section)
                                            @if ($section['type'] == 'single' && $section['group'] == 'transform')
                                                <div class="card-body">
                                                    <span class="d-block mt-3">Section Title:</span>
                                                    <input class="form-control mt-2" value="{{$section['title'] ?? ''}}" name="section_title" required>

                                                    <span class="d-block mt-3">Display Title:</span>
                                                    <input class="form-control mt-2" value="{{$section['display_title'] ?? ''}}" name="display_title" required>
        
                                                    <span class="d-block mt-3">Select Infograph:</span>
                                                    <div class="input-group d-flex align-items-center mt-2">
                                                        <span class="input-group-btn">
                                                        <a class="lfm btn btn-primary" style="border-top-right-radius: 0; border-bottom-right-radius: 0" data-input="infograph_thumbnail" data-preview="infograph_holder">
                                                            <i class="fa fa-picture-o"></i> Choose
                                                        </a>
                                                        </span>
                                                        <input id="infograph_thumbnail" style="height: 36px" class="form-control" value="{{$section['data']['infograph'] ?? ''}}" type="text" name="infograph" required>
                                                    </div>
                                                    <div id="infograph_holder" style="margin-top:15px; max-height:100px;">
                                                        @if (!empty($section['data']['infograph'] ?? ''))
                                                            <img src="{{ $section['data']['infograph'] ?? '' }}" style="height: 5rem;">
                                                        @endif
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
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
                                    <form method="POST" action="{{ route('admin.service-page.repeating.update', $service->id) }}">
                                        @csrf
                                        <div id="feature-sections" class="feature-sections-service">
                                            @foreach ($service->sections['all'] as $section)
                                                @if ($section['type'] == 'repeating' && $section['group'] == 'repeating_blocks')
                                                    <div class="card-body border p-3 mb-3 position-relative">
                                                        <button type="button" class="btn section-dlt-button position-absolute" data-index="{{$loop->index}}" data-service="{{$service->id}}" style="top:5px; right:5px;">
                                                            <i class="fa fa-trash text-danger"></i>
                                                        </button>
        
                                                        <span>Title:</span>
                                                        <input type="text" class="form-control mt-2" value="{{$section['title'] ?? ''}}" name="section_title[]" required>

                                                        <span class="d-block mt-3">Display Title:</span>
                                                        <input class="form-control mt-2" value="{{$section['display_title'] ?? ''}}" name="display_title[]" required>
                                                        
                                                        <span class="d-block mt-4">Description:</span>
                                                        <textarea name="section_desc[]" class="form-control summernote mt-2" required>{{$section['data']['description'] ?? ''}}</textarea>
        
                                                        <span class="d-block mt-3">Select Image:</span>
                                                        <div class="input-group d-flex align-items-center mt-2">
                                                            <span class="input-group-btn">
                                                            <a class="lfm_file btn btn-primary" style="border-top-right-radius: 0; border-bottom-right-radius: 0" data-input="section_3_thumbnail" data-preview="section_3_holder">
                                                                <i class="fa fa-picture-o"></i> Choose
                                                            </a>
                                                            </span>
                                                            <input id="section_3_thumbnail" style="height: 36px" class="form-control" value="{{$section['data']['image'] ?? ''}}" type="text" name="section_image[]" required>
                                                        </div>
                                                        <div id="section_3_holder" style="margin-top:15px; max-height:100px;">
                                                            @if (!empty($section['data']['image'] ?? ''))
                                                                <img src="{{ $section['data']['image'] ?? '' }}" style="height: 5rem;">
                                                            @endif
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
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
    <form id="delete-feature-section-form" method="POST" style="display: none;">
        @csrf
        @method('DELETE')
    </form>
</div>
@endsection
@section('scripts')
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script>
        $(document).ready(function() {
            $('.lfm').filemanager('file');
            $('.lfm_file').filemanager('image');

            $('#add-feature').click(function () {
                const html = `
                    <div class="feature_detail border p-3 mb-3 position-relative">
                        <button class="btn feature-detail-dlt-btn position-absolute" style="top:5px; right:5px;">
                            <i class="fa fa-trash text-danger"></i>
                        </button>
                        <span class="d-block mt-4">Feature Title:</span>
                        <input type="text" class="form-control" name="detail_title[]" required>
                        <span class="d-block mt-4">Feature Description:</span>
                        <textarea name="detail_description[]" class="form-control mt-2" rows="3" required></textarea>
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
                        ['insert', ['lfm']],
                        ['font', ['bold']],
                        ['fontsize', ['fontsize']],
                        ['style', ['style']],
                        ['color', ['color']],
                        ['insert', ['link']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['view', ['codeview']]
                    ],
                    fontSizes: ['8', '10', '12', '14', '16', '18', '20', '22', '24', '26', '28', '32', '36', '48', '64', '72'],
                    colors: [
                        ['#000', '#FFFFFF', '#cccccc'],
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

            $('#add-feature-section').click(function () {
                const randomValue = Math.floor(Math.random() * 100000); // Generate a better unique ID

                const html = `
                    <div class="card-body border p-3 mb-3 position-relative">
                        <button class="btn section-dlt-btn position-absolute" style="top:5px; right:5px;">
                            <i class="fa fa-trash text-danger"></i>
                        </button>

                        <span>Title:</span>
                        <input type="text" class="form-control mt-2" name="section_title[]" required>

                        <span class="d-block mt-3">Display Title:</span>
                        <input class="form-control mt-2" name="display_title[]" required>

                        <span class="d-block mt-4">Description:</span>
                        <textarea name="section_desc[]" class="form-control summernote mt-2" required></textarea>

                        <span class="d-block mt-3">Select Image:</span>
                        <div class="input-group d-flex align-items-center mt-2">
                            <span class="input-group-btn">
                                <a class="lfm_file btn btn-primary" style="border-top-right-radius: 0; border-bottom-right-radius: 0"
                                    data-input="thumbnail_${randomValue}" data-preview="holder_${randomValue}">
                                    <i class="fa fa-picture-o"></i> Choose
                                </a>
                            </span>
                            <input id="thumbnail_${randomValue}" style="height: 36px" class="form-control" type="text" name="section_image[]" required>
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

            $(document).on('click', '.feature-detail-dlt-button', function(){
                if(confirm('Do you want to delete this?')){
                    let index = $(this).data('index');
                    let serviceId = $(this).data('service');
                    let dltForm = $('#delete-feature-section-form');
                    dltForm.attr('action', `/admin/service-page/feature/detail/delete/${serviceId}/${index}`);
                    dltForm.submit();
                }
            })

            $(document).on('click', '.section-dlt-button', function(){
                if(confirm('Do you want to delete this section?')){
                    let index = $(this).data('index');
                    let serviceId = $(this).data('service');
                    let dltForm = $('#delete-feature-section-form');
                    dltForm.attr('action', `/admin/service-page/repeating/delete/${serviceId}/${index}`);
                    dltForm.submit();
                }
            })
        });
    </script>
@endsection