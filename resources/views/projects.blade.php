@extends('layout.master')
@section('content')
<div class="container">
    <div class="col-md-8 col-md-offset-2">
        <div class="row">
            <ul class="nav nav-tabs">
                <li role="presentation"><a href="{{ route('create') }}">Додај</a></li>
                <li role="presentation" class="active"><a href="">Измени</a></li>
                <li role="presentation"><a href="{{ route('logout') }}">Одјави се</a></li>
            </ul>
        </div>
        <div class="row">
            <h3>Измени постоечки проект:</h3>
        </div>
        <div class="row margin-top-40">
            @foreach ($projects as $project)
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail thumbnail-projects-page" id="thumb-{{ $project->id }}">
                    <img src="{{ $project->image_url }}" alt="..." width="120px">
                    <div class="caption test">
                        <h4 class="text-center">{{ $project->name }}</h4>
                        <h5 class="text-center">{{ $project->subtitle }}</h5>
                        <p class="text-center font-10">{{ $project->description }}</p>
                        <p class="text-center thumb-buttons">
                            <button class="btn btn-default edit" type="button" id="show-form-{{ $project->id }}"
                                onclick="openForm({{ $project->id }})"><span class="glyphicon glyphicon-pencil"
                                    aria-hidden="true"></span></button>
                            <button class="btn btn-default delete" data-toggle="modal" data-target="#askToDelete{{ $project->id }}"><span
                                    class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                        </p>
                    </div>
                </div>

                <div class="hidden-content" id="hidden-content-{{ $project->id }}">
                    <form method="POST" action="/projects/{{ $project->id }}" class="edit-form text-center">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Име</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $project->name }}">
                        </div>
                        <div class="form-group">
                            <label for="subtitle">Поднаслов</label>
                            <input type="text" class="form-control" id="subtitle" name="subtitle"
                                value="{{ $project->subtitle }}">
                        </div>
                        <div class="form-group">
                            <label for="image_url">Слика</label>
                            <input type="text" class="form-control" id="image_url" name="image_url"
                                placeholder="http://" value="{{ $project->image_url }}">
                        </div>
                        <div class="form-group">
                            <label for="project_url">URL</label>
                            <input type="text" class="form-control" id="project_url" name="project_url"
                                placeholder="http://" value="{{ $project->project_url }}">
                        </div>
                        <label for="description">Опис</label>
                        <textarea class="form-control" name="description" id="description"
                            rows="3">{{ $project->description }}</textarea><br>
                        <div class="text-center edit-form-buttons">
                            <button type="submit" class="btn btn-default">Зачувај</button>
                            <button type="button" class="btn btn-default" id="cancel-btn-{{ $project->id }}"
                                onclick="closeForm({{ $project->id }})">Откажи</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="askToDelete{{ $project->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Избриши</h4>
                        </div>
                        <form action="/projects/{{ $project->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <div class="modal-body">
                                <h5>Дали сте сигурни дека сакате да го избришете проектот?</h5>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default gray-btn"
                                    data-dismiss="modal">Откажи</button>
                                <button type="submit" class="btn btn-primary yellow-btn">Избриши</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection