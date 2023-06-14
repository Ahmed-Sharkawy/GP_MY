@extends('dashboard.layout.main')

@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-header border-bottom">
                <a href="{{ route('dashboard.trips.plan.create', $trip->id) }}" class="btn btn-primary waves-effect waves-light">Create
                    Plan</a>
            </div>
            <!-- Pricing Plans -->
            <div class="pb-sm-5 pb-2 rounded-top">
                <div class="container py-5">
                    <h2 class="text-center mb-2 mt-0 mt-md-4">Pricing Plans</h2>
                    <p class="text-center">
                        Get started with us - it's perfect for individuals and teams. Choose a
                        subscription plan that
                        meets your needs.
                    </p>

                    {{-- <div class="d-flex align-items-center justify-content-center flex-wrap gap-2 pb-5 pt-3 mb-0 mb-md-4">
                        <label class="switch switch-primary ms-3 ms-sm-0 mt-2">
                            <span class="switch-label">Monthly</span>
                            <input type="checkbox" class="switch-input price-duration-toggler" checked />
                            <span class="switch-toggle-slider">
                                <span class="switch-on"></span>
                                <span class="switch-off"></span>
                            </span>
                            <span class="switch-label">Annual</span>
                        </label>
                        <div class="mt-n5 ms-n5 d-none d-sm-block">
                            <i class="ti ti-corner-left-down ti-sm text-muted me-1 scaleX-n1-rtl"></i>
                            <span class="badge badge-sm bg-label-primary">Save up to 10%</span>
                        </div>
                    </div> --}}

                    <div class="row mx-0 gy-3 px-lg-5">
                        <!-- Basic -->
                        @foreach ($trip->plans as $plan)
                            <div class="col-4">
                                <div class="card border rounded shadow-none">
                                    <div class="card-body">
                                        <h3 class="card-title fw-semibold text-center text-capitalize mb-1">
                                            {{ $plan->name }}</h3>
                                        <p class="text-center">{{ $plan->days }}</p>
                                        <div class="text-center">
                                            <div class="d-flex justify-content-center">
                                                <sup class="h6 pricing-currency mt-3 mb-0 me-1 text-primary">$</sup>
                                                <h1 class="fw-semibold display-4 mb-0 text-primary">{{ $plan->price }}</h1>
                                            </div>
                                        </div>

                                        <ul class="ps-3 my-4 pt-2">
                                            <li class="mb-2">100 responses a month</li>
                                            <li class="mb-2">Unlimited forms and surveys</li>
                                            <li class="mb-2">Unlimited fields</li>
                                            <li class="mb-2">Basic form creation tools</li>
                                            <li class="mb-0">Up to 2 subdomains</li>
                                        </ul>

                                        <div class="d-flex justify-content-between">
                                            <a href="{{ route('dashboard.trips.plan.edit', $plan->id) }}"
                                                class="btn btn-label-success col-6 p-1 mx-auto">Update Plan</a>
                                            <a href="{{ route('dashboard.trips.plan.destroy', $plan->id) }}"
                                                class="btn btn-danger col-6 p-1 mx-2 delete">
                                                Delete Plan</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
            <!--/ Pricing Plans -->

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
