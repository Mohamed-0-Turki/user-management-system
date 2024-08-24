<a
    href="{{ $action }}"
    class="w-fit min-w-20 px-3 font-bold h-10 text-base text-white rounded-lg flex gap-3 items-center justify-center duration-150 ease-in-out capitalize"
    style="background-color: {{ $backgroundColor }};"
    ><span>{{ $slot }}</span>@if ($icon)<i class="{{ $icon }}"></i>@endif</a>
