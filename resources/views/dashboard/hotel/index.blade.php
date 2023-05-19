@extends('dashboard.layout.main')

@section('main')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row g-4 mb-4">
                <div class="col-sm-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-start justify-content-between">
                                <div class="content-left">
                                    <span>Session</span>
                                    <div class="d-flex align-items-center my-1">
                                        <h4 class="mb-0 me-2">{{ $hotels->count() }}</h4>
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
                    <a href="{{ route('dashboard.hotels.create') }}" class="btn btn-primary waves-effect waves-light">Create
                        Hotel</a>
                </div>
                <div class="card-datatable table-responsive">
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                        <div class="card">
                            <h5 class="card-header">All Hotel</h5>
                            <div class="">
                                <table class="table card-table">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>description</th>
                                            <th>Location</th>
                                            <th>Status</th>
                                            <th>created_at</th>
                                            <th>updated_at</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($hotels as $hotel)
                                            <tr>
                                                <td>{{ $hotel->id }}</td>
                                                <td>{{ $hotel->name }}</td>
                                                <td>{{ $hotel->description }}</td>
                                                <td>{{ $hotel->location }}</td>
                                                <td><span class="badge bg-label-primary me-1">Active</span></td>
                                                <td>{{ $hotel->updated_at->format('Y m d') }}</td>
                                                <td>{{ $hotel->created_at->format('Y m d') }}</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                            data-bs-toggle="dropdown"><i
                                                                class="ti ti-dots-vertical"></i></button>
                                                        <div class="dropdown-menu">
                                                            <a href="{{ route('dashboard.hotels.edit', $hotel->id) }}"
                                                                class="dropdown-item"><i
                                                                    class="ti ti-pencil me-1"></i>Edit</a>
                                                            <a href="{{ route('dashboard.hotels.destroy', $hotel->id) }}" class="dropdown-item"><i
                                                                    class="ti ti-trash me-1"></i>Delete</a>
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
            <!-- Offcanvas to add new user -->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddUser"
                aria-labelledby="offcanvasAddUserLabel">
                <div class="offcanvas-header">
                    <h5 id="offcanvasAddUserLabel" class="offcanvas-title">Add User</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body mx-0 flex-grow-0 pt-0 h-100">
                    <form class="add-new-user pt-0 fv-plugins-bootstrap5 fv-plugins-framework" id="addNewUserForm"
                        onsubmit="return false" novalidate="novalidate">
                        <div class="mb-3 fv-plugins-icon-container">
                            <label class="form-label" for="add-user-fullname">Full Name</label>
                            <input type="text" class="form-control" id="add-user-fullname" placeholder="John Doe"
                                name="userFullname" aria-label="John Doe">
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <div class="mb-3 fv-plugins-icon-container">
                            <label class="form-label" for="add-user-email">Email</label>
                            <input type="text" id="add-user-email" class="form-control"
                                placeholder="john.doe@example.com" aria-label="john.doe@example.com" name="userEmail">
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="add-user-contact">Contact</label>
                            <input type="text" id="add-user-contact" class="form-control phone-mask"
                                placeholder="+1 (609) 988-44-11" aria-label="john.doe@example.com" name="userContact">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="add-user-company">Company</label>
                            <input type="text" id="add-user-company" class="form-control" placeholder="Web Developer"
                                aria-label="jdoe1" name="companyName">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="country">Country</label>
                            <div class="position-relative"><select id="country"
                                    class="select2 form-select select2-hidden-accessible" data-select2-id="country"
                                    tabindex="-1" aria-hidden="true">
                                    <option value="" data-select2-id="2">Select</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="Canada">Canada</option>
                                    <option value="China">China</option>
                                    <option value="France">France</option>
                                    <option value="Germany">Germany</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Korea">Korea, Republic of</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Russia">Russian Federation</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="United States">United States</option>
                                </select><span class="select2 select2-container select2-container--default" dir="ltr"
                                    data-select2-id="1" style="width: 335px;"><span class="selection"><span
                                            class="select2-selection select2-selection--single" role="combobox"
                                            aria-haspopup="true" aria-expanded="false" tabindex="0"
                                            aria-disabled="false" aria-labelledby="select2-country-container"><span
                                                class="select2-selection__rendered" id="select2-country-container"
                                                role="textbox" aria-readonly="true"><span
                                                    class="select2-selection__placeholder">Select
                                                    Country</span></span><span class="select2-selection__arrow"
                                                role="presentation"><b role="presentation"></b></span></span></span><span
                                        class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="user-role">User Role</label>
                            <select id="user-role" class="form-select">
                                <option value="subscriber">Subscriber</option>
                                <option value="editor">Editor</option>
                                <option value="maintainer">Maintainer</option>
                                <option value="author">Author</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="user-plan">Select Plan</label>
                            <select id="user-plan" class="form-select">
                                <option value="basic">Basic</option>
                                <option value="enterprise">Enterprise</option>
                                <option value="company">Company</option>
                                <option value="team">Team</option>
                            </select>
                        </div>
                        <button type="submit"
                            class="btn btn-primary me-sm-3 me-1 data-submit waves-effect waves-light">Submit</button>
                        <button type="reset" class="btn btn-label-secondary waves-effect"
                            data-bs-dismiss="offcanvas">Cancel</button>
                        <input type="hidden">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->

    <div class="content-backdrop fade"></div>
@endsection
