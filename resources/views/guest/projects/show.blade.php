@extends("layouts.app")


@section("content")
    <div class="container py-5 text-light">
        <div class="row">
            <div class="card my-5 bg-dark text-light">

                <h2 class="text-center my-3">
                    {{ $project->name }}
                </h2>

                <div class="card-body">
                    <p>
                        {{$project->description}}
                    </p>

                    <div class="d-flex justify-content-between align-items-center mt-5">
                        <a href="{{ route("guest.projects.index") }}" class="btn btn-outline-secondary">
                            <i class="fas fa-arrow-left"></i>
                            Torna alla lista Progetti
                        </a>
    
                        </div>
                    </div>
                        
                </div>
            </div>

        </div>
        </div>
    </div>
@endsection