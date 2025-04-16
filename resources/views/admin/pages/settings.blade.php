@extends('admin.layouts.main')
@section('content')
<div class="content-wrapper">
    <div class="row layout-top-spacing">
        <div class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-content widget-content-area icon-accordion-content">
                    <h3 class="text-center pb-2">Site Settings</h3>
                    <div id="withoutSpacing" class="no-outer-spacing accordion">
                        <div class="card">
                            <div class="card-header" id="headingMeta2">
                                <section class="mb-0 mt-0">
                                    <div style="display: flex; justify-content: space-between; cursor: pointer;" role="menu" class="" data-bs-toggle="collapse" data-bs-target="#withoutSpacingAccordionMeta" aria-expanded="true" aria-controls="withoutSpacingAccordionMeta">
                                        Appearance  <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                    </div>
                                </section>
                            </div>
                            <div id="withoutSpacingAccordionMeta" class="collapse show" aria-labelledby="headingMeta2" data-bs-parent="#withoutSpacing">
                                <form action="{{route('admin.settings.appearance.update')}}" method="POST">
                                    @csrf
                                    <div class="container py-3">
                                        <span>Site Title:</span>
                                        <input type="text" name="site_title" value="{{$settings->site_title}}" class="form-control mt-2">
                                        @error('site_title')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror

                                        <span class="d-block mt-3">Favicon:</span>
                                        <div class="input-group d-flex align-items-center mt-2">
                                            <span class="input-group-btn">
                                            <a class="lfm_file btn btn-primary" style="border-top-right-radius: 0; border-bottom-right-radius: 0" data-input="section_1_thumbnail" data-preview="section_1_holder">
                                                <i class="fa fa-picture-o"></i> Choose
                                            </a>
                                            </span>
                                            <input id="section_1_thumbnail" value="{{$settings->favicon}}" style="height: 36px" class="form-control" type="text" name="favicon">
                                        </div>
                                        <div id="section_1_holder" style="margin-top:15px; max-height:100px;">
                                            @if (!empty($settings->favicon))
                                                <img src="{{ asset($settings->favicon) }}" style="height: 5rem;">
                                            @endif
                                        </div>
                                        @error('favicon')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror

                                        <span class="d-block mt-3">Logo:</span>
                                        <div class="input-group d-flex align-items-center mt-2">
                                            <span class="input-group-btn">
                                            <a class="lfm_file btn btn-primary" style="border-top-right-radius: 0; border-bottom-right-radius: 0" data-input="logo_thumbnail" data-preview="logo_holder">
                                                <i class="fa fa-picture-o"></i> Choose
                                            </a>
                                            </span>
                                            <input id="logo_thumbnail" value="{{$settings->site_logo}}" style="height: 36px" class="form-control" type="text" name="site_logo">
                                        </div>
                                        <div id="logo_holder" style="margin-top:15px; max-height:100px;">
                                            @if (!empty($settings->site_logo))
                                                <img src="{{ asset($settings->site_logo) }}" style="height: 5rem;">
                                            @endif
                                        </div>
                                        @error('site_logo')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror

                                        <span class="d-block mt-3">Primary Site Color:</span>
                                        <input type="color" name="primary_color" value="{{$settings->primary_color}}" style="height: 35px" class="form-control mt-2">
                                        @error('primary_color')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror

                                        {{-- <span class="d-block mt-3">Secondary Site Color:</span>
                                        <input type="color" name="secondary_color" value="{{$settings->secondary_color}}" style="height: 35px" class="form-control mt-2">
                                        @error('secondary_color')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror --}}

                                        <span class="d-block mt-3">Button Color:</span>
                                        <input type="color" name="button_color" value="{{$settings->button_color}}" style="height: 35px" class="form-control mt-2">
                                        @error('button_color')
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
                                        Footer Settings  <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                    </div>
                                </section>
                            </div>
                            <div id="withoutSpacingAccordionTwo" class="collapse" aria-labelledby="headingTwo2" data-bs-parent="#withoutSpacing">
                                <form action="{{route('admin.settings.socials.update')}}" method="POST">
                                    @csrf
                                    <div class="container py-3">
                                        <span class="d-block mt-3 text-center fw-bold">Social Links:</span>
                                        <span class="d-block mt-3">Instagram:</span>
                                        <input type="text" name="instagram_link" value="{{$settings->instagram_link}}" class="form-control mt-2">
                                        @error('instagram_link')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror

                                        <span class="d-block mt-3">X:</span>
                                        <input type="text" name="x_link" value="{{$settings->x_link}}" class="form-control mt-2">
                                        @error('x_link')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror

                                        <span class="d-block mt-3">Facebook:</span>
                                        <input type="text" name="facebook_link" value="{{$settings->facebook_link}}" class="form-control mt-2">
                                        @error('facebook_link')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror

                                        <span class="d-block mt-3">Linkedin:</span>
                                        <input type="text" name="linkedin_link" value="{{$settings->linkedin_link}}" class="form-control mt-2">
                                        @error('linkedin_link')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror

                                        <button class="btn btn-md btn-success mt-3">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card mt-2">
                            <div class="card-header" id="headingThree10">
                                <section class="mb-0 mt-0">
                                    <div style="display: flex; justify-content: space-between; cursor: pointer;" role="menu" class="collapsed" data-bs-toggle="collapse" data-bs-target="#withoutSpacingAccordionThree" aria-expanded="false" aria-controls="withoutSpacingAccordionThree">
                                        Contact Form Content <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                    </div>
                                </section>
                            </div>
                            <div id="withoutSpacingAccordionThree" class="collapse" aria-labelledby="headingThree10" data-bs-parent="#withoutSpacing">
                                <form action="{{route('admin.settings.contact-form.update')}}" method="POST">
                                    @csrf
                                    <div class="container py-3">
                                        <span class="d-block mt-3">Title:</span>
                                        <input type="text" name="contact_form_title" value="{{$settings->contact_form_title}}" class="form-control mt-2">
                                        @error('contact_form_title')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror

                                        <span class="d-block mt-3">Subtitle:</span>
                                        <input type="text" name="contact_form_subtitle" value="{{$settings->contact_form_subtitle}}" class="form-control mt-2">
                                        @error('contact_form_title')
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
        })
    </script>
@endsection