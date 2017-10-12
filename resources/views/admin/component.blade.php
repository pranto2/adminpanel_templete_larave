

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
               <span class="title">Welcome Components</span>
               <span class="selected"></span>
               <span class="arrow open"></span>
               </a>
               <ul class="sub-menu">
                  <li class="nav_item">
                     <a href="/index" class="nav-link ">
                     <i class="icon-bar-chart"></i>
                     <span class="title">Dashboard</span>
                     <span class="selected"></span>
                     <span class="arrow"></span>
                     </a>
                  </li>
               </ul>
            </li>
            <li class="nav-item start active open">
               <a href="/component" class="nav-link nav-toggle">
               <i class="icon-puzzle"></i>
               <span class="title">Components</span>
               <span class="arrow"></span>
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
   <!-- END SIDEBAR -->
   <!-- BEGIN CONTENT -->
   <div class="page-content-wrapper">
      <!-- BEGIN CONTENT BODY -->
      <div class="page-content">
         <!-- BEGIN PAGE HEAD-->
         <div class="page-head">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
               <h1>Admin Component
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
               <span class="active">Component</span>
            </li>
         </ul>
         <!-- END PAGE BREADCRUMB -->
         <!-- BEGIN PAGE BASE CONTENT -->
         <div class="portlet-body form" style="background-color: whitesmoke">
            <!-- BEGIN FORM-->
            <form action="#" class="form-horizontal form-bordered">
               <div class="row">
                  <div class="form-body">
                     <div class="form-group ">
                        <label class="control-label col-md-3">Image Upload #1</label>
                        <div class="col-md-9">
                           <div class="fileinput fileinput-new" data-provides="fileinput">
                              <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"> </div>
                              <div>
                                 <span class="btn red btn-outline btn-file">
                                 <span class="fileinput-new"> Select image </span>
                                 <span class="fileinput-exists"> Change </span>
                                 <input type="file" name="..."> </span>
                                 <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="form-group ">
                        <label class="control-label col-md-3">Image Upload #1</label>
                        <div class="col-md-9">
                           <div class="fileinput fileinput-new" data-provides="fileinput">
                              <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"> </div>
                              <div>
                                 <span class="btn red btn-outline btn-file">
                                 <span class="fileinput-new"> Select image </span>
                                 <span class="fileinput-exists"> Change </span>
                                 <input type="file" name="..."> </span>
                                 <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="form-body">
                     <div class="form-group ">
                        <label class="control-label col-md-3">Image Upload #1</label>
                        <div class="col-md-9">
                           <div class="fileinput fileinput-new" data-provides="fileinput">
                              <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"> </div>
                              <div>
                                 <span class="btn red btn-outline btn-file">
                                 <span class="fileinput-new"> Select image </span>
                                 <span class="fileinput-exists"> Change </span>
                                 <input type="file" name="..."> </span>
                                 <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="form-group ">
                        <label class="control-label col-md-3">Image Upload #1</label>
                        <div class="col-md-9">
                           <div class="fileinput fileinput-new" data-provides="fileinput">
                              <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"> </div>
                              <div>
                                 <span class="btn red btn-outline btn-file">
                                 <span class="fileinput-new"> Select image </span>
                                 <span class="fileinput-exists"> Change </span>
                                 <input type="file" name="..."> </span>
                                 <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="form-actions">
                  <div class="row">
                     <div class="col-md-offset-3 col-md-9">
                        <button class="btn btn-success">
                        <i class="fa fa-check"></i> Submit
                        </button>
                     </div>
                  </div>
               </div>
            </form>
            <!-- END FORM-->
         </div>
         <!-- END PAGE BASE CONTENT -->
      </div>
      <!-- END CONTENT BODY -->
   </div>
   <!-- END CONTENT -->
   <!-- BEGIN QUICK SIDEBAR -->
   <!-- END QUICK SIDEBAR -->
   {{--Table--}}
   <div class="row">
      <div class="col-md-12">
         <div class="note note-success">
            <div class="portlet box green">
               <div class="portlet-title">
                  <div class="caption">
                     <i class="fa fa-cogs"></i>Responsive Flip Scroll Tables 
                  </div>
                  <div class="tools">
                     <a href="javascript:;" class="collapse"> </a>
                     <a href="javascript:;" class="reload"> </a>
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
                           <th class="numeric"> Volume </th>
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
                           <td class="numeric"> &nbsp; </td>
                           <td class="numeric"> 9,395 </td>
                        </tr>
                        <tr>
                           <td> AAD </td>
                           <td> ARDENT LEISURE GROUP </td>
                           <td class="numeric"> $1.15 </td>
                           <td class="numeric"> +0.02 </td>
                           <td class="numeric"> 1.32% </td>
                           <td class="numeric"> $1.14 </td>
                           <td class="numeric"> $1.15 </td>
                           <td class="numeric"> $1.13 </td>
                           <td class="numeric"> 56,431 </td>
                        </tr>
                        <tr>
                           <td> AAX </td>
                           <td> AUSENCO LIMITED </td>
                           <td class="numeric"> $4.00 </td>
                           <td class="numeric"> -0.04 </td>
                           <td class="numeric"> -0.99% </td>
                           <td class="numeric"> $4.01 </td>
                           <td class="numeric"> $4.05 </td>
                           <td class="numeric"> $4.00 </td>
                           <td class="numeric"> 90,641 </td>
                        </tr>
                        <tr>
                           <td> ABC </td>
                           <td> ADELAIDE BRIGHTON LIMITED </td>
                           <td class="numeric"> $3.00 </td>
                           <td class="numeric"> +0.06 </td>
                           <td class="numeric"> 2.04% </td>
                           <td class="numeric"> $2.98 </td>
                           <td class="numeric"> $3.00 </td>
                           <td class="numeric"> $2.96 </td>
                           <td class="numeric"> 862,518 </td>
                        </tr>
                        <tr>
                           <td> ABP </td>
                           <td> ABACUS PROPERTY GROUP </td>
                           <td class="numeric"> $1.91 </td>
                           <td class="numeric"> 0.00 </td>
                           <td class="numeric"> 0.00% </td>
                           <td class="numeric"> $1.92 </td>
                           <td class="numeric"> $1.93 </td>
                           <td class="numeric"> $1.90 </td>
                           <td class="numeric"> 595,701 </td>
                        </tr>
                        <tr>
                           <td> ABY </td>
                           <td> ADITYA BIRLA MINERALS LIMITED </td>
                           <td class="numeric"> $0.77 </td>
                           <td class="numeric"> +0.02 </td>
                           <td class="numeric"> 2.00% </td>
                           <td class="numeric"> $0.76 </td>
                           <td class="numeric"> $0.77 </td>
                           <td class="numeric"> $0.76 </td>
                           <td class="numeric"> 54,567 </td>
                        </tr>
                        <tr>
                           <td> ACR </td>
                           <td> ACRUX LIMITED </td>
                           <td class="numeric"> $3.71 </td>
                           <td class="numeric"> +0.01 </td>
                           <td class="numeric"> 0.14% </td>
                           <td class="numeric"> $3.70 </td>
                           <td class="numeric"> $3.72 </td>
                           <td class="numeric"> $3.68 </td>
                           <td class="numeric"> 191,373 </td>
                        </tr>
                        <tr>
                           <td> ADU </td>
                           <td> ADAMUS RESOURCES LIMITED </td>
                           <td class="numeric"> $0.72 </td>
                           <td class="numeric"> 0.00 </td>
                           <td class="numeric"> 0.00% </td>
                           <td class="numeric"> $0.73 </td>
                           <td class="numeric"> $0.74 </td>
                           <td class="numeric"> $0.72 </td>
                           <td class="numeric"> 8,602,291 </td>
                        </tr>
                        <tr>
                           <td> AGG </td>
                           <td> ANGLOGOLD ASHANTI LIMITED </td>
                           <td class="numeric"> $7.81 </td>
                           <td class="numeric"> -0.22 </td>
                           <td class="numeric"> -2.74% </td>
                           <td class="numeric"> $7.82 </td>
                           <td class="numeric"> $7.82 </td>
                           <td class="numeric"> $7.81 </td>
                           <td class="numeric"> 148 </td>
                        </tr>
                        <tr>
                           <td> AGK </td>
                           <td> AGL ENERGY LIMITED </td>
                           <td class="numeric"> $13.82 </td>
                           <td class="numeric"> +0.02 </td>
                           <td class="numeric"> 0.14% </td>
                           <td class="numeric"> $13.83 </td>
                           <td class="numeric"> $13.83 </td>
                           <td class="numeric"> $13.67 </td>
                           <td class="numeric"> 846,403 </td>
                        </tr>
                        <tr>
                           <td> AGO </td>
                           <td> ATLAS IRON LIMITED </td>
                           <td class="numeric"> $3.17 </td>
                           <td class="numeric"> -0.02 </td>
                           <td class="numeric"> -0.47% </td>
                           <td class="numeric"> $3.11 </td>
                           <td class="numeric"> $3.22 </td>
                           <td class="numeric"> $3.10 </td>
                           <td class="numeric"> 5,416,303 </td>
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

