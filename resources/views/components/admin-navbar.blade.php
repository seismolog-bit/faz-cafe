<nav class="navbar navbar-vertical navbar-expand-lg">
    <script>
        var navbarStyle = localStorage.getItem("phoenixNavbarStyle");
      if (navbarStyle && navbarStyle !== 'transparent') {
        document.querySelector('body').classList.add(`navbar-${navbarStyle}`);
      }
    </script>
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <!-- scrollbar removed-->
        <div class="navbar-vertical-content">
            <ul class="navbar-nav flex-column" id="navbarVerticalNav">
                <li class="nav-item">
                    <span class="nav-item-wrapper">
                        <a class="nav-link active label-1" href="starter.html" role="button" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon">
                                    <span data-feather="compass"></span>
                                </span>
                                <span class="nav-link-text-wrapper">
                                    <span class="nav-link-text">Starter</span>
                                </span>
                            </div>
                        </a>
                    </span>
                </li>
                <li class="nav-item">
                    <!-- label-->
                    <p class="navbar-vertical-label">Pages</p>
                    <hr class="navbar-vertical-line" />
                    <span class="nav-item-wrapper">
                        <a class="nav-link active label-1" href="starter.html" role="button" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon">
                                    <span data-feather="compass"></span>
                                </span>
                                <span class="nav-link-text-wrapper">
                                    <span class="nav-link-text">Starter</span>
                                </span>
                            </div>
                        </a>
                    </span>
                    <!-- parent pages--><span class="nav-item-wrapper"><a class="nav-link label-1"
                            href="pages/faq.html" role="button" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                        data-feather="help-circle"></span></span><span
                                    class="nav-link-text-wrapper"><span class="nav-link-text">Faq</span></span></div>
                        </a></span><!-- parent pages--><span class="nav-item-wrapper"><a
                            class="nav-link dropdown-indicator label-1" href="#pricing" role="button"
                            data-bs-toggle="collapse" aria-expanded="false" aria-controls="pricing">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span
                                    class="nav-link-icon"><span data-feather="tag"></span></span><span
                                    class="nav-link-text">Pricing</span>
                            </div>
                        </a>
                        <div class="parent-wrapper label-1">
                            <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="pricing">
                                <p class="collapsed-nav-item-title d-none">Pricing</p>
                                <li class="nav-item"><a class="nav-link" href="pages/pricing/pricing-column.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Pricing
                                                column</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="pages/pricing/pricing-grid.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Pricing
                                                grid</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul>
                        </div>
                    </span><!-- parent pages--><span class="nav-item-wrapper"><a class="nav-link label-1"
                            href="pages/notifications.html" role="button" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                        data-feather="bell"></span></span><span class="nav-link-text-wrapper"><span
                                        class="nav-link-text">Notifications</span></span></div>
                        </a></span><!-- parent pages--><span class="nav-item-wrapper"><a class="nav-link label-1"
                            href="pages/members.html" role="button" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                        data-feather="users"></span></span><span class="nav-link-text-wrapper"><span
                                        class="nav-link-text">Members</span></span></div>
                        </a></span><!-- parent pages--><span class="nav-item-wrapper"><a
                            class="nav-link dropdown-indicator label-1" href="#errors" role="button"
                            data-bs-toggle="collapse" aria-expanded="false" aria-controls="errors">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span
                                    class="nav-link-icon"><span data-feather="alert-triangle"></span></span><span
                                    class="nav-link-text">Errors</span>
                            </div>
                        </a>
                        <div class="parent-wrapper label-1">
                            <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="errors">
                                <p class="collapsed-nav-item-title d-none">Errors</p>
                                <li class="nav-item"><a class="nav-link" href="errors/404.html" data-bs-toggle=""
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">404</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="errors/500.html" data-bs-toggle=""
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">500</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul>
                        </div>
                    </span><!-- parent pages--><span class="nav-item-wrapper"><a
                            class="nav-link dropdown-indicator label-1" href="#authentication" role="button"
                            data-bs-toggle="collapse" aria-expanded="false" aria-controls="authentication">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span
                                    class="nav-link-icon"><span data-feather="lock"></span></span><span
                                    class="nav-link-text">Authentication</span>
                            </div>
                        </a>
                        <div class="parent-wrapper label-1">
                            <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                id="authentication">
                                <p class="collapsed-nav-item-title d-none">Authentication</p>
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#simple"
                                        data-bs-toggle="collapse" aria-expanded="true" aria-controls="authentication">
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown-indicator-icon"><span
                                                    class="fas fa-caret-right"></span></div><span
                                                class="nav-link-text">Simple</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                    <div class="parent-wrapper">
                                        <ul class="nav collapse parent show" data-bs-parent="#authentication"
                                            id="simple">
                                            <li class="nav-item"><a class="nav-link"
                                                    href="authentication/simple/sign-in.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Sign in</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="authentication/simple/sign-up.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Sign up</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="authentication/simple/sign-out.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Sign out</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="authentication/simple/forgot-password.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Forgot password</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="authentication/simple/reset-password.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Reset password</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="authentication/simple/lock-screen.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Lock screen</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#split"
                                        data-bs-toggle="collapse" aria-expanded="true" aria-controls="authentication">
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown-indicator-icon"><span
                                                    class="fas fa-caret-right"></span></div><span
                                                class="nav-link-text">Split</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                    <div class="parent-wrapper">
                                        <ul class="nav collapse parent show" data-bs-parent="#authentication"
                                            id="split">
                                            <li class="nav-item"><a class="nav-link"
                                                    href="authentication/split/sign-in.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Sign in</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="authentication/split/sign-up.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Sign up</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="authentication/split/sign-out.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Sign out</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="authentication/split/forgot-password.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Forgot password</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="authentication/split/reset-password.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Reset password</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="authentication/split/lock-screen.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Lock screen</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </span><!-- parent pages--><span class="nav-item-wrapper"><a
                            class="nav-link dropdown-indicator label-1" href="#layouts" role="button"
                            data-bs-toggle="collapse" aria-expanded="false" aria-controls="layouts">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span
                                    class="nav-link-icon"><span data-feather="layout"></span></span><span
                                    class="nav-link-text">Layouts</span>
                            </div>
                        </a>
                        <div class="parent-wrapper label-1">
                            <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="layouts">
                                <p class="collapsed-nav-item-title d-none">Layouts</p>
                                <li class="nav-item"><a class="nav-link" href="../demo/vertical-sidenav.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Vertical
                                                sidenav</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="../demo/dark-mode.html" data-bs-toggle=""
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Dark
                                                mode</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="../demo/sidenav-collapse.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Sidenav
                                                collapse</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="../demo/darknav.html" data-bs-toggle=""
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text">Darknav</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="../demo/topnav-slim.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Topnav
                                                slim</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="../demo/navbar-top-slim.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Navbar top
                                                slim</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="../demo/navbar-top.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Navbar
                                                top</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul>
                        </div>
                    </span>
                </li>
                <li class="nav-item">
                    <!-- label-->
                    <p class="navbar-vertical-label">Modules</p>
                    <hr class="navbar-vertical-line" /><!-- parent pages--><span class="nav-item-wrapper"><a
                            class="nav-link dropdown-indicator label-1" href="#forms" role="button"
                            data-bs-toggle="collapse" aria-expanded="false" aria-controls="forms">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span
                                    class="nav-link-icon"><span data-feather="file-text"></span></span><span
                                    class="nav-link-text">Forms</span>
                            </div>
                        </a>
                        <div class="parent-wrapper label-1">
                            <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="forms">
                                <p class="collapsed-nav-item-title d-none">Forms</p>
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#basic"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="forms">
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown-indicator-icon"><span
                                                    class="fas fa-caret-right"></span></div><span
                                                class="nav-link-text">Basic</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                    <div class="parent-wrapper">
                                        <ul class="nav collapse parent" data-bs-parent="#forms" id="basic">
                                            <li class="nav-item"><a class="nav-link"
                                                    href="../modules/forms/basic/form-control.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Form control</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="../modules/forms/basic/input-group.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Input group</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="../modules/forms/basic/select.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Select</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="../modules/forms/basic/checks.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Checks</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="../modules/forms/basic/range.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Range</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="../modules/forms/basic/floating-labels.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Floating labels</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="../modules/forms/basic/layout.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Layout</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#advance"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="forms">
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown-indicator-icon"><span
                                                    class="fas fa-caret-right"></span></div><span
                                                class="nav-link-text">Advance</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                    <div class="parent-wrapper">
                                        <ul class="nav collapse parent" data-bs-parent="#forms" id="advance">
                                            <li class="nav-item"><a class="nav-link"
                                                    href="../modules/forms/advance/advance-select.html"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Advance select</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="../modules/forms/advance/date-picker.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Date picker</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="../modules/forms/advance/editor.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Editor</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="../modules/forms/advance/file-uploader.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">File uploader</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="../modules/forms/advance/rating.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Rating</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="../modules/forms/wizard.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Wizard</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul>
                        </div>
                    </span><!-- parent pages--><span class="nav-item-wrapper"><a
                            class="nav-link dropdown-indicator label-1" href="#icons" role="button"
                            data-bs-toggle="collapse" aria-expanded="false" aria-controls="icons">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span
                                    class="nav-link-icon"><span data-feather="grid"></span></span><span
                                    class="nav-link-text">Icons</span>
                            </div>
                        </a>
                        <div class="parent-wrapper label-1">
                            <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="icons">
                                <p class="collapsed-nav-item-title d-none">Icons</p>
                                <li class="nav-item"><a class="nav-link" href="../modules/icons/feather.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text">Feather</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="../modules/icons/font-awesome.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Font
                                                awesome</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="../modules/icons/unicons.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text">Unicons</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul>
                        </div>
                    </span><!-- parent pages--><span class="nav-item-wrapper"><a
                            class="nav-link dropdown-indicator label-1" href="#tables" role="button"
                            data-bs-toggle="collapse" aria-expanded="false" aria-controls="tables">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span
                                    class="nav-link-icon"><span data-feather="columns"></span></span><span
                                    class="nav-link-text">Tables</span>
                            </div>
                        </a>
                        <div class="parent-wrapper label-1">
                            <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="tables">
                                <p class="collapsed-nav-item-title d-none">Tables</p>
                                <li class="nav-item"><a class="nav-link" href="../modules/tables/basic-tables.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Basic
                                                tables</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="../modules/tables/advance-tables.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Advance
                                                tables</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul>
                        </div>
                    </span><!-- parent pages--><span class="nav-item-wrapper"><a
                            class="nav-link dropdown-indicator label-1" href="#components" role="button"
                            data-bs-toggle="collapse" aria-expanded="false" aria-controls="components">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span
                                    class="nav-link-icon"><span data-feather="package"></span></span><span
                                    class="nav-link-text">Components</span>
                            </div>
                        </a>
                        <div class="parent-wrapper label-1">
                            <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="components">
                                <p class="collapsed-nav-item-title d-none">Components</p>
                                <li class="nav-item"><a class="nav-link" href="../modules/components/accordion.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text">Accordion</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="../modules/components/avatar.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Avatar</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="../modules/components/alerts.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Alerts</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="../modules/components/badge.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Badge</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="../modules/components/breadcrumb.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text">Breadcrumb</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="../modules/components/button.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text">Buttons</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="../modules/components/card.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Card</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#carousel"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="components">
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown-indicator-icon"><span
                                                    class="fas fa-caret-right"></span></div><span
                                                class="nav-link-text">Carousel</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                    <div class="parent-wrapper">
                                        <ul class="nav collapse parent" data-bs-parent="#components" id="carousel">
                                            <li class="nav-item"><a class="nav-link"
                                                    href="../modules/components/carousel/bootstrap.html"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Bootstrap</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="../modules/components/carousel/swiper.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Swiper</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="../modules/components/collapse.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text">Collapse</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="../modules/components/dropdown.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text">Dropdown</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="../modules/components/list-group.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">List
                                                group</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="../modules/components/modal.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Modals</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#navs-_and_-Tabs"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="components">
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown-indicator-icon"><span
                                                    class="fas fa-caret-right"></span></div><span
                                                class="nav-link-text">Navs &amp; Tabs</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                    <div class="parent-wrapper">
                                        <ul class="nav collapse parent" data-bs-parent="#components"
                                            id="navs-_and_-Tabs">
                                            <li class="nav-item"><a class="nav-link"
                                                    href="../modules/components/navs-and-tabs/navs.html"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Navs</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="../modules/components/navs-and-tabs/navbar.html"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Navbar</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="../modules/components/navs-and-tabs/tabs.html"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Tabs</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="../modules/components/offcanvas.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text">Offcanvas</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="../modules/components/progress-bar.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Progress
                                                bar</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="../modules/components/placeholder.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text">Placeholder</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="../modules/components/pagination.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text">Pagination</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="../modules/components/popovers.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text">Popovers</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="../modules/components/scrollspy.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text">Scrollspy</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="../modules/components/spinners.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text">Spinners</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="../modules/components/toast.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Toast</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="../modules/components/tooltips.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text">Tooltips</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul>
                        </div>
                    </span><!-- parent pages--><span class="nav-item-wrapper"><a
                            class="nav-link dropdown-indicator label-1" href="#utilities" role="button"
                            data-bs-toggle="collapse" aria-expanded="false" aria-controls="utilities">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span
                                    class="nav-link-icon"><span data-feather="tool"></span></span><span
                                    class="nav-link-text">Utilities</span>
                            </div>
                        </a>
                        <div class="parent-wrapper label-1">
                            <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="utilities">
                                <p class="collapsed-nav-item-title d-none">Utilities</p>
                                <li class="nav-item"><a class="nav-link" href="../modules/utilities/background.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text">Background</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="../modules/utilities/borders.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text">Borders</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="../modules/utilities/colors.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Colors</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="../modules/utilities/display.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text">Display</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="../modules/utilities/flex.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Flex</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="../modules/utilities/float.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Float</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="../modules/utilities/interactions.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text">Interactions</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="../modules/utilities/opacity.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text">Opacity</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="../modules/utilities/overflow.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text">Overflow</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="../modules/utilities/position.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text">Position</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="../modules/utilities/shadows.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text">Shadows</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="../modules/utilities/sizing.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Sizing</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="../modules/utilities/spacing.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text">Spacing</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="../modules/utilities/typography.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text">Typography</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="../modules/utilities/vertical-align.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Vertical
                                                align</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="../modules/utilities/visibility.html"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text">Visibility</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul>
                        </div>
                    </span><!-- parent pages--><span class="nav-item-wrapper"><a
                            class="nav-link dropdown-indicator label-1" href="#multi-level" role="button"
                            data-bs-toggle="collapse" aria-expanded="false" aria-controls="multi-level">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span
                                    class="nav-link-icon"><span data-feather="layers"></span></span><span
                                    class="nav-link-text">Multi level</span>
                            </div>
                        </a>
                        <div class="parent-wrapper label-1">
                            <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="multi-level">
                                <p class="collapsed-nav-item-title d-none">Multi level</p>
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#level-two"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="multi-level">
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown-indicator-icon"><span
                                                    class="fas fa-caret-right"></span></div><span
                                                class="nav-link-text">Level two</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                    <div class="parent-wrapper">
                                        <ul class="nav collapse parent" data-bs-parent="#multi-level" id="level-two">
                                            <li class="nav-item"><a class="nav-link" href="../index-2.html#!.html"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Item 1</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="../index-2.html#!.html"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Item 2</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#level-three"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="multi-level">
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown-indicator-icon"><span
                                                    class="fas fa-caret-right"></span></div><span
                                                class="nav-link-text">Level three</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                    <div class="parent-wrapper">
                                        <ul class="nav collapse parent" data-bs-parent="#multi-level" id="level-three">
                                            <li class="nav-item"><a class="nav-link" href="../index-2.html#!.html"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Item 3</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#item-4"
                                                    data-bs-toggle="collapse" aria-expanded="false"
                                                    aria-controls="level-three">
                                                    <div class="d-flex align-items-center">
                                                        <div class="dropdown-indicator-icon"><span
                                                                class="fas fa-caret-right"></span></div><span
                                                            class="nav-link-text">Item 4</span>
                                                    </div>
                                                </a><!-- more inner pages-->
                                                <div class="parent-wrapper">
                                                    <ul class="nav collapse parent" data-bs-parent="#level-three"
                                                        id="item-4">
                                                        <li class="nav-item"><a class="nav-link"
                                                                href="../index-2.html#!.html" data-bs-toggle=""
                                                                aria-expanded="false">
                                                                <div class="d-flex align-items-center"><span
                                                                        class="nav-link-text">Item 5</span></div>
                                                            </a><!-- more inner pages-->
                                                        </li>
                                                        <li class="nav-item"><a class="nav-link"
                                                                href="../index-2.html#!.html" data-bs-toggle=""
                                                                aria-expanded="false">
                                                                <div class="d-flex align-items-center"><span
                                                                        class="nav-link-text">Item 6</span></div>
                                                            </a><!-- more inner pages-->
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#level-four"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="multi-level">
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown-indicator-icon"><span
                                                    class="fas fa-caret-right"></span></div><span
                                                class="nav-link-text">Level four</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                    <div class="parent-wrapper">
                                        <ul class="nav collapse parent" data-bs-parent="#multi-level" id="level-four">
                                            <li class="nav-item"><a class="nav-link" href="../index-2.html#!.html"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Item 6</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#item-7"
                                                    data-bs-toggle="collapse" aria-expanded="false"
                                                    aria-controls="level-four">
                                                    <div class="d-flex align-items-center">
                                                        <div class="dropdown-indicator-icon"><span
                                                                class="fas fa-caret-right"></span></div><span
                                                            class="nav-link-text">Item 7</span>
                                                    </div>
                                                </a><!-- more inner pages-->
                                                <div class="parent-wrapper">
                                                    <ul class="nav collapse parent" data-bs-parent="#level-four"
                                                        id="item-7">
                                                        <li class="nav-item"><a class="nav-link"
                                                                href="../index-2.html#!.html" data-bs-toggle=""
                                                                aria-expanded="false">
                                                                <div class="d-flex align-items-center"><span
                                                                        class="nav-link-text">Item 8</span></div>
                                                            </a><!-- more inner pages-->
                                                        </li>
                                                        <li class="nav-item"><a class="nav-link dropdown-indicator"
                                                                href="#item-9" data-bs-toggle="collapse"
                                                                aria-expanded="false" aria-controls="item-7">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="dropdown-indicator-icon"><span
                                                                            class="fas fa-caret-right"></span></div>
                                                                    <span class="nav-link-text">Item 9</span>
                                                                </div>
                                                            </a><!-- more inner pages-->
                                                            <div class="parent-wrapper">
                                                                <ul class="nav collapse parent" data-bs-parent="#item-7"
                                                                    id="item-9">
                                                                    <li class="nav-item"><a class="nav-link"
                                                                            href="../index-2.html#!.html"
                                                                            data-bs-toggle="" aria-expanded="false">
                                                                            <div class="d-flex align-items-center"><span
                                                                                    class="nav-link-text">Item 10</span>
                                                                            </div>
                                                                        </a><!-- more inner pages-->
                                                                    </li>
                                                                    <li class="nav-item"><a class="nav-link"
                                                                            href="../index-2.html#!.html"
                                                                            data-bs-toggle="" aria-expanded="false">
                                                                            <div class="d-flex align-items-center"><span
                                                                                    class="nav-link-text">Item 11</span>
                                                                            </div>
                                                                        </a><!-- more inner pages-->
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </span>
                </li>
                <li class="nav-item">
                    <!-- label-->
                    <p class="navbar-vertical-label">Documentation</p>
                    <hr class="navbar-vertical-line" /><!-- parent pages--><span class="nav-item-wrapper"><a
                            class="nav-link label-1" href="../documentation/getting-started.html" role="button"
                            data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                        data-feather="life-buoy"></span></span><span class="nav-link-text-wrapper"><span
                                        class="nav-link-text">Getting started</span></span></div>
                        </a></span><!-- parent pages--><span class="nav-item-wrapper"><a
                            class="nav-link dropdown-indicator label-1" href="#customization" role="button"
                            data-bs-toggle="collapse" aria-expanded="false" aria-controls="customization">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span
                                    class="nav-link-icon"><span data-feather="settings"></span></span><span
                                    class="nav-link-text">Customization</span>
                            </div>
                        </a>
                        <div class="parent-wrapper label-1">
                            <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="customization">
                                <p class="collapsed-nav-item-title d-none">Customization</p>
                                <li class="nav-item"><a class="nav-link"
                                        href="../documentation/customization/styling.html" data-bs-toggle=""
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text">Styling</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="../documentation/customization/plugin.html" data-bs-toggle=""
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Plugin</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul>
                        </div>
                    </span><!-- parent pages--><span class="nav-item-wrapper"><a
                            class="nav-link dropdown-indicator label-1" href="#layouts-doc" role="button"
                            data-bs-toggle="collapse" aria-expanded="false" aria-controls="layouts-doc">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span
                                    class="nav-link-icon"><span data-feather="table"></span></span><span
                                    class="nav-link-text">Layouts doc</span>
                            </div>
                        </a>
                        <div class="parent-wrapper label-1">
                            <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="layouts-doc">
                                <p class="collapsed-nav-item-title d-none">Layouts doc</p>
                                <li class="nav-item"><a class="nav-link"
                                        href="../documentation/layouts/vertical-navbar.html" data-bs-toggle=""
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Vertical
                                                navbar</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="../documentation/layouts/horizontal-navbar.html" data-bs-toggle=""
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Horizontal
                                                navbar</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul>
                        </div>
                    </span><!-- parent pages--><span class="nav-item-wrapper"><a class="nav-link label-1"
                            href="../documentation/gulp.html" role="button" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-icon font-awesome"><span
                                        class="fa-brands fa-gulp fs-0 ms-1"></span></span><span
                                    class="nav-link-text-wrapper"><span class="nav-link-text">Gulp</span></span></div>
                        </a></span><!-- parent pages--><span class="nav-item-wrapper"><a class="nav-link label-1"
                            href="../documentation/design-file.html" role="button" data-bs-toggle=""
                            aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                        data-feather="figma"></span></span><span class="nav-link-text-wrapper"><span
                                        class="nav-link-text">Design file</span></span></div>
                        </a></span><!-- parent pages--><span class="nav-item-wrapper"><a class="nav-link label-1"
                            href="../changelog.html" role="button" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                        data-feather="git-merge"></span></span><span class="nav-link-text-wrapper"><span
                                        class="nav-link-text">Changelog</span></span></div>
                        </a></span><!-- parent pages--><span class="nav-item-wrapper"><a class="nav-link label-1"
                            href="../showcase.html" role="button" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                        data-feather="monitor"></span></span><span class="nav-link-text-wrapper"><span
                                        class="nav-link-text">Showcase</span></span></div>
                        </a></span>
                </li>
            </ul>
        </div>
    </div>
    <div class="navbar-vertical-footer"><button
            class="btn navbar-vertical-toggle border-0 fw-semi-bold w-100 text-start white-space-nowrap"><span
                class="uil uil-left-arrow-to-left fs-0"></span><span class="uil uil-arrow-from-right fs-0"></span><span
                class="navbar-vertical-footer-text ms-2">Collapsed View</span></button></div>
