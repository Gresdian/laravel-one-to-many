@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>{{ $project->name }}</h2>
                <img src="{{ $project->cover_image !== null ? asset('/storage/' . $project->cover_image) : asset('/img/aaaa.jpg') }}"
                    alt="{{ $project->name }}" width="100">
                <a
                    href="{{ $project->cover_image !== null ? asset('/storage/' . $project->cover_image) : asset('/img/aaaa.jpg') }}">Download
                    image</a>
                <p>{{ $project->type ? $project->type->name : 'Without type' }}</p>
                <p>{{ $project->slug }}</p>
                <p>{{ $project->description }}</p>
            </div>
        </div>
    </div>
@endsection
