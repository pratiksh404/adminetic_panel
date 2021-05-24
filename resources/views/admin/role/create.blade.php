@extends('admin.layouts.app')

@section('content')
    <x-admin.create-page name="role" route="role">
        <x-slot name="content">
            {{-- ================================Form================================ --}}
            @include('admin.layouts.modules.role.edit_add')
            {{-- =================================================================== --}}
        </x-slot>
    </x-admin.create-page>
@endsection

@section('custom_js')
    @include('admin.layouts.modules.role.scripts')
@endsection
