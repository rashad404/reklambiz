<!-- resources/views/publisher/revenue.blade.php -->
<h1>Revenue Report</h1>
<p>Total Earnings: ${{ number_format($revenueData['total_earnings'], 2) }}</p>
<h2>Payouts</h2>
<table>
    <thead>
        <tr>
            <th>Date</th>
            <th>Amount</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($revenueData['payouts'] as $payout)
        <tr>
            <td>{{ $payout['date'] }}</td>
            <td>${{ number_format($payout['amount'], 2) }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
