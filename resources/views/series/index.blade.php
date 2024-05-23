<x-layout title="Séries">
    <a href="/series/create" class="btn btn-dark mb-2">Adicionar Nova Serie</a>

    <ul>
        @foreach ($series as $serie)
        <li class="list-group-item"> {{ $serie->nome }} </li>
        @endforeach
    </ul>
    
</x-layout>