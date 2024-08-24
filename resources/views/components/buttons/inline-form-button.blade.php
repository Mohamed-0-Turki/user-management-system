<form
    class="w-fit min-w-20 px-3 font-bold h-10 text-base text-white rounded-lg flex items-center justify-center duration-150 ease-in-out capitalize"
    style="background-color: {{ $backgroundColor }}"
    action="{{ $action }}"
    method="{{ $method }}"
    >
    @csrf
    @if ($actualMethod)
        @method($actualMethod)
    @endif
    <button class="w-full h-full flex gap-3 items-center justify-center" type="submit">
        <span>{{ $slot }}</span>
        @if ($icon)
            <i class="{{ $icon }}"></i>
        @endif
    </button>
</form>
