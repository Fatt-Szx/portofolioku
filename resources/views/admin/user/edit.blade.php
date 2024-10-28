<div class="container-fluid">
    <form action="{{ route('admin.user.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ $user->name }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" value="{{ $user->email }}" required>
        </div>

        <div class="form-group">
            <label for="password">Password Baru (Kosongkan jika tidak ingin mengubah)</label>
            <input type="password" name="password" class="form-control" id="password">
        </div>

        <div class="form-group">
            <label for="re_password">Konfirmasi Password Baru</label>
            <input type="password" name="re_password" class="form-control" id="re_password">
        </div>

        <button type="submit" class="btn btn-primary">Perbarui Akun</button>
    </form>
</div>
