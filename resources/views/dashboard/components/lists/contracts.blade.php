<div class="contracts">
    @foreach($activeContracts as $item)
        <div class="contract border_dashboard br-10 mt-24 border_dashboard3">
            <div class="contract_desc">
                <div>
                    <img src="../../img/png/contract.png">
                </div>
                <div>
                    <h3 class="s-20 semibold">{{$item->user->name}}
                    </h3>

                    <p class="s-14 mt-8">You earned {{$item->amount}} dollars</p>
                </div>
            </div>
            <div class="s-20-s">{{$item->description}}</div>
            <div class="contract_actions">
                <div><a href="#" class="main_color_important button button_1 button-br_sm">View contract</a></div>
                <div>
                    <div class="dropdown">
                        <div class="dropbtn dropbtn-image transparent more">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="dropdown-content-block dropdown-left">
                            <div class="dropdown-content sharepage_dropdown ">
                                <ul class="dropdown-list">
                                    <li>
                                        <a href="#">Send message</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
