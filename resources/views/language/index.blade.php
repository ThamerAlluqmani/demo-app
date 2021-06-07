@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>language</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('language.create') }}"> Create New Language</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Image</th>
        </tr>
        @foreach ($language as $lang)
            <tr>
                <td>{{ $lang->title }}</td>
                <td>{{ $lang->description }}</td>
                <td>{{$lang->img}}</td>
            </tr>
        @endforeach
    </table>

@endsection
