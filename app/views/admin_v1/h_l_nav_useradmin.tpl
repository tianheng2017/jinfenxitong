
<style>
    body{    font-family: Microsoft YaHei !important;}

    .pagecontenttitle .collection-item{
        background: #607D8B;
        border-bottom: 3px solid #7c97a4;
        color: #fff;
    }


    td, th {
        padding: 6px 2px;
        font-size:12px;
    }
    td .btn, th .btn {
        height: 26px;
        line-height: 26px;
        padding: 0 0.5em;

    }
    td, th {
        border: 1px solid rgba(167, 167, 167, 0.19);
    }
    th {
        text-align: center;
    }
    .tdtcenter{
        text-align: center;
    }
    .pagination li ,.pagination li i {
        font-size: 13px;
        font-size: 1rem;
    }
    .datanonetxt{
        border: 1px solid rgba(255, 98, 177, 0.19);
        text-align:center;
        padding: 6px 2px;
        font-size:13px;
    }
    .pagination{
        display: inline-block;
    }
    .paginationdiv{
        text-align: center;
    }
    .fontcolorb6b6b6{
        color: #b6b6b6;
    }
    .fontcolor919191{
        color: #919191;
    }
    .fontweight100{
        font-weight: 100;
    }



    .xuanzhuns1{
        -webkit-transition-property: -webkit-transform;
        -webkit-transition-duration: 1s;
        -moz-transition-property: -moz-transform;
        -moz-transition-duration: 1s;
        -webkit-animation: rotate 3s linear infinite;
        -moz-animation: rotate 3s linear infinite;
        -o-animation: rotate 3s linear infinite;
        animation: rotate 3s linear infinite;
    }}
    @-webkit-keyframes rotate{from{-webkit-transform: rotate(0deg)}
		to{-webkit-transform: rotate(360deg)}
	}
    @-moz-keyframes rotate{from{-moz-transform: rotate(0deg)}
		to{-moz-transform: rotate(359deg)}
	}
    @-o-keyframes rotate{from{-o-transform: rotate(0deg)}
		to{-o-transform: rotate(359deg)}
	}
    @keyframes rotate{from{transform: rotate(0deg)}
		to{transform: rotate(359deg)}
	}
</style>
<style>
    .cyan {
        border-bottom: 1px solid #404553;
    }
    .side-nav li{
        background: #2c2c2e;
    }
    .cyan.darken-2{
        background-color: #2c2c2e!important;
    }
    ul.side-nav.fixed{
        background: #2c2c2e;
    }
    ul.side-nav.fixed li:hover, ul.side-nav.fixed li.active{
        background-color: #454850;
    }
    header .brand-logo{
        margin:unset;
        line-height: 60px;
    }
</style>
<script type="text/javascript">
    function esclogin(){
        $.post("<{WSURLSHOW('admin','esclogin')}>",{ },function(data){
            if(data=='true'){
                location.reload();
            }
        });
    }
</script>

<!-- START HEADER -->
<header id="header" class="page-topbar">
    <!-- start header nav-->
    <div class="navbar-fixed">
        <nav class="cyan">
            <div class="nav-wrapper">
                <h1 class="logo-wrapper">
                    <a href="<{WSURLSHOW('admin','login')}>" class="brand-logo darken-1">
                        <span style="font-size: 1.6rem;">U finance管理中心</span>
                    </a>
                    <span class="logo-text">Logo</span></h1>
                <ul class="right">

                    <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
                    </li>
                    <li><a  onclick="esclogin()" href="javascript:void(0);"><i class="mdi-hardware-keyboard-tab"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- end header nav-->
</header>
<!-- END HEADER -->

<!-- //////////////////////////////////////////////////////////////////////////// -->

