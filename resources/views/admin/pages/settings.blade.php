@extends('admin.layouts.main')
@section('content')
<div class="content-wrapper">
    <div class="row layout-top-spacing">
        <div class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-content widget-content-area icon-accordion-content">
                    <form>
                        <h3 class="text-center pb-2">Site Settings</h3>
                        <div class="card">
                            <div class="container py-3">
                                <span>Favicon:</span>
                                <div class="input-group d-flex align-items-center mt-2">
                                    <span class="input-group-btn">
                                    <a class="lfm_file btn btn-primary" style="border-top-right-radius: 0; border-bottom-right-radius: 0" data-input="section_1_thumbnail" data-preview="section_1_holder">
                                        <i class="fa fa-picture-o"></i> Choose
                                    </a>
                                    </span>
                                    <input id="section_1_thumbnail" style="height: 36px" class="form-control" type="text" name="favicon">
                                </div>
                                <div id="section_1_holder" style="margin-top:15px; max-height:100px;"></div>

                                <span class="d-block mt-3">Logo:</span>
                                <div class="input-group d-flex align-items-center mt-2">
                                    <span class="input-group-btn">
                                    <a class="lfm_file btn btn-primary" style="border-top-right-radius: 0; border-bottom-right-radius: 0" data-input="logo_thumbnail" data-preview="logo_holder">
                                        <i class="fa fa-picture-o"></i> Choose
                                    </a>
                                    </span>
                                    <input id="logo_thumbnail" style="height: 36px" class="form-control" type="text" name="site_logo">
                                </div>
                                <div id="logo_holder" style="margin-top:15px; max-height:100px;"></div>
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="container py-3">
                                <h5 class="text-center mt-3">Footer Settings</h5>
                            
                                <span class="d-block mt-3 text-center fw-bold">Social Links:</span>
                                <span class="d-block mt-3">Instagram:</span>
                                <input type="text" name="instagram_link" class="form-control mt-2">

                                <span class="d-block mt-3">X:</span>
                                <input type="text" name="x_link" class="form-control mt-2">

                                <span class="d-block mt-3">Facebook:</span>
                                <input type="text" name="facebook_link" class="form-control mt-2">

                                <span class="d-block mt-3">Linkedin:</span>
                                <input type="text" name="linkedin_link" class="form-control mt-2">
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="container py-3">
                                <h5 class="text-center mt-3">Contact Form Content</h5>
                                <span class="d-block mt-3">Title:</span>
                                <input type="text" name="contact_form_title" class="form-control mt-2">

                                <span class="d-block mt-3">Subtitle:</span>
                                <input type="text" name="contact_form_subtitle" class="form-control mt-2">
                            </div>
                        </div>
                        <button class="btn btn-md btn-success mt-3">Save</button>
                    </form>
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