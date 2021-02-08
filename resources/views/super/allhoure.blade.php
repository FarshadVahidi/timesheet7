@extends('user.userdashboard')
@section('dash')
    {{ __('Super Administrator Dashbord') }}
@endsection

@section('content')

    @foreach($dataall as $d)
        <p> this is user  {{ $d->id }}  {{ $d->name }}    {{$d->sum}}</p>
    @endforeach

@endsection
