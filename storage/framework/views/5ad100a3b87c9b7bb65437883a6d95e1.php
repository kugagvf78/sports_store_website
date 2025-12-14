<?php $__env->startSection('title', 'SportStore - Giày Thể Thao & Quần Áo Gym Chính Hãng'); ?>
<?php $__env->startSection('description', 'SportStore - Nike, Adidas, Puma chính hãng. Freeship toàn quốc, giao nhanh 2h.'); ?>

<?php echo app('Illuminate\Foundation\Vite')(['resources/js/client/home.js']); ?>

<?php $__env->startSection('hero'); ?>
<!-- HERO BANNER - Compact & Modern -->
<section class="relative bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 overflow-hidden px-10">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    </div>

    <div class="container mx-auto px-4 md:py-1 relative z-10">
        <div class="grid lg:grid-cols-2 gap-8 items-center">
            <!-- Content -->
            <div class="text-white space-y-6">
                <div class="inline-flex items-center gap-2 bg-red-500/20 backdrop-blur-sm border border-red-500/30 rounded-full px-4 py-2 text-sm">
                    <svg class="w-4 h-4 text-red-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <span class="text-red-300 font-semibold">Ưu đãi đặc biệt</span>
                </div>

                <h1 class="text-4xl md:text-5xl lg:text-6xl font-black leading-tight">
                    Sẵn sàng chinh phục
                    <span class="block text-transparent bg-clip-text bg-gradient-to-r from-red-400 via-pink-400 to-purple-400">
                        mọi thử thách
                    </span>
                </h1>

                <p class="text-gray-300 text-lg md:text-xl max-w-xl">
                    Bộ sưu tập giày thể thao và trang phục gym cao cấp từ các thương hiệu hàng đầu thế giới.
                </p>

                <div class="flex flex-wrap gap-4 pt-4">
                    <a href="<?php echo e(route('products.index')); ?>"
                        class="group inline-flex items-center gap-2 bg-red-600 hover:bg-red-700 text-white font-bold px-8 py-4 rounded-xl transition-all duration-300 shadow-lg shadow-red-500/30 hover:shadow-red-500/50 hover:scale-105">
                        <span>Khám phá ngay</span>
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>

                    <a href="#featured"
                        class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/20 backdrop-blur-sm text-white font-semibold px-8 py-4 rounded-xl transition-all duration-300 border border-white/20">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                        <span>Xem chi tiết</span>
                    </a>
                </div>

                <!-- Stats -->
                <div class="grid grid-cols-3 gap-6 pt-8 border-t border-white/10">
                    <div>
                        <div class="text-3xl font-bold text-white">500+</div>
                        <div class="text-gray-400 text-sm">Sản phẩm</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-white">50K+</div>
                        <div class="text-gray-400 text-sm">Khách hàng</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-white">4.9★</div>
                        <div class="text-gray-400 text-sm">Đánh giá</div>
                    </div>
                </div>
            </div>

            <!-- Visual/Best Seller -->
            <div class="relative p-[40px]">
                <?php if($bestSeller): ?>
                <div class="relative group max-w-[90%] mx-auto">
                    <!-- Glow Effect -->
                    <div class="absolute inset-0 bg-gradient-to-r from-red-500/20 to-purple-500/20 rounded-3xl blur-3xl group-hover:blur-2xl transition-all duration-500"></div>

                    <!-- Product Card -->
                    <div class="relative bg-white/5 backdrop-blur-xl border border-white/10 rounded-3xl p-8 hover:border-white/20 transition-all duration-500">
                        <div class="z-20 absolute top-4 right-4 bg-red-500 text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg">
                            🔥 Best Seller
                        </div>

                        <div class="aspect-square rounded-2xl overflow-hidden mb-6 bg-white/10">
                            <img src="<?php echo e($bestSeller->mainImage ? asset('images/products/' . $bestSeller->mainImage->url) : asset('images/no-image.png')); ?>"
                                alt="<?php echo e($bestSeller->name); ?>"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        </div>

                        <h3 class="text-2xl font-bold text-white mb-2"><?php echo e($bestSeller->name); ?></h3>
                        <p class="text-gray-400 mb-4"><?php echo e(Str::limit($bestSeller->brand->name ?? '', 50)); ?></p>

                        <div class="flex items-center justify-between">
                            <div class="text-3xl font-black text-transparent bg-clip-text bg-gradient-to-r from-red-400 to-pink-400">
                                <?php echo e($bestSeller->formatted_price); ?>

                            </div>
                            <a href="<?php echo e(route('products.show', $bestSeller->slug)); ?>"
                                class="inline-flex items-center gap-2 bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-xl font-semibold transition-all duration-300 group-hover:shadow-lg group-hover:shadow-red-500/50">
                                <span>Xem</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>

        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- FLASH SALE BANNER - Compact -->
