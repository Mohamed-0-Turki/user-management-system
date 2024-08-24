<div class="flex flex-col gap-5">
    <x-inputs.input label="" id="name" type="text" name="name" value="{{ old('name') }}" placeholder="search users by name" wire:model.live="search" />


    @php
        $headers = ['#id', 'name', 'email', 'created at', 'actions'];
        $rows = $users;
    @endphp
    <x-table.table :headers="$headers">
        @foreach ($rows as $row)
            <x-table.tr>
                <x-table.td>{{ $row->id }}</x-table.td>
                <x-table.td>{{ $row->name }}</x-table.td>
                <x-table.td>{{ $row->email }}</x-table.td>
                <x-table.td>{{ $row->created_at }}</x-table.td>
                <x-table.td>
                    <div class="flex gap-3">
                        <!-- Link Button with action URL specified -->
                        <x-buttons.link-button action="{{ route('users.show', $row->id) }}" backgroundColor="#1e90ff">
                            Show
                        </x-buttons.link-button>

                        <!-- Link Button with default action and no icon -->
                        <x-buttons.link-button backgroundColor="#ffa500" action="{{ route('users.edit', $row->id) }}">
                            Edit
                        </x-buttons.link-button>

                        <!-- Inline Form Button with background color specified and no icon -->
                        <x-buttons.inline-form-button
                            action="{{ route('users.destroy', $row->id) }}"
                            method="post"
                            actualMethod="delete"
                            backgroundColor="red">
                            Delete
                        </x-buttons.inline-form-button>
                    </div>
                </x-table.td>
            </x-table.tr>
        @endforeach
    </x-table.table>

        {{-- Pagination --}}
        <div class="mt-4">
            {{ $users->links() }}
        </div>
</div>
