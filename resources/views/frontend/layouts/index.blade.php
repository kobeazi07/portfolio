
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Meyawo landing page.">
    <meta name="author" content="Devcrud">
    <title>Hibatul Azizi Portfolio</title>
    <!-- font icons -->
  @include('frontend.includes.style')
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- Page Navbar -->
    @include('frontend.includes.navbar')
    <!-- End of Page Navbar -->
    @yield('konten')
    <!-- footer -->
    <div class="container">
        <footer class="footer">
            <p class="mb-0">
              Follow Me On 
            </p>
            <div class="social-links text-right m-auto ml-sm-auto">
              
                <a href="javascript:void(0)" class="link"><i class="ti-linkedin"></i></a>
                <a href="javascript:void(0)" class="link"><i class="ti-instagram"></i></a>
          
            </div>
        </footer>
    </div> <!-- end of page footer -->

  @include('frontend.includes.script')
</body>

</html>