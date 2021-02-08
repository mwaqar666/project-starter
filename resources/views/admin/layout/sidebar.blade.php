<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button">
            <i class="zmdi zmdi-menu"></i>
        </button>
        <a href="{{ route('admin.dashboard.index') }}">
            <img src="{{ asset('assets/admin/images/logo.svg') }}" width="25" alt="Aero">
            <span class="m-l-10">Aero</span>
        </a>
    </div>
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <div class="image">
                        <a href="javascript:void(0)">
                            <img src="{{ asset('assets/admin/images/profile_av.jpg') }}" alt="User">
                        </a>
                    </div>
                    <div class="detail">
                        <h4>Michael</h4>
                        <small>Super Admin</small>
                    </div>
                </div>
            </li>
            <li @if (strpos(request()->route()->getName(), 'admin.dashboard.index') !== false) class="active open" @endif>
                <a href="{{ route('admin.dashboard.index') }}">
                    <i class="zmdi zmdi-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li @if (strpos(request()->route()->getName(), 'admin.profile.my-profile') !== false) class="active open" @endif>
                <a href="{{ route('admin.profile.my-profile') }}">
                    <i class="zmdi zmdi-account"></i>
                    <span>My Profile</span>
                </a>
            </li>
            <li @if (strpos(request()->route()->getName(), 'admin.app') !== false) class="active open" @endif>
                <a href="javascript:void(0)" class="menu-toggle">
                    <i class="zmdi zmdi-apps"></i>
                    <span>App</span>
                </a>
                <ul class="ml-menu">
                    <li @if (strpos(request()->route()->getName(), 'admin.app.inbox') !== false) class="active" @endif>
                        <a href="{{ route('admin.app.inbox') }}">Inbox</a>
                    </li>
                    <li @if (strpos(request()->route()->getName(), 'admin.app.chat') !== false) class="active" @endif>
                        <a href="{{ route('admin.app.chat') }}">Chat</a>
                    </li>
                    <li @if (strpos(request()->route()->getName(), 'admin.app.calendar') !== false) class="active" @endif>
                        <a href="{{ route('admin.app.calendar') }}">Calendar</a>
                    </li>
                    <li @if (strpos(request()->route()->getName(), 'admin.app.contact-list') !== false) class="active" @endif>
                        <a href="{{ route('admin.app.contact-list') }}">Contact list</a>
                    </li>
                </ul>
            </li>
            <li @if (strpos(request()->route()->getName(), 'admin.project') !== false) class="active open" @endif>
                <a href="javascript:void(0)" class="menu-toggle">
                    <i class="zmdi zmdi-assignment"></i>
                    <span>Project</span>
                </a>
                <ul class="ml-menu">
                    <li @if (strpos(request()->route()->getName(), 'admin.project.project-list') !== false) class="active" @endif>
                        <a href="{{ route('admin.project.project-list') }}">Project List</a>
                    </li>
                    <li @if (strpos(request()->route()->getName(), 'admin.project.taskboard') !== false) class="active" @endif>
                        <a href="{{ route('admin.project.taskboard') }}">Taskboard</a>
                    </li>
                    <li @if (strpos(request()->route()->getName(), 'admin.project.ticket-list') !== false) class="active" @endif>
                        <a href="{{ route('admin.project.ticket-list') }}">Ticket List</a>
                    </li>
                    <li @if (strpos(request()->route()->getName(), 'admin.project.ticket-detail') !== false) class="active" @endif>
                        <a href="{{ route('admin.project.ticket-detail') }}">Ticket Detail</a>
                    </li>
                </ul>
            </li>
            <li @if (strpos(request()->route()->getName(), 'admin.file-manager') !== false) class="active open" @endif>
                <a href="javascript:void(0)" class="menu-toggle">
                    <i class="zmdi zmdi-folder"></i>
                    <span>File Manager</span>
                </a>
                <ul class="ml-menu">
                    <li @if (strpos(request()->route()->getName(), 'admin.file-manager.all') !== false) class="active" @endif>
                        <a href="{{ route('admin.file-manager.all') }}">All</a>
                    </li>
                    <li @if (strpos(request()->route()->getName(), 'admin.file-manager.documents') !== false) class="active" @endif>
                        <a href="{{ route('admin.file-manager.documents') }}">Documents</a>
                    </li>
                    <li @if (strpos(request()->route()->getName(), 'admin.file-manager.media') !== false) class="active" @endif>
                        <a href="{{ route('admin.file-manager.media') }}">Media</a>
                    </li>
                    <li @if (strpos(request()->route()->getName(), 'admin.file-manager.image') !== false) class="active" @endif>
                        <a href="{{ route('admin.file-manager.image') }}">Images</a>
                    </li>
                </ul>
            </li>
            <li @if (strpos(request()->route()->getName(), 'admin.blog') !== false) class="active open" @endif>
                <a href="javascript:void(0)" class="menu-toggle">
                    <i class="zmdi zmdi-blogger"></i>
                    <span>Blog</span>
                </a>
                <ul class="ml-menu">
                    <li @if (strpos(request()->route()->getName(), 'admin.blog.dashboard') !== false) class="active" @endif>
                        <a href="{{ route('admin.blog.dashboard') }}">Dashboard</a>
                    </li>
                    <li @if (strpos(request()->route()->getName(), 'admin.blog.new-post') !== false) class="active" @endif>
                        <a href="{{ route('admin.blog.new-post') }}">Blog Post</a>
                    </li>
                    <li @if (strpos(request()->route()->getName(), 'admin.blog.list') !== false) class="active" @endif>
                        <a href="{{ route('admin.blog.list') }}">List View</a>
                    </li>
                    <li @if (strpos(request()->route()->getName(), 'admin.blog.grid') !== false) class="active" @endif>
                        <a href="{{ route('admin.blog.grid') }}">Grid View</a>
                    </li>
                    <li @if (strpos(request()->route()->getName(), 'admin.blog.detail') !== false) class="active" @endif>
                        <a href="{{ route('admin.blog.detail') }}">Blog Details</a>
                    </li>
                </ul>
            </li>
            <li @if (strpos(request()->route()->getName(), 'admin.ecommerce') !== false) class="active open" @endif>
                <a href="javascript:void(0)" class="menu-toggle">
                    <i class="zmdi zmdi-shopping-cart"></i>
                    <span>Ecommerce</span>
                </a>
                <ul class="ml-menu">
                    <li @if (strpos(request()->route()->getName(), 'admin.ecommerce.dashboard') !== false) class="active" @endif>
                        <a href="{{ route('admin.ecommerce.dashboard') }}">Dashboard</a>
                    </li>
                    <li @if (strpos(request()->route()->getName(), 'admin.ecommerce.product') !== false) class="active" @endif>
                        <a href="{{ route('admin.ecommerce.product') }}">Product</a>
                    </li>
                    <li @if (strpos(request()->route()->getName(), 'admin.ecommerce.product-list') !== false) class="active" @endif>
                        <a href="{{ route('admin.ecommerce.product-list') }}">Product List</a>
                    </li>
                    <li @if (strpos(request()->route()->getName(), 'admin.ecommerce.product-detail') !== false) class="active" @endif>
                        <a href="{{ route('admin.ecommerce.product-detail') }}">Product Details</a>
                    </li>
                </ul>
            </li>
            <li @if (strpos(request()->route()->getName(), 'admin.components') !== false) class="active open" @endif>
                <a href="javascript:void(0)" class="menu-toggle">
                    <i class="zmdi zmdi-swap-alt"></i>
                    <span>Components</span>
                </a>
                <ul class="ml-menu">
                    <li @if (strpos(request()->route()->getName(), 'admin.components.ui') !== false) class="active" @endif>
                        <a href="{{ route('admin.components.ui') }}">Aero UI KIT</a>
                    </li>
                    <li @if (strpos(request()->route()->getName(), 'admin.components.alerts') !== false) class="active" @endif>
                        <a href="{{ route('admin.components.alerts') }}">Alerts</a>
                    </li>
                    <li @if (strpos(request()->route()->getName(), 'admin.components.collapse') !== false) class="active" @endif>
                        <a href="{{ route('admin.components.collapse') }}">Collapse</a>
                    </li>
                    <li @if (strpos(request()->route()->getName(), 'admin.components.colors') !== false) class="active" @endif>
                        <a href="{{ route('admin.components.colors') }}">Colors</a>
                    </li>
                    <li @if (strpos(request()->route()->getName(), 'admin.components.dialogs') !== false) class="active" @endif>
                        <a href="{{ route('admin.components.dialogs') }}">Dialogs</a>
                    </li>
                    <li @if (strpos(request()->route()->getName(), 'admin.components.list') !== false) class="active" @endif>
                        <a href="{{ route('admin.components.list') }}">List Group</a>
                    </li>
                    <li @if (strpos(request()->route()->getName(), 'admin.components.media') !== false) class="active" @endif>
                        <a href="{{ route('admin.components.media') }}">Media Object</a>
                    </li>
                    <li @if (strpos(request()->route()->getName(), 'admin.components.modals') !== false) class="active" @endif>
                        <a href="{{ route('admin.components.modals') }}">Modals</a>
                    </li>
                    <li @if (strpos(request()->route()->getName(), 'admin.components.notifications') !== false) class="active" @endif>
                        <a href="{{ route('admin.components.notifications') }}">Notifications</a>
                    </li>
                    <li @if (strpos(request()->route()->getName(), 'admin.components.progressbars') !== false) class="active" @endif>
                        <a href="{{ route('admin.components.progressbars') }}">Progress Bars</a>
                    </li>
                    <li @if (strpos(request()->route()->getName(), 'admin.components.range') !== false) class="active" @endif>
                        <a href="{{ route('admin.components.range') }}">Range Sliders</a>
                    </li>
                    <li @if (strpos(request()->route()->getName(), 'admin.components.sortable') !== false) class="active" @endif>
                        <a href="{{ route('admin.components.sortable') }}">Sortable & Nestable</a>
                    </li>
                    <li @if (strpos(request()->route()->getName(), 'admin.components.tabs') !== false) class="active" @endif>
                        <a href="{{ route('admin.components.tabs') }}">Tabs</a>
                    </li>
                    <li @if (strpos(request()->route()->getName(), 'admin.components.waves') !== false) class="active" @endif>
                        <a href="{{ route('admin.components.waves') }}">Waves</a>
                    </li>
                </ul>
            </li>
            <li @if (strpos(request()->route()->getName(), 'admin.icons') !== false) class="active open" @endif>
                <a href="javascript:void(0)" class="menu-toggle">
                    <i class="zmdi zmdi-flower"></i>
                    <span>Font Icons</span>
                </a>
                <ul class="ml-menu">
                    <li @if (strpos(request()->route()->getName(), 'admin.icons.material') !== false) class="active" @endif>
                        <a href="{{ route('admin.icons.material') }}">Material</a>
                    </li>
                    <li @if (strpos(request()->route()->getName(), 'admin.icons.themify') !== false) class="active" @endif>
                        <a href="{{ route('admin.icons.themify') }}">Themify</a>
                    </li>
                    <li @if (strpos(request()->route()->getName(), 'admin.icons.weather') !== false) class="active" @endif>
                        <a href="{{ route('admin.icons.weather') }}">Weather</a>
                    </li>
                </ul>
            </li>
            <li @if (strpos(request()->route()->getName(), 'admin.form') !== false) class="active open" @endif>
                <a href="javascript:void(0)" class="menu-toggle">
                    <i class="zmdi zmdi-assignment"></i>
                    <span>Forms</span>
                </a>
                <ul class="ml-menu">
                    <li @if (strpos(request()->route()->getName(), 'admin.form.basic') !== false) class="active" @endif>
                        <a href="{{ route('admin.form.basic') }}">Basic Form</a>
                    </li>
                    <li @if (strpos(request()->route()->getName(), 'admin.form.advanced') !== false) class="active" @endif>
                        <a href="{{ route('admin.form.advanced') }}">Advanced Form</a>
                    </li>
                    <li @if (strpos(request()->route()->getName(), 'admin.form.examples') !== false) class="active" @endif>
                        <a href="{{ route('admin.form.examples') }}">Form Examples</a>
                    </li>
                    <li @if (strpos(request()->route()->getName(), 'admin.form.validation') !== false) class="active" @endif>
                        <a href="{{ route('admin.form.validation') }}">Form Validation</a>
                    </li>
                    <li @if (strpos(request()->route()->getName(), 'admin.form.wizard') !== false) class="active" @endif>
                        <a href="{{ route('admin.form.wizard') }}">Form Wizard</a>
                    </li>
                    <li @if (strpos(request()->route()->getName(), 'admin.form.editors') !== false) class="active" @endif>
                        <a href="{{ route('admin.form.editors') }}">Editors</a>
                    </li>
                    <li @if (strpos(request()->route()->getName(), 'admin.form.upload') !== false) class="active" @endif>
                        <a href="{{ route('admin.form.upload') }}">File Upload</a>
                    </li>
                    <li @if (strpos(request()->route()->getName(), 'admin.form.summernote') !== false) class="active" @endif>
                        <a href="{{ route('admin.form.summernote') }}">Summernote</a>
                    </li>
                </ul>
            </li>
            <li @if (strpos(request()->route()->getName(), 'admin.tables') !== false) class="active open" @endif>
                <a href="javascript:void(0)" class="menu-toggle">
                    <i class="zmdi zmdi-grid"></i>
                    <span>Tables</span>
                </a>
                <ul class="ml-menu">
                    <li @if (strpos(request()->route()->getName(), 'admin.tables.normal') !== false) class="active" @endif>
                        <a href="{{ route('admin.tables.normal') }}">Normal Tables</a>
                    </li>
                    <li @if (strpos(request()->route()->getName(), 'admin.tables.datatable') !== false) class="active" @endif>
                        <a href="{{ route('admin.tables.datatable') }}">Jquery Datatables</a>
                    </li>
                    <li @if (strpos(request()->route()->getName(), 'admin.tables.editable') !== false) class="active" @endif>
                        <a href="{{ route('admin.tables.editable') }}">Editable Tables</a>
                    </li>
                    <li @if (strpos(request()->route()->getName(), 'admin.tables.footable') !== false) class="active" @endif>
                        <a href="{{ route('admin.tables.footable') }}">Foo Tables</a>
                    </li>
                    <li @if (strpos(request()->route()->getName(), 'admin.tables.color') !== false) class="active" @endif>
                        <a href="{{ route('admin.tables.color') }}">Tables Color</a>
                    </li>
                </ul>
            </li>
            <li @if (strpos(request()->route()->getName(), 'admin.chart') !== false) class="active open" @endif>
                <a href="javascript:void(0)" class="menu-toggle">
                    <i class="zmdi zmdi-chart"></i>
                    <span>Charts</span>
                </a>
                <ul class="ml-menu">
                    <li @if (strpos(request()->route()->getName(), 'admin.chart.echarts') !== false) class="active" @endif>
                        <a href="{{ route('admin.chart.echarts') }}">E Chart</a>
                    </li>
                    <li @if (strpos(request()->route()->getName(), 'admin.chart.c3') !== false) class="active" @endif>
                        <a href="{{ route('admin.chart.c3') }}">C3 Chart</a>
                    </li>
                    <li @if (strpos(request()->route()->getName(), 'admin.chart.morris') !== false) class="active" @endif>
                        <a href="{{ route('admin.chart.morris') }}">Morris</a>
                    </li>
                    <li @if (strpos(request()->route()->getName(), 'admin.chart.flot') !== false) class="active" @endif>
                        <a href="{{ route('admin.chart.flot') }}">Flot</a>
                    </li>
                    <li @if (strpos(request()->route()->getName(), 'admin.chart.chartjs') !== false) class="active" @endif>
                        <a href="{{ route('admin.chart.chartjs') }}">ChartJS</a>
                    </li>
                    <li @if (strpos(request()->route()->getName(), 'admin.chart.sparkline') !== false) class="active" @endif>
                        <a href="{{ route('admin.chart.sparkline') }}">Sparkline</a>
                    </li>
                    <li @if (strpos(request()->route()->getName(), 'admin.chart.knob') !== false) class="active" @endif>
                        <a href="{{ route('admin.chart.knob') }}">Jquery Knob</a>
                    </li>
                </ul>
            </li>
            <li @if (strpos(request()->route()->getName(), 'admin.widgets') !== false) class="active open" @endif>
                <a href="javascript:void(0)" class="menu-toggle">
                    <i class="zmdi zmdi-delicious"></i>
                    <span>Widgets</span>
                </a>
                <ul class="ml-menu">
                    <li @if (strpos(request()->route()->getName(), 'admin.widgets.app') !== false) class="active" @endif>
                        <a href="{{ route('admin.widgets.app') }}">Apps Widgets</a>
                    </li>
                    <li @if (strpos(request()->route()->getName(), 'admin.widgets.data') !== false) class="active" @endif>
                        <a href="{{ route('admin.widgets.data') }}">Data Widgets</a>
                    </li>
                </ul>
            </li>
            <li @if (strpos(request()->route()->getName(), 'admin.authentication') !== false) class="active open" @endif>
                <a href="javascript:void(0)" class="menu-toggle">
                    <i class="zmdi zmdi-lock"></i>
                    <span>Authentication</span>
                </a>
                <ul class="ml-menu">
                    <li @if (strpos(request()->route()->getName(), 'admin.authentication.login') !== false) class="active" @endif>
                        <a href="{{ route('admin.authentication.login') }}">Sign In</a>
                    </li>
                    <li @if (strpos(request()->route()->getName(), 'admin.authentication.register') !== false) class="active" @endif>
                        <a href="{{ route('admin.authentication.register') }}">Sign Up</a>
                    </li>
                    <li @if (strpos(request()->route()->getName(), 'admin.authentication.lockscreen') !== false) class="active" @endif>
                        <a href="{{ route('admin.authentication.lockscreen') }}">Locked Screen</a>
                    </li>
                    <li @if (strpos(request()->route()->getName(), 'admin.authentication.forgot') !== false) class="active" @endif>
                        <a href="{{ route('admin.authentication.forgot') }}">Forgot Password</a>
                    </li>
                    <li @if (strpos(request()->route()->getName(), 'admin.authentication.page404') !== false) class="active" @endif>
                        <a href="{{ route('admin.authentication.page404') }}">Page 404</a>
                    </li>
                    <li @if (strpos(request()->route()->getName(), 'admin.authentication.page500') !== false) class="active" @endif>
                        <a href="{{ route('admin.authentication.page500') }}">Page 500</a>
                    </li>
                    <li @if (strpos(request()->route()->getName(), 'admin.authentication.offline') !== false) class="active" @endif>
                        <a href="{{ route('admin.authentication.offline') }}">Page Offline</a>
                    </li>
                </ul>
            </li>
            <li @if (strpos(request()->route()->getName(), 'admin.pages') !== false) class="active open" @endif>
                <a href="javascript:void(0)" class="menu-toggle">
                    <i class="zmdi zmdi-copy"></i>
                    <span>Sample Pages</span>
                </a>
                <ul class="ml-menu">
                    <li @if (strpos(request()->route()->getName(), 'admin.pages.blank') !== false) class="active" @endif>
                        <a href="{{ route('admin.pages.blank') }}">Blank Page</a>
                    </li>
                    <li @if (strpos(request()->route()->getName(), 'admin.pages.gallery') !== false) class="active" @endif>
                        <a href="{{ route('admin.pages.gallery') }}">Image Gallery</a>
                    </li>
                    <li @if (strpos(request()->route()->getName(), 'admin.pages.invoices1') !== false) class="active" @endif>
                        <a href="{{ route('admin.pages.invoices1') }}">Invoices</a>
                    </li>
                    <li @if (strpos(request()->route()->getName(), 'admin.pages.invoices2') !== false) class="active" @endif>
                        <a href="{{ route('admin.pages.invoices2') }}">Invoices List</a>
                    </li>
                    <li @if (strpos(request()->route()->getName(), 'admin.pages.pricing') !== false) class="active" @endif>
                        <a href="{{ route('admin.pages.pricing') }}">Pricing</a>
                    </li>
                    <li @if (strpos(request()->route()->getName(), 'admin.pages.profile') !== false) class="active" @endif>
                        <a href="{{ route('admin.pages.profile') }}">Profile</a>
                    </li>
                    <li @if (strpos(request()->route()->getName(), 'admin.pages.search') !== false) class="active" @endif>
                        <a href="{{ route('admin.pages.search') }}">Search Results</a>
                    </li>
                    <li @if (strpos(request()->route()->getName(), 'admin.pages.timeline') !== false) class="active" @endif>
                        <a href="{{ route('admin.pages.timeline') }}">Timeline</a>
                    </li>
                </ul>
            </li>
            <li @if (strpos(request()->route()->getName(), 'admin.map') !== false) class="active open" @endif>
                <a href="javascript:void(0)" class="menu-toggle">
                    <i class="zmdi zmdi-map"></i>
                    <span>Maps</span>
                </a>
                <ul class="ml-menu">
                    <li @if (strpos(request()->route()->getName(), 'admin.map.yandex') !== false) class="active" @endif>
                        <a href="{{ route('admin.map.yandex') }}">YandexMap</a>
                    </li>
                    <li @if (strpos(request()->route()->getName(), 'admin.map.jvector') !== false) class="active" @endif>
                        <a href="{{ route('admin.map.jvector') }}">jVectorMap</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</aside>
