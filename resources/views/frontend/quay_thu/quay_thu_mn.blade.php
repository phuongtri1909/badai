<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
?>
@extends('frontend.layouts.app')

@section('title','Quay thử XSMN - Quay thử Xổ số miền nam hôm nay Với Xổ Số Site')
@section('decription','Quay thử XSMN Xổ Số Miền Nam Với Xổ Số Site ✅ - Quay thử MN - Quay thử Xổ số miền nam lấy hên trước giờ tường thuật xổ số, Quay thử Xổ số Miền Nam hôm nay trước khi mua vé xổ số kiến thiết MN, chúc bạn may mắn!')
@section('h1','Quay thử XSMN - Quay thử Xổ số miền nam hôm nay Với Xổ Số  Site')

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
                                itemprop="item" href="{{url()->current()}}" title="Quay thử XSMN" class="last"><span
                                    itemprop="name">Quay thử XSMN</span>
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
                <li class="active"><a href="{{route('quay_thu.mn')}}" title="Quay thử MN">Quay thử MN</a>
                </li>
                <li><a href="{{route('quay_thu.mt')}}" title="Quay thử MT">Quay thử MT</a>
                </li>

            </ul>
            <div class="tit-mien clearfix">
                <h2>Quay thử miền Nam ngày {{date('d/m/Y')}}</h2>
            </div>

            <div class="box" id="trial-box">
                <div class="txt-center  bg-orange">

                    <form id="trial_form" class="form-horizontal">
                        <div class="form-group">
                            <select id="ddLotteries" name="lotteryIdName" class="form-select"
                                    onchange="xsdpquaythu.LotteriesChange()">
                                <option value="{{route('quay_thu.mb')}}">Miền Bắc</option>
                                <option value="{{route('quay_thu.mt')}}">Miền Trung</option>
                                <option value="{{route('quay_thu.mn')}}" selected>Miền Nam</option>
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
                                <table class="colthreecity colgiai extendable" id="table-xsmn">
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
                        <div class="box-content">
                            <div class="bold see-more-title">⇒ Ngoài ra bạn có thể xem thêm: Xổ Số Miền Nam XSMN</div>
                            <ul class="list-html-link two-column">
                                <li>Mời bạn <a href="{{route('quay_thu.mn')}}"
                                               title="quay thử miền Nam">quay thử miền Nam</a> XSMN hôm nay để lấy hên
                                </li>
                                <li>Xem thêm <a href="{{route('xsmn')}}"
                                                title="Kết Quả XSMN">kết quả XSMN Xổ Số Miền Nam </a></li>
                                <li>Xem bảng kết quả <a
                                            href="{{route('xsmn.skq')}}"
                                            title="XSMN 30 ngày gần nhất">XSMN 30 ngày gần nhất</a></li>
                            </ul>
                        </div>
                    <div class="box-content">
                        <p style="text-align: justify;"><span style="font-weight: 400;"><a title="Quay Thử Xổ Số Miền Nam" href="/quay-thu-xo-so-mien-nam"><strong>Quay Thử Xổ Số Miền Nam</strong></a>. Quay Thử XSMN. Quay Thử XSMN h&ocirc;m nay. Quay Thử Kết Quả Xổ Số Miền Nam nhanh ch&oacute;ng v&agrave; ho&agrave;n to&agrave;n miễn ph&iacute; tại xosobadai.net</span></p>
                    <p style="text-align: justify;"><span style="font-weight: 400;">Quay Thử Xổ Số Miền Nam điện tử lấy cặp số may mắn trước giờ tường thuật xổ số tại xosobadai.net</span></p>
                    <p style="text-align: justify;"><strong>Quay thử XSMN l&agrave; g&igrave;?</strong></p>
                    <p style="text-align: justify;"><span style="font-weight: 400;">Quay thử XSMN xổ số Miền Nam điện tử lấy may trước giờ tường thuật xổ số. Quay thử kết quả xổ số miền Trung lấy may với những con số đẹp trước khi mua xổ số đ&agrave;i miền Nam.</span></p>
                    <p style="text-align: justify;"><span style="font-weight: 400;">Quay thử XSMN dựa tr&ecirc;n phương ph&aacute;p tham khảo h&igrave;nh thức thuật to&aacute;n dựa tr&ecirc;n số liệu thống k&ecirc; KQ Kết Quả XSMN được lưu trữ trong 13 năm, sau đ&oacute; được hệ thống xử l&yacute; th&ocirc;ng qua lập tr&igrave;nh với thuật to&aacute;n của hệ thống m&aacute;y t&iacute;nh để đưa ra những con số quay thử&nbsp; kết quả xổ số KQXS với x&aacute;c xuất cao nh&acirc;t gi&uacute;p bạn c&oacute; được con số ch&iacute;nh x&aacute;c.</span></p>
                    <p style="text-align: justify;"><span style="font-weight: 400;">Quay thử xổ số miền Nam h&ocirc;m nay l&agrave; c&ocirc;ng cụ gi&uacute;p bạn sớm biết được kết quả may mắn h&ocirc;m nay ra con g&igrave;.</span></p>
                    <p style="text-align: justify;"><strong>Quay thử <a title=" XSMN " href="/xsmn-xo-so-mien-nam">XSMN </a>h&ocirc;m nay&nbsp;</strong></p>
                    <p style="text-align: justify;"><span style="font-weight: 400;">- Quay thử kết quả xổ số miền Nam ng&agrave;y h&ocirc;m nay gi&uacute;p bạn t&igrave;m ra con số ngẫu nhi&ecirc;n may mắn. Kết quả xổ số KQXS được quay tự động từ hệ thống. C&aacute;c con số xuất hiện được thống k&ecirc; lại từ bảng kết quả của những ng&agrave;y trước gi&uacute;p bạn dễ d&agrave;ng t&igrave;m ra con số may mắn nhất.</span></p>
                    <p style="text-align: justify;"><span style="font-weight: 400;">- Tuy nhi&ecirc;n, quay thử xổ số chỉ mang t&iacute;nh chất tham khảo l&agrave; ch&iacute;nh, ho&agrave;n to&agrave;n kh&ocirc;ng phải l&agrave; kết quả thật.</span></p>
                    <p style="text-align: justify;"><strong>Lịch quay mở thưởng&nbsp; trực tiếp kết quả Xổ Số Miền Nam XSMN&nbsp;</strong></p>
                    <p dir="ltr">- Ng&agrave;y thứ 2 do C&ocirc;ng ty xổ số kiến thiết TP. Hồ Ch&iacute; Minh&nbsp;<strong>XSHCM&nbsp;&nbsp;</strong>, Đồng Th&aacute;p&nbsp;<strong>XSĐT&nbsp;</strong>, C&agrave; Mau&nbsp;<strong>XSCM&nbsp;</strong>ph&aacute;t h&agrave;nh v&agrave; mở thưởng.</p>
                    <p>- Thứ 3 do đ&agrave;i Bến Tre&nbsp;<strong>XSBT&nbsp;</strong>, Vũng T&agrave;u&nbsp;<strong>XSVT&nbsp;</strong>, Bạc Li&ecirc;u&nbsp;<strong>XSBL&nbsp;</strong>mở thưởng.</p>
                    <p>- Thứ 4 do đ&agrave;i Đồng Nai&nbsp;<strong>XSDN&nbsp;</strong>, Cần Thơ&nbsp;<strong>XSCT&nbsp;</strong>, S&oacute;c Trăng&nbsp;<strong>XSST&nbsp;</strong>mở thưởng.</p>
                    <p>- Thứ 5 do đ&agrave;i T&acirc;y Ninh&nbsp;<strong>XSTN</strong>, An Giang&nbsp;<strong>XSAG</strong>, B&igrave;nh Thuận&nbsp;<strong>XSBT&nbsp;</strong>ph&aacute;t h&agrave;nh.</p>
                    <p>- Thứ 6 do đ&agrave;i Vĩnh Long&nbsp;<strong>XSVL&nbsp;</strong>, B&igrave;nh Dương XSBD , Tr&agrave; Vinh&nbsp;<strong>XSTV&nbsp;</strong>mở thưởng.</p>
                    <p>- Thứ 7 do 4 đ&agrave;i quay số l&agrave; TP Hồ Ch&iacute; Minh&nbsp;<strong>XSHCM&nbsp;</strong>, Long An&nbsp;<strong>XSLA</strong>, B&igrave;nh Phước&nbsp;<strong>XSBP</strong>, Hậu Giang&nbsp;<strong>XSHG&nbsp;</strong>ph&aacute;t h&agrave;nh.</p>
                    <p>- Chủ nhật được đ&agrave;i Tiền Giang&nbsp;<strong>XSTG&nbsp;</strong>, Ki&ecirc;n Giang&nbsp;<strong>XSKG&nbsp;</strong>, Đ&agrave; Lạt L&acirc;m Đồng&nbsp;<strong>XSĐL&nbsp;</strong>mở thưởng.</p>
                    <p style="text-align: justify;"><span style="font-weight: 400;">Xem Kết Quả Xổ Số mới nhất: Xổ Số Miền Nam (<a title="XSMN" href="/xsmn-xo-so-mien-nam"><strong>XSMN</strong></a>), Xổ Số miền Bắc(XSMB) v&agrave; Xổ Số miền Trung(XSMT) được cập nhật li&ecirc;n tục mỗi ng&agrave;y tr&ecirc;n xosobadai.net</span></p> 
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
        var timeMB = 27 * 1000;
        function startRandom() {
            if (!isrunning) {
                //$( "#rdGroup" ).prop( "checked", true );
                xsdpquaythu.RunRandomXSMN(2);
                setTimeout(function () {
                    xsdpquaythu.RunRandomComplete();
                }, 56000);
            }
        };
    </script>
@endsection