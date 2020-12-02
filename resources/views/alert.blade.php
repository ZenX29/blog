@foreach ($errors->all() as $error)
    <div class="alert alert-danger" role="alert">
        <p class="text-center">{{$error}}</p>
    </div>
@endforeach

@if (session('success'))
    <div class="alert alert-success" role="alert">
        <p class="text-center">{{session('success')}}</p>
    </div>
@endif
@if(session('error'))
    <div class="alert alert-danger" role="alert">
        <p class="text-center">{{session('error')}}</p>
    </div>
@endif