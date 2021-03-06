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
                                    <span class="arrow"></span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item ">
                        <a href="/component" class="nav-link nav-toggle">
                            <i class="icon-puzzle"></i>
                            <span class="title">Components</span>
                            <span class="arrow"></span>
                        </a>
                    </li>
                    <li class="nav-item start active open">
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
                        <h1>Admin Form
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
                        <span class="active">Form</span>
                    </li>
                </ul>
                <!-- END PAGE BREADCRUMB -->
                <!-- BEGIN PAGE BASE CONTENT -->
                {{--Jaa dorkar add kormu--}}
                <div class="row">
                    <div class="col-md-12">
                        <!-- BEGIN SAMPLE FORM PORTLET-->
                        <div class="portlet light bordered">
                            <div class="portlet-title">
                                <div class="caption font-green-haze">
                                    <i class="icon-settings font-green-haze"></i>
                                    <span class="caption-subject bold uppercase"> Horizontal Form</span>
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <form role="form" class="form-horizontal">
                                    <div class="form-body">
                                        <div class="form-group form-md-line-input has-success">
                                            <label class="col-md-2 control-label" for="form_control_1">Success Input</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" id="form_control_1" placeholder="Success state">
                                                <div class="form-control-focus"> </div>
                                            </div>
                                        </div>
                                       <div class="form-group form-md-line-input has-success">
                                            <label class="col-md-2 control-label" for="form_control_1">Success Input</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" id="form_control_1" placeholder="Success state">
                                                <div class="form-control-focus"> </div>
                                            </div>
                                        </div>
                                        <div class="form-group form-md-line-input has-success">
                                            <label class="col-md-2 control-label" for="form_control_1">Success Input</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" id="form_control_1" placeholder="Success state">
                                                <div class="form-control-focus"> </div>
                                            </div>
                                        </div>
                                        <div class="form-group form-md-line-input has-success">
                                            <label class="col-md-2 control-label" for="form_control_1">Success Input</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" id="form_control_1" placeholder="Success state">
                                                <div class="form-control-focus"> </div>
                                            </div>
                                        </div>
                                        <div class="form-group form-md-line-input has-success">
                                            <label class="col-md-2 control-label" for="form_control_1">Success Input</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" id="form_control_1" placeholder="Success state">
                                                <div class="form-control-focus"> </div>
                                            </div>
                                        </div>
                                        <div class="form-group form-md-line-input has-success">
                                            <label class="col-md-2 control-label" for="form_control_1">Textarea</label>
                                            <div class="col-md-10">
                                                <textarea class="form-control" rows="3" placeholder="Enter more text"></textarea>
                                                <div class="form-control-focus"> </div>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group form-md-line-input">
                                            <label class="col-md-2 control-label" for="form_control_1">Note</label>
                                            <div class="col-md-10">
                                                <div class="form-control form-control-static"> Rules Rules Rules Rules Rules </div>
                                                <div class="form-control-focus"> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-offset-2 col-md-10">
                                                <button type="button" class="btn blue">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- END SAMPLE FORM PORTLET-->
                        <!-- BEGIN SAMPLE FORM PORTLET-->
                        <!-- END SAMPLE FORM PORTLET-->
                        <!-- BEGIN SAMPLE FORM PORTLET-->

                        <!-- END SAMPLE FORM PORTLET-->
                    </div>
                </div>
             </div>
        </div>

        {{--Table--}}
        <div class="row">
            <div class="col-md-12">
                <div class="note note-success">
                    <div class="portlet box green">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-cogs"></i>Responsive Flip Scroll Tables </div>
                            <div class="tools">
                                <a href="javascript:;" class="collapse"> </a>
                                <a href="javascript:;" class="remove"> </a>
                            </div>
                        </div>
                        <div class="portlet-body flip-scroll">
                            <table class="table table-bordered table-striped table-condensed flip-content">
                                <thead class="flip-content">
                                <tr>
                                    <th width="20%"> Code </th>
                                    <th> Company </th>
                                    <th class="numeric"> Price </th>
                                    <th class="numeric"> Change </th>
                                    <th class="numeric"> Change % </th>
                                    <th class="numeric"> Open </th>
                                    <th class="numeric"> High </th>
                                    <th class="numeric"> Low </th>
                                   
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td> AAC </td>
                                    <td> AUSTRALIAN AGRICULTURAL COMPANY LIMITED. </td>
                                    <td class="numeric"> &nbsp; </td>
                                    <td class="numeric"> -0.01 </td>
                                    <td class="numeric"> -0.36% </td>
                                    <td class="numeric"> $1.39 </td>
                                    <td class="numeric"> $1.39 </td>
                                    <td class="numeric">
                                        <a class="btn purple btn-outline sbold" data-toggle="modal" href="#large"> Edit </a>
                                    </td>
                                          <!-- /.modal -->
                                    <div class="modal fade bs-modal-lg" id="large" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                    <h4 class="modal-title">Edit</h4>
                                                </div>
                                                <div class="modal-body"> 
                                                        <form class="form-horizontal">
                                                        <label>Name:</label>
                                                        <input type="text" name=""><br>
                                                        <label>Email</label>
                                                        <input type="" name="">
                                                            <button type="button" class="btn green">Save changes</button>
                                                        </form>
                                                    </div>
                                                    
                                                 </div>
                                               
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                   
                                    <!-- /.modal -->
                                        
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

