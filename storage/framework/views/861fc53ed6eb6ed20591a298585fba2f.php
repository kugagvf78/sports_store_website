<?php $__env->startSection('title', 'Danh sách sản phẩm'); ?>

<?php $__env->startSection('content'); ?>
<div class="min-h-screen py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-6">
            <!-- Sidebar Bộ lọc -->
            <div class="w-full lg:w-1/4">
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 sticky top-6">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h5 class="text-lg font-semibold text-red-600 flex items-center">
                            <i class="fas fa-filter mr-2"></i>Bộ lọc sản phẩm
                        </h5>
                    </div>
                    <div class="p-6">
                        <form method="GET" id="filterForm" class="space-y-6">
                            <!-- Tìm kiếm -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    <i class="fas fa-search mr-1 text-red-600"></i>Tìm kiếm
                                </label>
                                <div class="filter-search">
                                    <input
                                        type="text"
                                        name="search"
                                        value="<?php echo e(request('search')); ?>"
                                        placeholder="Nhập tên sản phẩm...">
                                    <button type="button" onclick="clearSearch()">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>


                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    <i class="fas fa-tags mr-1"></i>Trạng thái
                                </label>
                                <select name="status" class="w-full rounded-lg border-gray-300">
                                    <option value="">Tất cả trạng thái</option>
                                    <option value="1" <?php echo e(request('status') == 1 ? 'selected' : ''); ?>>Đang bán</option>
                                    <option value="2" <?php echo e(request('status') == 2 ? 'selected' : ''); ?>>Hết hàng</option>
                                    <option value="3" <?php echo e(request('status') == 3 ? 'selected' : ''); ?>>Ngừng bán</option>
                                </select>
                            </div>
                            <!-- Lọc theo thương hiệu -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    <i class="fas fa-tags mr-1"></i>Thương hiệu
                                </label>
                                <select class="w-full rounded-lg border-gray-300 focus:ring-red-500 focus:border-red-500" name="brand">
                                    <option value="">Tất cả thương hiệu</option>
                                    <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($brand->id); ?>" <?php echo e(request('brand') == $brand->id ? 'selected' : ''); ?>>
                                        <?php echo e($brand->name); ?>

                                    </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                            <!-- Lọc theo danh mục -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    <i class="fas fa-list mr-1"></i>Danh mục
                                </label>
                                <select class="w-full rounded-lg border-gray-300 focus:ring-red-500 focus:border-red-500" name="category">
                                    <option value="">Tất cả danh mục</option>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($category->id); ?>" <?php echo e(request('category') == $category->id ? 'selected' : ''); ?>>
                                        <?php echo e($category->name); ?>

                                    </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                            <!-- Sắp xếp -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    <i class="fas fa-sort mr-1"></i>Sắp xếp theo
                                </label>
                                <div class="grid grid-cols-3 gap-2">
                                    <div class="col-span-2">
                                        <select class="w-full rounded-lg border-gray-300 focus:ring-red-500 focus:border-red-500" name="sort">
                                            <option value="name" <?php echo e(request('sort') == 'name' ? 'selected' : ''); ?>>Tên</option>
                                            <option value="price" <?php echo e(request('sort') == 'price' ? 'selected' : ''); ?>>Giá</option>
                                            <option value="created_at" <?php echo e(request('sort') == 'created_at' ? 'selected' : ''); ?>>Ngày tạo</option>
                                        </select>
                                    </div>
                                    <div>
                                        <select class="w-full rounded-lg border-gray-300 focus:ring-red-500 focus:border-red-500" name="order">
                                            <option value="asc" <?php echo e(request('order') == 'asc' ? 'selected' : ''); ?>>↑</option>
                                            <option value="desc" <?php echo e(request('order') == 'desc' ? 'selected' : ''); ?>>↓</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="space-y-3">
                                <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white font-medium py-2.5 px-4 rounded-lg transition-colors duration-200 flex items-center justify-center">
                                    <i class="fas fa-search mr-2"></i>Áp dụng
                                </button>
                                <a href="<?php echo e(route('products.index')); ?>" class="w-full bg-gray-100 hover:bg-gray-200 text-gray-700 font-medium py-2.5 px-4 rounded-lg transition-colors duration-200 flex items-center justify-center">
                                    <i class="fas fa-refresh mr-2"></i>Hủy
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="flex-1">
                <!-- Header -->
                <div class="flex flex-wrap items-center justify-between mb-8 gap-3">
                    <div class="flex items-center bg-[#fef2f2] text-[#dc2626] px-4 py-2 rounded-full border border-[#fcdcdc] shadow-sm">
                        <i class="fas fa-tags mr-2"></i>
                        <span class="font-semibold">Danh sách sản phẩm</span>
                    </div>
                    <div class="flex items-center text-sm text-gray-600 bg-white px-4 py-2 rounded-full border border-gray-200 shadow-sm">
                        <i class="fas fa-box text-[#dc2626] mr-2"></i>
                        <span><strong class="text-gray-900"><?php echo e($products->total()); ?> sản phẩm</strong> </span>
                        <?php if(request('search')): ?>
                        <span class="ml-1">cho từ khóa <strong class="text-gray-900">"<?php echo e(request('search')); ?>"</strong></span>
                        <?php endif; ?>
                    </div>
                </div>

                <?php if($products->count() > 0): ?>
                <!-- Products Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="group">
                        <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                            <!-- Product Image -->
                            <div class="relative overflow-hidden">
                                <?php if($product->status == 2): ?>
                                <span class="absolute top-3 left-3 bg-red-500 text-white text-xs font-semibold px-4 py-2 rounded-2xl shadow z-20 leading-none">Hết hàng</span>
                                <?php elseif($product->status == 3): ?>
                                <span class="absolute top-3 left-3 bg-gray-600 text-white text-xs font-semibold px-4 py-2 rounded-2xl shadow z-20 leading-none">Ngừng bán</span>
                                <?php endif; ?>
                                <?php if($product->mainImage): ?>
                                <img src="<?php echo e(asset('images/products/' . $product->mainImage->url)); ?>"
                                    class="w-full h-60 object-cover group-hover:scale-105 transition-transform duration-300"
                                    alt="<?php echo e($product->name); ?>">
                                <?php else: ?>
                                <div class="w-full h-60 bg-gray-100 flex items-center justify-center">
                                    <div class="text-center text-gray-400">
                                        <i class="fas fa-image text-4xl mb-2"></i>
                                        <p class="text-sm">Không có ảnh</p>
                                    </div>
                                </div>
                                <?php endif; ?>

                                <!-- Quick Actions Overlay -->
                                <div class="absolute top-3 right-3">
                                    <button
                                        class="toggle-wishlist bg-white/90 backdrop-blur-sm hover:bg-white w-9 h-9 flex items-center justify-center rounded-full shadow-md transition-all duration-200"
                                        data-product-id="<?php echo e($product->id); ?>"
                                        title="Thêm vào yêu thích">
                                        <i class="far fa-heart text-red-500 hover:text-red-600 text-lg"></i>
                                    </button>
                                </div>
                            </div>

                            <!-- Product Info -->
                            <div class="p-6">
                                <!-- Brand -->
                                <?php if($product->brand): ?>
                                <span class="inline-block bg-red-50 text-red-600 text-xs font-medium px-2.5 py-1 rounded-full border border-red-200 mb-3">
                                    <?php echo e($product->brand->name); ?>

                                </span>
                                <?php endif; ?>

                                <!-- Product Name -->
                                <h6 class="text-lg font-semibold text-gray-900 mb-2 line-clamp-2">
                                    <?php echo e(Str::limit($product->name, 22)); ?>

                                </h6>

                                <!-- Description -->
                                <p class="text-sm text-gray-600 mb-4 line-clamp-2">
                                    <?php echo e(Str::limit($product->description, 26)); ?>

                                </p>

                                <!-- Price and Action -->
                                <div class="flex items-center justify-between">
                                    <span class="text-sm font-bold text-red-600"><?php echo e($product->formatted_price); ?></span>
                                    <a href="<?php echo e(route('products.show', $product->slug)); ?>"
                                        class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-colors duration-200 flex items-center">
                                        <i class="fas fa-eye mr-1"></i>Chi tiết
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                <!-- Pagination -->
                <?php if($products->hasPages()): ?>
                <div class="mt-8">
                    <div class="">
                        <nav aria-label="Product pagination" class="pagination-wrapper">
                            <?php echo $products->appends(request()->query())->links('vendor.pagination.custom'); ?>

                        </nav>
                    </div>
                </div>
                <?php endif; ?>
                <?php else: ?>
                <!-- No Products Found -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-12 text-center">
                    <div class="mb-6">
                        <i class="fas fa-search text-6xl text-gray-300"></i>
                    </div>
                    <h4 class="text-xl font-semibold text-gray-600 mb-3">Không tìm thấy sản phẩm nào</h4>
                    <p class="text-gray-500 mb-6">
                        <?php if(request('search') || request('brand') || request('category')): ?>
                        Hãy thử thay đổi bộ lọc hoặc từ khóa tìm kiếm
                        <?php else: ?>
                        Hiện tại chưa có sản phẩm nào trong hệ thống
                        <?php endif; ?>
                    </p>
                    <a href="<?php echo e(route('products.index')); ?>" class="inline-flex items-center bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-lg font-medium transition-colors duration-200">
                        <i class="fas fa-refresh mr-2"></i>Xóa bộ lọc
                    </a>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php echo app('Illuminate\Foundation\Vite')(['resources/js/client/products.js', 'resources/js/client/wishlist.js']); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\HUIT\HK7\PHP\DoAn\website-sports-store-main\resources\views/client/products/index.blade.php ENDPATH**/ ?>