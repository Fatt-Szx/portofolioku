<div class="container-fluid">

    <form action="{{ route('admin.education.update', $education->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="school_name">Nama Sekolah</label>
            <input type="text" name="school_name" class="form-control" id="school_name" value="{{ $education->school_name }}" required>
        </div>

        <div class="form-group">
            <label for="degree">Gelar</label>
            <input type="text" name="degree" class="form-control" id="degree" value="{{ $education->degree }}">
        </div>        
        
        <div class="form-group">
            <label for="field_of_study">Bidang Studi</label>
            <input type="text" name="field_of_study" class="form-control" id="field_of_study" value="{{ $education->field_of_study }}" required>
        </div> 

        <div class="form-group">
            <label for="start_date">Tanggal Mulai</label>
            <input type="date" name="start_date" class="form-control" id="start_date" value="{{ $education->start_date }}" required>
        </div>

       <div class="form-group">
            <label for="end_date">Tanggal Selesai</label>
            <input type="date" name="end_date" class="form-control" id="end_date" value="{{ $education->end_date }}" required>
        </div>


        <button type="submit" class="btn btn-primary">Perbarui Pendidikan</button>
    </form>
</div>