@props(['post'])



<div class="post bg-light mb-2 p-4 rounded-4">
    <div class="head">
        <h5 class="post-title"> {{$post->title}} </h5>
        <p class="lead fs-6">By: #{{$post->id}}-user</p>
    </div>
    <div class="body">
        <p class="lead">
            {{$post->content}}
        </p>
        <div class="post-image">
            <img src="{{asset('storage/posts/default.jpg')}}" alt="{{$post->title}}">
        </div>
    </div>
</div>