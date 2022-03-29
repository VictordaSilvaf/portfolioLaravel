<link rel="stylesheet" href={{ asset('css/components/coursel.css') }}>

<div class="carousel">

    <div class="corousel-items">
        @foreach ($technologies->all() as $technology)

            <div data-js="carousel__item" class="carousel__item">
                <img src={{ asset("images/tecnologies/$technology->image") }} alt={{ $technology->name }} />
            </div>
        @endforeach
    </div>

    <div class="carousel__actions">
        <button data-js="carousel__button--prev" aria-label="Slide anterior">
            &lt;
        </button>
        <button data-js="carousel__button--next" aria-label="Próximo slide">
            &gt;
        </button>
    </div>
</div>

<script src={{ asset('js/Coursel.js') }}></script>
