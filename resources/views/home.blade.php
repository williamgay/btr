@extends('layouts.app')

@section('content')
{{--    @dump(Auth::user())--}}
<dashboard-component :user="{{Auth::user()}}"></dashboard-component>
@endsection
