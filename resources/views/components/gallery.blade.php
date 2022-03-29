<link rel="stylesheet" href={{ asset('css/components/gallery.css') }}>

<div class="gallery">
    @foreach ($projects as $project)
        <div class="galleryContent">
            <div class="imgBox">
                <img src={{ asset("images/projects/$project->images") }} alt={{ $project->name }}>
            </div>
            <div class="textBox">
                <h3>{{ $project->name }}</h3>
                <p>{{ $project->description }}</p>
            </div>
        </div>
    @endforeach
</div>

<script src={{ asset('js/Gallery.js') }}></script>
