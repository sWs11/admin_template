<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" navigation-header">
                <span>General</span><i class=" ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="General"></i>
            </li>
            <li class=" nav-item">
                <a href="index.html"><i class="ft-home"></i><span class="menu-title" data-i18n="">Pages 1...</span><span class="badge badge badge-primary badge-pill float-right mr-2">3</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{ route('page1') }}">Page 1</a></li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="ft-monitor"></i><span class="menu-title" data-i18n="">Pages 2...4</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="#">Pages 2...3</a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="{{ route('page2') }}">Page 2</a></li>
                            <li><a class="menu-item" href="{{ route('page3') }}">Page 3</a></li>
                        </ul>
                    </li>
                    <li><a class="menu-item" href="#">Pages 4...</a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="{{ route('page4') }}">Page 4</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class=" navigation-header">
                <span>Apps</span><i class=" ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="Apps"></i>
            </li>
            <li class=" nav-item"><a href="{{ route('page4') }}"><i class="ft-mail"></i><span class="menu-title" data-i18n="">Page 4</span></a></li>

            <li class=" navigation-header">
                <span>Components</span><i class=" ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="Components"></i>
            </li>


            <li class=" nav-item">
                <a href="https://pixinvent.com/stack-bootstrap-admin-template/documentation"><i class="ft-folder"></i>
                    <span class="menu-title" data-i18n="">Documentation</span>
                </a>
            </li>
        </ul>
    </div>
</div>
