<div class="flex flex-col gap-2 w-full">
    <label for="{{ $id }}" class="block text-gray-700 text-lg font-semibold capitalize">{{ $label }}</label>
    <input
        class="w-full px-3 py-2 text-base sm:text-lg border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400 duration-150 ease-in-out"
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $id }}"
        @if($value) value="{{ $value }}" @endif
        @if($placeholder) placeholder="{{ $placeholder }}" @endif
        {{ $attributes }}
    >
</div>
