@extends('admin.layouts.app')

@section('content')
<x-admin.create-page name="preference" route="preference">
    <x-slot name="content">
        {{-- ================================Form================================ --}}
        @include('admin.layouts.modules.preference.edit_add')
        {{-- =================================================================== --}}
    </x-slot>
</x-admin.create-page>
@endsection

@section('custom_js')
@include('admin.layouts.modules.preference.scripts')
@endsection