
<?php

    $code = '';
    $decode = '';

    if (isset($_POST['submit'])) {

        include 'code.php';

        if (isset($_POST['codeinput'])) {
            $code = convertToCode($_POST['codeinput']);
        } else {
            $decode = deeCode($_POST['textinput']);
        }
    }

?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

  <title>DeeCode-homepage</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/pricing/">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Bootstrap core CSS -->
  <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="pricing.css" rel="stylesheet">
</head>

<body>


  <nav class="navbar navbar-light navbar navbar-expand-lg" style="background-color: #e3f2fd;">


    <a class="navbar-brand" href="#">
      <img src='static/logo1.png' class='d-inline-block align-top' height=30 width=30 />
      DeeCode</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
      aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <div class="navbar-nav ml-auto">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">

            <a class="p-2 text-dark" href="#">Home</a>
            <a class="p-2 text-dark" href="https://www.facebook.com/profile.php?id=100008478370645">Facebook</a>
            <a class="p-2 text-dark" href="https://www.instagram.com/har_deep_sin_gh">Instagram</a>
            <a class="p-2 text-dark" href="https://www.github.com/hardeepsingh980">Github</a>
            <a class="p-2 text-dark" href="#">Twitter</a>
            <a class="btn btn-outline-primary" href="about.php">About</a>

  </nav>







  <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <img class="mb-4" src="static/logo1.png" alt="" width="90" height="90" />
    <h1 class="display-4">DeeCode - Code language</h1>
    <p class="lead">DeeCode is a code language which can be used for communicating in the conditions where you don't
      want anybody to know about what you mean. Have fun with DeeCode.</p>
  </div>

  <div class="container">
    <div class="card-deck mb-3 text-center">
      <div class="card mb-4 box-shadow">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Code</h4>
        </div>
        <div class="card-body">
          <form method='POST' action='#'>
            <input type="text" name="codeinput" class="form-control" placeholder="Type text to convert to code"
              required>

            <br />
            <br />


            <input type="submit" name='submit' value="Convert To Code" class="btn btn-lg btn-primary btn-block" />

            <br />
            <h5><?php echo $code; ?></h5>

        </div>
        </form>
      </div>



      <div class="card mb-4 box-shadow">
        <form method='POST' action='#'>
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Decode</h4>
          </div>
          <div class="card-body">
            <input type="text" name="textinput" class="form-control" placeholder="Type code to convert to text"
              required>

            <br />
            <br />
            <input type="submit" name='submit' value="Convert To Text" class="btn btn-lg btn-primary btn-block" />
            <br />
            <h5><?php echo $decode; ?></h5>
          </div>
      </div>



    </div>
    </form>
  </div>


  <footer class="page-footer font-small blue pt-4" style="background-color: #e3f2fd;">
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
      <a href="https://www.instagram.com/har_deep_sin_gh"> Hardeep Singh</a>
    </div>

  </footer>



  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
  <script src="../../assets/js/vendor/popper.min.js"></script>
  <script src="../../dist/js/bootstrap.min.js"></script>
  <script src="../../assets/js/vendor/holder.min.js"></script>
  <!--Start of Tawk.to Script-->
  <script type="text/javascript">
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    (function () {
      var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
      s1.async = true;
      s1.src = 'https://embed.tawk.to/5eeb0c754a7c6258179ad6fd/1eb32pt89';
      s1.charset = 'UTF-8';
      s1.setAttribute('crossorigin', '*');
      s0.parentNode.insertBefore(s1, s0);
    })();
  </script>
  <!--End of Tawk.to Script-->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <script>
    Holder.addTheme('thumb', {
      bg: '#55595c',
      fg: '#eceeef',
      text: 'Thumbnail'
    });
  </script>
</body>

</html>