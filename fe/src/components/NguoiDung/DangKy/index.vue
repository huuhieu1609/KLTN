<template>
    <div class="row g-0 vh-100" style="background-color: #f8fafc;">
        <!-- Left Side (Marketing & Branding) -->
        <div class="col-lg-5 col-md-5 d-none d-md-flex flex-column justify-content-between p-4 p-xl-5 text-white position-relative overflow-hidden"
            style="background: linear-gradient(145deg, #1e293b 0%, #0f172a 100%); border-top-right-radius: 0; border-bottom-right-radius: 0;">
            <!-- Glow effect at bottom right -->
            <div class="position-absolute w-100 h-100"
                style="bottom: -20%; right: -20%; background: radial-gradient(circle at 100% 100%, rgba(234, 88, 12, 0.25), transparent 60%); pointer-events: none; z-index: 0;">
            </div>

            <!-- Header -->
            <div class="position-relative z-1 mb-4">
                <div class="d-flex align-items-center mb-5">
                    <div class="d-flex justify-content-center align-items-center rounded-3 me-3 shadow-sm"
                        style="background-color: #ea580c; width: 44px; height: 44px;">
                        <i class="bx bx-camera-movie text-white fs-4"></i>
                    </div>
                    <span class="fs-4 fw-bold" style="letter-spacing: -0.5px;">AI-Meet</span>
                </div>

                <!-- Titles & Description -->
                <h1 class="display-5 fw-bolder mb-4" style="line-height: 1.25; letter-spacing: -1px;">
                    Kết nối thông minh<br>qua sức mạnh <span style="color: #ea580c;">AI</span>.
                </h1>

                <p class="fs-6 lh-lg pe-lg-4 mb-5" style="color: #cbd5e1; font-weight: 400;">
                    Trải nghiệm nền tảng họp trực tuyến thế hệ mới với khả năng tóm tắt cuộc họp, dịch thuật thời gian
                    thực và tự động hóa ghi chú.
                </p>

                <!-- Bullet points -->
                <ul class="list-unstyled d-flex flex-column gap-3 mb-5">
                    <li class="d-flex align-items-center">
                        <i class='bx bxs-check-circle me-3 fs-5' style="color: #ea580c;"></i>
                        <span style="color: #e2e8f0; font-size: 0.95rem;">Bảo mật dữ liệu tuyệt đối</span>
                    </li>
                    <li class="d-flex align-items-center">
                        <i class='bx bxs-check-circle me-3 fs-5' style="color: #ea580c;"></i>
                        <span style="color: #e2e8f0; font-size: 0.95rem;">Trợ lý ảo thông minh 24/7</span>
                    </li>
                    <li class="d-flex align-items-center">
                        <i class='bx bxs-check-circle me-3 fs-5' style="color: #ea580c;"></i>
                        <span style="color: #e2e8f0; font-size: 0.95rem;">Chất lượng hình ảnh 4K HDR</span>
                    </li>
                </ul>
            </div>

            <!-- Image placeholder matching the design -->
            <div class="position-relative z-1 mt-auto">
                <div class="rounded-4 overflow-hidden shadow" style="height: 220px; background-color: #334155;">
                    <img src="https://images.unsplash.com/photo-1573164713988-8665fc963095?auto=format&fit=crop&q=80&w=800"
                        alt="Team meeting" class="w-100 h-100 object-fit-cover" style="filter: brightness(0.9);">
                </div>
            </div>
        </div>

        <!-- Right Side (Form) -->
        <div class="col-lg-7 col-md-7 d-flex align-items-center justify-content-center p-4 p-xl-5"
            style="background-color: #f8fafc; overflow-y: auto;">
            <div style="max-width: 520px; width: 100%;">

                <!-- Form Header -->
                <div class="mb-5">
                    <h2 class="fw-bolder mb-3" style="color: #0f172a; font-size: 2rem; letter-spacing: -0.5px;">Đăng ký
                        tài khoản</h2>
                    <p class="mb-0 lh-base" style="color: #64748b; font-size: 0.95rem;">
                        Tham gia cộng đồng AI-Meet ngay hôm nay để tối ưu hóa năng suất công việc.
                    </p>
                </div>

                <form @submit.prevent="register()">
                    <!-- Full Name Input -->
                    <div class="mb-4">
                        <label class="form-label fw-bold small mb-2" style="color: #334155;">Họ và tên</label>
                        <div class="position-relative">
                            <i class='bx bxs-user position-absolute top-50 translate-middle-y fs-5'
                                style="left: 1rem; color: #94a3b8;"></i>
                            <input v-model="dang_ky.ho_va_ten" type="text" class="form-control form-control-lg bg-white shadow-none ps-5 py-3 fs-6"
                                placeholder="Nhập họ và tên của bạn"
                                style="border-radius: 10px; border: 1px solid #e2e8f0; color: #475569;">
                        </div>
                    </div>

                    <!-- Email Input -->
                    <div class="mb-4">
                        <label class="form-label fw-bold small mb-2" style="color: #334155;">Email</label>
                        <div class="position-relative">
                            <i class='bx bxs-envelope position-absolute top-50 translate-middle-y fs-5'
                                style="left: 1rem; color: #94a3b8;"></i>
                            <input v-model="dang_ky.email" type="email" class="form-control form-control-lg bg-white shadow-none ps-5 py-3 fs-6"
                                placeholder="example@email.com"
                                style="border-radius: 10px; border: 1px solid #e2e8f0; color: #475569;">
                        </div>
                    </div>

                    <!-- Phone Number Input -->
                    <div class="mb-4">
                        <label class="form-label fw-bold small mb-2" style="color: #334155;">Số điện thoại</label>
                        <div class="position-relative">
                            <i class='bx bxs-phone position-absolute top-50 translate-middle-y fs-5'
                                style="left: 1rem; color: #94a3b8;"></i>
                            <input v-model="dang_ky.so_dien_thoai" type="text" class="form-control form-control-lg bg-white shadow-none ps-5 py-3 fs-6"
                                placeholder="Nhập số điện thoại"
                                style="border-radius: 10px; border: 1px solid #e2e8f0; color: #475569;">
                        </div>
                    </div>

                    <!-- Password Input -->
                    <div class="mb-4">
                        <label class="form-label fw-bold small mb-2" style="color: #334155;">Mật khẩu</label>
                        <div class="position-relative">
                            <i class='bx bxs-lock position-absolute top-50 translate-middle-y fs-5'
                                style="left: 1rem; color: #94a3b8;"></i>
                            <input v-model="dang_ky.password" type="password"
                                class="form-control form-control-lg bg-white shadow-none ps-5 pe-5 py-3 fs-6"
                                placeholder="••••••••"
                                style="border-radius: 10px; border: 1px solid #e2e8f0; color: #475569; letter-spacing: 2px;">
                            <i class='bx bx-show position-absolute top-50 translate-middle-y fs-5 cursor-pointer'
                                style="right: 1rem; color: #94a3b8;"></i>
                        </div>
                    </div>

                    <!-- Confirm Password Input -->
                    <div class="mb-4">
                        <label class="form-label fw-bold small mb-2" style="color: #334155;">Xác nhận mật khẩu</label>
                        <div class="position-relative">
                            <i class='bx bx-rotate-left position-absolute top-50 translate-middle-y fs-5 fw-bold'
                                style="left: 1rem; color: #94a3b8;"></i>
                            <input v-model="dang_ky.re_password" type="password"
                                class="form-control form-control-lg bg-white shadow-none ps-5 py-3 fs-6"
                                placeholder="••••••••"
                                style="border-radius: 10px; border: 1px solid #e2e8f0; color: #475569; letter-spacing: 2px;">
                        </div>
                    </div>

                    <!-- Terms Checkbox -->
                    <div class="form-check mb-4 d-flex align-items-center mt-3">
                        <input class="form-check-input shadow-none mt-0 me-2 cursor-pointer" type="checkbox" id="terms"
                            style="border-color: #cbd5e1;">
                        <label class="form-check-label small" for="terms" style="color: #64748b;">
                            Tôi đồng ý với
                            <a href="#" class="text-decoration-none fw-medium" style="color: #ea580c;">Điều khoản dịch
                                vụ</a> và
                            <a href="#" class="text-decoration-none fw-medium" style="color: #ea580c;">Chính sách bảo
                                mật</a>.
                        </label>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn w-100 text-white fw-bold py-3 mb-4 rounded-3"
                        style="background-color: #ea580c; font-size: 1rem; transition: background-color 0.2s;">
                        Đăng ký ngay
                    </button>
                </form>

                <!-- Login Link -->
                <div class="text-center mb-5">
                    <span class="small fw-medium" style="color: #64748b;">Đã có tài khoản?</span>
                    <a href="/nguoi-dung/dang-nhap" class="text-decoration-none fw-bold ms-1"
                        style="color: #ea580c; font-size: 0.95rem;">Đăng nhập ngay</a>
                </div>

            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
