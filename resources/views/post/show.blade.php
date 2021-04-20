<h3>{{ $post->title }}</h3>

<ul>
    @foreach($post->opinions as $comment)
    <li>{{ $comment->body }}</li>
    @endforeach
</ul>