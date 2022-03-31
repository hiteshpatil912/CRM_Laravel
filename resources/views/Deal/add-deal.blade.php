<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact Form with Laravel and SendGrid</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
            integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row mt-5 mb-5">
                <div class="col-8 offset-2 mt-5">
                    <div class="card">
                        <div class="card-header bg-info">
                            <h3 class="text-white"> Add Deal </h3>
                        </div>
                        <div class="card-body">
                            
                            @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                                <!-- @php
                                    Session::forget('success');
                                @endphp -->
                            </div>
                            @endif
                    
                            <form method="POST" action="{{ route('deal.store') }}">
                    
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><strong>Name:</strong></label>
                                            <input type="text" name="name" class="form-control" placeholder="name" value="{{ old('name') }}">
                                            @if ($errors->has('name'))
                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><strong>Deal value:</strong></label>
                                            <input type="text" name="dealValue" class="form-control" placeholder="dealValue" value="{{ old('dealValue') }}">
                                            @if ($errors->has('dealValue'))
                                                <span class="text-danger">{{ $errors->first('dealValue') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><strong>Account name:</strong></label>
                                            <input type="text" name="accountName" class="form-control" placeholder="accountName" value="{{ old('accountName') }}">
                                            @if ($errors->has('accountName'))
                                                <span class="text-danger">{{ $errors->first('accountName') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><strong>Related contact:</strong></label>
                                            <input type="text" name="relatedContact" class="form-control" placeholder="relatedContact" value="{{ old('relatedContact') }}">
                                            @if ($errors->has('relatedContact'))
                                                <span class="text-danger">{{ $errors->first('relatedContact') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><strong>Sales Owner:</strong></label>
                                            <input type="text" name="salesOwner" class="form-control" placeholder="salesOwner" value="{{ old('salesOwner') }}">
                                            @if ($errors->has('salesOwner'))
                                                <span class="text-danger">{{ $errors->first('salesOwner') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><strong>Currency:</strong></label>
                                            <input type="text" name="currency" class="form-control" placeholder="currency" value="{{ old('currency') }}">
                                            @if ($errors->has('currency'))
                                                <span class="text-danger">{{ $errors->first('currency') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group text-center">
                                    <a href="/dashboard" class="btn btn-success btn-submit">Back</a>
                                    <button class="btn btn-success btn-submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>