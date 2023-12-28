@extends('dashboard.app')
@section('content')
    <main class="dashboard_main">
        @include('dashboard.components.columns.left_column')
        <div class="content">

            <div class="dashboard_editprofile_block border_dashboard dashboard_block bg_secondary">
                <div class="dashboard_navsearch_block mt-16">
                    <ul class="dashboard_navsearch_block-nav">
                        <li data-nav="profile" class="active">Edit profile</li>
                        <li data-nav="followers">Followers</li>
                        <li data-nav="following">Following</li>
                    </ul>
                </div>
                <div class="navs_block" id="editprofile_block">
                    <div class="editprofile_block">
                        <p class="s-24 semibold">Personal Info</p>
                        <form>
                            <label class="editprofile_preview_block mt-32">
                                <img class="preview_image" src="{{ asset('img/png/avatar.png') }}" alt="avatar">
                                <input type="file" style="display:none" onchange="loadFile(event)">
                            </label>
                            <div class="input_block">
                                <p class="semibold">Name</p>
                                <div class="edit_popup_input_group">
                                    <input class="edit_input" placeholder="Name">
                                </div>
                            </div>
                            <div class="input_block">
                                <p class="semibold">Email</p>
                                <div class="edit_popup_input_group">
                                    <input class="edit_input" placeholder="Email">
                                </div>
                            </div>
                            <div class="input_block">
                                <p class="semibold">Country</p>
                                <div class="edit_popup_input_group">
                                    <select class="edit_input">
                                        <option selected value="US">United States</option>
                                    </select>
                                </div>
                            </div>
                            <div class="input_block">
                                <p class="semibold">Timezone</p>
                                <div class="edit_popup_input_group">
                                    <select class="edit_input">
                                        <option selected disabled>UTC</option>
                                    </select>
                                </div>
                            </div>
                            <button class="blue_btn w_full flex flex-center">Save changes</button>
                        </form>
                        <form class="editprofile_password_block border_dashboard3 br-10 mt-32" style="padding: 32px;">
                            <p class="s-20 semibold">Set a password</p>
                            <div class="input_block">
                                <p class="semibold">New password</p>
                                <div class="edit_popup_input_group">
                                    <input class="edit_input" placeholder="New password">
                                </div>
                                <div class="input_block">
                                    <p class="semibold">Confirm password</p>
                                    <div class="edit_popup_input_group">
                                        <input class="edit_input" placeholder="Confirm password">
                                    </div>
                                </div>
                                <button class="blue_btn w_full flex flex-center">Save changes</button>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="navs_block" id="followers_block">
                    <div class="dashboard_info_block mt-16 bg_four border_dashboard">
                        <img class="_icon-big" src="{{ asset('img/svg/icons/' . $theme . '/icon _favorite_2.svg') }}" alt="icon">
                        <h2 class="h2">You don't have any followers yet</h2>
                        <p>Share your page with your audience to get started.</p>
                    </div>
                </div>

                <div class="navs_block" id="following_block">
                    <div class="following_list">
                        <div class="follower">
                            <div>
                                <img class="preview_image" src="{{ asset('img/png/avatar.png') }}" alt="avatar">
                                <div class="follower_info">
                                    <div class="semibold">My Trip View</div>
                                    <div class="light_grey">Following since Oct 2023</div>
                                </div>
                            </div>
                            <div class="follower_actions">
                                <a class="underline">Unfollow</a>
                                <a class="grey_btn semibold">View page</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
        var loadFile = function (event) {
            var output = document.querySelector('.preview_image');
            output.style.display = 'block';

            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function () {
                URL.revokeObjectURL(output.src)
            }
        };
    </script>
@endsection
