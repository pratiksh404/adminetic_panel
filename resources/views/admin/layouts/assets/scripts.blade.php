    <!-- latest jquery-->
    <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
    <!-- Bootstrap js-->
    <script src="{{ asset('assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <!-- feather icon js-->
    <script src="{{ asset('assets/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/icons/feather-icon/feather-icon.js') }}"></script>
    <!-- Sidebar jquery-->
    <script src="{{ asset('assets/js/config.js') }}"></script>
    {{-- Plugin Injection --}}
    @include('admin.layouts.assets.plugin_scripts')
    <script src="{{ asset('assets/js/sidebar-menu.js') }}"></script>
    {{-- End Plugin Injection --}}
    {{-- CUSTOM --}}
    <script src="{{ asset('assets/custom/custom.js') }}"></script>
    {{-- Notifiable --}}
    @include('admin.layouts.components.notify')
    {{-- CKEditor --}}
    @include('admin.layouts.assets.ckeditor')
    {{-- Inline Custom --}}
    @yield('custom_js')
    <!-- Theme js-->
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('assets/js/theme-customizer/customizer.js') }}"></script>
    {{-- Livewire --}}
    @livewireScripts
    @stack('livewire_third_party')
