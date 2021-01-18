@extends('layouts.header')

@section('content')
    <div class="container">
        <div class="blok">
            <p class="title">Latest random blogs</p>
            @if($post->count())
                @foreach($post as $post)
                    <div class="postPckg">
                        <div class="bkgrPst">
                            <b><a href="profile/{{ $post->user->name }}" class="usrNm">{{ $post->user->name }}</a></b>
                            <span class="date">{{ $post->created_at->diffForHumans() }}</span>
                            <div>
                                <a href="/post/{{$post->id}}" class="title">{{ $post->tittle }}</a>
                            </div>
                            <div class="liunl">
                                @if(!$post->likedBy(auth()->user()))
                                    <form action="{{ route('post.likes', $post) }}" method="post">
                                        @csrf
                                        <button type="submit" class="like">Like</button>
                                        <b><span style="color: green ">{{ $post->likes->count() }}</span></b>
                                    </form>
                                @else
                                    <form action="{{ route('post.likes', $post) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="unlike">Unlike</button>
                                        <b><span style="color: green ">{{ $post->likes->count() }}
                                                {{ Str::plural('like', $post->likes->count())}}</span></b>
                                    </form>
                                @endif
                                @if($post->ownedBy(auth()->user()))
                                    <form action="{{ route('post.destroy', $post) }}" method="post" class="formControl">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="delete">Delete</button>
                                    </form>
                                    <form action="{{ route('post.edit', $post->id) }}" method="post" class="formControl">
                                         @csrf
                                         <button type="submit" class="delete">Edit</button>
                                    </form>
                                @endif
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
