<div class="jumbotron">
    <img src="../img/jumbotron.jpg" alt="">
</div>
<div class="card-container d-flex flex-wrap justify-content-between">
    @foreach ($array as $comic)
      <div class="comic-card my-3">
          <div class="card-img">
            <img src="{{$comic['thumb']}}" alt="">
          </div>
        
        <div class="text py-2">{{$comic['series']}}</div>
      </div>
    @endforeach
</div>