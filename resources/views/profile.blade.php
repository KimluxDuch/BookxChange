



@extends('layout.master')

@section('layout.header')
<head>
    <title>Profile</title>
</head>
@endsection

@section('content')

    <link href="assets/css/profile.css" rel="stylesheet">

    <div class="container">
    <div class="logo">
      <img src="{{asset("assets/img/logoweb262.png")}}" alt="" style="height: 30%; width:15%;">
    </div><br>
        <h1>Upload Your Book</h1>
        <div class="box-big">
      
            <div class="box-left"> 
              
             <div class="box-letter"> 
              
                <form>
                    <label for="img">Upload Book Image</label> <br>
                    <input type="file" id="img" name="img" accept="image/*"> <br><br>
                    <button>Upload</button>
                  </form>
      
            </div>
            </div>
            <div class="box-right">
                <form action="save" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="row_name">
                        <h3>Book Name</h3>
                        <div class="grid">
                            <div>
                                <input type="text" placeholder="Book Title" name="first_name"> <br>
                            </div>
                        </div>
                    </div>
                    <div class="email">
                        <h3>Author Name</h3>
                        <div style="margin-top: 10px;">
                            <input type="text" placeholder="Author name..." name="company_name" style="width: 300px"> 
                        </div>
                        <h5>Book Type</h5>
                        <div style="margin-top: 10px;">
                            <select name="bookstype" id="type">
                                <option value="romance">Romance</option>
                                <option value="romance">Comic</option>
                                <option value="romance">Sci-Fi</option>
                                <option value="romance">Study Book</option>
                                <option value="romance">Novel</option>
                                <option value="romance">History</option>
                            </select>
                        </div>
                    </div>
                    <div class="email">
                        <h3>E-mail</h3>
                        <div style="margin-top: 10px;">
                            <input type="text"placeholder="Email-address..." name="email" style="width: 300px"> <br>
                            <label for="email">example@example.com</label>
                        </div>
                    </div>
                    <div class="mailingAddress">
                        <h3>Mailing Address</h3>
                        <div style="margin-top: 10px;">
                            <input type="text" placeholder="Where you live" name="mailing_address" style="width:590px" > <br>
                            <label for="mailing_address">Street Address</label>
                        </div>
                        <div class="cityAndState">
                            <div class="city">
                                <input type="text" name="city" style="width: 290px">
                                
                                <input type="text" name="state_or_province" style="width: 290px"> 
                                <label for="city">City</label>
                                <label for="state_or_province" style="margin-left: 265px;">State/Province</label>
                            </div>
                            <div class="state">
                                
                            </div>
                        </div>
                        <div class="cityAndState">
                            <div class="city">
                                <input type="number" name="postalcode" style="width:10rem;" > <br>
                                <label for="postalcode">Postal/Zip Code</label>
                            </div>
                        </div>
                    </div>
                    <div class="productDescription">
                        <h4>Description of Your Book</h4>
                        <input type="text" name="product_description" placeholder="Enter the description of your product"></input>
                    </div>
        
                    <br>
                    <div class="submit">
                        <input type="submit" value="Submit">
                    </div>
                </form>
            </div>
            
            </div>
  

        
    </div>


@endsection
