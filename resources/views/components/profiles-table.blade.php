<table class="table table-striped">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Member Since</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        {{-- @foreach ($profiles as $profile)
            <tr>
                <td> {{ $profile->id }} </td>
                <td> {{ $profile->fname }} </td>
                <td> {{ $profile->email }} </td>
                <td> {{ $profile->created_at }} </td>
                <td>
                    <a 
                        href="/edit/profile/{{$profile->id}}" 
                        class="btn btn-success btn-sm rounded-pill">Edit</a>
                    <a 
                        onclick="return confirm('Are you sure that you wanna delete {{$profile->fname}}?')"
                        href="/delete/profile/{{$profile->id}}" 
                        class="btn btn-danger btn-sm rounded-pill">Delete</a>
                </td>
            </tr>
        @endforeach --}}
    </tbody>
</table>