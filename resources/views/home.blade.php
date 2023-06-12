
    @extends('layout.master')
    @section('footsection.privacy')

    @section('layout.header')

    @section('content')

    <div class="container">
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
        <div class="box-big">
      
        <div class="box-left"> 
          
         <div class="box-letter"> 
          
          <form action="/action_page.php">
            <h2 style="font-family: 'Courier New', monospace;">Book Genre</h2>
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <label for="vehicle1"> Fiction </label><br>
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <label for="vehicle1"> Novel  </label><br>
          
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <label for="vehicle1"> Philosophy </label><br>
          
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <label for="vehicle1"> Narrative</label><br>
          
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <label for="vehicle1"> Genre Fiction </label><br>
          
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <label for="vehicle1"> Science </label><br>
          
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <label for="vehicle1"> Mystery </label><br>
          
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <label for="vehicle1"> History  </label><br>
          
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <label for="vehicle1"> Literature</label><br>
          
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <label for="vehicle1"> Computer </label><br>
          
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <label for="vehicle1"> English </label><br>
          
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <label for="vehicle1"> Math & Physic  </label><br>
          <hr>
  
          <h2 style="font-family: 'Courier New', monospace;">Authors</h2>
          <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <label for="vehicle1"> Stephen King </label><br>
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <label for="vehicle1"> J. K. Rowling </label><br>
          
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <label for="vehicle1"> Ernest Hemingway </label><br>
          
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <label for="vehicle1"> Leo Tolstoy
              </label><br>
          
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <label for="vehicle1"> Charles Dickens
              </label><br>
          
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <label for="vehicle1"> George Orwell  </label><br>
          
            
          <hr>
          <h2 style="font-family: 'Courier New', monospace;">Famous</h2>
          <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <label for="vehicle1"> Comic Book </label><br>
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <label for="vehicle1"> Naruto Manga </label><br>
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <label for="vehicle1"> Rom-Com </label><br>
           
  
          <hr>
          </form>
  
        </div>
        <!-- <div class="box-number">
         <p></p> 
         <p></p>  -->
        </div>
        <div class="box-right">
          <div class="case-top" style="margin-top:20px">
            {{-- <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center" >
                  <li class="page-item "><a class="page-link text-dark" href="#">Previous</a></li>
                  <li class="page-item"><a class="page-link text-dark" href="#">1</a></li>
                  <li class="page-item"><a class="page-link text-dark" href="#">2</a></li>
                  <li class="page-item"><a class="page-link text-dark" href="#">3</a></li>
                  <li class="page-item"><a class="page-link text-dark" href="#">Next</a></li>
                </ul>
              </nav> --}}
             {{-- <img src="/img/a1.png" alt="" style="height: 45px; width: 800px;"> --}}
            </div>
            <div class="search-container">
              <form action="/action_page.php" style="">  
                <input type="text" placeholder="Search Titles,Authors,..." name="search" style="width:13cm; height:1cm;">
                <button type="submit" style="height:1cm;"><i class="fa fa-search"></i></button>
              </form>
            </div>
          <div class="box-3" style="display: flex; margin-top: 20px;">
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
          </div>
  
          <div class="box-3" style="display: flex;">
  
            <div class="card" style="width: 18rem; padding: 3vh;">
              <img src="/img/flash.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">The Flash</p>
                <p style="color: lightblue;">35$</p>
              </div>
            </div>
            <div class="card" style="width: 18rem; padding: 3vh;">
              <img src="/img/khmer6.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Khmer grade 6 </p>
                <p style="color: lightblue;">35$</p>
              </div>
            </div>
            <div class="card" style="width: 18rem; padding: 3vh;">
              <img src="/img/b6.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Hommered Light Jumper</p>
                <p style="color: lightblue;">35$</p>
              </div>
  
            </div>
          </div>
  
          <div class="box-3" style="display: flex;">
  
            <div class="card" style="width: 18rem; padding: 3vh;">
              <img src="/img/b7.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Hommered Light Jumper</p>
                <p style="color: lightblue;">35$</p>
              </div>
            </div>
            <div class="card" style="width: 18rem; padding: 3vh;">
              <img src="/img/deadpool.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Deadpool Comic</p>
                <p style="color: lightblue;">35$</p>
              </div>
            </div>
            <div class="card" style="width: 18rem; padding: 3vh;">
              <img src="/img/netflix.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">To all the boy I've loved</p>
                <p style="color: lightblue;">35$</p>
              </div>
  
            </div>
          </div>
  
          <div class="box-3" style="display: flex;">
  
            <div class="card" style="width: 18rem; padding: 3vh;">
              <img src="/img/harrypotter.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Harry potter</p>
                <p style="color: lightblue;">35$</p>
              </div>
            </div>
            <div class="card" style="width: 18rem; padding: 3vh;" >
              <img src="/img/b11.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Hommered Light Jumper</p>
                <p style="color: lightblue;">35$</p>
              </div>
            </div>
            <div class="card" style="width: 18rem; padding: 3vh;">
              <img src="/img/b12.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Hommered Light Jumper</p>
                <p style="color: lightblue;">35$</p>
              </div>
  
            </div>
          </div>
          <div class="case-top" style="margin-top: 20px" >
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end" >
                  <li class="page-item "><a class="page-link text-dark" href="#">Previous</a></li>
                  <li class="page-item"><a class="page-link text-dark" href="#">1</a></li>
                  <li class="page-item"><a class="page-link text-dark"href="homepage2">2</a></li>
                  <li class="page-item"><a class="page-link text-dark" href="#">3</a></li>
                  <li class="page-item"><a class="page-link text-dark" href="#">Next</a></li>
                </ul>
              </nav>
             {{-- <img src="/img/a1.png" alt="" style="height: 45px; width: 800px;"> --}}
            </div>
        </div>
        
        </div>
      </div>
  
     
  @endsection