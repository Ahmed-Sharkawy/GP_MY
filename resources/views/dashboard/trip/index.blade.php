@extends('dashboard.layout.main')

@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row g-4 mb-4">
            <div class="col-sm-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-start justify-content-between">
                            <div class="content-left">
                                <span>Session</span>
                                <div class="d-flex align-items-center my-1">
                                    <h4 class="mb-0 me-2">{{ $trips->count() }}</h4>
                                    <span class="text-success">(+29%)</span>
                                </div>
                                <span>Total Hotels</span>
                            </div>
                            <span class="badge bg-label-primary rounded p-2">
                                <i class="ti ti-user ti-sm"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-start justify-content-between">
                            <div class="content-left">
                                <span>Paid Users</span>
                                <div class="d-flex align-items-center my-1">
                                    <h4 class="mb-0 me-2">4,567</h4>
                                    <span class="text-success">(+18%)</span>
                                </div>
                                <span>Last week analytics </span>
                            </div>
                            <span class="badge bg-label-danger rounded p-2">
                                <i class="ti ti-user-plus ti-sm"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-start justify-content-between">
                            <div class="content-left">
                                <span>Active Users</span>
                                <div class="d-flex align-items-center my-1">
                                    <h4 class="mb-0 me-2">19,860</h4>
                                    <span class="text-danger">(-14%)</span>
                                </div>
                                <span>Last week analytics</span>
                            </div>
                            <span class="badge bg-label-success rounded p-2">
                                <i class="ti ti-user-check ti-sm"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-start justify-content-between">
                            <div class="content-left">
                                <span>Pending Users</span>
                                <div class="d-flex align-items-center my-1">
                                    <h4 class="mb-0 me-2">237</h4>
                                    <span class="text-success">(+42%)</span>
                                </div>
                                <span>Last week analytics</span>
                            </div>
                            <span class="badge bg-label-warning rounded p-2">
                                <i class="ti ti-user-exclamation ti-sm"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Users List Table -->
        <div class="card">
            <div class="card-header border-bottom">
                <a href="{{ route('dashboard.trips.create') }}" class="btn btn-primary waves-effect waves-light">Create
                    Trip</a>
            </div>
            <div class="card-datatable table-responsive">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                    <div class="card">
                        <h5 class="card-header">All Trip</h5>
                        <div class="">
                            <table class="table card-table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Location</th>
                                        <th>Status</th>
                                        <th>Created_at</th>
                                        <th>Updated_at</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($trips as $trip)
                                        <tr>
                                            <td>{{ $trip->id }}</td>
                                            <td> <img src="{{ $trip->getFirstMediaUrl() }}" width="50px" height="50px"
                                                    class="rounded-circle"></td>
                                            <td>{{ $trip->name }}</td>
                                            <td>{{ $trip->description }}</td>
                                            <td>{{ $trip->location }}</td>
                                            <td><span class="badge bg-label-primary me-1">Active</span></td>
                                            <td>{{ $trip->updated_at->format('Y m d') }}</td>
                                            <td>{{ $trip->created_at->format('Y m d') }}</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown"><i
                                                            class="ti ti-dots-vertical"></i></button>
                                                    <div class="dropdown-menu">
                                                        <a href="{{ route('dashboard.trips.plan.index', $trip->id) }}"
                                                            class="dropdown-item"><i
                                                                class="menu-icon tf-icons ti ti-layout-navbar"></i>Show
                                                            Plan</a>
                                                        <a href="{{ route('dashboard.trips.edit', $trip->id) }}"
                                                            class="dropdown-item"><i class="ti ti-pencil me-1"></i>Edit</a>
                                                        <a href="{{ route('dashboard.trips.destroy', $trip->id) }}"
                                                            class="dropdown-item delete"><i class="ti ti-trash me-1"></i>Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $('.delete').click(function(e) {
            e.preventDefault();
            var href = $(this).attr('href');

            Swal.fire({
                title: 'Are you Delete?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                customClass: {
                    confirmButton: 'btn btn-primary me-1',
                    cancelButton: 'btn btn-label-secondary'
                },
                buttonsStyling: false
            }).then(function(result) {
                if (result.value) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Deleted!',
                        text: 'Your file has been deleted.',
                        customClass: {
                            confirmButton: 'btn btn-success'
                        }
                    });
                    setTimeout(function() {
                        location.href = href
                    }, 1000);
                }
            });
        })
    </script>
@endpush
