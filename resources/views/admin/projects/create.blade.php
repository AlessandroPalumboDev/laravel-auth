@extends("layouts.app")


@section("content")
    <div class="container py-5">
        <div class="row">
            <div class="card my-5 bg-dark text-light">
                <h2 class="text-center my-3">
                    Crea Progetto
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
    
                    <form
                        action="{{ route("admin.projects.store") }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Nome Progetto</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old("name") }}" required/>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Descrizione Progetto</label>
                            <input type="text" class="form-control" id="description" name="description" value="{{ old("description") }}" required/>
                        </div>
    
                        <div class="d-flex justify-content-between align-items-center mt-5">
                            <a href="{{ route("admin.projects.index") }}" class="btn btn-outline-secondary">
                                <i class="fas fa-arrow-left"></i>
                                Torna alla lista Progetti
                            </a>
                            <button type="submit" class="btn btn-outline-secondary">
                                <i class="far fa-plus"></i>
                                Crea
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
@endsection