{{--@extends('dashboard.app')--}}
{{--@section('content')--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js"></script>--}}
{{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css" type="text/css" />--}}
{{--<link rel="stylesheet" href="../../../freelance/resources/css/dropzone.css" type="text/css" />--}}
<main class="dashboard_main">
{{--    @include('dashboard.components.columns.left_column')--}}
    <div class="content">
        <form class="extra_form_block content-col2 gap-32">
            <div class="br-10 border_dashboard3  extra_form content-col2-main p-32-24 bg_secondary">
                <div class="membership_form_block">
                    <h3 class="membership_form_block_header" style="margin-top:0">Name</h3>
                    <div class="border_dashboard3  input_group">
                        <input class="input-transparent input_group_control" placeholder="Youtube channel membership">
                    </div>
                </div>
                <div class="membership_form_block">
                    <h3 class="membership_form_block_header">Price</h3>
                    <div class="border_dashboard3  input_group">
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
                    <h3 class="membership_form_block_header">Featured image (optional)</h3>
                    <p class="s-18">We recommend an image should be square, at least 1080x1080px, and JPG, PNG or GIF format.</p>
                    <div class="extra_dropdown">
            <span class="extra_dropdow_text"><img class="_icon-big"
                                                  src="../../img/svg/icons/<?= $theme ?>/file_upload.svg">Upload</span>
                    </div>
                </div>
                <div class="membership_form_block">
                    <h3 class="membership_form_block_header">Description</h3>
                    <div class="border_dashboard3  input_group">
            <textarea style="height:100px" class="input-transparent input_group_control"
                      placeholder="Hop on a Zoom call with me where I’ll spend an hour with you to help you achieve your content creation goals. I’ll also show you the tools I use, and how I grow my audience."></textarea>
                    </div>
                </div>
                <div class="membership_form_block">
                    <h3 class="membership_form_block_header">Success page</h3>
                    <div class="flex extra_success_page" style="gap:24px">
                        <label class="radio_group">
                            Confirmation page
                            <input type="radio" name="confirmation">
                            <span class="checkmark"></span>
                        </label>
                        <label class="radio_group">
                            Redirect to a URL after purchase
                            <input checked type="radio" name="confirmation">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
                <div class="membership_form_block">
                    <div class="border_dashboard3  input_group">
                        <input class="input-transparent input_group_control" placeholder="http://instagramalex178918">
                    </div>
                </div>
                <div class="membership_form_block">
                    <h3 class="membership_form_block_header">Advance settigns</h3>
                    <div class="flex flex-between">
                        <p class="s-20-s">Ask a question (optional)</p>
                        <span class="switcher switcher_color2">
              <input type="checkbox" id="Advance1" /><label for="Advance1">Toggle</label>
            </span>
                    </div>
                    <div class="border_dashboard3  input_group">
                        <input class="input-transparent input_group_control" placeholder="What is your Telegram username?">
                    </div>
                    <div class="flex flex-between">
                        <p class="s-20-s">Limit slots (optional)</p>
                        <span class="switcher switcher_color2">
              <input type="checkbox" id="Advance2" /><label for="Advance2">Toggle</label>
            </span>
                    </div>
                    <div class="border_dashboard3  input_group">
                        <input class="input-transparent input_group_control" placeholder="100">
                    </div>
                    <div class="flex flex-between">
                        <p class="s-20-s">Display ratings on page</p>
                        <span class="switcher switcher_color2">
              <input type="checkbox" id="Advance3" /><label for="Advance3">Toggle</label>
            </span>
                    </div>
                    <div class="flex flex-between">
                        <p class="s-20-s">Display sales count</p>
                        <span class="switcher switcher_color2">
              <input type="checkbox" id="Advance4" /><label for="Advance4">Toggle</label>
            </span>
                    </div>
                    <div class="flex flex-between">
                        <p class="s-20-s">Allow buyer to choose a quantity</p>
                        <span class="switcher switcher_color2">
              <input type="checkbox" id="Advance5" /><label for="Advance5">Toggle</label>
            </span>
                    </div>
                </div>
                <div class="membership_form_block">
                    <button class="w_full button button_1 button-br_sm flex flex-center main_color_important">Create</button>
                </div>
            </div>
            <div class="border_dashboard3  extra_form_submit content-col2-aside-lg br-10 bg_secondary">
                <h4 class="s-20 medium">Prefiew Extra</h4>
                <img class="mt-20" src="../../img/png/extra_preview.png" alt="">
                <p class="s-20-s mt-20">Youtube channel membership</p>
                <div class="mt-20 flex flex-between">
                    <p class="s-25 semibold">$20</p>
                    <button class="button button_1 main_color_important">Join</button>
                </div>
            </div>
        </form>
    </div>
{{--    <script>--}}
{{--        Dropzone.autoDiscover = false;--}}
{{--        const myDropzone = new Dropzone('#dropzone-container', {--}}
{{--            url: '#',--}}
{{--            addRemoveLinks: true,--}}
{{--            autoProcessQueue: false,--}}
{{--        });--}}

{{--    </script>--}}
</main>
{{--@endsection--}}
