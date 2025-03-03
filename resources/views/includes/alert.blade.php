@if($data = session()->pull('alert'))
    @php($message = $data['message'] ?? '')
    @php($type = $data['type'] ?? 'success')
    <div class="alert alert-{{ $type  }} mb-0 rounded-0 text-center small py-2">
        {{ $message }}
    </div>
@endif
