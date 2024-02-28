@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Edit project</h2>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="list-unstyled">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <form action="{{ route('admin.projects.update', $project->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                @endif
                @method('PUT')
                <div class="form-group my-3">
                    <label for="title" class="control-label">Name</label>
                    <input type="text" name="name" id="name" placeholder="name"
                        value="{{ old('name') ?? $project->name }}" class="form-control @error('name') is-invalid @enderror"
                        required>
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group my-3">
                    @if ($project->cover_image != null)
                        <div class="my-3">
                            <img src="{{ asset('/storage/' . $project->cover_image) }}" alt="{{ $project->name }}"
                                width="100">
                        </div>
                    @endif
                    <label for="cover_image" class="control-label">Update an image</label>
                    <input class="form-control form-control-sm @error('img') is-invalid border-danger @enderror"
                        type="file" name="cover_image" id="cover_image" accept="image/*">
                    @error('cover_image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group my-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                        cols="100" rows="10" value="{{ old('description') ?? $project->description }}"></textarea>
                    @error('description')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="row my-3">
                    <div class="col-6">
                        <div class="form-group">
                            <label class="form-label my-label" for="startDateProject">Start Date Project</label>
                            <input class="form-control" type="date" name="date_start" id="startDateProject"
                                value="{{ $project->date_start }}" required>
                        </div>

                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label class="form-label my-label" for="endDateProject">Finish Date Project</label>
                            <input class="form-control" type="date" name="date_end" id="endDateProject"
                                value="{{ $project->date_end }}" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-sm btn-success">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
