@extends('pages.template')

{{-- 
TODO: 
    ADD ROUTE TO CONFIG PAGE
--}}

@section('title')
    dashboard
@endsection

@section('content')
    @if ($user_role == null)
        <h1>wait until the owner gives you permission </h1>
    @else
        @if (str_contains($user_role, 'owner') OR str_contains($user_role, 'employee'))
            <a href="{{route('reports')}}"><button>reports</button></a>
        @endif
        @if (str_contains($user_role, 'owner') OR str_contains($user_role, 'admin'))
        
            <a href={{route('config')}}><button>config</button></a>

        @endif
    @endif
@endsection