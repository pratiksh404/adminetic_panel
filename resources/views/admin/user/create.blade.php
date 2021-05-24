@extends('admin.layouts.app')

@section('content')
    <x-admin.create-page name="user" route="user">
        <x-slot name="content">
            {{-- ================================Form================================ --}}
            @include('admin.layouts.modules.user.edit_add')
            {{-- =================================================================== --}}
        </x-slot>
    </x-admin.create-page>
@endsection

@section('custom_js')
    @include('admin.layouts.modules.user.scripts')
@endsection
