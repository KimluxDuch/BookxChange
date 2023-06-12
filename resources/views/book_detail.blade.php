

@extends('layout.master')

@section('layout.header')
<head>
  <title>Book Detail</title>
 
</head>
@endsection

@section('content')

<link href="assets/css/detail.css" rel="stylesheet">

  <div class="container">
    <h1>Review</h1>
    <div class="row">
      <div class="book">
        <img src="/img/marvel.jpg" style="width: 30%;">
        <div class="details">
          <p class="title">Miles Morales: Spider-Man (2022)</p>
          <p class="description">Spider-Man faces the strongest super-powered foes and most dangerous gauntlets the Multiverse can throw his way, and every time Miles Morales falls, he rises again — stronger than before. </p>
          <p class="pages">Pages: 56</p>
          <p class="location">Location: New York</p>
          <p class="posted-by">Posted By: Peter Parker</p>
          <p class="phone">Phone Number: 123-456-7890</p>
        </div>
      </div>
    </div>
   
	
    
  </div><hr>
  <h5 style="margin-left: 100px;"> Find more suggested book to exchange! </h5> <br>
<div class="column">
            <!-- Book details sections here -->
            <div class="book2" >
                <a href="book_detail">
				<img src="{{asset("assets/img/spiderpunk.jpg")}}">
                    <p class="title2">Spider-Punk</p>
                </a>
            </div>

            <div class="book2">
                <a href="book_detail">
				<img src="/img/start.jpg">
                    <p class="title2">It starts With Us</p>
                </a>
            </div>


			<div class="book2">
                <a href="book_detail">
				<img src="/img/flash.jpg">
                    <p class="title2">The Flash</p>
                </a>
            </div>

			<div class="book2">
                <a href="book_detail">
				<img src="/img/obama.jpg">
                    <p class="title2">A Promise Land</p>
                </a>
            </div>
      <div class="book2">
                <a href="book_detail">
				<img src="/img/netflix.jpg">
                    <p class="title2">To all the boys</p>
                </a>
            </div>
			




       </div>

  <a href="{{ url('/profile') }}" class="back-button light" style="text-decoration: none;color=black;">Upload</a>
       {{-- <button onclick="window.location.herf = 'profile'"></button> --}}
@endsection
