@extends('admin.layouts.main')
    @section('content')
        <div class="row layout-spacing">
            <div class="col-lg-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-content widget-content-area">
                        <div class="card">
                            <h4 class="text-center mt-3">Create Blog Post</h4>
                            <div class="container py-3">
                                <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="d-flex justify-content-between align-items-baseline">
                                        <div class="form-group" style="width: 49%">
                                            <span class="d-block">Blog Title:</span>
                                            <input type="text" name="title" placeholder="Enter blog title" class="form-control mt-2" id="title">
                                            @error('title')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group" style="width: 49%">
                                            <span class="d-block mt-3">Blog Slug:</span>
                                            <input type="text" name="slug" placeholder="blog slug" class="form-control mt-2" id="slug" readonly>
                                            @error('slug')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-baseline">
                                        <div class="form-group" style="width: 49%">
                                            <span class="d-block mt-3">Category:</span>
                                            <input type="text" name="category" class="form-control mt-2">
                                            @error('category')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group" style="width: 49%">
                                            <span class="d-block mt-3">Status:</span>
                                            <select class="form-control mt-2" name="status">
                                                <option value="">Select Status</option>
                                                <option value="draft">Draft</option>
                                                <option value="published">Published</option>  
                                                <option value="scheduled">Scheduled</option>                                          
                                            </select>
                                            @error('status')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <span class="d-block mt-3">Meta Description:</span>
                                    <textarea class="form-control mt-2" name="meta_description" id="meta_description" cols="30" rows="5"></textarea>
                                    @error('meta_description')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <span class="d-block mt-3">Keywords/Tags:</span>
                                    <textarea class="form-control mt-2" name="keywords" id="keywords" cols="30" rows="5"></textarea>
                                    @error('keywords')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <span class="d-block mt-3">Blog Thumbnail:</span>
                                    <div class="input-group d-flex align-items-center mt-2">
                                        <span class="input-group-btn">
                                        <a class="lfm_file btn btn-primary" style="border-top-right-radius: 0; border-bottom-right-radius: 0" data-input="blog_thumbnail" data-preview="blog_holder">
                                            <i class="fa fa-picture-o"></i> Choose
                                        </a>
                                        </span>
                                        <input id="blog_thumbnail" style="height: 36px" class="form-control" type="text" name="thumbnail">
                                    </div>
                                    <div id="blog_holder" style="margin-top:15px; max-height:100px;"></div>
                                    @error('thumbnail')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <span class="d-block mt-3">Blog Body:</span>
                                    <textarea name="blog_body" class="form-control summernote mt-2"></textarea>
                                    @error('blog_body')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <button class="btn btn-md btn-success mt-3">Publish</button>
                                </form>
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
        $(document).ready(function(){
            $('.lfm_file').filemanager('image');
            function initializeSummernote(selector) {
                $(selector).summernote({
                    height: 400,
                    toolbar: [
                        ['style', ['style']],
                        ['font', ['bold', 'italic', 'underline', 'clear']],
                        ['fontsize', ['fontsize']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['insert', ['link', 'lfm']],
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

            $('#title').on('input',function(){
                let title = $(this).val();
                let slug = title
                    .toLowerCase()                      // Convert to lowercase
                    .replace(/\s+/g, '-')                // Replace spaces with hyphens
                    .replace(/[^\w\-]+/g, '')            // Remove any non-alphanumeric characters except hyphens
                    .replace(/--+/g, '-')                // Replace multiple hyphens with a single one
                    .replace(/^-+/, '')                  // Remove hyphens at the start
                    .replace(/-+$/, '');  
                $('#slug').val(slug);
            })
        })
    </script>
    @endsection