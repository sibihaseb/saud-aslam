@extends('layouts.master')

@section('styles')
    <!-- PRISM CSS -->
    <link rel="stylesheet" href="{{ asset('build/assets/libs/prismjs/themes/prism-coy.min.css') }}">

    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet" />
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <script>
        Dropzone.autoDiscover = false;
    </script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        .gallery {
            width: 100%;
            height: 300px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .image-wrapper {
            position: relative;
            width: 20%;
            height: 100%;
            margin: 0 5px;
            overflow: hidden;
            border-radius: 10px;
        }

        .image-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 10px;
            border: 2px solid #fff;
            transition: all ease-out 0.5s;
            cursor: pointer;
        }

        .image-wrapper img:hover {
            width: 150%;
            /* Image zoom effect */
        }

        .delete-btn {
            position: absolute;
            top: 8px;
            right: 8px;
            background: rgba(255, 0, 0, 0.8);
            border: none;
            color: white;
            border-radius: 50%;
            width: 25px;
            height: 25px;
            cursor: pointer;
            font-size: 18px;
            line-height: 25px;
            text-align: center;
            padding: 0;
            z-index: 2;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid">
        <nav class="py-4">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="{{ url('/home') }}">{{ __('Home') }}</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/admin/projects') }}">{{ __('Projects') }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    {{ __('Create Project') }}</li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h5 class="card-title fw-semibold mb-4">
                        {{ __('Edit Project') }}
                    </h5>
                </div>
                <div class="card">
                    <div class="card-body">
                        <span id="form_result"></span>
                        <form id="projectCreate" action="{{ route('projects.store') }}" method="POST"
                            enctype="multipart/form-data" class="mb-4">
                            @csrf
                            <div class="col-lg-12 mt-3 mb-4">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label for="text" class="form-label">{{ __('Name') }}</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            aria-describedby="text" value="{{ $project->name }}">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="text" class="form-label">{{ __('Project Ended On') }}</label>
                                        <input type="datetime-local" id="ended_on" name="ended_on" class="form-control"
                                            value="{{ $project->ended_on }}" />
                                        @error('ended_on')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-lg-12">
                                        <label for="text" class="form-label">{{ __('Description') }}</label>
                                        <div id="descriptioneditor">{!! $project->description !!}</div>
                                        @error('description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="images-upload">
                                            <div class="project-dropzone dropzone" style="margin-top: 2%"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12" style="margin-top:7%">
                                        <div class="form-group" align="right">
                                            <input type="submit" name="action_button" id="action_button"
                                                class="btn btn-warning" value="{{ __('Update') }}" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <div class="row">
                            <div class="col-lg-12">
                                @if ($allimages && count($allimages) > 1)
                                    <div class="gallery">
                                        @foreach ($allimages as $key => $image)
                                            <div class="image-wrapper">
                                                <img src="{{ Storage::url($image) }}" alt="{{ $key }}" />
                                                <button type="button" onclick="deleteImage('{{ $key }}')"
                                                    class="delete-btn">
                                                    &times;
                                                </button>
                                            </div>
                                        @endforeach
                                    </div>
                                @elseif (!empty($allimages[0]))
                                    <div class="single-image-wrapper" style="position: relative;">
                                        <img src="{{ Storage::url($allimages[0]) }}" width="100%" height="50%" />
                                        <button type="button" onclick="deleteImage(0)" class="delete-btn">
                                            &times;
                                        </button>
                                    </div>
                                @else
                                    <!-- No images -->
                                @endif
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <script src="https://cdn.ckeditor.com/4.17.2/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('brief'); // Initialize CKEditor for the "brief" textarea
        CKEDITOR.replace('content'); // Initialize CKEditor for the "content" textarea
    </script> --}}
@endsection
@section('scripts')
    <!-- PRISM JS -->
    <script src="{{ asset('build/assets/libs/prismjs/prism.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>
    @vite('resources/assets/js/prism-custom.js')
    <script>
        var createdProjectId = {!! $project->id !!};

        const descriptionQuill = new Quill('#descriptioneditor', {
            theme: 'snow'
        });
        const imageDropzone = new Dropzone(".project-dropzone", {
            url: "/admin/projectfile/" + createdProjectId,
            headers: {
                'X-CSRF-TOKEN': document.querySelector(
                    'meta[name="csrf-token"]').getAttribute('content')
            },
            acceptedFiles: 'image/*'
        });
        // $('.images-upload').hide();
        $('#projectCreate').on('submit', function(event) {
            event.preventDefault();
            var action_url = '';
            var formdata = new FormData(this);
            formdata.append('description', descriptionQuill.getSemanticHTML());
            formdata.append("_method", "PATCH");
            action_url = "{{ url('admin/projects') }}" + "/" + createdProjectId;
            $.ajax({
                url: action_url,
                method: "POST",
                data: formdata,
                mimeType: "multipart/form-data",
                cache: false,
                contentType: false,
                processData: false,
                dataType: "json",
                success: function(data) {
                    var html = '';
                    if (data) {
                        html =
                            '<div class="alert alert-success">Updated Successfull</div>';
                    }
                    // $('#projectCreate')[0].reset();
                    $('#name').val(data.name);
                    $('#ended_on').val(data.ended_on);
                    console.log(data.description);
                    descriptionQuill.setText(data.description)
                    $('#form_result').html(html);
                },
                error: function(data) {
                    console.log('data', data)
                    if (data.responseJSON.message) {
                        html = '<div class="alert alert-danger">';
                        html += '<span>' + data.responseJSON.message + '</span>'
                        html += '</div>';
                        $('#form_result').html(html);
                    }

                }
            });
        });

        function deleteImage(key) {
            if (confirm('Are you sure you want to delete this image?')) {
                $.ajax({
                    url: '{{ route('image.delete') }}', // Your Laravel route
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector(
                            'meta[name="csrf-token"]').getAttribute('content')
                    },
                    data: {
                        project_id: {{ $project->id }},
                        key: key
                    },
                    success: function(response) {
                        alert(response.message);
                        // Optionally: remove the image from the DOM
                        $('button[onclick="deleteImage(\'' + key + '\')"]').closest('.image-wrapper').remove();
                    },
                    error: function(xhr) {
                        alert('Something went wrong while deleting!');
                    }
                });
            }
        }
    </script>
@endsection
