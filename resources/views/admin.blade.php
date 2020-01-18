@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <ul>
                    @foreach($users as $user)
                        <li>
                            {{ $user->name }} ({{ $user->email }})
                            @if($user->status)
                                <a href="{{ url('user/unapprove', $user->id) }}">unapprove</a>
                            @else
                                <a href="{{ url('user/approve', $user->id) }}">Approve</a>
                            @endif
                        </li>
                     @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
