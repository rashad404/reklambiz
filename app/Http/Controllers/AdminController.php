<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Campaign;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display the admin dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Example: Get counts of different entities to show a summary on the dashboard
        $userCount = User::count();
        $campaignCount = Campaign::count();

        return view('admin.dashboard', [
            'userCount' => $userCount,
            'campaignCount' => $campaignCount,
        ]);
    }

    /**
     * Display a list of users for management.
     *
     * @return \Illuminate\View\View
     */
    public function users()
    {
        $users = User::all();

        return view('admin.users.index', compact('users'));
    }

    /**
     * Display a list of campaigns.
     *
     * @return \Illuminate\View\View
     */
    public function campaigns()
    {
        $campaigns = Campaign::all();

        return view('admin.campaigns.index', compact('campaigns'));
    }

    /**
     * Display the settings page.
     *
     * @return \Illuminate\View\View
     */
    public function settings()
    {
        return view('admin.settings');
    }

    /**
     * Handle a settings update request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateSettings(Request $request)
    {
        // Example: Update application settings
        // Here you might update application settings in the database or config files
        
        $request->validate([
            'site_name' => 'required|string|max:255',
            'site_email' => 'required|email|max:255',
        ]);

        // Assume there's a `settings` table or a `Setting` model to store this information
        // This is a placeholder example for illustration

        // Setting::updateOrCreate(['key' => 'site_name'], ['value' => $request->input('site_name')]);
        // Setting::updateOrCreate(['key' => 'site_email'], ['value' => $request->input('site_email')]);

        return redirect()->route('admin.settings')->with('status', 'Settings updated successfully!');
    }
}
