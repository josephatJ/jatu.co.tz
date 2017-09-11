<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>MENYU</h3>
        <ul class="nav side-menu">
            <li><a href="<?php echo base_url().'index.php/profile/index/'.$member_info[0]->id."/".$user_type; ?>"><i class="fa fa-home"></i> Nyumbani</a></li>
            <li><a><i class="fa fa-user"></i> Kuhusu mimi <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="<?php echo base_url().'index.php/network/index/'.$member_info[0]->id.'/'.$user_type; ?>">Mtandao</a></li>
                    <li><a href="<?php echo base_url().'index.php/gains/index/'.$member_info[0]->id.'/'.$user_type;; ?>">Mapato</a></li>
                    <li><a href="<?php echo base_url().'index.php/buys/index/'.$member_info[0]->id.'/'.$user_type;; ?>">Manunuzi</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-shopping-cart"></i>Dukani <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="<?php echo base_url().'index.php/goods/index'; ?>">Bidhaa</a></li>
                    <li><a href="<?php echo base_url().'index.php/buying/index'; ?>">Nunua Bidhaa</a></li>
                    <li><a href="<?php echo base_url().'index.php/orders/index'; ?>">Oda zako</a></li>
                    <li><a href="<?php echo base_url().'index.php/report/index'; ?>">Ripoti(Manunuuzi)</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-sitemap"></i> Ndugu <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="<?php echo base_url().'index.php/relative/index'; ?>">Weka ndugu</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-user-plus"></i> Fomu ya Uwanachama <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="<?php echo base_url().'index.php/relative/index'; ?>">Jaza Fomu</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-users"></i>Wanachama <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                        <li><a href="<?php echo base_url().'index.php/goods/index'; ?>">Ongeza Wanachama wapya</a></li>
                        <li><a href="<?php echo base_url().'index.php/buying/index'; ?>">Wanachama kutoka kwa wakala</a></li>
                        <li><a href="<?php echo base_url().'index.php/orders/index'; ?>"></a>Wanachama wote</li>
                </ul>
            </li>
            <li><a><i class="fa fa-user"></i>Wakala/Msambazaji <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                        <li><a href="<?php echo base_url().'index.php/goods/index'; ?>">Mawakala</a></li>
                        <li><a href="<?php echo base_url().'index.php/buying/index'; ?>">Wasambazaji</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-money"></i>Akaunti (Fedha) <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                        <li><a href="<?php echo base_url().'index.php/goods/index'; ?>">Malipo</a></li>
                        <li><a href="<?php echo base_url().'index.php/buying/index'; ?>">Weka malipo</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>