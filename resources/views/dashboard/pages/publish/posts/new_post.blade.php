@extends('dashboard.app')
@section('content')
    <main class="dashboard_main">
        @include('dashboard.components.columns.left_column')
        <div class="content">
            <div class="dashboard_newpost_block border_dashboard dashboard_block bg_secondary">
                <form action="{{route('post_create')}}" method="POST">
                    @csrf
                    <div class="newpost_col2">
                        <div>
                            <h2 class="h2">Write a post</h2>
                            <input class="h2 mt-16 input-colormain input-transparent" name="title" type="text" placeholder="Title">
                        </div>
                        <div class="newpost_actions">
                            <a href="/app/dashboard/post.php" class="button button_2">
                                <img class="_icon" src="/app/img/svg/icons/<?= $theme ?>/ic_keyboard_arrow_left_48px2.svg">
                                Dashboard
                            </a>
                            <div class="button_with_dropdown  mt-16">
                                <button class="dropbtn light_border" type="submit"> Publish now</button>
                                <div class="dropdown">
                                    <div class="dropbtn arrow_dropbtn light_border">
                                        <img class="_icon-big" src="../img/svg/icons/light/ic_keyboard_arrow_down_48px.svg">
                                    </div>
                                    <div class="dropdown-content-block dropdown-left">
                                        <div class="dropdown-content sharepage_dropdown ">
                                            <select name="statuses_post" id="">
                                                <option value="1">Public now</option>
                                                <option value="2">Schedule</option>
                                                <option value="3">Save as draft</option>
                                            </select>
{{--                                            <ul class="dropdown-list">--}}
{{--                                                <li>--}}
{{--                                                    <a href="#">Public now--}}
{{--                                                    </a>--}}
{{--                                                </li>--}}
{{--                                                <li>--}}
{{--                                                    <a href=" #">Schedule</a>--}}
{{--                                                </li>--}}
{{--                                                <li>--}}
{{--                                                    <a href=" #">Save as draft</a>--}}
{{--                                                </li>--}}
{{--                                            </ul>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post_access border_dashboard br-10 mt-16 light_border">
                                <p>Who can see this post?</p>
                                <div class="dropdown mt-16">
                                    <div class="dropbtn dropdown_select">
                                        <img class="_icon" src="../img/svg/icons/light/ic_language_48px.svg">
                                        Public
                                        <img class="_icon" src="../img/svg/icons/light/ic_keyboard_arrow_down_48px.svg">
                                    </div>
                                    <div class="dropdown-content-block dropdown-content-close dropdown-left">
                                        <div class="dropdown-content sharepage_dropdown">
                                            <select name="permission_post" id="">
                                                <option value="1">Public</option>
                                                <option value="2">Supporters</option>
                                            </select>
{{--                                            <ul class="dropdown-list">--}}
{{--                                                <li>--}}
{{--                                                    <a href="#">Public--}}
{{--                                                    </a>--}}
{{--                                                </li>--}}
{{--                                                <li>--}}
{{--                                                    <a href=" #">Supporters</a>--}}
{{--                                                </li>--}}
{{--                                            </ul>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="mt-16">
                    <div class="newpost_text_block mt-16">
                        <input class="input-colormain input-transparent" type="text" name="description" placeholder="Write something...">
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection

