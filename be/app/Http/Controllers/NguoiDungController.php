<?php

namespace App\Http\Controllers;

use App\Models\NguoiDung;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\PhanQuyen;

class NguoiDungController extends Controller
{
    public function index()
    {
        $data = NguoiDung::all();
        return response()->json([
            'status' => true,
            'data' => $data
        ]);
    }

    public function store(Request $request)
    {
        $data = NguoiDung::create($request->all());
        return response()->json([
            'status' => true,
            'message' => 'Thêm mới thành công',
            'data' => $data
        ]);
    }

    public function update(Request $request)
    {
        $data = NguoiDung::where('id', $request->id)->first();
        if ($data) {
            $data->update($request->all());
            return response()->json([
                'status' => true,
                'message' => 'Cập nhật thành công',
                'data' => $data
            ]);
        }
        return response()->json([
            'status' => false,
            'message' => 'Không tìm thấy dữ liệu'
        ]);
    }

    public function destroy(Request $request)
    {
        $data = NguoiDung::where('id', $request->id)->first();
        if ($data) {
            $data->delete();
            return response()->json([
                'status' => true,
                'message' => 'Xóa thành công'
            ]);
        }
        return response()->json([
            'status' => false,
            'message' => 'Không tìm thấy dữ liệu'
        ]);
    }

    public function search(Request $request)
    {
        $query = NguoiDung::query();
        if ($request->has('keyword') && $request->keyword != '') {
            $keyword = $request->keyword;
            $query->where(function ($q) use ($keyword) {
                $q->where('ho_va_ten', 'like', '%' . $keyword . '%');
                $q->orWhere('email', 'like', '%' . $keyword . '%');
                $q->orWhere('so_dien_thoai', 'like', '%' . $keyword . '%');
            });
        }
        $data = $query->get();
        return response()->json([
            'status' => true,
            'data' => $data
        ]);
    }

    public function changeStatus(Request $request)
    {
        $data = NguoiDung::where('id', $request->id)->first();
        if ($data) {
            $data->trang_thai = !$data->trang_thai;
            $data->save();
            return response()->json([
                'status' => true,
                'message' => 'Đã thay đổi trạng thái thành công'
            ]);
        }
        return response()->json([
            'status' => false,
            'message' => 'Không tìm thấy dữ liệu'
        ]);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $user = NguoiDung::where('email', $request->email)->first();

        if (!$user || !\Illuminate\Support\Facades\Hash::check($request->password, $user->password)) {
            return response()->json([
                'status' => false,
                'message' => 'Email hoặc mật khẩu không đúng'
            ], 401);
        }

        if (!$user->trang_thai) {
            return response()->json([
                'status' => false,
                'message' => 'Tài khoản đã bị khóa'
            ], 403);
        }

        // Tạo token sử dụng Sanctum
        $token = $user->createToken('API Token')->plainTextToken;

        return response()->json([
            'status' => true,
            'message' => 'Đăng nhập thành công',
            'data' => [
                'user' => $user,
                'token' => $token,
            ]
        ]);
    }
    public function xacThucKhuonMat(Request $request)
    {
        // 1. Kiem tra du lieu dau vao
        $request->validate([
            'id' => 'required',
            'du_lieu_khuon_mat' => 'required' // Chuoi JSON chua 128 so
        ]);

        // 2. Tim nguoi dung theo ID (Chu khong phai theo du lieu khuon mat)
        $nguoi_dung = NguoiDung::find($request->id);

        // 3. Neu tim thay nguoi dung thi luu vao Database
        if ($nguoi_dung) {
            $nguoi_dung->du_lieu_khuon_mat = $request->du_lieu_khuon_mat;
            $nguoi_dung->save(); // Luu lai vao MySQL

            return response()->json([
                'success' => true,
                'message' => 'Da luu mau khuon mat thanh cong'
            ]);
        }

        // 4. Tra ve loi neu khong tim thay
        return response()->json([
            'success' => false,
            'message' => 'Nguoi dung khong ton tai'
        ], 404);
    }
}
