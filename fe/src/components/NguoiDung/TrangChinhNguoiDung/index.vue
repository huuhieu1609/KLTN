<template>
    <div class="d-flex vh-100 w-100 overflow-hidden"
        style="background-color: #f8fafc; font-family: 'Inter', sans-serif;">
        <!-- Left Sidebar -->
        <aside class="bg-white border-end d-flex flex-column flex-shrink-0" style="width: 260px;">
            <!-- Logo -->
            <div class="px-4 py-4 d-flex align-items-center mb-2">
                <div class="d-flex justify-content-center align-items-center rounded-3 me-3 shadow-sm"
                    style="background-color: #ea580c; width: 44px; height: 44px;">
                    <i class="bx bx-camera-movie text-white fs-4"></i>
                </div>
                <div>
                    <h5 class="mb-0 fw-bolder" style="color: #0f172a; font-size: 1.15rem; letter-spacing: -0.5px;">
                        AI-Meet</h5>
                    <small class="text-muted fw-medium" style="font-size: 0.75rem;">Trí tuệ video</small>
                </div>
            </div>

            <!-- Navigation -->
            <div class="px-3 flex-grow-1 mt-2">
                <ul class="nav nav-pills flex-column mb-auto gap-2">
                    <li class="nav-item">
                        <a href="#" @click.prevent="currentTab = 'dashboard'"
                            :class="['nav-link d-flex align-items-center fw-medium py-2 px-3 rounded-3', currentTab === 'dashboard' ? 'active-tab fw-bold' : 'text-dark text-muted-hover']">
                            <i class='bx bxs-dashboard me-3 fs-5'
                                :style="currentTab === 'dashboard' ? '' : 'color: #64748b;'"></i> Bảng điều khiển
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" @click.prevent="currentTab = 'meetings'"
                            :class="['nav-link d-flex align-items-center fw-medium py-2 px-3 rounded-3', currentTab === 'meetings' ? 'active-tab fw-bold' : 'text-dark text-muted-hover']">
                            <i class='bx bx-camera-movie me-3 fs-5'
                                :style="currentTab === 'meetings' ? '' : 'color: #64748b;'"></i> Cuộc họp
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" @click.prevent="currentTab = 'settings'"
                            :class="['nav-link d-flex align-items-center fw-medium py-2 px-3 rounded-3', currentTab === 'settings' ? 'active-tab fw-bold' : 'text-dark text-muted-hover']">
                            <i class='bx bx-cog me-3 fs-5'
                                :style="currentTab === 'settings' ? '' : 'color: #64748b;'"></i> Cài đặt
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Pro Plan -->
            <div class="p-4 mt-auto">
                <div class="p-3 rounded-4 pt-4 text-center"
                    style="background-color: #fff7ed; border: 1px solid #ffedd5;">
                    <div class="text-start mb-2">
                        <h6 class="fw-bolder mb-1" style="color: #ea580c; font-size: 0.75rem; letter-spacing: 0.5px;">
                            GÓI PRO</h6>
                        <p class="small text-muted mb-3 lh-sm" style="font-size: 0.8rem; color: #64748b !important;">
                            Theo dõi khuôn mặt AI không giới hạn & lưu trữ.</p>
                    </div>
                    <button class="btn w-100 fw-bold text-white shadow-sm"
                        style="background-color: #ea580c; font-size: 0.85rem; padding: 10px 0; border-radius: 8px;">Nâng
                        cấp gói</button>
                </div>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-grow-1 d-flex flex-column overflow-hidden h-100">
            <!-- Topbar -->
            <header
                class="bg-white border-bottom d-flex align-items-center justify-content-between px-4 p-xl-4 flex-shrink-0"
                style="height: 80px;">
                <!-- Search -->
                <div class="position-relative" style="width: 380px;">
                    <i class='bx bx-search position-absolute top-50 translate-middle-y text-muted fs-5'
                        style="left: 16px; color: #94a3b8 !important;"></i>
                    <input type="text" class="form-control bg-light border-0 shadow-none ps-5"
                        placeholder="Tìm kiếm cuộc họp, bản ghi, hoặc người..."
                        style="border-radius: 12px; font-size: 0.95rem; padding-top: 12px; padding-bottom: 12px; color: #64748b;">
                </div>

                <!-- Right Actions -->
                <div class="d-flex align-items-center gap-3">
                    <button
                        class="btn btn-light rounded-circle p-2 d-flex align-items-center justify-content-center bg-white border position-relative shadow-sm"
                        style="width: 44px; height: 44px; border-color: #e2e8f0 !important;">
                        <i class='bx bxs-bell fs-5' style="color: #334155;"></i>
                    </button>
                    <button
                        class="btn btn-light rounded-circle p-2 d-flex align-items-center justify-content-center bg-white border shadow-sm"
                        style="width: 44px; height: 44px; border-color: #e2e8f0 !important;">
                        <i class='bx bxs-message-square-dots fs-5' style="color: #334155;"></i>
                    </button>
                    <div class="border-start ms-2 ps-4 d-flex align-items-center position-relative"
                        style="border-color: #e2e8f0 !important;">
                        <div class="text-end me-3 d-none d-md-block">
                            <h6 class="mb-0 fw-bolder" style="font-size: 0.95rem; color: #0f172a;">Alex Thompson</h6>
                            <small class="fw-bold" style="font-size: 0.75rem; color: #ea580c;">Đã xác thực danh
                                tính</small>
                        </div>
                        <div @click="toggleDropdown" class="d-flex align-items-center" style="cursor: pointer;">
                            <img src="https://images.unsplash.com/photo-1599566150163-29194dcaad36?auto=format&fit=crop&w=150&q=80"
                                alt="Profile" class="rounded-circle border border-2 shadow-sm" width="46" height="46"
                                style="border-color: #fff !important; outline: 2px solid #ea580c;">
                            <i class="bx bx-chevron-down ms-2" style="color: #64748b;"></i>
                        </div>
                        <!-- Dropdown Menu -->
                        <div v-if="showDropdown"
                            class="dropdown-menu show position-absolute bg-white border shadow-sm rounded-3 p-2"
                            style="top: 100%; right: 0; z-index: 1000; min-width: 180px;">
                            <button class="dropdown-item text-danger fw-semibold py-2 px-3 rounded-2"
                                style="cursor: pointer;">
                                <i class="bx bx-log-out me-2"></i>Đăng xuất
                            </button>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Scrollable Content Area -->
            <div class="flex-grow-1 overflow-auto p-4 p-xl-5">
                <div style="max-width: 1100px; margin: 0 auto;">

                    <!-- TAB: DASHBOARD -->
                    <div v-if="currentTab === 'dashboard'">
                        <!-- User Welcome Row -->
                        <div class="row mb-4">
                            <div class="col-md-6 d-flex flex-column justify-content-end">
                                <h2 class="fw-bolder mb-2"
                                    style="color: #0f172a; letter-spacing: -0.5px; font-size: 2rem;">Chào mừng trở lại,
                                    Alex!
                                </h2>
                                <p class="mb-0" style="font-size: 1rem; color: #64748b;">Bạn có 3 cuộc họp được lên lịch
                                    hôm nay.</p>
                            </div>
                            <div class="col-md-6 d-none d-md-flex flex-column justify-content-end align-items-end mb-1">
                                <p class="text-muted fw-bold mb-1" style="font-size: 0.75rem; letter-spacing: 1px;">
                                    GIỜ ĐỊA PHƯƠNG</p>
                                <h3 class="fw-bolder mb-0"
                                    style="color: #0f172a; font-size: 1.5rem; letter-spacing: -0.5px;">10:45 AM</h3>
                            </div>
                        </div>

                        <!-- Action Cards Row -->
                        <div class="row g-4 mb-5">
                            <!-- New Meeting -->
                            <div class="col-lg-4 col-md-6">
                                <div class="card border-0 h-100 p-4 text-white shadow-sm d-flex flex-column"
                                    style="background-color: #ea580c; border-radius: 16px;">
                                    <div>
                                        <div class="d-flex justify-content-center align-items-center rounded mb-4 shadow-sm"
                                            style="background-color: rgba(255,255,255,0.25); width: 44px; height: 44px;">
                                            <i class="bx bx-video-plus fs-4"></i>
                                        </div>
                                        <h4 class="fw-bolder mb-2" style="font-size: 1.35rem;">Cuộc họp mới</h4>
                                        <p class="mb-4 text-white"
                                            style="font-size: 0.95rem; opacity: 0.9; line-height: 1.5;">Bắt đầu cuộc họp
                                            tức thì với theo dõi khuôn mặt AI đang hoạt động.</p>
                                    </div>
                                    <div class="mt-auto">
                                        <button class="btn bg-white fw-bolder w-100 py-2"
                                            style="border-radius: 8px; color: #ea580c; font-size: 1rem;">Tạo Cuộc
                                            Họp</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Join Meeting -->
                            <div class="col-lg-4 col-md-6">
                                <div class="card border-0 h-100 p-4 shadow-sm d-flex flex-column"
                                    style="background-color: #ffffff; border-radius: 16px; border: 1px solid #f1f5f9 !important;">
                                    <div>
                                        <div class="d-flex justify-content-center align-items-center rounded-3 mb-4 shadow-sm"
                                            style="background-color: #fff7ed; width: 44px; height: 44px;">
                                            <i class="bx bxs-keyboard fs-4" style="color: #ea580c;"></i>
                                        </div>
                                        <h4 class="fw-bolder mb-2 text-dark" style="font-size: 1.35rem;">Tham gia cuộc
                                            họp
                                        </h4>
                                        <p class="mb-4" style="font-size: 0.95rem; color: #64748b; line-height: 1.5;">
                                            Nhập ID cuộc họp hoặc liên kết để kết nối.</p>
                                    </div>
                                    <div class="d-flex mt-auto gap-3">
                                        <div class="flex-grow-1 position-relative">
                                            <input type="text"
                                                class="form-control bg-light border-0 shadow-none h-100 ps-3 fw-medium"
                                                placeholder="ID: 000-000-000"
                                                style="font-size: 0.9rem; border-radius: 8px; color: #475569;">
                                        </div>
                                        <button class="btn text-white fw-bold px-4"
                                            style="background-color: #ea580c; border-radius: 8px;">Tham gia</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Face ID Status -->
                            <div class="col-lg-4 col-md-12">
                                <div class="card border-0 h-100 p-4 text-white shadow-sm position-relative overflow-hidden d-flex flex-column"
                                    style="background-color: #0f172a; border-radius: 16px;">
                                    <div class="d-flex justify-content-between align-items-start mb-4">
                                        <div>
                                            <h4 class="fw-bolder mb-2" style="font-size: 1.3rem;">Trạng thái Face ID
                                            </h4>
                                            <div class="d-flex align-items-center" style="color: #ea580c;">
                                                <i class='bx bxs-check-shield me-2 fs-5'></i>
                                                <span class="fw-semibold small">Đã đồng bộ hoàn toàn</span>
                                            </div>
                                        </div>
                                        <div class="rounded-3 overflow-hidden"
                                            style="width: 55px; height: 55px; background-color: #334155; border: 2px solid #334155;">
                                            <img src="https://images.unsplash.com/photo-1599566150163-29194dcaad36?auto=format&fit=crop&w=150&q=80"
                                                class="w-100 h-100 object-fit-cover" alt="Face Scanned"
                                                style="filter: contrast(1.1) brightness(0.9);">
                                        </div>
                                    </div>

                                    <div class="mt-auto pt-2">
                                        <div class="progress mb-3 shadow-none"
                                            style="height: 6px; background-color: #334155; border-radius: 10px;">
                                            <div class="progress-bar rounded-pill" role="progressbar"
                                                style="width: 94.2%; background-color: #ea580c;"></div>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-end">
                                            <div>
                                                <p class="small mb-0 fw-medium"
                                                    style="color: #94a3b8; font-size: 0.75rem;">Điểm tin cậy:</p>
                                                <h5 class="fw-bolder mb-0 mt-1">94.2%</h5>
                                            </div>
                                            <a href="#" class="small text-decoration-none fw-semibold"
                                                style="color: #ea580c; line-height: 1.3; text-align: right;">Quản
                                                lý<br>Sinh trắc học</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Lists Row -->
                        <div class="row g-4">
                            <!-- Upcoming Meetings -->
                            <div class="col-lg-7">
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <h4 class="fw-bolder mb-0 text-dark" style="font-size: 1.25rem;">Cuộc họp sắp tới
                                    </h4>
                                    <a href="#" class="fw-bolder text-decoration-none small" style="color: #ea580c;">Xem
                                        lịch</a>
                                </div>

                                <div class="d-flex flex-column gap-3">
                                    <!-- Meeting Item 1 -->
                                    <div class="card border-0 shadow-sm p-3" style="border-radius: 12px;">
                                        <div class="d-flex align-items-center">
                                            <div class="rounded-3 d-flex flex-column justify-content-center align-items-center px-3 py-2 me-4"
                                                style="background-color: #f8fafc; min-width: 65px; border: 1px solid #f1f5f9;">
                                                <span class="fw-bolder"
                                                    style="color: #ea580c; font-size: 1.15rem;">24</span>
                                                <span class="small fw-bolder text-muted"
                                                    style="font-size: 0.65rem;">OCT</span>
                                            </div>
                                            <div class="flex-grow-1 pe-3">
                                                <h6 class="fw-bolder mb-1 text-dark" style="font-size: 0.95rem;">Đồng bộ
                                                    sản phẩm: Đánh giá thiết kế</h6>
                                                <div class="d-flex align-items-center fw-medium mt-1"
                                                    style="color: #94a3b8; font-size: 0.8rem;">
                                                    <span>11:00 AM - 12:00 PM</span>
                                                    <span class="mx-2">•</span>
                                                    <span>ID: 882-192-331</span>
                                                </div>
                                            </div>
                                            <div class="d-none d-sm-flex align-items-center me-4">
                                                <div class="avatar-group d-flex">
                                                    <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=100&q=80"
                                                        class="rounded-circle border border-2 border-white ms-n2 shadow-sm"
                                                        width="32" height="32" style="margin-left: -12px; z-index: 3;">
                                                    <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?auto=format&fit=crop&w=100&q=80"
                                                        class="rounded-circle border border-2 border-white ms-n2 shadow-sm"
                                                        width="32" height="32" style="margin-left: -12px; z-index: 2;">
                                                    <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=100&q=80"
                                                        class="rounded-circle border border-2 border-white ms-n2 shadow-sm"
                                                        width="32" height="32" style="margin-left: -12px; z-index: 1;">
                                                    <div class="rounded-circle border border-2 border-white ms-n2 d-flex justify-content-center align-items-center bg-light text-muted fw-bold shadow-sm"
                                                        style="width: 32px; height: 32px; margin-left: -12px; z-index: 0; font-size: 0.7rem;">
                                                        +5</div>
                                                </div>
                                            </div>
                                            <button class="btn text-white fw-bold px-4 py-2"
                                                style="background-color: #ea580c; border-radius: 8px; font-size: 0.9rem;">Join</button>
                                        </div>
                                    </div>

                                    <!-- Meeting Item 2 -->
                                    <div class="card border-0 shadow-sm p-3 bg-white"
                                        style="border-radius: 12px; border: 1px solid #f1f5f9 !important;">
                                        <div class="d-flex align-items-center">
                                            <div class="rounded-3 d-flex flex-column justify-content-center align-items-center px-3 py-2 me-4"
                                                style="background-color: #f8fafc; min-width: 65px; opacity: 0.7;">
                                                <span class="fw-bolder"
                                                    style="color: #94a3b8; font-size: 1.15rem;">25</span>
                                                <span class="small fw-bolder text-muted"
                                                    style="font-size: 0.65rem;">OCT</span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="fw-bolder mb-1 text-dark" style="font-size: 0.95rem;">
                                                    Cập nhật hàng tháng cho nhà đầu tư</h6>
                                                <div class="d-flex align-items-center fw-medium mt-1"
                                                    style="color: #94a3b8; font-size: 0.8rem;">
                                                    <span>09:30 AM - 10:30 AM</span>
                                                    <span class="mx-2">•</span>
                                                    <span>ID: 110-349-882</span>
                                                </div>
                                            </div>
                                            <button class="btn fw-semibold px-4 py-2 bg-white"
                                                style="border-radius: 8px; border: 1px solid #e2e8f0; color: #64748b; font-size: 0.9rem;">Chi
                                                tiết</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Meeting History -->
                            <div class="col-lg-5">
                                <h4 class="fw-bolder mb-4 text-dark" style="font-size: 1.25rem;">Lịch sử cuộc họp</h4>

                                <div class="card border-0 shadow-sm p-0" style="border-radius: 12px;">
                                    <div class="list-group list-group-flush" style="border-radius: 12px;">

                                        <!-- History Item 1 -->
                                        <div class="list-group-item p-4 border-bottom-0 pb-3 bg-transparent">
                                            <div class="d-flex align-items-start">
                                                <div class="mt-1 me-3">
                                                    <div class="rounded-circle d-flex justify-content-center align-items-center bg-success bg-opacity-10"
                                                        style="width: 24px; height: 24px; color: #22c55e;">
                                                        <i class='bx bx-check fs-6'></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="fw-bold mb-1 text-dark" style="font-size: 0.95rem;">Cuộc
                                                        gọi kiểm tra QA</h6>
                                                    <p class="fw-medium mb-2"
                                                        style="color: #94a3b8; font-size: 0.75rem;">Hôm qua, 4:15 CH •
                                                        45 phút</p>
                                                    <div class="d-flex gap-2">
                                                        <span class="badge fw-bold"
                                                            style="background-color: #fff7ed; color: #ea580c; font-size: 0.6rem; padding: 4px 8px; letter-spacing: 0.5px;">BẢN
                                                            GHI</span>
                                                        <span class="badge fw-bold"
                                                            style="background-color: #fff7ed; color: #ea580c; font-size: 0.6rem; padding: 4px 8px; letter-spacing: 0.5px;">BẢN
                                                            GHI HÌNH</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <hr class="m-0 mx-4" style="border-color: #e2e8f0; border-top-style: dashed;">

                                        <!-- History Item 2 -->
                                        <div class="list-group-item p-4 border-bottom-0 py-3 bg-transparent">
                                            <div class="d-flex align-items-start">
                                                <div class="mt-1 me-3">
                                                    <div class="rounded-circle d-flex justify-content-center align-items-center bg-secondary bg-opacity-10"
                                                        style="width: 24px; height: 24px; color: #64748b;">
                                                        <i class='bx bx-video-off fs-6'></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="fw-bold mb-1 text-dark" style="font-size: 0.95rem;">
                                                        Bỏ lỡ: Brainstorm Marketing</h6>
                                                    <p class="fw-medium mb-0"
                                                        style="color: #94a3b8; font-size: 0.75rem;">22 tháng 10, 2:00 CH
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <hr class="m-0 mx-4" style="border-color: #e2e8f0; border-top-style: dashed;">

                                        <!-- History Item 3 -->
                                        <div class="list-group-item p-4 border-bottom-0 pt-3 bg-transparent">
                                            <div class="d-flex align-items-start">
                                                <div class="mt-1 me-3">
                                                    <div class="rounded-circle d-flex justify-content-center align-items-center bg-success bg-opacity-10"
                                                        style="width: 24px; height: 24px; color: #22c55e;">
                                                        <i class='bx bx-check fs-6'></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="fw-bold mb-1 text-dark" style="font-size: 0.95rem;">
                                                        Một-một với Sarah</h6>
                                                    <p class="fw-medium mb-0"
                                                        style="color: #94a3b8; font-size: 0.75rem;">22 tháng 10, 11:30
                                                        AM
                                                        • 30 mins</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="list-group-item text-center p-3 mt-2 border-top-0 rounded-bottom"
                                            style="background-color: #f8fafc; border-radius: 0 0 12px 12px;">
                                            <a href="#" class="fw-bold text-decoration-none small"
                                                style="color: #64748b;">Xem lịch sử đầy đủ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- TAB: MEETINGS -->
                    <div v-if="currentTab === 'meetings'">
                        <h2 class="fw-bolder mb-5" style="color: #0f172a; letter-spacing: -0.5px; font-size: 2rem;">
                            Cuộc họp</h2>

                        <div class="row g-4">
                            <!-- Left Col: Create Room -->
                            <div class="col-lg-7">
                                <div class="card border-0 shadow-sm p-4 p-md-5" style="border-radius: 16px;">
                                    <div class="d-flex align-items-center mb-5">
                                        <div class="d-flex justify-content-center align-items-center rounded me-3 shadow-sm"
                                            style="background-color: #fff7ed; width: 44px; height: 44px;">
                                            <i class="bx bx-calendar-check fs-4" style="color: #ea580c;"></i>
                                        </div>
                                        <h4 class="fw-bolder mb-0 text-dark" style="font-size: 1.35rem;">Tạo phòng họp
                                            Room</h4>
                                    </div>

                                    <form>
                                        <!-- Meeting Title -->
                                        <div class="mb-4">
                                            <label class="form-label fw-bold mb-2 text-muted"
                                                style="font-size: 0.75rem; letter-spacing: 1px;">TIÊU ĐỀ CUỘC
                                                HỌP</label>
                                            <input type="text"
                                                class="form-control form-control-lg bg-light border-0 shadow-none px-3 py-3"
                                                placeholder="ví dụ, Đồng bộ nhóm hàng tuần"
                                                style="border-radius: 12px; font-size: 0.95rem; color: #475569;">
                                        </div>

                                        <!-- Description -->
                                        <div class="mb-4">
                                            <label class="form-label fw-bold mb-2 text-muted"
                                                style="font-size: 0.75rem; letter-spacing: 1px;">MÔ TẢ</label>
                                            <textarea
                                                class="form-control form-control-lg bg-light border-0 shadow-none px-3 py-3"
                                                rows="4"
                                                placeholder="Phác thảo chương trình nghị sự hoặc mục tiêu cuộc họp..."
                                                style="border-radius: 12px; font-size: 0.95rem; color: #475569; resize: none;"></textarea>
                                        </div>

                                        <!-- Participants -->
                                        <div class="mb-5">
                                            <label class="form-label fw-bold mb-2 text-muted"
                                                style="font-size: 0.75rem; letter-spacing: 1px;">MỜI NGƯỜI THAM
                                                GIA</label>
                                            <div class="position-relative">
                                                <i class='bx bx-at position-absolute top-50 translate-middle-y fs-5'
                                                    style="left: 1rem; color: #94a3b8;"></i>
                                                <input type="text"
                                                    class="form-control form-control-lg bg-light border-0 shadow-none ps-5 py-3"
                                                    placeholder="Thêm địa chỉ email cách nhau bằng dấu phẩy"
                                                    style="border-radius: 12px; font-size: 0.95rem; color: #475569;">
                                            </div>
                                        </div>

                                        <!-- Create Button -->
                                        <button type="button" class="btn text-white fw-bold px-4 py-3"
                                            style="background-color: #ea580c; border-radius: 8px; font-size: 1rem; min-width: 180px;">
                                            Tạo cuộc họp
                                        </button>
                                    </form>
                                </div>
                            </div>

                            <!-- Right Col: Join & History -->
                            <div class="col-lg-5">
                                <!-- Join Meeting Mini Card -->
                                <div class="card border-0 shadow-sm p-4 text-center mb-5" style="border-radius: 16px;">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="d-flex justify-content-center align-items-center rounded me-3 shadow-sm"
                                            style="background-color: #fff7ed; width: 44px; height: 44px;">
                                            <i class="bx bxs-keyboard fs-4" style="color: #ea580c;"></i>
                                        </div>
                                        <h5 class="fw-bolder mb-0 text-dark">Tham gia cuộc họp</h5>
                                    </div>
                                    <div class="d-flex gap-3">
                                        <div class="flex-grow-1">
                                            <input type="text"
                                                class="form-control bg-light border-0 shadow-none h-100 ps-3 fw-medium"
                                                placeholder="ID: 000-000-000"
                                                style="font-size: 0.95rem; border-radius: 8px; color: #475569;">
                                        </div>
                                        <button class="btn text-white fw-bold px-4"
                                            style="background-color: #ea580c; border-radius: 8px;">Join</button>
                                    </div>
                                </div>

                                <!-- Meeting History -->
                                <div>
                                    <h4 class="fw-bolder mb-4 text-dark" style="font-size: 1.25rem;">Lịch sử cuộc họp
                                    </h4>

                                    <div class="card border-0 shadow-sm p-0" style="border-radius: 12px;">
                                        <div class="list-group list-group-flush" style="border-radius: 12px;">

                                            <!-- History Item 1 -->
                                            <div class="list-group-item p-4 border-bottom-0 pb-3 bg-transparent">
                                                <div class="d-flex align-items-start">
                                                    <div class="mt-1 me-3">
                                                        <div class="rounded-circle d-flex justify-content-center align-items-center bg-success bg-opacity-10"
                                                            style="width: 24px; height: 24px; color: #22c55e;">
                                                            <i class='bx bx-check fs-6'></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="fw-bold mb-1 text-dark" style="font-size: 0.95rem;">
                                                            QA Testing Call</h6>
                                                        <p class="fw-medium mb-2"
                                                            style="color: #94a3b8; font-size: 0.75rem;">Yesterday, 4:15
                                                            PM • 45 mins</p>
                                                        <div class="d-flex gap-2">
                                                            <span class="badge fw-bold"
                                                                style="background-color: #fff7ed; color: #ea580c; font-size: 0.6rem; padding: 4px 8px; letter-spacing: 0.5px;">TRANSCRIPT</span>
                                                            <span class="badge fw-bold"
                                                                style="background-color: #fff7ed; color: #ea580c; font-size: 0.6rem; padding: 4px 8px; letter-spacing: 0.5px;">RECORDING</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr class="m-0 mx-4"
                                                style="border-color: #e2e8f0; border-top-style: dashed;">

                                            <!-- History Item 2 -->
                                            <div class="list-group-item p-4 border-bottom-0 py-3 bg-transparent">
                                                <div class="d-flex align-items-start">
                                                    <div class="mt-1 me-3">
                                                        <div class="rounded-circle d-flex justify-content-center align-items-center bg-secondary bg-opacity-10"
                                                            style="width: 24px; height: 24px; color: #64748b;">
                                                            <i class='bx bx-video-off fs-6'></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="fw-bold mb-1 text-dark" style="font-size: 0.95rem;">
                                                            Missed: Marketing Brainstorm</h6>
                                                        <p class="fw-medium mb-0"
                                                            style="color: #94a3b8; font-size: 0.75rem;">Oct 22, 2:00 PM
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr class="m-0 mx-4"
                                                style="border-color: #e2e8f0; border-top-style: dashed;">

                                            <!-- History Item 3 -->
                                            <div class="list-group-item p-4 border-bottom-0 pt-3 bg-transparent">
                                                <div class="d-flex align-items-start">
                                                    <div class="mt-1 me-3">
                                                        <div class="rounded-circle d-flex justify-content-center align-items-center bg-success bg-opacity-10"
                                                            style="width: 24px; height: 24px; color: #22c55e;">
                                                            <i class='bx bx-check fs-6'></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="fw-bold mb-1 text-dark" style="font-size: 0.95rem;">
                                                            One-on-one with Sarah</h6>
                                                        <p class="fw-medium mb-0"
                                                            style="color: #94a3b8; font-size: 0.75rem;">Oct 22, 11:30 AM
                                                            • 30 mins</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="list-group-item text-center p-3 mt-2 border-top-0 rounded-bottom"
                                                style="background-color: #f8fafc; border-radius: 0 0 12px 12px;">
                                                <a href="#" class="fw-bold text-decoration-none small"
                                                    style="color: #64748b;">View Full History</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- TAB: SETTINGS -->
                    <div v-if="currentTab === 'settings'">
                        <h2 class="fw-bolder mb-1" style="color: #0f172a; letter-spacing: -0.5px; font-size: 2rem;">
                            Cài đặt</h2>
                        <p class="mb-5" style="color: #64748b; font-size: 0.95rem;">Quản lý hồ sơ, bảo mật và tùy chọn
                            xác thực sinh trắc học của bạn.</p>

                        <!-- Profile Information -->
                        <div class="card border-0 shadow-sm p-4 p-md-5 mb-4" style="border-radius: 16px;">
                            <div class="d-flex align-items-center mb-4">
                                <div class="d-flex justify-content-center align-items-center rounded me-3"
                                    style="background-color: #fff7ed; width: 36px; height: 36px;">
                                    <i class="bx bxs-user fs-5" style="color: #ea580c;"></i>
                                </div>
                                <h5 class="fw-bolder mb-0 text-dark">Thông tin hồ sơ</h5>
                            </div>
                            <div class="row g-3 mb-4">
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold small mb-2" style="color: #334155;">Họ và
                                        tên</label>
                                    <input type="text" v-model="settings.ho_va_ten"
                                        class="form-control form-control-lg bg-light border-0 shadow-none px-3"
                                        placeholder="Họ và tên"
                                        style="border-radius: 10px; font-size: 0.95rem; color: #475569;">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold small mb-2" style="color: #334155;">Địa chỉ
                                        email</label>
                                    <input type="email" v-model="settings.email"
                                        class="form-control form-control-lg bg-light border-0 shadow-none px-3"
                                        placeholder="Email"
                                        style="border-radius: 10px; font-size: 0.95rem; color: #475569;">
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button class="btn text-white fw-bold px-4 py-2"
                                    style="background-color: #ea580c; border-radius: 10px; font-size: 0.95rem;">Update
                                    Profile</button>
                            </div>
                        </div>

                        <!-- Security -->
                        <div class="card border-0 shadow-sm p-4 p-md-5 mb-4" style="border-radius: 16px;">
                            <div class="d-flex align-items-center mb-4">
                                <div class="d-flex justify-content-center align-items-center rounded me-3"
                                    style="background-color: #fff7ed; width: 36px; height: 36px;">
                                    <i class="bx bxs-lock fs-5" style="color: #ea580c;"></i>
                                </div>
                                <h5 class="fw-bolder mb-0 text-dark">Bảo mật</h5>
                            </div>
                            <div class="row g-3 mb-4">
                                <div class="col-md-4">
                                    <label class="form-label fw-semibold small mb-2" style="color: #334155;">Mật khẩu
                                        hiện tại</label>
                                    <input type="password" v-model="settings.current_password"
                                        class="form-control form-control-lg bg-light border-0 shadow-none px-3"
                                        placeholder="••••••••"
                                        style="border-radius: 10px; font-size: 0.95rem; letter-spacing: 2px;">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label fw-semibold small mb-2" style="color: #334155;">Mật khẩu
                                        mới</label>
                                    <input type="password" v-model="settings.new_password"
                                        class="form-control form-control-lg bg-light border-0 shadow-none px-3"
                                        placeholder="••••••••"
                                        style="border-radius: 10px; font-size: 0.95rem; letter-spacing: 2px;">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label fw-semibold small mb-2" style="color: #334155;">Xác nhận
                                        mật khẩu</label>
                                    <input type="password" v-model="settings.confirm_password"
                                        class="form-control form-control-lg bg-light border-0 shadow-none px-3"
                                        placeholder="••••••••"
                                        style="border-radius: 10px; font-size: 0.95rem; letter-spacing: 2px;">
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button class="btn text-white fw-bold px-4 py-2"
                                    style="background-color: #ea580c; border-radius: 10px; font-size: 0.95rem;">Change
                                    Password</button>
                            </div>
                        </div>

                        <!-- AI Face ID -->
                        <div class="card border-0 shadow-sm p-4 p-md-5" style="border-radius: 16px;">
                            <div class="d-flex align-items-center mb-4">
                                <div class="d-flex justify-content-center align-items-center rounded me-3"
                                    style="background-color: #fff7ed; width: 36px; height: 36px;">
                                    <i class="bx bx-face fs-5" style="color: #ea580c;"></i>
                                </div>
                                <h5 class="fw-bolder mb-0 text-dark">Xác thực Face ID AI</h5>
                            </div>
                            <div class="row align-items-center g-4">
                                <div class="col-md-5 d-flex justify-content-center">
                                    <div class="position-relative d-flex justify-content-center align-items-center"
                                        style="width: 200px; height: 200px;">
                                        <div class="position-absolute rounded-circle"
                                            style="width: 200px; height: 200px; border: 2px solid #fed7aa; background: #fff7ed;">
                                        </div>
                                        <div class="position-absolute rounded-circle d-flex justify-content-center align-items-center"
                                            style="width: 150px; height: 150px; background: #f1f5f9;">
                                            <i class="bx bx-user" style="font-size: 4rem; color: #cbd5e1;"></i>
                                        </div>
                                        <div class="position-absolute"
                                            style="width: 130px; height: 2px; background: linear-gradient(90deg, transparent, #ea580c, transparent); top: 50%; opacity: 0.6;">
                                        </div>
                                        <div class="position-absolute bottom-0 bg-dark text-white px-3 py-1 rounded-pill"
                                            style="font-size: 0.7rem; font-weight: 700; letter-spacing: 1px; margin-bottom: 8px;">
                                            SẴN SÀNG QUÉT</div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <span class="badge mb-3 fw-bold px-3 py-2"
                                        style="background-color: #fef9c3; color: #854d0e; font-size: 0.75rem; border-radius: 20px;">
                                        <i class="bx bxs-circle me-1"
                                            style="font-size: 0.5rem; vertical-align: middle; color: #ca8a04;"></i>
                                        Chưa cấu hình
                                    </span>
                                    <h4 class="fw-bolder mb-2"
                                        style="color: #0f172a; font-size: 1.3rem; line-height: 1.3;">
                                        Bảo mật cuộc họp của bạn với nhận diện khuôn mặt AI
                                    </h4>
                                    <p class="mb-4" style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">
                                        Mạng lưới thần kinh tiên tiến của chúng tôi đảm bảo chỉ bạn mới có thể truy cập
                                        các cuộc họp và bản ghi nhạy cảm. Nhanh chóng, an toàn và mã hóa ở mức phần
                                        cứng.
                                    </p>

                                    <div class="mb-3">
                                        <button @click="startFaceScan"
                                            class="btn text-white fw-bold px-4 py-3 d-inline-flex align-items-center gap-2"
                                            style="background-color: #0f172a; border-radius: 10px; font-size: 0.95rem;">
                                            <i class="bx bx-scan fs-5"></i> Bắt đầu quét khuôn mặt
                                        </button>
                                        <button v-if="isScanning" @click="stopFaceScan"
                                            class="btn btn-outline-danger fw-bold ms-2 px-4 py-3"
                                            style="border-radius: 10px; font-size: 0.95rem;">
                                            Dừng quét
                                        </button>
                                    </div>

                                    <div class="mb-2">
                                        <small class="text-muted">{{ scanStatus }}</small>
                                    </div>
                                    <div class="mb-2">
                                        <small class="text-muted">Số mặt phát hiện: {{ detectedFaces }}</small>
                                    </div>

                                    <div class="position-relative" style="max-width: 320px;">
                                        <video ref="videoElement" autoplay muted playsinline
                                            style="width:100%; border-radius: 12px; display: none;"></video>
                                        <canvas ref="overlayCanvas" style="position:absolute; top:0; left:0; width:100%; height:100%; pointer-events:none;"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </main>
    </div>
