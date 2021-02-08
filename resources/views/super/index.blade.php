@extends('user.userdashboard')
@section('dash')
    {{ __('Super Administrator Dashbord') }}
@endsection

@section('content')
{{--    <div class="container">--}}

{{--        <form action="/dashboard/addNewPerson" method="POST" class="pb-5">--}}

{{--            <div class="py-3">--}}
{{--                <legend>You can add new person</legend>--}}
{{--            </div>--}}

{{--            <div class="mb-3">--}}
{{--                <label class="form-label">Name</label>--}}
{{--                <input type="text" class="form-control">--}}
{{--            </div>--}}

{{--            <div class="mb-3">--}}
{{--                <label class="form-label">Email address</label>--}}
{{--                <input type="email" class="form-control">--}}
{{--            </div>--}}

{{--            <div class="mb-3">--}}
{{--                <label class="form-label">Password</label>--}}
{{--                <input type="password" class="form-control" >--}}
{{--            </div>--}}

{{--            <div class="mb-3">--}}
{{--                <select class="form-select" name="role_id">--}}
{{--                    <option class="disabled">Open this select menu</option>--}}
{{--                    <option value="user">User</option>--}}
{{--                    <option value="administrator">Administrator</option>--}}
{{--                    <option value="superadministrator">Super Administrator</option>--}}
{{--                </select>--}}
{{--                {{ $errors->first('role_id') }}--}}
{{--            </div>--}}

{{--            @csrf--}}
{{--            <button type="submit" class="btn btn-primary">Submit</button>--}}
{{--        </form>--}}

<div class="container">

        <form action="/dashboard/addNewPerson" method="POST" class="pb-5">

            <div class="py-3">
                <legend>You can add new person</legend>
            </div>

            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-text" name="name">
                {{ $errors->first('name') }}
            </div>

            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-text" name="email">
                {{ $errors->first('email') }}
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-text">
                {{ $errors->first('password') }}
            </div>

            <div class="mb-3">
                <select class="form-select" name="role_id">
                    <option class="disabled">Open this select menu</option>
                    <option value="user">User</option>
                    <option value="administrator">Administrator</option>
                    <option value="superadministrator">Super Administrator</option>
                </select>
                {{ $errors->first('role_id') }}
            </div>

            @csrf

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

@endsection