</nav>
<nav class="navbar navbar-top navbar-expand" id="navbarDefault">
    <div class="collapse navbar-collapse justify-content-between">
        <div class="navbar-logo">
            <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse"
                aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span
                    class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            <a class="navbar-brand me-1 me-sm-3" href="../index.html">
                <div class="d-flex align-items-center">
                    <div class="d-flex align-items-center"><img src="../assets/img/icons/logo.png" alt="phoenix"
                            width="27" />
                        <p class="logo-text ms-2 d-none d-sm-block">phoenix</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="search-box d-none d-lg-block" data-list='{"valueNames":["title"]}' style="width:25rem;">
            <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input
                    class="form-control form-control-sm rounded-pill search-input fuzzy-search" type="search"
                    placeholder="Search..." aria-label="Search" />
                <span class="fas fa-search search-box-icon"></span>
            </form>
            <div class="btn-close position-absolute end-0 top-50 translate-middle cursor-pointer shadow-none"
                data-bs-dismiss="search"><button class="btn btn-link btn-close-falcon p-0" aria-label="Close"></button>
            </div>
            <div class="dropdown-menu border font-base start-0 py-0 overflow-hidden w-100">
                <div class="scrollbar list pb-3" style="max-height: 30rem;">
                    <h6 class="dropdown-header text-1000 fs--2 py-2">24 <span class="text-500">results</span></h6>
                    <hr class="text-200 my-0" />
                    <h6 class="dropdown-header text-1000 fs--1 border-bottom py-2 lh-sm">Recently Searched </h6><a
                        class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">
                            <div class="fw-normal text-1000 title"><span class="fa-solid fa-clock-rotate-left"
                                    data-fa-transform="shrink-2"></span> Store Macbook</div>
                        </div>
                    </a>
                    <a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">
                            <div class="fw-normal text-1000 title"> <span class="fa-solid fa-clock-rotate-left"
                                    data-fa-transform="shrink-2"></span> MacBook Air - 13″</div>
                        </div>
                    </a>
                    <hr class="text-200 my-0" />
                    <h6 class="dropdown-header text-1000 fs--1 border-bottom py-2 lh-sm">Products</h6><a
                        class="dropdown-item py-2 d-flex align-items-center"
                        href="../apps/e-commerce/landing/product-details.html">
                        <div class="file-thumbnail me-2"><img class="h-100 w-100 fit-cover rounded-3"
                                src="../assets/img/products/3.png" alt="" /></div>
                        <div class="flex-1">
                            <h6 class="mb-0 text-1000 title">MacBook Air - 13″</h6>
                            <p class="fs--2 mb-0 d-flex text-700"><span class="fw-medium text-600">8GB Memory - 1.6GHz -
                                    128GB Storage</span></p>
                        </div>
                    </a>
                    <a class="dropdown-item py-2 d-flex align-items-center"
                        href="../apps/e-commerce/landing/product-details.html">
                        <div class="file-thumbnail me-2"><img class="img-fluid" src="../assets/img/products/3.png"
                                alt="" /></div>
                        <div class="flex-1">
                            <h6 class="mb-0 text-1000 title">MacBook Pro - 13″</h6>
                            <p class="fs--2 mb-0 d-flex text-700"><span class="fw-medium text-600 ms-2">30 Sep at 12:30
                                    PM</span></p>
                        </div>
                    </a>
                    <hr class="text-200 my-0" />
                    <h6 class="dropdown-header text-1000 fs--1 border-bottom py-2 lh-sm">Quick Links</h6><a
                        class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">
                            <div class="fw-normal text-1000 title"><span class="fa-solid fa-link text-900"
                                    data-fa-transform="shrink-2"></span> Support MacBook House</div>
                        </div>
                    </a>
                    <a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">
                            <div class="fw-normal text-1000 title"> <span class="fa-solid fa-link text-900"
                                    data-fa-transform="shrink-2"></span> Store MacBook″</div>
                        </div>
                    </a>
                    <hr class="text-200 my-0" />
                    <h6 class="dropdown-header text-1000 fs--1 border-bottom py-2 lh-sm">Files</h6><a
                        class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">
                            <div class="fw-normal text-1000 title"><span class="fa-solid fa-file-zipper text-900"
                                    data-fa-transform="shrink-2"></span> Library MacBook folder.rar</div>
                        </div>
                    </a>
                    <a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">
                            <div class="fw-normal text-1000 title"> <span class="fa-solid fa-file-lines text-900"
                                    data-fa-transform="shrink-2"></span> Feature MacBook extensions.txt</div>
                        </div>
                    </a>
                    <a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">
                            <div class="fw-normal text-1000 title"> <span class="fa-solid fa-image text-900"
                                    data-fa-transform="shrink-2"></span> MacBook Pro_13.jpg</div>
                        </div>
                    </a>
                    <hr class="text-200 my-0" />
                    <h6 class="dropdown-header text-1000 fs--1 border-bottom py-2 lh-sm">Members</h6><a
                        class="dropdown-item py-2 d-flex align-items-center" href="pages/members.html">
                        <div class="avatar avatar-l status-online  me-2 text-900">
                            <img class="rounded-circle " src="../assets/img/team/10.png" alt="" />
                        </div>
                        <div class="flex-1">
                            <h6 class="mb-0 text-1000 title">Carry Anna</h6>
                            <p class="fs--2 mb-0 d-flex text-700">anna@technext.it</p>
                        </div>
                    </a>
                    <a class="dropdown-item py-2 d-flex align-items-center" href="pages/members.html">
                        <div class="avatar avatar-l  me-2 text-900">
                            <img class="rounded-circle " src="../assets/img/team/12.png" alt="" />
                        </div>
                        <div class="flex-1">
                            <h6 class="mb-0 text-1000 title">John Smith</h6>
                            <p class="fs--2 mb-0 d-flex text-700">smith@technext.it</p>
                        </div>
                    </a>
                    <hr class="text-200 my-0" />
                    <h6 class="dropdown-header text-1000 fs--1 border-bottom py-2 lh-sm">Related Searches</h6><a
                        class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">
                            <div class="fw-normal text-1000 title"><span class="fa-brands fa-firefox-browser text-900"
                                    data-fa-transform="shrink-2"></span> Search in the Web MacBook</div>
                        </div>
                    </a>
                    <a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">
                            <div class="fw-normal text-1000 title"> <span class="fa-brands fa-chrome text-900"
                                    data-fa-transform="shrink-2"></span> Store MacBook″</div>
                        </div>
                    </a>
                </div>
                <div class="text-center">
                    <p class="fallback fw-bold fs-1 d-none">No Result Found.</p>
                </div>
            </div>
        </div>
        <ul class="navbar-nav navbar-nav-icons flex-row">
            <li class="nav-item">
                <div class="theme-control-toggle fa-icon-wait px-2"><input
                        class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox"
                        data-theme-control="phoenixTheme" value="dark" /><label
                        class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle"
                        data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon"
                            data-feather="moon"></span></label><label
                        class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle"
                        data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon"
                            data-feather="sun"></span></label></div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false"><span class="text-700" data-feather="bell"
                        style="height:20px;width:20px;"></span></a>
                <div class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border border-300 navbar-dropdown-caret"
                    id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
                    <div class="card position-relative border-0">
                        <div class="card-header p-2">
                            <div class="d-flex justify-content-between">
                                <h5 class="text-black mb-0">Notificatons</h5><button
                                    class="btn btn-link p-0 fs--1 fw-normal" type="button">Mark all as read</button>
                            </div>
                        </div>
                        <div class="card-body p-0"></div>
                        <div class="scrollbar-overlay">
                            <div class="overflow-auto" style="height: 27rem;">
                                <div class="border-300">
                                    <div class="p-3 border-300 notification-card position-relative read border-bottom">
                                        <div
                                            class="d-flex align-items-center justify-content-between position-relative">
                                            <div class="d-flex">
                                                <div class="avatar avatar-m status-online me-3"><img
                                                        class="rounded-circle" src="../assets/img/team/30.png" alt="" />
                                                </div>
                                                <div class="me-3 flex-1">
                                                    <h4 class="fs--1 text-black">Jessie Samson</h4>
                                                    <p class="fs--1 text-1000 mb-2 mb-sm-3"><span
                                                            class='me-1'>💬</span>Mentioned you in a comment.<span
                                                            class="ms-2 text-500 fw-bold fs--2">10m</span></p>
                                                    <p class="text-800 fs--1 mb-0"><span
                                                            class="me-1 fas fa-clock"></span><span class="fw-bold">10:41
                                                            AM </span>August 7,2021</p>
                                                </div>
                                            </div>
                                            <div class="font-sans-serif d-none d-sm-block"><button
                                                    class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                                    type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
                                                        class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                                <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                        class="dropdown-item" href="#!">Mark as unread</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="p-3 border-300 notification-card position-relative unread border-bottom">
                                        <div
                                            class="d-flex align-items-center justify-content-between position-relative">
                                            <div class="d-flex">
                                                <div class="avatar avatar-m status-online me-3">
                                                    <div class="avatar-name rounded-circle"><span>J</span></div>
                                                </div>
                                                <div class="me-3 flex-1">
                                                    <h4 class="fs--1 text-black">Jane Foster</h4>
                                                    <p class="fs--1 text-1000 mb-2 mb-sm-3"><span
                                                            class='me-1'>📅</span>Created an event.<span
                                                            class="ms-2 text-500 fw-bold fs--2">20m</span></p>
                                                    <p class="text-800 fs--1 mb-0"><span
                                                            class="me-1 fas fa-clock"></span><span class="fw-bold">10:20
                                                            AM </span>August 7,2021</p>
                                                </div>
                                            </div>
                                            <div class="font-sans-serif d-none d-sm-block"><button
                                                    class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                                    type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
                                                        class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                                <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                        class="dropdown-item" href="#!">Mark as unread</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="p-3 border-300 notification-card position-relative unread border-bottom">
                                        <div
                                            class="d-flex align-items-center justify-content-between position-relative">
                                            <div class="d-flex">
                                                <div class="avatar avatar-m status-online me-3"><img
                                                        class="rounded-circle avatar-placeholder"
                                                        src="../assets/img/team/avatar.png" alt="" /></div>
                                                <div class="me-3 flex-1">
                                                    <h4 class="fs--1 text-black">Jessie Samson</h4>
                                                    <p class="fs--1 text-1000 mb-2 mb-sm-3"><span
                                                            class='me-1'>👍</span>Liked your comment.<span
                                                            class="ms-2 text-500 fw-bold fs--2">1h</span></p>
                                                    <p class="text-800 fs--1 mb-0"><span
                                                            class="me-1 fas fa-clock"></span><span class="fw-bold">9:30
                                                            AM </span>August 7,2021</p>
                                                </div>
                                            </div>
                                            <div class="font-sans-serif d-none d-sm-block"><button
                                                    class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                                    type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
                                                        class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                                <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                        class="dropdown-item" href="#!">Mark as unread</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-300">
                                    <div
                                        class="p-3 border-300 notification-card position-relative unread border-bottom">
                                        <div
                                            class="d-flex align-items-center justify-content-between position-relative">
                                            <div class="d-flex">
                                                <div class="avatar avatar-m status-online me-3"><img
                                                        class="rounded-circle" src="../assets/img/team/57.png" alt="" />
                                                </div>
                                                <div class="me-3 flex-1">
                                                    <h4 class="fs--1 text-black">Kiera Anderson</h4>
                                                    <p class="fs--1 text-1000 mb-2 mb-sm-3"><span
                                                            class='me-1 fs--2'>💬</span>Mentioned you in a comment.<span
                                                            class="ms-2 text-500 fw-bold fs--2"></span></p>
                                                    <p class="text-800 fs--1 mb-0"><span
                                                            class="me-1 fas fa-clock"></span><span class="fw-bold">9:11
                                                            AM </span>August 7,2021</p>
                                                </div>
                                            </div>
                                            <div class="font-sans-serif d-none d-sm-block"><button
                                                    class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                                    type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
                                                        class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                                <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                        class="dropdown-item" href="#!">Mark as unread</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="p-3 border-300 notification-card position-relative unread border-bottom">
                                        <div
                                            class="d-flex align-items-center justify-content-between position-relative">
                                            <div class="d-flex">
                                                <div class="avatar avatar-m status-online me-3"><img
                                                        class="rounded-circle" src="../assets/img/team/59.png" alt="" />
                                                </div>
                                                <div class="me-3 flex-1">
                                                    <h4 class="fs--1 text-black">Herman Carter</h4>
                                                    <p class="fs--1 text-1000 mb-2 mb-sm-3"><span
                                                            class='me-1'>👤</span>Tagged you in a comment.<span
                                                            class="ms-2 text-500 fw-bold fs--2"></span></p>
                                                    <p class="text-800 fs--1 mb-0"><span
                                                            class="me-1 fas fa-clock"></span><span class="fw-bold">10:58
                                                            PM </span>August 7,2021</p>
                                                </div>
                                            </div>
                                            <div class="font-sans-serif d-none d-sm-block"><button
                                                    class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                                    type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
                                                        class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                                <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                        class="dropdown-item" href="#!">Mark as unread</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 border-300 notification-card position-relative read ">
                                        <div
                                            class="d-flex align-items-center justify-content-between position-relative">
                                            <div class="d-flex">
                                                <div class="avatar avatar-m status-online me-3"><img
                                                        class="rounded-circle" src="../assets/img/team/58.png" alt="" />
                                                </div>
                                                <div class="me-3 flex-1">
                                                    <h4 class="fs--1 text-black">Benjamin Button</h4>
                                                    <p class="fs--1 text-1000 mb-2 mb-sm-3"><span
                                                            class='me-1'>👍</span>Liked your comment.<span
                                                            class="ms-2 text-500 fw-bold fs--2"></span></p>
                                                    <p class="text-800 fs--1 mb-0"><span
                                                            class="me-1 fas fa-clock"></span><span class="fw-bold">10:18
                                                            AM </span>August 7,2021</p>
                                                </div>
                                            </div>
                                            <div class="font-sans-serif d-none d-sm-block"><button
                                                    class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                                    type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
                                                        class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                                <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                        class="dropdown-item" href="#!">Mark as unread</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer p-0 border-top border-0">
                            <div class="my-2 text-center fw-bold fs--2 text-600"><a class="fw-bolder"
                                    href="pages/notifications.html">Notification history</a></div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"><svg width="16" height="16" viewbox="0 0 16 16"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
                        <circle cx="2" cy="8" r="2" fill="currentColor"></circle>
                        <circle cx="2" cy="14" r="2" fill="currentColor"></circle>
                        <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
                        <circle cx="8" cy="14" r="2" fill="currentColor"></circle>
                        <circle cx="14" cy="8" r="2" fill="currentColor"></circle>
                        <circle cx="14" cy="14" r="2" fill="currentColor"></circle>
                        <circle cx="8" cy="2" r="2" fill="currentColor"></circle>
                        <circle cx="14" cy="2" r="2" fill="currentColor"></circle>
                    </svg></a>
                <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-nide-dots shadow border border-300"
                    aria-labelledby="navbarDropdownNindeDots">
                    <div class="card bg-white position-relative border-0">
                        <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem;">
                            <div class="row text-center align-items-center gx-0 gy-0">
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                        href="#!"><img src="../assets/img/nav-icons/behance.png" alt="" width="30" />
                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Behance</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                        href="#!"><img src="../assets/img/nav-icons/google-cloud.png" alt=""
                                            width="30" />
                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Cloud</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                        href="#!"><img src="../assets/img/nav-icons/slack.png" alt="" width="30" />
                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Slack</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                        href="#!"><img src="../assets/img/nav-icons/gitlab.png" alt="" width="30" />
                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Gitlab</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                        href="#!"><img src="../assets/img/nav-icons/bitbucket.png" alt="" width="30" />
                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">BitBucket</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                        href="#!"><img src="../assets/img/nav-icons/google-drive.png" alt=""
                                            width="30" />
                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Drive</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                        href="#!"><img src="../assets/img/nav-icons/trello.png" alt="" width="30" />
                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Trello</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                        href="#!"><img src="../assets/img/nav-icons/figma.png" alt="" width="20" />
                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Figma</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                        href="#!"><img src="../assets/img/nav-icons/twitter.png" alt="" width="30" />
                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Twitter</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                        href="#!"><img src="../assets/img/nav-icons/pinterest.png" alt="" width="30" />
                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Pinterest</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                        href="#!"><img src="../assets/img/nav-icons/ln.png" alt="" width="30" />
                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Linkedin</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                        href="#!"><img src="../assets/img/nav-icons/google-maps.png" alt=""
                                            width="30" />
                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Maps</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                        href="#!"><img src="../assets/img/nav-icons/google-photos.png" alt=""
                                            width="30" />
                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Photos</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                        href="#!"><img src="../assets/img/nav-icons/spotify.png" alt="" width="30" />
                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Spotify</p>
                                    </a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-l ">
                        <img class="rounded-circle " src="../assets/img/team/57.png" alt="" />
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border border-300"
                    aria-labelledby="navbarDropdownUser">
                    <div class="card position-relative border-0">
                        <div class="card-body p-0">
                            <div class="text-center pt-4 pb-3">
                                <div class="avatar avatar-xl ">
                                    <img class="rounded-circle " src="../assets/img/team/57.png" alt="" />
                                </div>
                                <h6 class="mt-2 text-black">Jerry Seinfield</h6>
                            </div>
                            <div class="mb-3 mx-3"><input class="form-control form-control-sm" id="statusUpdateInput"
                                    type="text" placeholder="Update your status" /></div>
                        </div>
                        <div class="overflow-auto scrollbar" style="height: 10rem;">
                            <ul class="nav d-flex flex-column mb-2 pb-1">
                                <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                                            data-feather="user"></span>Profile</a></li>
                                <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-900"
                                            data-feather="pie-chart"></span>Dashboard</a></li>
                                <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                                            data-feather="lock"></span>Posts &amp; Activity</a></li>
                                <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                                            data-feather="settings"></span>Settings &amp; Privacy </a></li>
                                <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                                            data-feather="help-circle"></span>Help Center</a></li>
                                <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                                            data-feather="globe"></span>Language</a></li>
                            </ul>
                        </div>
                        <div class="card-footer p-0 border-top">
                            <ul class="nav d-flex flex-column my-3">
                                <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                                            data-feather="user-plus"></span>Add another account</a></li>
                            </ul>
                            <hr />
                            <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!">
                                    <span class="me-2" data-feather="log-out"> </span>Sign out</a></div>
                            <div class="my-2 text-center fw-bold fs--2 text-600"><a class="text-600 me-1"
                                    href="#!">Privacy policy</a>&bull;<a class="text-600 mx-1"
                                    href="#!">Terms</a>&bull;<a class="text-600 ms-1" href="#!">Cookies</a></div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>