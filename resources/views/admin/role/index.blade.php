@extends('admin.layouts.app')

@section('content')
    <x-admin.index-page name="role" route="role">
        <x-slot name="content">
            {{-- ================================Card================================ --}}
            <table class="table table-striped table-bordered datatable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Role</th>
                        <th>Level</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $role)
                        @if ($role->name != 'superadmin')
                            <tr>
                                <td>{{ $role->id }}</td>
                                <td>{{ $role->name }}</td>
                                <td>{{ $role->level }}</td>
                                <td>
                                    <x-admin.action :model="$role" route="role">
                                        <x-slot name="buttons">
                                            <a href="{{ adminShowRoute('role', $role->id) }}"
                                                class="btn btn-info btn-air-info btn-sm p-2" data-toggle="tooltip"
                                                placement="top" title="Role's Permissions"><i
                                                    class="feather icon-unlock"></i></a>
                                        </x-slot>
                                    </x-admin.action>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Role</th>
                        <th>Level</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>
            </table>
            {{-- =================================================================== --}}
        </x-slot>
    </x-admin.index-page>
@endsection

@section('custom_js')
    @include('admin.layouts.modules.role.scripts')
@endsection
