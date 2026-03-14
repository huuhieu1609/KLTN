import { createRouter, createWebHistory } from "vue-router"; // cài vue-router: npm install vue-router@next --save

const routes = [
    {
        path: '/',
        component: () => import('../components/TrangChu/index.vue'),
        meta: { layout: 'client' }
    },

    {
        path: '/admin/quan-ly-hoa-don',
        component: () => import('../components/Admin/QuanLyHoaDon/index.vue')
    },
    {
        path: '/admin/phong-hop',
        component: () => import('../components/Admin/PhongHop/index.vue')
    },
    {
        path: '/admin/goi-dich-vu',
        component: () => import('../components/Admin/Goi/index.vue')
    },
    {
        path: '/admin/doi-tac',
        component: () => import('../components/Admin/DoiTac/index.vue')
    },
    {
        path: '/admin/nguoi-dung',
        component: () => import('../components/Admin/NguoiDung/index.vue')
    },
    {
        path: '/admin/phan-quyen',
        component: () => import('../components/Admin/PhanQuyen/index.vue')
    },
    {
        path: '/admin/dang-nhap',
        component: () => import('../components/Admin/DangNhap/index.vue')
    },
    {
        path: '/admin/nhan-vien',
        component: () => import('../components/Admin/NhanVien/index.vue')
    },
    {
        path: '/admin/phan-quyen',
        component: () => import('../components/Admin/PhanQuyen/index.vue')
    },

    //Nguoi Dung
    {
        path: '/nguoi-dung/dang-nhap',
        component: () => import('../components/NguoiDung/DangNhap/index.vue'),
        meta: { layout: 'black' }
    },
    {
        path: '/nguoi-dung/quen-mat-khau',
        component: () => import('../components/NguoiDung/QuenMatKhau/index.vue'),
        meta: { layout: 'black' }
    },
    {
        path: '/nguoi-dung/dang-ky',
        component: () => import('../components/NguoiDung/DangKy/index.vue'),
        meta: { layout: 'black' }
    },
    {
        path: '/nguoi-dung/lay-lai-mat-khau',
        component: () => import('../components/NguoiDung/LayLaiMatKhau/index.vue'),
        meta: { layout: 'black' }
    },
    {
        path: '/nguoi-dung/hoa-don',
        component: () => import('../components/NguoiDung/HoaDon/index.vue')
    },
    {
        path: '/nguoi-dung/trang-chinh',
        component: () => import('../components/NguoiDung/TrangChinhNguoiDung/index.vue'),
        meta: { layout: 'black' }
    },


    //Doi Tac
    {
        path: '/doi-tac/dang-nhap',
        component: () => import('../components/DoiTac/DangNhap/index.vue'),
        meta: { layout: 'black' }
    },
    {
        path: '/doi-tac/quen-mat-khau',
        component: () => import('../components/DoiTac/QuenMatKhau/index.vue'),
        meta: { layout: 'black' }
    },
    {
        path: '/doi-tac/dang-ky',
        component: () => import('../components/DoiTac/DangKy/index.vue'),
        meta: { layout: 'black' }
    },
    {
        path: '/doi-tac/lay-lai-mat-khau',
        component: () => import('../components/DoiTac/LayLaiMatKhau/index.vue'),
        meta: { layout: 'black' }
    },


]

const router = createRouter({
    history: createWebHistory(),
    routes: routes
})

export default router