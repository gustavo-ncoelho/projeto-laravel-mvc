<x-layout title="Séries">
    <a href="{{route('series.create')}}" class="btn btn-dark mb-2">Adicionar Nova Serie</a>

    @isset($mensagemSucesso)
    <div class="alert alert-success">
        {{ $mensagemSucesso }}
    </div>
    @endisset

    <ul class="list-group">
        @foreach ($series as $serie)
        <li class="list-group-item d-flex justify-content-between align-itens-center"> 
            <a href="{{ route('seasons.index', $serie->id) }}">
                {{ $serie->nome }}
            </a>

            <span class="d-flex">
                <a href="{{ route('series.edit', $serie->id) }}" class="btn btn-primary btn-sm"> E
                </a> <?php //essa função ^^^^ ja cria o endereço series/edit/id ?>
                <form action="{{ route('series.destroy', $serie->id) }}" method="post" class="ms-2">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">
                        X
                    </button>
                </form>
            </span> 
    
        </li>
        @endforeach
    </ul>
    
</x-layout>