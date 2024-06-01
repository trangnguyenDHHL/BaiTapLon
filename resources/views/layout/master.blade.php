<!doctype html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

<title>Sixteen Clothing HTML Template</title>

<!-- Bootstrap core CSS -->
<link href="/resources/css/bootstrap.min.css" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

<!-- Additional CSS Files -->
<link rel="stylesheet" href="/resources/css/fontawesome.css">
<link rel="stylesheet" href="/resources/css/templatemo-sixteen.css">
<link rel="stylesheet" href="/resources/css/owl.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>

    <body>
        <header>
        @include('layout.top')
        </header>
        <main>
            <div class="container-fluid">
                <div class="row flex-nowrap">
                    <div id="" class="col py-3">
                    @yield('Content')
                    </div>
                </div>
                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
            </div>
        </main>
        <footer>
            @include('layout.bottom')
        </footer>
    <!-- Bootstrap core JavaScript -->
    <script src="/resources/js/jquery.min.js"></script>
    <script src="/resources/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="/resources/js/custom.js"></script>
    <script src="/resources/js/owl.js"></script>
    <script src="/resources/js/slick.js"></script>
    <script src="/resources/js/isotope.js"></script>
    <script src="/resources/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

    </body>
</html>