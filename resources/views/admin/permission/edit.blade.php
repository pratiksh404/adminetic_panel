@extends('admin.layouts.app')

@section('content')
    <x-admin.edit-page name="permission" route="permission" :model="$permission">
        <x-slot name="content">
            {{-- ================================Form================================ --}}
            @include('admin.layouts.modules.permission.edit_add')
            {{-- =================================================================== --}}
        </x-slot>
    </x-admin.edit-page>
@endsection

@section('custom_js')
    @include('admin.layouts.modules.permission.scripts')
@endsection
