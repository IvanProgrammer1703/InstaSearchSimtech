@extends('layouts.app')

@section('content')
<div class="container" style="margin-top:24px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Find photos by hashtag</div>
                    <form  action = "{{route('home.index')}}" method="GET">
                        @csrf
                        <br>
                        <div class="form-group container">
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping">#</span>
                                </div>
                                <input type="text" class="form-control" placeholder="hashtag" aria-label="Username" aria-describedby="addon-wrapping" name="tag">
                            <div class="input-group-prepend">
                                <select class="custom-select" id="inputGroupSelect01" name="num" style="border-radius: 0px 4px 4px 0px">
                                    <option selected>Choose...</option>
                                    <option value="9">9</option>
                                    <option value="18">18</option>
                                    <option value="36">36</option>
                                </select>
                            </div>
                            </div>
                            <small id="emailHelp" class="form-text text-muted">We will never share your requests with anyone else.
                            </small>
                        </div>
                        <button type="submit" class="btn btn-dark" style="margin-left:16px">Search</button>
                        <br>
                    </form>
                    @if(isset($medias))
                    @foreach($medias as $media)
                <div class="card-body">
                    <div class="card" style="width: 100%;">
                        <img class="card-img-top" src="{{$media->getImageHighResolutionUrl()}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <form action="{{route('home.store')}}" method="POST">
                                        @csrf
                                        <button class = "btn bg-dark" style = "float:right;"> 
                                            <input type="text" style = "display: none;" value = "{{$media->getImageHighResolutionUrl()}}" name="url"/>
                                            <img src="https://image.flaticon.com/icons/svg/126/126471.svg" alt="лойс" style = "width:25px; height:25px; float:right;"></button>
                                    </form>
                            </div>
                    </div>
                </div>
                    @endforeach
                    @else
                    <div class="container">
                        <p class = "form-text text-muted" align="center">You haven't made any requests</p>
                    </div>
                    @endif
            </div>
        </div>
    </div>
</div>
@endsection
