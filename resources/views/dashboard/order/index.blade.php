@extends('dashboard.layout.main')

@section('main')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">DataTables /</span> Basic</h4>

        <div class="card">
            <h5 class="card-header">Borderless Table</h5>
            <div class="table-responsive text-nowrap">
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Status</th>
                            <th>Address</th>
                            <th>Address2</th>
                            <th>Country</th>
                            <th>State</th>
                            <th>ZIP</th>
                            <th>Payment_id</th>
                            <th>User_id</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            {{-- <th>Actions</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->firstName }}</td>
                                <td>{{ $order->lastName }}</td>
                                <td>{{ $order->email }}</td>
                                <td>{{ $order->phone }}</td>
                                <td>
                                    @if ($order->status == 0)
                                        <span class="badge bg-label-warning me-1">Pending</span>
                                    @elseif ($order->status == 1)
                                        <span class="badge bg-label-success me-1">Completed</span>
                                    @elseif ($order->status == 2)
                                        <span class="badge bg-label-danger me-1">Cancel</span>
                                    @endif
                                </td>
                                <td>{{ $order->address }}</td>
                                <td>{{ $order->address2 }}</td>
                                <td>{{ $order->country }}</td>
                                <td>{{ $order->state }}</td>
                                <td>{{ $order->zip }}</td>
                                <td>{{ $order->payment_id }}</td>
                                <td>{{ $order->user->name }}</td>
                                <td>{{ $order->created_at->format('Y m d') }}</td>
                                <td>{{ $order->updated_at->format('Y m d') }}</td>

                                {{-- <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);"><i
                                                    class="ti ti-pencil me-1"></i>
                                                Edit</a>
                                            <a class="dropdown-item" href="javascript:void(0);"><i
                                                    class="ti ti-trash me-1"></i>
                                                Delete</a>
                                        </div>
                                    </div>
                                </td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
