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

			<tr>
				<th scope="col">1</th>
				<th scope="col">Juan</th>
				<th scope="col">Santos</th>
				<th scope="col">Dela Cruz</th>
				<th scope="col">22</th>
				<th scope="col">March 2, 2002</th>
				<th scope="col"></th>
				<th scope="col"></th>
			</tr>
			
		</tbody>
	</table>
</div>

@endsection