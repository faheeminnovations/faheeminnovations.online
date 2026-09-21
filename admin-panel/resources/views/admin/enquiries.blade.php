@extends('layouts.admin')

@section('content')
<section class="panel" id="enquiries">
    <div class="panel-head"><h2>Enquiries</h2><span>{{ $enquiries->count() }} total</span></div>
    <div class="table-scroll"><table><thead><tr><th>Contact</th><th>Company</th><th>Service</th><th>Date</th><th>Status</th><th>Action</th></tr></thead><tbody>
        @forelse($enquiries as $enquiry)
            <tr>
                <td><b>{{ $enquiry->name }}</b><small>{{ $enquiry->email }}</small></td>
                <td>{{ $enquiry->company ?: '—' }}</td><td>{{ $enquiry->service }}</td><td>{{ $enquiry->created_at->format('d M Y') }}</td>
                <td><form class="inline-form" method="POST" action="{{ route('admin.enquiries.update', $enquiry) }}">@csrf @method('PATCH')<select name="status" onchange="this.form.submit()"><option @selected($enquiry->status === 'New')>New</option><option @selected($enquiry->status === 'In progress')>In progress</option><option @selected($enquiry->status === 'Replied')>Replied</option><option @selected($enquiry->status === 'Closed')>Closed</option></select></form></td>
                <td><form method="POST" action="{{ route('admin.enquiries.destroy', $enquiry) }}" onsubmit="return confirm('Delete this enquiry?')">@csrf @method('DELETE')<button class="danger-link" type="submit">Delete</button></form></td>
            </tr>
            <tr><td colspan="6"><small>{{ $enquiry->message ?: 'No message provided.' }}</small></td></tr>
        @empty <tr><td colspan="6" class="empty">No enquiries yet.</td></tr> @endforelse
    </tbody></table></div>
</section>
@endsection
