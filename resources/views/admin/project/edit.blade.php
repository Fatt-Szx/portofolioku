<div class="container-fluid">

    <form action="{{ route('admin.project.update', $project->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Judul</label>
            <input type="text" name="title" class="form-control" id="title" value="{{ $project->title }}" required>
        </div>

        <div class="form-group">
            <label for="description">Deskripsi</label>
            <input type="text" name="description" class="form-control" id="description" value="{{ $project->description }}" required>
        </div>        
        
        <div class="form-group">
            <label for="url">Link Projek</label>
            <input type="url" name="url" class="form-control" id="url" value="{{ $project->url }}" required>
        </div>


        <button type="submit" class="btn btn-primary">Update Kontak</button>
    </form>
</div>