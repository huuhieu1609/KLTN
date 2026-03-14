<template>
    <div class="d-flex justify-content-center align-items-center vh-100 p-3 p-md-4" style="background-color: #f8fafc;">
        <div class="card border-0 shadow-lg overflow-hidden"
            style="max-width: 950px; width: 100%; border-radius: 20px;">
            <div class="row g-0 h-100" style="min-height: 600px;">
                <!-- Left Side (Branding) -->
                <div class="col-md-6 d-none d-md-flex flex-column justify-content-center p-5 text-white position-relative"
                    style="background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);">
                    <!-- Subtle Glow Effect -->
                    <div class="position-absolute top-0 start-0 w-100 h-100"
                        style="background: radial-gradient(circle at 20% 30%, rgba(249, 115, 22, 0.15), transparent 50%); pointer-events: none;">
                    </div>

                    <div class="position-relative z-1 mb-5 ps-xl-3">
                        <div class="d-flex align-items-center mb-4">
                            <div class="d-flex justify-content-center align-items-center rounded-3 me-3 shadow-sm"
                                style="background-color: #f97316; width: 44px; height: 44px;">
                                <i class="bx bx-camera-movie text-white fs-4"></i>
                            </div>
                            <span class="fs-4 fw-bold" style="letter-spacing: -0.5px;">AI-Meet</span>
                        </div>
                        <h1 class="display-6 fw-bold mb-4 text-white" style="line-height: 1.35; letter-spacing: -1px;">
                            Kết nối thông minh,<br>Hợp tác hiệu quả.
                        </h1>
                        <p class="fs-6 lh-lg pe-4" style="color: #94a3b8; font-weight: 400;">
                            Nền tảng họp trực tuyến thế hệ mới tích hợp trí tuệ nhân tạo để tối ưu hóa công việc của
                            bạn.
                        </p>
                    </div>
                </div>

                <!-- Right Side (Form) -->
                <div class="col-md-6 bg-white p-4 p-xl-5 d-flex flex-column justify-content-center">
                    <div class="px-xl-4 pb-4">
                        <div class="mb-4">
                            <h2 class="fw-bolder mb-2"
                                style="color: #0f172a; font-size: 1.75rem; letter-spacing: -0.5px;">Đăng nhập vào
                                AI-Meet</h2>
                            <p class="small mb-0" style="color: #64748b;">Vui lòng nhập thông tin để truy cập phòng họp
                                của bạn.</p>
                        </div>

                        <form>
                            <!-- Email Input -->
                            <div class="mb-4">
                                <label class="form-label fw-bold small mb-2" style="color: #334155;">Địa chỉ
                                    Email</label>
                                <input v-model="nguoi_dung.email" type="email"
                                    class="form-control form-control-lg bg-transparent shadow-none px-3 py-3 fs-6"
                                    placeholder="ten@congty.com"
                                    style="border-radius: 10px; border: 1px solid #e2e8f0; color: #475569;">
                            </div>

                            <!-- Password Input -->
                            <div class="mb-4">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <label class="form-label fw-bold small mb-0" style="color: #334155;">Mật
                                        khẩu</label>
                                    <a href="#" class="text-decoration-none small fw-semibold"
                                        style="color: #f97316; font-size: 0.85rem;">Quên mật khẩu?</a>
                                </div>
                                <input v-model="nguoi_dung.password" type="password"
                                    class="form-control form-control-lg bg-transparent shadow-none px-3 py-3 fs-6"
                                    placeholder="••••••••"
                                    style="border-radius: 10px; border: 1px solid #e2e8f0; color: #475569; letter-spacing: 2px;">
                            </div>

                            <!-- Submit Button -->
                            <button @click="login()" type="button"
                                class="btn w-100 text-white fw-bold py-3 mt-2 mb-4 rounded-3 d-flex justify-content-center align-items-center"
                                style="background-color: #0f172a; transition: all 0.2s;">
                                <span class="me-2" style="font-size: 0.95rem;">Đăng nhập</span>
                                <i class='bx bx-right-arrow-alt fs-5'></i>
                            </button>
                        </form>

                        <!-- Signup Link -->
                        <div class="text-center mt-3 pb-2">
                            <span class="small fw-medium" style="color: #64748b;">Chưa có tài khoản?</span>
                            <a href="/nguoi-dung/dang-ky" class="text-decoration-none fw-bold ms-1"
                                style="color: #f97316; font-size: 0.9rem;">Đăng ký ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
export default {
    name: 'DangNhapNguoiDung',
    data() {
        return {
            nguoi_dung: {
                email: '',
                password: '',
            }
        }
    },
    methods: {
        async login() {
            try {
                const res = await axios.post('http://127.0.0.1:8000/api/nguoi-dung/login', this.nguoi_dung);
                if (res.data.status) {
                    localStorage.setItem('token_nguoi_dung', res.data.data.token);
                    try { this.$toast.success('Đăng nhập thành công!'); } catch(e) {}
                    this.$router.push('/nguoi-dung/trang-chinh');
                } else {
                    try { this.$toast.error(res.data.message || 'Đăng nhập thất bại!'); } catch(e) {}
                }
            } catch (errors) {
                const msg = errors.response?.data?.message
                    || (errors.response?.data?.errors
                        ? Object.values(errors.response.data.errors)[0]
                        : null)
                    || 'Đăng nhập thất bại!';
                try { this.$toast.error(msg); } catch(e) {}
            }
        }
    }
}
</script>

<style scoped>
input.form-control::placeholder {
    color: #94a3b8;
    letter-spacing: normal;
}

input.form-control:focus {
    border-color: #cbd5e1 !important;
    background-color: #fff !important;
}

button.btn:hover {
    background-color: #1e293b !important;
}
</style>
