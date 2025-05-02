<!-- @extends('layouts.admin')

@section('content')
    <div class="container">
        <h2>Contact Details</h2>
        <p><strong>Name:</strong> {{ $contact->name }}</p>
        <p><strong>Email:</strong> {{ $contact->email }}</p>
        <p><strong>Message:</strong> {{ $contact->message }}</p>
        <p><strong>Submitted At:</strong> {{ $contact->created_at->format('d M Y, h:i A') }}</p>
    </div>
@endsection -->
