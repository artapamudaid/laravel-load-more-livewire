<div class="row">
    @foreach ($posts as $post)
    <div class="card mb-2">
        <div class="card-body">
            <a href="">
                <h5 class="card-title">{{ $post->title }}</h5>
            </a>
            <p class="card-text">{{ Str::limit( strip_tags( $post->desc ), 100 ) }}</p>
        </div>
    </div>
    @endforeach
</div>