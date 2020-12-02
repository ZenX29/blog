@extends('../master')
 <!-- Page Header -->
 <header class="masthead" style="background-image: url('../img/post-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading text-uppercase">
            <h1>{{$item->title}}</h1>
            <span class="meta">Posted by
              <a href="#">{{Auth::user()->name}}</a><br>
              ({{$item->created_at->format('d/m/y')}})</span>
          </div>
        </div>
      </div>
    </div>
  </header>
@section('content')
   
  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <p>{{$items->body}}</p>          
        </div>
      </div><hr>
    </div>
  </article>

  
@endsection