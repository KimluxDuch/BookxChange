@extends('layout.master')

@section('content')

    <body style="background-color: rgb(182, 210, 234)">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container" style="height:500px">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header">
                                        <h3 class="text-center font-weight-light my-4">Contact Us</h3></div>
                                    <div class="card-body">
                                        <form>
                                            <p>If you have any questions or concern don't be hesitate to contact us!!</p>
                                            <a href="" class="nav-link"> <i class="fa fa-phone"></i> Tel: 012 345 678 </a> 
                                            <p> <br>Or you can contact us through social media: </p>
                                                <a href="" class="nav-link"> <i class="fa-brands fa-instagram"></i> Instagram</a>
                                                <a href="" class="nav-link"><i class="fa-brands fa-facebook"></i> Facebook</a>
                                                <a href="" class="nav-link"><i class="fa-brands fa-twitter"></i> Twitter</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>

    
    </body>
    @endsection