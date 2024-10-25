<!-- resources/views/advertiser/campaigns/index.blade.php -->
<h1>Your Campaigns</h1>
<a href="{{ route('advertiser.campaigns.create') }}">Create New Campaign</a>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Budget</th>
            <th>Status</th>
            <th>Start Date</th>
            <th>End Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($campaigns as $campaign)
        <tr>
            <td>{{ $campaign->id }}</td>
            <td>{{ $campaign->name }}</td>
            <td>{{ $campaign->budget }}</td>
            <td>{{ $campaign->status }}</td>
            <td>{{ $campaign->start_date }}</td>
            <td>{{ $campaign->end_date }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
