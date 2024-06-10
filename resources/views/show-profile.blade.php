@include('layout.header')

    {{-- <h1>{{$page_title}}</h1> --}}

@if (is_null($profile))
    <h2>No data</h2>
    <p class="lead">This user doesn't seem to be exist</p>
@else
    <div class="profile-header position-relative" style="height: 420px; background: url(https://bs-uploads.toptal.io/blackfish-uploads/components/blog_post_page/4084383/cover_image/regular_1708x683/cover-default-cover-3-471a0c0b9311fe1609f036a46e4a3f15.png) no-repeat center center; background-size: cover;">
        <img style="width: 180px; display: block; margin: auto; border-radius: 100%; border: 8px solid white; position: absolute; left: calc(50% - 90px); bottom: -90px;" src="{{ $profile->image ? asset('storage/uploads/'.$profile->image) : asset('storage/uploads/default.jpg') }}" alt="{{$profile->name}}">
    </div>
    <div class="container">
        <div class="text p-5 bg-light">
            <h3 style="padding-top: 100px;" class="name text-center"><strong>{{$profile->fname}}</strong></h3>
            <p class="lead text-center fs-6"> <strong>Member since: </strong> {{$profile->created_at}} </p>
            <p class="lead"> <strong>Email: </strong> {{$profile->email}} </p>
            <p class="lead text-break"> <strong>Biography: </strong> {{$profile->bio}} </p>
        </div>
    </div>
@endif

@include('layout.footer')