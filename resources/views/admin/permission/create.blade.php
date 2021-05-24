@extends('admin.layouts.app')

@section('content')
    <x-admin.create-page name="permission" route="permission">
        <x-slot name="content">
            {{-- ================================Form================================ --}}
            @include('admin.layouts.modules.permission.edit_add')
            {{-- =================================================================== --}}
        </x-slot>
    </x-admin.create-page>
@endsection

@section('custom_js')
    @include('admin.layouts.modules.permission.scripts')
@endsection
