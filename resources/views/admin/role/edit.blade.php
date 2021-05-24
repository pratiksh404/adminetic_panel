@extends('admin.layouts.app')

@section('content')
    <x-admin.edit-page name="role" route="role" :model="$role">
        <x-slot name="content">
            {{-- ================================Form================================ --}}
            @include('admin.layouts.modules.role.edit_add')
            {{-- =================================================================== --}}
        </x-slot>
    </x-admin.edit-page>
@endsection

@section('custom_js')
    @include('admin.layouts.modules.role.scripts')
@endsection
