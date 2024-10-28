<div class="container-fluid">

    <form action="{{ route('admin.skill.update', $skill->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ $skill->name }}" required>
        </div>

        <div class="form-group">
            <label for="level">Tingkat Kemampuan</label>
            <input type="number" name="level" class="form-control" id="level" value="{{ $skill->level }}" required>
        </div>        

        <button type="submit" class="btn btn-primary">Perbarui Skill</button>
    </form>
</div>