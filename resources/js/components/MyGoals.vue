<template>
    <section>

        <div class="container-fluid">
            <div class="row justify-content-center">
                <h2>MY GOALS</h2>
                <hr>
            </div>
<!--            <div class="row">-->
                <!--                <div class ="col-md-12" v-if="!goals">-->
                <!--                    <h3>You currently have no goals set. Would you like to add a Goal?</h3>-->
                <!--                </div>-->
            <div v-if="goals">
                <div class = 'row'>
                    <div class = "col-md-2 offset-1">
                    <h4>Created On</h4>
                    </div>
                    <div class = "col-md-2">
                        <h4>Updated On</h4>
                    </div>
                    <div class = "col-md-2">
                        <h4>Target Date</h4>
                    </div>
                    <div class = "col-md-2">
                        <h4>Current Avg</h4>
                    </div>
                    <div class = "col-md-2">
                        <h4>Target Avg</h4>
                    </div>
                </div>
            <hr>
                <div class="row" v-for="goal in goals">
<!--                    <div v-for="goal in goals">-->
                        <div class = "col-md-2 offset-1">
                            {{goal.created_at}}
                        </div>

                        <div class = "col-md-2">
                            {{goal.updated_at}}
                        </div>
                        <div class = "col-md-2">
                            {{goal.target_date}}
                        </div>
                        <div class = "col-md-2">
                            {{goal.current_avg}}
                        </div>
                    <div class = "col-md-2">
                        {{goal.target_avg}}
                    </div>
<!--                    </div>-->
                </div>
            </div>
            <div v-else>
                <h3>You have not set any goals.</h3>
            </div>
<!--            </div>-->
        </div>
    </section>
</template>

<script>

    export default {

        mounted() {
            this.user = [this.$attrs][0].user;
            this.user.id = 2;
            axios.get("api/playerGoals/" + this.user.id).then(res => {
                if(res.data.data.length > 0) {
                    this.goals = res.data.data;
                    console.log(res.data.data);
                }
            });

        },
        data() {
            return {
                user: null,
                goals: null
            }
        }


    }
</script>
      <style scoped>
      h4{
          font-size: 1em;
          font-weight: bold;
          color:#f1b310;
      }
    </style>