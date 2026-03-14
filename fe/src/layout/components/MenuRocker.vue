<template>
	<div class="nav-container primary-menu">
		<div class="mobile-topbar-header">
			<div>
				<img src="../../assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
			</div>
			<div>
				<h4 class="logo-text">Rukada</h4>
			</div>
			<div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
			</div>
		</div>
		<nav class="navbar navbar-expand-xl w-100">
			<ul class="navbar-nav justify-content-start flex-grow-1 gap-1">

				<li class="nav-item">
					<router-link to="/admin/nguoi-dung" class="nav-link">
						<div class="parent-icon"><i class='bx bx-cookie'></i>
						</div>
						<div class="menu-title">Người Dùng</div>
					</router-link>
				</li>
				<li class="nav-item">
					<router-link to="/admin/phong-hop" class="nav-link">
						<div class="parent-icon"><i class='bx bx-cookie'></i>
						</div>
						<div class="menu-title">Phòng Họp</div>
					</router-link>
				</li>
				<li class="nav-item">
					<router-link to="/admin/goi-dich-vu" class="nav-link">
						<div class="parent-icon"><i class='bx bx-cookie'></i>
						</div>
						<div class="menu-title">Gói Dịch Vụ</div>
					</router-link>
				</li>
				<li class="nav-item">
					<router-link to="/admin/phan-quyen" class="nav-link">
						<div class="parent-icon"><i class='bx bx-cookie'></i>
						</div>
						<div class="menu-title">Phân Quyền</div>
					</router-link>
				</li>



			</ul>
		</nav>
	</div>
</template>

<script>
export default {
	name: 'MenuRocker'
}
</script>

<style></style>