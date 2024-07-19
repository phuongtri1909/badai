<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
?>
@extends('frontend.layouts.app')

@section('title','Quay thử XSMT - Quay thử Xổ số miền trung hôm nay Với Xổ Số Site')
@section('decription','Quay thử XSMT Với Xổ Số Site  ✅ - Quay thử MT - Quay thử Xổ số miền trung lấy hên trước giờ tường thuật xổ số, Quay thử Xổ số Miền Trung hôm nay trước khi mua vé xổ số kiến thiết MT, chúc bạn may mắn!')
@section('h1','Quay thử XSMT - Quay thử Xổ số miền trung hôm nay Với Xổ Số Site')

@section('breadcrumb')
    <div class="linkway">
        <div class="main">
            <div class="breadcrumb">
                <ol itemscope="" itemtype="https://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem"><a
                                itemprop="item" href="/" title="Trang chủ"><span itemprop="name">Trang chủ</span>
                            <meta itemprop="position" content="1">
                        </a></li>
                    <li> »
                    </li>
                    <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem"><a
                                itemprop="item" href="{{url()->current()}}" title="Quay thử XSMT" class="last"><span
                                    itemprop="name">Quay thử XSMT</span>
                            <meta itemprop="position" content="3">
                        </a></li>
                </ol>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="col-l">
        <div class="box quay-thu">
            <ul class="tab-panel tab-auto">
                <li><a href="{{route('quay_thu.mb')}}" title="Quay thử MB">Quay thử MB</a>
                </li>
                <li><a href="{{route('quay_thu.mn')}}" title="Quay thử MN">Quay thử MN</a>
                </li>
                <li class="active"><a href="{{route('quay_thu.mt')}}" title="Quay thử MT">Quay thử MT</a>
                </li>

            </ul>
            <div class="tit-mien clearfix">
                <h2>Quay thử miền Trung ngày {{date('d/m/Y')}}</h2>
            </div>

            <div class="box" id="trial-box">
                <div class="txt-center  bg-orange">

                    <form id="trial_form" class="form-horizontal">
                        <div class="form-group">
                            <select id="ddLotteries" name="lotteryIdName" class="form-select"
                                    onchange="xsdpquaythu.LotteriesChange()">
                                <option value="{{route('quay_thu.mb')}}">Miền Bắc</option>
                                <option value="{{route('quay_thu.mt')}}" selected>Miền Trung</option>
                                <option value="{{route('quay_thu.mn')}}">Miền Nam</option>
                                @foreach($provinces as $pro)
                                    <option value="{{route('quay_thu.tinh',$pro->short_name)}}">{{$pro->name}}</option>
                                @endforeach
                            </select>
                            <button type="button" class="btn btn-danger trial-button" id="btnStartOrStop"
                                    onclick="startRandom()">Quay thử
                            </button>
                        </div>
                        {{--<div class="form-group txt-center">--}}
                        {{--Quay thử đài: <a class="item_sublink mag-l5" href="">Thừa Thiên Huế</a>--}}
                        {{--</div>--}}
                    </form>
                </div>
                @php $d = 0; @endphp
                <div data-id="kq" class="one-city" data-region="1" data-zoom="0" data-sub="0" data-sound="1">
                    <div class="box" id="beginroll">
                        <div id="load_kq_mn_0">
                            <div data-id="kq" class="three-city" data-region="3">
                                <table class="colthreecity colgiai extendable" id="table-xsmt">
                                    <tbody>
                                    <tr class="gr-yellow">
                                        <th class="first"></th>
                                        @foreach($arr_province as $province)
                                            <th data-pid="{{$province->id}}">
                                                <a class="underline bold" href="{{route('xstinh.tinh',$province->slug)}}"
                                                   title="XS{{strtoupper($province->short_name)}}">
                                                    {{$province->name}}
                                                </a>
                                            </th>
                                        @endforeach
                                    </tr>
                                    <tr class="g8">
                                        <td>G8</td>
                                        @foreach($arr_province as $province)
                                            <td>
                                                <div data-nc="2" class="v-g8" lotterycode="{{$province->short_name}}" id="mn_prize_{{$d++}}" ><i class="fas fa-spinner fa-pulse"></i></div>
                                            </td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <td>G7</td>
                                        @foreach($arr_province as $province)
                                            <td>
                                                <div data-nc="3" class="v-g7" lotterycode="{{$province->short_name}}" id="mn_prize_{{$d++}}" ><i class="fas fa-spinner fa-pulse"></i></div>
                                            </td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <td>G6</td>
                                        @foreach($arr_province as $province)
                                            <td>
                                                <div data-nc="4" class="v-g6-0" lotterycode="{{$province->short_name}}" id="mn_prize_{{$d++}}" ><i class="fas fa-spinner fa-pulse"></i></div>
                                                <div data-nc="4" class="v-g6-1" lotterycode="{{$province->short_name}}" id="mn_prize_{{$d++}}" ><i class="fas fa-spinner fa-pulse"></i></div>
                                                <div data-nc="4" class="v-g6-2" lotterycode="{{$province->short_name}}" id="mn_prize_{{$d++}}" ><i class="fas fa-spinner fa-pulse"></i></div>
                                            </td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <td>G5</td>
                                        @foreach($arr_province as $province)
                                            <td>
                                                <div data-nc="4" class="v-g5" lotterycode="{{$province->short_name}}" id="mn_prize_{{$d++}}" ><i class="fas fa-spinner fa-pulse"></i></div>
                                            </td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <td>G4</td>
                                        @foreach($arr_province as $province)
                                            <td>
                                                <div data-nc="5" class="v-g4-0" lotterycode="{{$province->short_name}}" id="mn_prize_{{$d++}}" ><i class="fas fa-spinner fa-pulse"></i></div>
                                                <div data-nc="5" class="v-g4-1" lotterycode="{{$province->short_name}}" id="mn_prize_{{$d++}}" ><i class="fas fa-spinner fa-pulse"></i></div>
                                                <div data-nc="5" class="v-g4-2" lotterycode="{{$province->short_name}}" id="mn_prize_{{$d++}}" ><i class="fas fa-spinner fa-pulse"></i></div>
                                                <div data-nc="5" class="v-g4-3" lotterycode="{{$province->short_name}}" id="mn_prize_{{$d++}}" ><i class="fas fa-spinner fa-pulse"></i></div>
                                                <div data-nc="5" class="v-g4-4" lotterycode="{{$province->short_name}}" id="mn_prize_{{$d++}}" ><i class="fas fa-spinner fa-pulse"></i></div>
                                                <div data-nc="5" class="v-g4-5" lotterycode="{{$province->short_name}}" id="mn_prize_{{$d++}}" ><i class="fas fa-spinner fa-pulse"></i></div>
                                                <div data-nc="5" class="v-g4-6" lotterycode="{{$province->short_name}}" id="mn_prize_{{$d++}}" ><i class="fas fa-spinner fa-pulse"></i></div>
                                            </td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <td>G3</td>
                                        @foreach($arr_province as $province)
                                            <td>
                                                <div data-nc="5" class="v-g3-0" lotterycode="{{$province->short_name}}" id="mn_prize_{{$d++}}" ><i class="fas fa-spinner fa-pulse"></i></div>
                                                <div data-nc="5" class="v-g3-1" lotterycode="{{$province->short_name}}" id="mn_prize_{{$d++}}" ><i class="fas fa-spinner fa-pulse"></i></div>
                                            </td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <td>G2</td>
                                        @foreach($arr_province as $province)
                                            <td>
                                                <div data-nc="5" class="v-g2" lotterycode="{{$province->short_name}}" id="mn_prize_{{$d++}}" ><i class="fas fa-spinner fa-pulse"></i></div>
                                            </td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <td>G1</td>
                                        @foreach($arr_province as $province)
                                            <td>
                                                <div data-nc="5" class="v-g1" lotterycode="{{$province->short_name}}" id="mn_prize_{{$d++}}" ><i class="fas fa-spinner fa-pulse"></i></div>
                                            </td>
                                        @endforeach
                                    </tr>
                                    <tr class="gdb">
                                        <td>ĐB</td>
                                        @foreach($arr_province as $province)
                                            <td>
                                                <div data-nc="6" class="v-gdb" lotterycode="{{$province->short_name}}" id="mn_prize_{{$d++}}" ><i class="fas fa-spinner fa-pulse"></i></div>
                                            </td>
                                        @endforeach
                                    </tr>
                                    </tbody>
                                </table>
                                <style>
                                    .control-panel{display: none!important;}
                                </style>
                                <div class="control-panel">
                                    <form class="digits-form">
                                        <label class="radio" data-value="0">
                                            <input type="radio" name="showed-digits" value="0">
                                            <b></b>
                                            <span></span>
                                        </label>
                                        <label class="radio" data-value="2">
                                            <input type="radio" name="showed-digits" value="2">
                                            <b></b><span></span>
                                        </label>
                                        <label class="radio" data-value="3">
                                            <input type="radio" name="showed-digits" value="3">
                                            <b></b><span></span>
                                        </label>
                                    </form>
                                </div>
                            </div>
                            <div data-id="dd" class="col-firstlast colthreecity colgiai">
                                <table class="firstlast-mn bold">
                                    <tbody>
                                    <tr class="header">
                                        <th class="first">Đầu</th>
                                        @foreach($arr_province as $province)
                                            <th>{{$province->name}}</th>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <td class="clnote bold">0</td>
                                        @foreach($arr_province as $province)
                                            <td class="v-loto-dau-0" id="item_Head_{{$province->short_name}}_0"></td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <td class="clnote bold">1</td>
                                        @foreach($arr_province as $province)
                                            <td class="v-loto-dau-1" id="item_Head_{{$province->short_name}}_1">
                                            </td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <td class="clnote bold">2</td>
                                        @foreach($arr_province as $province)
                                            <td class="v-loto-dau-2" id="item_Head_{{$province->short_name}}_2">
                                            </td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <td class="clnote bold">3</td>
                                        @foreach($arr_province as $province)
                                            <td class="v-loto-dau-3" id="item_Head_{{$province->short_name}}_3">
                                            </td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <td class="clnote bold">4</td>
                                        @foreach($arr_province as $province)
                                            <td class="v-loto-dau-4" id="item_Head_{{$province->short_name}}_4">
                                            </td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <td class="clnote bold">5</td>
                                        @foreach($arr_province as $province)
                                            <td class="v-loto-dau-5" id="item_Head_{{$province->short_name}}_5">
                                            </td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <td class="clnote bold">6</td>
                                        @foreach($arr_province as $province)
                                            <td class="v-loto-dau-6" id="item_Head_{{$province->short_name}}_6">
                                            </td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <td class="clnote bold">7</td>
                                        @foreach($arr_province as $province)
                                            <td class="v-loto-dau-7" id="item_Head_{{$province->short_name}}_7">
                                            </td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <td class="clnote bold">8</td>
                                        @foreach($arr_province as $province)
                                            <td class="v-loto-dau-8" id="item_Head_{{$province->short_name}}_8">
                                            </td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <td class="clnote bold">9</td>
                                        @foreach($arr_province as $province)
                                            <td class="v-loto-dau-9" id="item_Head_{{$province->short_name}}_9">
                                            </td>
                                        @endforeach
                                    </tr>
                                    </tbody>
                                </table>
                            </div>


                        </div>
                        <div class="see-more">
                            <div class="bold see-more-title">⇒ Ngoài ra bạn có thể xem thêm kết quả: xổ số miền  Trung</div>
                            <ul class="list-html-link two-column">
                                <li>Mời bạn <a href="{{route('quay_thu.mt')}}"
                                               title="quay thử miền Trung">quay thử miền Trung</a> hôm nay để lấy hên
                                </li>
                                <li>Xem thêm <a href="{{route('xsmt')}}"
                                                title="Kết Quả XSMT">kết quả XSMT xổ số miền Trung</a></li>
                                <li>Xem bảng kết quả <a
                                            href="{{route('xsmt.skq')}}"
                                            title="XSMT 30 ngày gần nhất">XSMT 30 ngày gần nhất</a></li>
                            </ul>
                        </div>
                        <div class="box-content"> 
                            <p><span style="font-weight: 400;"><a title="Quay Thử Xổ Số Miền Trung" href="/xsmt-xo-so-mien-trung"><strong>Quay Thử Xổ Số Miền Trung</strong></a>. Quay Thử XSMT. Quay Thử XSMT h&ocirc;m nay. Quay Thử Kết Quả Xổ Số Miền Trung nhanh ch&oacute;ng v&agrave; ho&agrave;n to&agrave;n miễn ph&iacute; tại xosobadai.net</span></p>
                                <p><span style="font-weight: 400;">Quay Thử Xổ Số Miền Trung lấy cặp số may mắn trước giờ tường thuật xổ số tại xosobadai.net</span></p>
                                <p><strong>Quay thử XSMT l&agrave; g&igrave;?</strong></p>
                                <p><span style="font-weight: 400;">Quay thử XSMT Xổ Số Miền Trung&nbsp; điện tử lấy may trước giờ tường thuật xổ số. Quay thử kết quả xổ số miền Trung lấy may với những con số đẹp trước khi mua xổ số đ&agrave;i miền Trung.</span></p>
                                <p><span style="font-weight: 400;">Quay thử XSMT dựa tr&ecirc;n phương ph&aacute;p tham khảo h&igrave;nh thức thuật to&aacute;n dựa tr&ecirc;n số liệu thống k&ecirc; kết quả XSMT được lưu trữ trong 13 năm, sau đ&oacute; được hệ thống xử l&yacute; th&ocirc;ng qua lập tr&igrave;nh t&iacute;nh to&aacute;n với thuật to&aacute;n c&oacute; hiệu xuất cao để đưa ra những con số quay thử&nbsp; Xổ số Miền Trung&nbsp; với x&aacute;c xuất cao nh&acirc;t gi&uacute;p bạn c&oacute; được con số ch&iacute;nh x&aacute;c.</span></p>
                                <p><span style="font-weight: 400;">Quay thử xổ số miền Trung h&ocirc;m nay l&agrave; c&ocirc;ng cụ gi&uacute;p bạn sớm biết được kết quả may mắn h&ocirc;m nay ra con g&igrave;.</span></p>
                                <p><strong>Quay thử XSMT h&ocirc;m nay&nbsp;</strong></p>
                                <p><span style="font-weight: 400;">- Quay thử kết quả xổ số miền Trung ng&agrave;y h&ocirc;m nay gi&uacute;p bạn t&igrave;m ra con số ngẫu nhi&ecirc;n may mắn. Kết quả xổ số Miền Trung được quay tự động từ hệ thống. C&aacute;c con số xuất hiện được thống k&ecirc; lại từ bảng kết quả của những ng&agrave;y trước gi&uacute;p bạn dễ d&agrave;ng t&igrave;m ra con số may mắn nhất.</span></p>
                                <p><span style="font-weight: 400;">- Tuy nhi&ecirc;n, quay thử xổ số chỉ mang t&iacute;nh chất tham khảo l&agrave; ch&iacute;nh, ho&agrave;n to&agrave;n kh&ocirc;ng phải l&agrave; kết quả thật.</span></p>
                                <p><strong>Lịch quay mở thưởng&nbsp; trực tiếp kết quả Xổ Số Miền Trung&nbsp;</strong></p>
                                <p><span style="font-weight: 400;"><strong>- Thứ 2: </strong>Do đ&agrave;i Huế XSH v&agrave; Ph&uacute; Y&ecirc;n XSPYquay mở thưởng</span></p>
                                <p><span style="font-weight: 400;"><strong>- Thứ 3:</strong> Do đ&agrave;i Đắk Lắk XSĐL v&agrave; Quảng Nam XSQN quay mở thưởng</span></p>
                                <p><span style="font-weight: 400;"><strong>- Thứ 4: </strong>Do đ&agrave;i Đ&agrave; Nẵng XSDNA v&agrave; Kh&aacute;nh H&ograve;a XSKH quay mở thưởng</span></p>
                                <p><span style="font-weight: 400;"><strong>- Thứ 5:</strong> Do 3 đ&agrave;i B&igrave;nh Định XSBĐ , Quảng Trị XSQT v&agrave; Quảng B&igrave;nh quay mở thưởng</span></p>
                                <p><span style="font-weight: 400;"><strong>- Thứ 6:</strong> Do đ&agrave;i Gia Lai&nbsp; XSGL v&agrave; Ninh Thuận XSNT quay mở thưởng</span></p>
                                <p><span style="font-weight: 400;"><strong>- Thứ 7</strong>: Do 3 đ&agrave;i Đ&agrave; Nẵng XSDNA , Quảng Ng&atilde;i XSQN&nbsp; v&agrave; Đắk N&ocirc;ng XSĐN&nbsp; quay mở thưởng</span></p>
                                <p><span style="font-weight: 400;"><strong>- Chủ Nh&acirc;̣t: </strong>Do 3 đ&agrave;i Kon Tum XSKT , Kh&aacute;nh H&ograve;a XSKH v&agrave; Huế XSTTH quay mở thưởng</span></p>
                                <p><span style="font-weight: 400;">Xem Kết Quả Xổ Số KQXS mới nhất: Xổ Số Miền Trung (XSMT), Xổ Số miền Bắc(XSMB) v&agrave; Xổ Số miền Nam(XSMN) được cập nhật li&ecirc;n tục mỗi ng&agrave;y tr&ecirc;n xosobadai.net</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('afterJS')
    <script src="{{url('frontend/js/QuayThu.js')}}?v={{rand(1000,100000)}}"></script>
    <script>
        function startRandom() {
            if (!isrunning) {
                //$( "#rdGroup" ).prop( "checked", true );
                xsdpquaythu.RunRandomXSMN(3);
                setTimeout(function () {
                    xsdpquaythu.RunRandomComplete();
                }, 38000);
            }
        };
    </script>
@endsection