@extends('app')
@section('content')
@foreach($articles as $article)
<article class="format-image group">
    <h2 class="post-title pad">
        <a href="/articles/{{ $article->id }}"> {{ $article->title }}</a>
    </h2>
    <div class="post-inner">
        <div class="post-deco">
            <div class="hex hex-small">
                <div class="hex-inner"><i class="fa"></i></div>
                <div class="corner-1"></div>
                <div class="corner-2"></div>
            </div>
        </div>
        <div class="post-content pad">
            <div class="entry custome">
                {{ $article->intro }}
            </div>
           	
            <a class="more-link-custom" href="/article/edit/{{ $article->id }}"><span><i>修改文章</i></span></a>
            <a class="more-link-custom" href="/article/delete/{{ $article->id }}"><span><i>删除文章</i></span></a>
           
        </div>

    </div>
</article>
@endforeach
<hr></hr>
<h1><a href = "article/create">写新文章</a></h1>
@endsection

