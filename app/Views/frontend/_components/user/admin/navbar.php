<nav class="navbar p-0 fixed-top d-flex flex-row">
    <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="<?= base_url('assets/images/logo-mini.svg') ?>" alt="logo" /></a>
    </div>
    <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
        </button>
        <ul class="navbar-nav w-100">
            <li class="nav-item w-100">
                <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                    <input type="text" class="form-control" placeholder="Search products">
                </form>
            </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item d-none d-lg-block">
                <button class="nav-link btn btn-success create-new-button" data-bs-toggle="modal" data-bs-target="#modal_add_product" aria-expanded="false" style="background-color: #46c35f !important; ">+ Add Product</button>
            </li>
            <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                    <i class="mdi mdi-bell"></i>
                    <span class="count bg-danger"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                    <h6 class="p-3 mb-0">Notifications</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-calendar text-success"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject mb-1">Event today</p>
                            <p class="text-muted ellipsis mb-0"> Just a reminder that you have an event today </p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-settings text-danger"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject mb-1">Settings</p>
                            <p class="text-muted ellipsis mb-0"> Update dashboard </p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-link-variant text-warning"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject mb-1">Launch Admin</p>
                            <p class="text-muted ellipsis mb-0"> New admin wow! </p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <p class="p-3 mb-0 text-center">See all notifications</p>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown">
                    <div class="navbar-profile">
                        <img class="img-xs rounded-circle" src="<?= base_url('assets/images/faces/face15.jpg') ?>" alt="">
                        <p class="mb-0 d-none d-sm-block navbar-profile-name"><?php echo session()->get('username'); ?></p>
                        <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                    <h6 class="p-3 mb-0">Profile</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item" href="<?= site_url('admin/settings') ?>">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-settings text-success"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject mb-1">Settings</p>
                        </div>
                    </a>
                    <a href="#" class="dropdown-item preview-item" id="dark-mode">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-weather-night text-white" id="mode-icon"></i>
                                <!-- <i class="mdi mdi-weather-night text-white icon-light-mode"></i> -->
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject mb-1" id="mode-text">Dark mode</p>
                            <!-- <p class="preview-subject mb-1 light-mode">Dark mode</p> -->
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="<?= site_url('login/logout'); ?>" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-logout text-danger"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject mb-1">Log out</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <p class="p-3 mb-0 text-center">Advanced settings</p>
                </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-format-line-spacing"></span>
        </button>
    </div>
</nav>
<!-- <script>
    function toggleTheme() {
        const theme = document.getElementById("themeStylesheet");
        const currentTheme = theme.getAttribute("href");
        const mode_icon = document.getElementById("mode-icon");
        const mode_text = document.getElementById("mode-text");
        const lightTheme = "<?= base_url('assets/theme/light-theme.css') ?>"
        const darkTheme = "<?= base_url('assets/theme/dark-theme.css') ?>"

        if (currentTheme === lightTheme) {
            theme.setAttribute("href", darkTheme);
            localStorage.setItem("theme", "dark");
            localStorage.setItem("mode-text", "Dark Mode");
            localStorage.setItem("mode-icon", "mdi-weather-sunny");
        } else {
            theme.setAttribute("href", lightTheme);
            localStorage.setItem("theme", "light");
            localStorage.setItem("mode-text", "Light Mode");
            localStorage.setItem("mode-icon", "mdi-weather-night");
        }
    }

    const savedTheme = localStorage.getItem("theme");
    if (savedTheme) {
        const theme = document.getElementById("themeStylesheet");
        if (savedTheme === "dark") {
            theme.setAttribute("href", "<?= base_url('assets/theme/dark-theme.css') ?>");
            // mode_text.innerText = "Light Mode";
            // mode_icon.classList.replace("mdi-weather-night","mdi-weather-sunny");
        } else {
            theme.setAttribute("href", "<?= base_url('assets/theme/light-theme.css') ?>");
            // mode_text.innerText = "Dark Mode";
            // mode_icon.classList.replace("mdi-weather-sunny","mdi-weather-dark");
        }
    }
    const modeText = localStorage.getItem("mode-text");
    if (modeText) {
        const mode_text = document.getElementById("mode-text");
        if(modeText === "Dark Mode") {
            mode_text.innerText = "Light Mode";
            alert(modeText)
        }else{
            mode_text.innerText = "Dark Mode";
            alert(modeText)
        }
    }

    // const modeIcon = localStorage.getItem("mode-icon");
    // if(modeIcon){
    //     const mode_icon = document.getElementById("mode-icon");
    //     mode_icon.classList.replace("mdi-weather-night","mdi-weather-sunny");
    // }else{
    //     mode_icon.classList.replace("mdi-weather-night","mdi-weather-sunny");
    // }

    const themeToggle = document.getElementById("dark-mode");
    themeToggle.addEventListener("click", toggleTheme);
</script> -->
<script>
    function toggleTheme() {
        const theme = document.getElementById("themeStylesheet");
        const mode_icon = document.getElementById("mode-icon");
        const mode_text = document.getElementById("mode-text");
        const currentTheme = theme.getAttribute("href");
        const lightTheme = "<?= base_url('assets/theme/light-theme.css') ?>";
        const darkTheme = "<?= base_url('assets/theme/dark-theme.css') ?>";

        if (currentTheme === lightTheme) {
            theme.setAttribute("href", darkTheme);
            localStorage.setItem("theme", "dark");
            mode_text.innerText = "Light Mode";
            mode_icon.classList.replace("text-dark", "text-white");
            mode_icon.classList.replace("mdi-weather-night", "mdi-weather-sunny");
        } else {
            theme.setAttribute("href", lightTheme);
            localStorage.setItem("theme", "light");
            mode_text.innerText = "Dark Mode";
            mode_icon.classList.replace("text-white", "text-dark");
            mode_icon.classList.replace("mdi-weather-sunny", "mdi-weather-night");
        }
    }

    const savedTheme = localStorage.getItem("theme");
    if (savedTheme) {
        const theme = document.getElementById("themeStylesheet");
        const mode_icon = document.getElementById("mode-icon");
        const mode_text = document.getElementById("mode-text");
        const lightTheme = "<?= base_url('assets/theme/light-theme.css') ?>";
        const darkTheme = "<?= base_url('assets/theme/dark-theme.css') ?>";

        if (savedTheme === "dark") {
            theme.setAttribute("href", darkTheme);
            mode_text.innerText = "Light Mode";
            mode_icon.classList.replace("text-dark", "text-white");
            mode_icon.classList.replace("mdi-weather-night", "mdi-weather-sunny");
        } else {
            theme.setAttribute("href", lightTheme);
            mode_text.innerText = "Dark Mode";
            mode_icon.classList.replace("text-white", "text-dark");
            mode_icon.classList.replace("mdi-weather-sunny", "mdi-weather-night");
        }
    }

    const themeToggle = document.getElementById("dark-mode");
    themeToggle.addEventListener("click", toggleTheme);
</script>