<!-- START MAIN -->
<div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">

        <!-- START LEFT SIDEBAR NAV-->
        <aside id="left-sidebar-nav">
            <ul id="slide-out" class="side-nav fixed leftside-navigation">
                <li class="user-details cyan darken-2">
                    <div class="row">
                        <div class="col col s4 m4 l4">
                            <img src="<{VIEW_ROOTPATH}>/assets/exquisiteui/images/avatar.jpg" alt="" class="circle responsive-img valign profile-image">
                        </div>
                        <div class="col col s8 m8 l8">
                            <ul id="profile-dropdown" class="dropdown-content">
                                <li><a href="javascript:void(0);"><i class="mdi-action-list"></i> 隐藏</a>
                                </li>

                                <li class="divider"></li>

                                <li><a  onclick="esclogin()" href="javascript:void(0);"><i class="mdi-hardware-keyboard-tab"></i> 退出</a>
                                </li>
                            </ul>
                            <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="javascript:void(0);" data-activates="profile-dropdown">管理员<i class="mdi-navigation-arrow-drop-down right"></i></a>
                            <p class="user-roal">
                                <{$smarty.session.admininfo.username}>
                            </p>
                        </div>
                    </div>
                </li>


                <li class="bold"><a href="<{WSURLSHOW('admin','home')}>" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i>系统配置</a></li>

                <!--li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li class="bold"><a class="collapsible-header  waves-effect waves-cyan active2 active"><i class="mdi-action-track-changes xuanzhuns1"></i> 幻灯片模块</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="<{WSURLSHOW('adminuser','slidelist')}>">幻灯片管理</a>
                                    </li>
                                    <li><a href="<{WSURLSHOW('adminuser','slideadd')}>">幻灯片添加</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li-->

                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li class="bold"><a class="collapsible-header  waves-effect waves-cyan active2 active"><i class="mdi-action-track-changes xuanzhuns1"></i> 项目模块</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="<{WSURLSHOW('adminuser','itemlist')}>">项目管理</a>
                                    </li>
                                    <li><a href="<{WSURLSHOW('adminuser','itemadd')}>">项目添加</a>
                                    </li>
                                    <li><a href="<{WSURLSHOW('adminuser','itemlog')}>">存单管理</a>
                                    </li>
                                    <li><a href="<{WSURLSHOW('adminuser','itemlogp')}>">返利明细</a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>

                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li class="bold"><a class="collapsible-header  waves-effect waves-cyan active2 active"><i class="mdi-social-group"></i> 用户模块</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="<{WSURLSHOW('adminuser','lists')}>">用户管理</a>
                                    </li>
                                    <li><a href="<{WSURLSHOW('adminuser','lists1')}>">一级用户管理</a>
                                    </li>
                                    <li><a href="<{WSURLSHOW('adminuser','topuseradd')}>">一级用户添加</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>


                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li class="bold"><a class="collapsible-header  waves-effect waves-cyan active2 active"><i class="mdi-action-assignment-ind"></i> 认证模块</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="<{WSURLSHOW('adminuser','authenticationing')}>">审核中</a>
                                    </li>
                                    <li><a href="<{WSURLSHOW('adminuser','authenticationed')}>">已处理</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>


                <!--li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li class="bold"><a class="collapsible-header  waves-effect waves-cyan active2 active"><i class="mdi-action-track-changes xuanzhuns1"></i> 接单模块</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="<{WSURLSHOW('adminorder','lists')}>">全部接单</a>
                                    </li>

                                    <li><a href="<{WSURLSHOW('adminorder','lists1')}>">接单中订单</a>
                                    </li>

                                    <li><a href="<{WSURLSHOW('adminorder','lists2')}>">已完成订单</a>
                                    </li>

                                    <li><a href="<{WSURLSHOW('adminuser','moneypath')}>">资金明细</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li-->

                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li class="bold"><a class="collapsible-header  waves-effect waves-cyan active2 active"><i class="mdi-action-input"></i> 充值模块</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="<{WSURLSHOW('adminuser','rechargeon')}>">审核中订单</a>
                                    </li>
                                    <li><a href="<{WSURLSHOW('adminuser','rechargeed')}>">已处理订单</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>

                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li class="bold"><a class="collapsible-header  waves-effect waves-cyan active2 active"><i class="mdi-action-open-in-browser"></i> 提现模块</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="<{WSURLSHOW('adminuser','withdrawalon')}>">审核中订单</a>
                                    </li>
                                    <li><a href="<{WSURLSHOW('adminuser','withdrawaled')}>">已处理订单</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="li-hover">
                    <br><br><br>
                </li>
            </ul>
            <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only darken-2"><i class="mdi-navigation-menu" ></i></a>
        </aside>
        <!-- END LEFT SIDEBAR NAV-->

        <!-- //////////////////////////////////////////////////////////////////////////// -->