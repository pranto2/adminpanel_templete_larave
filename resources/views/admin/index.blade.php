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
                        <li class="nav-item start active open">
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
                     <h1>Admin Dashboard
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
                     <span class="active">Dashboard</span>
                  </li>
               </ul>
               <!-- END PAGE BREADCRUMB -->
               <!-- BEGIN PAGE BASE CONTENT -->
               <div class="row">
                  <div class="col-lg-12 col-xs-12 col-sm-12">
                     <!-- Input form thakbo ei khane -->
                     <!-- BEGIN VALIDATION STATES-->
                     <div class="portlet light portlet-fit portlet-form bordered">
                        <div class="portlet-title">
                           <div class="caption">
                              <i class=" icon-layers font-green"></i>
                              <span class="caption-subject font-green sbold uppercase">Basic Validation</span>
                           </div>
                        </div>
                        <div class="portlet-body">
                           <!-- BEGIN FORM-->
                           <form action="#" class="form-horizontal" id="form_sample_1">
                              <div class="form-body">
                                 <div class="alert alert-danger display-hide">
                                    <button class="close" data-close="alert"></button> You have some form errors. Please check below. 
                                 </div>
                                 <div class="alert alert-success display-hide">
                                    <button class="close" data-close="alert"></button> Your form validation is successful! 
                                 </div>
                                 <div class="form-group form-md-line-input">
                                    <label class="col-md-3 control-label" for="form_control_1">Name
                                    <span class="required">*</span>
                                    </label>
                                    <div class="col-md-9">
                                       <input type="text" class="form-control" placeholder="" name="name">
                                       <div class="form-control-focus"> </div>
                                       <span class="help-block">enter your full name</span>
                                    </div>
                                 </div>
                                 <div class="form-group form-md-line-input">
                                    <label class="col-md-3 control-label" for="form_control_1">URL
                                    <span class="required">*</span>
                                    </label>
                                    <div class="col-md-9">
                                       <input type="text" class="form-control" placeholder="" name="url">
                                       <div class="form-control-focus"> </div>
                                    </div>
                                 </div>
                                 <div class="form-group form-md-line-input">
                                    <label class="col-md-3 control-label" for="form_control_1">Number
                                    <span class="required">*</span>
                                    </label>
                                    <div class="col-md-9">
                                       <input type="text" class="form-control" placeholder="" name="number">
                                       <div class="form-control-focus"> </div>
                                    </div>
                                 </div>
                               <div class="form-group form-md-line-input">
                                    <label class="col-md-3 control-label" for="form_control_1">Email</label>
                                    <div class="col-md-9">
                                       <div class="input-group">
                                          <span class="input-group-addon">
                                          <i class="fa fa-envelope"></i>
                                          </span>
                                          <input type="text" class="form-control" name="email2" placeholder="Enter your email">
                                          <div class="form-control-focus"> </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="form-group form-md-line-input">
                                    <label class="col-md-3 control-label" for="form_control_1">URL</label>
                                    <div class="col-md-9">
                                       <div class="input-group">
                                          <input type="text" class="form-control" name="url2" placeholder="Enter URL">
                                          <span class="input-group-addon">
                                          <i class="fa fa-i-cursor"></i>
                                          </span>
                                          <div class="form-control-focus"> </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="form-group form-md-line-input">
                                    <label class="col-md-3 control-label" for="form_control_1">Memo</label>
                                    <div class="col-md-9">
                                       <textarea class="form-control" name="memo" rows="3"></textarea>
                                       <div class="form-control-focus"> </div>
                                    </div>
                                 </div>
                                 <div class="form-group form-md-checkboxes">
                                    <label class="col-md-3 control-label" for="form_control_1">Checkboxes</label>
                                    <div class="col-md-9">
                                       <div class="md-checkbox-inline">
                                          <div class="md-checkbox">
                                             <input type="checkbox" id="checkbox1_3" name="checkboxes2[]" value="1" class="md-check">
                                             <label for="checkbox1_3">
                                             <span></span>
                                             <span class="check"></span>
                                             <span class="box"></span> Option 1 </label>
                                          </div>
                                          <div class="md-checkbox">
                                             <input type="checkbox" id="checkbox1_4" name="checkboxes2[]" value="2" class="md-check">
                                             <label for="checkbox1_4">
                                             <span></span>
                                             <span class="check"></span>
                                             <span class="box"></span> Option 2 </label>
                                          </div>
                                          <div class="md-checkbox">
                                             <input type="checkbox" id="checkbox1_5" name="checkboxes2[]" value="3" class="md-check">
                                             <label for="checkbox1_5">
                                             <span></span>
                                             <span class="check"></span>
                                             <span class="box"></span> Option 3 </label>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="form-group form-md-radios">
                                    <label class="col-md-3 control-label" for="form_control_1">Radios</label>
                                    <div class="col-md-9">
                                       <div class="md-radio-list">
                                          <div class="md-radio">
                                             <input type="radio" id="checkbox1_6" name="radio1" value="1" class="md-radiobtn">
                                             <label for="checkbox1_6">
                                             <span></span>
                                             <span class="check"></span>
                                             <span class="box"></span> Option 1 </label>
                                          </div>
                                          <div class="md-radio">
                                             <input type="radio" id="checkbox1_7" name="radio1" value="2" class="md-radiobtn">
                                             <label for="checkbox1_7">
                                             <span></span>
                                             <span class="check"></span>
                                             <span class="box"></span> Option 2 </label>
                                          </div>
                                          <div class="md-radio">
                                             <input type="radio" id="checkbox1_611" name="radio1" value="3" class="md-radiobtn">
                                             <label for="checkbox1_611">
                                             <span></span>
                                             <span class="check"></span>
                                             <span class="box"></span> Option 3 </label>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group last">
                                 <label class="control-label col-md-3">Image Upload #2</label>
                                 <div class="col-md-9">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                       <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                       <div>
                                          <span class="btn default btn-file">
                                          <span class="fileinput-new"> Select image </span>
                                          <span class="fileinput-exists"> Change </span>
                                          <input type="file" name="..."> </span>
                                          <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="form-actions">
                                 <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                       <button type="submit" class="btn green">Submit</button>
                                    </div>
                                 </div>
                              </div>
                           </form>
                           <!-- END FORM-->
                        </div>
                     </div>
                     <!-- END VALIDATION STATES-->
                  </div>
                  <div class="col-lg-6 col-xs-12 col-sm-12">
                     <!-- input form er table thakbo eikhane -->
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <!-- BEGIN EXAMPLE TABLE PORTLET-->
                     <div class="portlet light portlet-fit bordered">
                        <div class="portlet-title">
                           <div class="caption">
                              <i class="icon-settings font-red"></i>
                              <span class="caption-subject font-red sbold uppercase">Editable Table</span>
                           </div>
                        </div>
                        <div class="portlet-body">
                           <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                              <thead>
                                 <tr>
                                    <th> Username </th>
                                    <th> Full Name </th>
                                    <th> Points </th>
                                    <th> Notes </th>
                                    <th> Edit </th>
                                    <th> Delete </th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td> alex </td>
                                    <td> Alex Nilson </td>
                                    <td> 1234 </td>
                                    <td class="center"> power user </td>
                                    <td>
                                       <a class="edit" href="javascript:;"> Edit </a>
                                    </td>
                                    <td>
                                       <a class="delete" href="javascript:;"> Delete </a>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td> lisa </td>
                                    <td> Lisa Wong </td>
                                    <td> 434 </td>
                                    <td class="center"> new user </td>
                                    <td>
                                       <a class="edit" href="javascript:;"> Edit </a>
                                    </td>
                                    <td>
                                       <a class="delete" href="javascript:;"> Delete </a>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td> nick12 </td>
                                    <td> Nick Roberts </td>
                                    <td> 232 </td>
                                    <td class="center"> power user </td>
                                    <td>
                                       <a class="edit" href="javascript:;"> Edit </a>
                                    </td>
                                    <td>
                                       <a class="delete" href="javascript:;"> Delete </a>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td> goldweb </td>
                                    <td> Sergio Jackson </td>
                                    <td> 132 </td>
                                    <td class="center"> elite user </td>
                                    <td>
                                       <a class="edit" href="javascript:;"> Edit </a>
                                    </td>
                                    <td>
                                       <a class="delete" href="javascript:;"> Delete </a>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td> alex </td>
                                    <td> Alex Nilson </td>
                                    <td> 1234 </td>
                                    <td class="center"> power user </td>
                                    <td>
                                       <a class="edit" href="javascript:;"> Edit </a>
                                    </td>
                                    <td>
                                       <a class="delete" href="javascript:;"> Delete </a>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td> webriver </td>
                                    <td> Antonio Sanches </td>
                                    <td> 462 </td>
                                    <td class="center"> new user </td>
                                    <td>
                                       <a class="edit" href="javascript:;"> Edit </a>
                                    </td>
                                    <td>
                                       <a class="delete" href="javascript:;"> Delete </a>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td> gist124 </td>
                                    <td> Nick Roberts </td>
                                    <td> 62 </td>
                                    <td class="center"> new user </td>
                                    <td>
                                       <a class="edit" href="javascript:;"> Edit </a>
                                    </td>
                                    <td>
                                       <a class="delete" href="javascript:;"> Delete </a>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td> alex </td>
                                    <td> Alex Nilson </td>
                                    <td> 1234 </td>
                                    <td class="center"> power user </td>
                                    <td>
                                       <a class="edit" href="javascript:;"> Edit </a>
                                    </td>
                                    <td>
                                       <a class="delete" href="javascript:;"> Delete </a>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                     <!-- END EXAMPLE TABLE PORTLET-->
                  </div>
               </div>
               <!-- END PAGE BASE CONTENT -->
            </div>
            <!-- END CONTENT BODY -->
         </div>
         <!-- END CONTENT -->
         <!-- BEGIN QUICK SIDEBAR -->
         <!-- END QUICK SIDEBAR -->
      </div>
 @endsection