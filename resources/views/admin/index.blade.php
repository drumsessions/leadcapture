@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Submission Date</th>

            </tr>
            @foreach($leads as $lead)
                <tr>
                    <td>
                        {{ $lead->first }}
                    </td>
                    <td>{{ $lead->last }}</td>
                    <td>{{ $lead->email   }}</td>
                    <td>{{ $lead->created_at->diffForHumans() }}</td>
                </tr>
            @endforeach
            </thead>
        </table>

    </div>
@endsection