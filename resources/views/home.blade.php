@extends('layout.master')

@section('content')
<div class="container-fluid home-container">
    <h1 class="text-center">Brainster.xyz Labs</h1>
    <p class="text-center">Проекти од академиите на Brainster</p>
</div>
<div class="container margin-top-40">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @foreach ($projects as $project)
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail thumbnail-home-page">
                    <a href="{{ $project->project_url }}" target="_blank">
                        <img src="{{ $project->image_url }}" alt="..." width="120px">
                        <div class="caption">
                            <h5 class="text-center">{{ $project->name }}</h5>
                            <h6 class="text-center">{{ $project->subtitle }}</h6>
                            <p class="text-center font-10">{{ $project->description }}</p>
                        </div>
                    </a>
                    </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection