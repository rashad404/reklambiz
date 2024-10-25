<!-- resources/views/publisher/ad_units/index.blade.php -->
<h1>Your Ad Units</h1>
<a href="{{ route('publisher.ad_units.create') }}">Create New Ad Unit</a>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Type</th>
            <th>Size</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($adUnits as $adUnit)
        <tr>
            <td>{{ $adUnit->id }}</td>
            <td>{{ $adUnit->name }}</td>
            <td>{{ $adUnit->type }}</td>
            <td>{{ $adUnit->size }}</td>
            <td>{{ $adUnit->status }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
