<div class="modal fade" id="confirm{{ $client->id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success">

                <h5 class="modal-title text-light font-weight-bold">Warning</h5>


            </div>
            <form action=" {{ route('admin.client.new.update', ['id' => $client->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="card shadow-none">
                        <div class="card-body p-0">
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="password" class="form-label fw-bold text-black">Password</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                        value="{{ old('name') }}" name="password" id="password"
                                        placeholder="password">
                                    @error('password')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                        aria-label="Close">Cancel</button>
                    <button type="submit" class="btn btn-success">Yes</button>

                </div>

            </form>

        </div>
    </div>
</div>
