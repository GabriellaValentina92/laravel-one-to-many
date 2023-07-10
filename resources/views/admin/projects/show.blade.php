@extends('admin.layouts.base')

@section('contents')

    <h1>{{ $project->title }}</h1>
    <h3>Category: {{$project->type->project_type}}</h3>
    <img src="{{ $project->project_image }}" alt="{{ $project->project_image }}">
    <p>{{ $project->project_description }}</p>
    <div>Per andare alla repository del progetto <a href="https://github.com/GabriellaValentina92?tab=repositories">Clicca qui</a></div>
    <a class="btn btn-primary" href="{{route('admin.projects.edit', ['project' => $project->id ])}}">Edit</a>

@endsection