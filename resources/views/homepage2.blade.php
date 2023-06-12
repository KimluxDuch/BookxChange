
    @extends('layout.master')

@section('layout.header')

@section('content')

<link href="assets/css/page2.css" rel="stylesheet">

<div class="container" style="margin-bottom: 25vh;">
    <div class="home" style="float: left; margin-top: 10px; height: 35px; width: 100%;  font-family: 'Courier New', monospace;"><h9>Home /New in / Knitwear</h9></div>
    <div class="New-Arrivals" style=" font-family: 'Courier New', monospace; font-size: large; width: 100%;"><center><h1>New Arrivals</h1></center></div>
    <div class="men-woman-kids">
      <button>Manga</button>
      <button>Novel</button>
      <button>Romance</button>
      <button>Comic</button>
      <button>Philosophy</button>
      <button>Study</button>
    </div>
    <hr>
    <div class="box">
      {{-- <input class="form-control" type="search"  placeholder="Search for titles, author,..." aria-label="Search" style="width: 13cm;"> --}}
      <div class="search-container">
        <form action="/action_page.php">
          <input type="text" placeholder="Search Titles,Authors,..." name="search" style="width:13cm; height:1cm; ">
          <button type="submit" style="height:1cm;"><i class="fa fa-search"></i></button>
        </form>
      </div>
        <h5>Result for 'Page 2'</h5>
        <div class="column">  
  
          <div class="box-4" style="display: flex;">
  
            <div class="card" style="width: 18rem; padding: 3vh;">
              <img src='/img/marvel.jpg' class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Miles</p>
                <p style="color: lightblue;">35$</p>
              </div>
            </div>

            <div class="card" style="width: 18rem; padding: 3vh;">
              <img src="/img/b2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Hommered Light Jumper</p>
                <p style="color: lightblue;">35$</p>
              </div>
            </div>
            <div class="card" style="width: 18rem; padding: 3vh;">
              <img src="/img/b3.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Hommered Light Jumper</p>
                <p style="color: lightblue;">35$</p>
              </div>
  
            </div>
            <div class="card" style="width: 18rem; padding: 3vh;">
              <img src='/img/marvel.jpg' class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Miles</p>
                <p style="color: lightblue;">35$</p>
              </div>
            </div>
          </div>
  
          <div class="box-4" style="display: flex;">
  
            <div class="card" style="width: 18rem; padding: 3vh;">
              <img src="/img/flash.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">The Flash</p>
                <p style="color: lightblue;">35$</p>
              </div>
            </div>
            <div class="card" style="width: 18rem;padding: 3vh;">
              <img src="/img/khmer6.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Khmer grade 6 </p>
                <p style="color: lightblue;">35$</p>
              </div>
            </div>
            <div class="card" style="width: 18rem;padding: 3vh;">
              <img src="/img/b6.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Hommered Light Jumper</p>
                <p style="color: lightblue;">35$</p>
              </div>
            </div>
            <div class="card" style="width: 18rem;padding: 3vh;">
              <img src="/img/b2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Hommered Light Jumper</p>
                <p style="color: lightblue;">35$</p>
              </div>
            </div>
          </div>
  
          <div class="box-4" style="display: flex;">
  
            <div class="card" style="width: 18rem;padding: 3vh;">
              <img src="/img/b7.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Hommered Light Jumper</p>
                <p style="color: lightblue;">35$</p>
              </div>
            </div>
            <div class="card" style="width: 18rem;padding: 3vh;">
              <img src="/img/deadpool.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Deadpool Comic</p>
                <p style="color: lightblue;">35$</p>
              </div>
            </div>
            <div class="card" style="width: 18rem;padding: 3vh;">
              <img src="/img/netflix.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">To all the boy I've loved</p>
                <p style="color: lightblue;">35$</p>
              </div> 
            </div>
            <div class="card" style="width: 18rem;padding: 3vh;">
              <img src="/img/b2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Hommered Light Jumper</p>
                <p style="color: lightblue;">35$</p>
              </div>
            </div>
          </div>
  
          <div class="box-4" style="display: flex;">
  
            <div class="card" style="width: 18rem;padding: 3vh;">
              <img src="/img/harrypotter.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Harry potter</p>
                <p style="color: lightblue;">35$</p>
              </div>
            </div>
            <div class="card" style="width: 18rem;padding: 3vh;" >
              <img src="/img/b11.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Hommered Light Jumper</p>
                <p style="color: lightblue;">35$</p>
              </div>
            </div>
            <div class="card" style="width: 18rem;padding: 3vh;">
              <img src="/img/b12.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Hommered Light Jumper</p>
                <p style="color: lightblue;">35$</p>
              </div>  
            </div>
            <div class="card" style="width: 18rem;padding: 3vh;">
              <img src="/img/b2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Hommered Light Jumper</p>
                <p style="color: lightblue;">35$</p>
              </div>
            </div>
          </div>

</div>
    
      <div class="case-top" style="margin-top: 10px" >
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end" >
              <li class="page-item "><a class="page-link text-dark" href="#">Previous</a></li>
              <li class="page-item"><a class="page-link text-dark" href="#">1</a></li>
              <li class="page-item"><a class="page-link text-dark" href="#">2</a></li>
              <li class="page-item"><a class="page-link text-dark" href="#">3</a></li>
              <li class="page-item"><a class="page-link text-dark" href="#">Next</a></li>
            </ul>
          </nav>
         {{-- <img src="/img/a1.png" alt="" style="height: 45px; width: 800px;"> --}}
      </div>
    
    
  </div>

</div>

@endsection

@section('layout.footer')
@endsection