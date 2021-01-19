@extends('layouts.header')

@section('content')
    @include('post.post_data')
    <script>
        $(document).ready(function (){
            $(document).on('click', '.pagination a', function (event) {
                event.preventDefault();
                var page = $(this).attr('href').split('page=')[1];
                getMorePosts(page);
            });

            function getMorePosts(page)
            {
                $.ajax({
                    type:"GET",
                    url:"/post/getMorePosts"+page,
                    success:function(data)
                    {
                        $('#post_data').html(data);
                    }
                });
            }
        });
    </script>
@endsection

