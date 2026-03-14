<template>
    <div class="d-flex justify-content-center align-items-center vh-100" style="background-color: #0f172a;">
        <div class="card border-0 shadow-lg overflow-hidden"
            style="max-width: 450px; width: 100%; border-radius: 15px; background-color: #1e293b;">
            <div class="card-body p-4 p-xl-5 text-white">
                <div class="text-center mb-5">
                    <div class="d-inline-flex justify-content-center align-items-center rounded-circle mb-3 shadow-lg"
                        style="background-color: #ea580c; width: 60px; height: 60px;">
                        <i class="bx bxs-shield-quarter text-white fs-2"></i>
                    </div>
                    <h2 class="fw-bold mb-1">Quản Trị Viên</h2>
                    <p class="text-secondary small">Vui lòng đăng nhập để tiếp tục</p>
                </div>

                <form @submit.prevent="login()">
                    <div class="mb-4">
                        <label class="form-label small fw-semibold text-secondary mb-2">Email Quản trị</label>
                        <div class="input-group">
                            <span class="input-group-text bg-dark border-0 text-secondary">
                                <i class="bx bxs-user"></i>
                            </span>
                            <input v-model="admin.email" type="email" class="form-control bg-dark border-0 text-white py-3 shadow-none"
                                placeholder="admin@ai-meet.com" style="border-radius: 0 10px 10px 0;">
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label small fw-semibold text-secondary mb-2">Mật khẩu</label>
                        <div class="input-group">
                            <span class="input-group-text bg-dark border-0 text-secondary">
                                <i class="bx bxs-lock-alt"></i>
                            </span>
                            <input v-model="admin.password" type="password" class="form-control bg-dark border-0 text-white py-3 shadow-none"
                                placeholder="••••••••" style="border-radius: 0 10px 10px 0; letter-spacing: 2px;">
                        </div>
                    </div>

                    <button type="submit" class="btn w-100 fw-bold py-3 mt-4 shadow-lg border-0"
                        style="background-color: #ea580c; color: white; border-radius: 10px; transition: 0.3s;">
                        Đăng Nhập Hệ Thống
                    </button>
                </form>

                <div class="text-center mt-5">
                    <a href="/" class="text-secondary text-decoration-none small">
                        <i class="bx bx-left-arrow-alt me-1"></i> Quay về Trang chủ
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
export default {
    name: 'DangNhapAdmin',
    data() {
        return {
            admin: {
                email: '',
                password: '',
            }
        }
    },
    methods: {
        async login() {
            try {
                const res = await axios.post('http://127.0.0.1:8000/api/admin/login', this.admin);
                if (res.data.status) {
                    localStorage.setItem('token_admin', res.data.data.token);
                    try { this.$toast.success('Đăng nhập Admin thành công!'); } catch(e) {}
                    this.$router.push('/admin/phong-hop'); // Adjust redirection if needed
                } else {
                    try { this.$toast.error(res.data.message || 'Đăng nhập thất bại!'); } catch(e) {}
                }
            } catch (errors) {
                const msg = errors.response?.data?.message
                    || (errors.response?.data?.errors
                        ? Object.values(errors.response.data.errors)[0][0]
                        : null)
                    || 'Đăng nhập thất bại!';
                try { this.$toast.error(msg); } catch(e) {}
            }
        }
    }
}
</script>

<style scoped>
.input-group-text {
    border-radius: 10px 0 0 10px;
}
.btn:hover {
    background-color: #c2410c !important;
    transform: translateY(-2px);
}
</style>
