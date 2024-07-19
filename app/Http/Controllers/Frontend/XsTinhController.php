<?php


namespace App\Http\Controllers\Frontend;


use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Models\Lottery;

use App\Models\Province;

use Cache;


class XsTinhController extends Controller

{

    public function getXsTinh($slug)

    {

        $province = Province::where('slug', $slug)->first();
        if (empty($province)) {
            return view('errors.404');
        }

        if ($province->mien == 1) {

            return $this->getXsmb($province);
        }

        if ($province->mien == 2) {

            return $this->getXsmt($province);
        }

        if ($province->mien == 3) {

            return $this->getXsmn($province);
        }
    }


    // XS miền bắc

    public function getXsmb($province)

    {

        $lastPage = Lottery::where('province_id', $province->id)->where('status', 1)->orderBy('date', 'DESC')->paginate(7)->lastPage();

        $xsmbs = Lottery::where('province_id', $province->id)->where('status', 1)->orderBy('date', 'DESC')->take(7)->get();


        $checkKQMBToday = $this->checkKQMBToDay();


        $name = $province->name;

        $name_kd = chuyenChuoi($province->name);

        $short_name = strtoupper($province->short_name);

        $meta_title = 'XS' . $short_name . ' - SX' . $short_name . ' - Kết Quả Xổ Số ' . $name . ' Hôm Nay';

        $meta_description = 'XS' . $short_name . ' - SX' . $short_name . ' - Kết quả xổ số ' . $name . ' ✅ ' . getListThu($province->ngay_quay) . ' hàng tuần trực tiếp nhanh chóng, chính xác.Xo So ' . $name_kd . ', XS ' . $name . ', xổ số ' . $name . ', XS' . $short_name . ' hom nay';

        $meta_keyword = 'XS' . $short_name . ', SX' . $short_name . ', Xo So ' . $name_kd . ', XS' . $short_name . ' hom nay, Xổ Số ' . $name . ', Kết Quả Xổ Số ' . $name . ', XS ' . $name . ', XS ' . $name . ' hôm nay, ket qua ' . $name_kd;


        return view('frontend.xstinh.xsmb', compact('xsmbs', 'lastPage', 'province', 'checkKQMBToday', 'meta_title', 'meta_description', 'meta_keyword'));
    }


    public function getXsmbXemThem(Request $request)

    {

        $province_id = $request->province_id;

        $xsmbs = Lottery::where('province_id', $province_id)->where('status', 1)->orderBy('date', 'DESC')->paginate(7);

        $view = $this->__buildTeamPlateXsmb($xsmbs);

        $dataReturn = [

            "template" => $view->render(),

        ];

        return json_encode($dataReturn);
    }


    private function __buildTeamPlateXsmb($xsmbs)

    {

        return view('frontend.xstinh.block_xsmb', compact('xsmbs'));
    }

    // End miền Bắc


    // XS miền Nam

    public function getXsmn($province)

