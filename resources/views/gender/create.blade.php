<!-- Main HTML -->
@extends('layout.main')

@section('content')
    <div class="content">
        <form action="/gender/store" method="post">
            <div class="form-title">Add Gender</div>

						@csrf
            <label for="gender" class="form-label">Gender</label>
            <input type="text" class="form-control" name="gender" id="gender">
						@error('gender')
							<p class="text-danger">{{ $message }}</p>
						@enderror

            <button class="submit-btn" type="submit">Submit</button>
        </form>
    </div>
@endsection
