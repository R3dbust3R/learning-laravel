@include('layout.header')
<div class="container">
    <h2>
        {{$page_title}}
    </h2>

    {{-- 
    
        - post is gonna need these fields
        [id, title, post, commenter, date, image-thumbail, created_at, update_at, deleted_at]
    
    --}}

    <form enctype="multipart/form-data" action="{{route('post.store')}}" method="POST" class="bg-light my-4 p-5">
        @csrf
        <div class="form-grourp mb-4">
            <label for="title" class="mb-2"><strong>Post title</strong></label>
            <input id="title" type="text" class="form-control" placeholder="Post title" name="title">
            @error('title')
                <x-error-msg msg="{{$message}}"></x-error-msg>
            @enderror
        </div>
        <div class="form-grourp mb-4">
            <label for="author" class="mb-2"><strong>Post author</strong></label>
            <select class="form-select" aria-label="Author select" id="author" name="author">
                <option value="1">Author 1</option>
                <option value="2">Author 2</option>
                <option value="3">Author 3</option>
                <option value="4">Author 4</option>
            </select>

            @error('title')
                <x-error-msg msg="{{$message}}"></x-error-msg>
            @enderror
        </div>
        <div class="form-grourp mb-4">
            <label for="content" class="mb-2"><strong>Post content</strong></label>
            <textarea id="content" rows="6" class="form-control" placeholder="Post content" name="content"></textarea>
            @error('content')
                <x-error-msg msg="{{$message}}"></x-error-msg>
            @enderror
        </div>
        <div class="form-grourp mb-4">
            <label for="thumbnail" class="mb-2"><strong>Post thumbnail</strong></label>
            <input id="thumbnail" type="file" class="form-control" name="thumbnail">
            @error('thumbnail')
                <x-error-msg msg="{{$message}}"></x-error-msg>
            @enderror
        </div>
        <div class="form-grourp mb-4">
            <input type="submit" class="btn btn-outline-primary ps-5 pe-5" value="Save" name="submit">
        </div>
    </form>

</div>
@include('layout.footer')