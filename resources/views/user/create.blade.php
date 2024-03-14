<!-- Main HTML -->
@extends('layout.main')

@section('content')
    <form class="create-form" action="create.php" method="post">
        <div class="form-title">Create new User</div>
        <label for="" class="form-label">First name:</label>
        <input type="text" class="form-control" name="first_name">
        <label for="" class="form-label">Middle name:</label>
        <input type="text" class="form-control" name="middle_name">
        <label for="" class="form-label">Last name:</label>
        <input type="text" class="form-control" name="last_name">
        <label for="" class="form-label">Suffix Name:</label>
        <input type="text" class="form-control" name="suffix_name">
        <label for="" class="form-label">Birth Date:</label>
        <input type="date" class="form-control" name="birth_date">
        <label for="" class="form-label">Gender</label>
        <select name="gender" class="form-control">
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
        <label for="" class="form-label">Adress:</label>
        <input type="text" class="form-control" name="address">
        <label for="" class="form-label">Contact Number:</label>
        <input type="text" class="form-control" name="contact_number">
        <label for="" class="form-label">Email Address:</label>
        <input type="email" class="form-control" name="email_address">
        <label for="" class="form-label">Password:</label>
        <input type="password" class="form-control" name="password">
        <label for="" class="form-label">Confirm Password:</label>
        <input type="password" class="form-control" name="confirm_password">
        <button class="submit-btn" type="submit">Submit</button>
    </form>
@endsection
