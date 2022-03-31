@extends('layouts.app')
  @section('style')
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  @endsection
  @section('content')
      <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-8 offset-2 mt-5">
                <div class="card">
                    <div class="card-header bg-info">
            		  <h1>Add Account</h1>
            		</div>
            	<div class="card-body">
				@if(session()->has('success'))
					<div class="alert alert-success">
						{{ session()->get('success') }}
					</div>
				@endif
              <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-form')}}">
			  {{ csrf_field() }}
					<div class="form-group">
						<label><strong>Name</strong></label>
						<input type="text" id="name" name="name" class="form-control" required="">
					</div>
					<div class="form-group">
						<label><strong>webside</strong></label>
						<input type="text" id="webside" name="web_Site" class="form-control" required="">
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label><strong>Phone</strong></label>
								<input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ old('phone') }}">
								@if ($errors->has('phone'))
									<span class="text-danger">{{ $errors->first('phone') }}</span>
								@endif
							</div>
						</div>

						<div class="form-group col-md-6">
							<label for="exampleInputEmail1"><strong>Sales owner</strong></label>
							<input type="text" id="title" name="sales_Owner" class="form-control" required="">
						</div>
					</div>   
					<div class="form-group text-center">
						<a href="/add-account/view" class="btn btn-success btn-submit">Back</a>
						<button class="btn btn-success btn-submit">Submit</button>
					</div>
              </form>
            </div>
          </div>
          </div>
          </div>
        </div> 
@endsection