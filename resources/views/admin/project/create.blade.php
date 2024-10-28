<div class="container-fluid">

    <form action="{{ route('admin.project.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Judul</label>
            <input type="text" name="title" class="form-control" id="title" required>
        </div>

        <div class="form-group">
            <label for="description">Deskripsi</label>
            <input type="text" name="description" class="form-control" id="description" required>
        </div>        
        
        <div class="form-group">
            <label for="url">Link Projek</label>
            <input type="url" name="url" class="form-control" id="url" required>
        </div>


        <button type="submit" class="btn btn-primary">Tambah Projek Anda</button>
    </form>
</div>