@extends('pages.template')

@section('title')
    dashboard
@endsection

@section('content')
    @if ($user_role == null)
        <h1>wait until the owner gives you permission </h1>
    @else
        @if (str_contains($user_role, 'owner') OR str_contains($user_role, 'employee'))
            <button>reports</button>
        @endif
        @if (str_contains($user_role, 'owner') OR str_contains($user_role, 'admin'))
            <button>config</button>
        @endif
    @endif
@endsection