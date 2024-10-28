<div class="container-fluid">

    <form action="{{ route('admin.education.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="school_name">Nama Sekolah</label>
            <input type="text" name="school_name" class="form-control" id="school_name" placeholder="Masukkan Nama Sekolah" required>
        </div>

        <div class="form-group">
            <label for="degree">Gelar</label>
            <input type="text" name="degree" class="form-control" id="degree" placeholder="Masukkan Gelar" required>
        </div>        
        
        <div class="form-group">
            <label for="field_of_study">Bidang Studi</label>
            <input type="text" name="field_of_study" class="form-control" id="field_of_study" placeholder="Masukkan Bidang Studi" required>
        </div>        
                
        <div class="form-group">
            <label for="start_date">Tanggal Mulai</label>
            <input type="date" name="start_date" class="form-control" id="start_date" placeholder="Masukkan Tanggal Mulai" required>
        </div>        
        
        <div class="form-group">
            <label for="end_date">Tanggal Selesai</label>
            <input type="date" name="end_date" class="form-control" id="end_date" placeholder="Masukkan Tanggal Selesai" required>
        </div>


        <button type="submit" class="btn btn-primary">Tambah Riwayat Pendidikan</button>
    </form>
</div>