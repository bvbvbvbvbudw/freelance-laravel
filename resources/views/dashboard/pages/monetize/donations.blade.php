@extends('dashboard.app')
@section("content")
    <main class="dashboard_main">
        @include('dashboard.components.columns.left_column')
        <div class="content">
            <div class="dashboard_donations_block border_dashboard dashboard_block bg_secondary">
                <div class="dashboard_navsearch_block mt-16">
                    <ul class="dashboard_navsearch_block-nav">
                        <li data-nav="supporters" class="active">Supporters</li>
                        <li data-nav="settings">Settings</li>
                    </ul>
                </div>
                <div class="navs_block" id="supporters_block">
                    <div class="row-3 donation_statistics statistics mt-16">
                        <div class="border_dashboard br-10">
                            <h2 class="h1">0</h2>
                            <p class="s-18 mt-16"><img class="_icon_medium" src="{{ asset('img/svg/icons/' . $theme . '/icon _favorite_.svg') }}" alt="icon">
                                0
                                supporter</p>
                        </div>
                        <div class="border_dashboard br-10">
                            <h2 class="h1">$0</h2>
                            <p class="s-18 mt-16"><img class="_icon_medium"
                                                       src="{{ asset('img/svg/icons/' . $theme . '/ic_date_range_48px.svg') }}" alt="icon">
                                Last 30 Days</p>
                        </div>
                        <div class="border_dashboard br-10">
                            <h2 class="h1">$0</h2>
                            <p class="s-18 mt-16"><img class="_icon_medium"
                                                       src="{{ asset('img/svg/icons/' . $theme . '/icon _attach money_.svg') }}" alt="icon">
                                All time</p>
                        </div>
                    </div>
                </div>
                <div class="navs_block" style="Display:none" id="settings_block">
                    <div class="donations_settings">
                        <p class="s-20 semibold">Price per coffee</p>
                        <p>Change the default price of a coffee to an amount of your choice.</p>
                        <div class="donation_settings_price">
                            <div class="active">$1</div>
                            <div>$2</div>
                            <div>$3</div>
                            <div>$4</div>
                            <div>$5</div>
                        </div>
                        <hr>
                        <p class="s-20 semibold">Thank you message</p>
                        <p>This will be visible after the payment and in the receipt email. Write a personable thank you message, and
                            include any rewards if you like.</p>
                        <div>
                            <div class="edit_popup_input_group">
              <textarea style="height: 100px;" class="edit_input"
                        placeholder="Alex Jeleazco">Thank you for the support! 🎉</textarea>
                            </div>
                        </div>
                        <div class="flex gap-16">
                            <p class="s-20 semibold">Indicate my donation</p>
                            <span class="switcher switcher_color2">
              <input id="indicate" type="checkbox" /><label for="indicate">Toggle</label>
            </span>
                        </div>
                        <p>If you’re donating your earnings to a cause or a charity, you can display a message on your page.</p>
                        <div style="display:none" class="donation_settings_donating">
                            <div style="gap:1px" class="edit_popup_input_group">
                                <input style="width:30px" class="edit_input" placeholder="100">
                                <span class="input_group_text">%</span>
                            </div>
                            <div>of all proceeds go to</div>
                            <div class="edit_popup_input_group">
                                <input style="width:150px" class="edit_input" placeholder="Choose love">
                            </div>
                        </div>
                        <button class="blue_btn w_full flex flex-center">Save changes</button>
                    </div>
                </div>

            </div>
            <div class="navs_block" id="supporters_block">
                @include('dashboard.components.monetize.recents')
            </div>
        </div>
    </main>
    <script>
        $('#indicate').on('change', function () {
            if ($(this).is(':checked')) {
                $('.donation_settings_donating').show();
            } else
                $('.donation_settings_donating').hide();
        });

        $('.donation_settings_price > div').click(function () {
            $('.donation_settings_price > div').removeClass('active');
            $(this).addClass('active');
        });
    </script>
@endsection
