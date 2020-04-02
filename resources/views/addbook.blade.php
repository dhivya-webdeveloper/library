@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Add Book</div>
                    @if (Session::has('message'))
                        <li>{!! session('message') !!}</li>
                    @endif
                <div class="card-body">
                <form method="POST" action="api/books">
                    <div class="form-group @if ($errors->has('bookName')) has-error @endif">
                        <label for="bookName">Book Name</label>
                        <input type="text" id="bookName" class="form-control" name="bookName" placeholder="" required>
                        @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
                    </div>

                    <div class="form-group @if ($errors->has('bookDescription')) has-error @endif">
                        <label for="description">Book Description</label>
                        <input type="text" id="bookDescription" class="form-control" name="bookDescription" placeholder="" required>
                        @if ($errors->has('bookDescription')) <p class="help-block">{{ $errors->first('bookDescription') }}</p> @endif
                    </div>

                    <div class="form-group @if ($errors->has('bookPrice')) has-error @endif">
                        <label for="bookPrice">Book Price</label>
                        <input type="text" id="bookPrice" class="form-control" name="bookPrice" required>
                        @if ($errors->has('bookPrice')) <p class="help-block">{{ $errors->first('bookPrice') }}</p> @endif
                    </div>

                    <button type="submit" class="btn btn-success">Add</button>

                    </form>
                    <table class="table table-bordered">
                        <thead>
                            <th>Id</th>
                            <th>Book Name</th>
                            <th>Book Description</th>
                            <th>Book Price</th>
                        </thead>
                        <tbody>
                            @foreach ($list as $user)
                            <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->bookName }}</td>
                            <td>{{ $user->bookDescription }}</td>
                            <td>{{ $user->bookPrice }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
