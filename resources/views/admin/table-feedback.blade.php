@extends('layouts.app')

@section('content')
    <div class="feedback-table">
        <h2>Daftar Feedback</h2>
        <table>
            <tr>
                <th>Gamertag</th>
                <th>Feedback</th>
                <th>Tanggal</th>
            </tr>
            @foreach ($feedback as $item)
                <tr>
                    <td>{{ $item->gamertag }}</td>
                    <td>{{ $item->message }}</td>
                    <td>{{ $item->created_at }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
