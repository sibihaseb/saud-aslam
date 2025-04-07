@extends('layouts.front-header')
@section('content')
    <div class="content">
        <div class="row" id="js-macy">
            @foreach ($projects as $project)
                <div class="album-item">
                    <a class="album-link" href="{{ route('project.display', $project->id) }}">
                        <img class="album-image" src="{{ asset('storage/' . $project->images) }}" alt="Image">
                        <div class="album-inner">
                            <div class="album-title title-font">{{ $project->name }}</div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
