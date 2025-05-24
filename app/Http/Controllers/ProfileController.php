<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        $user = $request->user(); // Get the authenticated user

        // Get contribution counts using relationships
        // Assuming relationships 'articles', 'comments', 'likes' are defined in the User model
        // Check if relationships exist before calling count()
        $articleCount = method_exists($user, 'articles') ? $user->articles()->count() : 0;
        $commentCount = method_exists($user, 'comments') ? $user->comments()->count() : 0;
        $likeCount = method_exists($user, 'likes') ? $user->likes()->count() : 0;

        return view('profile.edit', [
            'user' => $user,
            'articleCount' => $articleCount, // Pass counts to the view
            'commentCount' => $commentCount,
            'likeCount' => $likeCount,
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        // Handle avatar upload - Moved from updateAvatar method
        if ($request->hasFile('avatar')) {
            $avatarPath = $request->file('avatar')->store('avatars', 'public');

            // Optionally delete old avatar if it exists
            if ($request->user()->avatar) {
                Storage::disk('public')->delete($request->user()->avatar);
            }

            // Add avatar path to the validated data
            $validated = $request->validated();
            $validated['avatar'] = $avatarPath;

            $request->user()->fill($validated);

        } else {
            // If no new avatar is uploaded, just fill with validated data (name and email)
            $request->user()->fill($request->validated());
        }

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
