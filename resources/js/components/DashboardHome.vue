<template>
    <section>
        <div class = "container">
            <h2>Dashboard</h2>

            <hr>
            <div class ="row">
                <div class = "col-md-6">
                    <p v-if ="profileImg"> <img  v-bind:src ="profileImg" style ="width:70px; height:70px;"></p>

                    Name: {{firstName + " " +  lastName}}
                    <br>
                    Member ID: {{id}}
                </div>
            </div>
        </div>

    </section>


</template>

<script>
    export default {
        mounted() {
            this.user = [this.$attrs][0].user;
            this.profileImg = "images/" + this.user.profileImg;
            this.firstName = this.user.firstName;
            this.lastName = this.user.lastName;
            this.id = this.user.id;
        },
        data() {
            return {
                user: null,
                profileImg: null,
                firstName: null,
                lastName: null,
                id: null,
            }
        }
    }
</script>
<style>
    hr {width: 100%; height: 1px;background-color:#666;opacity: 0.5;}
</style>