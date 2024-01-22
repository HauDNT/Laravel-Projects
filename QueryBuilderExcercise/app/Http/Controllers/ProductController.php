<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    // 1. Thêm sản phẩm
    public function insert()
    {
        DB::table('product')->insert(
            // ['name' => 'Gấu bông',
            //  'content' => 'Gấu nhồi bông Việt Nam',
            //  'user_id' => 3,
            //  'product_cat_id' => 1]

            // ['name' => 'Nồi đất',
            //  'content' => 'Nồi đất Tây Nguyên',
            //  'user_id' => 4,
            //  'product_cat_id' => 4]

            [
                'name' => 'Tạp dề bếp',
                'content' => 'Vải lụa',
                'user_id' => 3,
                'product_cat_id' => 3
            ]
        );
    }

    // 2. Cập nhật thông tin:
    public function update($id)
    {
        DB::table('product')
            ->where('id', $id)
            ->update([
                'content' => 'Vải nilon',
                'user_id' => 4,
            ]);
    }

    // 3. Xóa sản phẩm:
    public function delete($id)
    {
        DB::table('product')
            ->where('id', $id)
            ->delete();
    }

    // 4. Show/Select sản phẩm:
    function show() {
        $products = DB::table('product')->get();
        return $products;
    }
}
