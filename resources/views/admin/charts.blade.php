

@extends('master')
@section('content')
    <div class="page-container">
        <!-- BEGIN SIDEBAR -->
        <div class="page-sidebar-wrapper">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar navbar-collapse collapse">
                <ul class="page-sidebar-menu   " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                    <li class="nav-item start active open">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-home"></i>
                            <span class="title">Welcome Dashboard</span>
                            <span class="selected"></span>
                            <span class="arrow open"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="/index" class="nav-link ">
                                    <i class="icon-bar-chart"></i>
                                    <span class="title">Dashboard</span>
                                    <span class="selected"></span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item ">
                        <a href="/component" class="nav-link nav-toggle">
                            <i class="icon-puzzle"></i>
                            <span class="title">Components</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="/form" class="nav-link nav-toggle">
                            <i class="icon-settings"></i>
                            <span class="title">Form Stuff</span>
                            <span class="arrow"></span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="/element" class="nav-link nav-toggle">
                            <i class="icon-bulb"></i>
                            <span class="title">Elements</span>
                            <span class="arrow"></span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="/table" class="nav-link nav-toggle">
                            <i class="icon-briefcase"></i>
                            <span class="title">Tables</span>
                            <span class="arrow"></span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="/portlets" class="nav-link nav-toggle">
                            <i class="icon-wallet"></i>
                            <span class="title">Portlets</span>
                            <span class="arrow"></span>
                        </a>
                    </li>
                    <li class="nav-item start active open">
                        <a href="/charts" class="nav-link nav-toggle">
                            <i class="icon-bar-chart"></i>
                            <span class="title">Charts</span>
                            <span class="arrow"></span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="/map" class="nav-link nav-toggle">
                            <i class="icon-pointer"></i>
                            <span class="title">Maps</span>
                            <span class="arrow"></span>
                        </a>
                    </li>
                    <li class="heading">
                        <h3 class="uppercase">Pages</h3>
                    </li>
                    <li class="nav-item  ">
                        <a href="/ecommerce" class="nav-link nav-toggle">
                            <i class="icon-basket"></i>
                            <span class="title">eCommerce</span>
                            <span class="arrow"></span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="/user" class="nav-link nav-toggle">
                            <i class="icon-user"></i>
                            <span class="title">User</span>
                            <span class="arrow"></span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="/general" class="nav-link nav-toggle">
                            <i class="icon-social-dribbble"></i>
                            <span class="title">General</span>
                            <span class="arrow"></span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="/system" class="nav-link nav-toggle">
                            <i class="icon-settings"></i>
                            <span class="title">System</span>
                            <span class="arrow"></span>
                        </a>
                    </li>
                </ul>
                <!-- END SIDEBAR MENU -->
            </div>
            <!-- END SIDEBAR -->
        </div>
        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <!-- BEGIN CONTENT BODY -->
            <div class="page-content">
                <!-- BEGIN PAGE HEAD-->
                <div class="page-head">
                    <!-- BEGIN PAGE TITLE -->
                    <div class="page-title">
                        <h1>Admin Chart
                            <small>statistics, charts, recent events and reports</small>
                        </h1>
                    </div>
                    <!-- END PAGE TITLE -->
                    <!-- BEGIN PAGE TOOLBAR -->
                    <div class="page-toolbar">
                        <!-- BEGIN THEME PANEL -->
                        <div class="btn-group btn-theme-panel">
                            <a href="javascript:;" class="btn dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-settings"></i>
                            </a>
                            <div class="dropdown-menu theme-panel pull-right dropdown-custom hold-on-click">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <h3>HEADER</h3>
                                        <ul class="theme-colors">
                                            <li class="theme-color theme-color-default active" data-theme="default">
                                                <span class="theme-color-view"></span>
                                                <span class="theme-color-name">Dark Header</span>
                                            </li>
                                            <li class="theme-color theme-color-light " data-theme="light">
                                                <span class="theme-color-view"></span>
                                                <span class="theme-color-name">Light Header</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-12 seperator">
                                        <h3>LAYOUT</h3>
                                        <ul class="theme-settings">
                                            <li>
                                                Theme Style
                                                <select class="layout-style-option form-control input-small input-sm">
                                                    <option value="square">Square corners</option>
                                                    <option value="rounded" selected="selected">Rounded corners</option>
                                                </select>
                                            </li>
                                            <li>
                                                Layout
                                                <select class="layout-option form-control input-small input-sm">
                                                    <option value="fluid" selected="selected">Fluid</option>
                                                    <option value="boxed">Boxed</option>
                                                </select>
                                            </li>
                                            <li>
                                                Header
                                                <select class="page-header-option form-control input-small input-sm">
                                                    <option value="fixed" selected="selected">Fixed</option>
                                                    <option value="default">Default</option>
                                                </select>
                                            </li>
                                            <li>
                                                Top Dropdowns
                                                <select class="page-header-top-dropdown-style-option form-control input-small input-sm">
                                                    <option value="light">Light</option>
                                                    <option value="dark" selected="selected">Dark</option>
                                                </select>
                                            </li>
                                            <li>
                                                Sidebar Mode
                                                <select class="sidebar-option form-control input-small input-sm">
                                                    <option value="fixed">Fixed</option>
                                                    <option value="default" selected="selected">Default</option>
                                                </select>
                                            </li>
                                            <li>
                                                Sidebar Menu
                                                <select class="sidebar-menu-option form-control input-small input-sm">
                                                    <option value="accordion" selected="selected">Accordion</option>
                                                    <option value="hover">Hover</option>
                                                </select>
                                            </li>
                                            <li>
                                                Sidebar Position
                                                <select class="sidebar-pos-option form-control input-small input-sm">
                                                    <option value="left" selected="selected">Left</option>
                                                    <option value="right">Right</option>
                                                </select>
                                            </li>
                                            <li>
                                                Footer
                                                <select class="page-footer-option form-control input-small input-sm">
                                                    <option value="fixed">Fixed</option>
                                                    <option value="default" selected="selected">Default</option>
                                                </select>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END THEME PANEL -->
                    </div>
                    <!-- END PAGE TOOLBAR -->
                </div>
                <!-- END PAGE HEAD-->
                <!-- BEGIN PAGE BREADCRUMB -->
                <ul class="page-breadcrumb breadcrumb">
                    <li>
                        <a href="/index">Home</a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <span class="active">chart</span>
                    </li>
                </ul>
                <!-- END PAGE BREADCRUMB -->
                <!-- BEGIN PAGE BASE CONTENT -->
            {{--Jaa dorkar add kormu--}}
            <!-- BEGIN ROW -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- BEGIN CHART PORTLET-->
                        <div class="portlet light bordered">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-bar-chart font-green-haze"></i>
                                    <span class="caption-subject bold uppercase font-green-haze"> Bar Charts</span>
                                    <span class="caption-helper">column and line mix</span>
                                </div>
                                <div class="tools">
                                    <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                    <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title=""> </a>
                                    <a href="javascript:;" class="reload" data-original-title="" title=""> </a>
                                    <a href="javascript:;" class="fullscreen" data-original-title="" title=""> </a>
                                    <a href="javascript:;" class="remove" data-original-title="" title=""> </a>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div id="chart_1" class="chart" style="height: 500px; overflow: hidden; text-align: left;">
                                    <div style="position: relative;" class="amcharts-main-div">
                                        <div style="overflow: hidden; position: relative; text-align: left; width: 926px; height: 500px; padding: 0px;" class="amcharts-chart-div">
                                            <svg version="1.1" style="position: absolute; width: 926px; height: 500px; top: 0.366669px; left: 0px;">
                                                <desc>JavaScript chart by amCharts 3.17.1</desc>
                                                <g>
                                                    <path cs="100,100" d="M0.5,0.5 L925.5,0.5 L925.5,499.5 L0.5,499.5 Z" fill="#FFFFFF" stroke="#000000" fill-opacity="0" stroke-width="1" stroke-opacity="0"></path>
                                                    <path cs="100,100" d="M0.5,0.5 L887.5,0.5 L887.5,463.5 L0.5,463.5 L0.5,0.5 Z" fill="#FFFFFF" stroke="#000000" fill-opacity="0" stroke-width="1" stroke-opacity="0" transform="translate(30,10)"></path>
                                                </g>
                                                <g>
                                                    <g transform="translate(30,10)">
                                                        <g>
                                                            <path cs="100,100" d="M0.5,463.5 L0.5,463.5 L0.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path>
                                                        </g>
                                                        <g>
                                                            <path cs="100,100" d="M148.5,463.5 L148.5,463.5 L148.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path>
                                                        </g>
                                                        <g>
                                                            <path cs="100,100" d="M296.5,463.5 L296.5,463.5 L296.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path>
                                                        </g>
                                                        <g>
                                                            <path cs="100,100" d="M443.5,463.5 L443.5,463.5 L443.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path>
                                                        </g>
                                                        <g>
                                                            <path cs="100,100" d="M591.5,463.5 L591.5,463.5 L591.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path>
                                                        </g>
                                                        <g>
                                                            <path cs="100,100" d="M739.5,463.5 L739.5,463.5 L739.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path>
                                                        </g>
                                                        <g>
                                                            <path cs="100,100" d="M887.5,463.5 L887.5,463.5 L887.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path>
                                                        </g>
                                                    </g>
                                                    <g transform="translate(30,10)" visibility="visible">
                                                        <g>
                                                            <path cs="100,100" d="M0.5,463.5 L0.5,463.5 L887.5,463.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path>
                                                        </g>
                                                        <g>
                                                            <path cs="100,100" d="M0.5,417.5 L0.5,417.5 L887.5,417.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path>
                                                        </g>
                                                        <g>
                                                            <path cs="100,100" d="M0.5,370.5 L0.5,370.5 L887.5,370.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path>
                                                        </g>
                                                        <g>
                                                            <path cs="100,100" d="M0.5,324.5 L0.5,324.5 L887.5,324.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path>
                                                        </g>
                                                        <g>
                                                            <path cs="100,100" d="M0.5,278.5 L0.5,278.5 L887.5,278.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path>
                                                        </g>
                                                        <g>
                                                            <path cs="100,100" d="M0.5,232.5 L0.5,232.5 L887.5,232.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000">
                                                            </path>
                                                        </g>
                                                        <g>
                                                            <path cs="100,100" d="M0.5,185.5 L0.5,185.5 L887.5,185.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path>
                                                        </g>
                                                        <g>
                                                            <path cs="100,100" d="M0.5,139.5 L0.5,139.5 L887.5,139.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path>
                                                        </g>
                                                        <g>
                                                            <path cs="100,100" d="M0.5,93.5 L0.5,93.5 L887.5,93.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path>
                                                        </g>
                                                        <g>
                                                            <path cs="100,100" d="M0.5,46.5 L0.5,46.5 L887.5,46.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path>
                                                        </g>
                                                        <g>
                                                            <path cs="100,100" d="M0.5,0.5 L0.5,0.5 L887.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g>
                                                    <g transform="translate(30,10)">
                                                        <g transform="translate(15,463)" visibility="visible">
                                                            <path cs="100,100" d="M0.5,0.5 L0.5,-173.5 L118.5,-173.5 L118.5,0.5 L0.5,0.
                                             5 Z" fill="#67b7dc" stroke="#67b7dc" fill-opacity="1" stroke-width="1" stroke-opacity="0.9"></path>
                                                        </g>
                                                        <g transform="translate(163,463)" visibility="visible">
                                                            <path cs="100,100" d="M0.5,0.5 L0.5,-235.5 L118.5,-235.5 L118.5,0.5 L0.5,0.5 Z" fill="#67b7dc" stroke="#67b7dc" fill-opacity="1" stroke-width="1" stroke-opacity="0.9"></path>
                                                        </g>
                                                        <g transform="translate(311,463)" visibility="visible">
                                                            <path cs="100,100" d="M0.5,0.5 L0.5,-325.5 L118.5,-325.5 L118.5,0.5 L0.5,0.5 Z" fill="#67b7dc" stroke="#67b7dc" fill-opacity="1" stroke-width="1" stroke-opacity="0.9"></path>
                                                        </g>
                                                        <g transform="translate(458,463)" visibility="visible">
                                                            <path cs="100,100" d="M0.5,0.5 L0.5,-312.5 L118.5,-312.5 L118.5,0.5 L0.5,0.5 Z" fill="#67b7dc" stroke="#67b7dc" fill-opacity="1" stroke-width="1" stroke-opacity="0.9"></path>
                                                        </g>
                                                        <g transform="translate(606,463)" visibility="visible">
                                                            <path cs="100,100" d="M0.5,0.5 L0.5,-337.5 L118.5,-337.5 L118.5,0.5 L0.5,0.5 Z" fill="#67b7dc" stroke="#67b7dc" fill-opacity="1" stroke-width="1" stroke-opacity="0.9"></path>
                                                        </g>
                                                        <g transform="translate(754,463)" visibility="visible">
                                                            <path cs="100,100" d="M0.5,0.5 L0.5,-418.5 L118.5,-418.5 L118.5,0.5 L0.5,0.5 Z" fill="#67b7dc" stroke="#67b7dc" fill-opacity="0.2" stroke-width="1" stroke-opacity="0.9" stroke-dasharray="5"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g transform="translate(30,10)">
                                                        <g></g>
                                                    </g>
                                                    <g transform="translate(30,10)" opacity="1" visibility="visible">
                                                        <g></g>
                                                        <g></g>
                                                        <g clip-path="url(#AmChartsEl-20)">
                                                            <path cs="100,100" d="M74.5,414.5 L222.5,306.5 L370.5,280.5 L517.5,252.5 L665.5,204.5 M0,0 L0,0" fill="none" stroke-width="3" stroke-opacity="1" stroke="#fdd400"></path>
                                                        </g>
                                                        <clipPath id="AmChartsEl-20">
                                                            <rect x="0" y="0" width="889" height="465" rx="0" ry="0" stroke-width="0"></rect>
                                                        </clipPath>
                                                        <g></g>
                                                        <g clip-path="url(#AmChartsEl-21)">
                                                            <path cs="100,100" d="M665.5,204.5 L813.5,141.5 M0,0 L0,0" fill="none" stroke-width="3" stroke-dasharray="5" stroke-opacity="1" stroke="#fdd400"></path>
                                                        </g>
                                                        <clipPath id="AmChartsEl-21">
                                                            <rect x="0" y="0" width="889" height="465" rx="0" ry="0" stroke-width="0"></rect>
                                                        </clipPath>
                                                    </g>
                                                </g>
                                                <g></g>
                                                <g>
                                                    <g>
                                                        <path cs="100,100" d="M0.5,0.5 L887.5,0.5" fill="none" stroke-width="1" stroke-opacity="0" stroke="#000000" transform="translate(30,473)"></path>
                                                    </g>
                                                    <g>
                                                        <path cs="100,100" d="M0.5,0.5 L0.5,463.5" fill="none" stroke-width="1" stroke-opacity="0" stroke="#000000" transform="translate(30,10)" visibility="visible"></path>
                                                    </g>
                                                </g>
                                                <g></g>
                                                <g></g>
                                                <g>
                                                    <g transform="translate(30,10)"></g>
                                                    <g transform="translate(30,10)" opacity="1" visibility="visible">
                                                        <circle r="3.5" cx="0" cy="0" fill="#FFFFFF" stroke="#fdd400" fill-opacity="1" stroke-width="3" stroke-opacity="1" transform="translate(74,414)"></circle>
                                                        <circle r="3.5" cx="0" cy="0" fill="#FFFFFF" stroke="#fdd400" fill-opacity="1" stroke-width="3" stroke-opacity="1" transform="translate(222,306)"></circle>
                                                        <circle r="3.5" cx="0" cy="0" fill="#FFFFFF" stroke="#fdd400" fill-opacity="1" stroke-width="3" stroke-opacity="1" transform="translate(370,280)"></circle>
                                                        <circle r="3.5" cx="0" cy="0" fill="#FFFFFF" stroke="#fdd400" fill-opacity="1" stroke-width="3" stroke-opacity="1" transform="translate(517,252)"></circle>
                                                        <circle r="3.5" cx="0" cy="0" fill="#FFFFFF" stroke="#fdd400" fill-opacity="1" stroke-width="3" stroke-opacity="1" transform="translate(665,204)"></circle>
                                                        <circle r="3.5" cx="0" cy="0" fill="#FFFFFF" stroke="#fdd400" fill-opacity="1" stroke-width="3" stroke-opacity="1" transform="translate(813,141)"></circle>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g transform="translate(30,10)" visibility="visible">
                                                        <text y="6" fill="#888" font-family="Open Sans" font-size="11px" opacity="1" text-anchor="middle" transform="translate(73.91666666666667,475.5)">
                                                            <tspan y="6" x="0">2009</tspan>
                                                        </text>
                                                        <text y="6" fill="#888" font-family="Open Sans" font-size="11px" opacity="1" text-anchor="middle" transform="translate(221.91666666666669,475.5)">
                                                            <tspan y="6" x="0">2010</tspan>
                                                        </text>
                                                        <text y="6" fill="#888" font-family="Open Sans" font-size="11px" opacity="1" text-anchor="middle" transform="translate(369.9166666666667,475.5)">
                                                            <tspan y="6" x="0">2011</tspan>
                                                        </text>
                                                        <text y="6" fill="#888" font-family="Open Sans" font-size="11px" opacity="1" text-anchor="middle" transform="translate(516.9166666666666,475.5)">
                                                            <tspan y="6" x="0">2012</tspan>
                                                        </text>
                                                        <text y="6" fill="#888" font-family="Open Sans" font-size="11px" opacity="1" text-anchor="middle" transform="translate(664.9166666666666,475.5)">
                                                            <tspan y="6" x="0">2013</tspan>
                                                        </text>
                                                        <text y="6" fill="#888" font-family="Open Sans" font-size="11px" opacity="1" text-anchor="middle" transform="translate(812.9166666666666,475.5)">
                                                            <tspan y="6" x="0">2014</tspan>
                                                        </text>
                                                    </g>
                                                    <g transform="translate(30,10)" visibility="visible">
                                                        <text y="6" fill="#888" font-family="Open Sans" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,460.5)">
                                                            <tspan y="6" x="0">16</tspan>
                                                        </text>
                                                        <text y="6" fill="#888" font-family="Open Sans" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,414.5)">
                                                            <tspan y="6" x="0">18</tspan>
                                                        </text>
                                                        <text y="6" fill="#888" font-family="Open Sans" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,367.5)">
                                                            <tspan y="6" x="0">20</tspan>
                                                        </text>
                                                        <text y="6" fill="#888" font-family="Open Sans" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,321.5)">
                                                            <tspan y="6" x="0">22</tspan>
                                                        </text>
                                                        <text y="6" fill="#888" font-family="Open Sans" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,275.5)">
                                                            <tspan y="6" x="0">24</tspan>
                                                        </text>
                                                        <text y="6" fill="#888" font-family="Open Sans" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,229.5)">
                                                            <tspan y="6" x="0">26</tspan>
                                                        </text>
                                                        <text y="6" fill="#888" font-family="Open Sans" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,182.5)">
                                                            <tspan y="6" x="0">28</tspan>
                                                        </text>
                                                        <text y="6" fill="#888" font-family="Open Sans" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,136.5)">
                                                            <tspan y="6" x="0">30</tspan>
                                                        </text>
                                                        <text y="6" fill="#888" font-family="Open Sans" font-size="11px
                                          " opacity="1" text-anchor="end" transform="translate(-12,90.5)">
                                                            <tspan y="6" x="0">32</tspan>
                                                        </text>
                                                        <text y="6" fill="#888" font-family="Open Sans" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,43.5)">
                                                            <tspan y="6" x="0">34</tspan>
                                                        </text>
                                                        <text y="6" fill="#888" font-family="Open Sans" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,-2.5)">
                                                            <tspan y="6" x="0">36</tspan>
                                                        </text>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g></g>
                                                </g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                            </svg>
                                            <a href="http://www.amcharts.com/javascript-charts/" title="JavaScript charts" style="position: absolute; text-decoration: none; color: rgb(136, 136, 136); font-family: Open Sans; font-size: 11px; opacity: 0.7; display: block; left: 35px; top: 15px;">JS chart by amCharts</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END CHART PORTLET-->
                    </div>
                </div>
                <!-- END ROW --
             </div>
          </div>
       </div>
@endsection

