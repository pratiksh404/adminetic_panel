    @isset($menus)
        @if (count($menus) > 0)
            @foreach ($menus as $menu)
                @isset($menu['type'])
                    @if ($menu['type'] == 'breaker' || $menu['type'] == 'Breaker')
                        <li class="sidebar-main-title">
                            <div>
                                @isset($menu['name'])
                                    <h6 class="lan-1">{{ $menu['name'] }}</h6>
                                @endisset
                                @isset($menu['description'])
                                    <p class="lan-2">{{ $menu['description'] }}</p>
                                @endisset
                            </div>
                        </li>
                    @elseif($menu['type'] == 'link' || $menu['type'] == 'Link')
                        @isset($menu['link'])
                            @if (isset($menu['conditions']) ? getCondition($menu['conditions']) : true)
                                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav"
                                        href="{{ $menu['link'] }}">
                                        <i class="{{ $menu['icon'] ?? 'fa fa-bars' }}">
                                        </i><span>{{ $menu['name'] ?? 'N/A' }}</span></a></li>
                            @endif
                        @endisset
                    @elseif ($menu['type'] == 'menu' || $menu['type'] == 'Menu')
                        @if (isset($menu['conditions']) ? getCondition($menu['conditions']) : true)
                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title" href="#">
                                    <i class="{{ $menu['icon'] ?? 'fa fa-bars' }}"></i> {{ $menu['name'] ?? 'N/A' }}
                                    <div class="according-menu"><i class="fa fa-angle-right"></i></div>
                                </a>
                                @isset($menu['children'])
                                    @if (count($menu['children']) > 0)
                                        <ul class="sidebar-submenu" style="display: none;">
                                            @foreach ($menu['children'] as $submenu)
                                                @if (isset($submenu['conditions']) ? getCondition($submenu['conditions']) : true)
                                                    @isset($submenu['link'])
                                                        <li><a href="{{ $submenu['link'] }}">{{ $submenu['name'] ?? 'N/A' }}</a>
                                                        </li>
                                                    @endisset
                                                @endif
                                            @endforeach
                                        </ul>
                                    @endif
                                @endisset
                            </li>
                        @endif
                    @endif
                @endisset
            @endforeach
        @endif
    @endisset
