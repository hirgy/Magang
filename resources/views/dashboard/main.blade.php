<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGSOSEK | DASHBOARD</title>

         <!-- Custom styles for this template -->
         <link href="/css/dashboard.css" rel="stylesheet">


         <!-- Trix Editor -->
           <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0-beta.0/dist/trix.css">
           <script type="text/javascript" src="https://unpkg.com/trix@2.0.0-beta.0/dist/trix.umd.min.js"></script>
      
           <style>
               trix-toolbar [data-trix-button-group="file-tools"]{
                   display: none;
               }
           </style>
        
          {{-- <link rel="stylesheet" type="text/css" href="/css/trix.css">
              <script type="text/javascript" src="/js/trix.js"></script> --}}
         
        </head>
        <body>

            @include('dashboard.header')

            <div class="container-fluid">
              <div class="row">
                @include('dashboard.sidebar')
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                  @yield('container')
                </main>
              </div>
            </div>

    <!-- Tambahkan link ke Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/dashboard.css" rel="stylesheet">

        <!-- Tambahkan script dan link ke Bootstrap JS (jika diperlukan) -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>