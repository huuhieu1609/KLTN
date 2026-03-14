<template>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom py-3">
        <div class="container">
            <!-- Brand / Logo -->
            <a class="navbar-brand d-flex align-items-center" href="#">
                <div class="d-flex justify-content-center align-items-center text-white fw-bold rounded-3 me-2"
                    style="background-color: #0d9488; width: 40px; height: 40px; font-size: 1.1rem;">
                    AI
                </div>
                <span class="fw-bold mb-0 h5 text-dark" style="letter-spacing: -0.5px;">AI-Meet</span>
            </a>

            <!-- Toggle Button for Mobile -->
            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navigation Links & Action Button -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center gap-lg-4 mb-3 mb-lg-0 me-lg-4">
                    <li class="nav-item">
                        <a class="nav-link fw-semibold text-secondary" style="font-size: 0.95rem;" href="#">Lợi ích</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold text-secondary" style="font-size: 0.95rem;" href="#">Khách
                            hàng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold text-secondary" style="font-size: 0.95rem;" href="#">Các gói dịch
                            vụ</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center justify-content-center">
                    <a href="/nguoi-dung/dang-nhap" class="btn px-4 py-2 rounded-pill fw-semibold text-white shadow-sm"
                        style="background-color: #0f172a; font-size: 0.95rem;">Bắt đầu ngay</a>
                </div>
            </div>
        </div>
    </nav>
</template>
<script>
export default {

}
</script>
<style></style>