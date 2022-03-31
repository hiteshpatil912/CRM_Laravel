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
                            <h3 class="text-white"> Add Document </h3>
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
                    
                            <form method="POST" action="{{ route('document.store') }}">
                    
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><strong>Document name:</strong></label>
                                            <input type="text" name="documentName" class="form-control" placeholder="Enter name" value="{{ old('name') }}">
                                            @if ($errors->has('name'))
                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><strong>Document type:</strong></label>
                                            <input type="text" name="documentType" class="form-control" placeholder="Quote,Proposal,Non-agreement" value="{{ old('documentType') }}">
                                            @if ($errors->has('documentType'))
                                                <span class="text-danger">{{ $errors->first('documentType') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><strong>Document template:</strong></label>
                                            <input type="text" name="documentTemplate" class="form-control" placeholder="Simple Template" value="{{ old('documentTemplate') }}">
                                            @if ($errors->has('documentTemplate'))
                                                <span class="text-danger">{{ $errors->first('documentTemplate') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><strong>Deal:</strong></label>
                                            <input type="text" name="deal" class="form-control" placeholder="Type to search" value="{{ old('deal') }}">
                                            @if ($errors->has('deal'))
                                                <span class="text-danger">{{ $errors->first('deal') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><strong>Account:</strong></label>
                                            <input type="text" name="account" class="form-control" placeholder="Type to search" value="{{ old('account') }}">
                                            @if ($errors->has('account'))
                                                <span class="text-danger">{{ $errors->first('account') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><strong>Primary contact:</strong></label>
                                            <input type="text" name="phone" class="form-control" 
                                            placeholder="Type to search"
                                            value="{{ old('phone') }}">
                                            @if ($errors->has('phone'))
                                                <span class="text-danger">{{ $errors->first('phone') }}</span>
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