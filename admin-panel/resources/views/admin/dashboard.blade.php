@extends('layouts.admin')

@section('content')
<section class="stats">
    <article><span>Total enquiries</span><strong>{{ $enquiries->count() }}</strong><small>All received enquiries</small></article>
    <article><span>Active services</span><strong>{{ $services->where('visible', true)->count() }}</strong><small>Published services</small></article>
    <article><span>Live AI tools</span><strong>{{ $tools->where('status', 'live')->count() }}</strong><small>{{ $tools->count() }} tools in catalogue</small></article>
    <article><span>Conversion rate</span><strong>24.8%</strong><small>Current estimate</small></article>
</section>
<section class="dashboard-grid">
    <article class="panel">
        <div class="panel-head"><h2>Recent enquiries</h2><a href="{{ route('admin.enquiries.index') }}">Manage all</a></div>
        <div class="table-scroll"><table><thead><tr><th>Contact</th><th>Service</th><th>Date</th><th>Status</th></tr></thead><tbody>
        @forelse($enquiries->take(6) as $enquiry)
            <tr><td><b>{{ $enquiry->name }}</b><small>{{ $enquiry->email }}</small></td><td>{{ $enquiry->service }}</td><td>{{ $enquiry->created_at->format('d M Y') }}</td><td><span class="pill">{{ $enquiry->status }}</span></td></tr>
        @empty <tr><td colspan="4" class="empty">No enquiries yet.</td></tr> @endforelse
        </tbody></table></div>
    </article>
    <article class="panel"><div class="panel-head"><h2>Quick management</h2></div><div class="interest">
        <div><span><b>AI tools</b><small>{{ $tools->count() }} catalogue entries</small></span><a href="{{ route('admin.tools.index') }}">Open</a></div>
        <div><span><b>Services</b><small>{{ $services->count() }} catalogue entries</small></span><a href="{{ route('admin.services.index') }}">Open</a></div>
        <div><span><b>Settings</b><small>Business contact details</small></span><a href="{{ route('admin.settings.index') }}">Open</a></div>
    </div></article>
</section>
@endsection
