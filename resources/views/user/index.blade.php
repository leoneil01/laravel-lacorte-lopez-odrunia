@extends('layout.main')
@section('content')

<div class="content-list">
	<table class="table">
		<thead>
			<tr>
				<th scope="col">Id</th>
				<th scope="col">First Name</th>
				<th scope="col">Middle Name</th>
				<th scope="col">Last Name</th>
				<th scope="col">Age</th>
				<th scope="col">Birthdate</th>
				<th scope="col">Date Created</th>
				<th scope="col">Date Upload</th>
			</tr>
		</thead>
		<tbody>

			{{-- Database Data Here --}}

			@foreach ($users as $item)
					
			@endforeach
			
		</tbody>
	</table>
</div>

@endsection