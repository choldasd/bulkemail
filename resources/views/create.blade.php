@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
			@php 
				$action = route('sendemail');
			@endphp
			
            <div class="card">
                <div class="card-header">Send Bulk Email</div>
				
							
				<form role="form" id="create_employee" method="post" action="{{$action}}" enctype="multipart/form-data">
					
					<div class="card-body">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label for="email">Email*</label>
									<textarea name="emails" class="form-control" id="emails" placeholder="Emails" value="{{old('emails')}}">choldasapp@gmail.com,choldasd@gmail.com</textarea>
								</div>
								<p class="cust_error" id="error_emails"></p>
								
								<button type="submit" class="btn btn-primary">Send Email</button>
							</div>
							
						</div>
					</div>
				</form>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script src="{{url('public/assets/scripts/employees.js')}}"></script>
@endpush
