@include('pages.header')
<!-- Page Header -->
    <header class="masthead" style="background-image: url('/storage/cover_images/{{$post->cover_image}}')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>{{$post->title}}</h1>
              <span class="subheading">{{$post->subtitle}}</span>
            </div>
          </div>
        </div>
      </div>
      </header>

<div class="container">

      		<div class="col-lg-8 col-md-10 mx-auto">
      			
            <p STYLE="text-align:left">
              {!!$post->body!!}
            </p>
@if(!Auth::guest())
             <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
             {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-default'])}}
              {!!Form::close()!!}
      		</div>
@endif

</div>
      


