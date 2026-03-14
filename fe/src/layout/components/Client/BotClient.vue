<template>
    <!-- Footer -->
    <footer class="pt-5" style="background-color: #151a24; color: #a1a1aa; border-top: 1px solid #2a3140;">
        <div class="container py-4">
            <div class="row g-4">
                <!-- Branding Column -->
                <div class="col-lg-5 pe-lg-5 mb-4 mb-lg-0">
                    <a class="d-flex align-items-center text-white text-decoration-none mb-3" href="#">
                        <div class="bg-primary text-white p-1 rounded me-2">
                            <i class="bx bx-camera-movie fs-5"></i>
                        </div>
                        <span class="fw-bold h5 mb-0">AI-Meet</span>
                    </a>
                    <p class="small lh-lg mb-4 text-white-50">Nền tảng hội nghị trực tuyến thế hệ mới tiên phong ứng dụng trí tuệ
                        nhân tạo trong bảo mật và tối ưu hiệu suất làm việc.</p>
                    <div class="d-flex gap-2">
                        <a href="#" class="btn btn-outline-secondary btn-sm rounded-circle d-flex p-2 border-opacity-50">
                            <i class='bx bxl-facebook text-white'></i>
                        </a>
                        <a href="#" class="btn btn-outline-secondary btn-sm rounded-circle d-flex p-2 border-opacity-50">
                            <i class='bx bxl-linkedin text-white'></i>
                        </a>
                    </div>
                </div>

                <!-- Spacer column to push links to the right on desktop -->
                <div class="col-lg-1 d-none d-lg-block"></div>

                <!-- Links Columns -->
                <div class="col-lg-2 col-md-4 col-sm-4 col-6">
                    <h6 class="text-white fw-bold mb-4">Sản phẩm</h6>
                    <ul class="list-unstyled small d-flex flex-column gap-3">
                        <li><a href="#" class="text-decoration-none text-muted">Tính năng</a></li>
                        <li><a href="#" class="text-decoration-none text-muted">Bảng giá</a></li>
                        <li><a href="#" class="text-decoration-none text-muted">Tải ứng dụng</a></li>
                        <li><a href="#" class="text-decoration-none text-muted">Cập nhật</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-4 col-6">
                    <h6 class="text-white fw-bold mb-4">Công ty</h6>
                    <ul class="list-unstyled small d-flex flex-column gap-3">
                        <li><a href="#" class="text-decoration-none text-muted">Về Chúng tôi</a></li>
                        <li><a href="#" class="text-decoration-none text-muted">Blog</a></li>
                        <li><a href="#" class="text-decoration-none text-muted">Tuyển dụng</a></li>
                        <li><a href="#" class="text-decoration-none text-muted">Liên hệ</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-4 col-6">
                    <h6 class="text-white fw-bold mb-4">Pháp lý</h6>
                    <ul class="list-unstyled small d-flex flex-column gap-3">
                        <li><a href="#" class="text-decoration-none text-muted">Điều khoản</a></li>
                        <li><a href="#" class="text-decoration-none text-muted">Bảo mật</a></li>
                        <li><a href="#" class="text-decoration-none text-muted">Cookies</a></li>
                    </ul>
                </div>
            </div>

            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center pt-4 mt-5 border-top border-secondary border-opacity-25 small text-center text-md-start">
                <p class="mb-3 mb-md-0">&copy; 2024 AI-Meet Corporation. Đã đăng ký bản quyền.</p>
                <div>
                    <span class="text-white">Vietnam (Tiếng Việt)</span>
                </div>
            </div>
        </div>
    </footer>
</template>

<script>
export default {
    name: "BotClient",
}
</script>

<style scoped>
.text-muted:hover {
    color: #fff !important;
}
</style>