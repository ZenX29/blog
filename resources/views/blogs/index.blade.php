@extends('../master')
<!-- Page Header -->
<header class="masthead" style="background-image: url('img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Clean Blog</h1>
            <span class="subheading">A Blog Theme by Start Bootstrap</span>
            <br>
            <a href="/blogs/create"><span class="badge badge-primary">CREATE POST +</span></a>
          </div>
        </div>
      </div>
    </div>
  </header>
@section('content')
<div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        @foreach ($items as $item)
        @foreach ($categorys as $category)
        <div class="post-preview">
         <a href="/blog/{{$item->id}}">
           <h2 class="post-title text-capitalize">
             {{$item->title}}
           </h2>
           <a href=""><span class="badge badge-primary">{{$category->name}}</span></a>
           <h3 class="post-subtitle">
             {{$item->body}}
           </h3>
         </a>
         <p class="post-meta">Posted by
           <a href="#">{{Auth::user()->name}}</a><br>
            ({{$item->created_at->format('d/m/y')}})</p>
       </div>
       <a href="/blog/edit/{{$item->id}}" style="float: left;"><span class="badge badge-warning">Edit</span></a>
       <form action="/blog/{{$item->id}}/delete" method="post">
         @csrf
        <a href="/blog/delete/{{$item->id}}" style="float: left;margin-left:10px;"><span class="badge badge-danger">Delete</span></a>
       </form>
       <hr style="margin-top: 4rem !important;"> 
          @endforeach
        @endforeach
        <!-- Pager -->
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Older Posts →</a>
        </div>
      </div>
        <!-- Example single danger button -->
        <div class="btn-group col-md-2" style="height: 50px;margin-top:40px;">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Category
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="/blogs">All</a>
          @foreach ($categorys as $category)
            <a class="dropdown-item" href="#">{{$category->name}}</a>
          @endforeach
        </div>
      </div>
    </div>
  </div>

@endsection
