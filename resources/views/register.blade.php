@extends('layout.master')
	<body>
		@section('judul')
		Buat Account Baru!
		@endsection

		@section('content')
		<h3>Sign Up Form</h3>
		<form action="/kirim" method="post">
            @csrf
			<label>First Name :</label><br>
			<input type="text" name="nama_depan"><br>
			
			<label>Last Name :</label><br>
			<input type="text" name="nama_belakang"><br>

			<label>Gender :</label><br>
			<input type="radio" name="gender" value="m"> Male<br>
			<input type="radio" name="gender" value="f"> Female<br>
			<input type="radio" name="gender" value="o"> Other
			<br>
			<label>Nationality :</label><br>
			<select>
				<option>Indonesian</option>
				<option>Japanese</option>
				<option>Singapore</option>
			</select>
			<br>
			<label>Language Spoken :</label><br>
			<input type="checkbox">Bahasa Indonesia<br>
			<input type="checkbox">English<br>
			<input type="checkbox">Other
			<br>
			
			<label>Bio :</label><br>
			<textarea rows="6"></textarea>
			<br>
			<input type="submit" value="Sign Up">
		</form>
		@endsection
