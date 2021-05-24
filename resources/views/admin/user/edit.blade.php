@extends('admin.layouts.app')

@section('content')
    <x-admin.edit-page name="user" route="user" :model="$user">
        <x-slot name="content">
            {{-- ================================Form================================ --}}
            @include('admin.layouts.modules.user.edit_add')
            {{-- =================================================================== --}}
        </x-slot>
    </x-admin.edit-page>
@endsection

@section('custom_js')
    @include('admin.layouts.modules.user.scripts')
@endsection
