<x-layout title="{{ __('messages.app_name') }}">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="h4">Lista de Séries</h2>
        <a href="{{ route('series.create') }}" class="btn btn-primary">+ Nova Série</a>
    </div>
    
    @isset($mensagemSucesso)
    <div class="alertsucess">
        {{ $mensagemSucesso }}
    </div>
    @endisset

    <ul class="list-group shadow-sm">
        @foreach ($series as $serie) 
        <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="{{ route('seasons.index', $serie->id )}}">
                    {{ $serie->nome }}
                </a>

            <div class="d-flex align-items-center">
                <a href="{{ route('series.edit', $serie->id) }}" class="btn btn-warning btn-sm me-2">
                    E
                </a>

                <form action="{{ route('series.destroy', $serie->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">X</button>
                </form>
            </div>
        </li>

        @endforeach
    </ul>
</x-layout>
