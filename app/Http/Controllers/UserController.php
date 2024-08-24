<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index() : View {
        return view('index');
    }

    public function create() : View {
        return view('create');
    }

    public function store(UserRequest $request) : RedirectResponse {
        $validatedData = $request->validated();
        $validatedData['password'] = Hash::make($validatedData['password']);
        $user = User::create($validatedData);
        return redirect()->route('users.index')->with('status', 'User account has been created.');
    }

    public function show(User $user) : View {
        return view('show', ['user' => $user]);
    }

    public function edit(User $user) : View {
        return view('edit', ['user' => $user]);
    }

    public function update(UserRequest $request, User $user) : RedirectResponse {
        $validatedData = $request->validated();

        if (!empty($validatedData['password'])) {
            $validatedData['password'] = Hash::make($validatedData['password']);
        } else {
            // Remove password from the data if it's not being updated
            unset($validatedData['password']);
        }

        // Update the user with the validated data
        $user->update($validatedData);

        // Redirect back to the users list with a success message
        return redirect()->route('users.show', [$user->id])->with('status', 'User account has been updated successfully.');
    }


    public function destroy(string $userID) : RedirectResponse {
        $user = User::find($userID);

        if ($user) {
            $user->delete();
            return redirect()->route('users.index')->with('status', 'User account has been deleted successfully.');
        } else {
            return redirect()->route('users.index')->with('error', 'User account not found.');
        }
    }
}
