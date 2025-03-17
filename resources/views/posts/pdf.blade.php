<!Doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Tooplate's Little Fashion</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">

        <link href="{{url('./frontend/css/bootstrap.min.css') }}   " rel="stylesheet">
        <link href=" {{url('./frontend/css/bootstrap-icons.css') }} " rel="stylesheet">

        <link rel="stylesheet" href=" {{ url('./frontend/css/slick.css') }}  "/>

        <link href=" {{url('./frontend/css/tooplate-little-fashion.css ') }}" rel="stylesheet">

    </head>
    
    <body>
        <style>
            h1{
                color: red;
            }
            input ,select#inputState{
    height: 40px;
    width: 100% !important;
}
input#gridCheck{
    width: 1% !important;
    border-radius: 0px;
    height: 13px;
}
        </style>

      
    
        <main>

           <section class="form-pdf-section">
            <div class="container">
                <h1>{{ $title }}</h1>
                <p>Date: {{ $date }}</p>
                <p>{{ $content }}</p>
            </div>
           <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="text-center mt-5">Details</h1>
                    </div>
                </div>
                <div class="row">
                <form class="row g-3">
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Password</label>
                        <input type="password" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Address</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress2" class="form-label">Address 2</label>
                        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                    </div>
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">City</label>
                        <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">State</label>
                        <select id="inputState" class="form-select">
                        <option selected>Choose State</option>
                        <option>Tamilnadu</option>
                        <option>Karnadaka</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="inputZip" class="form-label">Zip</label>
                        <input type="text" class="form-control" id="inputZip">
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Check me out
                        </label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>
                </form>
                    <a class="btn btn-secondary my-4" href="{{url('/generate-pdf')}}">  Download Pdf </a>
                </div>
            </div>
           
           </section>


        </main>

      

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/Headroom.js"></script>
        <script src="js/jQuery.headroom.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>
