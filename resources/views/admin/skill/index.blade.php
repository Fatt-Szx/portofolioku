<div class="container-fluid">

    <a href="{{ route('admin.skill.create') }}" class="btn btn-primary">Tambahkan Skill</a>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Tingkat Kemampuan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($skill as $skills)
                <tr>
                    <td>{{ $skills->name }}</td>
                    <td>{{ $skills->level }}</td>
                    <td>
                        <a href="{{ route('admin.skill.edit', $skills->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.skill.destroy', $skills->id) }}" method="POST" style="display:inline-block;">
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