@extends('user.userdashboard')

@section('content')
    <form action="/dashboard/addNewPerson" method="POST" class="pb-5">
        <div class="input-group">
            <input type="text" name="name">
            {{ $errors->first('name') }}
        </div>

        <div class="input-group">
            <input type="text" name="email">
            {{ $errors->first('email') }}
        </div>

        <div class="input-group">
            <input type="text" name="password">
            {{ $errors->first('password') }}
        </div>

        <div class="input-group">
            <input type="text" name="role_id">
            {{ $errors->first('role_id') }}
        </div>
        @csrf
        <button type="submit">Add</button>
    </form>
@endsection
