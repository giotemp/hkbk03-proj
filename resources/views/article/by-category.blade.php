<x-layout>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h1>Lista degli articoli per la categoria</h1>
            </div>
        </div>
        <div class="row">
            @foreach ($articles as $article)
            <div class="card" style="width: 18rem;">
                <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$article->title}}</h5>
                  <p class="card-text">{{$article->subtitle}}</p>
                  <p class="small text-muted">Redatto da {{$article->user->name}}</p>
                  <p class="small text-muted">Il {{$article->created_at->format('d/m/y')}}</p>
                  <a href="{{route('article.show',compact('article'))}}" class="btn btn-primary">Leggi</a>
                </div>
              </div>
            @endforeach
        </div>
    </div>

</x-layout>