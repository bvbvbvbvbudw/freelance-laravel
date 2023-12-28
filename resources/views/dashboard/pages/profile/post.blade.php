@extends('layout.app')
@section('content')
    <div class="profile_container">
        @foreach($posts as $post)
            <div class="profile_block p_post_block">
                <div class="profile_border1 br-20 p_post_1">
                    <div class="p_post_header">
                        <button class="button button_1 semibold">Supporters only</button>
                        <h2 class="h2">{{ $post -> title }}</h2>
                        <div class="flex gap-8">
                            <span class="s-18 light_grey">{{ $post -> created_at }}</span>
                            <a class="s-18 light_grey" href="">Edit post</a>
                        </div>
                    </div>
                    <div class="p_post_image">
                        <img onclick="postImagePopup()" src="{{ asset($post->photo_path) }}" alt="post photo">
                    </div>
                    <div class="p_post_content">
                        <span class="s-18 medium light_grey">{{ $post -> description }}</span>
                        <span class="s-18 light_grey">Enjoy this post?</span>
                        <span class="s-18">Buy Alex a coffee</span>
                        <a class="semibold button button_1 button_medium" href="">Support $5</a>
                    </div>
                    <div class="p_post_actions">
                        <a href=""><img class="_icon_medium" src="{{ asset('img/svg/icons/' . $theme . '/ic_favorite_border_48px4.svg') }}"
                                        alt=""></a>

                            <a href=""><img class="_icon_medium" src="{{ asset('img/svg/icons/' . $theme . '/ic_message_48px4.svg') }}" alt="icon"></a>
                        <a href=""><img class="_icon_medium" src="{{ asset('img/svg/icons/' . $theme . '/file_upload 4.svg') }}" alt="icon"></a>
                    </div>
                </div>
                <div class="profile_border1 br-20 p_post_2">
                    <span>Popular</span>
                    <h2 class="h2">Hello</h2>
                </div>
            </div>
        @endforeach
    </div>
@endsection
