<div class="row">
        @foreach ($partidos as $p)
        <div class="card mx-auto mt-5" style="width: 14rem;">
            <div class="card-body">
                <h5 class="card-title fw-bold text-truncate">{{ $p['sigla'] }}</h5>
                <p class="card-text text-muted">{{ $p['nome'] }}</p>
            </div>
        </div> 
        @endforeach 
    </div>
<div class="text-center mt-3">
</div>