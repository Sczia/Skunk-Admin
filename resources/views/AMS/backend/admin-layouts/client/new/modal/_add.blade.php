<div class="modal fade" id="add" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-maroon">
                <h5 class="modal-title text-white">Add Redord</h5>

            </div>
            <form action="{{ route('admin.client.new.store') }}" method="POST">
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
                            <label for="email" class="form-label fw-bold text-black">Email</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror"
                                value="{{ old('email') }}" name="email" id="email"
                                placeholder="Email">
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="company" class="form-label fw-bold text-black">Company Name</label>
                            <input type="text" class="form-control @error('company') is-invalid @enderror"
                                value="{{ old('company') }}" name="company" id="company"
                                placeholder="Company">
                            @error('company')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                   {{--  <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="company" class="form-label fw-bold text-black">Company</label>
                            <textarea class="form-control @error('company') is-invalid @enderror" id="company"
                                rows="5"  name="company" placeholder="Company">{{ old('company') }}</textarea>
                            @error('company')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div> --}}
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="address" class="form-label fw-bold text-black">Address</label>
                            <input type="text" class="form-control @error('address') is-invalid @enderror"
                                value="{{ old('address') }}" name="address" id="address" placeholder="Address">
                            @error('address')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="number" class="form-label fw-bold text-black">Phone Number</label>
                            <input type="text" class="form-control @error('number') is-invalid @enderror"
                                value="{{ old('number') }}" name="number" id="number" placeholder="Number">
                            @error('number')
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
