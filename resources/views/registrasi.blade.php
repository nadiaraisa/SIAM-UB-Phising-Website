    {{-- <form action="/registrasi" method="post">
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

    </form> --}}

<html xmlns="http://www.w3.org/1999/xhtml" class="login-pf _bg-light"><head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="robots" content="noindex, nofollow">

            <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>UB Auth</title>
    <link rel="icon" href="/auth/resources/ofl9o/login/ub/img/favicon.ico">
            <link href="/auth/resources/ofl9o/login/ub/css/login.css" rel="stylesheet">
            <link href="/auth/resources/ofl9o/login/ub/css/tile.css" rel="stylesheet">
            <link href="/auth/resources/ofl9o/login/ub/" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
<style>


div.kc-logo-text{
    width:240px;
    height:80px;
}
.login-pf body{
    background-size:initial;
    background-repeat:repeat;
    font-family: 'Roboto', sans-serif;
    background-color:#003153;
}

.login-pf body{
    background-image:none;
    background-size:initial;
    background-repeat:repeat
}

.login-pf-page{
    max-width:420px;
    margin:5% auto;
}
.login-pf-page .card-pf{
    
}

#kc-header-wrapper{
    letter-spacing:initial;
    text-transform:initial;
    margin-bottom:20px
}

#kc-header-wrapper span.h1{
        font-weight:300;
        color: white;
    }

body{
    padding-top: 65px;
}

</style></head>

<body class="">
<div class="login-pf-page">
    <div id="kc-header" class="login-pf-page-header">
        <div id="kc-header-wrapper" class="text-center">
             <span class="h1 text">Sistem Autentikasi Universitas Brawijaya</span>

        </div>
    </div>
    <div class="card-pf border-0 rounded-0 shadow bg-body p-2 p-md-4">
        <header class="login-pf-header text-primary">
                <h1 id="kc-page-title" class="h4"><strong>
</strong></h1>
      </header>
      <div id="kc-content">
        <div id="kc-content-wrapper">


    <div id="kc-form">
      <div id="kc-form-wrapper">
           
                <form action="/registrasi" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" id="nama" name="nama" class="form-control mb-2" placeholder="Nama" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control mb-2" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" class="form-control mb-2" placeholder="Password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Masuk</button>
                </form>
    
                @if(session('success'))
                <div class="alert alert-success mt-3">
                    {{ session('success') }}
                </div>
                <a href="/registrasi" class="mt-3">Kembali ke Formulir Pendaftaran</a>
                @endif
                
                <div class="form-group login-pf-settings">
                    <div id="kc-form-options">
                        </div>
                        <div class="">
                        </div>
                  </div>
            <a target="_blank" href="https://bais.ub.ac.id/session/forget/">I forgot my password</a>
        </div>
    </div>
        </div>
      </div>
    </div>
  </div>


</body></html>
