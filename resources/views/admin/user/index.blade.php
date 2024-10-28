<div class="container-fluid">

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($user as $users)
                <tr>
                    <td>{{ $users->name }}</td>
                    <td>{{ $users->email }}</td>
                    <td>
                        <a href="{{ route('admin.user.edit', $users->id) }}" class="btn btn-warning">Edit</a>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>