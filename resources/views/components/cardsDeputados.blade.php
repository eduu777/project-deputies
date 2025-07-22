<div class="row">
        @foreach ($deputados->take(12) as $d)
        <div class="card mx-auto mt-4" style="width: 12rem;">
            <img src={{ $d['url_foto'] }} class="card-img-top rounded-top w-100" alt="Imagem do Card">
            <div class="card-body">
                <h5 class="card-title fw-bold text-truncate">{{ $d['nome'] }}</h5>
                <p class="card-text text-muted">{{ $d['sigla_partido'] }}</p>
                <a href="{{route('deputados.listById', $d['id'])}}" class="btn btn-primary px-4 w-100">Saiba Mais</a>
            </div>
        </div> 
        @endforeach 
    </div>
<div class="text-center mt-3">
        {{ $deputados->links('pagination::bootstrap-5') }}
</div>