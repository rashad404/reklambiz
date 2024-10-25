<?php

namespace App\Http\Controllers;

use App\Models\AdUnit;
use App\Models\Impression;
use App\Models\Click;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    /**
     * Display the publisher dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Example data for the dashboard (e.g., total ad units)
        $adUnitCount = AdUnit::where('publisher_id', auth()->id())->count();

        return view('publisher.dashboard', [
            'adUnitCount' => $adUnitCount,
        ]);
    }

    /**
     * Display a list of ad units created by the publisher.
     *
     * @return \Illuminate\View\View
     */
    public function adUnits()
    {
        $adUnits = AdUnit::where('publisher_id', auth()->id())->get();

        return view('publisher.ad_units.index', compact('adUnits'));
    }

    /**
     * Show the form for creating a new ad unit.
     *
     * @return \Illuminate\View\View
     */
    public function createAdUnit()
    {
        return view('publisher.ad_units.create');
    }

    /**
     * Store a new ad unit.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeAdUnit(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string',
            'size' => 'required|string',
        ]);

        AdUnit::create([
            'publisher_id' => auth()->id(),
            'name' => $request->name,
            'type' => $request->type,
            'size' => $request->size,
            'status' => 'active',
        ]);

        return redirect()->route('publisher.ad_units')->with('status', 'Ad unit created successfully!');
    }

    /**
     * Display analytics for the publisher's ad units.
     *
     * @return \Illuminate\View\View
     */
    public function analytics()
    {
        // Placeholder example data for ad unit analytics
        $analyticsData = [
            'impressions' => Impression::where('publisher_id', auth()->id())->count(),
            'clicks' => Click::where('publisher_id', auth()->id())->count(),
        ];

        return view('publisher.analytics', compact('analyticsData'));
    }

    /**
     * Display revenue reports for the publisher.
     *
     * @return \Illuminate\View\View
     */
    public function revenue()
    {
        // Placeholder example for revenue data
        $revenueData = [
            'total_earnings' => 500.00, // Replace with actual revenue calculation
            'payouts' => [
                ['date' => '2024-01-15', 'amount' => 200.00],
                ['date' => '2024-02-15', 'amount' => 300.00],
            ],
        ];

        return view('publisher.revenue', compact('revenueData'));
    }
}
