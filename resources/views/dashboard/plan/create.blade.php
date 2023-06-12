@extends('dashboard.layout.main')

@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Vertical Layouts</h4>

        <!-- Basic Layout -->
        <div class="row">
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Create Trip</h5>
                        <small class="text-muted float-end">Default label</small>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('dashboard.trips.plan.store', $trip->id) }}"
                            class="needs-validation d-flex flex-wrap justify-content-between" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="col-3 mb-4">
                                <label class="form-label" for="basic-default-name">Hotel Name</label>
                                <input type="text" name="name" value="{{ old('name') }}"
                                    class="form-control @error('name') is-invalid @enderror" id="basic-default-name"
                                    placeholder="John Doe">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-3 mb-4">
                                <label class="form-label" for="basic-default-company">Days Plan</label>
                                <input type="text" name="days" value="{{ old('days') }}"
                                    class="form-control @error('days') is-invalid @enderror" id="basic-default-company"
                                    placeholder="ACME Inc.">
                                @error('days')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-3 mb-4">
                                <label class="form-label" for="basic-default-price">Price</label>
                                <input type="number" name="price" value="{{ old('price') }}"
                                    class="form-control @error('price') is-invalid @enderror" id="basic-default-price"
                                    placeholder="ACME Inc.">
                                @error('price')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-4 form-check form-switch">
                                <label class="form-label" for="basic-default-mycosis">Mycosis</label>
                                <input type="checkbox" name="mycosis"
                                    class="form-check-input form-control @error('price') is-invalid @enderror""
                                    id="basic-default-mycosis">
                                @error('mycosis')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-4 form-check form-switch">
                                <label class="form-label" for="basic-default-lunch">Lunch</label>
                                <input type="checkbox" name="lunch"
                                    class="form-check-input form-control @error('price') is-invalid @enderror""
                                    id="basic-default-lunch">
                                @error('lunch')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-4 form-check form-switch">
                                <label class="form-label" for="basic-default-dinner">Dinner</label>
                                <input type="checkbox" name="dinner"
                                    class="form-check-input form-control @error('price') is-invalid @enderror""
                                    id="basic-default-dinner">
                                @error('dinner')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="col-2 btn btn-primary waves-effect waves-light">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
