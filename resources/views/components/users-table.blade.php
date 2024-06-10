{{-- 
    -
    - users table need [array] $users in order to work
    -
--}}

@props(['users'])

<table class="table table-striped text-center">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{$user['id']}}</td>
                <td>{{$user['name']}}</td>
                <td>{{$user['email']}}</td>
                <td>
                    <a href="/user/edit/{{$user['id']}}" class="btn btn-primary btn-sm rounded-pill ps-3 pe-3">Edit</a>
                    <a href="/user/delete/{{$user['id']}}" class="btn btn-danger btn-sm rounded-pill ps-3 pe-3">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>