<div class="container-fluid">

    <a href="{{ route('admin.experience.create') }}" class="btn btn-primary">Tambahkan Pengalaman</a>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Perusahaan</th>
                <th>Posisi</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Selesai</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($experience as $experiences)
                <tr>
                    <td>{{ $experiences->company }}</td>
                    <td>{{ $experiences->position }}</td>
                    <td>{{ $experiences->start_date }}</td>
                    <td>{{ $experiences->end_date }}</td>
                    <td>{{ $experiences->description }}</td>
                    <td>
                        <a href="{{ route('admin.experience.edit', $experiences->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.experience.destroy', $experiences->id) }}" method="POST" style="display:inline-block;">
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