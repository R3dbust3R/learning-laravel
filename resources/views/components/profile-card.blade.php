@props(['profile'])

{{-- boostrap card --}}
<div class="card bg-light rounded-5">
    <img class="rounded-5 card-img-top p-4" src="{{ $profile->image ? asset('storage/uploads/'.$profile->image) : asset('storage/uploads/default.jpg') }}" alt="{{ $profile->name }}" />
    <div class="card-body">
        <h6 class="card-title">{{$profile->fname}}</h6>
        <p class="card-text fs-6">Member since: {{$profile->created_at}}</p>
    </div>
    <div class="btns p-3">
        <div class="btn-group mb-2 d-flex" role="group" aria-label="actions buttons">
            <a href="{{route('edit-profile', $profile->id)}}" class="btn btn-outline-success">Edit</a>
            <a href="{{route('show-profile', $profile->id)}}" class="btn btn-outline-primary">Show</a>
        </div>
        <form action="{{route('profile-delete', $profile->id)}}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger d-block w-100">
                Delete
            </button>
        </form>
    </div>
</div>
{{-- boostrap card --}}