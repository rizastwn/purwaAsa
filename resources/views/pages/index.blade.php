@include('pages.header')
<!-- Page Header -->

    <header class="masthead"  style="background-image: url('img/bg.jpeg')" >
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Hai !</h1>
              <span class="subheading">jangan menyerah, dan teruslah bermimpi</span>
            </div>
          </div>
        </div>
      </div>
      </header>

<div class="container">
    <div class="col-lg-8 col-md-10 mx-auto">
	@if(count($posts) > 0)
      	@foreach($posts as $post)
            <div class="wells">
      			<h1 class="post-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
      			<small>{{$post->subtitle}}</small>
      		<br><br><br>
            </div>
      	@endforeach
      	 
      	{{$posts->links()}}
      @endif

	</div>
</div>
      


