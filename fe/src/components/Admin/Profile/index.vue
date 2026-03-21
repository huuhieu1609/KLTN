<template>
    <div class="container-fluid py-4">
        <!-- Floating shapes for background decoration (optional but adds to premium feel if we don't have global backgrounds) -->
        
        <div class="row w-100 m-0">
            <div class="col-12 text-center p-0">
                <!-- Custom Pill Navigation -->
                <ul class="nav nav-pills custom-nav-pills justify-content-center" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#profile-tab"
                            type="button" role="tab" aria-selected="true">
                            <i class="bx bx-user me-2"></i>Hồ Sơ
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#update-tab" type="button"
                            role="tab" aria-selected="false">
                            <i class="bx bx-edit me-2"></i>Tính Chỉnh
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#password-tab"
                            type="button" role="tab" aria-selected="false">
                            <i class="bx bx-shield-quarter me-2"></i>Bảo Mật
                        </button>
                    </li>
                </ul>

                <!-- Tab Content -->
                <div class="tab-content text-start mt-3 px-3">
                    <!-- Thông Tin Cá Nhân -->
                    <div class="tab-pane fade show active" id="profile-tab" role="tabpanel">
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="card profile-card">
                                    <div class="profile-header-gradient text-white text-center">
                                        <h3 class="mb-0 text-white fw-bold">Thông Tin Cá Nhân</h3>
                                        <p class="text-white-50 mb-0 mt-2 fs-6">Quản lý không gian hồ sơ của bạn</p>
                                    </div>
                                    <div class="card-body p-5">
                                        <div class="text-center mb-5 mt-n5 position-relative" style="top: -65px;">
                                            <div class="avatar-wrapper">
                                                <img :src="anh_tmp || (profile.hinh_anh ? (profile.hinh_anh.startsWith('http') ? profile.hinh_anh : 'http://127.0.0.1:8000' + profile.hinh_anh) : '../../../assets/images/avatars/avatar-1.png')"
                                                    class="avatar-img shadow-sm">
                                                <label for="inputAvatar" class="camera-btn" title="Thay đổi ảnh đại diện">
                                                    <i class="bx bx-camera fs-5"></i>
                                                </label>
                                                <input id="inputAvatar" type="file" class="d-none" accept="image/*"
                                                    @change="loadAnhTuLocal($event); uploadAvatar()">
                                            </div>
                                            <h3 class="mt-3 fw-bold mb-2 text-dark">{{ profile.ho_ten }}</h3>
                                            <span class="badge bg-light text-primary px-4 py-2 rounded-pill shadow-sm border" style="font-size: 0.9rem;">
                                                <i class="bx bx-crown me-1 text-warning"></i>{{ profile.ten_chuc_vu }}
                                            </span>
                                        </div>
                                        
                                        <div class="row g-4 mt-n5">
                                            <div class="col-md-6">
                                                <div class="info-item d-flex align-items-center">
                                                    <div class="icon-box icon-blue">
                                                        <i class="bx bx-user"></i>
                                                    </div>
                                                    <div>
                                                        <p class="text-muted mb-1 small text-uppercase fw-semibold letter-spacing-1">Họ và Tên</p>
                                                        <h5 class="mb-0 fw-bold text-dark">{{ profile.ho_ten}}</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="info-item d-flex align-items-center">
                                                    <div class="icon-box icon-purple">
                                                        <i class="bx bx-envelope"></i>
                                                    </div>
                                                    <div>
                                                        <p class="text-muted mb-1 small text-uppercase fw-semibold letter-spacing-1">Email</p>
                                                        <h5 class="mb-0 fw-bold text-dark text-truncate" style="max-width: 220px;">{{ profile.email}}</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="info-item d-flex align-items-center">
                                                    <div class="icon-box icon-green">
                                                        <i class="bx bx-phone"></i>
                                                    </div>
                                                    <div>
                                                        <p class="text-muted mb-1 small text-uppercase fw-semibold letter-spacing-1">Số Điện Thoại</p>
                                                        <h5 class="mb-0 fw-bold text-dark">{{ profile.so_dien_thoai}}</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="info-item d-flex align-items-center">
                                                    <div class="icon-box icon-orange">
                                                        <i class="bx bx-briefcase"></i>
                                                    </div>
                                                    <div>
                                                        <p class="text-muted mb-1 small text-uppercase fw-semibold letter-spacing-1">Chức Vụ</p>
                                                        <h5 class="mb-0 fw-bold text-dark">{{ profile.ten_chuc_vu}}</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tab Cập Nhật Thông Tin -->
                    <div class="tab-pane fade" id="update-tab" role="tabpanel">
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="card profile-card">
                                    <div class="profile-header-gradient text-white text-center">
                                        <h3 class="mb-0 text-white fw-bold">Hiện Đại Hóa Hồ Sơ</h3>
                                        <p class="text-white-50 mb-0 mt-2 fs-6">Đảm bảo thông tin liên hệ của bạn luôn mới nhất</p>
                                    </div>
                                    <div class="card-body p-5">
                                        <form>
                                            <div class="row g-4">
                                                <div class="col-md-12">
                                                    <label class="form-label fw-bold text-dark mb-2 ms-1">
                                                        Họ và Tên <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="input-group input-group-lg shadow-sm">
                                                        <span class="input-group-text bg-white border-end-0 text-primary"><i class="bx bx-user fs-4"></i></span>
                                                        <input type="text" class="form-control custom-input border-start-0"
                                                            v-model="update_profile.ho_va_ten"
                                                            placeholder="VD: Nguyễn Văn A">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label fw-bold text-dark mb-2 ms-1">
                                                        Email <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="input-group input-group-lg shadow-sm">
                                                        <span class="input-group-text bg-white border-end-0 text-primary"><i class="bx bx-envelope fs-4"></i></span>
                                                        <input type="email" class="form-control custom-input border-start-0"
                                                            v-model="update_profile.email" placeholder="hotro@example.com">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label fw-bold text-dark mb-2 ms-1">
                                                        Số Điện Thoại
                                                    </label>
                                                    <div class="input-group input-group-lg shadow-sm">
                                                        <span class="input-group-text bg-white border-end-0 text-primary"><i class="bx bx-phone fs-4"></i></span>
                                                        <input type="text" class="form-control custom-input border-start-0"
                                                            v-model="update_profile.so_dien_thoai"
                                                            placeholder="0987654321">
                                                    </div>
                                                </div>
                                                <div class="col-12 text-center mt-5 mb-2">
                                                    <button type="button" class="btn btn-update w-100 btn-lg shadow" @click="updateProfile()">
                                                        <i class="bx bx-save me-2"></i>Lưu Tất Cả Thay Đổi
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tab Đổi Mật Khẩu -->
                    <div class="tab-pane fade" id="password-tab" role="tabpanel">
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="card profile-card">
                                    <div class="password-header-gradient text-white text-center">
                                        <h3 class="mb-0 text-white fw-bold">Đổi Mật Khẩu</h3>
                                        <p class="text-white-50 mb-0 mt-2 fs-6">Xây dựng hàng rào bảo mật vững chắc</p>
                                    </div>
                                    <div class="card-body p-xl-5 p-4">
                                        <div class="mb-4">
                                            <label class="form-label fw-bold text-dark mb-2 ms-1">Mật Khẩu Hiện Tại <span class="text-danger">*</span></label>
                                            <div class="input-group input-group-lg shadow-sm">
                                                <span class="input-group-text bg-white border-end-0 text-warning"><i class="bx bx-lock-open fs-4"></i></span>
                                                <input :type="showPassword.password ? 'text' : 'password'"
                                                    class="form-control custom-input password-input border-start-0"
                                                    v-model="update_password_profile.password"
                                                    placeholder="Nhập mật khẩu hiện tại">
                                                <button @click="showPassword.password = !showPassword.password"
                                                    class="btn bg-white border border-start-0 password-icon" type="button">
                                                    <i :class="showPassword.password ? 'bx bx-hide text-primary' : 'bx bx-show text-muted'"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label fw-bold text-dark mb-2 ms-1">Mật Khẩu Mới <span class="text-danger">*</span></label>
                                            <div class="input-group input-group-lg shadow-sm">
                                                <span class="input-group-text bg-white border-end-0 text-warning"><i class="bx bx-lock fs-4"></i></span>
                                                <input :type="showPassword.new_password ? 'text' : 'password'"
                                                    class="form-control custom-input password-input border-start-0"
                                                    v-model="update_password_profile.new_password"
                                                    placeholder="Ít nhất 6 ký tự">
                                                <button @click="showPassword.new_password = !showPassword.new_password"
                                                    class="btn bg-white border border-start-0 password-icon" type="button">
                                                    <i :class="showPassword.new_password ? 'bx bx-hide text-primary' : 'bx bx-show text-muted'"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="mb-5">
                                            <label class="form-label fw-bold text-dark mb-2 ms-1">Xác Nhận Mật Khẩu Mới <span class="text-danger">*</span></label>
                                            <div class="input-group input-group-lg shadow-sm">
                                                <span class="input-group-text bg-white border-end-0 text-warning"><i class="bx bx-check-shield fs-4"></i></span>
                                                <input :type="showPassword.re_newpassword ? 'text' : 'password'"
                                                    class="form-control custom-input password-input border-start-0"
                                                    v-model="update_password_profile.re_newpassword"
                                                    placeholder="Nhập lại mật khẩu mới">
                                                <button @click="showPassword.re_newpassword = !showPassword.re_newpassword"
                                                    class="btn bg-white border border-start-0 password-icon" type="button">
                                                    <i :class="showPassword.re_newpassword ? 'bx bx-hide text-primary' : 'bx bx-show text-muted'"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="text-center mb-2">
                                            <button type="button" class="btn btn-update w-100 btn-lg shadow" @click="updatePassword()" style="background: linear-gradient(135deg, #f6d365 0%, #fda085 100%);">
                                                <i class="bx bx-shield-quarter me-2"></i>Cập Nhật Mật Khẩu
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
    data() {
        return {
            profile: {},
            update_profile: {},
            update_password_profile: {
                password: '',
                new_password: '',
                re_newpassword: ''
            },
            file_anh: null,
            anh_tmp: '',
            showPassword: {
                password: false,
                new_password: false,
                re_newpassword: false
            },
            list_chuc_vu: []
        }
    },
    mounted() {
        this.loadProfile();
        this.loadChucVu();
    },
    methods: {
        loadChucVu() {
            axios.get('http://127.0.0.1:8000/api/admin/chuc-vu/data')
                .then((res) => {
                    if (res.data.status) {
                        this.list_chuc_vu = res.data.data;
                    } else {
                        this.$toast.error(res.data.message);
                    }
                })
                .catch((err) => {
                    const listErr = err.response.data.errors;
                    Object.values(listErr).forEach((error) => {
                        this.$toast.error(error[0]);
                    });
                });
        },
        loadProfile() {
            axios.get('http://127.0.0.1:8000/api/admin/profile/data', {
                headers: {
                    Authorization: "Bearer " + localStorage.getItem("token_admin"),
                },
            })
                .then(res => {
                    if (res.data.status) {
                        this.profile = res.data.data;
                        this.update_profile = { ...res.data.data };
                    } else {
                        this.$toast.error(res.data.message);
                    }
                })
                .catch((err) => {
                    const listErr = err.response.data.errors;
                    Object.values(listErr).forEach((error) => {
                        this.$toast.error(error[0]);
                    });
                });
        },
        updateProfile() {
            axios.post('http://127.0.0.1:8000/api/admin/profile/update', this.update_profile, {
                headers: {
                    Authorization: "Bearer " + localStorage.getItem("token_admin"),
                },
            })
                .then(res => {
                    if (res.data.status) {
                        this.loadProfile();
                        this.$toast.success(res.data.message);
                    } else {
                        this.$toast.error(res.data.message);
                    }
                })
                .catch((err) => {
                    console.error('Lỗi khi cập nhật profile:', err);
                    if (err.response && err.response.data && err.response.data.errors) {
                        const listErr = err.response.data.errors;
                        Object.values(listErr).forEach((error) => {
                            this.$toast.error(error[0]);
                        });
                    } else {
                        this.$toast.error('Không thể cập nhật thông tin');
                    }
                });
        },
        updatePassword() {
            axios.post('http://127.0.0.1:8000/api/admin/profile/change-password', this.update_password_profile, {
                headers: {
                    Authorization: "Bearer " + localStorage.getItem("token_admin"),
                },
            })
                .then(res => {
                    if (res.data.status) {
                        this.$toast.success(res.data.message);
                        this.update_password_profile = {
                            password: '',
                            new_password: '',
                            re_newpassword: ''
                        };
                        this.showPassword = {
                            password: false,
                            new_password: false,
                            re_newpassword: false
                        };
                    } else {
                        this.$toast.error(res.data.message);
                    }
                })
                .catch((err) => {
                    const listErr = err.response.data.errors;
                    Object.values(listErr).forEach((error) => {
                        this.$toast.error(error[0]);
                    });
                });
        },
        loadAnhTuLocal(event) {
            this.file_anh = event.target.files[0];
            this.anh_tmp = this.createImage(this.file_anh);
        },
        createImage(file) {
            let reader = new FileReader();
            let vm = this;
            reader.onload = (e) => {
                vm.anh_tmp = e.target.result;
            };
            reader.readAsDataURL(file);
        },
        uploadAvatar() {
            const formData = new FormData();
            formData.append('hinh_anh', this.file_anh);
            axios.post('http://127.0.0.1:8000/api/admin/profile/update-avatar', formData, {
                headers: {
                    Authorization: "Bearer " + localStorage.getItem("token_admin"),
                    'Content-Type': 'multipart/form-data'
                }
            })
                .then((res) => {
                    if (res.data.status) {
                        this.$toast.success(res.data.message);
                        this.loadProfile();
                    } else {
                        this.$toast.error(res.data.message);
                    }
                })
                .catch((err) => {
                    const listErr = err.response.data.errors;
                    Object.values(listErr).forEach((error) => {
                        this.$toast.error(error[0]);
                    });
                });
        }
    }
}
</script>

