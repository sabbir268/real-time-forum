<template>
	<v-content>
		<v-container fluid fill-height>
			<v-layout align-center justify-center>
				<v-flex xs12 sm8 md5>
					<v-card class="elevation-12">
						<v-toolbar dark color="primary">
							<v-toolbar-title>User Login</v-toolbar-title>
						</v-toolbar>
						<v-card-text>
							<v-form @submit.prevent="login">
								<v-text-field prepend-icon="person" v-model="form.email" name="email" label="Email" type="email"></v-text-field>
								<v-text-field prepend-icon="lock" name="password" label="Password" id="password" v-model="form.password" type="password"></v-text-field>

								<v-card-actions>
									<v-spacer></v-spacer>
									<v-btn color="primary" type="submit">Login</v-btn>
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

	name: 'login',

	data () {
		return {
			form:{
				email:'',
				password:''
			}
		}
	},
	created(){
		if (User.loggedIn()) {
			this.$router.push({name:'forum'})
		}
	},
	methods:{
		login(){
			User.login(this.form)
			// this.$router.push({name:'forum'})
		}
	}
}
</script>

<style lang="css" scoped>
</style>