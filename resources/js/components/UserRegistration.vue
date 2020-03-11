<template>
    <section>
        <div class="container">
            <div class=" row justify-content-center topRow" style='padding-top: 70px; margin: 0 auto;'>
                <h3>Welcome to Behind the Rock Membership Registration</h3>
            </div>
            <div class=" row justify-content-center">
                <h2 style="font-weight: bolder;">Create Your Profile</h2>
            </div>
            <div class=" row justify-content-center">
                <h2 class='text-center heading'>Before your begin, make sure you have a head and shoulder
                    pic of
                    yourself on your device so you can upload it.</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <!--                   <div class="card-header">Register</div>-->

                        <div class="card-body">
                            <form method="POST" action="">
                                @csrf
                                <div class="form-group row" v-if="!noFargo">
                                    <label for="fargo"
                                           class="col-md-4 col-form-label text-md-right">What is your Fargo
                                        Rating?</label>

                                    <div class="col-md-6">
                                        <input id="fargo" type="text" class="form-control" name="fargo"
                                               value="" autofocus>

                                    </div>
                                </div>
                                <div class="form-group row" v-if="noFargo">
                                    <label for="fargoAlt" class="col-md-4 col-form-label text-md-right">Please Select
                                        Skill Level</label>
                                    <div class="col-md-6">
                                        <select id="fargoAlt" class="form-control" name="fargoAlt"
                                                value="">
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
                                        <input id="firstName" type="text" class="form-control" name="firstName" value=""
                                               required autocomplete="firstName">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lastName"
                                           class="col-md-4 col-form-label text-md-right">Last Name</label>

                                    <div class="col-md-6">
                                        <input id="lastName" type="text" class="form-control" name="lastName" value=""
                                               required autocomplete="lastName">

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email"
                                           class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email" value=""
                                               required autocomplete="email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="streetAddress"
                                           class="col-md-4 col-form-label text-md-right">Street Address</label>

                                    <div class="col-md-6">
                                        <input id="streetAddress" type="text" class="form-control" name="streetAddress"
                                               value=""
                                               required autocomplete="streetAddress">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="city" class="col-md-4 col-form-label text-md-right">City</label>

                                    <div class="col-md-6">
                                        <input id="city" type="text"
                                               class="form-control" name="city" value="" required autocomplete="city">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="country"
                                           class="col-md-4 col-form-label text-md-right">Select Your Country</label>

                                    <div class="col-md-6">
                                        <select id="country" class="form-control" name="country" value=""
                                                v-model="selectedCountry" required @change="getStates">
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
                                        <select id="state" class="form-control" name="state" value="" required>
                                            <option>Select Your State</option>
                                            <option v-for="option in states" v-bind:value="option.id">{{ option.name }}
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="zip" class="col-md-4 col-form-label text-md-right">Postal Code</label>

                                    <div class="col-md-6">
                                        <input id="zip" type="text" class="form-control" name="zip" value="" required
                                               autocomplete="postalCode">
                                    </div>
                                </div>
                                <div class="form-group row" v-if="!noLocation">
                                    <label for="location"
                                           class="col-md-4 col-form-label text-md-right">Select Your Location</label>

                                    <div class="col-md-6">
                                        <select id="location" class="form-control" name="location" value="">
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
                                               value="">
                                    </div>
                                </div>
                                <div class="form-group row" v-if="noLocation">
                                    <label for="newLocationCity"
                                           class="col-md-4 col-form-label text-md-right">New Location City</label>

                                    <div class="col-md-6">
                                        <input id="newLocationCity" type="text" class="form-control" name="newLocationCity"
                                               value="">
                                    </div>
                                </div>
                                <div class="form-group row" v-if="noLocation">
                                    <label for="newLocationState"
                                           class="col-md-4 col-form-label text-md-right">New Location State</label>

                                    <div class="col-md-6">
                                        <input id="newLocationState" type="text" class="form-control" name="newLocationState"
                                               value="">
                                    </div>
                                </div>
                                <div class="form-group row" v-if="noLocation">
                                    <label for="newLocationCountry"
                                           class="col-md-4 col-form-label text-md-right">New Location Country</label>

                                    <div class="col-md-6">
                                        <select id="NewLocationCountry" class="form-control" name="country" value=""
                                                v-model="newLocationCountry" required>
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
                                <div class="form-group row">
                                    <label for="image" class="col-md-4 col-form-label text-md-right">Upload Photo</label>

                                    <div class="col-md-6">
                                        <input type="file" id = "image" class="form-control" v-on:change="onImageChange">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password"
                                               class="form-control" name="password" required
                                               autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password-confirm"
                                           class="col-md-4 col-form-label text-md-right">Confirm Password</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control"
                                               name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary" :disabled='submitDisabled'>
                                            Register
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
        data() {
            return {
                countries: null,
                selectedCountry: null,
                states: null,
                locations: null,
                submitDisabled: true,
                noFargo: false,
                getFargoStatus: "Click here if you don't have a Fargo Rating",
                noLocation: false,
                getLocationStatus: "Click to Add New Location"
            }
        },
        mounted() {
            axios.get("api/countries").then(res => {
                this.countries = res.data.data;
            });
            axios.get("api/locations").then(res => {
                this.locations = res.data.data;
            })
        },
        methods: {
            getStates() {
                axios.get("api/states/" + this.selectedCountry).then(res => {
                    this.states = res.data.data;
                })
            },
            toggleNoFargo() {
                this.noFargo = !this.noFargo;
                if (!this.noFargo) {
                    this.getFargoStatus = "Click here if you don't have a Fargo Rating ";
                } else {
                    this.getFargoStatus = "Click here to Enter Fargo Rating";
                }
            },
            toggleNoLocation(){
                this.noLocation = !this.noLocation;
                if (!this.noLocation) {
                    this.getLocationStatus = "Click to Add New Location";
                } else {
                    this.getLocationStatus = "Click to Select Location";
                }
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