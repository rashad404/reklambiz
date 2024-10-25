<!-- resources/views/publisher/ad_units/create.blade.php -->
<h1>Create a New Ad Unit</h1>
<form method="POST" action="{{ route('publisher.ad_units.store') }}">
    @csrf
    <label for="name">Ad Unit Name</label>
    <input type="text" name="name" id="name" required>

    <label for="type">Type</label>
    <select name="type" id="type" required>
        <option value="banner">Banner</option>
        <option value="video">Video</option>
        <!-- Add more types as needed -->
    </select>

    <label for="size">Size</label>
    <input type="text" name="size" id="size" placeholder="e.g., 300x250" required>

    <button type="submit">Create Ad Unit</button>
</form>
