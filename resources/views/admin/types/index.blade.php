@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="col-12">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h2>Projects</h2>
                        </div>
                        <div>
                            <a href="{{ route('admin.projects.create') }}" class="btn btn-sm btn-primary">Add project</a>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <table class="table table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Types count</th>
                                <th>Function</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($types as $type)
                                <tr>
                                    <td>{{ $type->id }}</td>
                                    <td>{{ $type->name }}</td>
                                    <td>{{ $type->slug }}</td>
                                    <td>{{ count($type->projects) }}</td>
                                    <td>
                                        <div class="d-flex">

                                            <a href="{{ route('admin.types.show', ['type' => $type->id]) }}"
                                                title="Visualizza" class="btn btn-sm btn-square btn-primary me-1">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            {{-- <a href="{{ route('admin.projects.edit', ['project' => $project->id]) }}"
                                                title="Modifica" class="btn btn-sm btn-square btn-warning me-1">
                                                <i class="fas fa-edit "></i>
                                            </a> --}}
                                            <form action="{{ route('admin.types.destroy', ['type' => $type]) }}"
                                                method="post"
                                                onsubmit="return confirm('Sei sicuro di voler eliminare questo project')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">Elimina</button>
                                            </form>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{--     @include('admin.projects.partials.modal_delete') --}}
@endsection
