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
                                <h1 class="h2 mb-0 ls-tight">Widow</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Main -->
            <main class="py-6 bg-surface-secondary">
                <div class="container-fluid">
                    <!-- Card stats -->

                    <div class="card shadow border-0 mb-7">
                        <div
                            class="card-header d-flex justify-content-between align-items-center"
                        >
                            <h5 class="mb-0">Widow</h5>
                            <div class="input-group" style="width: 500px">
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Search..."
                                />
                            </div>
                            <button class="btn btn-primary" @click="openModal">
                                Add new
                            </button>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-nowrap">
                                <thead class="thead-light text-left">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Husband Name</th>
                                        <th scope="col">Contact</th>
                                        <th scope="col">Tensil</th>
                                        <th scope="col">Village</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr
                                        v-for="(item, index) in items"
                                        :key="index"
                                    >
                                        <td>{{ index + 1 }}</td>
                                        <td>{{ item.widow_name }}</td>
                                        <td>{{ item.husband_name }}</td>
                                        <td>{{ item.widow_contact }}</td>
                                        <td>{{ item.widow_tehsil }}</td>
                                        <td>{{ item.widow_village }}</td>
                                        <td>
                                            <button
                                                type="button"
                                                class="btn btn-sm btn-square btn-neutral text-danger-hover"
                                            >
                                                <i class="bi bi-trash"></i>
                                            </button>
                                            <button
                                                type="button"
                                                class="btn btn-sm btn-square btn-neutral text-danger-hover"
                                            >
                                                <i class="bi bi-eye"></i>
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

        <!-- Modal -->
        <div
            class="modal"
            v-if="showModal == true"
            :class="{ show: showModal }"
            @click="closeModal"
        >
            <div class="modal-dialog" @click.stop>
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add New</h5>
                        <button type="button" class="close" @click="closeModal">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form @submit.prevent="submitForm">
                            <div class="row">
                                <div class="col-lg-4 mt-3">
                                    <div class="form-group">
                                        <label for="">Widow Name</label>
                                        <input
                                            v-model="formData.widow_name"
                                            id="widow_name"
                                            name="widow_name"
                                            class="form-control"
                                        />
                                    </div>
                                </div>
                                <div class="col-lg-4 mt-3">
                                    <div class="form-group">
                                        <label for="">Husband Name</label>
                                        <input
                                            v-model="formData.husband_name"
                                            id="widow_contact"
                                            name="husband_name"
                                            class="form-control"
                                        />
                                    </div>
                                </div>
                                <div class="col-lg-4 mt-3">
                                    <div class="form-group">
                                        <label for="">Widow Contact</label>
                                        <input
                                            v-model="formData.widow_contact"
                                            id="widow_contact"
                                            name="widow_contact"
                                            class="form-control"
                                        />
                                    </div>
                                </div>
                                <div class="col-lg-4 mt-3">
                                    <div class="form-group">
                                        <label for="">Widow CNIC</label>
                                        <input
                                            v-model="formData.widow_nic"
                                            id="widow_nic"
                                            name="widow_nic"
                                            class="form-control"
                                        />
                                    </div>
                                </div>
                                <div class="col-lg-4 mt-3">
                                    <div class="form-group">
                                        <label for="">Widow Email</label>
                                        <input
                                            v-model="formData.husband_nic"
                                            id="husband_nic"
                                            name="husband_nic"
                                            class="form-control"
                                        />
                                    </div>
                                </div>
                                <div class="col-lg-4 mt-3">
                                    <div class="form-group">
                                        <label for="">Widow Email</label>
                                        <input
                                            v-model="formData.email"
                                            id="email"
                                            name="email"
                                            class="form-control"
                                        />
                                    </div>
                                </div>
                                <div class="col-lg-4 mt-3">
                                    <div class="form-group">
                                        <label for=""
                                            >Husband Death Certificate</label
                                        >
                                        <input
                                            type="file"
                                            id="Certificate"
                                            name="Certificate"
                                            accept="image/*"
                                            @change="handleFileUpload"
                                            class="form-control"
                                        />
                                    </div>
                                </div>
                                <div class="col-lg-4 mt-3">
                                    <div class="form-group">
                                        <label for="">Afidaivate</label>
                                        <input
                                            type="file"
                                            name="name"
                                            class="form-control"
                                        />
                                    </div>
                                </div>

                                <div class="col-lg-4 mt-3">
                                    <div class="form-group">
                                        <label for="">Guardian Name</label>
                                        <input
                                            name="name"
                                            class="form-control"
                                        />
                                    </div>
                                </div>
                                <div class="col-lg-4 mt-3">
                                    <div class="form-group">
                                        <label for="">Realation</label>
                                        <input
                                            name="name"
                                            class="form-control"
                                        />
                                    </div>
                                </div>
                                <div class="col-lg-4 mt-3">
                                    <div class="form-group">
                                        <label for="">Guardian Contact</label>
                                        <input
                                            name="name"
                                            class="form-control"
                                        />
                                    </div>
                                </div>
                                <div class="col-lg-4 mt-3">
                                    <div class="form-group">
                                        <label for="">Kids</label>
                                        <input
                                            type="number"
                                            name="name"
                                            class="form-control"
                                        />
                                    </div>
                                </div>

                                <div class="col-lg-4 mt-3">
                                    <div class="form-group">
                                        <label for="">Afidaivate</label>
                                        <input
                                            type="file"
                                            name="name"
                                            class="form-control"
                                        />
                                    </div>
                                </div>
                                <button
                                    type="button"
                                    class="btn btn-primary mt-5"
                                >
                                    Save changes
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import SidebarView from "./Sidebar.vue";
import axios from "axios";
import { mapActions } from "vuex";

export default {
    data() {
        return {
            showModal: false,
            formData:[],
            items: [], // to store the fetched data
        };
    },
    components: {
        SidebarView,
    },

    mounted() {
        try {
            const token = localStorage.getItem("token");
            const user = localStorage.getItem("user");
            this.setToken(token);
            this.setUser(user);
            this.fetchData(); // call the method to fetch data when the component is mounted
        } catch (error) {
            console.error("Error in mounted hook:", error);
            // Handle the error or log it for debugging purposes
        }
    },
    methods: {
        ...mapActions("auth", ["setToken", "setUser"]), // Map the 'login' action from 'auth' module
        fetchData() {
            const token = this.$store.state.auth.token; // Assuming token is stored in Vuex state
            axios
                .get("/api/get-widows", {
                    headers: {
                        Authorization: `Bearer ${token}`,
                    },
                })
                .then((response) => {
                    this.items = response.data;
                    console.log(response);
                })
                .catch((error) => {
                    if (error.response.status == "401") {
                        console.log(error.response.status);
                    } else {
                        console.log(error);
                    }
                });
        },
        openModal() {
            this.showModal = true;
        },
        closeModal() {
            this.showModal = false;
        },
        handleFileUpload(event) {
            const file = event.target.files[0];
            this.formData.Certificate = file;
        },
    },
};
</script>

<style scoped>
@import url(./styles/style.css);
/* Bootstrap Icons */
@import url("https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.4.0/font/bootstrap-icons.min.css");
/* Style the modal to be centered and responsive */
/* Style the modal to be centered and responsive */
.modal {
    display: none;
    position: fixed;
    z-index: 1050;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(0, 0, 0, 0.5); /* Added a semi-transparent background */
}

.modal.show {
    display: block;
}

.modal-dialog {
    max-width: inherit;
    width: 100%;
    margin: auto;
}

.modal-content {
    width: 100%;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
}
</style>
