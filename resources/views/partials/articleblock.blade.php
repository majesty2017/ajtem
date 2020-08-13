<div class="container">
    <div class="media">
        <div class="media-header">
            <a href="{{ route('article.view', $article->id) }}">
                <img class="media-object mt-15" src="{{ asset('uploads/articles/covers/' . $article->upload_image) }}"
                            alt="{{ $article->author }}" style="width: 100px; height: 100px">
            </a>

        </div>
        <div class="media-body">
            <h4 class="media-title ml-50">{{ $article->title }}</h4>
            @if($article->abstract)
                <p class="ml-50">{{ $article->abstract }}..</p>
                <a class="btn btn-danger ml-50" href="{{ route('article.view', $article->id) }}">Read More..</a> <br><br>
            @endif
        </div>
    </div>
</div>