<section class="bg-gradient-to-r from-red-600 via-pink-600 to-rose-600 py-6 rounded-t-3xl">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row items-center justify-between gap-4">
            <div class="flex items-center gap-4">
                <div class="bg-yellow-400 text-red-600 p-3 rounded-xl">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" />
                    </svg>
                </div>
                <div class="text-white">
                    <div class="text-sm font-semibold opacity-90">Flash Sale 24h</div>
                    <div class="text-xl md:text-2xl font-black">Giảm đến 70%</div>
                </div>
            </div>

            <!-- Countdown -->
            <div x-data="countdown()" class="flex items-center gap-2 bg-white/20 backdrop-blur-md rounded-xl px-4 py-2 border border-white/30">
                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <div class="flex gap-1 text-white font-mono font-bold text-lg">
                    <span x-text="hours"></span>:<span x-text="minutes"></span>:<span x-text="seconds"></span>
                </div>
            </div>

            <a href="<?php echo e(route('products.index')); ?>"
                class="bg-white text-red-600 hover:bg-gray-100 px-6 py-3 rounded-xl font-bold transition-all duration-300 shadow-lg hover:shadow-xl whitespace-nowrap">
                Mua ngay →
            </a>
        </div>
    </div>
</section>

<!-- CATEGORIES -->
<section class="py-14 mb-4 border border-red-600 rounded-b-3xl">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-3">Danh mục sản phẩm</h2>
            <p class="text-gray-600 text-lg">Khám phá bộ sưu tập đa dạng của chúng tôi</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6">
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(route('products.index', ['category' => $category->id])); ?>"
                class="group relative bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100 hover:border-red-200">

                <!-- Icon Background -->
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-red-50 to-pink-50 rounded-full -mr-16 -mt-16 group-hover:scale-110 transition-transform duration-500"></div>

                <div class="relative p-6 text-center">
                    <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-br from-red-500 to-pink-500 rounded-2xl flex items-center justify-center group-hover:scale-110 group-hover:rotate-6 transition-all duration-300 shadow-lg">
                        <?php switch($loop->index % 8):
                        case (0): ?>
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                        <?php break; ?>
                        <?php case (1): ?>
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5" />
                        </svg>
                        <?php break; ?>
                        <?php case (2): ?>
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                        </svg>
                        <?php break; ?>
                        <?php case (3): ?>
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                        </svg>
                        <?php break; ?>
                        <?php case (4): ?>
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                        <?php break; ?>
                        <?php case (5): ?>
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <?php break; ?>
                        <?php case (6): ?>
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7" />
                        </svg>
                        <?php break; ?>
                        <?php default: ?>
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                        </svg>
                        <?php endswitch; ?>
                    </div>

                    <h3 class="font-bold text-gray-900 mb-1 group-hover:text-red-600 transition-colors"><?php echo e($category->name); ?></h3>
                    <p class="text-sm text-gray-500"><?php echo e($category->products_count); ?> sản phẩm</p>
                </div>
            </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>

<!-- FEATURED PRODUCTS -->
<section id="featured" class="py-14 bg-white border-t border-gray-100"">
    <div class=" container mx-auto px-4">
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-10 gap-4">
        <div>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-2">Sản phẩm nổi bật</h2>
            <p class="text-gray-600">Những sản phẩm được yêu thích nhất</p>
        </div>
        <a href="<?php echo e(route('products.index')); ?>"
            class="inline-flex items-center gap-2 text-red-600 hover:text-red-700 font-semibold group">
            <span>Xem tất cả</span>
            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
            </svg>
        </a>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 md:gap-6">
        <?php $__currentLoopData = $featuredProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if (isset($component)) { $__componentOriginal3fd2897c1d6a149cdb97b41db9ff827a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3fd2897c1d6a149cdb97b41db9ff827a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.product-card','data' => ['product' => $product]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('product-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['product' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($product)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3fd2897c1d6a149cdb97b41db9ff827a)): ?>
<?php $attributes = $__attributesOriginal3fd2897c1d6a149cdb97b41db9ff827a; ?>
<?php unset($__attributesOriginal3fd2897c1d6a149cdb97b41db9ff827a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3fd2897c1d6a149cdb97b41db9ff827a)): ?>
<?php $component = $__componentOriginal3fd2897c1d6a149cdb97b41db9ff827a; ?>
<?php unset($__componentOriginal3fd2897c1d6a149cdb97b41db9ff827a); ?>
<?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    </div>
</section>

