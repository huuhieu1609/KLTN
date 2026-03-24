<template>
    <div class="row">
        <!-- Cột 1: Danh Sách Chức Vụ -->
        <div class="col-lg-4">
            <div class="card radius-10 border-top border-0 border-3 border-info">
                <div class="card-header">
                    <div class="row">
                        <div class="col-lg-6">
                            Danh Sách Chức Vụ
                        </div>
                        <div class="col-lg-6 text-end">
                            <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                data-bs-target="#themMoiModal">Thêm Chức Vụ</button>
                        </div>
                        <div class="col-lg-12 mt-2">
                            <div class="input-group">
                                <input type="text" v-model="search" class="form-control"
                                    placeholder="Tìm kiếm chức vụ...">
                                <button class="btn btn-outline-secondary" type="button">Tìm</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">
                            <thead class="text-center align-middle">
                                <tr class="bg-primary text-light">
                                    <th>#</th>
                                    <th>Tên Chức Vụ</th>
                                    <th>Cấp Quyền</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(value, index) in danhSachLocChucVu" :key="index" class="align-middle">
                                    <th class="text-center">{{ index + 1 }}</th>
                                    <td>{{ value.ten_chuc_vu }}</td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-info text-white"
                                            @click="chonChucVuPhanQuyen(value)">Phân Quyền</button>
                                    </td>
                                    <td class="text-center">
                                        <button @click="update_chuc_vu = Object.assign({}, value)"
                                            class="btn btn-sm btn-success me-1"
                                            data-bs-toggle="modal" data-bs-target="#updateModal">Sửa</button>
                                        <button @click="delete_quyen = value"
                                            class="btn btn-sm btn-danger"
                                            data-bs-toggle="modal" data-bs-target="#xoaQuyenModal">Xóa</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cột 2: Danh Sách Chức Năng -->
        <div class="col-lg-4">
            <div class="card radius-10 border-top border-0 border-3 border-info">
                <div class="card-header">
                    Danh Sách Chức Năng
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">
                            <thead>
                                <tr class="text-center align-middle bg-primary text-light">
                                    <th>#</th>
                                    <th>Tên Chức Năng</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <template v-for="(value, index) in list_chuc_nang" :key="index">
                                    <tr class="align-middle">
                                        <th class="text-center">{{ index + 1 }}</th>
                                        <td class="text-wrap">{{ value.ten_chuc_nang }}</td>
                                        <td class="text-center">
                                            <button class="btn btn-sm btn-success"
                                                :disabled="!chuc_vu_dang_chon"
                                                @click="themPhanQuyen(value)">Cấp Quyền</button>
                                        </td>
                                    </tr>
                                </template>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cột 3: Quyền Đang Phân -->
        <div class="col-lg-4">
            <div class="card radius-10 border-top border-0 border-3 border-info">
                <div class="card-header">
                    Đang Phân Quyền Cho:
                    <b class="text-danger">{{ chuc_vu_dang_chon ? chuc_vu_dang_chon.ten_chuc_vu : '......' }}</b>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">
                            <thead>
                                <tr class="text-center align-middle bg-primary text-light">
                                    <th>#</th>
                                    <th>Chức Năng</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <template v-for="(value, index) in list_phan_quyen_hien_thi" :key="index">
                                    <tr class="align-middle">
                                        <th class="text-center">{{ index + 1 }}</th>
                                        <td class="text-wrap">{{ tenChucNang(value.id_chuc_nang) }}</td>
                                        <td class="text-center">
                                            <button class="btn btn-sm btn-danger"
                                                @click="deletePhanQuyen(value)">Xóa</button>
                                        </td>
                                    </tr>
                                </template>
                                <tr v-if="list_phan_quyen_hien_thi.length === 0">
                                    <td colspan="3" class="text-center text-muted">
                                        {{ chuc_vu_dang_chon ? 'Chưa có quyền nào' : 'Chọn chức vụ để xem quyền' }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Thêm Chức Vụ -->
    <div class="modal fade" id="themMoiModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Thêm Mới Chức Vụ</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Tên Chức Vụ</label>
                        <input v-model="create_chuc_vu.ten_chuc_vu" type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mô Tả</label>
                        <textarea v-model="create_chuc_vu.mo_ta" class="form-control" rows="2"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-primary" @click="themChucVu()" data-bs-dismiss="modal">Tạo Mới</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Cập Nhật Chức Vụ -->
    <div class="modal fade" id="updateModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Cập Nhật Chức Vụ</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Tên Chức Vụ</label>
                        <input v-model="update_chuc_vu.ten_chuc_vu" type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mô Tả</label>
                        <textarea v-model="update_chuc_vu.mo_ta" class="form-control" rows="2"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-success" @click="updateChucVu()" data-bs-dismiss="modal">Xác Nhận</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Xóa Chức Vụ -->
    <div class="modal fade" id="xoaQuyenModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Xóa Chức Vụ</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger">
                        Bạn có chắc muốn xóa chức vụ <strong>{{ delete_quyen.ten_chuc_vu }}</strong>?
                        <br><small>Lưu ý: Điều này không thể hoàn tác!</small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-danger" @click="deleteChucVu()" data-bs-dismiss="modal">Xóa</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

const API = 'http://127.0.0.1:8000/api';

export default {
    data() {
        return {
            list_chuc_nang: [],
            list_chuc_vu: [],
            list_phan_quyen: [],   // toàn bộ chi_tiet_phan_quyen từ BE
            create_chuc_vu: { ten_chuc_vu: '', mo_ta: '' },
            update_chuc_vu: {},
            delete_quyen: {},
            chuc_vu_dang_chon: null,  // chức vụ đang được chọn để phân quyền
            search: '',
        };
    },
    computed: {
        // Lọc danh sách chức vụ theo ô tìm kiếm
        danhSachLocChucVu() {
            if (!this.search) return this.list_chuc_vu;
            const kw = this.search.toLowerCase();
            return this.list_chuc_vu.filter(v => v.ten_chuc_vu.toLowerCase().includes(kw));
        },
        // Lấy danh sách phân quyền của chức vụ đang chọn
        list_phan_quyen_hien_thi() {
            if (!this.chuc_vu_dang_chon) return [];
            return this.list_phan_quyen.filter(v => v.id_chuc_vu == this.chuc_vu_dang_chon.id);
        },
    },
    mounted() {
        this.layDataChucVu();
        this.layDataChucNang();
        this.layDataPhanQuyen();
    },
    methods: {
        // Helper: lấy tên chức năng theo id
        tenChucNang(id) {
            const cn = this.list_chuc_nang.find(x => x.id == id);
            return cn ? cn.ten_chuc_nang : '(Không xác định)';
        },

        // Chọn chức vụ để phân quyền
        chonChucVuPhanQuyen(value) {
            this.chuc_vu_dang_chon = value;
        },

        // Load dữ liệu
        layDataChucVu() {
            axios.get(`${API}/chuc-vu/data`)
                .then(res => { this.list_chuc_vu = res.data.data || []; });
        },
        layDataChucNang() {
            axios.get(`${API}/chuc-nang/data`)
                .then(res => { this.list_chuc_nang = res.data.data || []; });
        },
        layDataPhanQuyen() {
            axios.get(`${API}/chi-tiet-phan-quyen/data`)
                .then(res => { this.list_phan_quyen = res.data.data || []; });
        },

        // CRUD Chức Vụ
        themChucVu() {
            axios.post(`${API}/chuc-vu/create`, this.create_chuc_vu)
                .then(res => {
                    if (res.data.status) {
                        this.$toast.success(res.data.message);
                        this.create_chuc_vu = { ten_chuc_vu: '', mo_ta: '' };
                        this.layDataChucVu();
                    } else { this.$toast.error(res.data.message); }
                })
                .catch(res => {
                    if (res.response?.data?.errors)
                        Object.values(res.response.data.errors).forEach(v => this.$toast.error(v[0]));
                });
        },
        updateChucVu() {
            axios.post(`${API}/chuc-vu/update`, this.update_chuc_vu)
                .then(res => {
                    if (res.data.status) {
                        this.$toast.success(res.data.message);
                        this.layDataChucVu();
                    } else { this.$toast.error(res.data.message); }
                })
                .catch(res => {
                    if (res.response?.data?.errors)
                        Object.values(res.response.data.errors).forEach(v => this.$toast.error(v[0]));
                });
        },
        deleteChucVu() {
            axios.post(`${API}/chuc-vu/delete`, { id: this.delete_quyen.id })
                .then(res => {
                    if (res.data.status) {
                        this.$toast.success(res.data.message);
                        if (this.chuc_vu_dang_chon?.id === this.delete_quyen.id) this.chuc_vu_dang_chon = null;
                        this.layDataChucVu();
                    } else { this.$toast.error(res.data.message); }
                })
                .catch(res => {
                    if (res.response?.data?.errors)
                        Object.values(res.response.data.errors).forEach(v => this.$toast.error(v[0]));
                });
        },

        // Phân quyền: thêm
        themPhanQuyen(chucNang) {
            if (!this.chuc_vu_dang_chon) {
                this.$toast.error('Vui lòng chọn chức vụ trước!');
                return;
            }
            // Kiểm tra đã cấp quyền chưa
            const da_co = this.list_phan_quyen.find(
                v => v.id_chuc_vu == this.chuc_vu_dang_chon.id && v.id_chuc_nang == chucNang.id
            );
            if (da_co) {
                this.$toast.error('Chức năng này đã được cấp quyền!');
                return;
            }
            const payload = {
                id_chuc_nang: chucNang.id,
                id_chuc_vu: this.chuc_vu_dang_chon.id,
            };
            axios.post(`${API}/chi-tiet-phan-quyen/create`, payload)
                .then(res => {
                    if (res.data.status) {
                        this.$toast.success(res.data.message);
                        this.layDataPhanQuyen();
                    } else { this.$toast.error(res.data.message); }
                })
                .catch(res => {
                    if (res.response?.data?.errors)
                        Object.values(res.response.data.errors).forEach(v => this.$toast.error(v[0]));
                });
        },

        // Phân quyền: xóa
        deletePhanQuyen(value) {
            axios.post(`${API}/chi-tiet-phan-quyen/delete`, { id: value.id })
                .then(res => {
                    if (res.data.status) {
                        this.$toast.success(res.data.message);
                        this.layDataPhanQuyen();
                    } else { this.$toast.error(res.data.message); }
                })
                .catch(res => {
                    if (res.response?.data?.errors)
                        Object.values(res.response.data.errors).forEach(v => this.$toast.error(v[0]));
                });
        },
    },
};
</script>

<style></style>