<style scoped>
.profile-card {
    border-radius: 20px;
    border: none;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
    overflow: hidden;
    background: #fff;
}

.profile-header-gradient {
    background: linear-gradient(135deg, #f36c5d 0%, #ff9a8b 100%);
    padding: 2.5rem 1.5rem 5.5rem 1.5rem;
}

.password-header-gradient {
    background: linear-gradient(135deg, #f6d365 0%, #fda085 100%);
    padding: 2.5rem 1.5rem 2rem 1.5rem;
}

.avatar-wrapper {
    position: relative;
    display: inline-block;
    padding: 6px;
    border-radius: 50%;
    background: linear-gradient(135deg, #ffffff 0%, #f1f5f9 100%);
    box-shadow: 0 8px 25px rgba(243, 108, 93, 0.2);
    z-index: 10;
}

.avatar-img {
    width: 140px;
    height: 140px;
    object-fit: cover;
    border-radius: 50%;
    border: 3px solid #fff;
}

.camera-btn {
    position: absolute;
    bottom: 2px;
    right: 5px;
    background: #fff;
    color: #f36c5d;
    width: 42px;
    height: 42px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 5px 15px rgba(0,0,0,0.15);
    cursor: pointer;
    transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    z-index: 11;
}

.camera-btn:hover {
    transform: scale(1.15) rotate(5deg);
    background: #f36c5d;
    color: #fff;
}

/* Custom Tabs */
.custom-nav-pills {
    background: #fff;
    padding: 8px;
    border-radius: 50px;
    display: inline-flex;
    margin-bottom: 2rem;
    box-shadow: 0 5px 20px rgba(0,0,0,0.05);
}

.custom-nav-pills .nav-item {
    margin: 0 4px;
}

.custom-nav-pills .nav-link {
    border-radius: 50px;
    padding: 12px 30px;
    color: #64748b;
    font-weight: 700;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    border: none;
    background: transparent;
    font-size: 0.95rem;
    letter-spacing: 0.5px;
}

.custom-nav-pills .nav-link i {
    font-size: 1.15rem;
    vertical-align: middle;
}

.custom-nav-pills .nav-link:hover:not(.active) {
    background: #f8fafc;
    color: #f36c5d;
}

.custom-nav-pills .nav-link.active {
    background: #f36c5d;
    color: #fff;
    box-shadow: 0 6px 20px rgba(243, 108, 93, 0.4);
    transform: translateY(-2px);
}

/* Info Items */
.info-item {
    background: #fff;
    border: 1px solid #f1f5f9;
    padding: 1.75rem;
    border-radius: 16px;
    transition: all 0.3s ease;
    height: 100%;
    box-shadow: 0 2px 10px rgba(0,0,0,0.02);
}

.info-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.06);
    border-color: #e2e8f0;
}

.icon-box {
    width: 58px;
    height: 58px;
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 28px;
    margin-right: 20px;
    transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

.info-item:hover .icon-box {
    transform: scale(1.1) rotate(-5deg);
}

.icon-blue { background: #eff6ff; color: #3b82f6; }
.icon-green { background: #ecfdf5; color: #10b981; }
.icon-purple { background: #f5f3ff; color: #8b5cf6; }
.icon-orange { background: #fff5f2; color: #f36c5d; }

.letter-spacing-1 {
    letter-spacing: 1px;
}

/* Form Controls */
.input-group-text {
    border-radius: 14px 0 0 14px;
    padding-left: 1.5rem;
    padding-right: 0.75rem;
    color: #94a3b8;
}

.custom-input {
    border-radius: 0 14px 14px 0;
    padding: 14px 20px;
    background: #fff;
    transition: all 0.3s;
    font-size: 1rem;
    font-weight: 500;
    color: #334155;
    border-left: 0;
}

.custom-input::placeholder {
    color: #cbd5e1;
    font-weight: 400;
}

.custom-input:focus {
    background: #fff;
    box-shadow: none;
}

.input-group {
    border-radius: 14px;
    border: 1px solid #e2e8f0;
    transition: all 0.3s;
}

.input-group:focus-within {
    box-shadow: 0 0 0 4px rgba(243, 108, 93, 0.15);
    border-color: #f36c5d;
}

.input-group:focus-within .input-group-text,
.input-group:focus-within .custom-input,
.input-group:focus-within .password-icon {
    border-color: #f36c5d !important;
}

.btn-update {
    background: linear-gradient(135deg, #f36c5d 0%, #ff9a8b 100%);
    border: none;
    border-radius: 14px;
    padding: 15px 30px;
    font-weight: 700;
    font-size: 1.1rem;
    color: white;
    transition: all 0.3s;
    box-shadow: 0 8px 25px rgba(243, 108, 93, 0.3);
    letter-spacing: 0.5px;
}

.btn-update:hover {
    transform: translateY(-3px);
    box-shadow: 0 15px 30px rgba(243, 108, 93, 0.45);
}

/* Password Tab specific */
.password-icon {
    border-left: none;
    border-radius: 0 14px 14px 0;
    color: #94a3b8;
    padding: 0 1.25rem;
    transition: all 0.3s;
    z-index: 5;
}

.password-icon:hover i {
    color: #f36c5d !important;
}

.password-input {
    border-right: none;
    border-radius: 0;
}
</style>
