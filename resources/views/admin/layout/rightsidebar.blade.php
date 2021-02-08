<aside id="rightsidebar" class="right-sidebar">
    <ul class="nav nav-tabs sm">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#setting">
                <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="setting">
            <div class="slim_scroll">
                <div class="card">
                    <h6>Theme Option</h6>
                    <div class="light_dark">
                        <div class="radio">
                            <input type="radio" name="main_theme" id="lighttheme" value="theme-light" onchange="applyTheme('Main', this.getAttribute('value'))">
                            <label for="lighttheme">Light Mode</label>
                        </div>
                        <div class="radio mb-0">
                            <input type="radio" name="main_theme" id="darktheme" value="theme-dark" onchange="applyTheme('Main', this.getAttribute('value'))">
                            <label for="darktheme">Dark Mode</label>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <h6>Color Skins</h6>
                    <ul class="choose-skin list-unstyled">
                        <li data-theme-type="secondary-theme" data-theme="theme-purple" onclick="applyTheme('Secondary', this.getAttribute('data-theme'))">
                            <div class="purple"></div>
                        </li>
                        <li data-theme-type="secondary-theme" data-theme="theme-blue" onclick="applyTheme('Secondary', this.getAttribute('data-theme'))">
                            <div class="blue"></div>
                        </li>
                        <li data-theme-type="secondary-theme" data-theme="theme-cyan" onclick="applyTheme('Secondary', this.getAttribute('data-theme'))">
                            <div class="cyan"></div>
                        </li>
                        <li data-theme-type="secondary-theme" data-theme="theme-green" onclick="applyTheme('Secondary', this.getAttribute('data-theme'))">
                            <div class="green"></div>
                        </li>
                        <li data-theme-type="secondary-theme" data-theme="theme-orange" onclick="applyTheme('Secondary', this.getAttribute('data-theme'))">
                            <div class="orange"></div>
                        </li>
                        <li data-theme-type="secondary-theme" data-theme="theme-blush" onclick="applyTheme('Secondary', this.getAttribute('data-theme'))">
                            <div class="blush"></div>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <h6>General Settings</h6>
                    <ul class="setting-list list-unstyled">
                        <li>
                            <div class="checkbox rtl_support">
                                <input id="checkbox1" type="checkbox" value="rtl_view">
                                <label for="checkbox1">RTL Version</label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox ms_bar">
                                <input id="checkbox2" type="checkbox" value="mini_active">
                                <label for="checkbox2">Mini Sidebar</label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</aside>
