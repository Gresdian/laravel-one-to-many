@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>{{ $type->name }}</h2>
                <p>{{ $type->slug }}</p>
                <div class="row">
                    @forelse ($type->projects as $project)
                        <div class="col-12 col-md-3">
                            <div class="card">
                                <img src="{{ $project->cover_image ? asset('/storage/' . $project->cover_image) : asset('/img/aaaa.jpg') }}"
                                    class="card-image-top" alt="">
                                <div class="card-body">
                                    <h4>{{ $project->name }}</h4>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12">
                            <h3>Nothing projects for this category</h3>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
