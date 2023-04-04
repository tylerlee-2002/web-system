@extends('layout.mainlayout')

@section('title', 'Welcome')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <h1>Welcome to my web system!</h1>
                <p>Here you can find all the information you need about our services and products.</p>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Login</div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" placeholder="Enter username">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Enter password">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-QpfUgKjUETAAxWJnID/iSg/cn1ZMjKxEoCytR0LjLs/1bLY+cE+a3TqTQw1pn0Cf" crossorigin="anonymous"></script>
@endsection
