@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>My Profile</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}"> <i data-feather="home"></i></a>
                        </li>
                        <li class="breadcrumb-item active">My Profile</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-12 col-sm-12">
            <div class="card shadow-lg custom-card p-2 my-2">
                <div class="card-header"><img class="img-fluid" src="{{ getLogoBanner() }}" alt="Logo Banner"></div>
                <div class="card-profile"><img class="rounded-circle" src="{{ getProfilePlaceholder() }}"
                        alt="{{ $user->name ?? 'N/A' }}"></div>
                <ul class="card-social">
                    @isset($profile->facebook)
                        <li><a href="{{ $profile->facebook }}" data-bs-original-title="Facebook" title="Facebook"><i
                                    class="fa fa-facebook"></i></a></li>
                    @endisset
                    @isset($profile->linkedin)
                        <li><a href="{{ $profile->linkedin }}" data-bs-original-title="Linkedin" title="Linkedin"><i
                                    class="fa fa-linkedin"></i></a></li>
                    @endisset
                    @isset($profile->instagram)
                        <li><a href="{{ $profile->instagram }}" data-bs-original-title="Instagram" title="Instagram"><i
                                    class="fa fa-instagram"></i></a></li>
                    @endisset
                    @isset($profile->twitter)
                        <li><a href="{{ $profile->twitter }}" data-bs-original-title="Twitter" title="Twitter"><i
                                    class="fa fa-twitter"></i></a></li>
                    @endisset
                </ul>
                <div class="text-center profile-details">
                    <h5>{{ $user->name }}</h5>
                    @isset($user->roles)
                        <h6>
                            @foreach ($user->roles as $role)
                                <span class="badge badge-primary">{{ $role->name }}</span>
                            @endforeach
                        </h6>
                    @endisset
                </div>
            </div>
            <br>
            <div class="card shadow-lg my-2 p-3">
                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <td><b>Email : </b></td>
                            <td>{{ $user->email ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <td><b>Created At : </b></td>
                            <td> {{ $user->created_at->toFormattedDateString() ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <td><b>Verified : </b></td>
                            <td><span
                                    class="badge badge-{{ isset($user->email_verified_at) ? 'success' : 'danger' }}">{{ isset($user->email_verified_at) ? 'Yes' : 'No' }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td><b>Active : </b></td>
                            <td><span
                                    class="badge badge-{{ $profile->status ? 'success' : 'danger' }}">{{ $profile->status ? 'Active' : 'Inactive' }}</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-lg-8">
            @isset($user->roles)
                <div class="card shadow-lg my-2" style="max:height:40vh;overflow-y:auto">
                    @foreach ($user->roles as $role)
                        <table class="table table-responsive table-striped">
                            <thead>
                                <tr>
                                    <th>Module Permission</th>
                                    <th>Browse</th>
                                    <th>Read</th>
                                    <th>Edit</th>
                                    <th>Add</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($role->permissions as $permission)
                                    <tr>
                                        <td>{{ $permission->model ?? '' }}</td>
                                        <td>{{ $permission->browse ? 'Yes' : 'No' }}</td>
                                        <td>{{ $permission->read ? 'Yes' : 'No' }}</td>
                                        <td>{{ $permission->edit ? 'Yes' : 'No' }}</td>
                                        <td>{{ $permission->add ? 'Yes' : 'No' }}</td>
                                        <td>{{ $permission->delete ? 'Yes' : 'No' }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endforeach
                </div>
            @endisset
            <div class="card shadow-lg my-2 p-3">
                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <td>Username:</td>
                            <td class="users-view-username">{{ $profile->username ?? '' }}</td>
                        </tr>
                        <tr>
                            <td>Name:</td>
                            <td class="users-view-name">{{ $user->name ?? '' }}</td>
                        </tr>
                        <tr>
                            <td>E-mail:</td>
                            <td class="users-view-email">{{ $user->email ?? '' }}</td>
                        </tr>
                        <tr>
                            <td>Gender:</td>
                            <td>{{ $profile->gender ?? '' }}</td>
                        </tr>
                        <tr>
                            <td>Address:</td>
                            <td>{{ $profile->address ?? '' }}</td>
                        </tr>
                        <tr>
                            <td>Phone Number:</td>
                            @if (isset($profile->phone_no))
                                @foreach ($profile->phone_no as $phone_no)
                                    <td>{{ $phone_no }}</td>
                                @endforeach
                            @endif
                        </tr>
                    </tbody>
                </table>
                <h5 class="mb-1">Personal Info</h5>
                <table class="table table-borderless mb-0">
                    <tbody>
                        <tr>
                            <td>Birthday:</td>
                            <td>{{ $profile->birthday ?? '' }}</td>
                        </tr>
                        <tr>
                            <td>Country:</td>
                            <td>{{ $profile->country ?? '' }}</td>
                        </tr>
                        <tr>
                            <td>Martial Status:</td>
                            <td>{{ $profile->martial_status ?? '' }}</td>
                        </tr>
                        <tr>
                            <td>Blood Group:</td>
                            <td>{{ $profile->blood_group ?? '' }}</td>
                        </tr>
                        <tr>
                            <td>Father Name:</td>
                            <td>{{ $profile->father_name ?? '' }}</td>
                        </tr>
                        <tr>
                            <td>Mother Name:</td>
                            <td>{{ $profile->mother_name ?? '' }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('custom_js')
    @include('admin.layouts.modules.profile.scripts')
@endsection
