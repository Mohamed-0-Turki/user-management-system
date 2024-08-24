<div class="w-full overflow-x-auto">
    <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md">
        <thead class="bg-gray-200 text-gray-600 uppercase text-sm">
            <tr>
                @foreach ($headers as $header)
                    <th class="py-3 px-4 text-left">{{ $header }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody class="text-gray-700">
            {{ $slot }}
        </tbody>
    </table>
</div>
