@extends('layout.main')
@section('content')

<div class="content-list">
	<table class="table">
		@include('include.messages')
		<h5>List of Gender</h5>
		<thead>
			<tr>
				<th scope="col">Gender</th>
				<th scope="col">Date Created</th>
				<th scope="col">Date Updated</th>
			</tr>
		</thead>
		<tbody>

			{{-- Database Data Here --}}

			@foreach ($genders as $gender)
				<tr>
					<td>{{ $gender->gender }}</td>
					<td>{{ $gender->created_at}}</td>
					<td>{{ $gender->updated_at}}</td>
				</tr>
			@endforeach
			
		</tbody>
	</table>
	<a class="submit-btn" href="/gender/create">Add</a>
</div>

@endsection