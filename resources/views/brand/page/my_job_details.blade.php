@extends('brand.app')
@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css" type="text/css" />
<link rel="stylesheet" href="../../freelance/resources/css/dropzone.css" type="text/css" />
<main class="dashboard_main">
    @include('brand.components.columns.brands_left_column')
    <div class="content">
        <div class="dashboard_jobdetails_block border_dashboard dashboard_block p-32-24 bg_secondary">
            <div class="myjobdetails_header">
                <h2 class="h2">My jobs</h2>
                <div>
                    <div class="s-20 medium">Earnings available now: <span class="s-20 medium text-active">$400</span></div>
                    <div class="dropdown">
                        <div class="dropbtn dropbtn-image transparent more more_circle more_color2">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="dropdown-content-block dropdown-left">
                            <div class="dropdown-content sharepage_dropdown ">
                                <ul class="dropdown-list">
                                    <li>
                                        <a href="#">Get paid</a>
                                    </li>
                                    <li>
                                        <a href="#">View pending earnings</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="myjobdetails_subheader">
                <h3 class="s-20-s">Active contracts</h3>
                <div class="border_dashboard3 input_group">
          <span class="input_grop_text"><img class="_icon"
                                             src="../img/svg/icons/<?= $theme ?>/ic_search_48px.svg"></span>
                    <input class="input-transparent input_group_control" placeholder="Search contracts">
                </div>
            </div>

            <h3 class="s-20-s">Website design creation</h3>
            <p class="s-14 light_grey">Posted Oct 2 ,2023</p>
            </p>
            <p class="s-14">Please provide portfolio!</p>
            <p class="s-14">
                Im looking for a talented and creative Freelance Website Designer to collaborate on a project to create a
                cutting-edge website design for an AI rewriter website. You we closely work with me to bring my vision to life,
                using provided examples as inspiration. This project entails designing the main landing page as well as a few
                supporting pages.<br><br>
                Requirements: <br><br>
                1. Proven experience in web design with a strong portfolio showcasing previous work.<br><br>
                2. Proficiency in using design tools such as Adobe XD, Figma, or Sketch.<br>
                Solid understanding of UI/UX principles and best practices.<br><br>
                3. Creative thinking and the ability to translate concepts into visually appealing designs.<br><br>
                4. Strong attention to detail and a commitment to delivering high-quality work.

            </p>
            <p class="s-14 text-active underline">less</p>
            <h3 class="s-20-s">Terms</h3>
            <p class="s-14 semibold">How do you want to be paid?</p>
            <label class="radio_group">
                <div>
                    <p class="medium s-14">By milestone</p>
                    <p class="mt-16 s-14 light_grey">Divide the project into smaller segments, called milestones. You'll be paid
                        for
                        milestones as they are completed and approved.</p>
                </div>
                <input checked type="radio" name="terms">
                <span class="checkmark"></span>
            </label>
            <label class="radio_group">
                <div>
                    <p class="medium s-14">By project</p>
                    <p class="mt-16 s-14 light_grey">Get your entire payment at the end, when all work has been delivered.</p>
                </div>
                <input type="radio" name="terms">
                <span class="checkmark"></span>
            </label>
            <p class="s-14 semibold">How many milestones do you want to include?</p>
            <div class="milestones_list">
                <div class="milestone_header">
                    <span>Description</span>
                    <span>Amount</span>
                </div>
                <div class="milestone">

                    <Div>
                        <span>1</span>
                    </Div>
                    <Div>
                        <div class="border_dashboard3 input_group">
                            <input class="input-transparent" value="">
                        </div>
                    </Div>
                    <div>
                        <div class="border_dashboard3 input_group">
                            <input class="input-transparent text-right input-price" placeholder="$0.00">
                        </div>
                    </div>
                </div>
            </div>

            <div class="project_total s-14 semibold">
                <span>Total price og project</span>
                <span class="text-active">$0.00</span>
            </div>

            <p class="s-14 light_grey">
                Get your entire payment at the end, when all work has been delivered.
            </p>


            <hr>

            <div class="project_total s-14 semibold">
                <span>Freelancer Service Fee</span>
                <span class="text-active">$0.00</span>
            </div>

            <hr>

            <div class="project_total s-14 semibold">
                <span>You will receive</span>
                <span class="text-active">$0.00</span>
            </div>

            <hr>

            <h3 class="s-20-s">Addittional details</h3>

            <p class="medium s-18">Cover letter</p>

            <div class="border_dashboard3 input_group ">
                <textarea style="height:91px" class="input-transparent noresize"></textarea>
            </div>

            <p class="medium s-18">Attachments</p>

            <div style="height:151px;min-height:auto" id="dropzone-container"
                 class="dropzone dropzone_grey dropzone_sm br-10 mt-16">
                <div class="dz-default dz-message">

                    <h2 class="mt-16">Drap or <span>upload</span> project files</h2>
                </div>
            </div>
            <div id="file-list" class="file-list"></div>

            <p class="s-14">
                You may attach up to 10 files under the size of 25 MB each. Include work samples or other documents to support
                your application. Do not attach your resume — your Upwork profile is automatically forwarded to the client with
                your proposal.
            </p>
            <button style="margin-left:auto" class="button button_1 button-br_sm main_color_important">Send</button>
        </div>
    </div>
</main>
<script src="../js/inputs.js"></script>
<script>
    Dropzone.autoDiscover = false;

    const myDropzone = new Dropzone('#dropzone-container', {
        url: '#',
        addRemoveLinks: true,
        autoProcessQueue: false,
    });

</script>
@include('brand.components.footer')
@endsection