    {

        $lastPage = Lottery::where('province_id', $province->id)->orderBy('date', 'DESC')->paginate(7)->lastPage();

        $xsmns = Lottery::where('province_id', $province->id)->orderBy('date', 'DESC')->take(7)->get();


        $checkKQMNToday = $this->checkKQMNToDay();


        $name = $province->name;

        $name_kd = chuyenChuoi($province->name);

        $short_name = strtoupper($province->short_name);

        switch ($short_name) {
            case 'DL':
                $thu = 'chủ nhật';
                $location = 'số 4-6 Hồ Tùng Mậu, phường 3, thành phố Đà Lạt, Lâm Đồng';
                break;
            case 'TG':
                $thu = 'chủ nhật';
                $location = 'số 5 Thủ Khoa Huân, Phường 1, Thành phố Mỹ Tho, Tiền Giang';
                break;
            case 'KG':
                $thu = 'chủ nhật';
                $location = 'Số 94 Đường 3 Tháng 2, Phường Vĩnh Bảo, TP. Rạch Giá, Kiên Giang';
                break;
            case 'HG':
                $thu = 'thứ 7';
                $location =  'Số 151, đường 3 tháng 2, phường 5, TP. Vị Thanh, tỉnh Hậu Giang';
                break;
            case 'BP':
                $thu = 'thứ 7';
                $location =  '725 QL 14, phường Tân Bình, TP Đồng Xoài, Bình Phước';
                break;
            case 'LA':
                $thu = 'thứ 7';
                $location =  'Số 120, Tuyến tránh Quốc lộ 1, khu phố Bình Cư 3, phường 6, thành phố Tân An, tỉnh Long An';
                break;
            case 'TV':
                $thu = 'thứ 6';
                $location =  '54A Phạm Ngũ Lão, Phường 1, Tp. Trà Vinh, tỉnh Trà Vinh';
                break;
            case 'BD':
                $thu = 'thứ 6';
                $location =  '01 Huỳnh Văn Nghệ, Phú Lợi, Thủ Dầu Một, Bình Dương';
                break;
            case 'VL':
                $thu = 'thứ 6';
                $location =  '51E Nguyễn Trung Trực, phường 8, tp Vĩnh Long';
                break;
            case 'BTH':
                $thu = 'thứ 5';
                $location =  '343 Võ Văn Kiệt, Phường Phú Thủy, TP Phan Thiết, Tỉnh Bình Thuận';
                break;
            case 'TN':
                $thu = 'thứ 5';
                $location =  '64C Nguyễn Thái Học, phường Mỹ Bình, TP Long Xuyên, Tây Ninh';
                break;
            case 'AG':
                $thu = 'thứ 5';
                $location =  '64C Nguyễn Thái Học, phường Mỹ Bình, TP Long Xuyên, An Giang';
                break;
            case 'DN':
                $thu = 'thứ 4';
                $location =  'Số 1894, đường Nguyễn Ái Quốc, khu phố 4, Phường Quang Vinh, Thành phố Biên Hoà, Tỉnh Đồng Nai';
                break;
            case 'ST':
                $thu = 'thứ 3';
                $location =  '16 Trần Hưng Đạo, phường 2, thành phố Sóc Trăng';
                break;
            case 'BL':
                $thu = 'thứ 3';
                $location =  'Số 9, Phan Ngọc Hiển, Phường 4, Tp Bạc Liêu';
                break;
            case 'BTR':
                $thu = 'thứ 3';
                $location =  'Số 9, Phan Ngọc Hiển, Phường 4, Tp Bến Tre';
                break;
            case 'CM':
                $thu = 'thứ 2';
                $location =  'Số 9, Phan Ngọc Hiển, Phường 4, Tp Cà Mau';
                break;
            case 'HCM':
                $thu = 'thứ 2 và thứ 7';
                $location =  '77 Đ. Trần Nhân Tôn, Phường 9, Quận 5, Hồ Chí Minh';
                break;
            case 'DT':
                $thu = 'thứ 2';
                $location =  'Số 1 Duy Tân, Phường Mỹ Phú, TP. Cao Lãnh, Đồng Tháp';
                break;
            case 'CT':
                $thu = 'thứ 4';
                $location =  '29, Cách Mạng Tháng Tám, phường Thới Bình, quận Ninh Kiều, thành phố Cần Thơ';
                break;
            case 'VT':
                $thu = 'thứ 3';
                $location =  '31 Đường 3 Tháng 2, Phường 8, TP. Vũng Tàu, Tỉnh Bà Rịa - Vũng Tàu';
                break;
        }

        $meta_title = 'XS' . $short_name . ' - Kết Quả Xổ Số ' . $name . ' hôm Nay' . ' - SX' . $short_name . ' - Xo so ba dai';

        $meta_description = 'KQXD ' . $name . ' - XS' . $short_name . ' - Xổ số ' . $name . ' hôm nay - Trực tiếp kết quả XS' . $short_name . ' lúc 16:15 ' . $thu. ' hàng tuần nhanh nhất và chính xác nhất.';

        $meta_keyword = 'XS' . $short_name . ', SX' . $short_name . ', Xo So ' . $name_kd . ', XS' . $short_name . ' hom nay, Xổ Số ' . $name . ', Kết Quả Xổ Số ' . $name . ', XS ' . $name . ', XS ' . $name . ' hôm nay, ket qua ' . $name_kd;


        return view('frontend.xstinh.xsmn', compact('thu','location','xsmns', 'lastPage', 'province', 'checkKQMNToday', 'meta_title', 'meta_description', 'meta_keyword'));
    }


    public function getXsmnXemThem(Request $request)

    {

        $province_id = $request->province_id;

        $xsmns = Lottery::where('province_id', $province_id)->orderBy('date', 'DESC')->paginate(7);

        $view = $this->__buildTeamPlateXsmn($xsmns);

        $dataReturn = [

            "template" => $view->render(),

        ];

        return json_encode($dataReturn);
    }


