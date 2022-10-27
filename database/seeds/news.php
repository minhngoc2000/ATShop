<?php

use Illuminate\Database\Seeder;

class news extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $news= [
            ['Title' => 'Túi thủ công dáng tròn \'chiếm sóng\' xu hướng phụ kiện hè 2018', 'Slug' => 'Tui-thu-cong-dang-tron-chiem-song-thi-truong-he-2018','Content'=>'Thời trang Xu hướng | Sao style  Tư vấn
Thứ sáu, 25/5/2018, 08:00 (GMT+7)11
Túi thủ công dáng tròn \'chiếm sóng\' xu hướng phụ kiện hè 2018
Túi xách hình mặt nguyệt thiết kế trên chất liệu thiên nhiên được các tín đồ thời trang yêu thích khi xuống phố.Đối với những cô nàng mê đồ mỹ nghệ và thủ công đan lát thì túi mây tre dáng tròn không quá xa lạ. Ở mùa hè 2018, các kiểu túi hình mặt nguyệt được phái đẹp ưa chuộng và tạo nên cơn sốt mới.Các fashionista đua nhau chọn túi dáng tròn thay vì sử dụng các kiểu túi chữ nhật, túi dạng \'làn đi chợ\' như ở mùa cũ.Túi mây tre đan kết hợp cùng quai da cũng là dòng sản phẩm \'cháy hàng\' vì nó là phụ kiện dễ dàng tạo nên sự liên kết với các kiểu váy nhẹ nhàng phù hợp với không khí mùa nắng.', 'Author' => 'admin', 'Intro' => 'Túi xách hình mặt nguyệt thiết kế trên chất liệu thiên nhiên được các tín đồ thời trang yêu thích khi xuống phố.','images'=>'aaa'],

        ];
        DB::table('news')->insert($news);
    }
}
