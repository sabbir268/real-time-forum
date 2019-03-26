<template>
  <v-toolbar>
    <v-toolbar-side-icon></v-toolbar-side-icon>
    <v-toolbar-title>Title</v-toolbar-title>
    <v-spacer></v-spacer>
    <div class="hidden-sm-and-down">
      <router-link v-for="item in items" :to="item.to" :key="item.title" v-if="item.show" > <v-btn flat>{{item.title}}</v-btn></router-link>
     
    </div>
  </v-toolbar>
</template>

<script>
export default {

  name: 'Toolbar',

  data () {
    return {
          items: [
            {title:'Forum' , to: '/forum', show: true},
            {title:'Ask Question' , to: '/ask-question',show: User.loggedIn()},
            {title:'Category' , to: '/category', show: User.loggedIn()},
            {title:'Log In' , to: '/login' , show: !User.loggedIn()},
            {title:'Sign Up' , to: '/signup', show: !User.loggedIn()},
            {title:'Log Out' , to: '/logout', show: User.loggedIn()},
          ]
    }
  },

  created(){
    EventBus.$on('logout',() =>{
      User.logout()
    })
  }

}
</script>

<style lang="css" scoped>
</style>