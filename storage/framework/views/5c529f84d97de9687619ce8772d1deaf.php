<?php
    $xsmtTinh = $xsmts[0];

    $count = count($xsmts);

    if ($count == 3) {
        $div_class = 'three-city';
        $table_class = 'colthreecity';
    } elseif ($count == 4) {
        $div_class = 'four-city';
        $table_class = 'colfourcity';
    } elseif ($count == 2) {
        $div_class = 'two-city';
        $table_class = 'coltwocity';
    }
?>
<div class="box border-red" id='mt_kqngay_<?php echo e(date('dmY', time())); ?>'>
    <div class="tit-mien clearfix">
        <h2>Kết quả xổ số miền Trung <?php echo e(getNgay($xsmtTinh->date)); ?></h2>

        <div><a class="sub-title" href="<?php echo e(route('xsmt')); ?>" title="XSMT">XSMT</a> »
            <a class="sub-title" href="<?php echo e(route(getRouteDay($xsmtTinh->day, 'xsmt'))); ?>"
                title="XSMT <?php echo e(getThu($xsmtTinh->day)); ?>">XSMT <?php echo e(getThu($xsmtTinh->day)); ?></a> » <a class="sub-title"
                href="<?php echo e(route('xsmt.date', getNgayLink($xsmtTinh->date))); ?>"
                title="XSMT ngày <?php echo e(getNgay($xsmtTinh->date)); ?>">XSMT ngày <?php echo e(getNgay($xsmtTinh->date)); ?></a>
        </div>
    </div>
    <div id="load_kq_mt_0">
        <div data-id="kq" class="<?php echo e($div_class); ?>" data-region="3">
            <table class="<?php echo e($table_class); ?> colgiai extendable">
                <tbody>
                    <tr class="gr-yellow">
                        <th class="first"></th>
                        <?php $__currentLoopData = $xsmts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $xsmt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <th data-pid="<?php echo e($xsmt->id); ?>"><a
                                    href="<?php echo e(route('xstinh.tinh', $xsmt->province->slug)); ?>"
                                    title="Xổ số <?php echo e($xsmt->province->name); ?>"
                                    class="underline bold"><?php echo e($xsmt->province->name); ?></a>
                            </th>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tr>
                    <tr class="g8">
                        <td>G8</td>
                        <?php $__currentLoopData = $xsmts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $xsmt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <td>
                                <div data-nc="2" class="v-g8 "
                                    id="<?php echo e(strtoupper($xsmt->province->short_name)); ?>_prize_8_item_0">
                                    <?php echo e($xsmt->g8); ?></div>
                            </td>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tr>
                    <tr>
                        <td>G7</td>
                        <?php $__currentLoopData = $xsmts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $xsmt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <td>
                                <div data-nc="3" class="v-g7 "
                                    id="<?php echo e(strtoupper($xsmt->province->short_name)); ?>_prize_7_item_0">
                                    <?php echo e($xsmt->g7); ?></div>
                            </td>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tr>
                    <tr>
                        <td>G6</td>
                        <?php $__currentLoopData = $xsmts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $xsmt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php $g6 = explode('-', $xsmt->g6); ?>
                            <td>
                                <div data-nc="4" class="v-g6-0 "
                                    id="<?php echo e(strtoupper($xsmt->province->short_name)); ?>_prize_6_item_0">
                                    <?php if(!empty($g6[0])): ?>
                                        <?php echo e($g6[0]); ?>

                                    <?php endif; ?>
                                </div>
                                <div data-nc="4" class="v-g6-1 "
                                    id="<?php echo e(strtoupper($xsmt->province->short_name)); ?>_prize_6_item_1">
                                    <?php if(!empty($g6[1])): ?>
                                        <?php echo e($g6[1]); ?>

                                    <?php endif; ?>
                                </div>
                                <div data-nc="4" class="v-g6-2 "
                                    id="<?php echo e(strtoupper($xsmt->province->short_name)); ?>_prize_6_item_2">
                                    <?php if(!empty($g6[2])): ?>
                                        <?php echo e($g6[2]); ?>

                                    <?php endif; ?>
                                </div>
                            </td>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tr>
                    <tr>
                        <td>G5</td>
                        <?php $__currentLoopData = $xsmts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $xsmt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <td id="<?php echo e(strtoupper($xsmt->province->short_name)); ?>_prize_5_item_0">
                                <div data-nc="4" class="v-g5 "><?php echo e($xsmt->g5); ?></div>
                            </td>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tr>
                    <tr>
                        <td>G4</td>
                        <?php $__currentLoopData = $xsmts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $xsmt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php $g4 = explode('-', $xsmt->g4); ?>
                            <td>
                                <div data-nc="5" class="v-g4-0 "
                                    id="<?php echo e(strtoupper($xsmt->province->short_name)); ?>_prize_4_item_0">
                                    <?php if(!empty($g4[0])): ?>
                                        <?php echo e($g4[0]); ?>

                                    <?php endif; ?>
                                </div>
                                <div data-nc="5" class="v-g4-1 "
                                    id="<?php echo e(strtoupper($xsmt->province->short_name)); ?>_prize_4_item_1">
                                    <?php if(!empty($g4[1])): ?>
                                        <?php echo e($g4[1]); ?>

                                    <?php endif; ?>
                                </div>
                                <div data-nc="5" class="v-g4-2 "
                                    id="<?php echo e(strtoupper($xsmt->province->short_name)); ?>_prize_4_item_2">
                                    <?php if(!empty($g4[2])): ?>
                                        <?php echo e($g4[2]); ?>

                                    <?php endif; ?>
                                </div>
                                <div data-nc="5" class="v-g4-3 "
                                    id="<?php echo e(strtoupper($xsmt->province->short_name)); ?>_prize_4_item_3">
                                    <?php if(!empty($g4[3])): ?>
                                        <?php echo e($g4[3]); ?>

                                    <?php endif; ?>
                                </div>
                                <div data-nc="5" class="v-g4-4 "
                                    id="<?php echo e(strtoupper($xsmt->province->short_name)); ?>_prize_4_item_4">
                                    <?php if(!empty($g4[4])): ?>
                                        <?php echo e($g4[4]); ?>

                                    <?php endif; ?>
                                </div>
                                <div data-nc="5" class="v-g4-5 "
                                    id="<?php echo e(strtoupper($xsmt->province->short_name)); ?>_prize_4_item_5">
                                    <?php if(!empty($g4[5])): ?>
                                        <?php echo e($g4[5]); ?>

                                    <?php endif; ?>
                                </div>
                                <div data-nc="5" class="v-g4-6 "
                                    id="<?php echo e(strtoupper($xsmt->province->short_name)); ?>_prize_4_item_6">
                                    <?php if(!empty($g4[6])): ?>
                                        <?php echo e($g4[6]); ?>

                                    <?php endif; ?>
                                </div>
                            </td>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tr>
                    <tr>
                        <td>G3</td>
                        <?php $__currentLoopData = $xsmts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $xsmt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php $g3 = explode('-', $xsmt->g3); ?>
                            <td>
                                <div data-nc="5" class="v-g3-0 "
                                    id="<?php echo e(strtoupper($xsmt->province->short_name)); ?>_prize_3_item_0">
                                    <?php if(!empty($g3[0])): ?>
                                        <?php echo e($g3[0]); ?>

                                    <?php endif; ?>
                                </div>
                                <div data-nc="5" class="v-g3-1 "
                                    id="<?php echo e(strtoupper($xsmt->province->short_name)); ?>_prize_3_item_1">
                                    <?php if(!empty($g3[1])): ?>
                                        <?php echo e($g3[1]); ?>

                                    <?php endif; ?>
                                </div>
                            </td>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tr>
                    <tr>
                        <td>G2</td>
                        <?php $__currentLoopData = $xsmts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $xsmt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <td>
                                <div data-nc="5" class="v-g2 "
                                    id="<?php echo e(strtoupper($xsmt->province->short_name)); ?>_prize_2_item_0">
                                    <?php echo e($xsmt->g2); ?></div>
                            </td>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tr>
                    <tr>
                        <td>G1</td>
                        <?php $__currentLoopData = $xsmts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $xsmt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <td>
                                <div data-nc="5" class="v-g1 "
                                    id="<?php echo e(strtoupper($xsmt->province->short_name)); ?>_prize_1_item_0">
                                    <?php echo e($xsmt->g1); ?></div>
                            </td>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tr>
                    <tr class="gdb">
                        <td>ĐB</td>
                        <?php $__currentLoopData = $xsmts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $xsmt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <td>
                                <div data-nc="6" class="v-gdb "
                                    id="<?php echo e(strtoupper($xsmt->province->short_name)); ?>_prize_Db_item_0">
                                    <?php echo e($xsmt->gdb); ?></div>
                            </td>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tr>
                </tbody>
            </table>
            <div class="control-panel">
                <form class="digits-form"><label class="radio" data-value="0"><input type="radio"
                            name="showed-digits" value="0">
                        <b></b><span></span></label><label class="radio" data-value="2"><input type="radio"
                            name="showed-digits" value="2">
                        <b></b><span></span></label><label class="radio" data-value="3"><input type="radio"
                            name="showed-digits" value="3">
                        <b></b><span></span></label></form>
                <div class="buttons-wrapper"><span class="zoom-in-button"><i
                            class="icon zoom-in-icon"></i><span></span></span></div>
            </div>
        </div>

        <?php $__currentLoopData = $xsmts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $xsmt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
            $xsmtStr = $xsmt->gdb . '-' . $xsmt->g1 . '-' . $xsmt->g2 . '-' . $xsmt->g3 . '-' . $xsmt->g4 . '-' . $xsmt->g5 . '-' . $xsmt->g6 . '-' . $xsmt->g7 . '-' . $xsmt->g8;
            $xsmtLoto = getLoto($xsmtStr);
            $xsmtDau[$xsmt->province->short_name] = getDau($xsmtLoto, substr($xsmt->gdb, strlen($xsmt->gdb) - 2, 2));
            ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

