
@include('pages.header')
<header class="masthead" style="background-image: url('img/240z.jpg')">
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
	<h1>Create Post</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('subtitle', 'subTitle')}}
            {{Form::text('subtitle', '', ['class' => 'form-control', 'placeholder' => 'subTitle'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea ('body', '', ['col' => '40', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>
        <div class="form-group">
          {{Form::file('cover_image')}}
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
</div>