<!-- NEW ARRIVALS -->
<section class="py-16">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-10 gap-4">
            <div>
                <div class="inline-flex items-center gap-2 bg-red-100 text-red-600 px-4 py-2 rounded-full text-sm font-semibold mb-3">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z" />
                    </svg>
                    <span>NEW</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-2">Hàng mới về</h2>
                <p class="text-gray-600">Cập nhật xu hướng mới nhất</p>
            </div>
            <a href="<?php echo e(route('products.index', ['sort' => 'created_at', 'order' => 'desc'])); ?>"
                class="inline-flex items-center gap-2 text-red-600 hover:text-red-700 font-semibold group">
                <span>Khám phá thêm</span>
                <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                </svg>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <?php $__currentLoopData = $newProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if (isset($component)) { $__componentOriginal3fd2897c1d6a149cdb97b41db9ff827a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3fd2897c1d6a149cdb97b41db9ff827a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.product-card','data' => ['product' => $product]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('product-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['product' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($product)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3fd2897c1d6a149cdb97b41db9ff827a)): ?>
<?php $attributes = $__attributesOriginal3fd2897c1d6a149cdb97b41db9ff827a; ?>
<?php unset($__attributesOriginal3fd2897c1d6a149cdb97b41db9ff827a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3fd2897c1d6a149cdb97b41db9ff827a)): ?>
<?php $component = $__componentOriginal3fd2897c1d6a149cdb97b41db9ff827a; ?>
<?php unset($__componentOriginal3fd2897c1d6a149cdb97b41db9ff827a); ?>
<?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>

<!-- BRANDS -->
<section class="py-16 bg-white border-t border-gray-100">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-3">Thương hiệu chính hãng</h2>
            <p class="text-gray-600 text-lg">Đối tác tin cậy của chúng tôi</p>
        </div>

        <div class="grid grid-cols-3 md:grid-cols-6 gap-4 md:gap-6">
            <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="group relative bg-gray-50 hover:bg-white rounded-2xl p-6 flex items-center justify-center transition-all duration-300 border border-gray-100 hover:border-gray-200 hover:shadow-lg">
                <img src="<?php echo e(asset('images/brands/' . $brand->logo_url)); ?>"
                    alt="<?php echo e($brand->name); ?>"
                    class="h-13 md:h-15 object-contain grayscale group-hover:grayscale-0 transition-all duration-500 group-hover:scale-110">
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>

<!-- FEATURES -->
<section class="py-16 border-t border-gray-100"">
    <div class=" container mx-auto px-4">
    <div class="text-center mb-12">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-3">Ưu điểm nổi bật</h2>
    </div>
    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Feature 1 -->
        <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100">
            <div class="w-14 h-14 bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl flex items-center justify-center mb-4 shadow-lg shadow-green-500/30">
                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
            </div>
            <h3 class="font-bold text-gray-900 mb-2">100% Chính hãng</h3>
            <p class="text-gray-600 text-sm">Cam kết sản phẩm chính hãng từ nhà phân phối</p>
        </div>

        <!-- Feature 2 -->
        <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100">
            <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-2xl flex items-center justify-center mb-4 shadow-lg shadow-blue-500/30">
                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                </svg>
            </div>
            <h3 class="font-bold text-gray-900 mb-2">Giao hàng nhanh</h3>
            <p class="text-gray-600 text-sm">Miễn phí ship đơn từ 500k, giao trong 2h</p>
        </div>

        <!-- Feature 3 -->
        <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100">
            <div class="w-14 h-14 bg-gradient-to-br from-purple-500 to-pink-600 rounded-2xl flex items-center justify-center mb-4 shadow-lg shadow-purple-500/30">
                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                </svg>
            </div>
            <h3 class="font-bold text-gray-900 mb-2">Đổi trả dễ dàng</h3>
            <p class="text-gray-600 text-sm">Đổi trả trong 30 ngày nếu không vừa ý</p>
        </div>

        <!-- Feature 4 -->
        <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100">
            <div class="w-14 h-14 bg-gradient-to-br from-orange-500 to-red-600 rounded-2xl flex items-center justify-center mb-4 shadow-lg shadow-orange-500/30">
                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
            </div>
            <h3 class="font-bold text-gray-900 mb-2">Hỗ trợ 24/7</h3>
            <p class="text-gray-600 text-sm">Tư vấn nhiệt tình qua hotline & chat</p>
        </div>
    </div>
    </div>