    private function __buildTeamPlateXsmn($xsmns)

    {

        return view('frontend.xstinh.block_xsmn', compact('xsmns'));
    }

    // End miền Nam


    // XS miền Trung

    public function getXsmt($province)

    {

        $lastPage = Lottery::where('province_id', $province->id)->orderBy('date', 'DESC')->paginate(7)->lastPage();

        $xsmts = Lottery::where('province_id', $province->id)->orderBy('date', 'DESC')->take(7)->get();


        $checkKQMTToday = $this->checkKQMTToDay();


        $name = $province->name;

        $name_kd = chuyenChuoi($province->name);

        $short_name = strtoupper($province->short_name);

        switch ($short_name) {
            case 'QT':
                $thu = 'thứ 5';
                $location = 'Số 02 đường Huyền Trân Công Chúa, Phường 1, Thành phố Đông Hà, Tỉnh Quảng Trị';
                break;
            case 'QB':
                $thu = 'thứ 5';
                $location = '08B Hương Giang, Phường Đồng Hải, Thành phố Đồng Hới, Tỉnh Quảng Bình';
                break;
            case 'BDI':
                $thu = 'thứ 5';
                $location = '304 Phan Bội Châu, Trần Hưng Đạo, Thành phố Qui Nhơn, Bình Định';
                break;
            case 'DNA':
                $thu = 'thứ 7';
                $location =  '308 Đ. 2 Tháng 9, Hoà Cường Bắc, Hải Châu, Đà Nẵng';
                break;
            case 'KH':
                $thu = 'thứ 4 và chủ nhật';
                $location =  '03 Pasteur, Xương Huân, Nha Trang, Khánh Hòa';
                break;
            case 'QNA':
                $thu = 'thứ 3';
                $location =  '04 Trần Phú, Phường Tân Thạnh, Thành phố Tam Kỳ, Tỉnh Quảng Nam';
                break;
            case 'DLK':
                $thu = 'thứ 3';
                $location =  'Số 02 Đinh Tiên Hoàng, phường Tự An, thành phố Buôn Ma Thuột, tỉnh Đắk Lắk';
                break;
            case 'PY':
                $thu = 'thứ 2';
                $location =  '204 Trần Hưng Đạo, Phường 4, Tuy Hòa, Phú Yên';
                break;
            case 'TTH':
                $thu = 'thứ 2 và chủ nhật';
                $location =  'Lô SN1, đường Hoàng Quốc Việt, xã Thủy Thanh, thị xã Hương Thủy, tỉnh Thừa Thiên Huế';
                break;
            case 'KT':
                $thu = 'chủ nhật';
                $location =  '198 Bà Triệu, Quang Trung, Kon Tum';
                break;
            case 'DNO':
                $thu = 'thứ 7';
                $location =  'số nhà 88 đường 23/3, phường Nghĩa Đức, thành phố Gia Nghĩa, tỉnh Đắk Nông';
                break;
            case 'QNG':
                $thu = 'thứ 7';
                $location =  'Số 04 Đ. Trương Quang Giao, Nghĩa Chánh Bắc, Quảng Ngãi';
                break;
            case 'GL':
                $thu = 'thứ 6';
                $location =  '60 Trần Phú (nối dài), Phường Tây Sơn, Thành phố Pleiku, Tỉnh Gia Lai';
                break;
            case 'NT':
                $thu = 'thứ 6';
                $location =  'Số 32 Đường 16 tháng 4, Phường Kinh Dinh, TP. Phan Rang - Tháp Chàm, Tỉnh Ninh Thuận';
                break;
        }


        $meta_title = 'XS' . $name . ' Kết quả xổ số ' . $name . ' hôm nay - SX' . $short_name;

        $meta_description = 'XS ' . $short_name . ' - XS' . $short_name . ' - Xổ số ' . $name . ' hôm nay - Trực tiếp kết quả XS' . $short_name . ' lúc 17:15 ' . $thu . ' hàng tuần nhanh nhất và chính xác nhất.';
        $meta_keyword = 'XS' . $short_name . ', SX' . $short_name . ', Xo So ' . $name_kd . ', XS' . $short_name . ' hom nay, Xổ Số ' . $name . ', Kết Quả Xổ Số ' . $name . ', XS ' . $name . ', XS ' . $name . ' hôm nay, ket qua ' . $name_kd;


        return view('frontend.xstinh.xsmt', compact('thu','location','xsmts', 'lastPage', 'province', 'checkKQMTToday', 'meta_title', 'meta_description', 'meta_keyword'));
    }


