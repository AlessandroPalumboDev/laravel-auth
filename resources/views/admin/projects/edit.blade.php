@extends("layouts.app")



@section("content")
    <div class="container text-light">
        <div class="row">
            <div class="card my-5 bg-dark text-light">
                <h2 class="text-center my-3">
                    Modifica Progetto
                </h2>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
    
                    <form action="{{ route("admin.projects.update", $project) }}" method="POST">
                        @csrf
                        @method("PUT")
                        <div class="mb-3">
                            <label for="name" class="form-label">Nome Progetto</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old("name", $project->name) }}" required/>
                        </div>
    
                        <div class="mb-3">
                            <label for="description" class="form-label">Descrizione Progetto</label>
                            <input type="text" class="form-control" id="description" name="description" value="{{ old("description", $project->description) }}" required/>
                        </div>
    
    
                        <div class="d-flex justify-content-between align-items-center mt-5">
                            <a href="{{ route("admin.projects.index") }}" class="btn btn-outline-secondary">
                                <i class="fas fa-arrow-left"></i>
                                Torna alla lista progetti
                            </a>
                            <button type="submit" class="btn btn-outline-warning">
                                <i class="far fa-pen-to-square"></i>
                                Conferma modifica
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
@endsection