@extends("layouts.app")


@section("content")
    <div class="container mt-3 text-light">

        <div class="row">
            <div class="col">
                
            <ul class="card bg-dark">
                @foreach ($projects as $project)
                    <div class="card-header d-flex justify-content-between align-items-center bg-dark text-light">
                        <h5>
                            {{$project->name}}
                        </h5>
                    </div>
                    <div class="card-body">
                        <p>
                            {{$project->description}}
                        </p>
                        <a
                            href="{{ route('guest.projects.show', $project) }}"
                            class="btn btn-outline-secondary btn-sm">
                            <i class="fas fa-binoculars"></i>
                        </a>
                    </div>
                    </div>
                @endforeach
            </ul>
            </div>
            
        </div>
    </div>
@endsection