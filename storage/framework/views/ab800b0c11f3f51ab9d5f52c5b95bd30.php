<?php echo $__env->yieldContent('breadcrumb'); ?>
<section class="content main clearfix">
    <?php echo $__env->yieldContent('content'); ?>
    <div class="col-center">
        <div class="content-right bullet live_mb">
            <div class="title-r"><a class="bg-blue" title="Xổ số miền bắc" href="<?php echo e(route('xsmb')); ?>">Xổ số miền bắc</a></div>
            <ul>
                <li <?php if(url()->full() == route('xsmb')): ?> class="active" <?php endif; ?>><a title="Xổ số miền Bắc"
                        href="<?php echo e(route('xsmb')); ?>">Miền Bắc</a>
                    <i class="icon icon_live" style="display: none"><i
                            class="fas fa-spinner fa-pulse text-danger"></i></i>
                    <i class="fas fa-check icon icon_done" style="display: none"></i>
                    <span class="badge icon icon_w" style="display: none">18:05</span>
                </li>
            </ul>

        </div>

        <div class="content-right bullet live_mb">
            <div class="title-r"><a class="bg-blue" title="Xổ số miền bắc" href="<?php echo e(route('xsmb')); ?>">Xổ số vietlott</a></div>
            <ul>
                <li <?php if(url()->full() == route('xsthantai')): ?> class="active" <?php endif; ?>><a href="<?php echo e(route('xsthantai')); ?>">Thần
                        Tài
                    </a></li>
                <li <?php if(url()->full() == route('dientoan123')): ?> class="active" <?php endif; ?>><a href="<?php echo e(route('dientoan123')); ?>">Điện
                        toán 123
                    </a></li>
                <li <?php if(url()->full() == route('dientoan6x36')): ?> class="active" <?php endif; ?>><a href="<?php echo e(route('dientoan6x36')); ?>">Điện
                        toán 636</a></li>
                
                
                
                
                
                <li <?php if(url()->full() == route('mega645')): ?> class="active" <?php endif; ?>><a href="<?php echo e(route('mega645')); ?>">Mega
                        6/45</a></li>
                <li <?php if(url()->full() == route('power655')): ?> class="active" <?php endif; ?>><a href="<?php echo e(route('power655')); ?>">Power
                        6/55
                    </a></li>
            </ul>

        </div>

        <div class="content-right bullet live_mn">
            <div class="title-r"><a class="bg-blue" title="Xổ số miền nam" href="<?php echo e(route('xsmn')); ?>">Xổ số
                    miền nam</a></div>
            <ul>
                <?php $__currentLoopData = $mn_province; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(strpos($pro->ngay_quay, $day) !== false): ?>
                        <li <?php if(url()->full() == route('xstinh.tinh', $pro->slug)): ?> class="active" <?php endif; ?>>
                            <a href="<?php echo e(route('xstinh.tinh', $pro->slug)); ?>"
                                title="<?php echo e($pro->name); ?>"><?php echo e($pro->name); ?>

                            </a>
                            <i class="icon icon_live" style="display: none"><i
                                    class="fas fa-spinner fa-pulse text-danger"></i></i>
                            <i class="fas fa-check icon icon_done" style="display: none"></i>
                            <span class="badge icon icon_w" style="display: none">16:05</span>
                        </li>
                    <?php else: ?>
                        <li <?php if(url()->full() == route('xstinh.tinh', $pro->slug)): ?> class="active" <?php endif; ?>><a
                                href="<?php echo e(route('xstinh.tinh', $pro->slug)); ?>"
                                <?php if(url()->full() == route('xstinh.tinh', $pro->slug)): ?> <?php else: ?> class="list-group-item" <?php endif; ?>
                                title="<?php echo e($pro->name); ?>"><?php echo e($pro->name); ?></a></li>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>

        <div class="content-right bullet live_mt">
            <div class="title-r"><a class="bg-blue" title="Xổ số miền trung" href="<?php echo e(route('xsmt')); ?>">Xổ
                    số miền trung</a></div>
            <ul>
                <?php $__currentLoopData = $mt_province; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(strpos($pro->ngay_quay, $day) !== false): ?>
                        <li <?php if(url()->full() == route('xstinh.tinh', $pro->slug)): ?> class="active" <?php endif; ?>>
                            <a href="<?php echo e(route('xstinh.tinh', $pro->slug)); ?>"
                                title="<?php echo e($pro->name); ?>"><?php echo e($pro->name); ?></a>
                            <i class="icon icon_live" style="display: none"><i
                                    class="fas fa-spinner fa-pulse text-danger"></i></i>
                            <i class="fas fa-check icon icon_done" style="display: none"></i>
                            <span class="badge icon icon_w" style="display: none">17:05</span>
                        </li>
                    <?php else: ?>
                        <li <?php if(url()->full() == route('xstinh.tinh', $pro->slug)): ?> class="active" <?php endif; ?>><a
                                href="<?php echo e(route('xstinh.tinh', $pro->slug)); ?>"
                                <?php if(url()->full() == route('xstinh.tinh', $pro->slug)): ?> <?php else: ?> class="list-group-item" <?php endif; ?>
                                title="<?php echo e($pro->name); ?>"><?php echo e($pro->name); ?></a></li>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
        <div class="content-right dd-xs">
            <div class="title-r"><a class="bg-blue" href="<?php echo e(route('dudoan.xsmb')); ?>" title="Dự đoán xổ số">Dự
                    đoán xổ số</a></div>
            <ul class="list-news">
                <?php $__currentLoopData = $postTK; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                    <?php
                    $link = str_replace('xoso.site', 'xosobadai.net', $item->link);
                    
                    ?>
                    <li class="clearfix"><a title="<?php echo e($item->title); ?>" href="<?php echo e($link); ?>" class="fl"><img
                                class="mag-r5 fl lazy" width="60" height="33" title="<?php echo e($item->title); ?>"
                                alt="<?php echo e($item->title); ?>" src="<?php echo e($item->img); ?>"
                                data-src="<?php echo e($item->img); ?>"></a><a href="<?php echo e($link); ?>"
                            title="<?php echo e($item->title); ?>"><?php echo e($item->title); ?></a></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
        
    </div>
    <div class="col-right">
        
        <div class="content-right bullet tk-block ">
            <div class="title-r"><a class="bg-blue" title="Thống kê">Quay thử</a></div>
            <ul class="stastic-lotery">
                <li <?php if(url()->full() == route('quay_thu.mb')): ?> class="active" <?php endif; ?>><a href="<?php echo e(route('quay_thu.mb')); ?>"
                        title="Quay thử miền Bắc">Quay thử miền Bắc</a></li>
                <li <?php if(url()->full() == route('quay_thu.mt')): ?> class="active" <?php endif; ?>><a
                        href="<?php echo e(route('quay_thu.mt')); ?>" title="Quay thử miền Trung">Quay thử miền Trung</a>
                </li>
                <li <?php if(url()->full() == route('quay_thu.mn')): ?> class="active" <?php endif; ?>><a href="<?php echo e(route('quay_thu.mn')); ?>"
                        title="Quay thử miền Nam">Quay thử miền Nam</a></li>
            </ul>
        </div>


        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <div class="content-right bullet tk-cau">
            <div class="title-r"><a class="bg-blue" title="Thống kê cầu">Thống kê cầu</a></div>
            <ul class="stastic-lotery">
                <li <?php if(url()->full() == route('scmb.cau-bach-thu')): ?> class="active" <?php endif; ?>><a
                        href="<?php echo e(route('scmb.cau-bach-thu')); ?>" title="Cầu bạch thủ">Cầu bạch thủ</a></li>
                
                
                <li <?php if(url()->full() == route('scmb.cau-truot')): ?> class="active" <?php endif; ?>><a href="<?php echo e(route('scmb.cau-truot')); ?>"
                        title="Cầu lô tô trượt">Cầu lô tô trượt</a></li>
                <li <?php if(url()->full() == route('scmb.cau-loto-2nhay')): ?> class="active" <?php endif; ?>><a
                        href="<?php echo e(route('scmb.cau-loto-2nhay')); ?>" title="Cầu lô tô 2 nháy">Cầu lô tô 2 nháy</a>
                </li>
                <li <?php if(url()->full() == route('scmb.cau-thu')): ?> class="active" <?php endif; ?>><a href="<?php echo e(route('scmb.cau-thu')); ?>"
                        title="Cầu lô tô theo thứ">Cầu lô tô theo thứ</a>
                </li>
            </ul>
        </div>

        <div class="content-right bullet tk-block">
            <div class="title-r"><a class="bg-blue" title="Thống kê">Thống kê</a></div>
            <ul class="stastic-lotery">
                
                
                
                <li <?php if(url()->full() == route('tk.dac-biet-tuan')): ?> class="active" <?php endif; ?>><a href="<?php echo e(route('tk.dac-biet-tuan')); ?>"
                        title="Bảng đặc biệt tuần">Bảng đặc biệt tuần</a></li>
                <li <?php if(url()->full() == route('tk.dac-biet-thang')): ?> class="active" <?php endif; ?>><a
                        href="<?php echo e(route('tk.dac-biet-thang')); ?>" title="Bảng đặc biệt tháng">Bảng đặc biệt tháng</a>
                </li>
                <li <?php if(url()->full() == route('tk.dac-biet-nam')): ?> class="active" <?php endif; ?>><a href="<?php echo e(route('tk.dac-biet-nam')); ?>"
                        title="Bảng đặc biệt năm">Bảng đặc biệt năm</a></li>
                <li <?php if(url()->full() == route('tk.thong-ke-nhanh')): ?> class="active" <?php endif; ?>><a
                        href="<?php echo e(route('tk.thong-ke-nhanh')); ?>" title="Thống kê nhanh">Thống kê nhanh</a></li>
                <li <?php if(url()->full() == route('tk.dau-duoi-loto', 'mb')): ?> class="active" <?php endif; ?>><a
                        href="<?php echo e(route('tk.dau-duoi-loto', 'mb')); ?>" title="Đầu đuôi loto">Đầu đuôi loto</a></li>
                <li <?php if(url()->full() == route('tk.lo-gan', 'mb')): ?> class="active" <?php endif; ?>><a href="<?php echo e(route('tk.lo-gan', 'mb')); ?>"
                        title="lô gan miền Bắc">Lô gan miền Bắc</a></li>
                <li <?php if(url()->full() == route('tk.lo-gan-mt')): ?> class="active" <?php endif; ?>><a href="<?php echo e(route('tk.lo-gan-mt')); ?>"
                        title="lô gan miền Trung">Lô gan miền Trung</a></li>
                <li <?php if(url()->full() == route('tk.lo-gan-mn')): ?> class="active" <?php endif; ?>><a href="<?php echo e(route('tk.lo-gan-mn')); ?>"
                        title="lô gan miền Nam">Lô gan miền Nam</a></li>
            </ul>
        </div>
    </div>
</section>
<?php /**PATH D:\badai\resources\views/widgets/frontend_menu_right.blade.php ENDPATH**/ ?>