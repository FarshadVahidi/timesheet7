@extends('user.userdashboard')
@section('dash')
    {{ __('Super Administrator Dashbord') }}
@endsection

@section('content')
    <div class="container">

        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Date</th>
                <th scope="col">Hours</th>
                <th scope="col">Added</th>
                <th scope="col" >Last Update</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $d)
                <tr>
                    <td>{{$d->date}}</td>
                    <td>{{$d->hour}}</td>
                    <td>{{$d->created_at}}</td>
                    <td>{{$d->updated_at}}</td>
                    <td><a href="#" class="btn btn-success">Edit</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection
