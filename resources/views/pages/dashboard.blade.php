@extends('pages.template')

@section('title')
    dashboard
@endsection

@section('content')
    
    @if ($user_role == null)
        <h1>wait until the owner gives you permission </h1>
    @else
        @if ($user_role == 'owner' OR $user_role == 'employee')
            <button>reports</button>
        @endif
        @if ($user_role == 'owner' OR $user_role == 'admin')
            <button>config</button>
        @endif
    @endif
@endsection