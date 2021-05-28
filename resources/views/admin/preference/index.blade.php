@extends('admin.layouts.app')

@section('content')
    <x-admin.index-page name="preference" route="preference">
        <x-slot name="content">
            {{-- ================================Card================================ --}}
            <table class="table table-striped table-bordered datatable">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Active</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($preferences as $preference)
                        <tr>
                            <td>{{ $preference->preference }}</td>
                            <td>{{ $preference->description }}</td>
                            <td><span
                                    class="badge badge-{{ $preference->active ? 'success' : 'danger' }}">{{ $preference->active ? 'Active' : 'Inactive' }}</span>
                            </td>
                            <td>
                                <x-admin.action :model="$preference" route="preference" show="0" />
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Active</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>
            </table>
            {{-- =================================================================== --}}
        </x-slot>
    </x-admin.index-page>
@endsection

@section('custom_js')
    @include('admin.layouts.modules.preference.scripts')
@endsection
