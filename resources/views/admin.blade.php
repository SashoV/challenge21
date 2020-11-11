@extends('layout.master')
@section('content')
<div class="container admin-container">
    @if (\Session::has('notValidAdmin'))
    <div class="row">
        <div class="alert alert-danger col-md-4 col-md-offset-4" role="alert">{{ \Session::get('notValidAdmin') }}</div>
    </div>
    @endif
    @if ($errors->any())
    <div class="row">
        <div class="alert alert-danger col-md-4 col-md-offset-4" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    @endif
    <form method="POST" action="{{ route('login') }}" class="col-md-4 col-md-offset-4 admin-form">
        @csrf
        <div class="form-group">
            <label for="email">Е-мејл</label>
            <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}">
        </div>
        <div class="form-group">
            <label for="password">Пасворд</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-default long-btn">Логирај се</button>
    </form>
</div>
@endsection