</section>
<!-- CONTACT SECTION -->
<section id="contact" class="py-16 md:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Title -->
        <div class="text-center mb-12 md:mb-16">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold mb-3">
                Liên hệ với chúng tôi
            </h2>
            <p class="text-gray-600 text-base md:text-lg">
                SportStore luôn sẵn sàng hỗ trợ bạn 24/7
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-10">

            <!-- LEFT INFO -->
            <div class="space-y-6">

                <!-- Box Item -->
                <div class="flex items-start gap-4 bg-white rounded-xl p-5 sm:p-6 shadow-md hover:shadow-lg border border-red-100 transition">
                    <div class="w-10 h-10 sm:w-12 sm:h-12 flex items-center justify-center 
                        bg-gradient-to-br from-red-500 to-rose-600 rounded-xl text-white text-lg sm:text-xl shadow-md">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900 text-base sm:text-lg mb-1">Địa chỉ</h4>
                        <p class="text-gray-600 text-sm sm:text-base leading-relaxed">
                            Đại học Công Thương TP.HCM<br>
                            140 Lê Trọng Tấn, Tân Phú, TP.HCM
                        </p>
                    </div>
                </div>

                <!-- Phone -->
                <div class="flex items-start gap-4 bg-white rounded-xl p-5 sm:p-6 shadow-md hover:shadow-lg border border-red-100 transition">
                    <div class="w-10 h-10 sm:w-12 sm:h-12 flex items-center justify-center 
                        bg-gradient-to-br from-red-500 to-rose-600 rounded-xl text-white text-lg sm:text-xl shadow-md">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900 text-base sm:text-lg mb-1">Điện thoại</h4>
                        <p class="text-gray-600 text-sm sm:text-base leading-relaxed">
                            0123 456 789<br>
                            +84 987 654 321
                        </p>
                    </div>
                </div>

                <!-- Email -->
                <div class="flex items-start gap-4 bg-white rounded-xl p-5 sm:p-6 shadow-md hover:shadow-lg border border-red-100 transition">
                    <div class="w-10 h-10 sm:w-12 sm:h-12 flex items-center justify-center 
                        bg-gradient-to-br from-red-500 to-rose-600 rounded-xl text-white text-lg sm:text-xl shadow-md">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900 text-base sm:text-lg mb-1">Email</h4>
                        <p class="text-gray-600 text-sm sm:text-base leading-relaxed break-all">
                            dinhthithaoly123456@gmail.com<br>
                            contact@sportstore.vn
                        </p>
                    </div>
                </div>

                <!-- Social Icons -->
                <div class="flex gap-4 pt-2 sm:pt-3">
                    <?php $__currentLoopData = ['facebook-f','instagram','youtube','tiktok']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $icon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="#"
                        class="w-9 h-9 sm:w-10 sm:h-10 rounded-xl bg-gradient-to-br from-red-500 to-rose-600 text-white 
                        flex items-center justify-center hover:scale-110 transition">
                        <i class="fab fa-<?php echo e($icon); ?>"></i>
                    </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            <!-- CONTACT FORM -->
            <div class="md:col-span-2 bg-white rounded-2xl sm:rounded-3xl shadow-lg border border-red-100 p-6 sm:p-8 md:p-10 relative overflow-hidden">

                <div class="relative z-10">

                    <?php if(session('success')): ?>
                    <script>
                        window.addEventListener('DOMContentLoaded', () => {
                            window.showNotification("<?php echo e(session('success')); ?>", "success");
                        });
                    </script>
                    <?php endif; ?>

                    <form action="<?php echo e(route('contact.send')); ?>" method="POST" class="space-y-5">
                        <?php echo csrf_field(); ?>

                        <!-- Two Inputs -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Họ và tên</label>
                                <input type="text" name="name" placeholder="Nguyễn Văn A"
                                    class="w-full border rounded-lg px-4 py-2.5 text-sm focus:outline-none transition border-gray-300 focus:ring-1 focus:ring-red-500 focus:border-red-500">
                            </div>

                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Email</label>
                                <input type="email" name="email" placeholder="example@gmail.com"
                                    class="w-full border rounded-lg px-4 py-2.5 text-sm focus:outline-none transition border-gray-300 focus:ring-1 focus:ring-red-500 focus:border-red-500">
                            </div>
                        </div>

                        <!-- Phone + Subject -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Số điện thoại</label>
                                <input type="text" name="phone" placeholder="0912 345 678"
                                    class="w-full border rounded-lg px-4 py-2.5 text-sm focus:outline-none transition border-gray-300 focus:ring-1 focus:ring-red-500 focus:border-red-500">
                            </div>

                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Chủ đề</label>
                                <select name="subject"
                                    class="w-full border border-gray-300 rounded-xl px-4 py-3 text-sm sm:text-base focus:ring-2 focus:ring-red-500">
                                    <option disabled selected>Chọn chủ đề liên hệ</option>
                                    <option value="order">Vấn đề đơn hàng</option>
                                    <option value="product">Tư vấn sản phẩm</option>
                                    <option value="warranty">Bảo hành & đổi trả</option>
                                    <option value="other">Khác</option>
                                </select>
                            </div>
                        </div>

                        <!-- Message -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-1">Nội dung <span class="text-red-500">*</span></label>
                            <textarea name="message" rows="5" placeholder="Nhập nội dung..."
                                class="w-full border rounded-lg px-4 py-2.5 text-sm focus:outline-none transition border-gray-300 focus:ring-1 focus:ring-red-500 focus:border-red-500"></textarea>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit"
                            class="w-full bg-gradient-to-r from-red-600 to-rose-600 hover:from-red-700 hover:to-rose-700 
                            text-white font-bold py-3.5 rounded-xl shadow-md shadow-red-500/30 
                            hover:shadow-red-500/50 transition flex justify-center items-center gap-2 text-sm sm:text-base">
                            <i class="fas fa-paper-plane"></i> Gửi liên hệ
                        </button>

                        <p class="text-gray-500 text-xs sm:text-sm text-center mt-2 sm:mt-4">
                            Phản hồi sẽ được gửi trong vòng <span class="font-semibold text-red-600">24 giờ</span>
                        </p>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>



