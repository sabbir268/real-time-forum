<template>
	<v-content>
		<v-container fluid fill-height>
			<v-layout align-center justify-center>
				<v-flex xs12 sm8 md5>
					<v-card class="elevation-12">
						<v-toolbar dark color="primary">
							<v-toolbar-title>User Sign Up</v-toolbar-title>
						</v-toolbar>
						<v-card-text>
							<v-form @submit.prevent="signup">
								<span class="red--text" v-if="errors.name">{{errors.name[0]}} </span>
								<v-text-field prepend-icon="person" v-model="form.name" name="emil" label="Name" type="text" required></v-text-field>
								
								<span class="red--text" v-if="errors.email">{{errors.email[0]}} </span>
								<v-text-field prepend-icon="person" v-model="form.email" name="emil" label="Email" type="email" required></v-text-field>
								
								<span class="red--text" v-if="errors.password">{{errors.password[0]}} </span>
								<v-text-field prepend-icon="lock" name="password" label="Password" id="password" v-model="form.password" type="password" required></v-text-field>

								<v-text-field prepend-icon="lock" name="password_confirmation" label="Confirm Password" id="password_confirmation" v-model="form.password_confirmation" type="password" required></v-text-field>

								<v-card-actions>
									<v-spacer></v-spacer>
									<v-btn color="primary" type="submit">Sign Up</v-btn>
								</v-card-actions>
							</v-form>
						</v-card-text>
					</v-card>
				</v-flex>
			</v-layout>
		</v-container>
	</v-content>
</div>
</template>

<script>
export default {

  name: 'SignUp',

  data () {
    return {
    	form:{
    		name: '',
    		email: '',
    		password: '',
    		confirm_password: ''
    	},
    	errors:{

    	}
    }
  },
  created(){
		if (User.loggedIn()) {
			this.$router.push({name:'forum'})
		}
  },
  methods:{
  	signup(){
  		axios.post('/api/auth/signup',this.form)
  		.then(res => {
  			User.responseAfterLogin(res)
  			// this.$router.push({name:'forum'})
  		})
  		.catch(error=> this.errors = error.response.data.errors )
  	}
  }
}
</script>

<style lang="css" scoped>
</style>