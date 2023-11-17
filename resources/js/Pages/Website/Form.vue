<template>
    <Header />
    <section class="container-fulid m-5">
        <h2 class="mt-5 mb-5">Registration Form</h2>
        <form class="form">
            <h2>Personal information</h2>

            <div class="column">
                <div class="input-box">
                    <label>widow full Name :</label>
                    <input
                        type="text"
                        placeholder="Enter widow name"
                        name="widow_name"
                        required
                    />
                </div>
                <div class="input-box">
                    <label>husband Name</label>
                    <input
                        type="text"
                        placeholder="Enter husband name"
                        name="husband_name"
                        required
                    />
                </div>
                <div class="input-box">
                    <label>Contact No :</label>
                    <input
                        type="number"
                        placeholder="Enter phone number"
                        name="widow_contact"
                        required
                    />
                </div>
            </div>

            <div class="column">
                <div class="input-box">
                    <label>Widow NIC No :</label>
                    <input
                        type="number"
                        placeholder="Enter widow name"
                        name="widow_nic"
                    />
                </div>
                <div class="input-box">
                    <label>Husband NIC No :</label>
                    <input
                        type="number"
                        placeholder="Enter husband name"
                        name="husband_nic"
                    />
                </div>
                <div class="input-box">
                    <label>email :</label>
                    <input
                        type="email"
                        placeholder="Enter phone number"
                        name="email"
                    />
                </div>
            </div>
            <br />

            <div class="column">
                <div class="input-box">
                    <label for="myfile">Death Certificate:</label>
                    <input type="file" name="Certificate" accept="image/*" />
                    <label for="myfile">Affidavit :</label>
                    <input type="file" name="affidavit" accept="image/*" />
                </div>
            </div>

            <br /><br />
            <h2>Guardian information</h2>

            <div class="column">
                <div class="input-box">
                    <label>Guardian full Name :</label>
                    <input
                        type="text"
                        placeholder="Enter widow name"
                        name="guardian_name"
                    />
                </div>
                <div class="input-box">
                    <label>Relationship</label>
                    <input
                        type="text"
                        placeholder="Enter husband name"
                        name="relationship"
                    />
                </div>
                <div class="input-box">
                    <label>Contact NO :</label>
                    <input
                        type="number"
                        placeholder="Enter phone number"
                        name="guardian_contact"
                    />
                </div>
            </div>
            <br /><br />
            <h2>Guardian information</h2>
            <div class="input-box">
                <label for="kids">how many kids</label>
                <br />
                <div class="select-box">
                    <select name="kids">
                        <option hidden>kids</option>
                        <option>1</option>
                        <option>2</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                </div>
                <br /><br />

                <label for="myfile">Form B all kids:</label>
                <input type="file" name="form_b" accept="image/*" />
            </div>

            <br /><br />
            <h2>Address</h2>
            <div class="input-box address">
                <label>district</label>
                <input
                    type="text"
                    placeholder="Enter street address"
                    name="widow_district"
                />
                <label>tehsil</label>
                <input
                    type="text"
                    placeholder="Enter street address"
                    name="widow_tehsil"
                />
                <label>village</label>
                <input
                    type="text"
                    placeholder="Enter street address"
                    name="widow_village"
                />
            </div>
            <button>Submit</button>
        </form>
    </section>
    <Footer />
</template>

<script>
let valueDisplays = document.querySelectorAll(".num");
let interval = 4000;
valueDisplays.forEach((valueDisplay) => {
    let startValue = 0;
    let endValue = parseInt(valueDisplay.getAttribute("data-val"));
    let duration = Math.floor(interval / endValue);
    let counter = setInterval(function () {
        startValue += 1;
        valueDisplay.textContent = startValue;
        if (startValue == endValue) {
            clearInterval(counter);
        }
    }, duration);
});
import Header from "./Header.vue";
import Footer from "./Footer.vue";

export default {
    components: {
        Header,
        Footer,
    },
};
</script>

<style scoped>
body {
    background-color: rgb(11, 29, 44);
}
.navbar_color {
    width: 100%;
    min-height: 60px;
    margin: 0px;
    padding: 0px;
    list-style: none;

    background: linear-gradient(to bottom, #33ccff 0%, #003300 91%);
}

.nav-link {
    color: white !important;
    margin-right: 20px;
    font-size: 15px;
    font-weight: 600;
}

/* Import Google font - Poppins */

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}

.container {
    position: relative;
    width: 100%;
    background: #ececec;

    border-radius: 8px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
}

.container header {
    font-size: 1.5rem;
    color: #333;
    font-weight: 500;
    text-align: center;
}

.container .form {
    margin-top: 30px;
}

.form .input-box {
    width: 100%;
}

.input-box label {
    color: #333;
}

.form :where(.input-box input, .select-box) {
    position: relative;
    height: 50px;
    width: 100%;
    outline: none;
    font-size: 1rem;
    color: #707070;
    margin-top: 8px;
    border: 1px solid #ddd;
    border-radius: 6px;
    padding: 0 15px;
}

.input-box input:focus {
    box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
}

.form .column {
    display: flex;
    column-gap: 15px;
}

.form_b {
    width: 300px;
}

.address :where(input, .select-box) {
    margin-top: 15px;
}

.select-box {
    width: 40%;
}

.select-box select {
    height: 100%;
    width: 100%;
    outline: none;
    border: none;
    color: #707070;
    font-size: 1rem;
}

.form button {
    height: 55px;
    width: 100%;
    color: #fff;
    font-size: 1rem;
    font-weight: 400;
    margin-top: 30px;
    border: none;
    cursor: pointer;
    transition: all 0.2s ease;
    background: rgb(130, 106, 251);
}

.form button:hover {
    background: rgb(88, 56, 250);
}

/* Responsive */
@media screen and (max-width: 500px) {
    .form .column {
        flex-wrap: wrap;
    }

    .form :where(.gender-option, .gender) {
        row-gap: 5px;
    }
}
</style>
