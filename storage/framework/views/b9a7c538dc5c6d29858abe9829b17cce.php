<?php
$gdb = $xsmb->gdb;
$g1 = $xsmb->g1;
$g2 = explode('-', $xsmb->g2);
$g3 = explode('-', $xsmb->g3);
$g4 = explode('-', $xsmb->g4);
$g5 = explode('-', $xsmb->g5);
$g6 = explode('-', $xsmb->g6);
$g7 = explode('-', $xsmb->g7);


$xsmbStr = $xsmb->gdb . '-' . $xsmb->g1 . '-' . $xsmb->g2 . '-' . $xsmb->g3 . '-' . $xsmb->g4 . '-' . $xsmb->g5 . '-' . $xsmb->g6 . '-' . $xsmb->g7;
$xsmbLoto = getLoto($xsmbStr);
$xsmbDau = getDau($xsmbLoto, substr($xsmb->gdb, strlen($xsmb->gdb) - 2, 2));
$xsmbDuoi = getDuoi($xsmbLoto, substr($xsmb->gdb, strlen($xsmb->gdb) - 2, 2));
?>
<div class="box border-red" id='kqngay_<?php echo e(date('dmY',time())); ?>'>
    <div class="tit-mien clearfix">
        <h2> Kết quả xổ số miền Bắc <?php echo e(getNgay($xsmb->date)); ?></h2>
        <div id="MbListLink">
            <a class="sub-title" href="<?php echo e(route('xsmb')); ?>" title="XSMB">XSMB</a>
            » <a class="sub-title" href="<?php echo e(route(getRouteDay($xsmb->day,'xsmb'))); ?>"
                 title="XSMB <?php echo e(getThu($xsmb->day)); ?>">XSMB <?php echo e(getThu($xsmb->day)); ?></a>
            » <a class="sub-title" href="<?php echo e(route('xsmb.date',getNgayLink($xsmb->date))); ?>"
                 title="XSMB ngày <?php echo e(getNgay($xsmb->date)); ?>">XSMB ngày <?php echo e(getNgay($xsmb->date)); ?></a>
        </div>
    </div>
    <div id="load_kq_mb_0">
        <div data-id="kq" class="one-city" data-region="1">
            <table class="kqmb extendable">
                <tbody>
                <tr>
                    <td colspan="13" class="v-giai madb" id="mb_prizeCode"><span class="v-madb"
                                                                                 id="mb_prizeCode_item"><?php echo e(str_replace('-',' - ',$xsmb->madb)); ?></span>
                    </td>
                </tr>
                <tr class="db bg_ef">
                    <td class="txt-giai">ĐB</td>
                    <td class="v-giai number "><span data-nc="5" class="v-gdb "
                                                     id="mb_prize_DB_item_0"><?php if(!empty($gdb)): ?><?php echo e($gdb); ?><?php endif; ?></span>
                    </td>
                </tr>
                <tr>
                    <td class="txt-giai">G.1</td>
                    <td class="v-giai number"><span data-nc="5" class="v-g1"
                                                    id="mb_prize_1_item_0"><?php if(!empty($g1)): ?><?php echo e($g1); ?><?php endif; ?></span>
                    </td>
                </tr>
                <tr class="bg_ef">
                    <td class="txt-giai">G.2</td>
                    <td class="v-giai number">
                                <span data-nc="5" class="v-g2-0 "
                                      id="mb_prize_2_item_0"><?php if(!empty($g2[0])): ?><?php echo e($g2[0]); ?><?php endif; ?></span><span data-nc="5" class="v-g2-1 "
                                                                                                             id="mb_prize_2_item_1"><?php if(!empty($g2[1])): ?><?php echo e($g2[1]); ?><?php endif; ?></span>
                    </td>
                </tr>
                <tr>
                    <td class="txt-giai">G.3</td>
                    <td class="v-giai number">
                                <span data-nc="5" class="v-g3-0 "
                                      id="mb_prize_3_item_0"><?php if(!empty($g3[0])): ?><?php echo e($g3[0]); ?><?php endif; ?></span><span data-nc="5" class="v-g3-1 "
                                                                                                             id="mb_prize_3_item_1"><?php if(!empty($g3[1])): ?><?php echo e($g3[1]); ?><?php endif; ?></span><span data-nc="5" class="v-g3-2 "
                                                                                                                                                                                    id="mb_prize_3_item_2"><?php if(!empty($g3[2])): ?><?php echo e($g3[2]); ?><?php endif; ?></span><span data-nc="5" class="v-g3-3 "
                                                                                                                                                                                                                                                           id="mb_prize_3_item_3"><?php if(!empty($g3[3])): ?><?php echo e($g3[3]); ?><?php endif; ?></span><span data-nc="5" class="v-g3-4 "
                                                                                                                                                                                                                                                                                                                                  id="mb_prize_3_item_4"><?php if(!empty($g3[4])): ?><?php echo e($g3[4]); ?><?php endif; ?></span><span data-nc="5" class="v-g3-5 "
                                                                                                                                                                                                                                                                                                                                                                                                         id="mb_prize_3_item_5"><?php if(!empty($g3[5])): ?><?php echo e($g3[5]); ?><?php endif; ?></span>
                    </td>
                </tr>
                <tr class="bg_ef">
                    <td class="txt-giai">G.4</td>
                    <td class="v-giai number">
                                <span data-nc="4" class="v-g4-0 "
                                      id="mb_prize_4_item_0"><?php if(!empty($g4[0])): ?><?php echo e($g4[0]); ?><?php endif; ?></span><span data-nc="4" class="v-g4-1 "
                                                                                                             id="mb_prize_4_item_1"><?php if(!empty($g4[1])): ?><?php echo e($g4[1]); ?><?php endif; ?></span><span data-nc="4" class="v-g4-2 "
                                                                                                                                                                                    id="mb_prize_4_item_2"><?php if(!empty($g4[2])): ?><?php echo e($g4[2]); ?><?php endif; ?></span><span data-nc="4" class="v-g4-3 "
                                                                                                                                                                                                                                                           id="mb_prize_4_item_3"><?php if(!empty($g4[3])): ?><?php echo e($g4[3]); ?><?php endif; ?></span>
                    </td>
                </tr>
                <tr>
                    <td class="txt-giai">G.5</td>
                    <td class="v-giai number">
                                <span data-nc="4" class="v-g5-0 "
                                      id="mb_prize_5_item_0"><?php if(!empty($g5[0])): ?><?php echo e($g5[0]); ?><?php endif; ?></span><span data-nc="4" class="v-g5-1 "
                                                                                                             id="mb_prize_5_item_1"><?php if(!empty($g5[1])): ?><?php echo e($g5[1]); ?><?php endif; ?></span><span data-nc="4" class="v-g5-2 "
                                                                                                                                                                                    id="mb_prize_5_item_2"><?php if(!empty($g5[2])): ?><?php echo e($g5[2]); ?><?php endif; ?></span><span data-nc="4" class="v-g5-3 "
                                                                                                                                                                                                                                                           id="mb_prize_5_item_3"><?php if(!empty($g5[3])): ?><?php echo e($g5[3]); ?><?php endif; ?></span><span data-nc="4" class="v-g5-4 "
                                                                                                                                                                                                                                                                                                                                  id="mb_prize_5_item_4"><?php if(!empty($g5[4])): ?><?php echo e($g5[4]); ?><?php endif; ?></span><span data-nc="4" class="v-g5-5 "
                                                                                                                                                                                                                                                                                                                                                                                                         id="mb_prize_5_item_5"><?php if(!empty($g5[5])): ?><?php echo e($g5[5]); ?><?php endif; ?></span>
                    </td>
                </tr>
                <tr class="bg_ef">
                    <td class="txt-giai">G.6</td>
                    <td class="v-giai number">
                                <span data-nc="3" class="v-g6-0 "
                                      id="mb_prize_6_item_0"><?php if(!empty($g6[0])): ?><?php echo e($g6[0]); ?><?php endif; ?></span><span data-nc="3" class="v-g6-1 "
                                                                                                             id="mb_prize_6_item_1"><?php if(!empty($g6[1])): ?><?php echo e($g6[1]); ?><?php endif; ?></span><span data-nc="3" class="v-g6-2 "
                                                                                                                                                                                    id="mb_prize_6_item_2"><?php if(!empty($g6[2])): ?><?php echo e($g6[2]); ?><?php endif; ?></span>
                    </td>
                </tr>
                <tr class="g7">
                    <td class="txt-giai">G.7</td>
                    <td class="v-giai number">
                                <span data-nc="2" class="v-g7-0 "
                                      id="mb_prize_7_item_0"><?php if(!empty($g7[0])): ?><?php echo e($g7[0]); ?><?php endif; ?></span><span data-nc="2" class="v-g7-1 "
                                                                                                             id="mb_prize_7_item_1"><?php if(!empty($g7[1])): ?><?php echo e($g7[1]); ?><?php endif; ?></span><span data-nc="2" class="v-g7-2 "
                                                                                                                                                                                    id="mb_prize_7_item_2"><?php if(!empty($g7[2])): ?><?php echo e($g7[2]); ?><?php endif; ?></span><span data-nc="2" class="v-g7-3 "
                                                                                                                                                                                                                                                           id="mb_prize_7_item_3"><?php if(!empty($g7[3])): ?><?php echo e($g7[3]); ?><?php endif; ?></span>
                    </td>
                </tr>
                </tbody>
            </table>
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
    </div>
