<template>
    <div class="container-fluid">
        <div class="container">
            <h1 class="title">Fastroware</h1>
            <div class="card">
                <form @submit.prevent="login">
                    <input
                        type="text"
                        placeholder="Username"
                        v-model="formData.email"
                    />
                    <input
                        type="password"
                        placeholder="Password"
                        v-model="formData.password"
                    />
                    <div class="buttons">
                        <button type="submit" class="login-button">
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";
import { mapActions } from "vuex";
import Swal from "sweetalert2";

export default {
    data() {
        return {
            formData: {
                email: "",
                password: "",
                role: "admin",
            },
        };
    },
    mounted() {
        const token = localStorage.getItem("token");
        const user = localStorage.getItem("user");
        this.setToken(token);
        this.setUser(user);
        this.fetchUserData();
    },
    methods: {
        ...mapActions("auth", ["setToken", "setUser"]), // Map the 'login' action from 'auth' module
        async login() {
            try {
                const response = await axios.post(
                    "/api/login-admin",
                    this.formData
                );
                const token = response.data.token;
                const user = response.data.user;
                this.setToken(token);
                this.setUser(user);
                localStorage.setItem("token", token);
                localStorage.setItem("user", JSON.stringify(user));
                Swal.fire({
                    icon: "success",
                    title: "Login Successful!",
                    text: `Welcome back, ${user.name}!`,
                    confirmButtonText: "Go to Dashboard", // Customizing the confirm button text
                }).then((result) => {
                    if (result.isConfirmed) {
                        this.$router.push("/auth/home");
                    }
                });
            } catch (error) {
                Swal.fire({
                    icon: "error",
                    title: "Error",
                    text: error.response.data.error,
                });
            }
        },

        async fetchUserData() {
            try {
                const token = this.$store.state.auth.token; // Assuming token is stored in Vuex state
                const response = await axios.get("/api/user", {
                    headers: {
                        Authorization: `Bearer ${token}`,
                    },
                });
                if(response.status==200){
                    this.$router.push("/auth/home");
                }else{
                    this.$router.push("/login");
                }
            } catch (error) {
                console.error("Error fetching user data:", error);
            }
        },
    },
};
</script>

<style scoped>
.container-fluid {
    margin: 0;
    padding: 0;
    background-color: #0f0f1a;
    color: #fff;
    font-family: Arial, sans-serif;
}
.container {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
}

.title {
    text-align: center;
    font-size: 24px;
    margin-bottom: 20px;
}

.card {
    width: 300px;
    background-color: #1e213a;
    padding: 20px;
    border-radius: 10px;
    border-top: 4px solid #19d4ca;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
}

form {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

input {
    padding: 10px;
    border: none;
    background-color: transparent;
    border-bottom: 1px solid #ccc;
    color: #fff;
    transition: box-shadow 0.3s;
}

input:focus {
    box-shadow: 0 0 10px #19d4ca;
}

.buttons {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    gap: 10px;
}

.login-button,
.register-link {
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s, box-shadow 0.3s, color 0.3s;
    text-decoration: none;
}

.login-button {
    background-color: #19d4ca;
    color: black;
}

.login-button:hover {
    background-color: #19d4ca;
    color: #fff;
    box-shadow: none;
}

.login-button:active {
    box-shadow: 0 0 10px #19d4ca;
}

.register-link {
    color: #ccc;
    background-color: transparent;
}

.register-link:hover {
    color: #fff;
}

.register-link:active {
    box-shadow: 0 0 10px #ccc;
}

@media (max-width: 480px) {
    .card {
        width: 100%;
        max-width: 300px;
    }
}
</style>
