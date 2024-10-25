<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;

class AdvertiserController extends Controller
{
    /**
     * Display the advertiser dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Example data for the dashboard (e.g., total campaigns)
        $campaignCount = Campaign::where('advertiser_id', auth()->id())->count();

        return view('advertiser.dashboard', [
            'campaignCount' => $campaignCount,
        ]);
    }

    /**
     * Display a list of campaigns created by the advertiser.
     *
     * @return \Illuminate\View\View
     */
    public function campaigns()
    {
        $campaigns = Campaign::where('advertiser_id', auth()->id())->get();

        return view('advertiser.campaigns.index', compact('campaigns'));
    }

    /**
     * Show the form for creating a new campaign.
     *
     * @return \Illuminate\View\View
     */
    public function createCampaign()
    {
        return view('advertiser.campaigns.create');
    }

    /**
     * Store a new campaign.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeCampaign(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'budget' => 'required|numeric|min:1',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'targeting_json' => 'nullable|json',
        ]);

        Campaign::create([
            'advertiser_id' => auth()->id(),
            'name' => $request->name,
            'budget' => $request->budget,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'targeting_json' => $request->targeting_json,
            'status' => 'active',
        ]);

        return redirect()->route('advertiser.campaigns')->with('status', 'Campaign created successfully!');
    }

    /**
     * Display analytics for the advertiser's campaigns.
     *
     * @return \Illuminate\View\View
     */
    public function analytics()
    {
        // Placeholder example data
        $analyticsData = [
            'impressions' => 12345,
            'clicks' => 678,
            'conversions' => 45,
        ];

        return view('advertiser.analytics', compact('analyticsData'));
    }
}
