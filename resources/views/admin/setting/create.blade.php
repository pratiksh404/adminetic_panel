@extends('admin.layouts.app')

@section('content')
<x-admin.create-page name="setting" route="setting">
    <x-slot name="content">
        {{-- ================================Form================================ --}}
        @include('admin.layouts.modules.setting.edit_add')
        {{-- =================================================================== --}}
    </x-slot>
</x-admin.create-page>
@endsection

@section('custom_js')
@include('admin.layouts.modules.setting.scripts')
@endsection