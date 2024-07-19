<?php $__env->startSection('title','KQXS - Xổ Số Hôm Nay - Trực Tiếp Xổ Số - Kết Quả Xổ Số 3 Miền Chính Xác Nhất'); ?>
<?php $__env->startSection('decription','KQXS - Trực tiếp xổ số hôm nay nhanh và chính xác nhất từ trường quay xổ số hàng ngày. Xem kết quả Xổ số 3 miền siêu chuẩn miễn phí.'); ?>
<?php $__env->startSection('keyword','Xổ số, XS, Trực tiếp kết quả, trực tiếp xổ số, kết quả xổ số, KQXS, xổ số hôm nay, xshn, kết quả xổ số, kqxs, xổ số 3 miền, xs3m,  xổ số kiến thiết, xskt'); ?>
<?php $__env->startSection('h1','KQXS - Xổ Số Hôm Nay - Trực Tiếp Xổ Số - Kết Quả Xổ Số 3 Miền Chính Xác Nhất'); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-l">
        
            
                
                    
                                
                                
                
            
        
        <div class="box-kq">
            <div class="box mo-thuong-ngay">
                <div class="tit-mien s16"><strong>Xổ số các tỉnh hôm nay mở thưởng</strong></div>
                <table class="table-fixed">
                    <tbody>
                    <?php for($i=0;$i<count($xs_today_mn);$i++): ?>
                    <tr>
                        <td class="live_mn">
                            <?php if(!empty($xs_today_mn[$i])): ?>
                            <a href="<?php echo e(route('xstinh.tinh',$xs_today_mn[$i]->slug)); ?>"
                               title="Xổ số <?php echo e($xs_today_mn[$i]->name); ?>"><?php echo e($xs_today_mn[$i]->name); ?></a>
                                <span class="hidden-mobile icon icon_live" style="display: none"><i class="fas fa-spinner fa-pulse text-danger"></i></span>
                                <span class="hidden-mobile fas fa-check icon icon_done" style="display: none"></span>
                                <span class="hidden-mobile badge icon icon_w" style="display: none">16:05</span>
                            <?php endif; ?>
                        </td>
                        <td class="live_mt">
                            <?php if(!empty($xs_today_mt[$i])): ?>
                            <a href="<?php echo e(route('xstinh.tinh',$xs_today_mt[$i]->slug)); ?>"
                               title="Xổ số <?php echo e($xs_today_mt[$i]->name); ?>"><?php echo e($xs_today_mt[$i]->name); ?></a>
                                <span class="hidden-mobile icon icon_live" style="display: none"><i class="fas fa-spinner fa-pulse text-danger"></i></span>
                                <span class="hidden-mobile fas fa-check icon icon_done" style="display: none"></span>
                                <span class="hidden-mobile badge icon icon_w" style="display: none">17:05</span>
                            <?php endif; ?>
                        </td>
                        <td class="live_mb">
                            <?php if($i==0): ?>
                                <a href="<?php echo e(route('xsmb')); ?>"
                               title="KQXSMB">Miền Bắc</a>
                                <span class="hidden-mobile icon icon_live" style="display: none"><i class="fas fa-spinner fa-pulse text-danger"></i></span>
                                <span class="hidden-mobile fas fa-check icon icon_done" style="display: none"></span>
                                <span class="hidden-mobile badge icon icon_w" style="display: none">18:05</span>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endfor; ?>
                    </tbody>
                </table>
            </div>
            <?php echo $__env->make('frontend.home.xsmb',compact('xsmb'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('frontend.home.xsmn',compact('xsmns'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('frontend.home.xsmt',compact('xsmts'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="mega645">
                <h2 class="tit-mien clearfix">
                    <strong> <a class="title-a" href="<?php echo e(route('mega645')); ?>" title="Xổ số Mega">Kết quả xổ số
                            Mega</a> <?php echo e(getThu($kq_mega645->day)); ?> ngày <?php echo e(getNgay($kq_mega645->date)); ?></strong>
                </h2>
                <ul class="results">
                    <li id="load_kq_mega_0">
                        <div>
                            <div class="clearfix">
                                <table class="data ctrl-table-jackpot">
                                    <tbody>
                                    <tr>
                                        <td colspan="6" class="p-0-jackpot">
                                            <div class="txt-center ctrl-jackpot">
                                                <span> Giá trị Jackpot: </span>
                                                <strong><?php echo e(number_format($kq_mega645->jackpot_gt)); ?> đồng</strong>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="number-list-jackpot">
                                        <?php $daySo = explode('-', $kq_mega645->day_so); $d=1; ?>
                                        <?php $__currentLoopData = $daySo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <td><i><?php echo e($value); ?></i></td>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <table class="data2">
                                <tbody>
                                <tr class="bg-light-vl">
                                    <td>Giải thưởng</td>
                                    <td>Trùng khớp</td>
                                    <td>Số lượng giải</td>
                                    <td>Giá trị giải (đồng)</td>
                                </tr>
                                <tr>
                                    <td class="clnote">Jackpot</td>
                                    <td><i></i> <i></i> <i></i> <i></i> <i></i> <i></i></td>
                                    <td><?php echo e($kq_mega645->jackpot_sl); ?></td>
                                    <td class="clnote"><?php echo e(number_format($kq_mega645->jackpot_gt)); ?></td>
                                </tr>
                                <tr>
                                    <td class="clnote">Giải nhất</td>
                                    <td><i></i> <i></i> <i></i> <i></i> <i></i></td>
                                    <td><?php echo e(number_format($kq_mega645->g1_sl)); ?></td>
                                    <td>10.000.000</td>
                                </tr>
                                <tr>
                                    <td class="clnote">Giải nhì</td>
                                    <td><i></i> <i></i> <i></i> <i></i></td>
                                    <td><?php echo e(number_format($kq_mega645->g2_sl)); ?></td>
                                    <td>300.000</td>
                                </tr>
                                <tr>
                                    <td class="clnote">Giải ba</td>
                                    <td><i></i> <i></i> <i></i></td>
                                    <td><?php echo e(number_format($kq_mega645->g3_sl)); ?></td>
                                    <td>30.000</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="power655  mega645">
                <h2 class="tit-mien clearfix">
                    <strong> <a class="title-a"
                                href="<?php echo e(route('power655')); ?>"
                                title="Xổ số Power">Kết quả xổ số Power</a> <?php echo e(getThu($kq_power655->day)); ?> ngày <?php echo e(getNgay($kq_power655->date)); ?></strong>
                </h2>
                <ul class="results">
                    <li id="load_kq_power_0">
                        <div>
                            <div class="clearfix">
                                <table class="data w-50 mb-16">
                                    <tbody>
                                    <tr>
                                        <td colspan="7" class="p-0-jackpot">
                                            <div class="txt-center ctrl-jackpot mb-8">
                                                <span> Giá trị Jackpot 1: </span>
                                                <strong><?php echo e(number_format($kq_power655->jackpot1_gt)); ?> đồng</strong>
                                            </div>
                                            <div class="txt-center ctrl-jackpot">
                                                <span> Giá trị Jackpot 2: </span>
                                                <strong><?php echo e(number_format($kq_power655->jackpot2_gt)); ?> đồng</strong>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php $daySo = explode('-', $kq_power655->day_so); $d=1; ?>
                                    <tr class="ctrl-number-2">
                                        <td><i><?php echo e($daySo[0]); ?></i></td>
                                        <td><i><?php echo e($daySo[1]); ?></i></td>
                                        <td><i><?php echo e($daySo[2]); ?></i></td>
                                        <td><i><?php echo e($daySo[3]); ?></i></td>
                                        <td><i><?php echo e($daySo[4]); ?></i></td>
                                        <td><i><?php echo e($daySo[5]); ?></i></td>
                                        <td><i><?php echo e($daySo[6]); ?></i></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <table class="data2">
                                <tbody>
                                <tr class="bg-light-vl">
                                    <td>Giải thưởng</td>
                                    <td>Trùng khớp</td>
                                    <td>Số lượng giải</td>
                                    <td>Giá trị giải (đồng)</td>
                                </tr>
                                <tr>
                                    <td class="clnote">Jackpot 1</td>
                                    <td><i></i> <i></i> <i></i> <i></i> <i></i> <i></i></td>
                                    <td><?php echo e($kq_power655->jackpot1_sl); ?></td>
                                    <td class="clnote"><?php echo e(number_format($kq_power655->jackpot1_gt)); ?></td>
                                </tr>
                                <tr>
                                    <td class="clnote">Jackpot 2</td>
                                    <td><i></i> <i></i> <i></i> <i></i> <i></i> <i class="clnote"></i></td>
                                    <td><?php echo e($kq_power655->jackpot2_sl); ?></td>
                                    <td class="clnote"><?php echo e(number_format($kq_power655->jackpot2_gt)); ?></td>
                                </tr>
                                <tr>
                                    <td class="clnote">Giải nhất</td>
                                    <td><i></i> <i></i> <i></i> <i></i> <i></i></td>
                                    <td><?php echo e(number_format($kq_power655->g1_sl)); ?></td>
                                    <td>40.000.000</td>
                                </tr>
                                <tr>
                                    <td class="clnote">Giải nhì</td>
                                    <td><i></i> <i></i> <i></i> <i></i></td>
                                    <td><?php echo e(number_format($kq_power655->g2_sl)); ?></td>
                                    <td>500.000</td>
                                </tr>
                                <tr>
                                    <td class="clnote">Giải ba</td>
                                    <td><i></i> <i></i> <i></i></td>
                                    <td><?php echo e(number_format($kq_power655->g3_sl)); ?></td>
                                    <td>50.000</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="box-content">
                <div class="content-news show-content">
                     <h2 class="text-center"><strong > Giới thiệu về trang KQXS - xosobadai.net - XO SO HOM NAY</strong></h2>
                     <p><a href="<?php echo e(route('home')); ?>"><strong>xosobadai.net</strong> </a> là trang kết quả xổ số trực tuyến nhanh nhất và chính xác nhất tại Việt Nam. Với giao diện thân thiện và dễ sử dụng, Xổ Số Ba Đài giúp người dùng theo dõi <a href="<?php echo e(route('home')); ?>"><strong>kqxs</strong></a> mọi lúc, mọi nơi một cách tiện lợi và nhanh chóng.</p>
                     <p>Theo dõi <a href="<?php echo e(route('xsmb')); ?>"><strong>XSMB</strong></a> - Kết quả xổ số miền Bắc hàng ngày lúc 18h15</p>
                     <p>Theo dõi <a href="<?php echo e(route('xsmn')); ?>"><strong>XSMN</strong></a> - Kết quả xổ số miền Nam hàng ngày lúc 16h15</p>
                     <p>Theo dõi <a href="<?php echo e(route('xsmt')); ?>"><strong>XSMT</strong></a> - Kết quả xổ số miền Trung hàng ngày lúc 17h15</p>
                     <p>Không chỉ trực tiếp <a href="<?php echo e(route('home')); ?>"><strong>KQXS</strong></a> ba miền, <a href="<?php echo e(route('home')); ?>"><strong>xosobadai.net</strong> </a> còn nhiều tiện ích khác dành cho bạn như dự đoán xổ số, thống kê lô tô, xổ số vietlott, xổ số điện toán hoàn toàn miễn phí.</p>
                </div>

                <div class="view-more">
                    <a class="show-text" rel="nofollow" href="javascript:void(0)" id="textxemthem">Xem thêm</a>
                    <a class="hiden-text" rel="nofollow" href="javascript:void(0)" id="textxemthem">Thu gọn</a>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('afterJS'); ?>
    <script src="<?php echo e(url('frontend/js/lotteryLive.js')); ?>?v=<?php echo e(rand(1000,100000)); ?>"></script>
    <script type="text/javascript">
        $('.show-text').on('click', function(){
            $('.content-news').removeClass('show-content');
            $(this).addClass('active');
            $('.hiden-text').addClass('active');
        });

        $('.hiden-text').on('click', function(){
            $('.content-news').addClass('show-content');
            $(this).removeClass('active');
            $('.show-text').removeClass('active');
        });

        var d = new Date();
        var utc = d.getTime() + (d.getTimezoneOffset() * 60000);
        var currentdate = new Date(utc + (3600000 * +7));

        var rootPath = '';
        var appKey = '';
        var headingTag = 'h1';
        var interval;
        var timeInter = 1357 * 4; //thoi gian refresh
        //        var currentdate = new Date();
        var hours = currentdate.getHours();
        var minute = currentdate.getMinutes();

        try {
            var liveheader = $('.live-header');
            var btn_liveheader = $('#btn_liveheader');
            var livecontent = $('.live-content');
            var groupId = 0;
            switch (hours) {
                case 16:
                {
                    groupId = 2;
                    headingTag = 'h2';
                    btn_liveheader.attr("onclick", "clickScroll('mn_kqngay_<?php echo e(date('dmY')); ?>')");
                    btn_liveheader.text("xổ số miền Nam");
                    if (minute >= 10 && minute <= 40) {
                        livecontent.html("Đang TT trực tiếp xổ số miền Nam");
                    } else if (minute > 40) {
                        livecontent.html("KQXS miền Nam");
                    } else {
                        livecontent.html("Tường thuật trực tiếp KQXS miền Nam lúc 16h15");
                    }

                    LiveMN(groupId, appKey, rootPath, headingTag);
                    interval = setInterval("LiveMN(" + groupId + ", '" + appKey + "', '" + rootPath + "', '" + headingTag + "')", timeInter);
                    intervalVariable = setInterval('getRandomTextTN()', 100);
                    liveheader.show();
                    break;
                }

                case 17:
                {
                    groupId = 3;
                    headingTag = 'h2';
                    btn_liveheader.attr("onclick", "clickScroll('mt_kqngay_<?php echo e(date('dmY')); ?>')");
                    btn_liveheader.text("xổ số miền Trung");
                    if (minute >= 10 && minute <= 40) {
                        livecontent.html("Đang TT trực tiếp xổ số miền Trung");
                    } else if (minute > 35) {
                        livecontent.html("KQXS miền Trung");
                    } else {
                        livecontent.html("Tường thuật trực tiếp KQXS miền Trung lúc 17h15");
                    }

                    LiveMT(groupId, appKey, rootPath, headingTag);
                    interval = setInterval("LiveMT(" + groupId + ", '" + appKey + "', '" + rootPath + "', '" + headingTag + "')", timeInter);
                    intervalVariable = setInterval('getRandomTextTN()', 100);
                    liveheader.show();
                    break;
                }
                case 18:
                {
                    headingTag = 'h2';
                    btn_liveheader.attr("onclick", "clickScroll('kqngay_<?php echo e(date('dmY')); ?>')");
                    btn_liveheader.text("xổ số miền Bắc");
                    if (minute >= 10 && minute <= 40) {
                        livecontent.html("Đang TT trực tiếp xổ số miền Bắc");
                    } else if (minute > 40) {
                        livecontent.html("KQXS miền Bắc");
                    } else {
                        livecontent.html("Tường thuật trực tiếp KQXS miền Bắc lúc 18h10");
                    }
                    LiveMB(appKey, rootPath, headingTag);
                    interval = setInterval("LiveMB('" + appKey + "', '" + rootPath + "', '" + headingTag + "')", timeInter);
                    intervalVariable = setInterval('getRandomTextMB()', 100);
                    liveheader.show();
                    break;
                }
                default:
                    liveheader.hide();
                    break;
            }

        }
        catch (e) {
            console.log(e.message);
        }

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\badai\resources\views/frontend/home/home.blade.php ENDPATH**/ ?>