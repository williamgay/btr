<template>
    <section>

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">

                        <h3 style="text-align: center;" v-if="!profileImg">You will need to upload a head and shoulders
                            picture of yourself before you can register for any tournaments.</h3>

                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <ul class="nav flex-column nav-pills">
                                        <li class="nav-item">
                                            <a class="nav-link sideNav" href="#" v-on:click="getComponent('dashboardHome')">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link sideNav" href="#" v-on:click="getComponent('editProfile')">Edit Profile</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link sideNav" href="#" v-on:click="getComponent('myVideos')">My Videos</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link sideNav" href="#" v-on:click="getComponent('myReferrals')">Referrals</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link sideNav" href="#" v-on:click="getComponent('commissionLog')">Commission Logs</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link sideNav" href="#" v-on:click="getComponent('addGoal')">Add Goal</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link sideNav" href="#" v-on:click="getComponent('myGoals')">My Goals</a>
                                        </li>
                                    </ul>

                                </div>
                                <div class="col-md-8">
                                    <div v-if="mods.dashboardHome">
                                        <dashboard-home :user="user"></dashboard-home>
                                    </div>
                                    <div v-if="mods.editProfile">
                                        <edit-profile :user="user"></edit-profile>
                                    </div>
                                    <div v-else-if="mods.myVideos">
                                        <my-videos :user="user"></my-videos>
                                    </div>
                                    <div v-else-if="mods.myReferrals">
                                        <my-referrals :user="user"></my-referrals>
                                    </div>
                                    <div v-else-if="mods.commissionLog">
                                        <commission-log :user="user"></commission-log>
                                    </div>
                                    <div v-else-if="mods.addGoal">
                                        <add-goal :user="user"></add-goal>
                                    </div>
                                    <div v-else-if="mods.myGoals">
                                        <my-goals :user="user"></my-goals>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</template>

<script>
    import DashboardHome from './DashboardHome';
    import EditProfile from './EditProfile';
    import MyVideos from './MyVideos';
    import MyReferrals from './MyReferrals';
    import CommissionLog from './CommissionLog';
    import AddGoal from './AddGoal';
    import MyGoals from './MyGoals';
    export default {
        components: {
            DashboardHome,
            EditProfile,
            MyVideos,
            MyReferrals,
            CommissionLog,
            AddGoal,
            MyGoals
        },
        mounted() {
          //  this.$nextTick(function () {
                this.user = [this.$attrs][0].user;
                this.firstName = [this.$attrs][0].user.firstName;
                this.lastName = [this.$attrs][0].user.lastName;
                this.profileImg = [this.$attrs][0].user.profileImg;
                this.userId = [this.$attrs][0].user.id;
                this.mods.dashboardHome = true;
                // this.mods = {
                //     dashboardHome: true,
                //     editProfile: false,
                //     myVideos: false,
                //     myReferrals: false,
                //     commissionLog: false,
                //     addGoal: false,
                //     myGoals: false
                // };
          //  })

        },
        data() {
            return {
                user: null,
                firstName: null,
                lastName: null,
                profileImg: null,
                userId: null,
                home: false,
                editProfile: true,
                mods:{
                    dashboardHome: false,
                    editProfile: false,
                    myVideos: false,
                    myReferrals: false,
                    commissionLog: false,
                    addGoal: false,
                    myGoals: false
                }


            }
        },
        methods:{
            getComponent(val){
                const self = this;
                Object.keys(self.mods).forEach(function(item){
                    if(item === val){
                        self.mods[item]= true;
                    }else{
                        self.mods[item] = false;
                    }
                })
                console.log(self.mods)
                // for(const prop in this.mods){
                //     this.mods[prop] = false;
                //     if(prop === val){
                //         this.mods[prop] = true;
                //     }
                // }
            }
        }
    }
</script>