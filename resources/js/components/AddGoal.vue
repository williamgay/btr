<template>
    <section>

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <!--                   <div class="card-header">Register</div>-->

                        <div class="card-body">
                            <form method="POST" action="/register">
                                <input type="hidden" :value="csrfToken" name="_token"/>
                                <div class="form-group row">
                                    <label for="currentAvg"
                                           class="col-md-4 col-form-label text-md-right">Current Avg</label>

                                    <div class="col-md-6">
                                        <input type="number" id="currentAvg" class="form-control" name="currentAvg"
                                               v-model="currentAvg"
                                               required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="targetAvg"
                                           class="col-md-4 col-form-label text-md-right">Target Avg</label>

                                    <div class="col-md-6">
                                        <input type="number" id="targetAvg" class="form-control" name="targetAvg"
                                               v-model="targetAvg"
                                               required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="targetDate"
                                           class="col-md-4 col-form-label text-md-right">Target Date</label>

                                    <div class="col-md-6">
                                        <input id="targetAvg" type="date" class="form-control" name="targetAvg"
                                               v-model="targetDate"
                                               required>
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary" @click="handleSubmit">
                                            Submit Goal
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
        },
        data() {
            return {
                csrfToken: null,
                currentAvg: null,
                targetAvg: null,
                targetDate: null,
                user: null
            }
        },
        methods: {
            handleSubmit(e) {
                this.csrfToken = document.querySelector('meta[name="csrf-token"]').content
                e.preventDefault();
                console.log(this.user)
                axios.post('api/addgoal', {
                    user_id: this.user.id,
                    curAvg: this.currentAvg,
                    tarAvg: this.targetAvg,
                    tarDate: this.targetDate
                })
                    .then(response => {
                        swal.fire({
                            title: "Success",
                            text:
                                "You have successfully added your goal.",
                            icon: "success",
                            confirmButtonText: "Close",
                            showCloseButton: false,
                            showCancelButton: false,
                            onClose: () => {
                                window.location = "login";
                            }
                        });


                        // if (localStorage.getItem('jwt') != null){
                        //     this.$router.go('/board')
                        // }
                    })
                    .catch(error => {
                        console.error(error);
                    });
            }
        }
    }
</script>