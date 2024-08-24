<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UsersTable extends Component
{
    use WithPagination;

    public int $perPage = 10;
    public string $search = '';

    protected $paginationTheme = 'tailwind'; // or 'tailwind' for Tailwind CSS

    public function render()
    {
        if (! $this->search) {
            $users = User::select('id', 'name', 'email', 'created_at')->paginate($this->perPage);
        }
        else {
            $users = User::select('id', 'name', 'email', 'created_at')
            ->where('name', 'like', $this->search.'%')
            ->paginate($this->perPage);
        }
        return view('livewire.users-table', ['users' => $users]);
    }

    public function updateSearch() {
        $this->resetPage();
    }
}
