<div class="the-article-content">
    <h2 class="the-article-summary">Dự đoán XSMB Hôm Nay {{$date}} - Soi cầu dự đoán xổ số miền Bắc ngày {{$date}} do cao thủ chốt số đưa ra siêu chuẩn,
        miễn phí ❤️ Dự đoán lô tô, giải đặc biệt MB ngày {{str_replace('/','-',$date)}}</h2>

    <p>Dựa vào các thuật toán xác suất thống kê mới nhất mới nhất và chính xác nhất, phân tích các kết quả gần nhất của xổ số Miền Bắc.
        {{request()->getHost()}}  đưa ra được kết quả dự đoán các con số may mắn có độ chính xác cao</p>

    <h2 class="article_big_title">Dự Đoán XSMB {{$date}}</h2>

    <p>Hãy cùng chuyên gia {{request()->getHost()}} <a
                href="{{route('dudoan.xsmb.date',getNgayLink($dateYmd))}}">dự
            đoán XSMB {{$date}}</a> hôm nay siêu chuẩn với các kết quả dự đoán giải đặt biệt đầu đuôi, giải
        lô tô 2 số, lô xiên chính xác nhất.</p>

    <p>Để kết quả dự đoán Xổ Số Miền Bắc XSMB được chính xác. Bạn nên tham khảo lại kết quả Xổ Số Miền Bắc XSMB hôm nay các kỳ trước để có cơ sở so sánh và đưa ra quyết định chọn con số phù hợp, có cơ hội trúng giải Xổ Số Miền Bắc cao nhất.</p>

    <p><strong>Xem lại bảng kết quả XSMB  Xổ Số Miền Bắc kì trước:</strong></p>
    @include('frontend.dudoanxoso.kqxsmb',['xsmb'=>$xsmb])
    <div class="table_dudoan_wrapper mt25"><h3>✅ Chốt số lô dự đoán XSMB {{$date}}</h3>
        <table class="table_dudoan">
            <tbody>
            <tr>
                <td>🌟 Đặc biệt: đầu, đuôi: <span class="conso_dudoan red">{{getNumberRand()}}</span></td>
            </tr>
            <?php $lo3 = array(); for ($i = 0; $i < 3; $i++) {
                $item = getNumberRand();
                while (in_array($item, $lo3)) {
                    $item = getNumberRand();
                }
                $lo3[] = $item;
            } $lo3 = implode(' - ', $lo3); ?>
            <tr>
                <td>🌟 Lô tô 2 số chắc về: <span class="conso_dudoan red">{{$lo3}}</span></td>
            </tr>
            <?php $lo3 = array(); for ($i = 0; $i < 3; $i++) {
                $item = getNumberRand();
                while (in_array($item, $lo3)) {
                    $item = getNumberRand();
                }
                $lo3[] = $item;
            } $lo3 = implode(' - ', $lo3); ?>
            <tr>
                <td>🌟 Loto xiên: <span class="conso_dudoan red">{{$lo3}}</span></td>
            </tr>
            </tbody>
            <tbody>
            <tr>
                <td colspan="3">=&gt; Xem trực tiếp kết quả <a
                            href="{{route('xsmb')}}"
                            title="Kết quả XSMB">XSMB</a></td>
            </tr>
            </tbody>
        </table>
    </div>
    <h3>Cầu XSMB ngày {{$date}} bằng phương pháp Pascal</h3>

    <div class="pascal">
        <div class="pascal-header">Cầu Pascal Miền Bắc</div>
        <div class="pascal-body"><p>Giải đặc biệt: <span class="red conso_dudoan">{{$xsmb->gdb}}</span></p>

            <p>Giải nhất: <span class="red conso_dudoan">{{$xsmb->g1}}</span></p>

            <p>Bảng cầu:</p>

            <div class="pascal-table">
                @for($k=0;$k<=8;$k++)
                    <div class="pascal-row">
                        @for ($i = 0; $i < strlen($pascal[$k]); $i++)
                            <span class="pascal-number">{{$pascal[$k][$i]}}</span>
                        @endfor
                    </div>
                @endfor
            </div>
            <p>Kết quả tạo cầu:</p>

            <div class="pascal-result"><span>{{$pascal[8]}}</span><span>{{lon($pascal[8])}}</span></div>
        </div>
    </div>
    <br>

    <p>BÍ KÍP giúp {{request()->getHost()}} cầu XSMB Xổ Số Miền Bắc {{$date}} và các ngày khác đều cho kết quả dự đoán chính xác
        nhất, TỈ LỆ trúng giải cao nhất là dựa trên kết quả XSMB ngày hôm trước và phương pháp xác suất
        thống kê chuyên sâu, các con số lâu ra nhất bạn chọn sẽ cho kết quả trúng thưởng đáng ngạt
        nhiên.</p>
    <p><strong>Quay thử XSMB thử vận may</strong></p>

    <p>Các bạn có thể thử vận may tìm ra con số may mắn của mình bằng cách tham gia <a target="_blank" href="{{route('quay_thu.mb')}}">Quay
            thử XSMB</a></p>

    <p>Bên dưới đây là bảng quay thử XSMB ngày {{$date}} mà chúng tôi đã thực hiện, mời bạn tham khảo:</p>

    @include('frontend.dudoanxoso.quay_thu',['date'=>$date])
    <h3>Cầu XSMB {{$date}}</h3>

    <p>Để có kết quả cầu xsmb {{$date}} các chuyên gia giỏi nhất của {{request()->getHost()}} phải tổng hợp dữ liệu
        các con số trúng giải của hơn 5 năm và dùng nhiều thời gian để phân tích học thuật xác suất thống kê
        để đưa ra các con số may mắn nhất cho quý đọc giả.</p>

    <p style="font-style: italic; color: red; font-size: 12px; line-height: 1.5;">Lưu ý: Các bộ số chỉ
        dùng cho mục đích tham khảo, bạn nên cân nhắc trước khi chơi và không chơi lô đề vì đó là bất hợp
        pháp, chỉ nên chơi lô tô do nhà nước phát hành vừa vui vừa đảm bảo ích nước lợi nhà bạn nhé</p>

</div>