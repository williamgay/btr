<template>
    <section>
        <div class="container">
            <div class=" row justify-content-center">
                <h2 style="font-weight: bolder;">Edit Your Profile</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <!--                   <div class="card-header">Register</div>-->

                        <div class="card-body">
                            <form method="POST" action="/register">
                                <input type="hidden" :value="csrfToken" name="_token"/>
                                <div class="form-group row" v-if="!noFargo">
                                    <label for="fargo"
                                           class="col-md-4 col-form-label text-md-right">What is your Fargo
                                        Rating?</label>

                                    <div class="col-md-6">
                                        <input id="fargo" type="text" class="form-control" name="fargo"
                                             v-if="user.fargo"  v-model="user.fargo" autofocus>

                                    </div>
                                </div>
                                <div class="form-group row" v-if="noFargo">
                                    <label for="fargoAlt" class="col-md-4 col-form-label text-md-right">Please Select
                                        Skill Level</label>
                                    <div class="col-md-6">
                                        <select id="fargoAlt" class="form-control" name="fargoAlt"
                                                v-model="user.fargoAlt">
                                            <option selected>Rate Your 9-ball skill level</option>
                                            option>
                                            <option value='professional'>A+++ Professional</option>
                                            <option value='semipro'>A++ Semi Professional</option>
                                            <option value='advAmateur+'>A+ Advanced Amateur</option>
                                            <option value='advAmateur'>A Advanced Amateur</option>
                                            <option value='openAmateur'>B Open Amateur</option>
                                            <option value='intermediateAmateur'>C-D Intermediate Amateur</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6 offset-4 fargoAlt" @click="toggleNoFargo">
                                        {{getFargoStatus}}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="firstName"
                                           class="col-md-4 col-form-label text-md-right">First Name</label>

                                    <div class="col-md-6">
                                        <input id="firstName" type="text" class="form-control" name="firstName"
                                               v-model="user.firstName"
                                               required autocomplete="firstname">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lastName"
                                           class="col-md-4 col-form-label text-md-right">Last Name</label>

                                    <div class="col-md-6">
                                        <input id="lastName" type="text" class="form-control" name="lastName"
                                               v-model="user.lastName"
                                               required autocomplete="lastname">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email"
                                           class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email"
                                               v-model="user.email"
                                               required autocomplete="email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="streetAddress"
                                           class="col-md-4 col-form-label text-md-right">Street Address</label>

                                    <div class="col-md-6">
                                        <input id="streetAddress" type="text" class="form-control" name="streetAddress"
                                               v-model="user.streetAddress"
                                               required autocomplete="streetAddress">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="city" class="col-md-4 col-form-label text-md-right">City</label>

                                    <div class="col-md-6">
                                        <input id="city" type="text"
                                               class="form-control" name="city" v-model="user.city" required
                                               autocomplete="city">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="country"
                                           class="col-md-4 col-form-label text-md-right">Select Your Country</label>

                                    <div class="col-md-6">
                                        <select id="country" class="form-control" name="country" v-model="user.country"
                                                required @change="getStates">
                                            <option>Select Your Country</option>
                                            <option v-for="option in countries" v-bind:value="option.id">{{ option.name
                                                }}
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="state"
                                           class="col-md-4 col-form-label text-md-right">'Select Your State</label>

                                    <div class="col-md-6">
                                        <select id="state" class="form-control" name="state" v-model="user.state"
                                                required>
                                            <option>Select Your State</option>
                                            <option v-for="option in states" v-bind:value="option.id">{{ option.name }}
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="zip" class="col-md-4 col-form-label text-md-right">Postal Code</label>

                                    <div class="col-md-6">
                                        <input id="zip" type="text" class="form-control" name="zip" v-model="user.zip"
                                               required
                                               autocomplete="postalCode">
                                    </div>
                                </div>
                                <div class="form-group row" v-if="!noLocation">
                                    <label for="location"
                                           class="col-md-4 col-form-label text-md-right">Select Your Location</label>

                                    <div class="col-md-6">
                                        <select id="location" class="form-control" name="location"
                                                v-model="user.location">
                                            <option>Select Your Location</option>
                                            <option v-for="option in locations" v-bind:value="option.id">{{ option.name
                                                }}
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row" v-if="noLocation">
                                    <label for="newLocation"
                                           class="col-md-4 col-form-label text-md-right">New Location Name</label>

                                    <div class="col-md-6">
                                        <input id="newLocation" type="text" class="form-control" name="newLocation"
                                               v-model="newLocation">
                                    </div>
                                </div>
                                <div class="form-group row" v-if="noLocation">
                                    <label for="newLocationCity"
                                           class="col-md-4 col-form-label text-md-right">New Location City</label>

                                    <div class="col-md-6">
                                        <input id="newLocationCity" type="text" class="form-control"
                                               name="newLocationCity"
                                               v-model="newLocationCity">
                                    </div>
                                </div>
                                <div class="form-group row" v-if="noLocation">
                                    <label for="newLocationState"
                                           class="col-md-4 col-form-label text-md-right">New Location State</label>

                                    <div class="col-md-6">
                                        <input id="newLocationState" type="text" class="form-control"
                                               name="newLocationState"
                                               v-model="newLocationState">
                                    </div>
                                </div>
                                <div class="form-group row" v-if="noLocation">
                                    <label for="newLocationCountry"
                                           class="col-md-4 col-form-label text-md-right">New Location Country</label>

                                    <div class="col-md-6">
                                        <select id="NewLocationCountry" class="form-control" name="country" value=""
                                                v-model="newLocationCountry">
                                            <option>Select Your Country</option>
                                            <option v-for="option in countries" v-bind:value="option.id">{{ option.name
                                                }}
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6 offset-4 fargoAlt" @click="toggleNoLocation">
                                        {{getLocationStatus}}
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary" @click="handleSubmit">
                                            Update Profile
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    export default {

        mounted() {
            this.user = [this.$attrs][0].user;
            this.csrfToken = document.querySelector('meta[name="csrf-token"]').content
            axios.get("api/countries").then(res => {
                console.log(res)
                this.countries = res.data.data;
            });
            axios.get("api/locations").then(res => {
                this.locations = res.data.data;
            });

            axios.get("api/allstates/").then(res => {
                this.states = res.data.data;
            });
        },

        data() {
            return {
                countries: null,
                selectedCountry: null,
                states: null,
                csrfToken: null,
                user: null,
                locations: null,
                noFargo: false,
                getFargoStatus: "Click here if you don't have a Fargo Rating",
                noLocation: false,
                getLocationStatus: "Click to Add New Location",
                test: 23
            }
        },
        methods: {
            toggleNoFargo() {
                this.noFargo = !this.noFargo;
                if (!this.noFargo) {
                    this.getFargoStatus = "Click here if you don't have a Fargo Rating ";
                } else {
                    this.getFargoStatus = "Click here to Enter Fargo Rating";
                }
            },
            toggleNoLocation() {
                this.noLocation = !this.noLocation;
                if (!this.noLocation) {
                    this.getLocationStatus = "Click to Add New Location";
                } else {
                    this.getLocationStatus = "Click to Select Location";
                }
            },
            getStates() {
                axios.get("api/states/" + this.selectedCountry).then(res => {
                    this.states = res.data.data;
                })
            },
            handleSubmit(e) {
                e.preventDefault();
                    axios.post('api/updateprofile', {
                        id: this.user.id,
                        firstName: this.user.firstName,
                        lastName: this.user.lastName,
                        fargo: this.user.fargo,
                        fargoAlt: this.user.fargoAlt,
                        streetAddress: this.user.streetAddress,
                        city: this.user.city,
                        state: this.user.state,
                        zip: this.user.zip,
                        location: this.user.location,
                        country: this.user.country,
                        email: this.user.email,
                    })
                        .then(response => {
                            console.log(response)
                            // localStorage.setItem('user', response.data.success.name)
                            // localStorage.setItem('jwt', response.data.success.token)
                            swal.fire({
                                title: "Success",
                                text:
                                    "You have successfully updated your profile.",
                                icon: "success",
                                confirmButtonText: "Close",
                                showCloseButton: false,
                                showCancelButton: false,
                            });
                        })
                        .catch(error => {
                            console.error(error);
                        });
            }
        }
    }
</script>
<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
    .fargoAlt:hover {
        color: #EFB41D;
        cursor: pointer;
    }

    .heading {
        color: #EFB41D;
    }
</style>