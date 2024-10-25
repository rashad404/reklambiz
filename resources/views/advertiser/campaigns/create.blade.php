<!-- resources/views/advertiser/campaigns/create.blade.php -->
<h1>Create a New Campaign</h1>
<form method="POST" action="{{ route('advertiser.campaigns.store') }}">
    @csrf
    <label for="name">Campaign Name</label>
    <input type="text" name="name" id="name" required>

    <label for="budget">Budget</label>
    <input type="number" name="budget" id="budget" required>

    <label for="start_date">Start Date</label>
    <input type="date" name="start_date" id="start_date" required>

    <label for="end_date">End Date</label>
    <input type="date" name="end_date" id="end_date" required>

    <label for="targeting_json">Targeting (JSON)</label>
    <textarea name="targeting_json" id="targeting_json"></textarea>

    <button type="submit">Create Campaign</button>
</form>
