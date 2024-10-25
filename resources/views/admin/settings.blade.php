<!-- resources/views/admin/settings.blade.php -->
<h1>Site Settings</h1>
<form method="POST" action="{{ route('admin.settings') }}">
    @csrf
    <label for="site_name">Site Name</label>
    <input type="text" name="site_name" id="site_name" value="{{ old('site_name') }}" required>

    <label for="site_email">Site Email</label>
    <input type="email" name="site_email" id="site_email" value="{{ old('site_email') }}" required>

    <button type="submit">Save Settings</button>
</form>
