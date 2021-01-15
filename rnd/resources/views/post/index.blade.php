@extends('layouts.header')

@section('content')
    <div class="container">
        <div class="blok">
            <form action="{{ route('post') }}" method="post" class="mb-4">
                @csrf
                <div class="col-12">
                    <div class="textUnForm">
                        <b><label for="body" style="color: white">Write your post</label></b>
                    </div>
                    <textarea class="form-control" name="body" id="body" cols="15" rows="5"
                              placeholder="Write something"></textarea>
                    @error('body')
                    <div class="errorMessage">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-6 mb-2">
                    <button type="submit" class="btn btn-primary">Post</button>
                </div>
            </form>

            <div class>

            </div>
            @if($post->count())
                @foreach($post as $post)
                    <div class="postPckg">
                        <div class="bkgrPst">
                            <b><a href="" class="usrNm">{{ $post->user->name }}</a></b>
                            <span class="date">{{ $post->created_at->diffForHumans() }}</span>
                            <p class="mb-4">{{ $post->body }}</p>

                            <div class="liunl">
                                <form action="" method="post">
                                    @csrf
                                    <button type="submit" class="like">Like</button>
                                </form>
                                <form action="" method="post">
                                    @csrf
                                    <button type="submit" class="unlike">Unlike</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!–– TO DO LISTOVANIE STARSICH PRISPEVKOV -->
            @else
                <p>There are no posts to show</p>
            @endif
        </div>
    </div>



@endsection
