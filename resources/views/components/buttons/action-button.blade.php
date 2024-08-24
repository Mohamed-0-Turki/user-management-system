<button
    class="text-xl w-full px-3 font-bold h-12 text-white rounded-lg flex items-center justify-center duration-150 ease-in-out capitalize gap-3"
    type="{{ $type }}"
    style="background-color: {{ $backgroundColor }}"
    ><span>{{ $slot }}</span>@if ($icon)<i class="{{ $icon }}"></i>@endif</button>
