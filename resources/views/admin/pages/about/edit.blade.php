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
                                                {{-- <span class="d-block mb-2">Select Background Type:</span>
                                                <div class="d-flex align-items-center mb-3">
                                                    <span class="me-2">Image</span>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" name="bg_type" value="video">
                                                    </div>
                                                    <span class="ms-3">Video</span>
                                                </div> --}}
                                        
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
                        <div class="card">
                            <div class="card-header" id="headingTwo2">
                                <section class="mb-0 mt-0">
                                    <div style="display: flex; justify-content: space-between; cursor: pointer;" role="menu" class="collapsed" data-bs-toggle="collapse" data-bs-target="#withoutSpacingAccordionTwo" aria-expanded="false" aria-controls="withoutSpacingAccordionTwo">
                                        Section One  <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                    </div>
                                </section>
                            </div>
                            <div id="withoutSpacingAccordionTwo" class="collapse" aria-labelledby="headingTwo2" data-bs-parent="#withoutSpacing">
                                <div class="container py-3">
                                    <form>
                                        <div class="card-body">
                                            <span>Title:</span>
                                            <div class="form-group">
                                                <input type="text" class="form-control mt-2" name="section_1_title" value="{{old('section_1_title')}}" >
                                            </div>
                                            
                                            <span class="d-block mt-4">Description:</span>
                                            <textarea name="section_1_desc" class="form-control mt-2">{{ old('section_1_desc') }}</textarea>

                                            <span class="d-block mt-3">Select Image:</span>
                                            <div class="input-group d-flex align-items-center mt-2">
                                                <span class="input-group-btn">
                                                <a class="lfm_file btn btn-primary" style="border-top-right-radius: 0; border-bottom-right-radius: 0" data-input="section_1_thumbnail" data-preview="section_1_holder">
                                                    <i class="fa fa-picture-o"></i> Choose
                                                </a>
                                                </span>
                                                <input id="section_1_thumbnail" style="height: 36px" class="form-control" type="text" name="section_1_image">
                                            </div>
                                            <div id="section_1_holder" style="margin-top:15px; max-height:100px;"></div>
                                        </div>
                                        <button class="btn btn-md btn-success">Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree10">
                                <section class="mb-0 mt-0">
                                    <div style="display: flex; justify-content: space-between; cursor: pointer;" role="menu" class="collapsed" data-bs-toggle="collapse" data-bs-target="#withoutSpacingAccordionThree" aria-expanded="false" aria-controls="withoutSpacingAccordionThree">
                                        Section Two <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                    </div>
                                </section>
                            </div>
                            <div id="withoutSpacingAccordionThree" class="collapse" aria-labelledby="headingThree10" data-bs-parent="#withoutSpacing">
                                <div class="container py-3">
                                    <form>
                                        <div class="card-body">
                                            <span>Title:</span>
                                            <div class="form-group">
                                                <input type="text" class="form-control mt-2" name="section_2_title" value="{{old('section_2_title')}}" >
                                            </div>
                                            
                                            <span class="d-block mt-4">Description:</span>
                                            <textarea name="section_2_desc" class="form-control mt-2">{{ old('section_2_desc') }}</textarea>

                                            <span class="d-block mt-3">Select Image:</span>
                                            <div class="input-group d-flex align-items-center mt-2">
                                                <span class="input-group-btn">
                                                <a class="lfm_file btn btn-primary" style="border-top-right-radius: 0; border-bottom-right-radius: 0" data-input="section_2_thumbnail" data-preview="section_2_holder">
                                                    <i class="fa fa-picture-o"></i> Choose
                                                </a>
                                                </span>
                                                <input id="section_2_thumbnail" style="height: 36px" class="form-control" type="text" name="section_2_image">
                                            </div>
                                            <div id="section_2_holder" style="margin-top:15px; max-height:100px;"></div>
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
                                        Section Three <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                    </div>
                                </section>
                            </div>
                            <div id="withoutSpacingAccordionFour" class="collapse" aria-labelledby="headingFour10" data-bs-parent="#withoutSpacing">
                                <div class="container py-3">
                                    <form>
                                        <div class="card-body">
                                            <span>Title:</span>
                                            <div class="form-group">
                                                <input type="text" class="form-control mt-2" name="section_3_title" value="{{old('section_3_title')}}" >
                                            </div>
                                            
                                            <span class="d-block mt-4">Description:</span>
                                            <textarea name="section_3_desc" class="form-control mt-2">{{ old('section_3_desc') }}</textarea>

                                            <span class="d-block mt-3">Select Image:</span>
                                            <div class="input-group d-flex align-items-center mt-2">
                                                <span class="input-group-btn">
                                                <a class="lfm_file btn btn-primary" style="border-top-right-radius: 0; border-bottom-right-radius: 0" data-input="section_3_thumbnail" data-preview="section_3_holder">
                                                    <i class="fa fa-picture-o"></i> Choose
                                                </a>
                                                </span>
                                                <input id="section_3_thumbnail" style="height: 36px" class="form-control" type="text" name="section_3_image">
                                            </div>
                                            <div id="section_3_holder" style="margin-top:15px; max-height:100px;"></div>
                                        </div>
                                        <button class="btn btn-md btn-success">Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFive10">
                                <section class="mb-0 mt-0">
                                    <div style="display: flex; justify-content: space-between; cursor: pointer;" role="menu" class="collapsed" data-bs-toggle="collapse" data-bs-target="#withoutSpacingAccordionFive" aria-expanded="false" aria-controls="withoutSpacingAccordionFive">
                                        Section Four <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                    </div>
                                </section>
                            </div>
                            <div id="withoutSpacingAccordionFive" class="collapse" aria-labelledby="headingFive10" data-bs-parent="#withoutSpacing">
                                <div class="container py-3">
                                    <form>
                                        <div class="card-body">
                                            <span>Section Title:</span>
                                            <div class="form-group">
                                                <input type="text" class="form-control mt-2" name="section_4_title" value="{{old('section_4_title')}}" >
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
                        <div class="card">
                            <div class="card-header" id="headingSix10">
                                <section class="mb-0 mt-0">
                                    <div style="display: flex; justify-content: space-between; cursor: pointer;" role="menu" class="collapsed" data-bs-toggle="collapse" data-bs-target="#withoutSpacingAccordionSix" aria-expanded="false" aria-controls="withoutSpacingAccordionSix">
                                        Section Five <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                    </div>
                                </section>
                            </div>
                            <div id="withoutSpacingAccordionSix" class="collapse" aria-labelledby="headingSix10" data-bs-parent="#withoutSpacing">
                                <div class="container py-3">
                                    <form>
                                        <div class="card-body">
                                            <span>Title:</span>
                                            <div class="form-group">
                                                <input type="text" class="form-control mt-2" name="section_5_title" value="{{old('section_5_title')}}" >
                                            </div>
                                            
                                            <span class="d-block mt-4">Description:</span>
                                            <textarea name="section_5_desc" class="form-control mt-2">{{ old('section_5_desc') }}</textarea>

                                            <span class="d-block mt-3">Select Image:</span>
                                            <div class="input-group d-flex align-items-center mt-2">
                                                <span class="input-group-btn">
                                                <a class="lfm_file btn btn-primary" style="border-top-right-radius: 0; border-bottom-right-radius: 0" data-input="section_5_thumbnail" data-preview="section_5_holder">
                                                    <i class="fa fa-picture-o"></i> Choose
                                                </a>
                                                </span>
                                                <input id="section_5_thumbnail" style="height: 36px" class="form-control" type="text" name="section_5_image">
                                            </div>
                                            <div id="section_5_holder" style="margin-top:15px; max-height:100px;"></div>
                                        </div>
                                        <button class="btn btn-md btn-success">Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingSeven10">
                                <section class="mb-0 mt-0">
                                    <div style="display: flex; justify-content: space-between; cursor: pointer;" role="menu" class="collapsed" data-bs-toggle="collapse" data-bs-target="#withoutSpacingAccordionSeven" aria-expanded="false" aria-controls="withoutSpacingAccordionSeven">
                                        Section Six <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                    </div>
                                </section>
                            </div>
                            <div id="withoutSpacingAccordionSeven" class="collapse" aria-labelledby="headingSeven10" data-bs-parent="#withoutSpacing">
                                <div class="container py-3">
                                    <form>
                                        <div class="card-body">
                                            <span>Title:</span>
                                            <div class="form-group">
                                                <input type="text" class="form-control mt-2" name="section_6_title" value="{{old('section_6_title')}}" >
                                            </div>
                                            
                                            <span class="d-block mt-4">Description:</span>
                                            <textarea name="section_6_desc" class="form-control mt-2">{{ old('section_6_desc') }}</textarea>

                                            <span class="d-block mt-3">Select Image:</span>
                                            <div class="input-group d-flex align-items-center mt-2">
                                                <span class="input-group-btn">
                                                <a class="lfm_file btn btn-primary" style="border-top-right-radius: 0; border-bottom-right-radius: 0" data-input="section_6_thumbnail" data-preview="section_6_holder">
                                                    <i class="fa fa-picture-o"></i> Choose
                                                </a>
                                                </span>
                                                <input id="section_6_thumbnail" style="height: 36px" class="form-control" type="text" name="section_6_image">
                                            </div>
                                            <div id="section_6_holder" style="margin-top:15px; max-height:100px;"></div>
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