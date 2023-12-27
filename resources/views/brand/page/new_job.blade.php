@extends('brand.app')
@section('content')
<main class="dashboard_main">
    @include('brand.components.columns.brands_left_column')
    <div class="content">
        <div class="border_dashboard dashboard_block bg_secondary p-32-24">

            <div class="settings-settings">
                <div class="membership_form_block">
                    <h3 class="membership_form_block_header" style="margin-top:0">Name Job</h3>
                    <div class="border_dashboard3 input_group">
                        <input class="input-transparent input_group_control" placeholder="What ate your offering?">
                    </div>
                </div>
                <div class="membership_form_block">
                    <h3 class="membership_form_block_header">Amount</h3>
                    <div class="border_dashboard3 input_group">
                        <span class="input_grop_text">$</span>
                        <span class="input_group_separator">|</span>
                        <input readonly class="input-transparent input_group_control" value="5">
                    </div>

                    <label class="checkbox_group">Enable pay what you want option
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>

                </div>

                <div class="membership_form_block">
                    <h3 class="membership_form_block_header">Description</h3>
                    <div class="border_dashboard3 input_group">
            <textarea style="height:30px" class="input-transparent input_group_control"
                      placeholder="Need the master for 60-minute group yoga session where we practice Vinyasa."></textarea>
                    </div>
                </div>

                <div class="membership_form_block">
                    <h3 class="membership_form_block_header">Featured image (optional)</h3>
                    <p class="s-18">We recommend an image should be square, at least 1080x1080px, and JPG, PNG or GIF format.</p>
                    <div class="extra_dropdown">
            <span class="extra_dropdow_text"><img class="_icon-big"
                                                  src="{{ asset('img/svg/icons/' . $theme . '/file_upload.svg') }}" alt="icon upload file">Upload</span>
                    </div>
                </div>

                <div class="membership_form_block">
                    <h3 class="membership_form_block_header">Location of the creator</h3>
                    <div class="border_dashboard3 input_group">
                        <input class="input-transparent input_group_control" placeholder="USA, New York">
                    </div>
                </div>
                <div class="membership_form_block">
                    <h3 class="membership_form_block_header">Active hrs</h3>
                    <div class="border_dashboard3 input_group">
                        <input class="input-transparent input_group_control" placeholder="40 hrs weekly">
                    </div>
                </div>

                <div class="membership_form_block">
                    <h3 class="membership_form_block_header">Number of ordered services</h3>
                    <div class="border_dashboard3 input_group">
                        <input class="input-transparent input_group_control" placeholder="5">
                    </div>
                </div>

                <div class="flex flex-between">
                    <p class="s-20-s">Cover credit card fee</p>
                    <span class="switcher switcher_color2">
            <input type="checkbox" id="card_fee" /><label for="card_fee">Toggle</label>
          </span>
                </div>

                <p class="s-18">If turned off, your fans will incur the credit card fee associated with their payment.</p>
                <hr>
                <div class="flex flex-between">
                    <p class="s-20-s">Mark as NSFW (mandatory for 18+ content)</p>
                    <span class="switcher switcher_color2">
            <input type="checkbox" id="nsfw" /><label for="nsfw">Toggle</label>
          </span>
                </div>

                <p class="s-18">Indicate that your page is not suitable for children. Regardless, pornography is not allowed
                    on the
                    platform.</p>
                <hr>
                <div>
                    <label class="s-20-s" for="">My page link</label>
                    <div class="border_dashboard3 input_group ">
                        <input class="input_group_control input-transparent" value="bymeacoffe/websitedev4">
                        <span class="input_grop_text button button_2 button-br_sm">Add</span>
                    </div>
                </div>
                <hr>
                <button class="button button_1 w_full flex flex-center main_color_important">Add job</button>
            </div>
        </div>
    </div>
</main>
<script src="{{ asset('js/date-picker.js') }}"></script>
@include('brand.components.footer')
@endsection
