<div class="modal fade" id="edit{{ $service->id }}" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white">Edit record</h5>

            </div>
            <form action="{{ route('admin.service.edit', ['id' => $service->id]) }}" method="POST">
                 <div class="modal-body">
                    @csrf
                    @method('PUT')

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="name" class="form-label fw-bold text-black">Service</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                value="{{ $service->name }}" name="name" id="name"
                                placeholder="Service">
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="price" class="form-label fw-bold text-black">Price</label>
                            <input type="text" class="form-control @error('price') is-invalid @enderror"
                                value="{{ $service->price }}" name="price" id="price"
                                placeholder="Price">
                            @error('price')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
