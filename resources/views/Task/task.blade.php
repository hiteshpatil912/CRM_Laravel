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
                        <h3 class="text-white"> Add Taks </h3>
                    </div>
                    <div class="card-body">
                        
                        @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                            @php
                                Session::forget('success');
                            @endphp
                        </div>
                        @endif
                   
                        <form method="POST" action="{{ route('taks.store') }}">
                        <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                            {{ csrf_field() }}
                                        <label><strong>Title:</strong></label>
                                        <input type="text" name="title" class="form-control" placeholder="Enter title of task" value="{{ old('title') }}">
                                        @if ($errors->has('title'))
                                            <span class="text-danger">{{ $errors->first('title') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label><strong>Description:</strong></label>
                                        <input type="text" name="description" class="form-control" placeholder="Start typing the details about the task" value="{{ old('description') }}">
                                        @if ($errors->has('description'))
                                            <span class="text-danger">{{ $errors->first('description') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label><strong>Task type:</strong></label>
                                        <input type="text" name="taskType" class="form-control" placeholder="taskType" value="{{ old('taskType') }}">
                                        @if ($errors->has('taskType'))
                                            <span class="text-danger">{{ $errors->first('taskType') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <!-- <div class="col-md-6">
                                    <div class="form-group">
                                        <label><strong></strong></label>
                                        <input type="date" class="form-control" name="joining_date" id="joining_date" required>
                                        <input type="time" name="timeTo" class="form-control" placeholder="timeTo" value="{{ old('timeTo') }}">
                                        @if ($errors->has('dueDate'))
                                            <span class="text-danger">{{ $errors->first('dueDate') }}</span>
                                        @endif
                                    </div>
                                </div> -->
                                <div class="form-group">
                                    <label><strong>Due date:</strong></label>
                                    <div class="input-group">
                                        <input type="date" class="form-control" name="dateFrom" id="dateFrom" required>&nbsp;
                                        <input type="time" name="timeFrom" class="form-control" placeholder="timeFrom" value="{{ old('timeFrom') }}">
                                        @if ($errors->has('dueDate'))
                                            <span class="text-danger">{{ $errors->first('dueDate') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label><strong>Outcome:</strong></label>
                                        <input type="text" name="outcome" class="form-control" placeholder="Select and outcome" value="{{ old('outcome') }}">
                                        @if ($errors->has('outcome'))
                                            <span class="text-danger">{{ $errors->first('outcome') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label><strong>Owner:</strong></label>
                                        <input type="text" name="owner" class="form-control" placeholder="owner" value="{{ old('owner') }}">
                                        @if ($errors->has('owner'))
                                            <span class="text-danger">{{ $errors->first('owner') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label><strong>Related to:</strong></label>
                                        <input type="text" name="relatedTo" class="form-control" placeholder="Link this task to..." value="{{ old('relatedTo') }}">
                                        @if ($errors->has('relatedTo'))
                                            <span class="text-danger">{{ $errors->first('relatedTo') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label><strong>Collaborators:</strong></label>
                                        <input type="text" name="collaborators" class="form-control" placeholder="collaborators" value="{{ old('collaborators') }}">
                                        @if ($errors->has('collaborators'))
                                            <span class="text-danger">{{ $errors->first('collaborators') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!-- <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label><strong>Message:</strong></label>
                                        <textarea name="message" rows="3" class="form-control">{{ old('message') }}</textarea>
                                        @if ($errors->has('message'))
                                            <span class="text-danger">{{ $errors->first('message') }}</span>
                                        @endif
                                    </div>  
                                </div>
                            </div> -->
                   
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