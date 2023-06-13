@extends('dashboard.layout.main')

@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Vertical Layouts</h4>

        <!-- Basic Layout -->
        <div class="row">
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Update Team</h5>
                        <small class="text-muted float-end">Default label</small>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('dashboard.teams.update', $team->id) }}" class="needs-validation d-flex flex-wrap justify-content-between"
                            method="POST" enctype="multipart/form-data">

                            @csrf
                            @method('PUT')

                            <div class="mb-3 col-3">
                                <label class="form-label" for="basic-default-fullname">Trip Name</label>
                                <input type="text" name="name" value="{{ old('name', $team->name) }}"
                                    class="form-control @error('name') is-invalid @enderror" id="basic-default-fullname"
                                    placeholder="John Doe">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3 col-3">
                                <label class="form-label" for="basic-default-company">Title Team</label>
                                <input type="text" name="title" value="{{ old('title', $team->title) }}"
                                    class="form-control @error('title') is-invalid @enderror" id="basic-default-company"
                                    placeholder="ACME Inc.">
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3 col-3">
                                <label class="form-label" for="basic-default-phone">Rating Team</label>
                                <input type="number" name="rating" value="{{ old('rating', $team->rating) }}"
                                    max="5" min="1" id="basic-default-phone"
                                    class="form-control @error('rating') is-invalid @enderror phone-mask"
                                    placeholder="1,2,3,4,5,6">
                                @error('rating')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3 col-6">
                                <label class="form-label" for="basic-default-message">Description</label>
                                <textarea id="basic-default-message" name="description" class="form-control @error('description') is-invalid @enderror"
                                    placeholder="Hi, Do you have a moment to talk Joe?">{{ old('description', $team->description) }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3 col-5">
                                <label for="formFile" class="form-label">Image Trip</label>
                                <input class="form-control @error('image') is-invalid @enderror" type="file"
                                    name="image" id="formFile">
                                @error('image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary waves-effect waves-light col-3">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
