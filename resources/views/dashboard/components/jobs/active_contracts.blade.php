<div class="contracts_block mt-24">
    <div class="contracts_header">
        <h3 class="s-20 semibold">Active Contracts</h3>
        <div class="flex gap-8 align-center">
            <div class="s-20 medium">Earnings available now: <span class="s-20 medium">$400</span></div>
            <div class="dropdown">
                <div class="dropbtn dropbtn-image transparent more more_circle more_color2">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="dropdown-content-block dropdown-right md-dropdown-left">
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

        <div class="border_dashboard3 input_group">
      <span class="input_grop_text"><img class="_icon"
                                         src="../img/svg/icons/<?= $theme ?>/ic_search_48px3.svg"></span>
            <input class="input-transparent input_group_control" placeholder="Search contracts">
        </div>
    </div>
    @include('dashboard.components.lists.contracts')
    <div class="contracts_block_actions mt-24">
        <a href="#" class="button button_2 button-br_sm">Add service</a>
        <a href="#" class="main_color_important button button_1 button-br_sm">View all contracts</a>
    </div>
</div>
