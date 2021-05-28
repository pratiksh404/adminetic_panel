@extends('admin.layouts.app')

@section('content')
<x-admin.edit-page name="preference" route="preference" :model="$preference">
    <x-slot name="content">
        {{-- ================================Form================================ --}}
        @include('admin.layouts.modules.preference.edit_add')
        {{-- =================================================================== --}}
    </x-slot>
</x-admin.edit-page>
@endsection

@section('custom_js')
@include('admin.layouts.modules.preference.scripts')
@endsection