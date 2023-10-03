<form action="/registrasi" method="post">
    @csrf
    <input type="text" name="nama" placeholder="Nama">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Daftar</button>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    <a href="/registrasi">Kembali ke Formulir Pendaftaran</a>

@endif

</form>