<?php $__env->startSection('newsletter'); ?>
<!-- NEWSLETTER -->
<section class="py-16 bg-gradient-to-br from-gray-900 via-slate-800 to-gray-900 relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <!-- Icon -->
            <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-red-500 to-pink-600 rounded-3xl mb-6 shadow-lg shadow-red-500/30">
                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 19v-8.93a2 2 0 01.89-1.664l7-4.666a2 2 0 012.22 0l7 4.666A2 2 0 0121 10.07V19M3 19a2 2 0 002 2h14a2 2 0 002-2M3 19l6.75-4.5M21 19l-6.75-4.5M3 10l6.75 4.5M21 10l-6.75 4.5m0 0l-1.14.76a2 2 0 01-2.22 0l-1.14-.76" />
                </svg>
            </div>

            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
                Nhận ưu đãi đặc biệt
            </h2>
            <p class="text-gray-300 text-lg mb-8 max-w-2xl mx-auto">
                Đăng ký nhận thông tin về sản phẩm mới, ưu đãi độc quyền và mã giảm giá lên đến <span class="text-red-400 font-bold">200.000đ</span>
            </p>

            <!-- Form -->
            <form class="flex flex-col sm:flex-row gap-3 max-w-xl mx-auto mb-6">
                <div class="flex-1 relative">
                    <svg class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <input type="email"
                        placeholder="Nhập email của bạn..."
                        class="w-full pl-12 pr-4 py-4 rounded-xl bg-white/10 backdrop-blur-md border border-white/20 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent transition-all">
                </div>
                <button type="submit"
                    class="bg-gradient-to-r from-red-600 to-pink-600 hover:from-red-700 hover:to-pink-700 text-white font-bold px-8 py-4 rounded-xl transition-all duration-300 shadow-lg shadow-red-500/30 hover:shadow-red-500/50 hover:scale-105 whitespace-nowrap">
                    Đăng ký ngay
                </button>
            </form>

            <p class="text-gray-400 text-sm flex items-center justify-center gap-2">
                <svg class="w-4 h-4 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
                Chúng tôi cam kết bảo mật thông tin của bạn
            </p>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
    // Countdown đến 0h ngày mai
    function countdown() {
        return {
            hours: '00',
            minutes: '00',
            seconds: '00',
            init() {
                const update = () => {
                    const now = new Date();
                    const tomorrow = new Date(now.getFullYear(), now.getMonth(), now.getDate() + 1);
                    const diff = tomorrow - now;

                    if (diff <= 0) {
                        this.hours = this.minutes = this.seconds = '00';
                        return;
                    }

                    this.hours = String(Math.floor(diff / 3600000)).padStart(2, '0');
                    this.minutes = String(Math.floor((diff % 3600000) / 60000)).padStart(2, '0');
                    this.seconds = String(Math.floor((diff % 60000) / 1000)).padStart(2, '0');
                };
                update();
                setInterval(update, 1000);
            }
        };
    }
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\HUIT\HK7\PHP\DoAn\website-sports-store-main\resources\views/client/home.blade.php ENDPATH**/ ?>