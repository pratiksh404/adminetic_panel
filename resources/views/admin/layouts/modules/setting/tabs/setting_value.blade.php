    @isset($setting_groups)
        <div class="row">
            <div class="col-sm-3 tabs-responsive-side">
                <div class="nav flex-column nav-pills border-tab nav-left" id="v-pills-tab" role="tablist"
                    aria-orientation="vertical">
                    @foreach ($setting_groups as $index => $group)
                        <a class="nav-link {{ $loop->first ? 'active' : '' }}"
                            id="{{ strtolower(str_replace(' ', '_', $index)) }}-tab" data-bs-toggle="pill"
                            href="#{{ strtolower(str_replace(' ', '_', $index)) }}" role="tab"
                            aria-controls="{{ strtolower(str_replace(' ', '_', $index)) }}"
                            aria-selected="true">{{ $index }}</a>
                    @endforeach
                </div>
            </div>
            <div class="col-sm-9">
                <div class="tab-content" id="v-pills-tabContent">
                    @foreach ($setting_groups as $index => $group)
                        <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}"
                            id="{{ strtolower(str_replace(' ', '_', $index)) }}" role="tabpanel"
                            aria-labelledby="{{ strtolower(str_replace(' ', '_', $index)) }}-tab">
                            <ul>
                                @foreach ($group as $setting)
                                    <li>{{ $setting->setting_name }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endisset