</div>

<div class="box-option">
    <div data-id="dd" class="col-firstlast" id="livebangkqlotomb">
        <table class="firstlast-mb fl">
            <tbody>
            <tr class="header">
                <th class="w-50px">Đầu</th>
                <th>Lô tô</th>
            </tr>
            <tr class="bg_ef">
                <td class="clnote">0</td>
                <td class="v-loto-dau-0 text-left" id="loto_mb_0"><?php echo $xsmbDau[0]; ?></td>
            </tr>
            <tr>
                <td class="clnote">1</td>
                <td class="v-loto-dau-1 text-left" id="loto_mb_1"><?php echo $xsmbDau[1]; ?></td>
            </tr>
            <tr class="bg_ef">
                <td class="clnote">2</td>
                <td class="v-loto-dau-2 text-left" id="loto_mb_2"><?php echo $xsmbDau[2]; ?></td>
            </tr>
            <tr>
                <td class="clnote">3</td>
                <td class="v-loto-dau-3 text-left" id="loto_mb_3"><?php echo $xsmbDau[3]; ?></td>
            </tr>
            <tr class="bg_ef">
                <td class="clnote">4</td>
                <td class="v-loto-dau-4 text-left" id="loto_mb_4"><?php echo $xsmbDau[4]; ?></td>
            </tr>
            <tr>
                <td class="clnote">5</td>
                <td class="v-loto-dau-5 text-left" id="loto_mb_5"><?php echo $xsmbDau[5]; ?></td>
            </tr>
            <tr class="bg_ef">
                <td class="clnote">6</td>
                <td class="v-loto-dau-6 text-left" id="loto_mb_6"><?php echo $xsmbDau[6]; ?></td>
            </tr>
            <tr>
                <td class="clnote">7</td>
                <td class="v-loto-dau-7 text-left" id="loto_mb_7"><?php echo $xsmbDau[7]; ?></td>
            </tr>
            <tr class="bg_ef">
                <td class="clnote">8</td>
                <td class="v-loto-dau-8 text-left" id="loto_mb_8"><?php echo $xsmbDau[8]; ?></td>
            </tr>
            <tr>
                <td class="clnote">9</td>
                <td class="v-loto-dau-9 text-left" id="loto_mb_9"><?php echo $xsmbDau[9]; ?></td>
            </tr>
            </tbody>
        </table>
        <table class="firstlast-mb fr">
            <tbody>
            <tr class="header">
                <th class="w-50px">Đuôi</th>
                <th>Lô tô</th>
            </tr>
            <tr class="bg_ef">
                <td class="clnote">0</td>
                <td class="v-loto-duoi-0" id="loto_mb_d0"><?php echo $xsmbDuoi[0]; ?></td>
            </tr>
            <tr>
                <td class="clnote">1</td>
                <td class="v-loto-duoi-1" id="loto_mb_d1"><?php echo $xsmbDuoi[1]; ?></td>
            </tr>
            <tr class="bg_ef">
                <td class="clnote">2</td>
                <td class="v-loto-duoi-2" id="loto_mb_d2"><?php echo $xsmbDuoi[2]; ?></td>
            </tr>
            <tr>
                <td class="clnote">3</td>
                <td class="v-loto-duoi-3" id="loto_mb_d3"><?php echo $xsmbDuoi[3]; ?></td>
            </tr>
            <tr class="bg_ef">
                <td class="clnote">4</td>
                <td class="v-loto-duoi-4" id="loto_mb_d4"><?php echo $xsmbDuoi[4]; ?></td>
            </tr>
            <tr>
                <td class="clnote">5</td>
                <td class="v-loto-duoi-5" id="loto_mb_d5"><?php echo $xsmbDuoi[5]; ?></td>
            </tr>
            <tr class="bg_ef">
                <td class="clnote">6</td>
                <td class="v-loto-duoi-6" id="loto_mb_d6"><?php echo $xsmbDuoi[6]; ?></td>
            </tr>
            <tr>
                <td class="clnote">7</td>
                <td class="v-loto-duoi-7" id="loto_mb_d7"><?php echo $xsmbDuoi[7]; ?></td>
            </tr>
            <tr class="bg_ef">
                <td class="clnote">8</td>
                <td class="v-loto-duoi-8" id="loto_mb_d8"><?php echo $xsmbDuoi[8]; ?></td>
            </tr>
            <tr>
                <td class="clnote">9</td>
                <td class="v-loto-duoi-9" id="loto_mb_d9"><?php echo $xsmbDuoi[9]; ?></td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="clearfix"></div>
</div>
<div class="box-option p-10px m-y-20px">
    <div class="see-more">
        
        <ul class="list-html-link two-column">
            <li>Xem ngay <a href="<?php echo e(route('dudoan.xsmb')); ?>"
                            title="Dự đoán XSMB">Dự đoán XSMB</a> chính xác nhất hôm nay</li>
            <li>Tham gia soi <a href="<?php echo e(route('scmb.cau-bach-thu')); ?>"
                            title="cầu bạch thủ XSMB">cầu bạch thủ XSMB</a> nhanh nhất
            </li>
            <li>Trải nghiệm  <a href="<?php echo e(route('quay_thu.mb')); ?>"
                        title="quay thử XSMB">quay thử XSMB</a> hôm nay có độ chính xác cao
            </li>
            <li>Xem bảng kết quả
                <a href="<?php echo e(route('xsmb.skq')); ?>" title="XSMB 30 ngày">XSMB 30 ngày</a> gần nhất
            </li>
        </ul>
    </div>
</div>
<?php /**PATH D:\badai\resources\views/frontend/home/xsmb.blade.php ENDPATH**/ ?>