<div class="modal fade" id="add" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-maroon">
                <h5 class="modal-title text-white">Add Redord</h5>

            </div>
            <form action="{{ route('admin.service.store') }}" method="POST">
            <div class="modal-body">
                    @csrf
                    @method('POST')

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="name" class="form-label fw-bold text-black">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                value="{{ old('name') }}" name="name" id="name"
                                placeholder="Name">
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="price" class="form-label fw-bold text-black">Price</label>
                            <input type="text" class="form-control @error('price') is-invalid @enderror"
                                value="{{ old('price') }}" name="price" id="price"
                                placeholder="Price">
                            @error('price')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-maroon">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
