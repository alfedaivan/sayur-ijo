<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{url('/assets/TemplateAdmin/node_modules/bootstrap-social/bootstrap-social.css')}}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{url('/assets/TemplateAdmin/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{url('/assets/TemplateAdmin/assets/css/components.css')}}">

</head>

<body>
  <div id="app">
    <section class="section">
      <div class="d-flex flex-wrap align-items-stretch">
        <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
          <div class="p-4 m-3">
            <img src="{{url('/assets/TemplateUser/images/Logo.png')}}" alt="logo" width="80" class=" mb-5 mt-2" style="width: 110px;">
            <h4 class="text-dark font-weight-normal">Selamat datang di <span class="font-weight-bold">Kebon Ijo</span></h4>
            <p class="text-muted">Sebelum memulai silahkan login terlebih dahulu.</p>
            <br>
            <form method="POST" action="{{route('login')}}" class="needs-validation" novalidate="">
                @csrf
              <div class="form-group">
                <label for="name">name</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

              <div class="form-group">
                <div class="d-block">
                  <label for="password" class="control-label">Password</label>
                </div>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
              </div>

<br><br>

              <div class="form-group text-center">
                <button type="submit" class="btn btn-primary btn-lg btn-icon icon-center" tabindex="5" style="width: 100%;">
                    {{ __('Login') }}
                </button>
              </div>

              <!-- <div class="mt-5 text-center">
                Belum punya akun? <a href="{{url('/register')}}"> Register sekarang</a>
              </div> -->

            </form>

            <div class="text-center mt-5 text-small">
              Copyright &copy; Your Company. Made with 💙 by Stisla
              <div class="mt-2">
                <a href="#">Privacy Policy</a>
                <div class="bullet"></div>
                <a href="#">Terms of Service</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom" data-background="{{url('/assets/TemplateAdmin/assets/img/unsplash/login-bg.jpg')}}">
          <div class="absolute-bottom-left index-2">
            <div class="text-light p-5 pb-2">
              <div class="mb-5 pb-3">
                <h1 class="mb-2 display-4 font-weight-bold">Hallo Admin ! !</h1>
                <h5 class="font-weight-normal text-muted-transparent">Kediri, Indonesia</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="{{url('/assets/TemplateAdmin/assets/js/stisla.js')}}"></script>


  <!-- JS Libraies -->
  <script src="{{url('/assets/TemplateAdmin/node_modules/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
  <script src="{{url('/assets/TemplateAdmin/node_modules/chart.js/dist/Chart.min.js')}}"></script>
  <script src="{{url('/assets/TemplateAdmin/node_modules/owl.carousel/dist/owl.carousel.min.js')}}"></script>
  <script src="{{url('/assets/TemplateAdmin/node_modules/summernote/dist/summernote-bs4.js')}}"></script>
  <script src="{{url('/assets/TemplateAdmin/node_modules/chocolat/dist/js/jquery.chocolat.min.js')}}"></script>

  <!-- Template JS File -->
  <script src="{{url('/assets/TemplateAdmin/assets/js/scripts.js')}}"></script>
  <script src="{{url('/assets/TemplateAdmin/assets/js/custom.js')}}"></script>


  <!-- Page Specific JS File -->
</body>
</html>
