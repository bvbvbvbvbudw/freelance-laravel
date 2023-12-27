@extends('dashboard.app')
@section('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/dropzone.css') }}" type="text/css" />
    <main class="dashboard_main">
        @include('dashboard.components.columns.left_column')
        <div class="content">

            <form class="dashboard_enablemembership_block content-col2 gap-32">
                <div class="br-10 border_dashboard membership_form content-col2-main p-32-24 bg_secondary">
                    <div class="membership_form_block">
                        <h3 class="membership_form_block_header">Membership level name</h3>
                        <div class="border_dashboard3 input_group">
                            <input class="input-transparent" value="Bronze level">
                        </div>
                    </div>
                    <div class="membership_form_block">
                        <h3 class="membership_form_block_header">Price</h3>
                        <div class="border_dashboard3 input_group">
                            <span class="input_grop_text">$</span>
                            <span class="input_group_separator">|</span>
                            <input readonly class="input-transparent input_group_control" value="5">
                            <span class="input_grop_text">Monthly</span>
                        </div>
                        <div class="border_dashboard3 input_group">
                            <span class="input_grop_text">$</span>
                            <span class="input_group_separator">|</span>
                            <input readonly class="input-transparent input_group_control" value="50">
                            <span class="input_grop_text">Yearly</span>
                        </div>

                    </div>
                    <div class="membership_form_block membership_form_image_block">
                        <div>
                            <p class="s-20-s">Image</p>
                            <p class="mt-24 s-20 light_grey">This is not required, but it can be a nice way to build your brand or make
                                the
                                offering more
                                attractive<br><br>Recommended size: 250px x 150px</p>
                        </div>
                        <div>
                            <div id="dropzone-container" class="dropzone dropzone_green dropzone_sm br-10 mt-16">
                                <div class="dz-default dz-message">
                                    <div><img style="height:40px" src="{{ asset('img/svg/icons/'. $theme . '/ic_filter_48px2.svg') }}" alt="icon"></div>
                                    <h2 class="mt-16">Upload image or <span>drag and drop</span></h2>
                                </div>
                            </div>
                            <div id="file-list" class="file-list"></div>
                        </div>
                    </div>
                    <div class="membership_form_block">
                        <h3 class="membership_form_block_header">Description</h3>
                        <p class="light_grey">This will help your audience decide whether to join your membership. Describe in your
                            own words what you're
                            offering them.</p>
                        <div class="border_dashboard3 input_group input_group_full">
                            <textarea style="height:140px" class="input-transparent noresize reverse_color_important"></textarea>
                        </div>
                    </div>

                    <div class="membership_form_block">
                        <h3 class="membership_form_block_header">Rewards</h3>
                        <p class="light_grey">Rewards could be anything from exclusive posts to a thank you message. Click ‘Add
                            rewards’ to see some
                            examples</p>
                        <div class=" input_group input_group_full_green">
                            <input readonly class="input-transparent input_group_control reverse_color_important"
                                   value="Support me on a monthly basic">
                            <div class="input_group_text">
                                <div class=" dropdown">
                                    <div class="dropbtn dropbtn-image transparent">
                                        <img class="_icon" src="{{ asset('img/svg/icons/light/ic_more_horiz_48px.svg') }}" alt="icon">
                                    </div>
                                    <div class="dropdown-content-block dropdown-left">
                                        <div class="dropdown-content sharepage_dropdown ">
                                            <ul class="dropdown-list">
                                                <li>
                                                    <a href="#">Edit reward</a>
                                                </li>
                                                <li>
                                                    <a href="#">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" input_group input_group_full_green">
                            <input readonly class="input-transparent input_group_control reverse_color_important"
                                   value="Support me on a monthly basic">
                            <div class="input_group_text">
                                <div class=" dropdown">
                                    <div class="dropbtn dropbtn-image transparent">
                                        <img class="_icon" src="{{ asset('img/svg/icons/light/ic_more_horiz_48px.svg') }}" alt="icon">
                                    </div>
                                    <div class="dropdown-content-block dropdown-left">
                                        <div class="dropdown-content sharepage_dropdown ">
                                            <ul class="dropdown-list">
                                                <li>
                                                    <a href="#">Edit reward</a>
                                                </li>
                                                <li>
                                                    <a href="#">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="button button_1 button-br_sm flex flex-center s-18 main_color_important">Add a reward</div>
                    </div>

                    <div class="membership_form_block">
                        <label class="checkbox_group">Limit the number of members
                            <input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                        </label>
                        <p class="light_grey">Useful if you’re offering rewards that are difficult to fulfil, or simply to create a
                            sense of urgency.</p>

                        <div class="border_dashboard3 input_group input_group_full">
                            <input class="input-transparent input_group_control reverse_color_important"></input>
                        </div>
                    </div>

                    <div class="membership_form_block">
                        <label class="checkbox_group">Give members access to selected discord rolers
                            <input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                        </label>
                        <p class="light_grey">Enable access to your Discord server to provide Discord role as a benefit.
                            Connect Discord</p>
                        <div class="button button_1 button-br_sm flex flex-center s-18 main_color_important">Connect Discord</div>

                    </div>

                    <div class="membership_form_block">

                        <p>Welcome note<br><br><span class="light_grey">This will be visible after the payment and in the welcome
              email.
              Make it personal, and
              include any links to rewards you'd like to share with them</span></p>
                        <div class="border_dashboard3 input_group input_group_full">
                            <input class="input-transparent input_group_control reverse_color_important"
                                   value="Thank you for joining my membership! 🎉">
                        </div>

                    </div>

                    <div class="membership_form_block">

                        <button class="w_full button button_1 button-br_sm flex flex-center main_color_important">Create</button>

                    </div>



                </div>
                <div class="membership_submit_block content-col2-aside-sm ">
                    <h4 class="h4">Level Prefiew</h4>
                    <div class="mt-24 br-10  border_dashboard membership_submit_block-block bg_secondary">
                        <p class="s-18 bold">Level 1</p>
                        <p class="s-32 bold mt-24">$5</p>
                        <p class="uppercase s-12 mt-16 medium">per month</p>
                        <div class="button button_1 mt-16 main_color_important flex flex-center">Join</div>
                        <ul class=" listed">
                            <li class="mt-16 s-14">Support me on a monthly basis</li>
                            <li class="mt-16 s-14">Unlock exclusive posts and messages</li>
                        </ul>
                    </div>
                </div>
            </form>

        </div>
        <script>
            Dropzone.autoDiscover = false;

            const myDropzone = new Dropzone('#dropzone-container', {
                url: '#',
                addRemoveLinks: true,
                autoProcessQueue: false,
            });

        </script>
    </main>
@endsection
