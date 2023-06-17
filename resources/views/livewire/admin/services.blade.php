<div>
    <form wire:submit.prevent="addService">
        <div class="modal-body">
            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="service" class="form-label fw-bold text-black">Name <button class="btn btn-sm "
                            type="button" wire:click="add"><i class="ri-add-circle-line"></i></button></label>
                    @if ($add)
                        <input type="text" class="form-control @error('service') is-invalid @enderror"
                            value="{{ old('service') }}" name="service" id="service" placeholder="Name"
                            wire:model="name">
                        @error('service')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    @else
                        <select class="form-select" aria-label="Default select example" id="service_id"
                            name="service_id" wire:model='service_id' wire:model="service_id">
                            <option selected value="">----Select car----</option>
                            @foreach ($services as $service)
                                <option value="{{ $service->id }}">{{ $service->service }}</option>
                            @endforeach
                        </select>
                        @error('service_id')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    @endif
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="price" class="form-label fw-bold text-black">Price</label>
                    <input type="text" class="form-control @error('price') is-invalid @enderror"
                        value="{{ old('price') }}" name="price" id="price" placeholder="Price"
                        wire:model="price">
                    @error('price')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row mb-">
                <div class="col-6">
                    <label class="form-label fw-bold text-black">Size</label>
                    <select class="form-select" aria-label="Default select example" id="size" name="size"
                        wire:model="size">
                        <option selected value="">----Select size----</option>
                        <option value="Small">Small</option>
                        <option value="Medium">Medium</option>
                        <option value="Large">Large</option>
                        <option value="Extra Large">Extra Large</option>
                    </select>
                    @error('size')
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
