@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>{{ $project->name }}</h2>
                @if ($project->cover_image !== null)
                    <img src="{{ asset('/storage/' . $project->cover_image) }}" alt="{{ $project->name }}" width="100">
                @else
                    <img src="{{ asset('/img/public/img/aaaa.jpg') }}" alt="{{ $project->name }}" width="100">
                @endif
                <p>{{ $project->type ? $project->type->name : 'Without type' }}</p>
                <p>{{ $project->slug }}</p>
                <p>{{ $project->description }}</p>
            </div>
        </div>
    </div>
@endsection
