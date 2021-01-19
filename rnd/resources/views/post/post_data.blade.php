<div class="container">
    <div class="blok">
        <p class="title">Latest random blogs</p>
        @if($post->count())
            @foreach($post as $posts)
                <div class="postPckg">
                    <div class="bkgrPst">
                        <b><a href="profile/{{ $posts->user->name }}" class="usrNm">{{ $posts->user->name }}</a></b>
                        <span class="date">{{ $posts->created_at->diffForHumans() }}</span>
                        <div>
                            <a href="/post/{{$posts->id}}" class="title">{{ $posts->tittle }}</a>
                        </div>
                        <div class="liunl">
                            @if(!$posts->likedBy(auth()->user()))
                                <form action="{{ route('post.likes', $posts) }}" method="post">
                                    @csrf
                                    <button type="submit" class="like">Like</button>
                                    <b><span style="color: green ">{{ $posts->likes->count() }}</span></b>
                                </form>
                            @else
                                <form action="{{ route('post.likes', $posts) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="unlike">Unlike</button>
                                    <b><span style="color: green ">{{ $posts->likes->count() }}
                                            {{ Str::plural('like', $posts->likes->count())}}</span></b>
                                </form>
                            @endif
                            @if($posts->ownedBy(auth()->user()) || auth()->user()->name === 'admin')
                                <form action="{{ route('post.destroy', $posts) }}" method="post" class="formControl">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="delete">Delete</button>
                                </form>
                                <b><a href="/post/{{$posts->id}}/edit" class="delete">Edit</a></b>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
            <div>
                {!! $post->links() !!}
            </div>
        @else
            <p>There are no posts to show</p>
        @endif
    </div>
</div>