<div class="box-option">
    <div data-id="dd" class="col-firstlast <?php echo e($table_class); ?> colgiai">
        <table class="firstlast-mn bold">
            <tbody>
                <tr class="header">
                    <th class="first">Đầu</th>
                    <?php $__currentLoopData = $xsmts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $xsmt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <th id="livebangkqloto_<?php echo e(strtoupper($xsmt->province->short_name)); ?>">
                            <?php echo e($xsmt->province->name); ?></th>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tr>
                <tr>
                    <td class="clnote bold">0</td>
                    <?php $__currentLoopData = $xsmts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $xsmt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <td id="mtloto_<?php echo e(strtoupper($xsmt->province->short_name)); ?>_0"
                            class="v-loto-dau-0 text-left"><?php echo $xsmtDau[$xsmt->province->short_name][0]; ?></td>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tr>
                <tr>
                    <td class="clnote bold">1</td>
                    <?php $__currentLoopData = $xsmts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $xsmt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <td id="mtloto_<?php echo e(strtoupper($xsmt->province->short_name)); ?>_1"
                            class="v-loto-dau-1 text-left"><?php echo $xsmtDau[$xsmt->province->short_name][1]; ?></td>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tr>
                <tr>
                    <td class="clnote bold">2</td>
                    <?php $__currentLoopData = $xsmts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $xsmt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <td id="mtloto_<?php echo e(strtoupper($xsmt->province->short_name)); ?>_2"
                            class="v-loto-dau-2 text-left"><?php echo $xsmtDau[$xsmt->province->short_name][2]; ?></td>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tr>
                <tr>
                    <td class="clnote bold">3</td>
                    <?php $__currentLoopData = $xsmts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $xsmt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <td id="mtloto_<?php echo e(strtoupper($xsmt->province->short_name)); ?>_3"
                            class="v-loto-dau-3 text-left"><?php echo $xsmtDau[$xsmt->province->short_name][3]; ?></td>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tr>
                <tr>
                    <td class="clnote bold">4</td>
                    <?php $__currentLoopData = $xsmts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $xsmt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <td id="mtloto_<?php echo e(strtoupper($xsmt->province->short_name)); ?>_4"
                            class="v-loto-dau-4 text-left"><?php echo $xsmtDau[$xsmt->province->short_name][4]; ?></td>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tr>
                <tr>
                    <td class="clnote bold">5</td>
                    <?php $__currentLoopData = $xsmts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $xsmt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <td id="mtloto_<?php echo e(strtoupper($xsmt->province->short_name)); ?>_5"
                            class="v-loto-dau-5 text-left"><?php echo $xsmtDau[$xsmt->province->short_name][5]; ?></td>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tr>
                <tr>
                    <td class="clnote bold">6</td>
                    <?php $__currentLoopData = $xsmts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $xsmt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <td id="mtloto_<?php echo e(strtoupper($xsmt->province->short_name)); ?>_6"
                            class="v-loto-dau-6 text-left"><?php echo $xsmtDau[$xsmt->province->short_name][6]; ?></td>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tr>
                <tr>
                    <td class="clnote bold">7</td>
                    <?php $__currentLoopData = $xsmts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $xsmt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <td id="mtloto_<?php echo e(strtoupper($xsmt->province->short_name)); ?>_7"
                            class="v-loto-dau-7 text-left"><?php echo $xsmtDau[$xsmt->province->short_name][7]; ?></td>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tr>
                <tr>
                    <td class="clnote bold">8</td>
                    <?php $__currentLoopData = $xsmts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $xsmt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <td id="mtloto_<?php echo e(strtoupper($xsmt->province->short_name)); ?>_8"
                            class="v-loto-dau-8 text-left"><?php echo $xsmtDau[$xsmt->province->short_name][8]; ?></td>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tr>
                <tr>
                    <td class="clnote bold">9</td>
                    <?php $__currentLoopData = $xsmts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $xsmt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <td id="mtloto_<?php echo e(strtoupper($xsmt->province->short_name)); ?>_9"
                            class="v-loto-dau-9 text-left"><?php echo $xsmtDau[$xsmt->province->short_name][9]; ?></td>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="box-option p-10px m-y-20px">
    <div class="see-more">
        
        <ul class="list-html-link two-column">
            <li>Xem ngay <a href="<?php echo e(route('dudoan.xsmt')); ?>" title="Dự đoán XSMT">Dự đoán XSMT</a> chính xác nhất
                hôm nay
            </li>
            <li>Trải nghiệm <a href="<?php echo e(route('quay_thu.mt')); ?>" title="quay thử XSMT">quay thử XSMT</a> hôm nay có
                độ chính xác cao</li>
            <li>Xem bảng kết quả <a href="<?php echo e(route('xsmt.skq')); ?>" title="XSMT 30 ngày">XSMT 30 ngày</a> gần nhất
            </li>
        </ul>
    </div>
</div>
<?php /**PATH D:\badai\resources\views/frontend/home/xsmt.blade.php ENDPATH**/ ?>