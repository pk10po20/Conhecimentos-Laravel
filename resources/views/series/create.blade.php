<x-layout title="Nova Série">
    <form action="/series/salvar" method="post">
        @csrf
        <div>          
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome">
        </div>


        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
</x-layout>