<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
?>
@extends('frontend.layouts.app')

@section('title','Quay thử XSMB - Quay thử Xổ số miền bắc hôm nay Với Xổ Số Site')
@section('decription','Quay thử XSMB Với Xổ Số Site ✅ - Quay thử MB - Quay thử Xổ số miền bắc lấy hên trước giờ tường thuật xổ số, Quay thử Xổ số Miền Bắc hôm nay trước khi mua vé xổ số kiến thiết MB, chúc bạn may mắn!')
@section('h1','Quay thử XSMB - Quay thử Xổ số miền bắc hôm nay Với Xổ Số Site')

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
                                itemprop="item" href="{{url()->current()}}" title="Quay thử XSMB" class="last"><span
                                    itemprop="name">Quay thử XSMB</span>
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
                <li class="active"><a href="{{route('quay_thu.mb')}}" title="Quay thử MB">Quay thử MB</a>
                </li>
                <li><a href="{{route('quay_thu.mn')}}" title="Quay thử MN">Quay thử MN</a>
                </li>
                <li><a href="{{route('quay_thu.mt')}}" title="Quay thử MT">Quay thử MT</a>
                </li>

            </ul>
            <div class="tit-mien clearfix">
                <h2>Quay thử miền Bắc ngày {{date('d/m/Y')}}</h2>
            </div>

            <div class="box" id="trial-box">
                <div class="txt-center  bg-orange">

                    <form id="trial_form" class="form-horizontal">
                        <div class="form-group">
                            <select id="ddLotteries" name="lotteryIdName" class="form-select"
                                    onchange="xsdpquaythu.LotteriesChange()">
                                <option value="{{route('quay_thu.mb')}}" selected>Miền Bắc</option>
                                <option value="{{route('quay_thu.mt')}}">Miền Trung</option>
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
                <div data-id="kq" class="one-city" data-region="1" data-zoom="0" data-sub="0" data-sound="1">
                    <div data-id="kq" class="one-city" data-region="1">
                        <table class="kqmb extendable" id="beginroll">
                            <tbody>
                           <tr class="db">
                                <td class="txt-giai">ĐB</td>
                                <td class="v-giai number "><span data-nc="5" class="v-gdb " id="mb_prize_26"><i
                                                class="fas fa-spinner fa-pulse"></i></span></td>
                            </tr>
                            <tr>
                                <td class="txt-giai">G.1</td>
                                <td class="v-giai number"><span data-nc="5" class="v-g1 " id="mb_prize_0"><i
                                                class="fas fa-spinner fa-pulse"></i></span></td>
                            </tr>
                            <tr class="bg_ef">
                                <td class="txt-giai">G.2</td>
                                <td class="v-giai number"><span data-nc="5" class="v-g2-0 " id="mb_prize_1"><i
                                                class="fas fa-spinner fa-pulse"></i></span><span
                                            data-nc="5" class="v-g2-1 " id="mb_prize_2"><i
                                                class="fas fa-spinner fa-pulse"></i></span></td>
                            </tr>
                            <tr>
                                <td class="txt-giai">G.3</td>
                                <td class="v-giai number"><span data-nc="5" class="v-g3-0 " id="mb_prize_3"><i
                                                class="fas fa-spinner fa-pulse"></i></span><span
                                            data-nc="5" class="v-g3-1 " id="mb_prize_4"><i
                                                class="fas fa-spinner fa-pulse"></i></span><span data-nc="5"
                                                                                                 class="v-g3-2 "
                                                                                                 id="mb_prize_5"><i
                                                class="fas fa-spinner fa-pulse"></i></span><span
                                            data-nc="5" class="v-g3-3 " id="mb_prize_6"><i
                                                class="fas fa-spinner fa-pulse"></i></span><span data-nc="5"
                                                                                                 class="v-g3-4 "
                                                                                                 id="mb_prize_7"><i
                                                class="fas fa-spinner fa-pulse"></i></span><span
                                            data-nc="5" class="v-g3-5 " id="mb_prize_8"><i
                                                class="fas fa-spinner fa-pulse"></i></span></td>
                            </tr>
                            <tr class="bg_ef">
                                <td class="txt-giai">G.4</td>
                                <td class="v-giai number"><span data-nc="4" class="v-g4-0 " id="mb_prize_9"><i
                                                class="fas fa-spinner fa-pulse"></i></span><span
                                            data-nc="4" class="v-g4-1 " id="mb_prize_10"><i
                                                class="fas fa-spinner fa-pulse"></i></span><span data-nc="4"
                                                                                                 class="v-g4-2 "
                                                                                                 id="mb_prize_11"><i
                                                class="fas fa-spinner fa-pulse"></i></span><span
                                            data-nc="4" class="v-g4-3 " id="mb_prize_12"><i
                                                class="fas fa-spinner fa-pulse"></i></span></td>
                            </tr>
                            <tr>
                                <td class="txt-giai">G.5</td>
                                <td class="v-giai number"><span data-nc="4" class="v-g5-0 " id="mb_prize_13"><i
                                                class="fas fa-spinner fa-pulse"></i></span><span
                                            data-nc="4" class="v-g5-1 " id="mb_prize_14"><i
                                                class="fas fa-spinner fa-pulse"></i></span><span data-nc="4"
                                                                                                 class="v-g5-2 "
                                                                                                 id="mb_prize_15"><i
                                                class="fas fa-spinner fa-pulse"></i></span><span
                                            data-nc="4" class="v-g5-3 " id="mb_prize_16"><i
                                                class="fas fa-spinner fa-pulse"></i></span><span data-nc="4"
                                                                                                 class="v-g5-4 "
                                                                                                 id="mb_prize_17"><i
                                                class="fas fa-spinner fa-pulse"></i></span><span
                                            data-nc="4" class="v-g5-5 " id="mb_prize_18"><i
                                                class="fas fa-spinner fa-pulse"></i></span></td>
                            </tr>
                            <tr class="bg_ef">
                                <td class="txt-giai">G.6</td>
                                <td class="v-giai number"><span data-nc="3" class="v-g6-0 " id="mb_prize_19"><i
                                                class="fas fa-spinner fa-pulse"></i></span><span
                                            data-nc="3" class="v-g6-1 " id="mb_prize_20"><i
                                                class="fas fa-spinner fa-pulse"></i></span><span data-nc="3"
                                                                                                 class="v-g6-2 "
                                                                                                 id="mb_prize_21"><i
                                                class="fas fa-spinner fa-pulse"></i></span>
                                </td>
                            </tr>
                            <tr class="g7">
                                <td class="txt-giai">G.7</td>
                                <td class="v-giai number"><span data-nc="2" class="v-g7-0 " id="mb_prize_22"><i
                                                class="fas fa-spinner fa-pulse"></i></span><span
                                            data-nc="2" class="v-g7-1 " id="mb_prize_23"><i
                                                class="fas fa-spinner fa-pulse"></i></span><span data-nc="2"
                                                                                                 class="v-g7-2 "
                                                                                                 id="mb_prize_24"><i
                                                class="fas fa-spinner fa-pulse"></i></span><span
                                            data-nc="2" class="v-g7-3 " id="mb_prize_25"><i
                                                class="fas fa-spinner fa-pulse"></i></span></td>
                            </tr>
                            </tbody>
                        </table>
                        <style>
                            .control-panel{display: none!important;}
                        </style>
                        <div class="control-panel">
                            <form class="digits-form"><label class="radio" data-value="0"><input type="radio"
                                                                                                 name="showed-digits"
                                                                                                 value="0">
                                    <b></b><span></span></label><label class="radio" data-value="2"><input type="radio"
                                                                                                           name="showed-digits"
                                                                                                           value="2">
                                    <b></b><span></span></label><label class="radio" data-value="3"><input type="radio"
                                                                                                           name="showed-digits"
                                                                                                           value="3">
                                    <b></b><span></span></label></form>
                            <div class="buttons-wrapper"><span class="zoom-in-button"><i
                                            class="icon zoom-in-icon"></i><span></span></span></div>
                        </div>
                    </div>
                    <div data-id="dd" class="col-firstlast">
                        <table class="firstlast-mb fl">
                            <tbody>
                            <tr class="header">
                                <th>Đầu</th>
                                <th>Đuôi</th>
                            </tr>
                            <tr>
                                <td class="clnote">0</td>
                                <td class="v-loto-dau-0" id="loto_mb_0"></td>
                            </tr>
                            <tr>
                                <td class="clnote">1</td>
                                <td class="v-loto-dau-1" id="loto_mb_1"></td>
                            </tr>
                            <tr>
                                <td class="clnote">2</td>
                                <td class="v-loto-dau-2" id="loto_mb_2"></td>
                            </tr>
                            <tr>
                                <td class="clnote">3</td>
                                <td class="v-loto-dau-3" id="loto_mb_3"></td>
                            </tr>
                            <tr>
                                <td class="clnote">4</td>
                                <td class="v-loto-dau-4" id="loto_mb_4"></td>
                            </tr>
                            <tr>
                                <td class="clnote">5</td>
                                <td class="v-loto-dau-5" id="loto_mb_5"></td>
                            </tr>
                            <tr>
                                <td class="clnote">6</td>
                                <td class="v-loto-dau-6" id="loto_mb_6"></td>
                            </tr>
                            <tr>
                                <td class="clnote">7</td>
                                <td class="v-loto-dau-7" id="loto_mb_7"></td>
                            </tr>
                            <tr>
                                <td class="clnote">8</td>
                                <td class="v-loto-dau-8" id="loto_mb_8"></td>
                            </tr>
                            <tr>
                                <td class="clnote">9</td>
                                <td class="v-loto-dau-9" id="loto_mb_9"></td>
                            </tr>
                            </tbody>
                        </table>
                        <table class="firstlast-mb fr">
                            <tbody>
                            <tr class="header">
                                <th>Đầu</th>
                                <th>Đuôi</th>
                            </tr>
                            <tr>
                                <td class="v-loto-duoi-0" id="duoi_loto_mb_0"></td>
                                <td class="clnote">0</td>
                            </tr>
                            <tr>
                                <td class="v-loto-duoi-1" id="duoi_loto_mb_1"></td>
                                <td class="clnote">1</td>
                            </tr>
                            <tr>
                                <td class="v-loto-duoi-2" id="duoi_loto_mb_2"></td>
                                <td class="clnote">2</td>
                            </tr>
                            <tr>
                                <td class="v-loto-duoi-3" id="duoi_loto_mb_3"></td>
                                <td class="clnote">3</td>
                            </tr>
                            <tr>
                                <td class="v-loto-duoi-4" id="duoi_loto_mb_4"></td>
                                <td class="clnote">4</td>
                            </tr>
                            <tr>
                                <td class="v-loto-duoi-5" id="duoi_loto_mb_5"></td>
                                <td class="clnote">5</td>
                            </tr>
                            <tr>
                                <td class="v-loto-duoi-6" id="duoi_loto_mb_6"></td>
                                <td class="clnote">6</td>
                            </tr>
                            <tr>
                                <td class="v-loto-duoi-7" id="duoi_loto_mb_7"></td>
                                <td class="clnote">7</td>
                            </tr>
                            <tr>
                                <td class="v-loto-duoi-8" id="duoi_loto_mb_8"></td>
                                <td class="clnote">8</td>
                            </tr>
                            <tr>
                                <td class="v-loto-duoi-9" id="duoi_loto_mb_9"></td>
                                <td class="clnote">9</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="box-content">
         <p style="text-align: justify;"><span style="font-weight: 400;"><a title="Quay Thử Xổ Số Miền Bắc" href="/quay-thu-xo-so-mien-bac"><strong>Quay Thử Xổ Số Miền Bắc</strong></a>. Quay Thử XSMB. Quay Thử XSMB h&ocirc;m nay. Quay Thử Kết Quả Xổ Số Miền Bắc nhanh ch&oacute;ng v&agrave; ho&agrave;n to&agrave;n miễn ph&iacute; tại xosobadai.net</span></p>
            <p style="text-align: justify;"><span style="font-weight: 400;">Quay Thử Xổ Số Miền Bắc lấy cặp số may mắn trước giờ tường thuật xổ số tại xosobadai.net</span></p>
            <p style="text-align: justify;"><strong>Quay Thử Xổ Số l&agrave; g&igrave;?</strong></p>
            <p style="text-align: justify;"><span style="font-weight: 400;">Quay thử xổ số được dựa tr&ecirc;n phương ph&aacute;p tham khảo h&igrave;nh thức thuật to&aacute;n dựa tr&ecirc;n số liệu thống k&ecirc; Kết quả xổ số&nbsp; KQXS được lưu trữ trong 13 năm, sau đ&oacute; được hệ thống si&ecirc;u m&aacute;y&nbsp; t&iacute;nh xử l&yacute; th&ocirc;ng qua lập tr&igrave;nh t&iacute;nh to&aacute;n của hệ thống m&aacute;y t&iacute;nh để đưa ra những con số quay thử với x&aacute;c suất cao nhất gi&uacute;p bạn c&oacute; được con số ch&iacute;nh x&aacute;c.</span></p>
            <p style="text-align: justify;"><span style="font-weight: 400;">Quay thử xổ số h&ocirc;m nay l&agrave; c&ocirc;ng cụ gi&uacute;p bạn thao t&aacute;c quay thử nhanh nhất để sớm biết được kết quả may mắn h&ocirc;m nay ra con g&igrave;.</span></p>
            <p style="text-align: justify;"><strong>Quay Thử Xổ Số Miền Bắc</strong></p>
            <p style="text-align: justify;"><span style="font-weight: 400;">- Quay thử <a title="kết quả xổ số miền Bắc" href="/xsmb-xo-so-mien-bac"><strong>kết quả xổ số miền Bắc</strong></a> h&ocirc;m nay gi&uacute;p bạn t&igrave;m ra con số ngẫu nhi&ecirc;n lấy may. Kết quả xổ số KQXS được quay tự động từ hệ thống. C&aacute;c con số xuất hiện được thống k&ecirc; lại từ bảng kết quả&nbsp; xổ số được thống k&ecirc; của những ng&agrave;y trước gi&uacute;p bạn t&igrave;m ra con số may mắn nhất.</span></p>
            <p style="text-align: justify;"><span style="font-weight: 400;">- Tuy nhi&ecirc;n, quay thử xổ số QTXS cũng chỉ mang t&iacute;nh chất tham khảo l&agrave; ch&iacute;nh, ho&agrave;n to&agrave;n kh&ocirc;ng phải l&agrave; kết quả thật.</span></p>
            <p style="text-align: justify;"><strong>Lịch quay mở thưởng Kết Quả Xổ Số Miền Bắc&nbsp;</strong></p>
            <p style="text-align: justify;"><span style="font-weight: 400;"><strong>- Thứ 2</strong>: Do đ&agrave;i H&agrave; Nội XSHN quay mở thưởng</span></p>
            <p style="text-align: justify;"><span style="font-weight: 400;"><strong>- Thứ 3:</strong> Do đ&agrave;i Quảng Ninh&nbsp; XSQN quay mở thưởng</span></p>
            <p style="text-align: justify;"><span style="font-weight: 400;"><strong>- Thứ 4: </strong>Do đ&agrave;i Bắc Ninh&nbsp; XSBN quay mở thưởng</span></p>
            <p style="text-align: justify;"><span style="font-weight: 400;"><strong>- Thứ 5:</strong> Do đ&agrave;i H&agrave; Nội &nbsp;XSHN&nbsp; quay mở thưởng</span></p>
            <p style="text-align: justify;"><span style="font-weight: 400;"><strong>- Thứ 6</strong>: Do đ&agrave;i Hải Ph&ograve;ng XSHP quay mở thưởng</span></p>
            <p style="text-align: justify;"><span style="font-weight: 400;"><strong>- Thứ 7:</strong> Do đ&agrave;i Nam Định XSNĐ quay mở thưởng</span></p>
            <p style="text-align: justify;"><span style="font-weight: 400;"><strong>- Chủ Nh&acirc;̣t:</strong> Do đ&agrave;i Th&aacute;i B&igrave;nh XSTB quay mở thưởng</span></p>
            <p style="text-align: justify;"><span style="font-weight: 400;"><strong>Lưu &yacute;: </strong>Những th&ocirc;ng tin về c&aacute;ch quay xổ số ngẫu nhi&ecirc;n ho&agrave;n to&agrave;n chỉ mang t&iacute;nh chất tham khảo. Ch&uacute;c c&aacute;c bạn may mắn.</span></p>
            <p style="text-align: justify;"><span style="font-weight: 400;">Xem Kết Quả Xổ Số mới nhất: Xổ Số Miền Bắc (<a title="XSMB" href="/xsmb-xo-so-mien-bac"><strong>XSMB</strong></a>), Xổ Số miền Trung(XSMT) v&agrave; Xổ Số miền Nam(<a title="XSMN" href="/xsmn-xo-so-mien-nam"><strong>XSMN</strong></a>) được cập nhật li&ecirc;n tục mỗi ng&agrave;y tr&ecirc;n xosobadai.net</span></p>
        </div>
    </div>
@endsection

@section('afterJS')
    <script src="{{url('frontend/js/QuayThu.js')}}?v={{rand(1000,100000)}}"></script>
    <script>
        var timeMB = 27 * 1000;
        function startRandom() {
            if (!isrunning) {
                //$( "#rdGroup" ).prop( "checked", true );
                xsdpquaythu.RunRandomXSMB();
                setTimeout(function () {
                    xsdpquaythu.RunRandomComplete();
                }, timeMB);
            }
        }
        ;
    </script>
@endsection
