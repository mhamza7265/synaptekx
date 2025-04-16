@extends('admin.layouts.main')
@section('content')
<div class="content-wrapper">
    <div class="row layout-top-spacing">
        <div class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-content widget-content-area icon-accordion-content">
                    <h4 class="text-center pb-2">Blog Page Content</h4>
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
                                                    <input id="thumbnail_0" style="height: 36px" class="form-control" type="text" name="bg_image">
                                                </div>
                                                <div id="holder_0" style="margin-top:15px; max-height:100px;"></div>
                                        
                                                <span class="d-block mt-3">Title</span>
                                                <input type="text" class="form-control mb-2" name="hero_title">
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
                                        SynaptekX Latest Tech Insight For You  <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                    </div>
                                </section>
                            </div>
                            <div id="withoutSpacingAccordionTwo" class="collapse" aria-labelledby="headingTwo2" data-bs-parent="#withoutSpacing">
                                <div class="container py-3">
                                    <form>
                                        <div class="card-body">
                                            <span>Section Title:</span>
                                            <input type="text" class="form-control mt-2" name="section_title" >
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