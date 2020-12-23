<template>
    <!-- Nav Item - Messages -->
		<li class="nav-item dropdown no-arrow mx-1">
			<a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
				data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<i class="fas fa-envelope fa-fw"></i>
				<!-- Counter - Messages -->
				<span class="badge badge-danger badge-counter">7</span>
			</a>
			<!-- Dropdown - Messages -->
			<div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
				aria-labelledby="messagesDropdown">
				<h6 class="dropdown-header">
					Message Center
				</h6>
				<a class="dropdown-item d-flex align-items-center" href="#" v-bind:key="notif.id" v-for="notif in notifications">
					<div class="dropdown-list-image mr-3">
						<img class="rounded-circle" v-bind:src="notif.img" 
							alt="">
						<div class="status-indicator bg-success"></div>
					</div>
					<div class="font-weight-bold">
						<div class="text-truncate">{{notif.msg}}</div>
						<div class="small text-gray-500">{{notif.user}} · {{notif.time}}</div>
					</div>
				</a>
				<a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
			</div>
		</li>
</template>

<script>
export default {
	name: "Message",
	components:{

	},
	data(){
		return {
			notifications:[
				{
					id: 1,
					time: "58m",
					user: "Emily Fowler",
					img: "img/undraw_profile_1.svg",
					msg: "Hi there! I am wondering if you can help me with a problem I've been having.",
					status:"active"
				},
				{
					id: 2,
					time: "1d",
					user: "Jae Chun",
					img: "img/undraw_profile_2.svg",
					msg: "I have the photos that you ordered last month, how would you like them sent to you?",
					status:"offline"
				},
				{
					id: 3,
					time: "2d",
					user: "Morgan Alvarez",
					img: "img/undraw_profile_3.svg",
					msg: "Last month's report looks great, I am very happy with the progress so far, keep up the good work!",
					status:"idle"
				},
				{
					id: 4,
					time: "2w",
					user: "Chicken the Dog",
					img: "https://source.unsplash.com/Mv9hjnEUHR4/60x60",
					msg: "Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...",
					status:"active"
				},
			]
		}
	}
	
}
</script>

<style lang="stylus" scoped>

</style>