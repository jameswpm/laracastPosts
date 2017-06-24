@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <h2 class="blog-post-title">
                {{ $post->title }}
        </h2>
        <p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }} by <a href="#">Jacob</a></p>

        <p>
            {{ $post->body }}
        </p>

        <hr>

        <div class="comments">
            <ul class="list-group">
                @foreach($post->comments as $comment)
                    <li class="list-item">
                        <article>
                            <strong>
                                {{ $comment->created_at->toFormattedDateString() }}
                            </strong>
                            {{ $comment->body }}
                        </article>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="card">
            <div class="card-block">
                <form method="POST" action="/posts/{{ $post->id }}/comments">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <textarea name="body" class="form-control" placeholder="Your comment here"></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add Comment</button>
                    </div>

                </form>

                @include('layouts.errors)
            </div>
        </div>
    </div>

@endsection