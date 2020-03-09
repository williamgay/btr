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
            <h2 class='text-center' style="color: #f1b310;">Before your begin, make sure you have a head and shoulder
                pic of
                yourself on your device so you can upload it.</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                   <div class="card-header">Register</div>

                    <div class="card-body">
                        <form method="POST" action="">
                            @csrf
                            <div class="form-group row">
                                <label for="fargo"
                                       class="col-md-4 col-form-label text-md-right">What is your Fargo Rating?</label>

                                <div class="col-md-6">
                                    <input id="fargo" type="text" class="form-control" name="fargo"
                                           value="" autofocus>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fargoAlt" class="col-md-4 col-form-label text-md-right">"If you don't have a Fargo Rating, please select"</label>
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
                                        <option value ='intermediateAmateur'>C-D Intermediate Amateur</option>
                                    </select>

                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="firstName"
                                       class="col-md-4 col-form-label text-md-right">First Name</label>

                                <div class="col-md-6">
                                    <input id="firstName" type="text"class="form-control" name="firstName" value="" required autocomplete="firstName">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lastName"
                                       class="col-md-4 col-form-label text-md-right">Last Name</label>

                                <div class="col-md-6">
                                    <input id="lastName" type="text" class="form-control" name="lastName" value="" required autocomplete="lastName">

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"class="form-control"  name="email" value="" required autocomplete="email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="country"
                                       class="col-md-4 col-form-label text-md-right">Select Your Country</label>

                                <div class="col-md-6">
                                    <select id="country" class="form-control" name="country" value="" v-model="selectedCountry" required @change="getStates">
                                        <option>Select Your Country</option>
                                        <option v-for="option in countries" v-bind:value="option.id" >{{ option.name }}</option>
                                    </select>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="streetAddress"
                                       class="col-md-4 col-form-label text-md-right">Street Address</label>

                                <div class="col-md-6">
                                    <input id="streetAddress" type="text" class="form-control" name="streetAddress" value="" required autocomplete="streetAddress">
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
                                <label for="state"
                                       class="col-md-4 col-form-label text-md-right">'Select Your State</label>

                                <div class="col-md-6">
                                    <select id="state" class="form-control" name="state" value="" required>
                                        <option>Select Your State</option>
                                        <option v-for="option in states" v-bind:value="option.id" >{{ option.name }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="zip" class="col-md-4 col-form-label text-md-right">Postal Code</label>

                                <div class="col-md-6">
                                    <input id="zip" type="text" class="form-control" name="zip" value="" required autocomplete="postalCode">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="location"
                                       class="col-md-4 col-form-label text-md-right">Select Your Location</label>

                                <div class="col-md-6">
                                    <select id="location" class="form-control" name="location" value="">
                                        <option>Select Your Location</option>
                                        <option>TODO:: NEED TO GET LIST OF Locations</option>
                                       <option v-for = "(country, index) in countries" :key="index" :value="country.id">{{country.country}}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="newLocation"
                                       class="col-md-4 col-form-label text-md-right">Or Add New Location</label>

                                <div class="col-md-6">
                                    <input id="newLocation" type="text" class="form-control" name="newLocation" value="">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control" name="password"required autocomplete="new-password">
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
                                    <button type="submit" class="btn btn-primary">
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
        data(){
            return {
                countries: null,
                selectedCountry: null,
                states: null
            }
        },
        mounted() {
            axios.get("api/countries").then(res=>{
                this.countries = res.data.data;
            })
        },
        methods:{
            getStates(){
                axios.get("api/states/"+ this.selectedCountry).then(res=>{
                    this.states = res.data.data;
                })
            }
        }
    }
</script>