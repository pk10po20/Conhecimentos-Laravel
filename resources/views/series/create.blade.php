<x-layout title="Nova Série">
    <form action="{{ route ('series.store')}}" method="post" class="card p-4 shadow-sm">
        @csrf

        <div class="mb-3">
            <label for="nome" class="form-label">Nome da Série</label>
            <input type="text" id="nome" name="nome" class="form-control" placeholder="Digite o nome da série" required>
        </div>

        <button type="submit" class="btn btn-success">Adicionar</button>
    </form>
</x-layout>
