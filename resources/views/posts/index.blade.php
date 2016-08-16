@extends ('template')
@section('content')
	<h1>Blog</h1>
	@foreach ($posts as $post)
		<h2>{{$post->title}} <i>({{$post->created_at}})</i></h2>
		<p>{{$post->content}}</p>
		<b>Tag:</b><br>
		<ul>
			@foreach($post->tags as $tag)
				<li>
					{{$tag->name}}
				</li>
			@endforeach
		</ul>
		<hr>
		<h3>Comments</h3>
		@foreach ($post->comments as $comment)
			<b>name: </b> {{$comment->name}} <br>
			<b>comment: </b>{{$comment->comment}}<br><br>		
		@endforeach
	@endforeach

@endsection