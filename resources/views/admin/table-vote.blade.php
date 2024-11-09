@extends('layouts.app')

@section('content')
    <div class="vote-table">
        <h2>Daftar Vote</h2>
        <table>
            <tr>
                <th>Gamertag</th>
                <th>Vote Status</th>
                <th>Tanggal</th>
            </tr>
            @foreach ($votes as $vote)
                <tr>
                    <td>{{ $vote->gamertag }}</td>
                    <td>{{ $vote->has_voted ? 'Voted' : 'Not Voted' }}</td>
                    <td>{{ $vote->created_at }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
