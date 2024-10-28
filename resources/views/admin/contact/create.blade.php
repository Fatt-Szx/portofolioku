<div class="container-fluid">

    <form action="{{ route('admin.contact.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nama Kontak</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Masukkan Name" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Masukkan email" required>
        </div>        
        
        <div class="form-group">
            <label for="message">Pesan</label>
            <input type="message" name="message" class="form-control" id="message" placeholder="Masukkan pesan" required>
        </div>


        <button type="submit" class="btn btn-primary">Tambah Kontak</button>
    </form>
</div>