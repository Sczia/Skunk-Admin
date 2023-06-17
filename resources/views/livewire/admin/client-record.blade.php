<div class="vh-100 w-100">
    @if ($part === 1)
        <div class="card ">
            <div class="card-body d-flex align-items-center justify-content-center flex-column my-5">
                <button wire:click="userChoice('new')" class="btn btn-outline-maroon mb-1" style="width: 20%">New
                    Client</button>
                <button wire:click="userChoice('old')" class="btn btn-outline-maroon" style="width: 20%">Old
                    Client</button>
            </div>
        </div>
    @else
        <div class="card mb-5">
            <div class="card-header my-3">
                <h3 class="text-maroon text-center">
                    @if ($choice === 'new')
                        Add Client
                    @endif
                    @if ($choice === 'old')
                        Add Record
                    @endif
                </h3>
            </div>
            <form wire:submit.prevent="addRecord('{{ $choice }}')">
                <div class="card-body">
                    @if ($choice === 'new')
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label fw-bold text-black">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    value="{{ old('name') }}" name="name" id="name" placeholder="Name"
                                    wire:model="name">
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="email" class="form-label fw-bold text-black">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    value="{{ old('email') }}" name="email" id="email" placeholder="email"
                                    wire:model="email">
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label fw-bold text-black">Phone</label>
                                <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                    value="{{ old('phone') }}" name="phone" id="phone" placeholder="phone"
                                    wire:model="phone">
                                @error('phone')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="company_name" class="form-label fw-bold text-black">Company Name</label>
                                <input type="text" class="form-control @error('company_name') is-invalid @enderror"
                                    value="{{ old('company_name') }}" name="company_name" id="company_name"
                                    placeholder="Company Name" wire:model="company_name">
                                @error('company_name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="address" class="form-label fw-bold text-black">Address</label>
                                <input type="text" class="form-control @error('address') is-invalid @enderror"
                                    value="{{ old('address') }}" name="address" id="address" placeholder="address"
                                    wire:model="address">
                                @error('address')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    @endif
                    @if ($choice === 'old')
                        <div class="row mb-3">
                            <div class="col-6">
                                <label class="form-label fw-bold text-black">Client</label>
                                <select class="form-select" aria-label="Default select example" id="client_id"
                                    name="client_id" wire:model="client_id">
                                    <option selected value="">----Select Client----</option>
                                    @foreach ($clients as $client)
                                        <option value="{{ $client->id }}">
                                            {{ $client->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-6">
                                <label class="form-label fw-bold text-black">Car</label>
                                <select class="form-select" aria-label="Default select example" id="car_id"
                                    name="car_id" wire:model='car_id'>
                                    <option selected value="">----Select car----</option>
                                    @foreach ($cars as $car)
                                        <option value="{{ $car->id }}">
                                            {{ $car->vehicle }}, {{ $car->model }}</option>
                                    @endforeach
                                    <option value="Add">
                                        Add Car</option>
                                </select>
                            </div>
                        </div>
                    @endif

                    @if ($addCar || $choice === 'new')
                        <div class="row my-5">
                            <h4 class="text-maroon text-center">Add Car</h4>
                            <hr class="mb-0">
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="car_company_name" class="form-label fw-bold text-black">Car Company
                                    Name</label>
                                <input type="text"
                                    class="form-control @error('car_company_name') is-invalid @enderror"
                                    value="{{ old('car_company_name') }}" name="car_company_name"
                                    id="car_company_name" placeholder="Company Name" wire:model="car_company_name">
                                @error('car_company_name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="car_model" class="form-label fw-bold text-black">Model</label>
                                <input type="text" class="form-control @error('car_model') is-invalid @enderror"
                                    value="{{ old('car_model') }}" name="car_model" id="car_model"
                                    placeholder="Model" wire:model="car_model">
                                @error('car_model')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="car_plate_number" class="form-label fw-bold text-black">Plate
                                    Number</label>
                                <input type="text"
                                    class="form-control @error('car_plate_number') is-invalid @enderror"
                                    value="{{ old('car_plate_number') }}" name="car_plate_number"
                                    id="car_plate_number" placeholder="Plate Number" wire:model="car_plate_number">
                                @error('car_plate_number')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    @endif
                    @if ($choice === 'old')
                        <div class="row my-5">
                            <h4 class="text-maroon text-center">Service</h4>
                            <hr class="mb-0">
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <label class="form-label fw-bold text-black">Service</label>
                                <select class="form-select" aria-label="Default select example" id="service_id"
                                    name="service_id" wire:model="service_id">
                                    <option selected value="">----Select Service----</option>
                                    @foreach ($services as $service)
                                        <option value="{{ $service->id }}">
                                            {{ $service->service }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-6">
                                <label class="form-label fw-bold text-black">Car Size</label>
                                <select class="form-select" aria-label="Default select example" id="size_id"
                                    name="size_id" wire:model="size_id">
                                    <option selected value="">----Select size----</option>
                                    @foreach ($sizes as $size)
                                        <option value="{{ $size->id }}">{{ $size->size }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="card-footer">
                    <button type="submit" wire:submit class="btn btn-maroon">Add</button>
                </div>
            </form>
        </div>
    @endif
</div>
