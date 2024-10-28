<div class="container-fluid">

    <form action="{{ route('admin.certification.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Sertifikasi</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Masukkan Judul" required>
        </div>

        <div class="form-group">
            <label for="issuing_organization">Penerbit</label>
            <input type="text" name="issuing_organization" class="form-control" id="issuing_organization" placeholder="Masukkan Penerbit" required>
        </div>        
        
        <div class="form-group">
            <label for="issuing_date">Tanggal Terbit</label>
            <input type="date" name="issuing_date" class="form-control" id="issuing_date" placeholder="Masukkan Tanggal Terbit" required>
        </div>        
        
        <div class="form-group">
            <label for="expiration_date">Tanggal Kadaluwarsa</label>
            <input type="date" name="expiration_date" class="form-control" id="expiration_date" placeholder="Masukkan Tanggal Kadaluarsa" required>
        </div>


        <button type="submit" class="btn btn-primary">Tambah Sertifikat</button>
    </form>
</div>