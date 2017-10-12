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
                    <li class="nav-item start active open ">
                        <a href="/portlets" class="nav-link nav-toggle">
                            <i class="icon-wallet"></i>
                            <span class="title">Portlets</span>
                            <span class="arrow"></span>
                        </a>

                    </li>
                    <li class="nav-item  ">
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
                        <h1>Admin Portlets
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
                        <span class="active">Portlets</span>
                    </li>
                </ul>
                <!-- END PAGE BREADCRUMB -->
                <!-- BEGIN PAGE BASE CONTENT -->
                {{--Jaa dorkar add kormu--}}
                <div class="col-md-6">
                    <!-- BEGIN Portlet PORTLET-->
                    <div class="portlet box red">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i>Advance Form </div>
                            <div class="tools">
                                <a href="javascript:;" class="collapse"> </a>
                                <a href="#portlet-config" data-toggle="modal" class="config"> </a>

                                <a href="javascript:;" class="fullscreen"> </a>
                                <a href="javascript:;" class="remove"> </a>
                            </div>
                        </div>
                        <div class="portlet-body form portlet-empty">
                            <div class="form-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Text</label>
                                    <input class="form-control" id="exampleInputEmail1" placeholder="Enter text" type="email">
                                    <span class="help-block"> A block of help text. </span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Text</label>
                                    <input class="form-control" id="exampleInputEmail1" placeholder="Enter text" type="email">
                                    <span class="help-block"> A block of help text. </span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Text</label>
                                    <input class="form-control" id="exampleInputEmail1" placeholder="Enter text" type="email">
                                    <span class="help-block"> A block of help text. </span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Text</label>
                                    <input class="form-control" id="exampleInputEmail1" placeholder="Enter text" type="email">
                                    <span class="help-block"> A block of help text. </span>
                                </div>

                                <div class="form-actions">
                                    <button type="submit" class="btn blue">Submit</button>
                                </div>
                            </div>


                        </div>
                    </div>
                    <!-- END Portlet PORTLET-->
                </div>

                {{--TAble--}}
                <div class="col-md-6">
                    <!-- BEGIN CONDENSED TABLE PORTLET-->
                    <div class="portlet box red">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-picture"></i>Condensed Table </div>
                            <div class="tools">
                                <a href="javascript:;" class="collapse"> </a>
                                <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                <a href="javascript:;" class="reload"> </a>
                                <a href="javascript:;" class="remove"> </a>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="table-scrollable">
                                <table class="table table-condensed table-hover">
                                    <thead>
                                    <tr>
                                        <th> # </th>
                                        <th> First Name </th>
                                        <th> Last Name </th>
                                        <th> Username </th>
                                        <th> Status </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td> 1 </td>
                                        <td> Mark </td>
                                        <td> Otto </td>
                                        <td> makr124 </td>
                                        <td>
                                            <span class="label label-sm label-success"> Approved </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 2 </td>
                                        <td> Jacob </td>
                                        <td> Nilson </td>
                                        <td> jac123 </td>
                                        <td>
                                            <span class="label label-sm label-info"> Pending </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 3 </td>
                                        <td> Larry </td>
                                        <td> Cooper </td>
                                        <td> lar </td>
                                        <td>
                                            <span class="label label-sm label-warning"> Suspended </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 4 </td>
                                        <td> Sandy </td>
                                        <td> Lim </td>
                                        <td> sanlim </td>
                                        <td>
                                            <span class="label label-sm label-danger"> Blocked </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 5 </td>
                                        <td> Sandy </td>
                                        <td> Lim </td>
                                        <td> sanlim </td>
                                        <td>
                                            <span class="label label-sm label-danger"> Blocked </span>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- END CONDENSED TABLE PORTLET-->
                </div>




            </div>
        </div>
    </div>


@endsection

