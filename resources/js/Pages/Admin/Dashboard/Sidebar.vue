<template>
    <nav class="navbar show navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 navbar-light bg-white border-bottom border-bottom-lg-0 border-end-lg" id="navbarVertical">
        <div class="container-fluid">
            <!-- Toggler -->
            <button class="navbar-toggler ms-n2" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Brand -->
            <router-link class="navbar-brand py-lg-2 mb-lg-5 px-lg-6 me-0" to="/auth/home">
                <img src="https://preview.webpixels.io/web/img/logos/clever-primary.svg" alt="...">
            </router-link>

            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidebarCollapse">
                <!-- Navigation -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <router-link class="nav-link" to="/auth/home">
                            <i class="bi bi-house"></i> Dashboard
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link" to="/auth/widow">
                            <i class="bi bi-chat"></i> Widows
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link" to="/auth/shopkeeper">
                            <i class="bi bi-bookmarks"></i> Shopkepper
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link" to="/auth/foods">
                            <i class="bi bi-people"></i> Foods
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link" to="/auth/report">
                            <i class="bi bi-people"></i> Reports
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link" to="/auth/package">
                            <i class="bi bi-people"></i> Packages
                        </router-link>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-people"></i> Settings
                        </a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-box-arrow-left"></i> Logout
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</template>

<script>
export default {

}
</script>

<style scoped>

@import url(./styles/style.css);
/* Bootstrap Icons */
@import url("https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.4.0/font/bootstrap-icons.min.css");
</style>
