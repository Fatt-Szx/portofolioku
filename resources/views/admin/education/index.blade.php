<div class="container-fluid">

    <a href="{{ route('admin.education.create') }}" class="btn btn-primary">Tambahkan Riwayat Pendidikan</a>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Nama Sekolah</th>
                <th>Gelar</th>
                <th>Bidang Studi</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Selesai</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($education as $educations)
                <tr>
                    <td>{{ $educations->school_name }}</td>
                    <td>{{ $educations->degree }}</td>
                    <td>{{ $educations->field_of_study }}</td>
                    <td>{{ $educations->start_date }}</td>
                    <td>{{ $educations->end_date }}</td>
                    <td>
                        <a href="{{ route('admin.education.edit', $educations->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.education.destroy', $educations->id) }}" method="POST" style="display:inline-block;">
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