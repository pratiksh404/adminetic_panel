@extends('admin.layouts.app')

@section('content')
    <x-admin.index-admin.page name="permission" route="permission">
        <x-slot name="content">
            {{-- ================================Card================================ --}}
            <table class="table table-striped table-bordered datatable">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Browse</th>
                        <th>Read</th>
                        <th>Edit</th>
                        <th>Add</th>
                        <th>Delete</th>
                        <th>Role</th>
                        <th>Model</th>
                        <th>Name</th>
                        <th>Can</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($permissions as $permission)
                        <tr>
                            <td>{{ $permission->id }}</td>
                            <td>
                                <i
                                    class="feather icon-user-{{ $permission->browse ? 'check' : 'x' }} text-{{ $permission->browse ? 'success' : 'danger' }}"></i>
                            </td>
                            <td>
                                <i
                                    class="feather icon-user-{{ $permission->read ? 'check' : 'x' }} text-{{ $permission->read ? 'success' : 'danger' }}"></i>
                            </td>
                            <td>
                                <i
                                    class="feather icon-user-{{ $permission->edit ? 'check' : 'x' }} text-{{ $permission->edit ? 'success' : 'danger' }}"></i>
                            </td>
                            <td>
                                <i
                                    class="feather icon-user-{{ $permission->add ? 'check' : 'x' }} text-{{ $permission->add ? 'success' : 'danger' }}"></i>
                            </td>
                            <td>
                                <i
                                    class="feather icon-user-{{ $permission->delete ? 'check' : 'x' }} text-{{ $permission->delete ? 'success' : 'danger' }}"></i>
                            </td>
                            <td>
                                {{ $permission->role->name ?? '' }}
                            </td>
                            <td>
                                {{ $permission->model }}
                            </td>
                            <td>{{ $permission->name ?? 'N/A' }}</td>
                            <td><span
                                    class="badge badge-{{ isset($permission->can) ? ($permission->can ? 'success' : 'danger') : 'primary' }}">{{ isset($permission->can) ? ($permission->can ? 'Can' : 'Cannot') : 'N/A' }}</span>
                            </td>
                            <td>
                                <x-admin.action :model="$permission" route="permission" show="0" />
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>id</th>
                        <th>Browse</th>
                        <th>Read</th>
                        <th>Edit</th>
                        <th>Add</th>
                        <th>Delete</th>
                        <th>Role</th>
                        <th>Model</th>
                        <th>Name</th>
                        <th>Can</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>
            </table>
            {{-- =================================================================== --}}
        </x-slot>
    </x-admin.index-admin.page>
@endsection

@section('custom_js')
    @include('admin.layouts.modules.permission.scripts')
@endsection