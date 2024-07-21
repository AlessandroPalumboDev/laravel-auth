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
                        <a href="{{ route("admin.projects.index") }}" class="btn btn-outline-secondary">
                            <i class="fas fa-arrow-left"></i>
                            Torna alla lista Progetti
                        </a>
    
                        <div class="">
                            <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-outline-warning">
                                <i class="far fa-pen-to-square"></i>
                                Modifica Progetto
                            </a>

                            <button type="button" class="btn btn-outline-danger "data-bs-toggle="modal" data-bs-target="#exampleModal{{$project->id}}">
                                <i class="far fa-trash-can"></i>
                                Elimina Progetto
                            </button>
                        </div>
                    </div>
                        
                </div>
            </div>

            <div class="modal fade" id="exampleModal{{$project->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog ">
                  <div class="modal-content bg-dark">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5 text-uppercase" id="exampleModalLabel">Attenzione!</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <p>
                        Se premi su "
                        <span class="text-danger">
                            Elimina 
                        </span>
                        " il progetto verrà eliminato definitivamente
                      </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Chiudi</button>

                        <form action="{{route('admin.projects.destroy', $project->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger">Elimina</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
@endsection