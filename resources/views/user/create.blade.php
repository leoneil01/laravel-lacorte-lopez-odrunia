<!-- Main HTML -->
@extends('layout.main')

@section('content')
    <div class="content">
        <form action="" method="post">
            <div class="form-title">Create new User</div>

            <label for="first_name" class="form-label">First name:</label>
            <input type="text" class="form-control" name="first_name" id="first_name">

            <label for="middle_name" class="form-label">Middle name:</label>
            <input type="text" class="form-control" name="middle_name" id="middle_name">

            <label for="last_name" class="form-label">Last name:</label>
            <input type="text" class="form-control" name="last_name" id="last_name">

            <label for="suffix_name" class="form-label">Suffix Name:</label>
            <input type="text" class="form-control" name="suffix_name" id="suffix_name">

            <label for="birth_date" class="form-label">Birth Date:</label>
            <input type="date" class="form-control" name="birth_date" id="birth_date">

            <label for="gender" class="form-label">Gender</label>
            <select name="gender" class="form-control" id="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>

            <label for="address" class="form-label">Address:</label>
            <input type="text" class="form-control" name="address" id="address">

            <label for="contact_number" class="form-label">Contact Number:</label>
            <input type="text" class="form-control" name="contact_number" id="contact_number">

            <label for="email_address" class="form-label">Email Address:</label>
            <input type="email" class="form-control" name="email_address" id="email_address">

            <label for="password" class="form-label">Password:</label>
            <input type="password" class="form-control" name="password" id="password">

            <label for="confirm_password" class="form-label">Confirm Password:</label>
            <input type="password" class="form-control" name="confirm_password" id="confirm_password">

            <button class="submit-btn" type="submit">Submit</button>
        </form>
    </div>
@endsection
