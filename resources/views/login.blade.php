@extends('master')
@section('content')


    <div class="container custom-login">
        <div class="row">
            <div class="col"></div>
            <div class="col-4">

                <h2 class="text-center">Sign In</h2>
                <form action="/login" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" name="email">

                    </div>
                    <br>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" name="password" id="pwd" placeholder="Enter password" name="pswd">

                    </div>
                    <br>
                    <div class="form-group form-check">
                        <label class="form-check-label"> </label>
                        <input class="form-check-input" type="checkbox" name="remember"> Remember me
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>


            </div>
            <div class="col"></div>
        </div>
    </div>







@endsection
