@extends('admin.layouts.app')

@section('content')
<x-admin.edit-page name="setting" route="setting" :model="$setting">
    <x-slot name="content">
        {{-- ================================Form================================ --}}
        @include('admin.layouts.modules.setting.edit_add')
        {{-- =================================================================== --}}
    </x-slot>
</x-admin.edit-page>
@endsection

@section('custom_js')
@include('admin.layouts.modules.setting.scripts')
@endsection