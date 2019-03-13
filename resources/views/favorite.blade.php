@extends('layouts.app')
@section('content')
<div class="container" style="margin-top:24px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">I liked the pictures</div>
                <div class="card-body">
                    @foreach($favorite as $media)
                        <div class="card" style="width:100%;
                        margin-top: 10px;
                        ">
                            <img src="{{$media->url}}" class="card-img-top" alt="photo">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <form action = "{{route('favorite.store')}}" method="POST">
                                        @csrf
                                        <a href="{{$media->url}}" class="btn btn-primary">Open photo</a>
                                        <input type="text" name="number" value="{{$media->id}}"/ style="display: none;">
                                        <button class="btn btn-dark bg-dark"><img src="https://image.flaticon.com/icons/svg/1215/1215092.svg" alt="удалить" style="width:23px; height: 23px; float:right;"></button>
                                    </form>
                                </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection