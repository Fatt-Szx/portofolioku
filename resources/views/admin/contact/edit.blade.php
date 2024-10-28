<div class="container-fluid">

    <form action="{{ route('admin.contact.update', $contact->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ $contact->name }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" value="{{ $contact->email }}" required>
        </div>        
        
        <div class="form-group">
            <label for="message">Pesan</label>
            <input type="message" name="message" class="form-control" id="message" value="{{ $contact->message }}" required>
        </div>


        <button type="submit" class="btn btn-primary">Perbarui Kontak</button>
    </form>
</div>