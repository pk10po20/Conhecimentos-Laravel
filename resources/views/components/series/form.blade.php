<form action="{{ $action }}" method="post" class="card p-4 shadow-sm">
        @csrf

        @if($update)
        @method('PUT')
        @endif
        <div class="mb-3">
            <label for="nome" class="form-label">Nome da Série</label>
            <input type="text"
                   id="nome" 
                   name="nome" 
                   class="form-control" @isset($nome)value="{{ $nome }}"@endisset
                   placeholder="Digite o nome da série" required>
        </div>

        <button type="submit" class="btn btn-success">Adicionar</button>
    </form>