@extends('../master')
<!-- Page Header -->
<header class="masthead" style="background-image: url('../img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Create Blogs</h1>
            <span class="subheading">A Blog Theme by Start Bootstrap</span>
          </div>
        </div>
      </div>
    </div>
  </header>
@section('content')
 <!-- Main Content -->
 <div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
      <p>Make Your Ideas Come to Life with a star bootstrap!</p>
      <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
      <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
      <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
      <form name="sentMessage" id="contactForm"  method="POST" action="/blog/create" style="float: left;width:100%;">
        @csrf
        <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>Title</label>
            <input type="string" class="form-control" placeholder="Type your blog title" id="name" name="title">
          </div>
        </div><br>
          <label for="">Category</label>
            <select class="Choose Category"  name="category_id">
              <option selected>-</option>
                @foreach ($categorys as $item)
                  <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
        <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>Tile Body</label>
            <textarea rows="5" class="form-control" placeholder="Type your blog description" name="body"></textarea>
          </div>
        </div><br>
        <div class="control-group">
          <div class="form-group col-xs-12 floating-label-form-group controls">
            <label>Blog Photo</label>
            <input type="tel" class="form-control" placeholder="Blog img" id="phone" name="img">
          </div>
        </div>
        <br>
        <div id="success"></div>
        <button type="submit" class="btn btn-primary" id="sendMessageButton">Create</button>
      </form>
      <a href="/blogs">
        <button class="btn btn-primary" id="sendMessageButton" style="float: left; margin-top:469px; margin-left:-599px;">cancel</button>
      </a>
    </div>
  </div>
</div>

<hr>
@endsection