@extends("layouts.app")


@section("content")
    <div class="container mt-3 text-light">

        <div class="row justify-content-center align-items-center">
            @foreach ($projects as $project)
                <div class=" col-4 my-3">
                    <div class="guest-card card bg-dark">
                        <div class="card-header d-flex justify-content-between align-items-center bg-dark text-light">
                            <h5>
                                {{$project->name}}
                            </h5>
                        </div>
                        <div class="card-body">
                            <p class="text-light">
                                {{$project->description}}
                            </p>
                            <a
                                href="{{ route('projects.show', $project) }}"
                                class="btn btn-outline-secondary btn-sm">
                                <i class="fas fa-binoculars"></i>
                            </a>
                        </div>
                        </div>
                    </ul>
                </div>
            @endforeach
            
        </div>
    </div>
@endsection