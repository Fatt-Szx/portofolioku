<div class="container-fluid">

    <a href="{{ route('admin.certification.create') }}" class="btn btn-primary">Tambahkan Sertifikat</a>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Sertifikasi</th>
                <th>Penerbit</th>
                <th>Tanggal Terbit</th>
                <th>Tanggal Kedaluwarsa</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($certification as $certifications)
                <tr>
                    <td>{{ $certifications->title }}</td>
                    <td>{{ $certifications->issuing_organization }}</td>
                    <td>{{ $certifications->issuing_date }}</td>
                    <td>{{ $certifications->expiration_date }}</td>
                    <td>
                        <a href="{{ route('admin.certification.edit', $certifications->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.certification.destroy', $certifications->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>