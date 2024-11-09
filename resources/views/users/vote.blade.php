@extends('layouts.app')

@section('content')
    <div class="vote-section">
        <h2>Vote Server</h2>
        <form action="{{ url('/vote') }}" method="POST">
            @csrf
            <button type="submit">Vote Sekarang</button>
        </form>
        @if (session('success'))
            <p>{{ session('success') }}</p>
        @elseif (session('error'))
            <p>{{ session('error') }}</p>
        @endif
    </div>
@endsection