</template>

<script>
import * as faceapi from 'face-api.js';
import axios from 'axios';

export default {
    name: 'TrangChinhNguoiDung',
    data() {
        return {
            currentTab: 'dashboard',
            showDropdown: false,
            settings: {
                ho_va_ten: '',
                email: '',
                current_password: '',
                new_password: '',
                confirm_password: '',
            },
            // --- Khối 1: Các biến trạng thái AI ---
            isScanning: false, // Dang quet hay khong
            scanStatus: 'Chua bat dau quet', // Dong chu thong bao trang thai
            detectedFaces: 0, // So luong mat phat hien duoc
            luong_video: null, // Luu tru media stream tu webcam
            vong_lap_nhan_dien: null, // Dung de dung setInterval khi thoi quet
            id_nguoi_dung: 1 // Gia su ID nguoi dung la 1 (Ban thay bang id thuc te)
        }
    },
    methods: {
        toggleDropdown() {
            this.showDropdown = !this.showDropdown;
        },

        // --- Khối 2: Tai mo hinh AI (Models) ---
        // Ham nay tai cac file tu thu muc public/models
        async tai_mo_hinh_ai() {
            this.scanStatus = 'Dang tai du lieu mat...';
            const DUONG_DAN_MODELS = '/model'; // public model folder served from root in Vite
            try {
                await Promise.all([
                    faceapi.nets.tinyFaceDetector.loadFromUri(DUONG_DAN_MODELS),
                    faceapi.nets.faceLandmark68Net.loadFromUri(DUONG_DAN_MODELS),
                    faceapi.nets.faceRecognitionNet.loadFromUri(DUONG_DAN_MODELS)
                ]);
                return true;
            } catch (loi) {
                this.scanStatus = 'Loi tai du lieu AI!';
                console.error(loi);
                return false;
            }
        },
        // --- Khối 3: Khoi dong Camera ---
        async startFaceScan() {
            const tai_xong = await this.tai_mo_hinh_ai();
            if (!tai_xong) return;

            this.isScanning = true;
            this.scanStatus = 'Dang mo camera...';
            
            try {
                // Bat webcam
                this.luong_video = await navigator.mediaDevices.getUserMedia({ video: {} });
                const video = this.$refs.videoElement;
                video.style.display = 'block'; // Hien thi video
                video.srcObject = this.luong_video;

                // Khi video bat dau phat thi moi bat dau nhan dien
                video.onplay = () => {
                    this.bat_dau_nhan_dien();
                };
            } catch (loi) {
                this.scanStatus = 'Loi truy cap camera!';
                this.isScanning = false;
            }
        },
        // --- Khối 4: Logic Nhan dien & Ve khung ---
        bat_dau_nhan_dien() {
            const video = this.$refs.videoElement;
            const canvas = this.$refs.overlayCanvas;
            
            // Khop kich thuoc canvas voi video
            const kich_thuoc_hien_thi = { width: video.clientWidth, height: video.clientHeight };
            faceapi.matchDimensions(canvas, kich_thuoc_hien_thi);

            this.vong_lap_nhan_dien = setInterval(async () => {
                // Quet khuon mat
                const ket_qua = await faceapi.detectAllFaces(
                    video, 
                    new faceapi.TinyFaceDetectorOptions()
                ).withFaceLandmarks().withFaceDescriptors();

                this.detectedFaces = ket_qua.length;
                this.scanStatus = ket_qua.length === 0 ? 'Chua phat hien khuon mat' : 'Dang nhan dien...';

                // Ve khung len canvas
                const ket_qua_da_chinh_kich_thuoc = faceapi.resizeResults(ket_qua, kich_thuoc_hien_thi);
                canvas.getContext('2d').clearRect(0, 0, canvas.width, canvas.height);
                faceapi.draw.drawDetections(canvas, ket_qua_da_chinh_kich_thuoc);

                // Neu tim thay dung 1 khuon mat thi tien hanh luu
                if (ket_qua.length === 1) {
                    this.scanStatus = 'Da tim thay khuon mat!';
                    const véc_tơ_khuon_mat = Array.from(ket_qua[0].descriptor);
                    this.gui_du_lieu_len_laravel(véc_tơ_khuon_mat);
                } else if (ket_qua.length > 1) {
                    this.scanStatus = 'Chi duoc phep co 1 nguoi!';
                }
            }, 200); // Quet moi 200ms
        },
        // --- Khối 5: Gui du lieu ve Database (Laravel) ---
        async gui_du_lieu_len_laravel(mang_so) {
            try {
                this.scanStatus = 'Dang luu vao he thong...';
                // Dung setInterval de tranh gui lien tuc khi mat dang quet
                clearInterval(this.vong_lap_nhan_dien); 

                const phan_hoi = await axios.post('http://127.0.0.1:8000/api/nguoi-dung/xac-thuc-khuon-mat', {
                    id: this.id_nguoi_dung,
                    du_lieu_khuon_mat: JSON.stringify(mang_so)
                });

                if (phan_hoi.status === 200) {
                    this.scanStatus = 'Cap nhat thanh cong!';
                    alert("Xác Thực Khuôn Mặt Thành Công");
                    this.stopFaceScan();
                }
            } catch (loi) {
                this.scanStatus = 'Loi ket noi server!';
                console.error(loi);
            }
        },
        stopFaceScan() {
            this.isScanning = false;
            this.scanStatus = 'Da dung quet';
            this.detectedFaces = 0;

            // Dung vong lap nhan dien
            if (this.vong_lap_nhan_dien) {
                clearInterval(this.vong_lap_nhan_dien);
                this.vong_lap_nhan_dien = null;
            }
            
            // Tat camera
            if (this.luong_video) {
                this.luong_video.getTracks().forEach(track => track.stop());
                this.luong_video = null;
            }

            const video = this.$refs.videoElement;
            const canvas = this.$refs.overlayCanvas;
            if (video) video.style.display = 'none';
            if (canvas) canvas.getContext('2d').clearRect(0, 0, canvas.width, canvas.height);
        }
    },
    // Dam bao tat camera neu nguoi dung chuyen Tab hoac dong trinh duyet
    beforeUnmount() {
        this.stopFaceScan();
    }
}

</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

/* Basic reset */
* {
    font-family: 'Inter', sans-serif;
}

/* Sidebar nav */
.active-tab {
    background-color: #fff7ed;
    color: #ea580c !important;
}

.nav-link.text-dark:hover {
    background-color: #f8fafc;
}

.text-muted-hover {
    color: #64748b !important;
}

.text-muted-hover:hover {
    color: #0f172a !important;
}

/* Input placeholder */
input::placeholder,
textarea::placeholder {
    color: #94a3b8 !important;
}

input:focus,
textarea:focus {
    box-shadow: none !important;
    border-color: #cbd5e1 !important;
    background-color: #fff !important;
}

/* Scrollbar styling */
::-webkit-scrollbar {
    width: 6px;
}

::-webkit-scrollbar-track {
    background: transparent;
}

::-webkit-scrollbar-thumb {
    background: #cbd5e1;
    border-radius: 10px;
}

::-webkit-scrollbar-thumb:hover {
    background: #94a3b8;
}

/* Avatar grouping */
.avatar-group img {
    margin-left: -12px;
}

.avatar-group img:first-child {
    margin-left: 0;
}
</style>
