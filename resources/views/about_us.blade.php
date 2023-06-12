
@extends('layout.master')

@section('layout.header')

<head>
  <title>Book Detail</title>
 
</head>
@endsection

@section('content')


<link href="assets/css/about.css" rel="stylesheet">
  <div class="container">
    <div class="logo">
      <br><img src="{{asset("assets/img/logoweb262.png")}}" alt="" style="height: 30%; width:15%">
    
    </div>
    
    <h1>About Us</h1>
    
   <h5> <center>Welcome to BookXchange!</center><br>
   &emsp;&emsp;&emsp;Book X Change is a revolutionary platform dedicated to connecting book enthusiasts and promoting a culture of reading and knowledge sharing.
Our platform provides a seamless and user-friendly experience for individuals to browse through an extensive collection of books and connect with other members. 
<br><br>&emsp;&emsp;&emsp;Mission: Our mission is to create a vibrant community where individuals can easily exchange books, discover new literary treasures, and connect with like-minded readers.
At Book X Change, we understand the joy of immersing oneself in the pages of a captivating book and the desire to share that experience with others;and could be to promote literacy, knowledge sharing, and a love for books among readers. It might include encouraging reading habits, supporting authors and publishers, fostering a sense of community, and providing resources for book enthusiasts.
<br><br>&emsp;&emsp;&emsp;Goal: The goal of Book X Change could vary depending on your specific vision. Some potential goals might include:
<br>Building a large and engaged user base of readers and book lovers.
  <br>&emsp;&emsp;&emsp;Providing a platform for authors to promote their work and connect with readers.
  <br>&emsp;&emsp;&emsp;Offering a wide range of books across various genres and formats.
  <br>&emsp;&emsp;&emsp;Facilitating book discussions, recommendations, and reviews.
  
  </h5>





    <div class="contact-info">
      <h3><center>Contact Us</center></h3>
      <br>
      <p>If you have any questions, feedback, or inquiries, feel free to reach out to us:</p>
      
      <ul><br>
        <li>Email: info@bookxchange.com</li>
        <li>Phone: 123-456-7890</li>
      </ul>
  
  

  <footer>
    <div class="footer-content">
        <!-- Footer content here -->
    </div>
    <div class="social-media">
        <ul> <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
            <li><a href="https://www.facebook.com/example" target="_blank"><i class="fab fa-facebook"></i></a></li>
            <li><a href="https://www.twitter.com/example" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a href="https://www.instagram.com/example" target="_blank"><i class="fab fa-instagram"></i></a></li>
        </ul>
    </div>
</footer>
</div>
</div>
@endsection

@section('layout.footer')
@endsection
