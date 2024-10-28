<div class="container-fluid">

    <form action="{{ route('admin.certification.update', $certification->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Sertfikasi</label>
            <input type="text" name="title" class="form-control" id="title" value="{{ $certification->title }}" required>
        </div>

        <div class="form-group">
            <label for="issuing_organization">Penerbit</label>
            <input type="text" name="issuing_organization" class="form-control" id="issuing_organization" value="{{ $certification->issuing_organization }}" required>
        </div>        
        
        <div class="form-group">
            <label for="issuing_date">Tanggal Terbit</label>
            <input type="date" name="issuing_date" class="form-control" id="issuing_date" value="{{ $certification->issuing_date }}" required>
        </div> 

        <div class="form-group">
            <label for="expiration_date">Tanggal Kadaluwarsa</label>
            <input type="date" name="expiration_date" class="form-control" id="expiration_date" value="{{ $certification->expiration_date }}" required>
        </div>


        <button type="submit" class="btn btn-primary">Update Sertifikat</button>
    </form>
</div>