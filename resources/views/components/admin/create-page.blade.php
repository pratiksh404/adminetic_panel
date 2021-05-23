<div>
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>{{ $name }}</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}"> <i data-feather="home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{ adminRedirectRoute($route) }}"></a></li>
                        <li class="breadcrumb-item active">Create {{ $name }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="card {{ config('adminetic.card', '') }}">
        <div class="card-header bg-primary {{ config('adminetic.card_header', 'b-l-primary border-3') }}">
            <h5>@isset($icon) <i class="{{ $icon }} me-2"></i> @endisset Create {{ $name ?? 'N/A' }}</h5>
            @if (config('adminetic.card_action_enabled', true))
                <div class="card-header-right">
                    @if (isset($actions))
                        {{ $actions }}
                    @else
                        <ul class="list-unstyled card-option">
                            <li><i class="fa fa-spin fa-cog"></i></li>
                            <li><i class="icofont icofont-maximize full-card"></i></li>
                            <li><i class="icofont icofont-minus minimize-card"></i></li>
                        </ul>
                    @endif
                </div>
            @endif
            <br>
            <div class="row">
                <div class="col-lg-8">
                    {{ $description ?? 'Create ' . $name . ' in the system' }} <br>
                    <span class="text-secondary">The field labels marked with * are required
                        input fields.</span>
                </div>
                <div class="col-lg-4 d-flex justify-content-end">
                    <a href="{{ adminRedirectRoute($route) }}"><button class="btn btn-air-primary">Back</button></a>
                    @isset($buttons)
                        {{ $buttons }}
                    @endisset
                </div>
            </div>
        </div>
        <div class="card-body {{ config('adminetic.card_body', '') . ' ' . ($bg_color ?? '') }}">
            <form action="{{ adminStoreRoute($route) }}" method="post" enctype="multipart/form-data"
                class="{{ $formclass ?? '' }}" id="{{ $formid ?? '' }}">
                @csrf
                {{ $content ?? '' }}
            </form>
        </div>
    </div>
</div>