    public function getXsmtXemThem(Request $request)

    {

        $province_id = $request->province_id;

        $xsmts = Lottery::where('province_id', $province_id)->orderBy('date', 'DESC')->paginate(7);

        $view = $this->__buildTeamPlateXsmt($xsmts);

        $dataReturn = [

            "template" => $view->render(),

        ];

        return json_encode($dataReturn);
    }


    private function __buildTeamPlateXsmt($xsmts)

    {

        return view('frontend.xstinh.block_xsmt', compact('xsmts'));
    }

    // End miền Trung


    public function getXsTinhTheoNgay($short_name, $date)

    {

        $date_2 = str_replace('-', '/', $date);

        $date = getNgayLink($date);

        $province = Province::where('short_name', $short_name)->first();
        if (empty($province)) return view('errors.404');

        $xs_name = 'XS' . strtoupper($short_name);

        $xs_name_2 = 'SX' . strtoupper($short_name);

        $name = $province->name;

        $meta_title = $xs_name . ' ' . $date_2 . ' - Xổ số ' . $name . ' ngày ' . $date_2 . ' - ' . $xs_name_2 . ' ' . $date_2;

        $meta_description = $meta_title . ' - Kết quả Xổ số ' . $name . ' ngày ' . $date_2 . '. Tường thuật kết quả Xổ số ' . $name . ' từ trường quay nhanh, chính xác nhất';

        $meta_keyword = $xs_name . ' ' . $date_2 . ', Xổ số ' . $name . ' ngày ' . $date_2 . ', ' . $xs_name_2 . ' ' . $date_2 . ',' . $xs_name . ',' . $xs_name_2;


        if ($province->mien == 3) {

            $xsmn = Lottery::where('province_id', $province->id)->where('date', $date)->orderBy('date', 'DESC')->first();

            return view('frontend.xstinh.xsmn_date', compact('xsmn', 'province', 'meta_title', 'meta_description', 'meta_keyword', 'date_2', 'date'));


            //            return $this->getXsMNTheoNgay($kqxs,$province,$meta_title,$meta_description,$meta_keyword);

        }

        if ($province->mien == 2) {

            $xsmt = Lottery::where('province_id', $province->id)->where('date', $date)->orderBy('date', 'DESC')->first();

            return view('frontend.xstinh.xsmt_date', compact('xsmt', 'province', 'meta_title', 'meta_description', 'meta_keyword', 'date_2', 'date'));


            //            return $this->getXsMTTheoNgay($kqxs,$province,$meta_title,$meta_description,$meta_keyword);

        }

        if ($province->mien == 1) {

            $xsmb = Lottery::where('province_id', $province->id)->where('date', $date)->orderBy('date', 'DESC')->first();

            return view('frontend.xstinh.xsmb_date', compact('xsmb', 'province', 'meta_title', 'meta_description', 'meta_keyword', 'date_2', 'date'));


            //            return $this->getXsMTTheoNgay($kqxs,$province,$meta_title,$meta_description,$meta_keyword);

        }
    }


    public function getXsMNTheoNgay($xsmn, $province, $meta_title, $meta_description, $meta_keyword)

    {

        return view('frontend.xstinh.xsmn_date', compact('xsmn', 'province', 'meta_title', 'meta_description', 'meta_keyword'));
    }

    public function getXsMTTheoNgay($xsmt, $province, $meta_title, $meta_description, $meta_keyword)

    {

        return view('frontend.xstinh.xsmt_date', compact('xsmt', 'province', 'meta_title', 'meta_description', 'meta_keyword'));
    }


    public function checkKQMBToDay()

    {

        $date = date('Y-m-d', time());

        $xsmb = Lottery::where('mien', 1)->where('date', $date)->get();

        if (count($xsmb) > 0) {

            return true;
        } else {

            return false;
        }
    }


    public function checkKQMNToDay()

    {

        $date = date('Y-m-d', time());

        $xsmns = Lottery::where('mien', 3)->where('date', $date)->get();

        if (count($xsmns) > 0) {

            return true;
        } else {

            return false;
        }
    }


    public function checkKQMTToDay()

    {

        $date = date('Y-m-d', time());

        $xsmns = Lottery::where('mien', 2)->where('date', $date)->get();

        if (count($xsmns) > 0) {

            return true;
        } else {

            return false;
        }
    }
}
