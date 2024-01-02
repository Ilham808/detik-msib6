<form method="POST" action="{{ route('categorybooks.store') }}">
    @csrf
    @method('POST')
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" placeholder="Name Category"
            class="form-control @error('name') is-invalid @enderror " required value="{{ old('name') }}">
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>
