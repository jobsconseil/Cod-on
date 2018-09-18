<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <title>Cod'On | Administration</title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="Jobs Conseil"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="icon" href="favicon.ico" type="image/x-icon">

        <!-- Morris Charts CSS -->
        <link href="{{asset('/Back/vendors/bower_components/morris.js/morris.css')}}" rel="stylesheet" type="text/css"/>

        <!-- Data table CSS -->
        <link href="{{asset('/Back/vendors/bower_components/datatables/media/css/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>

        <link href="{{asset('/Back/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css')}}" rel="stylesheet" type="text/css">

        <!-- Custom CSS -->
        <link href="{{asset('/Back/css/style.css')}}" rel="stylesheet" type="text/css">
    </head>

    <body>
        <!-- Preloader -->
        <div class="preloader-it">
            <div class="la-anim-1"></div>
        </div>
        <!-- /Preloader -->
        <div class="wrapper theme-1-active pimary-color-green">
            <!-- Top Menu Items -->
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="mobile-only-brand pull-left">
                    <div class="nav-header pull-left">
                        <div class="logo-wrap">
                            <a href="index.html">
                                <img class="brand-img" src="../img/logo.png" alt="brand"/>
                                <span class="brand-text">Flintstone</span>
                            </a>
                        </div>
                    </div>
                    <a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);"><i class="zmdi zmdi-menu"></i></a>
                    <a id="toggle_mobile_search" data-toggle="collapse" data-target="#search_form" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-search"></i></a>
                    <a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-more"></i></a>
                    <form id="search_form" role="search" class="top-nav-search collapse pull-left">
                        <div class="input-group">
                            <input type="text" name="example-input1-group2" class="form-control" placeholder="Search">
                            <span class="input-group-btn">
                                <button type="button" class="btn  btn-default"  data-target="#search_form" data-toggle="collapse" aria-label="Close" aria-expanded="true"><i class="zmdi zmdi-search"></i></button>
                                </span>
                        </div>
                    </form>
                </div>
                <div id="mobile_only_nav" class="mobile-only-nav pull-right">
                    <ul class="nav navbar-right top-nav pull-right">
                        <li class="dropdown alert-drp">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="zmdi zmdi-notifications top-nav-icon"></i><span class="top-nav-icon-badge">5</span></a>
                            <ul  class="dropdown-menu alert-dropdown" data-dropdown-in="bounceIn" data-dropdown-out="bounceOut">
                                <li>
                                    <div class="notification-box-head-wrap">
                                        <span class="notification-box-head pull-left inline-block">notifications</span>
                                        <a class="txt-danger pull-right clear-notifications inline-block" href="javascript:void(0)"> clear all </a>
                                        <div class="clearfix"></div>
                                        <hr class="light-grey-hr ma-0"/>
                                    </div>
                                </li>
                                <li>
                                    <div class="streamline message-nicescroll-bar">
                                        <div class="sl-item">
                                            <a href="javascript:void(0)">
                                                <div class="icon bg-green">
                                                    <i class="zmdi zmdi-flag"></i>
                                                </div>
                                                <div class="sl-content">
                                                        <span class="inline-block capitalize-font  pull-left truncate head-notifications">
                                                        New subscription created</span>
                                                    <span class="inline-block font-11  pull-right notifications-time">2pm</span>
                                                    <div class="clearfix"></div>
                                                    <p class="truncate">Your customer subscribed for the basic plan. The customer will pay $25 per month.</p>
                                                </div>
                                            </a>
                                        </div>
                                        <hr class="light-grey-hr ma-0"/>
                                        <div class="sl-item">
                                            <a href="javascript:void(0)">
                                                <div class="icon bg-yellow">
                                                    <i class="zmdi zmdi-trending-down"></i>
                                                </div>
                                                <div class="sl-content">
                                                    <span class="inline-block capitalize-font  pull-left truncate head-notifications txt-warning">Server #2 not responding</span>
                                                    <span class="inline-block font-11 pull-right notifications-time">1pm</span>
                                                    <div class="clearfix"></div>
                                                    <p class="truncate">Some technical error occurred needs to be resolved.</p>
                                                </div>
                                            </a>
                                        </div>
                                        <hr class="light-grey-hr ma-0"/>
                                        <div class="sl-item">
                                            <a href="javascript:void(0)">
                                                <div class="icon bg-blue">
                                                    <i class="zmdi zmdi-email"></i>
                                                </div>
                                                <div class="sl-content">
                                                    <span class="inline-block capitalize-font  pull-left truncate head-notifications">2 new messages</span>
                                                    <span class="inline-block font-11  pull-right notifications-time">4pm</span>
                                                    <div class="clearfix"></div>
                                                    <p class="truncate"> The last payment for your G Suite Basic subscription failed.</p>
                                                </div>
                                            </a>
                                        </div>
                                        <hr class="light-grey-hr ma-0"/>
                                        <div class="sl-item">
                                            <a href="javascript:void(0)">
                                                <div class="sl-avatar">
                                                    <img class="img-responsive" src="../img/avatar.jpg" alt="avatar"/>
                                                </div>
                                                <div class="sl-content">
                                                    <span class="inline-block capitalize-font  pull-left truncate head-notifications">Sandy Doe</span>
                                                    <span class="inline-block font-11  pull-right notifications-time">1pm</span>
                                                    <div class="clearfix"></div>
                                                    <p class="truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
                                                </div>
                                            </a>
                                        </div>
                                        <hr class="light-grey-hr ma-0"/>
                                        <div class="sl-item">
                                            <a href="javascript:void(0)">
                                                <div class="icon bg-red">
                                                    <i class="zmdi zmdi-storage"></i>
                                                </div>
                                                <div class="sl-content">
                                                    <span class="inline-block capitalize-font  pull-left truncate head-notifications txt-danger">99% server space occupied.</span>
                                                    <span class="inline-block font-11  pull-right notifications-time">1pm</span>
                                                    <div class="clearfix"></div>
                                                    <p class="truncate">consectetur, adipisci velit.</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="notification-box-bottom-wrap">
                                        <hr class="light-grey-hr ma-0"/>
                                        <a class="block text-center read-all" href="javascript:void(0)"> read all </a>
                                        <div class="clearfix"></div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown auth-drp">
                            <a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown"><img src="../img/user1.png" alt="user_auth" class="user-auth-img img-circle"/><span class="user-online-status"></span></a>
                            <ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                                <li>
                                    <a href="profile.html"><i class="zmdi zmdi-account"></i><span>Profile</span></a>
                                </li>
                                <li>
                                    <a href="#"><i class="zmdi zmdi-card"></i><span>my balance</span></a>
                                </li>
                                <li>
                                    <a href="inbox.html"><i class="zmdi zmdi-email"></i><span>Inbox</span></a>
                                </li>
                                <li>
                                    <a href="#"><i class="zmdi zmdi-settings"></i><span>Settings</span></a>
                                </li>
                                <li class="divider"></li>
                                <li class="sub-menu show-on-hover">
                                    <a href="#" class="dropdown-toggle pr-0 level-2-drp"><i class="zmdi zmdi-check text-success"></i> available</a>
                                    <ul class="dropdown-menu open-left-side">
                                        <li>
                                            <a href="#"><i class="zmdi zmdi-check text-success"></i><span>available</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="zmdi zmdi-circle-o text-warning"></i><span>busy</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="zmdi zmdi-minus-circle-outline text-danger"></i><span>offline</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#"><i class="zmdi zmdi-power"></i><span>Log Out</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- /Top Menu Items -->

            <!-- Left Sidebar Menu -->
            <div class="fixed-sidebar-left">
                <ul class="nav navbar-nav side-nav nicescroll-bar">
                    <li class="navigation-header">
                        <span>Main</span>
                        <i class="zmdi zmdi-more"></i>
                    </li>
                    <li>
                        <a class="active" href="javascript:void(0);" data-toggle="collapse" data-target="#dashboard_dr"><div class="pull-left"><i class="zmdi zmdi-landscape mr-20"></i><span class="right-nav-text">Dashboard</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
                        <ul id="dashboard_dr" class="collapse collapse-level-1">
                            <li>
                                <a class="active-page" href="index.html">Analytical</a>
                            </li>
                            <li>
                                <a href="index2.html">Demographic</a>
                            </li>
                            <li>
                                <a href="index3.html">Project</a>
                            </li>
                            <li>
                                <a href="index4.html">Hospital</a>
                            </li>
                            <li>
                                <a href="index5.html">HRM</a>
                            </li>
                            <li>
                                <a href="index6.html">Real Estate</a>
                            </li>
                            <li>
                                <a href="profile.html">profile</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#ecom_dr"><div class="pull-left"><i class="zmdi zmdi-shopping-basket mr-20"></i><span class="right-nav-text">E-Commerce</span></div><div class="pull-right"><span class="label label-success">hot</span></div><div class="clearfix"></div></a>
                        <ul id="ecom_dr" class="collapse collapse-level-1">
                            <li>
                                <a href="e-commerce.html">Dashboard</a>
                            </li>
                            <li>
                                <a href="product.html">Products</a>
                            </li>
                            <li>
                                <a href="product-detail.html">Product Detail</a>
                            </li>
                            <li>
                                <a href="add-products.html">Add Product</a>
                            </li>
                            <li>
                                <a href="product-orders.html">Orders</a>
                            </li>
                            <li>
                                <a href="product-cart.html">Cart</a>
                            </li>
                            <li>
                                <a href="product-checkout.html">Checkout</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#app_dr"><div class="pull-left"><i class="zmdi zmdi-apps mr-20"></i><span class="right-nav-text">Apps </span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
                        <ul id="app_dr" class="collapse collapse-level-1">
                            <li>
                                <a href="chats.html">chats</a>
                            </li>
                            <li>
                                <a href="calendar.html">calendar</a>
                            </li>
                            <li>
                                <a href="weather.html">weather</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" data-toggle="collapse" data-target="#email_dr">Email<div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
                                <ul id="email_dr" class="collapse collapse-level-2">
                                    <li>
                                        <a href="inbox.html">inbox</a>
                                    </li>
                                    <li>
                                        <a href="inbox-detail.html">detail email</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0);" data-toggle="collapse" data-target="#contact_dr">Contacts<div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
                                <ul id="contact_dr" class="collapse collapse-level-2">
                                    <li>
                                        <a href="contact-list.html">list</a>
                                    </li>
                                    <li>
                                        <a href="contact-card.html">cards</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="file-manager.html">File Manager</a>
                            </li>
                            <li>
                                <a href="todo-tasklist.html">To Do/Tasklist</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="widgets.html"><div class="pull-left"><i class="zmdi zmdi-flag mr-20"></i><span class="right-nav-text">widgets</span></div><div class="pull-right"><span class="label label-warning">8</span></div><div class="clearfix"></div></a>
                    </li>
                    <li><hr class="light-grey-hr mb-10"/></li>
                    <li class="navigation-header">
                        <span>component</span>
                        <i class="zmdi zmdi-more"></i>
                    </li>
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#ui_dr"><div class="pull-left"><i class="zmdi zmdi-smartphone-setup mr-20"></i><span class="right-nav-text">UI Elements</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
                        <ul id="ui_dr" class="collapse collapse-level-1 two-col-list">
                            <li>
                                <a href="panels-wells.html">Panels & Wells</a>
                            </li>
                            <li>
                                <a href="modals.html">Modals</a>
                            </li>
                            <li>
                                <a href="sweetalert.html">Sweet Alerts</a>
                            </li>
                            <li>
                                <a href="notifications.html">notifications</a>
                            </li>
                            <li>
                                <a href="typography.html">Typography</a>
                            </li>
                            <li>
                                <a href="buttons.html">Buttons</a>
                            </li>
                            <li>
                                <a href="accordion-toggle.html">Accordion / Toggles</a>
                            </li>
                            <li>
                                <a href="tabs.html">Tabs</a>
                            </li>
                            <li>
                                <a href="progressbars.html">Progress bars</a>
                            </li>
                            <li>
                                <a href="skills-counter.html">Skills & Counters</a>
                            </li>
                            <li>
                                <a href="pricing.html">Pricing Tables</a>
                            </li>
                            <li>
                                <a href="nestable.html">Nestables</a>
                            </li>
                            <li>
                                <a href="dorpdown.html">Dropdowns</a>
                            </li>
                            <li>
                                <a href="bootstrap-treeview.html">Tree View</a>
                            </li>
                            <li>
                                <a href="carousel.html">Carousel</a>
                            </li>
                            <li>
                                <a href="range-slider.html">Range Slider</a>
                            </li>
                            <li>
                                <a href="grid-styles.html">Grid</a>
                            </li>
                            <li>
                                <a href="bootstrap-ui.html">Bootstrap UI</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#form_dr"><div class="pull-left"><i class="zmdi zmdi-edit mr-20"></i><span class="right-nav-text">Forms</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
                        <ul id="form_dr" class="collapse collapse-level-1 two-col-list">
                            <li>
                                <a href="form-element.html">Basic Forms</a>
                            </li>
                            <li>
                                <a href="form-layout.html">form Layout</a>
                            </li>
                            <li>
                                <a href="form-advanced.html">Form Advanced</a>
                            </li>
                            <li>
                                <a href="form-mask.html">Form Mask</a>
                            </li>
                            <li>
                                <a href="form-picker.html">Form Picker</a>
                            </li>
                            <li>
                                <a href="form-validation.html">form Validation</a>
                            </li>
                            <li>
                                <a href="form-wizard.html">Form Wizard</a>
                            </li>
                            <li>
                                <a href="form-x-editable.html">X-Editable</a>
                            </li>
                            <li>
                                <a href="cropperjs.html">Cropperjs</a>
                            </li>
                            <li>
                                <a href="form-file-upload.html">File Upload</a>
                            </li>
                            <li>
                                <a href="dropzone.html">Dropzone</a>
                            </li>
                            <li>
                                <a href="bootstrap-wysihtml5.html">Bootstrap Wysihtml5</a>
                            </li>
                            <li>
                                <a href="tinymce-wysihtml5.html">Tinymce Wysihtml5</a>
                            </li>
                            <li>
                                <a href="summernote-wysihtml5.html">summernote</a>
                            </li>
                            <li>
                                <a href="typeahead-js.html">typeahead</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#chart_dr"><div class="pull-left"><i class="zmdi zmdi-chart-donut mr-20"></i><span class="right-nav-text">Charts </span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
                        <ul id="chart_dr" class="collapse collapse-level-1 two-col-list">
                            <li>
                                <a href="flot-chart.html">Flot Chart</a>
                            </li>
                            <li>
                                <a href="morris-chart.html">Morris Chart</a>
                            </li>
                            <li>
                                <a href="chart.js.html">chartjs</a>
                            </li>
                            <li>
                                <a href="chartist.html">chartist</a>
                            </li>
                            <li>
                                <a href="easy-pie-chart.html">Easy Pie Chart</a>
                            </li>
                            <li>
                                <a href="sparkline.html">Sparkline</a>
                            </li>
                            <li>
                                <a href="peity-chart.html">Peity Chart</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#table_dr"><div class="pull-left"><i class="zmdi zmdi-format-size mr-20"></i><span class="right-nav-text">Tables</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
                        <ul id="table_dr" class="collapse collapse-level-1 two-col-list">
                            <li>
                                <a href="basic-table.html">Basic Table</a>
                            </li>
                            <li>
                                <a href="bootstrap-table.html">Bootstrap Table</a>
                            </li>
                            <li>
                                <a href="data-table.html">Data Table</a>
                            </li>
                            <li>
                                <a href="export-table.html"><span class="pull-right"><span class="label label-success">New</span></span>Export Table</a>
                            </li>
                            <li>
                                <a href="responsive-data-table.html"><span class="pull-right"><span class="label label-success">New</span></span>RSPV DataTable</a>
                            </li>
                            <li>
                                <a href="responsive-table.html">Responsive Table</a>
                            </li>
                            <li>
                                <a href="editable-table.html">Editable Table</a>
                            </li>
                            <li>
                                <a href="foo-table.html">Foo Table</a>
                            </li>
                            <li>
                                <a href="jsgrid-table.html">Jsgrid Table</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#icon_dr"><div class="pull-left"><i class="zmdi zmdi-iridescent mr-20"></i><span class="right-nav-text">Icons</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
                        <ul id="icon_dr" class="collapse collapse-level-1">
                            <li>
                                <a href="fontawesome.html">Fontawesome</a>
                            </li>
                            <li>
                                <a href="themify.html">Themify</a>
                            </li>
                            <li>
                                <a href="linea-icon.html">Linea</a>
                            </li>
                            <li>
                                <a href="simple-line-icons.html">Simple Line</a>
                            </li>
                            <li>
                                <a href="pe-icon-7.html">Pe-icon-7</a>
                            </li>
                            <li>
                                <a href="glyphicons.html">Glyphicons</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#maps_dr"><div class="pull-left"><i class="zmdi zmdi-map mr-20"></i><span class="right-nav-text">maps</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
                        <ul id="maps_dr" class="collapse collapse-level-1">
                            <li>
                                <a href="vector-map.html">Vector Map</a>
                            </li>
                            <li>
                                <a href="google-map.html">Google Map</a>
                            </li>
                        </ul>
                    </li>
                    <li><hr class="light-grey-hr mb-10"/></li>
                    <li class="navigation-header">
                        <span>featured</span>
                        <i class="zmdi zmdi-more"></i>
                    </li>
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#pages_dr"><div class="pull-left"><i class="zmdi zmdi-google-pages mr-20"></i><span class="right-nav-text">Special Pages</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
                        <ul id="pages_dr" class="collapse collapse-level-1 two-col-list">
                            <li>
                                <a href="blank.html">Blank Page</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" data-toggle="collapse" data-target="#auth_dr">Authantication pages<div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
                                <ul id="auth_dr" class="collapse collapse-level-2">
                                    <li>
                                        <a href="login.html">Login</a>
                                    </li>
                                    <li>
                                        <a href="signup.html">Register</a>
                                    </li>
                                    <li>
                                        <a href="forgot-password.html">Recover Password</a>
                                    </li>
                                    <li>
                                        <a href="reset-password.html">reset Password</a>
                                    </li>
                                    <li>
                                        <a href="locked.html">Lock Screen</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0);" data-toggle="collapse" data-target="#invoice_dr">Invoice<div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
                                <ul id="invoice_dr" class="collapse collapse-level-2">
                                    <li>
                                        <a href="invoice.html">Invoice</a>
                                    </li>
                                    <li>
                                        <a href="invoice-archive.html">Invoice Archive</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0);" data-toggle="collapse" data-target="#error_dr">error pages<div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
                                <ul id="error_dr" class="collapse collapse-level-2">
                                    <li>
                                        <a href="404.html">Error 404</a>
                                    </li>
                                    <li>
                                        <a href="500.html">Error 500</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="gallery.html">Gallery</a>
                            </li>
                            <li>
                                <a href="timeline.html">Timeline</a>
                            </li>
                            <li>
                                <a href="faq.html">FAQ</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="documentation.html"><div class="pull-left"><i class="zmdi zmdi-book mr-20"></i><span class="right-nav-text">documentation</span></div><div class="clearfix"></div></a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#dropdown_dr_lv1"><div class="pull-left"><i class="zmdi zmdi-filter-list mr-20"></i><span class="right-nav-text">multilevel</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
                        <ul id="dropdown_dr_lv1" class="collapse collapse-level-1">
                            <li>
                                <a href="#">Item level 1</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" data-toggle="collapse" data-target="#dropdown_dr_lv2">Dropdown level 2<div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
                                <ul id="dropdown_dr_lv2" class="collapse collapse-level-2">
                                    <li>
                                        <a href="#">Item level 2</a>
                                    </li>
                                    <li>
                                        <a href="#">Item level 2</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /Left Sidebar Menu -->

            <!-- Right Setting Menu -->
            <div class="setting-panel">
                <ul class="right-sidebar nicescroll-bar pa-0">
                    <li class="layout-switcher-wrap">
                        <ul>
                            <li>
                                <span class="layout-title">Scrollable header</span>
                                <span class="layout-switcher">
                                        <input type="checkbox" id="switch_3" class="js-switch"  data-color="#2ecd99" data-secondary-color="#dedede" data-size="small"/>
                                    </span>
                                <h6 class="mt-30 mb-15">Theme colors</h6>
                                <ul class="theme-option-wrap">
                                    <li id="theme-1" class="active-theme"><i class="zmdi zmdi-check"></i></li>
                                    <li id="theme-2"><i class="zmdi zmdi-check"></i></li>
                                    <li id="theme-3"><i class="zmdi zmdi-check"></i></li>
                                    <li id="theme-4"><i class="zmdi zmdi-check"></i></li>
                                    <li id="theme-5"><i class="zmdi zmdi-check"></i></li>
                                    <li id="theme-6"><i class="zmdi zmdi-check"></i></li>
                                </ul>
                                <h6 class="mt-30 mb-15">Primary colors</h6>
                                <div class="radio mb-5">
                                    <input type="radio" name="radio-primary-color" id="pimary-color-green" checked value="pimary-color-green">
                                    <label for="pimary-color-green"> Green </label>
                                </div>
                                <div class="radio mb-5">
                                    <input type="radio" name="radio-primary-color" id="pimary-color-red" value="pimary-color-red">
                                    <label for="pimary-color-red"> Red </label>
                                </div>
                                <div class="radio mb-5">
                                    <input type="radio" name="radio-primary-color" id="pimary-color-blue" value="pimary-color-blue">
                                    <label for="pimary-color-blue"> Blue </label>
                                </div>
                                <div class="radio mb-5">
                                    <input type="radio" name="radio-primary-color" id="pimary-color-yellow" value="pimary-color-yellow">
                                    <label for="pimary-color-yellow"> Yellow </label>
                                </div>
                                <div class="radio mb-5">
                                    <input type="radio" name="radio-primary-color" id="pimary-color-pink" value="pimary-color-pink">
                                    <label for="pimary-color-pink"> Pink </label>
                                </div>
                                <div class="radio mb-5">
                                    <input type="radio" name="radio-primary-color" id="pimary-color-orange" value="pimary-color-orange">
                                    <label for="pimary-color-orange"> Orange </label>
                                </div>
                                <div class="radio mb-5">
                                    <input type="radio" name="radio-primary-color" id="pimary-color-gold" value="pimary-color-gold">
                                    <label for="pimary-color-gold"> Gold </label>
                                </div>
                                <div class="radio mb-35">
                                    <input type="radio" name="radio-primary-color" id="pimary-color-silver" value="pimary-color-silver">
                                    <label for="pimary-color-silver"> Silver </label>
                                </div>
                                <button id="reset_setting" class="btn  btn-success btn-xs btn-outline btn-rounded mb-10">reset</button>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <button id="setting_panel_btn" class="btn btn-success btn-circle setting-panel-btn shadow-2dp"><i class="zmdi zmdi-settings"></i></button>
            <!-- /Right Setting Menu -->

            <!-- Right Sidebar Backdrop -->
            <div class="right-sidebar-backdrop"></div>
            <!-- /Right Sidebar Backdrop -->

            <!-- Main Content -->

            @include('Layout/Flash')
            @yield('content')

            <!-- /Main Content -->
        </div>
        <!-- /#wrapper -->

        <!-- JavaScript -->

        <!-- jQuery -->
        <script src="{{asset('/Back/vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="{{asset('/Back/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

        <!-- Data table JavaScript -->
        <script src="{{asset('/Back/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js')}}"></script>

        <!-- Slimscroll JavaScript -->
        <script src="{{asset('/Back/js/jquery.slimscroll.js')}}"></script>

        <!-- simpleWeather JavaScript -->
        <script src="{{asset('/Back/vendors/bower_components/moment/min/moment.min.js')}}"></script>
        <script src="{{asset('/Back/vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js')}}"></script>
        <script src="{{asset('/Back/js/simpleweather-data.js')}}"></script>

        <!-- Progressbar Animation JavaScript -->
        <script src="{{asset('/Back/vendors/bower_components/waypoints/lib/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('/Back/vendors/bower_components/jquery.counterup/jquery.counterup.min.js')}}"></script>

        <!-- Fancy Dropdown JS -->
        <script src="{{asset('/Back/js/dropdown-bootstrap-extended.js')}}"></script>

        <!-- Sparkline JavaScript -->
        <script src="{{asset('/Back/vendors/jquery.sparkline/dist/jquery.sparkline.min.js')}}"></script>

        <!-- Owl JavaScript -->
        <script src="{{asset('/Back/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js')}}"></script>

        <!-- ChartJS JavaScript -->
        <script src="{{asset('/Back/vendors/chart.js/Chart.min.js')}}"></script>

        <!-- Morris Charts JavaScript -->
        <script src="{{asset('/Back/vendors/bower_components/raphael/raphael.min.js')}}"></script>
        <script src="{{asset('/Back/vendors/bower_components/morris.js/morris.min.js')}}"></script>
        <script src="{{asset('/Back/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js')}}"></script>

        <!-- Switchery JavaScript -->
        <script src="{{asset('/Back/vendors/bower_components/switchery/dist/switchery.min.js')}}"></script>

        <!-- Init JavaScript -->
        <script src="{{asset('/Back/js/init.js')}}"></script>
        <script src="{{asset('/Back/js/dashboard-data.js')}}"></script>
    </body>

</html>
