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
                                    <form method="post" action="{{ route('admin.partners-page.hero.update') }}">
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
                                                    <input id="thumbnail_0" style="height: 36px" value="{{$page->sections['hero_section']['bg_image'] ?? ''}}" class="form-control" type="text" name="bg_image">
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
                                @php
                                    $sections = $page->sections ?? [];

                                    // Filter out invalid items before working with them
                                    $sections = collect($sections['all'])
                                        ->filter(fn ($section) => is_array($section))
                                        ->values() // reindex properly
                                        ->all();

                                    $hasElitePartners = collect($sections)->contains(function ($section) {
                                        return ($section['type'] ?? null) === 'repeating' && ($section['group'] ?? null) === 'scaled_partners';
                                    });

                                    if (! $hasElitePartners) {
                                        $sections[] = [
                                            'type' => 'repeating',
                                            'group' => 'scaled_partners',
                                            'title' => 'Scaled Partners',
                                            'data' => [
                                                'partners' => [
                                                    [
                                                        'partner_logo' => '',
                                                        'partner_name' => '',
                                                        'partner_description' => '',
                                                        'partner_link' => '',
                                                        'details' => [
                                                            ['detail_title' => '', 'detail_subtitle' => '']
                                                        ]
                                                    ]
                                                ]
                                            ]
                                        ];
                                    }
                                @endphp
                                <section class="mb-0 mt-0">
                                    <div style="display: flex; justify-content: space-between; cursor: pointer;" role="menu" class="collapsed" data-bs-toggle="collapse" data-bs-target="#withoutSpacingAccordionTwo" aria-expanded="false" aria-controls="withoutSpacingAccordionTwo">
                                        @foreach ($sections as $sIndex => $section)
                                            @if (($section['type'] ?? null) === 'repeating' && ($section['group'] ?? null) === 'scaled_partners')
                                                {{$section['title'] ?? ''}} 
                                            @endif 
                                        @endforeach  <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                    </div>
                                </section>
                            </div>
                            <div id="withoutSpacingAccordionTwo" class="collapse" aria-labelledby="headingTwo2" data-bs-parent="#withoutSpacing">
                                <div class="container py-3">
                                     <form method="post" action="{{ route('admin.partners-page.scaled-partners.update') }}">
                                        @csrf
                                        @foreach ($sections as $sIndex => $section)
                                            @if (($section['type'] ?? null) === 'repeating' && ($section['group'] ?? null) === 'scaled_partners')
                                                <input type="hidden" name="section_index" value="{{ $sIndex }}">
                                                <span>Section Title:</span>
                                                <input type="text" class="form-control mb-2" name="section_title" value="{{ $section['title'] ?? '' }}">

                                                <div id="elite-partners-section" class="mt-3">
                                                    @foreach ($section['data']['partners'] ?? [] as $pIndex => $partner)
                                                        @php
                                                            $partnerIndex = $loop->index;
                                                        @endphp
                                                        <div class="card-body border p-3 mb-3 position-relative partner-wrapper" data-partner-index="{{ $pIndex }}">
                                                            <button type="button" class="btn partner-dlt-btn position-absolute" data-index="{{$loop->index}}" style="top:5px; right:5px;">
                                                                <i class="fa fa-trash text-danger"></i>
                                                            </button>
                                                            <span class="d-block mt-3">Select Logo:</span>
                                                            <div class="input-group d-flex align-items-center mt-2">
                                                                <span class="input-group-btn">
                                                                    <a class="lfm_file btn btn-primary" data-input="partner_{{ $pIndex }}_thumbnail" data-preview="partner_{{ $pIndex }}_holder">
                                                                        <i class="fa fa-picture-o"></i> Choose
                                                                    </a>
                                                                </span>
                                                                <input id="partner_{{ $pIndex }}_thumbnail" class="form-control" type="text" name="partner_logo[{{ $pIndex }}]" value="{{ $partner['partner_logo'] ?? '' }}">
                                                            </div>
                                                            <div id="partner_{{ $pIndex }}_holder" style="margin-top:15px; max-height:100px;">
                                                                @if (!empty($partner['partner_logo']))
                                                                    <img src="{{ asset($partner['partner_logo']) }}" style="height: 5rem;">
                                                                @endif
                                                            </div>

                                                            <span>Partner Name:</span>
                                                            <input type="text" class="form-control mb-2" name="partner_name[{{ $pIndex }}]" value="{{ $partner['partner_name'] ?? '' }}">

                                                            <span>Partner Description:</span>
                                                            <textarea class="form-control mb-2" name="partner_description[{{ $pIndex }}]">{{ $partner['partner_description'] ?? '' }}</textarea>

                                                            {{-- Partner Details --}}
                                                            <div class="elite_partner_details">
                                                                @foreach ($partner['details'] ?? [['detail_title' => '', 'detail_subtitle' => '']] as $dIndex => $detail)
                                                                    <div class="elite_partner_detail border p-3 mb-3 position-relative">
                                                                        <button type="button" class="btn partner-detail-dlt-button position-absolute" data-index="{{$loop->index}}" data-partner-index="{{$partnerIndex}}" style="top:5px; right:5px;">
                                                                            <i class="fa fa-trash text-danger"></i>
                                                                        </button>
                                                                        <span>Title:</span>
                                                                        <input type="text" class="form-control mt-2" name="detail_title[{{ $pIndex }}][]" value="{{ $detail['detail_title'] ?? '' }}">
                                                                        
                                                                        <span class="d-block mt-3">Description:</span>
                                                                        <textarea name="detail_subtitle[{{ $pIndex }}][]" class="form-control mt-2">{{ $detail['detail_subtitle'] ?? '' }}</textarea>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                            <button type="button" class="add-partner-detail btn btn-success mt-3 mx-auto d-block" data-partner-index="{{ $pIndex }}">Add Partner Detail</button>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @endif
                                        @endforeach
                                        <button class="btn btn-md btn-success">Save</button>
                                    </form>
                                    <button type="button" class="btn btn-success mt-3 mx-auto d-block" id="add-elite-partner">Add Elite Partner</button>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-2">
                            <div class="card-header" id="headingFive10">
                                <section class="mb-0 mt-0">
                                    @php
                                        $sections = $page->sections ?? [];

                                        // Filter out invalid items before working with them
                                        $sections = collect($sections['all'])
                                            ->filter(fn ($section) => is_array($section))
                                            ->values() // reindex properly
                                            ->all();

                                        $hasElitePartners = collect($sections)->contains(function ($section) {
                                            return ($section['type'] ?? null) === 'repeating' && ($section['group'] ?? null) === 'all_partners';
                                        });

                                        if (! $hasElitePartners) {
                                            $sections[] = [
                                                'type' => 'repeating',
                                                'group' => 'all_partners',
                                                'title' => 'All Partners',
                                                'partners' => [
                                                    [
                                                        'partner_logo' => '',
                                                        'partner_content' => ''
                                                    ]
                                                ]
                                            ];
                                        }
                                    @endphp
                                    <div style="display: flex; justify-content: space-between; cursor: pointer;" role="menu" class="collapsed" data-bs-toggle="collapse" data-bs-target="#withoutSpacingAccordionFive" aria-expanded="false" aria-controls="withoutSpacingAccordionFive">
                                        @foreach ($sections as $sIndex => $section)
                                            @if (($section['type'] ?? null) === 'repeating' && ($section['group'] ?? null) === 'all_partners')
                                                {{$section['title'] ?? ''}} 
                                            @endif 
                                        @endforeach<div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                    </div>
                                </section>
                            </div>
                            <div id="withoutSpacingAccordionFive" class="collapse" aria-labelledby="headingFive10" data-bs-parent="#withoutSpacing">
                                <div class="container py-3">
                                    <form method="POST" action="{{ route('admin.partners-page.all-partners.update') }}">
                                        @csrf
                                        @foreach ($sections as $sIndex => $section)
                                            @if (($section['type'] ?? null) === 'repeating' && ($section['group'] ?? null) === 'all_partners')
                                                <div class="card-body">
                                                    <span>Section Title:</span>
                                                    <input type="text" class="form-control mb-2" value="{{$section['title']}}" name="section_title">
                                                    <div id="allPartnersContainer" class="mt-3">
                                                        @if (isset($section['data']))
                                                            @foreach ($section['data']['partners'] as $partner)
                                                                <div class="partner-container border p-3 mb-3 position-relative">
                                                                    <button type="button" class="btn all-partners-dlt-btn position-absolute" data-index="{{$loop->index}}" style="top:5px; right:5px;">
                                                                        <i class="fa fa-trash text-danger"></i>
                                                                    </button>
                                                                    <span>Partner Logo:</span>
                                                                    <div class="input-group d-flex align-items-center mt-2">
                                                                        <span class="input-group-btn">
                                                                        <a class="lfm_file btn btn-primary" style="border-top-right-radius: 0; border-bottom-right-radius: 0" data-input="partner_thumbnail_1" data-preview="partner_holder_1">
                                                                            <i class="fa fa-picture-o"></i> Choose
                                                                        </a>
                                                                        </span>
                                                                        <input id="partner_thumbnail_1" style="height: 36px" class="form-control" value="{{$partner['partner_logo']}}" type="text" name="partner_logo[]">
                                                                    </div>
                                                                    <div id="partner_holder_1" style="margin-top:15px; max-height:100px;">
                                                                        @if (!empty($partner['partner_logo']))
                                                                            <img src="{{ asset($partner['partner_logo']) }}" style="height: 5rem;">
                                                                        @endif
                                                                    </div>
                                                                    
                                                                    <span class="d-block mt-4">Content:</span>
                                                                    <textarea id="summernote-0" name="partner_content[]" class="form-control summernote mt-2">{{$partner['partner_content']}}</textarea>
                                                                </div>
                                                            @endforeach
                                                        @else
                                                            <div class="partner-container border p-3 mb-3 position-relative">                                            
                                                                <span>Partner Logo:</span>
                                                                <div class="input-group d-flex align-items-center mt-2">
                                                                    <span class="input-group-btn">
                                                                    <a class="lfm_file btn btn-primary" style="border-top-right-radius: 0; border-bottom-right-radius: 0" data-input="partner_thumbnail_1-0" data-preview="partner_holder_1-0">
                                                                        <i class="fa fa-picture-o"></i> Choose
                                                                    </a>
                                                                    </span>
                                                                    <input id="partner_thumbnail_1-0" style="height: 36px" class="form-control" type="text" name="partner_logo[]">
                                                                </div>
                                                                <div id="partner_holder_1-0" style="margin-top:15px; max-height:100px;"></div>
                                            
                                                                <span class="d-block mt-4">Content:</span>
                                                                <textarea id="${id}" name="partner_content[]" class="form-control summernote mt-2"></textarea>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                        <button class="btn btn-md btn-success">Save</button>
                                    </form>
                                    <button type="button" class="btn btn-success mt-3 mx-auto d-block" id="add-partner">Add Partner</button>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="card mt-2">
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
                        </div> --}}
                        <div class="card mt-2">
                            <div class="card-header" id="headingfeature1">
                                <section class="mb-0 mt-0">
                                    @php
                                        $sections = $page->sections ?? [];

                                        // Filter out invalid items before working with them
                                        $sections = collect($sections)
                                            ->filter(fn ($section) => is_array($section))
                                            ->values() // reindex properly
                                            ->all();

                                        $hasCapabilitySec = collect($sections)->contains(function ($section) {
                                            return ($section['type'] ?? null) === 'text' && ($section['group'] ?? null) === 'capabilities';
                                        });

                                        if (! $hasCapabilitySec) {
                                            $sections[] = [
                                                'type' => 'text',
                                                'group' => 'capabilities',
                                                'title' => 'Related Capabilities',
                                            ];
                                        }
                                    @endphp
                                    <div style="display: flex; justify-content: space-between; cursor: pointer;" role="menu" class="collapsed" data-bs-toggle="collapse" data-bs-target="#withoutSpacingAccordionFeature1" aria-expanded="false" aria-controls="withoutSpacingAccordionFeature1">
                                        @foreach ($sections as $sIndex => $section)
                                            @if (($section['type'] ?? null) === 'text' && ($section['group'] ?? null) === 'capabilities')
                                                {{$section['title'] ?? ''}} 
                                            @endif 
                                        @endforeach  <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                    </div>
                                </section>
                            </div>
                            <div id="withoutSpacingAccordionFeature1" class="collapse" aria-labelledby="headingfeature1" data-bs-parent="#withoutSpacing">
                                <div class="container py-3">
                                    <form method="POST" action={{route('admin.partners-page.capabilities.update')}}>
                                        @csrf
                                        <span>Section Title:</span>
                                        @foreach ($sections as $sIndex => $section)
                                            @if (($section['type'] ?? null) === 'text' && ($section['group'] ?? null) === 'capabilities')
                                                <input type="text" class="form-control mb-2" value="{{$section['title'] ?? ''}}" name="section_title">
                                            @endif
                                        @endforeach
                                        @error('section_title')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror

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
    <form id="scaled-partner-dlt-form" method="POST">
        @csrf
        @method('DELETE')
    </form>
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
                                </button>`;

                let $partnerWrapper = $(this).closest('.partner-wrapper'); // Get this partner's wrapper
                let partnerIndex = $partnerWrapper.data('partner-index'); // Get the index of this partner

                let $detailsWrapper = $partnerWrapper.find('.elite_partner_details'); // Container for this partner's details
                console.log('$detailsWrapper',$detailsWrapper);
                let $firstDetail = $detailsWrapper.find('.elite_partner_detail').first(); // Template to clone
                console.log('$firstDetail',$firstDetail);
                let $newDetail = $firstDetail.clone();
                console.log('$newDetail', $newDetail);

                // Reset and clean the cloned detail
                $newDetail.addClass('mt-3');
                $newDetail.prepend(deleteBtn);
                $newDetail.find('input[type="text"], textarea').val('');

                // Ensure name attributes use correct partner index
                $newDetail.find('input[type="text"]').attr('name', `detail_title[${partnerIndex}][]`);
                $newDetail.find('textarea').attr('name', `detail_subtitle[${partnerIndex}][]`);

                $detailsWrapper.append($newDetail);
            });


            $(document).on('click', '.partner-detail-dlt-btn', function(){
                if(confirm('Do you want to delete this?')){
                    $(this).closest('.elite_partner_detail').remove();
                }
            })

            $('#add-elite-partner').click(function() {
                // Get the current number of partner sections
                let partnerCount = $('#elite-partners-section').find('.card-body').length;

                // Create a new HTML structure for the new partner
                let html = `
                    <div class="card-body border p-3 mb-3 position-relative partner-wrapper" data-partner-index="${partnerCount}">
                        <button class="btn partner-dlt-btn-dyn position-absolute" style="top:5px; right:5px;">
                            <i class="fa fa-trash text-danger"></i>
                        </button>
                        <span class="d-block mt-3">Select Logo:</span>
                        <div class="input-group d-flex align-items-center mt-2">
                            <span class="input-group-btn">
                                <a class="lfm_file btn btn-primary" data-input="partner_${partnerCount}_thumbnail" data-preview="partner_${partnerCount}_holder">
                                    <i class="fa fa-picture-o"></i> Choose
                                </a>
                            </span>
                            <input id="partner_${partnerCount}_thumbnail" style="height: 36px" class="form-control" type="text" name="partner_logo[${partnerCount}]">
                        </div>
                        <div id="partner_${partnerCount}_holder" style="margin-top:15px; max-height:100px;"></div>

                        <span>Partner Name:</span>
                        <input type="text" class="form-control mb-2" name="partner_name[]" value="{{ $partner['partner_name'] ?? '' }}">

                        <span>Partner Description:</span>
                        <textarea class="form-control mb-2" name="partner_description[]">{{ $partner['partner_description'] ?? '' }}</textarea>

                        <div class="elite_partner_details">
                            <div class="elite_partner_detail border p-3 mb-3 position-relative" data-detail-index="0">
                                <span>Title:</span>
                                <input type="text" class="form-control mt-2" name="detail_title[${partnerCount}][]">
                                
                                <span class="d-block mt-3">Description:</span>
                                <textarea name="detail_subtitle[${partnerCount}][]" class="form-control mt-2"></textarea>
                            </div>
                        </div>

                        <button type="button" class="add-partner-detail btn btn-success mt-3 mx-auto d-block" data-partner-index="${partnerCount}">Add Partner Detail</button>
                    </div>
                `;

                // Append the new partner HTML
                let newHtml = $(html);
                newHtml.find('input[type="text"], textarea').val(''); // Clear values
                $('#elite-partners-section').append(newHtml);

                // Initialize the file manager for the new file input
                $('.lfm_file').filemanager('image');
            });


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
                    fontSizes: ['8', '10', '12', '14', '16', '18', '20', '24', '28', '32', '36', '48', '64', '72'],
                    colors: [
                        ['#FFFFFF', '#cccccc'], // Plain white and soft off-white
                    ],
                    colorNames: ['White', 'Soft White'],
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

            $(document).on('click', '.partner-dlt-btn-dyn', function(){
                if(confirm('Do you want to delete this partner?')) {
                    $(this).closest('.partner-wrapper').remove();
                }
            })

            $(document).on('click', '.partner-dlt-btn', function(){
                if(confirm('Do you want to delete this partner?')) {
                    let index = $(this).data('index');
                    let dltForm = $('#scaled-partner-dlt-form');
                    dltForm.attr('action', `/admin/partners-page/scaled-partners/delete/${index}`)
                    dltForm.submit();
                }
            })

            $(document).on('click', '.partner-detail-dlt-button', function(){
                if(confirm('Do you want to delete this partner detail?')) {
                    let index = $(this).data('index');
                    let partnerIndex = $(this).data('partner-index');
                    let dltForm = $('#scaled-partner-dlt-form');
                    dltForm.attr('action', `/admin/partners-page/scaled-partners/detail/delete/${partnerIndex}/${index}`)
                    dltForm.submit();
                }
            })

            $(document).on('click', '.all-partners-dlt-btn', function(){
                if(confirm('Do you want to delete this partners?')) {
                    let index = $(this).data('index');
                    let dltForm = $('#scaled-partner-dlt-form');
                    dltForm.attr('action', `/admin/partners-page/all-partners/detail/delete/${index}`);
                    dltForm.submit();
                }
            })
        })
    </script>
@endsection