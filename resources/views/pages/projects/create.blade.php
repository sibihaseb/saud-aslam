@extends('layouts.master')

@section('styles')
    <!-- PRISM CSS -->
    <link rel="stylesheet" href="{{ asset('build/assets/libs/prismjs/themes/prism-coy.min.css') }}">

    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet" />
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
                        {{ __('Create Project') }}
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
                                        <input type="text" class="form-control" name="name" aria-describedby="text"
                                            value="">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="text" class="form-label">{{ __('Project Ended On') }}</label>
                                        <input type="datetime-local" id="ended_on" name="ended_on" class="form-control" />
                                        @error('ended_on')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-lg-12">
                                        <label for="text" class="form-label">{{ __('Description') }}</label>
                                        <div id="descriptioneditor"></div>
                                        @error('description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-12" style="margin-top:7%">
                                        <div class="form-group" align="right">
                                            <input type="submit" name="action_button" id="action_button"
                                                class="btn btn-warning" value="{{ __('Add') }}" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="project-dropzone dropzone" style="margin-top: 2%"></div>
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
        var createdProjectId = 6;

        const descriptionQuill = new Quill('#descriptioneditor', {
            theme: 'snow'
        });

        Dropzone.autoDiscover = false;
        const imageDropzone = new Dropzone(".project-dropzone", {
            url: "/admin/projectfile/" + createdProjectId,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        });

        // $('.project-dropzone').hide();
        $('#projectCreate').on('submit', function(event) {
            event.preventDefault();
            var action_url = '';
            var formdata = new FormData(this);
            formdata.append('description', descriptionQuill.getSemanticHTML())
            action_url = "{{ route('projects.store') }}";
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
                            '<div class="alert alert-success">Created Successful, Upload Images Now</div>';
                    }
                    createdProjectId = data.id;
                    $('#projectCreate')[0].reset();
                    $('#form_result').html(html);
                    $('.project-dropzone').show();
                    $('#projectCreate').hide();
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
    </script>
@endsection
