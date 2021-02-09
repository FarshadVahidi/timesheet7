@extends('user.userdashboard')
@section('dash')
    {{ __('Super Administrator Dashbord') }}
@endsection

@section('content')
    <div class="card-body">
        <section style="padding-top:60px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        @if(Session::has('date_added'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('date_added')}}
                            </div>
                        @endif

                        @if(Session::has('date_duplicate'))
                            <div class="alert alert-danger" role="alert">
                                {{Session::get('date_duplicate')}}
                            </div>
                        @endif

                        <form method="post" action="/daycreate">
                            {{csrf_field()}}
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Data</label>
                                <input type="date" name="Date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">hour</label>
                                <input type="number" name="Hour" class="form-control" id="exampleInputPassword1" placeholder="Must Be Entered In Minute">
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
