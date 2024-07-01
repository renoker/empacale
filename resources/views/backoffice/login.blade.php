<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        /* Loading Spinner */
        .spinner{margin:0;width:70px;height:18px;margin:-35px 0 0 -9px;position:absolute;top:50%;left:50%;text-align:center}.spinner > div{width:18px;height:18px;background-color:#333;border-radius:100%;display:inline-block;-webkit-animation:bouncedelay 1.4s infinite ease-in-out;animation:bouncedelay 1.4s infinite ease-in-out;-webkit-animation-fill-mode:both;animation-fill-mode:both}.spinner .bounce1{-webkit-animation-delay:-.32s;animation-delay:-.32s}.spinner .bounce2{-webkit-animation-delay:-.16s;animation-delay:-.16s}@-webkit-keyframes bouncedelay{0%,80%,100%{-webkit-transform:scale(0.0)}40%{-webkit-transform:scale(1.0)}}@keyframes bouncedelay{0%,80%,100%{transform:scale(0.0);-webkit-transform:scale(0.0)}40%{transform:scale(1.0);-webkit-transform:scale(1.0)}}
    </style>
    <meta charset="UTF-8">
    <title>Qué antojo de reirme </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/bootstrap/css/bootstrap.css">

    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/helpers/animate.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/helpers/backgrounds.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/helpers/boilerplate.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/helpers/border-radius.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/helpers/grid.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/helpers/page-transitions.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/helpers/spacing.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/helpers/typography.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/helpers/utils.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/helpers/colors.css">

    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/elements/badges.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/elements/buttons.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/elements/content-box.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/elements/dashboard-box.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/elements/forms.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/elements/images.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/elements/info-box.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/elements/invoice.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/elements/loading-indicators.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/elements/menus.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/elements/panel-box.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/elements/response-messages.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/elements/responsive-tables.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/elements/ribbon.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/elements/social-box.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/elements/tables.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/elements/tile-box.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/elements/timeline.css">

    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/icons/fontawesome/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/icons/linecons/linecons.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/icons/spinnericon/spinnericon.css">

    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/widgets/accordion-ui/accordion.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/widgets/calendar/calendar.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/widgets/carousel/carousel.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/widgets/charts/justgage/justgage.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/widgets/charts/morris/morris.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/widgets/charts/piegage/piegage.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/widgets/charts/xcharts/xcharts.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/widgets/chosen/chosen.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/widgets/colorpicker/colorpicker.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/widgets/datatable/datatable.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/widgets/datepicker/datepicker.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/widgets/datepicker-ui/datepicker.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/widgets/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/widgets/dialog/dialog.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/widgets/dropdown/dropdown.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/widgets/dropzone/dropzone.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/widgets/file-input/fileinput.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/widgets/input-switch/inputswitch.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/widgets/input-switch/inputswitch-alt.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/widgets/ionrangeslider/ionrangeslider.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/widgets/jcrop/jcrop.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/widgets/jgrowl-notifications/jgrowl.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/widgets/loading-bar/loadingbar.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/widgets/maps/vector-maps/vectormaps.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/widgets/markdown/markdown.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/widgets/modal/modal.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/widgets/multi-select/multiselect.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/widgets/multi-upload/fileupload.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/widgets/nestable/nestable.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/widgets/noty-notifications/noty.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/widgets/popover/popover.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/widgets/pretty-photo/prettyphoto.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/widgets/progressbar/progressbar.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/widgets/range-slider/rangeslider.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/widgets/slidebars/slidebars.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/widgets/slider-ui/slider.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/widgets/summernote-wysiwyg/summernote-wysiwyg.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/widgets/tabs-ui/tabs.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/widgets/theme-switcher/themeswitcher.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/widgets/timepicker/timepicker.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/widgets/tocify/tocify.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/widgets/tooltip/tooltip.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/widgets/touchspin/touchspin.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/widgets/uniform/uniform.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/widgets/wizard/wizard.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/widgets/xeditable/xeditable.css">

    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/snippets/chat.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/snippets/files-box.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/snippets/login-box.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/snippets/notification-box.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/snippets/progress-box.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/snippets/todo.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/snippets/user-profile.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/snippets/mobile-navigation.css">

    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/applications/mailbox.css">

    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/themes/admin/layout.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/themes/admin/color-schemes/default.css">

    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/themes/components/default.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/themes/components/border-radius.css">

    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/helpers/responsive-elements.css">
    <link rel="stylesheet" type="text/css" href="/assets/backoffice/admin_theme/helpers/admin-responsive.css">

    <script type="text/javascript" src="/assets/backoffice/admin_theme/js-core/jquery-core.js"></script>
    <script type="text/javascript" src="/assets/backoffice/admin_theme/js-core/jquery-ui-core.js"></script>
    <script type="text/javascript" src="/assets/backoffice/admin_theme/js-core/jquery-ui-widget.js"></script>
    <script type="text/javascript" src="/assets/backoffice/admin_theme/js-core/jquery-ui-mouse.js"></script>
    <script type="text/javascript" src="/assets/backoffice/admin_theme/js-core/jquery-ui-position.js"></script>

    <script type="text/javascript" src="/assets/backoffice/admin_theme/js-core/modernizr.js"></script>
    <script type="text/javascript" src="/assets/backoffice/admin_theme/js-core/jquery-cookie.js"></script>
    <script type="text/javascript">
            $(window).load(function(){
                setTimeout(function() {
                    $('#loading').fadeOut( 400, "linear" );
                }, 300);
            });
        </script>
    <meta name="robots" content="noindex, nofollow">
</head>
<body>
    <div id="loading">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <style type="text/css">

        html,body {
            height: 100%;
            background: #fff;
        }

    </style>
    <div class="center-vertical">
        <div class="center-content row">
            <form action="{{ route('admin.login') }}" method="POST" id="login-validation" class="col-md-4 col-sm-5 col-xs-11 col-lg-3 center-margin">
                @csrf
                <div id="login-form" class="content-box bg-default">
                    <div class="content-box-wrapper pad20A">
                        <img class="mrg25B center-margin radius-all-100 display-block" src="{{ url('/assets/home/escaperoom.png') }}" alt="" width="75%">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon addon-inside bg-gray">
                                    <i class="glyph-icon icon-user"></i>
                                </span>
                                <input type="text" class="form-control" id="username" placeholder="Usuario" name="username">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon addon-inside bg-gray">
                                    <i class="glyph-icon icon-unlock-alt"></i>
                                </span>
                                <input type="password" class="form-control" id="password" placeholder="Contraseña" name="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-info">Iniciar Sesión</button>
                        </div>
                        @if ($message = Session::get('fail'))
                        <div class="alert alert-danger">
                            <p>No se encontró una cuenta asociada al usuario y contraseña que ingresaste.</p>
                        </div>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script type="text/javascript" src="/assets/backoffice/admin_theme/bootstrap/js/bootstrap.js"></script>







    <script type="text/javascript" src="/assets/backoffice/admin_theme/widgets/progressbar/progressbar.js"></script>





    <script type="text/javascript" src="/assets/backoffice/admin_theme/widgets/superclick/superclick.js"></script>
    <script type="text/javascript" src="/assets/backoffice/admin_theme/widgets/input-switch/inputswitch-alt.js"></script>
    <script type="text/javascript" src="/assets/backoffice/admin_theme/widgets/slimscroll/slimscroll.js"></script>
    <script type="text/javascript" src="/assets/backoffice/admin_theme/widgets/slidebars/slidebars.js"></script>
    <script type="text/javascript" src="/assets/backoffice/admin_theme/widgets/slidebars/slidebars-demo.js"></script>
    <script type="text/javascript" src="/assets/backoffice/admin_theme/widgets/charts/piegage/piegage.js"></script>
    <script type="text/javascript" src="/assets/backoffice/admin_theme/widgets/charts/piegage/piegage-demo.js"></script>
    <script type="text/javascript" src="/assets/backoffice/admin_theme/widgets/screenfull/screenfull.js"></script>
    <script type="text/javascript" src="/assets/backoffice/admin_theme/widgets/content-box/contentbox.js"></script>
    <script type="text/javascript" src="/assets/backoffice/admin_theme/widgets/overlay/overlay.js"></script>
    <script type="text/javascript" src="/assets/backoffice/admin_theme/js-init/widgets-init.js"></script>
    <script type="text/javascript" src="/assets/backoffice/admin_theme/themes/admin/layout.js"></script>
    <script type="text/javascript" src="/assets/backoffice/admin_theme/widgets/theme-switcher/themeswitcher.js"></script>
</body>
</html>