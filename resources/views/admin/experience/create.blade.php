<div class="container-fluid">

    <form action="{{ route('admin.experience.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="company">Nama Perusahaan</label>
            <input type="text" name="company" class="form-control" id="company" required>
        </div>

        <div class="form-group">
            <label for="position">Posisi</label>
            <input type="text" name="position" class="form-control" id="position" required>
        </div>        
        
        <div class="form-group">
            <label for="start_date">Tanggal Mulai</label>
            <input type="date" name="start_date" class="form-control" id="start_date" required>
        </div> 

        <div class="form-group">
            <label for="end_date">Tanggal Selesai</label>
            <input type="date" name="end_date" class="form-control" id="end_date" required>
        </div>

       <div class="form-group">
            <label for="description">Deskripsi</label>
            <input type="text" name="description" class="form-control" id="description" required>
        </div>


        <button type="submit" class="btn btn-primary">Tambah Pengalaman Kerja</button>
    </form>
</div>