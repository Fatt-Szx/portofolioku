<div class="container-fluid">

    <a href="{{ route('admin.project.create') }}" class="btn btn-primary">Tambahkan Kontak</a>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Link</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($project as $projects)
                <tr>
                    <td>{{ $projects->title }}</td>
                    <td>{{ $projects->description }}</td>
                    <td>{{ $projects->url }}</td>
                    <td>
                        <a href="{{ route('admin.project.edit', $projects->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.project.destroy', $projects->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin Kawan?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>