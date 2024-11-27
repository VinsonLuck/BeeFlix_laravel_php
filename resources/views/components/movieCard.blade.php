<div class="row row-cols-1 row-cols-md-4 g-4 mt-4">
    @foreach ($movies as $item)
        <div class="col">
            <div class="card h-100">
                <div class="ratio ratio-1x1">
                    <img src="{{asset('storage/' .$item->photo)}}" class="card-img-top h-100" style="height:400px;" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $item->title }}</h5>
                    <p class="card-text">{{ $item->genre->name }}</p>
                    <p class="card-text">{{ $item->description }}</p>
                    <p class="card-text">{{$item->publish_date}}</p>
                    <form action="{{route('movie.delete', $item->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn fw-bold btn-danger text-light" style="width:100%" value="Delete">
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>
