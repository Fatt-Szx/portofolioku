<div class="container-fluid">

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Pesan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contact as $contacts)
                <tr>
                    <td>{{ $contacts->name }}</td>
                    <td>{{ $contacts->email }}</td>
                    <td>{{ $contacts->message }}</td>
                    <td>
                        <a href="{{ route('admin.contact.edit', $contacts->id) }}" class="btn btn-warning">Edit</a>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>