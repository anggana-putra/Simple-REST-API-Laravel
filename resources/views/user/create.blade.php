<link rel="stylesheet" type="text/css" href="{{ url('/create.css') }}" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

<div class="back"><a href={{ route('user.index') }}><svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="20"><path d="M0 0h24v24H0V0z" fill="none" opacity=".87"/><path d="M17.51 3.87L15.73 2.1 5.84 12l9.9 9.9 1.77-1.77L9.38 12l8.13-8.13z"/></svg></a></div>

<div class="wrap-form">
    <form method="POST" action="/user">
        @csrf
        <input type="text" name="first_name" id="firstName" placeholder="Isi nama depan">
        <input type="text" name="last_name" id="lastName" placeholder="Isi nama belakang">
        <input type="email" name="email" id="email" placeholder="isi email">
        <button id="tambah-btn" type="submit">Tambah</button>
    </form>
</div>