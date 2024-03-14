@extends('layout.main')
@section('content')

<form class="create-form-list">
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
			
		</tbody>
	</table>
</form>

@endsection