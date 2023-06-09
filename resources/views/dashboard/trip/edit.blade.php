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
                        <form action="{{ route('dashboard.trips.update', $trip->id) }}" class="needs-validation"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Trip Name</label>
                                <input type="text" name="name" value="{{ old('name', $trip->name) }}"
                                    class="form-control @error('name') is-invalid @enderror" id="basic-default-fullname"
                                    placeholder="John Doe">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-company">Location Trip</label>
                                <input type="text" name="location" value="{{ old('location', $trip->location) }}"
                                    class="form-control @error('location') is-invalid @enderror" id="basic-default-company"
                                    placeholder="ACME Inc.">
                                @error('location')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-phone">Rating Trip</label>
                                <input type="number" name="rating" value="{{ old('rating', $trip->rating) }}"
                                    max="5" min="1" id="basic-default-phone"
                                    class="form-control @error('rating') is-invalid @enderror phone-mask"
                                    placeholder="1,2,3,4,5">
                                @error('rating')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-message">Description</label>
                                <textarea id="basic-default-message" name="description" class="form-control @error('description') is-invalid @enderror"
                                    placeholder="Hi, Do you have a moment to talk Joe?">{{ old('description', $trip->description) }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="formFile" class="form-label">Image Trip</label>
                                <input class="form-control @error('image') is-invalid @enderror" type="file"
                                    name="image" id="formFile">
                                @error('image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary waves-effect waves-light">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
