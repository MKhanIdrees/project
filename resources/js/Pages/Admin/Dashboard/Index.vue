<template>
    <!-- Dashboard -->
    <div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">
        <!-- Vertical Navbar -->
        <SidebarView />
        <!-- Main content -->
        <div class="h-screen flex-grow-1 overflow-y-lg-auto">
            <!-- Header -->
            <header class="bg-surface-primary border-bottom pt-6 pb-5">
                <div class="container-fluid">
                    <div class="mb-npx">
                        <div class="row align-items-center">
                            <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                                <!-- Title -->
                                <h1 class="h2 mb-0 ls-tight">Dashboard</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Main -->
            <main class="py-6 bg-surface-secondary">
                <div class="container-fluid">
                    <!-- Card stats -->
                    <div class="row g-6 mb-6">
                        <div class="col-xl-3 col-sm-6 col-12">
                            <div class="card shadow border-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <span
                                                class="h6 font-semibold text-muted text-sm d-block mb-2"
                                                >Budget</span
                                            >
                                            <span class="h3 font-bold mb-0"
                                                >$750.90</span
                                            >
                                        </div>
                                        <div class="col-auto">
                                            <div
                                                class="icon icon-shape bg-tertiary text-white text-lg rounded-circle"
                                            >
                                                <i
                                                    class="bi bi-credit-card"
                                                ></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-2 mb-0 text-sm">
                                        <span
                                            class="badge badge-pill bg-soft-success text-success me-2"
                                        >
                                            <i class="bi bi-arrow-up me-1"></i
                                            >13%
                                        </span>
                                        <span
                                            class="text-nowrap text-xs text-muted"
                                            >Since last month</span
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-12">
                            <div class="card shadow border-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <span
                                                class="h6 font-semibold text-muted text-sm d-block mb-2"
                                                >New projects</span
                                            >
                                            <span class="h3 font-bold mb-0"
                                                >215</span
                                            >
                                        </div>
                                        <div class="col-auto">
                                            <div
                                                class="icon icon-shape bg-primary text-white text-lg rounded-circle"
                                            >
                                                <i class="bi bi-people"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-2 mb-0 text-sm">
                                        <span
                                            class="badge badge-pill bg-soft-success text-success me-2"
                                        >
                                            <i class="bi bi-arrow-up me-1"></i
                                            >30%
                                        </span>
                                        <span
                                            class="text-nowrap text-xs text-muted"
                                            >Since last month</span
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-12">
                            <div class="card shadow border-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <span
                                                class="h6 font-semibold text-muted text-sm d-block mb-2"
                                                >Total hours</span
                                            >
                                            <span class="h3 font-bold mb-0"
                                                >1.400</span
                                            >
                                        </div>
                                        <div class="col-auto">
                                            <div
                                                class="icon icon-shape bg-info text-white text-lg rounded-circle"
                                            >
                                                <i
                                                    class="bi bi-clock-history"
                                                ></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-2 mb-0 text-sm">
                                        <span
                                            class="badge badge-pill bg-soft-danger text-danger me-2"
                                        >
                                            <i class="bi bi-arrow-down me-1"></i
                                            >-5%
                                        </span>
                                        <span
                                            class="text-nowrap text-xs text-muted"
                                            >Since last month</span
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-12">
                            <div class="card shadow border-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <span
                                                class="h6 font-semibold text-muted text-sm d-block mb-2"
                                                >Work load</span
                                            >
                                            <span class="h3 font-bold mb-0"
                                                >95%</span
                                            >
                                        </div>
                                        <div class="col-auto">
                                            <div
                                                class="icon icon-shape bg-warning text-white text-lg rounded-circle"
                                            >
                                                <i
                                                    class="bi bi-minecart-loaded"
                                                ></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-2 mb-0 text-sm">
                                        <span
                                            class="badge badge-pill bg-soft-success text-success me-2"
                                        >
                                            <i class="bi bi-arrow-up me-1"></i
                                            >10%
                                        </span>
                                        <span
                                            class="text-nowrap text-xs text-muted"
                                            >Since last month</span
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow border-0 mb-7">
                        <div
                            class="card-header d-flex justify-content-between align-items-center"
                        >
                            <h5 class="mb-0">Applications</h5>
                            <div class="input-group" style="width: 500px">
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Search..."
                                />
                            </div>
                            <button class="btn btn-primary">Add new</button>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-nowrap">
                                <thead class="thead-light text-left">
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Company</th>
                                        <th scope="col">Offer</th>
                                        <th scope="col">Meeting</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>6</td>
                                        <td>
                                            <button
                                                type="button"
                                                class="btn btn-sm btn-square btn-neutral text-danger-hover"
                                            >
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</template>

<script>
import SidebarView from "./Sidebar.vue";
import { mapActions } from "vuex";

export default {
    created() {
        this.checkTokenExpiration(); // Check token expiration on component creation
    },
    components: {
        SidebarView,
    },
    methods: {
        ...mapActions("auth", ["checkTokenExpiration"]), // Mapping 'checkTokenExpiration' action
        async checkTokenExpiration() {
            try {
                await this.$store.dispatch("auth/checkTokenExpiration"); // Dispatch action to check token
                // If the token is valid, continue rendering the home page
                // Otherwise, the user will be redirected based on the logic in the auth module
            } catch (error) {
                console.error("Error checking token expiration:", error);
                // Handle error if needed
            }
        },
    },
};
</script>

<style scoped>
@import url(./styles/style.css);
/* Bootstrap Icons */
@import url("https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.4.0/font/bootstrap-icons.min.css");
</style>
