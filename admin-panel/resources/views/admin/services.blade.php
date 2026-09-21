@extends('layouts.admin')

@section('content')
<section class="panel catalog-panel">
    <div class="panel-head"><h2>Services catalogue</h2><span>{{ $services->count() }} total</span></div>
    <div class="crud-create"><h3>Add service</h3><form method="POST" action="{{ route('admin.services.store') }}" class="crud-form">@csrf
        <div><input name="name" placeholder="Service name" required><input name="category" placeholder="Category" required><input name="timeline" placeholder="Timeline" required></div>
        <div><input name="short" placeholder="Short description" required><input name="works" placeholder="Works with" required></div>
        <textarea name="details" placeholder="Detailed description" required></textarea><label class="check"><input type="checkbox" name="visible" value="1" checked> Publish immediately</label><button class="primary" type="submit">Add service</button>
    </form></div>
    <div class="table-scroll"><table><thead><tr><th>Service</th><th>Category</th><th>Timeline</th><th>Visibility</th><th>Actions</th></tr></thead><tbody>
    @forelse($services as $service)<tr><td><b>{{ $service->name }}</b><small>{{ $service->short }}</small></td><td>{{ $service->category }}</td><td>{{ $service->timeline }}</td><td><span class="pill">{{ $service->visible ? 'Published' : 'Hidden' }}</span></td><td class="actions"><details><summary>Edit</summary><form method="POST" action="{{ route('admin.services.update', $service) }}" class="edit-form">@csrf @method('PATCH')<input name="name" value="{{ $service->name }}" required><input name="category" value="{{ $service->category }}" required><input name="short" value="{{ $service->short }}" required><input name="timeline" value="{{ $service->timeline }}" required><input name="works" value="{{ $service->works }}" required><textarea name="details" required>{{ $service->details }}</textarea><label class="check"><input type="checkbox" name="visible" value="1" @checked($service->visible)> Published</label><button class="primary" type="submit">Save changes</button></form></details><form method="POST" action="{{ route('admin.services.toggle', $service) }}">@csrf @method('PATCH')<button class="quiet-link" type="submit">{{ $service->visible ? 'Hide' : 'Publish' }}</button></form><form method="POST" action="{{ route('admin.services.destroy', $service) }}" onsubmit="return confirm('Delete this service?')">@csrf @method('DELETE')<button class="danger-link" type="submit">Delete</button></form></td></tr>@empty <tr><td colspan="5" class="empty">No services yet.</td></tr>@endforelse
    </tbody></table></div>
</section>
@endsection
