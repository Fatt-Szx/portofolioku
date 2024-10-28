<div class="container-fluid">

    <form action="{{ route('admin.skill.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" name="name" class="form-control" id="name" required>
        </div>

        <div class="form-group">
            <label for="level">Tingkat Kemampuan</label>
            <input type="number" name="level" class="form-control" id="level" required>
        </div>     


        <button type="submit" class="btn btn-primary">Tambah Skill</button>
    </form>
</div>