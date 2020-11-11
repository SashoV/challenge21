@extends('layout.master')
@section('content')
<div class="container">
    <div class="col-md-8 col-md-offset-2">
        <div class="row">
            <ul class="nav nav-tabs">
                <li role="presentation" class="active"><a href="{{ route('create') }}">Додај</a></li>
                <li role="presentation"><a href="{{ route('projects') }}">Измени</a></li>
                <li role="presentation"><a href="{{ route('logout') }}">Одјави се</a></li>
            </ul>
        </div>
        <div class="row">
            <h3>Додај нов проект:</h3>
        </div>
    </div>

    @if (\Session::has('success'))
    <div class="row">
    <div class="alert alert-success col-md-6 col-md-offset-3" role="alert">{{ \Session::get('success') }}</div> 
    </div>   
    @endif
    

    @if ($errors->any())
    <div class="row">
        <div class="alert alert-danger col-md-6 col-md-offset-3" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    @endif
    <form method="POST" action="{{ route('store') }}" class="col-md-6 col-md-offset-3">
        @csrf
        <div class="form-group">
            <label for="name">Име</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
        </div>
        <div class="form-group">
            <label for="subtitle">Поднаслов</label>
            <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{ old('subtitle') }}">
        </div>
        <div class="form-group">
            <label for="image_url">Слика</label>
            <input type="text" class="form-control" id="image_url" name="image_url" placeholder="http://"
                value="{{ old('image_url') }}">
        </div>
        <div class="form-group">
            <label for="project_url">URL</label>
            <input type="text" class="form-control" id="project_url" name="project_url" placeholder="http://"
                value="{{ old('project_url') }}">
        </div>
        <label for="description">Опис</label>
        <textarea class="form-control" name="description" id="description"
            rows="3">{{ old('description') }}</textarea><br>
        <button type="submit" class="btn btn-default long-btn">Додај</button>
    </form>
</div>
@endsection