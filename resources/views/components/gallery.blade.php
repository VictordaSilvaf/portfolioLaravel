<link rel="stylesheet" href={{ asset('css/components/gallery.css') }}>

<div class="gallery">
    @foreach ($technologies as $technology)
        <div class="galleryContent" data-anime="botton">
            <div class="imgBox">
                <img src={{ asset("images/tecnologies/$technology->image") }} alt={{ $technology->name }}>
            </div>
            <div class="textBox">
                <h3>{{ $technology->name }}</h3>
            </div>
        </div>
    @endforeach
</div>

<script src={{ asset('js/Gallery.js') }}></script>
