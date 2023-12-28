@extends('dashboard.app')
@section('content')
    <main class="dashboard_main">
        @include('dashboard.components.columns.left_column')
        <div class="content">
            <div class="dashboard_extra_block border_dashboard dashboard_block p-32-24 bg_secondary">
                <div class="extra_header">
                    <h2 class="h2">Add a new Extra</h2>
                    <h3 class="h3 mt-24">Pick a template or start from scratch</h3>
                </div>
                <style>
                    /*.modal-extra {*/
                    /*    display: none;*/

                    /*    position: absolute;*/
                    /*    width: 100%;*/

                    /*    !*margin: auto auto;*!*/
                    /*    !*height: 100%;*!*/

                    /*    margin-top: 270px;*/

                    /*    background-color: grey;*/

                    /*    top: 50%;*/
                    /*    left: 50%;*/
                    /*    transform: translate(-50%, -50%);*/
                    /*}*/
                    /*.modal-extra .content{*/
                    /*    margin-top: 20px;*/
                    /*}*/
                    .close-modal{
                        float: right;
                        padding: 20px;
                    }

                    .modal-extra{
                        display: none;
                        position: absolute;
                        width: 100%;
                        top: 0; left: 0;
                        background-color: grey;
                    }
                    .close-modal svg{
                        cursor: pointer;
                    }
                </style>
                <div class="extra_list">
                    <a data-target="scratch" href='' class="extra extra_new">
                        Start from scracth
                    </a>
                    <div class="scratch modal-extra">
                        <div class="close-modal">
                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M14.5607 0.43934C13.9749 -0.146447 13.0251 -0.146447 12.4393 0.43934L7.5 5.37868L2.56066 0.43934L2.44674 0.33637C1.85758 -0.144158 0.988515 -0.109835 0.43934 0.43934C-0.146447 1.02513 -0.146447 1.97487 0.43934 2.56066L5.37868 7.5L0.43934 12.4393L0.33637 12.5533C-0.144158 13.1424 -0.109835 14.0115 0.43934 14.5607C1.02513 15.1464 1.97487 15.1464 2.56066 14.5607L7.5 9.62132L12.4393 14.5607L12.5533 14.6636C13.1424 15.1442 14.0115 15.1098 14.5607 14.5607C15.1464 13.9749 15.1464 13.0251 14.5607 12.4393L9.62132 7.5L14.5607 2.56066L14.6636 2.44674C15.1442 1.85758 15.1098 0.988515 14.5607 0.43934Z" fill="white"></path><mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="15" height="15"><path fill-rule="evenodd" clip-rule="evenodd" d="M14.5607 0.43934C13.9749 -0.146447 13.0251 -0.146447 12.4393 0.43934L7.5 5.37868L2.56066 0.43934L2.44674 0.33637C1.85758 -0.144158 0.988515 -0.109835 0.43934 0.43934C-0.146447 1.02513 -0.146447 1.97487 0.43934 2.56066L5.37868 7.5L0.43934 12.4393L0.33637 12.5533C-0.144158 13.1424 -0.109835 14.0115 0.43934 14.5607C1.02513 15.1464 1.97487 15.1464 2.56066 14.5607L7.5 9.62132L12.4393 14.5607L12.5533 14.6636C13.1424 15.1442 14.0115 15.1098 14.5607 14.5607C15.1464 13.9749 15.1464 13.0251 14.5607 12.4393L9.62132 7.5L14.5607 2.56066L14.6636 2.44674C15.1442 1.85758 15.1098 0.988515 14.5607 0.43934Z" fill="white"></path></mask><g mask="url(#mask0)"></g></svg>
                        </div>
                        @include('dashboard.pages.extras.scratch')
                    </div>
                    <a data-target="tour" href='' class="extra">
                        <img class="_icon-big" src="{{ asset('img/svg/icons/light/ic_palette_48px.svg') }}" alt="icon">
                        Virtual Tour
                    </a>
                    <div class="tour modal-extra">
                        <div class="close-modal">
                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M14.5607 0.43934C13.9749 -0.146447 13.0251 -0.146447 12.4393 0.43934L7.5 5.37868L2.56066 0.43934L2.44674 0.33637C1.85758 -0.144158 0.988515 -0.109835 0.43934 0.43934C-0.146447 1.02513 -0.146447 1.97487 0.43934 2.56066L5.37868 7.5L0.43934 12.4393L0.33637 12.5533C-0.144158 13.1424 -0.109835 14.0115 0.43934 14.5607C1.02513 15.1464 1.97487 15.1464 2.56066 14.5607L7.5 9.62132L12.4393 14.5607L12.5533 14.6636C13.1424 15.1442 14.0115 15.1098 14.5607 14.5607C15.1464 13.9749 15.1464 13.0251 14.5607 12.4393L9.62132 7.5L14.5607 2.56066L14.6636 2.44674C15.1442 1.85758 15.1098 0.988515 14.5607 0.43934Z" fill="white"></path><mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="15" height="15"><path fill-rule="evenodd" clip-rule="evenodd" d="M14.5607 0.43934C13.9749 -0.146447 13.0251 -0.146447 12.4393 0.43934L7.5 5.37868L2.56066 0.43934L2.44674 0.33637C1.85758 -0.144158 0.988515 -0.109835 0.43934 0.43934C-0.146447 1.02513 -0.146447 1.97487 0.43934 2.56066L5.37868 7.5L0.43934 12.4393L0.33637 12.5533C-0.144158 13.1424 -0.109835 14.0115 0.43934 14.5607C1.02513 15.1464 1.97487 15.1464 2.56066 14.5607L7.5 9.62132L12.4393 14.5607L12.5533 14.6636C13.1424 15.1442 14.0115 15.1098 14.5607 14.5607C15.1464 13.9749 15.1464 13.0251 14.5607 12.4393L9.62132 7.5L14.5607 2.56066L14.6636 2.44674C15.1442 1.85758 15.1098 0.988515 14.5607 0.43934Z" fill="white"></path></mask><g mask="url(#mask0)"></g></svg>
                        </div>
                        @include('dashboard.pages.extras.tour')
                    </div>
                    <a data-target="youtube" href='' class="extra">
                        <img class="_icon-big" src="{{ asset('img/svg/icons/light/ic_camera_enhance_24px.svg') }}" alt="icon">
                        Youtube channel memberships
                    </a>
                    <div class="youtube modal-extra">
                        <div class="close-modal">
                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M14.5607 0.43934C13.9749 -0.146447 13.0251 -0.146447 12.4393 0.43934L7.5 5.37868L2.56066 0.43934L2.44674 0.33637C1.85758 -0.144158 0.988515 -0.109835 0.43934 0.43934C-0.146447 1.02513 -0.146447 1.97487 0.43934 2.56066L5.37868 7.5L0.43934 12.4393L0.33637 12.5533C-0.144158 13.1424 -0.109835 14.0115 0.43934 14.5607C1.02513 15.1464 1.97487 15.1464 2.56066 14.5607L7.5 9.62132L12.4393 14.5607L12.5533 14.6636C13.1424 15.1442 14.0115 15.1098 14.5607 14.5607C15.1464 13.9749 15.1464 13.0251 14.5607 12.4393L9.62132 7.5L14.5607 2.56066L14.6636 2.44674C15.1442 1.85758 15.1098 0.988515 14.5607 0.43934Z" fill="white"></path><mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="15" height="15"><path fill-rule="evenodd" clip-rule="evenodd" d="M14.5607 0.43934C13.9749 -0.146447 13.0251 -0.146447 12.4393 0.43934L7.5 5.37868L2.56066 0.43934L2.44674 0.33637C1.85758 -0.144158 0.988515 -0.109835 0.43934 0.43934C-0.146447 1.02513 -0.146447 1.97487 0.43934 2.56066L5.37868 7.5L0.43934 12.4393L0.33637 12.5533C-0.144158 13.1424 -0.109835 14.0115 0.43934 14.5607C1.02513 15.1464 1.97487 15.1464 2.56066 14.5607L7.5 9.62132L12.4393 14.5607L12.5533 14.6636C13.1424 15.1442 14.0115 15.1098 14.5607 14.5607C15.1464 13.9749 15.1464 13.0251 14.5607 12.4393L9.62132 7.5L14.5607 2.56066L14.6636 2.44674C15.1442 1.85758 15.1098 0.988515 14.5607 0.43934Z" fill="white"></path></mask><g mask="url(#mask0)"></g></svg>
                        </div>
                        @include('dashboard.pages.extras.youtube')
                    </div>
                    <a data-target="live" href='' class="extra">
                        <img class="_icon-big" src="{{ asset('img/svg/icons/light/ic_videocam_48px.svg') }}" alt="icon">
                        Live Event Ticket
                    </a>
                    <div class="live modal-extra">
                        <div class="close-modal">
                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M14.5607 0.43934C13.9749 -0.146447 13.0251 -0.146447 12.4393 0.43934L7.5 5.37868L2.56066 0.43934L2.44674 0.33637C1.85758 -0.144158 0.988515 -0.109835 0.43934 0.43934C-0.146447 1.02513 -0.146447 1.97487 0.43934 2.56066L5.37868 7.5L0.43934 12.4393L0.33637 12.5533C-0.144158 13.1424 -0.109835 14.0115 0.43934 14.5607C1.02513 15.1464 1.97487 15.1464 2.56066 14.5607L7.5 9.62132L12.4393 14.5607L12.5533 14.6636C13.1424 15.1442 14.0115 15.1098 14.5607 14.5607C15.1464 13.9749 15.1464 13.0251 14.5607 12.4393L9.62132 7.5L14.5607 2.56066L14.6636 2.44674C15.1442 1.85758 15.1098 0.988515 14.5607 0.43934Z" fill="white"></path><mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="15" height="15"><path fill-rule="evenodd" clip-rule="evenodd" d="M14.5607 0.43934C13.9749 -0.146447 13.0251 -0.146447 12.4393 0.43934L7.5 5.37868L2.56066 0.43934L2.44674 0.33637C1.85758 -0.144158 0.988515 -0.109835 0.43934 0.43934C-0.146447 1.02513 -0.146447 1.97487 0.43934 2.56066L5.37868 7.5L0.43934 12.4393L0.33637 12.5533C-0.144158 13.1424 -0.109835 14.0115 0.43934 14.5607C1.02513 15.1464 1.97487 15.1464 2.56066 14.5607L7.5 9.62132L12.4393 14.5607L12.5533 14.6636C13.1424 15.1442 14.0115 15.1098 14.5607 14.5607C15.1464 13.9749 15.1464 13.0251 14.5607 12.4393L9.62132 7.5L14.5607 2.56066L14.6636 2.44674C15.1442 1.85758 15.1098 0.988515 14.5607 0.43934Z" fill="white"></path></mask><g mask="url(#mask0)"></g></svg>
                        </div>
                        @include('dashboard.pages.extras.live')
                    </div>
                    <a data-target="digital" href='' class="extra">
                        <img class="_icon-big" src="{{ asset('img/svg/icons/light/ic_import_contacts_48px.svg') }}" alt="icon">
                        Digital Download
                    </a>
                    <div class="digital modal-extra">
                        <div class="close-modal">
                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M14.5607 0.43934C13.9749 -0.146447 13.0251 -0.146447 12.4393 0.43934L7.5 5.37868L2.56066 0.43934L2.44674 0.33637C1.85758 -0.144158 0.988515 -0.109835 0.43934 0.43934C-0.146447 1.02513 -0.146447 1.97487 0.43934 2.56066L5.37868 7.5L0.43934 12.4393L0.33637 12.5533C-0.144158 13.1424 -0.109835 14.0115 0.43934 14.5607C1.02513 15.1464 1.97487 15.1464 2.56066 14.5607L7.5 9.62132L12.4393 14.5607L12.5533 14.6636C13.1424 15.1442 14.0115 15.1098 14.5607 14.5607C15.1464 13.9749 15.1464 13.0251 14.5607 12.4393L9.62132 7.5L14.5607 2.56066L14.6636 2.44674C15.1442 1.85758 15.1098 0.988515 14.5607 0.43934Z" fill="white"></path><mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="15" height="15"><path fill-rule="evenodd" clip-rule="evenodd" d="M14.5607 0.43934C13.9749 -0.146447 13.0251 -0.146447 12.4393 0.43934L7.5 5.37868L2.56066 0.43934L2.44674 0.33637C1.85758 -0.144158 0.988515 -0.109835 0.43934 0.43934C-0.146447 1.02513 -0.146447 1.97487 0.43934 2.56066L5.37868 7.5L0.43934 12.4393L0.33637 12.5533C-0.144158 13.1424 -0.109835 14.0115 0.43934 14.5607C1.02513 15.1464 1.97487 15.1464 2.56066 14.5607L7.5 9.62132L12.4393 14.5607L12.5533 14.6636C13.1424 15.1442 14.0115 15.1098 14.5607 14.5607C15.1464 13.9749 15.1464 13.0251 14.5607 12.4393L9.62132 7.5L14.5607 2.56066L14.6636 2.44674C15.1442 1.85758 15.1098 0.988515 14.5607 0.43934Z" fill="white"></path></mask><g mask="url(#mask0)"></g></svg>
                        </div>
                        @include('dashboard.pages.extras.digital')
                    </div>
                    <a data-target="instagram" href='' class="extra">
                        <img class="_icon-big" src="{{ asset('img/svg/icons/light/ic_vpn_key_48px.svg') }}" alt="icon">
                        Join Instagram Close Friends
                    </a>
                    <div class="instagram modal-extra">
                        <div class="close-modal">
                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M14.5607 0.43934C13.9749 -0.146447 13.0251 -0.146447 12.4393 0.43934L7.5 5.37868L2.56066 0.43934L2.44674 0.33637C1.85758 -0.144158 0.988515 -0.109835 0.43934 0.43934C-0.146447 1.02513 -0.146447 1.97487 0.43934 2.56066L5.37868 7.5L0.43934 12.4393L0.33637 12.5533C-0.144158 13.1424 -0.109835 14.0115 0.43934 14.5607C1.02513 15.1464 1.97487 15.1464 2.56066 14.5607L7.5 9.62132L12.4393 14.5607L12.5533 14.6636C13.1424 15.1442 14.0115 15.1098 14.5607 14.5607C15.1464 13.9749 15.1464 13.0251 14.5607 12.4393L9.62132 7.5L14.5607 2.56066L14.6636 2.44674C15.1442 1.85758 15.1098 0.988515 14.5607 0.43934Z" fill="white"></path><mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="15" height="15"><path fill-rule="evenodd" clip-rule="evenodd" d="M14.5607 0.43934C13.9749 -0.146447 13.0251 -0.146447 12.4393 0.43934L7.5 5.37868L2.56066 0.43934L2.44674 0.33637C1.85758 -0.144158 0.988515 -0.109835 0.43934 0.43934C-0.146447 1.02513 -0.146447 1.97487 0.43934 2.56066L5.37868 7.5L0.43934 12.4393L0.33637 12.5533C-0.144158 13.1424 -0.109835 14.0115 0.43934 14.5607C1.02513 15.1464 1.97487 15.1464 2.56066 14.5607L7.5 9.62132L12.4393 14.5607L12.5533 14.6636C13.1424 15.1442 14.0115 15.1098 14.5607 14.5607C15.1464 13.9749 15.1464 13.0251 14.5607 12.4393L9.62132 7.5L14.5607 2.56066L14.6636 2.44674C15.1442 1.85758 15.1098 0.988515 14.5607 0.43934Z" fill="white"></path></mask><g mask="url(#mask0)"></g></svg>
                        </div>
                        @include('dashboard.pages.extras.instagram')
                    </div>
                    <script>
                        document.addEventListener('DOMContentLoaded', function(){
                            const links = document.querySelectorAll('.extra');
                            const modals = document.querySelectorAll('.modal-extra');

                            const btns = document.querySelectorAll('.close-modal')
                            btns.forEach(el => {
                                el.addEventListener('click', function(){
                                    modals.forEach(modal => {
                                        modal.style.display = 'none'
                                    })
                                })
                            })

                            links.forEach(el => {
                                el.addEventListener('click', function(e){
                                    e.preventDefault();
                                    let targetClassName = this.getAttribute('data-target');
                                    let target = document.querySelector(`.${targetClassName}`);

                                    if (target) {
                                        modals.forEach(modal => {
                                            if (modal !== target) {
                                                // modal.style.display = 'none';
                                            }
                                        });

                                        target.style.display = 'block';
                                    }
                                });
                            });
                        });
                    </script>
                    <div class="dashboard_block dashboard_info_block">
                        <img class="_icon-big" src="../img/svg/icons/light/icon _favorite_2.svg">
                        <h2 class="h2">You haven't added anything yet.</h2>
                        <p>Extras is a simple and effective way to offer something to your audience. It could be anything. See some
                            examples <a class="link_underline" href="#">here</a>, <a class="link_underline" href="#">here</a>, and <a class="link_underline" href="#">here</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
