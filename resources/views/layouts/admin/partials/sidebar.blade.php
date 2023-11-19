<div class="side-nav">
    <div class="side-nav-inner">
        @php
            @endphp
        <ul class="side-nav-menu scrollable">
            @foreach(config('menus_admin') as $item)
                <li
                    class="nav-item @if($item['route'] === request()->route()->getName()) avatar-blue @endif"
                >
                    <a class="" href="{{ route($item['route']) }}">
                                <span class="icon-holder">
                                    <i
                                        class="{{ $item['icon'] }} @if($item['route'] === request()->route()->getName()) text-primary @endif
                                        "
                                    ></i>
                                </span>
                        <span class="title">{{ $item['name'] }}</span>
                        {{--                    <span class="arrow">--}}
                        {{--                                    <i class="arrow-icon"></i>--}}
                        {{--                                </span>--}}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