export default {
    name: 'DangKyNguoiDung',
    data() {
        return {
            dang_ky: {
                ho_va_ten: '',
                email: '',
                so_dien_thoai: '',
                password: '',
                re_password: '',
            }
        }
    },
    methods: {
        async register() {
            if (this.dang_ky.password != this.dang_ky.re_password) {
                try {
                    this.$toast.error('Mật khẩu nhập lại không khớp!');
                } catch (e) {
                    alert('Mật khẩu nhập lại không khớp!');
                }
                return;
            }

            try {
                const res = await axios.post('http://127.0.0.1:8000/api/nguoi-dung/register', this.dang_ky);
                if (res.data.status) {
                    try {
                        this.$toast.success(res.data.message);
                    } catch (e) {
                        alert(res.data.message);
                    }
                    this.$router.push('/nguoi-dung/dang-nhap');
                } else {
                    try {
                        this.$toast.error(res.data.message || 'Đăng ký thất bại!');
                    } catch (e) {
                        alert(res.data.message || 'Đăng ký thất bại!');
                    }
                }
            } catch (errors) {
                const msg = errors.response?.data?.message
                    || (errors.response?.data?.errors
                        ? Object.values(errors.response.data.errors)[0][0]
                        : null)
                    || 'Đăng ký thất bại!';
                try {
                    this.$toast.error(msg);
                } catch (e) {
                    alert(msg);
                }
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
    border-color: #ea580c !important;
}

button.btn:hover {
    background-color: #c2410c !important;
    /* A slightly darker orange */
}

.btn-white:hover {
    background-color: #f1f5f9 !important;
}

.cursor-pointer {
    cursor: pointer;
}
</style>
