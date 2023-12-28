@extends('layout.app')
@section('content')

    <div class="profile_container">
        @if(count($req_user->posts) > 0)
            @foreach($req_user->posts as $post)
                    <?php
                    $dateTime = new DateTime($post -> created_at);
                    $posted_at = $dateTime->format('F j, Y');
                    ?>
                <div class="profile_block p_post_block">
                    <div class="profile_border1 br-20 p_post_1" style="width: 100%">
                        <div class="p_post_header">
                            <div class="gap-8">
                                <h2 class="h2">{{ $post -> title }}</h2>
                                <span class="s-18 light_grey">Posted in {{ $posted_at }}</span>
                            </div>
                            <button class="button button_1 semibold">Supporters only</button>
                        </div>
                        @if(isset($post) && $post->photo_path)
                            <div class="p_post_image">
                                <img onclick="postImagePopup()" src="{{asset($post->photo_path)}}" alt="post photo">
                            </div>
                        @endif
                        <div class="p_post_content">
                            <span class="s-18 medium light_grey">{{ $post -> description }}</span>

                            @if(isset($user) && $user && isset($req_user) && $req_user)
                                @if($user->id !== $req_user->id)
                                    <span class="s-18">Enjoy this post? Buy {{$req_user->name}} a coffee</span>
                                    <form id="supportForm" method="post" action="{{route('paymentPopup')}}">
                                        @csrf
                                        <input type="hidden" name="donate" id="donate" value="5">
                                        <input type="hidden" name="id" id="id" value="{{isset($req_user) && $req_user  ? $req_user->id : "" }}">
                                        <button onclick="paymentPopup1(event)" id="support_button" class="semibold button button_1 button_medium">Support $5</button>
                                    </form>
                                @endif
                            @endif

                        </div>
                        <div class="p_post_actions">
                            <a href=""><img class="_icon_medium" src="{{ asset('img/svg/icons/' . $theme . '/ic_favorite_border_48px4.svg') }}"
                                            alt=""></a>

                            <a href=""><img class="_icon_medium" src="{{ asset('img/svg/icons/' . $theme . '/ic_message_48px4.svg') }}" alt="icon"></a>
                            <a href=""><img class="_icon_medium" src="{{ asset('img/svg/icons/' . $theme . '/file_upload 4.svg') }}" alt="icon"></a>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="profile_block p_post_block">
                <div class="profile_border1 br-20 p_post_1" style="width: 100%">
                    <img class="icon-big" src="{{ asset('img/svg/icons/' . $theme . '/icon _favorite_2.svg') }}" alt="icon">
                    <h2 class="h2 text-center">This user hasn't added posts yet</h2>
                </div>
            </div>
        @endif

    </div>
@endsection
