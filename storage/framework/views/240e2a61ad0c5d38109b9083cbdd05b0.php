<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $__env->yieldContent('description', 'Cửa hàng thể thao chuyên nghiệp với đa dạng sản phẩm chất lượng cao'); ?>">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo $__env->yieldContent('title', 'Cửa hàng thể thao'); ?></title>

    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- FontAwesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- ✅ Thêm dòng này để fix Swal -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Vite Assets -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <?php echo $__env->yieldPushContent('styles'); ?>
</head>


<body class="font-inter antialiased bg-white text-gray-900">
    <!-- Loading Spinner -->
    <div class="fixed inset-0 bg-white/90 hidden items-center justify-center z-50" id="loadingSpinner">
        <div class="animate-spin rounded-full h-12 w-12 border-b-2 border-red-600"></div>
        <span class="sr-only">Đang tải...</span>
    </div>

    <?php
    $isAdmin = Auth::check() && in_array(optional(Auth::user()->role)->slug, ['quan_tri', 'quan_ly']);
    ?>

    <!-- Header -->
    <nav class="bg-white border-b border-gray-200 shadow-sm sticky top-0 z-40">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">

                <!-- Left Section: Logo + Menu -->
                <div class="flex items-center space-x-8">
                    <!-- Logo -->
                    <a href="<?php echo e(route('home')); ?>" class="flex items-center space-x-2 text-xl font-bold text-red-600 hover:text-red-700 transition-colors duration-300">
                        <i class="fas fa-running text-2xl"></i>
                        <span>SportStore</span>
                    </a>

                    <!-- Desktop Navigation Menu -->
                    <div class="hidden lg:flex items-center space-x-6">
                        <a href="<?php echo e(route('home')); ?>"
                            class="text-gray-700 hover:text-red-600 font-medium text-sm transition-colors duration-200 <?php echo e(request()->routeIs('home') ? 'text-red-600 border-b-2 border-red-600 pb-1' : ''); ?>">
                            Trang chủ
                        </a>

                        <!-- Categories Dropdown -->
                        <div class="relative group">
                            <button class="text-gray-700 hover:text-red-600 font-medium text-sm transition-colors duration-200 flex items-center">
                                Danh mục
                                <i class="fas fa-chevron-down ml-1 text-xs"></i>
                            </button>
                            <div class="absolute left-0 mt-2 w-64 bg-white border border-gray-200 rounded-lg shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-20 
                                max-h-96 overflow-y-auto scrollbar-thin scrollbar-thumb-gray-400 scrollbar-track-gray-100">
                                <!-- Tất cả sản phẩm -->
                                <a href="<?php echo e(route('products.index')); ?>"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-red-50 hover:text-red-600 transition-colors duration-200 rounded-t-lg <?php echo e(request()->routeIs('products.index') && !request('category') ? 'bg-red-50 text-red-600' : ''); ?>">
                                    <i class="fas fa-box mr-2"></i>Tất cả sản phẩm
                                </a>
                                <!-- Danh mục từ database -->
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="<?php echo e(route('products.index', ['category' => $category->id])); ?>"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-red-50 hover:text-red-600 transition-colors duration-200 <?php echo e(request('category') == $category->id ? 'bg-red-50 text-red-600' : ''); ?>">
                                    <?php echo e($category->name); ?>

                                </a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>

                        <a href="<?php echo e(route('home')); ?>#contact"
                            class="text-gray-700 hover:text-red-600 font-medium text-sm transition-colors duration-200">
                            Liên hệ
                        </a>

                        <div style="width: 50px">

                        </div>
                    </div>
                </div>

                <!-- Center Section: Search Bar -->
                <div class="hidden md:flex flex-1 max-w-lg mx-8">
                    <div class="relative w-full">
                        <!-- Search Input -->
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-search text-gray-400"></i>
                            </div>

                            <input type="text"
                                id="searchInput"
                                class="block w-full pl-10 pr-12 py-2.5 border border-gray-300 rounded-lg leading-5 bg-white placeholder-gray-500 
                                focus:outline-none focus:placeholder-gray-400 focus:ring-2 focus:ring-red-600 focus:border-red-600 transition-all duration-200"
                                placeholder="Tìm kiếm sản phẩm..."
                                autocomplete="off">

                            <!-- Clear Button -->
                            <button type="button"
                                id="clearSearchBtn"
                                class="absolute inset-y-0 right-0 flex items-center justify-center w-10 h-full text-gray-400 hover:text-red-600 hidden">
                                <i class="fas fa-times"></i>
                            </button>

                            <!-- Loading Spinner -->
                            <div id="searchLoadingSpinner"
                                class="absolute inset-y-0 right-0 flex items-center justify-center w-10 h-full hidden">
                                <div class="animate-spin rounded-full h-4 w-4 border-b-2 border-red-600"></div>
                            </div>
                        </div>

                        <!-- Search Results Dropdown -->
                        <div id="searchResultsDropdown"
                            class="absolute left-0 right-0 mt-2 bg-white border border-gray-200 rounded-lg 
                                shadow-2xl z-50 max-h-[500px] overflow-y-auto hidden">
                            <div id="searchResultsContainer"></div>
                        </div>
                    </div>
                </div>

                <!-- Right Section: Action Icons -->
                <div class="flex items-center space-x-4">
                    <!-- Search Icon for Mobile -->
                    <button class="md:hidden p-2 text-gray-700 hover:text-red-600 transition-colors duration-200" onclick="toggleMobileSearch()">
                        <i class="fas fa-search text-lg"></i>
                    </button>

                    <!-- Wishlist - Only show for non-admin users -->
                    <?php if(!$isAdmin): ?>
                    <button class="relative p-2 text-gray-700 hover:text-red-600 transition-colors duration-200"
                        onclick="window.location.href='<?php echo e(route('wishlist.index')); ?>'">
                        <i class="fas fa-heart text-lg"></i>
                        <span class="wishlist-count absolute top-0 right-0 text-red-600 text-sm font-bold" id="wishlistCount">
                            <?php if(auth()->guard()->check()): ?>
                            <?php echo e(\App\Models\Wishlist::where('user_id', auth()->id())->count()); ?>

                            <?php else: ?>
                            0
                            <?php endif; ?>
                        </span>
                    </button>
                    <?php endif; ?>

                    <!-- Cart - Only show for non-admin users -->
                    <?php if(!$isAdmin): ?>
                    <button class="relative p-2 text-gray-700 hover:text-red-600 transition-colors duration-200" onclick="toggleCart()">
                        <i class="fas fa-shopping-cart text-lg"></i>
                        <span class="absolute top-0 right-0 text-red-600 text-sm font-bold" id="cartCount">
                            <?php if(auth()->guard()->check()): ?>
                            <?php echo e(optional(auth()->user()->cart)->items?->sum('quantity') ?? 0); ?>

                            <?php else: ?>
                            0
                            <?php endif; ?>
                        </span>
                    </button>
                    <?php endif; ?>

                    <!-- User Account -->
                    <?php if(auth()->guard()->guest()): ?>
                    <div class="relative group">
                        <button class="p-2 text-gray-700 hover:text-red-600 transition-colors duration-200">
                            <i class="fas fa-user text-lg"></i>
                        </button>
                        <div class="absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-20">
                            <a href="<?php echo e(route('login')); ?>" class="flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-red-50 hover:text-red-600 transition-colors duration-200 rounded-t-lg">
                                <i class="fas fa-sign-in-alt mr-3"></i>Đăng nhập
                            </a>
                            <a href="<?php echo e(route('register')); ?>" class="flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-red-50 hover:text-red-600 transition-colors duration-200 rounded-b-lg">
                                <i class="fas fa-user-plus mr-3"></i>Đăng ký
                            </a>
                        </div>
                    </div>
                    <?php else: ?>
                    <div class="relative group">
                        <button class="flex items-center space-x-2 p-1 text-gray-700 hover:text-red-600 transition-colors duration-200">
                        <!-- Avatar -->
                        <div class="w-9 h-9 rounded-full overflow-hidden border-2 border-gray-200 group-hover:border-red-600 transition-colors duration-200">
                            <?php
                                $avatar = Auth::user()->avatar;

                                // Kiểm tra Avatar là URL
                                $isUrl = $avatar && (
                                    str_starts_with($avatar, 'http://') ||
                                    str_starts_with($avatar, 'https://')
                                );

                                // Kiểm tra Avatar là file local
                                $isLocalFile = $avatar &&
                                    !$isUrl &&
                                    file_exists(public_path('images/users/' . $avatar));

                                // Chữ fallback
                                $letter = strtoupper(substr(Auth::user()->full_name ?: Auth::user()->username, 0, 1));

                                // Fallback SVG
                                $fallbackSvg = "data:image/svg+xml," . urlencode(
                                    '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"100\" height=\"100\">
                                        <rect fill=\"#dc2626\" width=\"100\" height=\"100\"/>
                                        <text x=\"50%\" y=\"50%\" dominant-baseline=\"middle\" text-anchor=\"middle\"
                                            font-size=\"40\" fill=\"white\" font-family=\"Arial\">' .
                                            $letter .
                                        '</text>
                                    </svg>'
                                );
                            ?>

                            <img src="<?php if($isUrl): ?>
                                        <?php echo e($avatar); ?>

                                    <?php elseif($isLocalFile): ?>
                                        <?php echo e(asset('images/users/' . $avatar)); ?>

                                    <?php else: ?>
                                        <?php echo e($fallbackSvg); ?>

                                    <?php endif; ?>"
                                alt="Avatar"
                                class="w-full h-full object-cover"
                                onerror="this.onerror=null; this.src='<?php echo e($fallbackSvg); ?>';">
                        </div>

                            <span class="hidden lg:block text-sm font-medium"><?php echo e(Auth::user()->username ?: Auth::user()->full_name); ?></span>
                            <i class="fas fa-chevron-down text-xs hidden lg:block"></i>
                        </button>
                        <div class="absolute right-0 mt-2 w-56 bg-white border border-gray-200 rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-20">
                            <!-- User Info Header -->
                            <div class="px-4 py-3 border-b border-gray-100">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 rounded-full overflow-hidden border-2 border-gray-200 flex-shrink-0">
                                        <?php
                                            $avatar = Auth::user()->avatar;

                                            // Kiểm tra URL
                                            $isUrl = $avatar && (
                                                str_starts_with($avatar, 'http://') ||
                                                str_starts_with($avatar, 'https://')
                                            );

                                            // Kiểm tra file local
                                            $isLocalFile = $avatar &&
                                                !$isUrl &&
                                                file_exists(public_path('images/users/' . $avatar));

                                            // Lấy chữ cái fallback
                                            $letter = strtoupper(substr(Auth::user()->full_name ?: Auth::user()->username, 0, 1));

                                            // SVG fallback
                                            $fallbackSvg = "data:image/svg+xml," . urlencode(
                                                '<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100">
                                                    <rect fill="#dc2626" width="100" height="100"/>
                                                    <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle"
                                                        font-size="40" fill="white" font-family="Arial">'
                                                        . $letter .
                                                    '</text>
                                                </svg>'
                                            );
                                        ?>

                                        <img src="<?php if($isUrl): ?>
                                                    <?php echo e($avatar); ?>

                                                <?php elseif($isLocalFile): ?>
                                                    <?php echo e(asset('images/users/' . $avatar)); ?>

                                                <?php else: ?>
                                                    <?php echo e($fallbackSvg); ?>

                                                <?php endif; ?>"
                                            alt="Avatar"
                                            class="w-full h-full object-cover"
                                            onerror="this.onerror=null; this.src='<?php echo e($fallbackSvg); ?>';">
                                    </div>

                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-medium text-gray-900 truncate"><?php echo e(Auth::user()->full_name ?: Auth::user()->username); ?></p>
                                        <p class="text-xs text-gray-500 truncate"><?php echo e(Auth::user()->email); ?></p>
                                    </div>
                                </div>
                            </div>

                            <?php if($isAdmin): ?>
                            <!-- 🛠️ ADMIN MENU -->
                            <a href="<?php echo e(route('admin.dashboard')); ?>" class="flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-red-50 hover:text-red-600 transition-colors duration-200">
                                <i class="fas fa-cog mr-3"></i> Cài đặt (Dashboard)
                            </a>
                            <div class="border-t border-gray-100"></div>
                            <form method="POST" action="<?php echo e(route('logout')); ?>" class="w-full">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="flex items-center w-full px-4 py-3 text-sm text-red-600 hover:bg-red-50 transition-colors duration-200 rounded-b-lg">
                                    <i class="fas fa-sign-out-alt mr-3"></i> Đăng xuất
                                </button>
                            </form>

                            <?php else: ?>
                            <!-- 👤 USER MENU -->
                            <a href="<?php echo e(route('profile.profile')); ?>" class="flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-red-50 hover:text-red-600 transition-colors duration-200">
                                <i class="fas fa-user-circle mr-3"></i>Thông tin cá nhân
                            </a>
                            <a href="<?php echo e(route('profile.profile')); ?>#orders"
                                class="flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-red-50 hover:text-red-600 transition-colors duration-200">
                                <i class="fas fa-shopping-bag mr-3"></i>Đơn hàng của tôi
                            </a>
                            <div class="border-t border-gray-100"></div>
                            <form method="POST" action="<?php echo e(route('logout')); ?>" class="w-full">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="flex items-center w-full px-4 py-3 text-sm text-red-600 hover:bg-red-50 transition-colors duration-200 rounded-b-lg">
                                    <i class="fas fa-sign-out-alt mr-3"></i>Đăng xuất
                                </button>
                            </form>
                            <?php endif; ?>
                        </div>

                    </div>
                    <?php endif; ?>

                    <!-- Mobile menu button -->
                    <button type="button"
                        class="lg:hidden p-2 text-gray-700 hover:text-red-600 transition-colors duration-200"
                        onclick="toggleMobileMenu()">
                        <i class="fas fa-bars text-lg" id="mobileMenuIcon"></i>
                    </button>
                </div>
            </div>

            <!-- Mobile Search Bar (Hidden by default) -->
            <div class="md:hidden border-t border-gray-200 px-4 py-3 hidden" id="mobileSearchBar">
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class="fas fa-search text-gray-400"></i>
                    </div>
                    <input type="text"
                        class="block w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-lg leading-5 bg-white placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:ring-2 focus:ring-red-600 focus:border-red-600 transition-all duration-200"
                        placeholder="Tìm kiếm sản phẩm...">
                </div>
            </div>

            <!-- Mobile Navigation Menu -->
            <div class="lg:hidden border-t border-gray-200 hidden" id="mobileMenu">
                <div class="py-4 space-y-2">
                    <a href="<?php echo e(route('home')); ?>"
                        class="block px-4 py-2 text-sm font-medium transition-all duration-200 <?php echo e(request()->routeIs('home') ? 'text-red-600 bg-red-50' : 'text-gray-700 hover:text-red-600 hover:bg-red-50'); ?>">
                        <i class="fas fa-home mr-3"></i>Trang chủ
                    </a>
                    <a href="<?php echo e(route('products.index')); ?>"
                        class="block px-4 py-2 text-sm font-medium transition-all duration-200 <?php echo e(request()->routeIs('products.*') ? 'text-red-600 bg-red-50' : 'text-gray-700 hover:text-red-600 hover:bg-red-50'); ?>">
                        <i class="fas fa-box mr-3"></i>Tất cả sản phẩm
                    </a>

                    <!-- Mobile Categories -->
                    <div class="px-4">
                        <button class="flex items-center justify-between w-full py-2 text-sm font-medium text-gray-700 hover:text-red-600 transition-colors duration-200" onclick="toggleMobileCategories()">
                            <span><i class="fas fa-th-large mr-3"></i>Danh mục</span>
                            <i class="fas fa-chevron-down transition-transform duration-200" id="categoriesChevron"></i>
                        </button>
                        <div class="ml-6 mt-2 space-y-1 hidden max-h-64 overflow-y-auto scrollbar-thin scrollbar-thumb-gray-400 scrollbar-track-gray-100" id="mobileCategories">
                            <!-- Tất cả sản phẩm -->
                            <a href="<?php echo e(route('products.index')); ?>"
                                class="block py-1 text-sm text-gray-600 hover:text-red-600 transition-colors duration-200 <?php echo e(request()->routeIs('products.index') && !request('category') ? 'text-red-600' : ''); ?>">
                                Tất cả sản phẩm
                            </a>
                            <!-- Danh mục từ database -->
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e(route('products.index', ['category' => $category->id])); ?>"
                                class="block py-1 text-sm text-gray-600 hover:text-red-600 transition-colors duration-200 <?php echo e(request('category') == $category->id ? 'text-red-600' : ''); ?>">
                                <?php echo e($category->name); ?>

                            </a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>

                    <a href="<?php echo e(route('home')); ?>#contact" class="block px-4 py-2 text-sm font-medium text-gray-700 hover:text-red-600 hover:bg-red-50 transition-all duration-200">
                        <i class="fas fa-envelope mr-3"></i>Liên hệ
                    </a>

                    <?php if(auth()->guard()->guest()): ?>
                    <div class="border-t border-gray-200 pt-4">
                        <a href="<?php echo e(route('login')); ?>" class="block px-4 py-2 text-sm font-medium text-gray-700 hover:text-red-600 hover:bg-red-50 transition-all duration-200">
                            <i class="fas fa-sign-in-alt mr-3"></i>Đăng nhập
                        </a>
                        <a href="<?php echo e(route('register')); ?>" class="block px-4 py-2 text-sm font-medium text-gray-700 hover:text-red-600 hover:bg-red-50 transition-all duration-200">
                            <i class="fas fa-user-plus mr-3"></i>Đăng ký
                        </a>
                    </div>
                    <?php else: ?>
                    <div class="border-t border-gray-200 pt-4">
                        <!-- Mobile User Info -->
                        <div class="px-4 py-2 flex items-center space-x-3">
                            <div class="w-12 h-12 rounded-full overflow-hidden border-2 border-gray-200 flex-shrink-0">
                                <?php if(Auth::user()->avatar && file_exists(public_path('images/users/' . Auth::user()->avatar))): ?>
                                <img src="<?php echo e(asset('images/users/' . Auth::user()->avatar)); ?>"
                                    alt="Avatar"
                                    class="w-full h-full object-cover">
                                <?php else: ?>
                                <div class="w-full h-full bg-gradient-to-br from-red-400 to-red-600 flex items-center justify-center">
                                    <span class="text-white text-base font-bold">
                                        <?php echo e(strtoupper(substr(Auth::user()->full_name ?: Auth::user()->username, 0, 1))); ?>

                                    </span>
                                </div>
                                <?php endif; ?>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-gray-900 truncate"><?php echo e(Auth::user()->full_name ?: Auth::user()->username); ?></p>
                                <p class="text-xs text-gray-500 truncate"><?php echo e(Auth::user()->email); ?></p>
                            </div>
                        </div>

                        <?php if($isAdmin): ?>
                        <a href="<?php echo e(route('admin.dashboard')); ?>" class="block px-4 py-2 text-sm font-medium text-gray-700 hover:text-red-600 hover:bg-red-50 transition-all duration-200">
                            <i class="fas fa-cog mr-3"></i>Cài đặt (Dashboard)
                        </a>
                        <?php else: ?>
                        <a href="<?php echo e(route('profile.profile')); ?>" class="block px-4 py-2 text-sm font-medium text-gray-700 hover:text-red-600 hover:bg-red-50 transition-all duration-200">
                            <i class="fas fa-user-circle mr-3"></i>Thông tin cá nhân
                        </a>
                        <a href="#" class="block px-4 py-2 text-sm font-medium text-gray-700 hover:text-red-600 hover:bg-red-50 transition-all duration-200">
                            <i class="fas fa-shopping-bag mr-3"></i>Đơn hàng của tôi
                        </a>
                        <?php endif; ?>

                        <form method="POST" action="<?php echo e(route('logout')); ?>" class="w-full">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="flex items-center w-full px-4 py-2 text-sm font-medium text-red-600 hover:bg-red-50 transition-all duration-200">
                                <i class="fas fa-sign-out-alt mr-3"></i>Đăng xuất
                            </button>
                        </form>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="min-h-screen bg-white">
        <?php echo $__env->yieldContent('hero'); ?>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
        <?php echo $__env->yieldContent('newsletter'); ?>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-50 border-t border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-6 xl:gap-8">
                <!-- Brand Section -->
                <div class="space-y-4">
                    <div class="flex items-center space-x-2 text-xl font-bold text-red-600">
                        <i class="fas fa-running"></i>
                        <span>SportStore</span>
                    </div>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Cửa hàng thể thao uy tín với đa dạng sản phẩm chất lượng cao,
                        phục vụ nhu cầu thể thao của bạn từ năm 2020.
                    </p>
                    <div class="flex space-x-3">
                        <a href="#" class="w-10 h-10 bg-white border border-gray-200 rounded-full flex items-center justify-center text-gray-600 hover:bg-blue-600 hover:text-white hover:border-blue-600 transition-all duration-200">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white border border-gray-200 rounded-full flex items-center justify-center text-gray-600 hover:bg-pink-600 hover:text-white hover:border-pink-600 transition-all duration-200">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white border border-gray-200 rounded-full flex items-center justify-center text-gray-600 hover:bg-blue-400 hover:text-white hover:border-blue-400 transition-all duration-200">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white border border-gray-200 rounded-full flex items-center justify-center text-gray-600 hover:bg-red-600 hover:text-white hover:border-red-600 transition-all duration-200">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>

                <!-- Products Section -->
                <div class="space-y-4">
                    <h6 class="text-gray-900 font-semibold text-sm uppercase tracking-wider">Sản phẩm</h6>
                    <nav class="space-y-2">
                        <a href="#" class="flex items-center space-x-2 text-gray-600 hover:text-red-600 text-sm transition-colors duration-200">
                            <i class="fas fa-chevron-right text-xs"></i>
                            <span>Giày thể thao</span>
                        </a>
                        <a href="#" class="flex items-center space-x-2 text-gray-600 hover:text-red-600 text-sm transition-colors duration-200">
                            <i class="fas fa-chevron-right text-xs"></i>
                            <span>Quần áo thể thao</span>
                        </a>
                        <a href="#" class="flex items-center space-x-2 text-gray-600 hover:text-red-600 text-sm transition-colors duration-200">
                            <i class="fas fa-chevron-right text-xs"></i>
                            <span>Phụ kiện thể thao</span>
                        </a>
                        <a href="#" class="flex items-center space-x-2 text-gray-600 hover:text-red-600 text-sm transition-colors duration-200">
                            <i class="fas fa-chevron-right text-xs"></i>
                            <span>Thiết bị tập luyện</span>
                        </a>
                        <a href="#" class="flex items-center space-x-2 text-gray-600 hover:text-red-600 text-sm transition-colors duration-200">
                            <i class="fas fa-chevron-right text-xs"></i>
                            <span>Dinh dưỡng thể thao</span>
                        </a>
                    </nav>
                </div>

                <!-- Support Section -->
                <div class="space-y-4">
                    <h6 class="text-gray-900 font-semibold text-sm uppercase tracking-wider">Hỗ trợ khách hàng</h6>
                    <nav class="space-y-2">
                        <a href="#" class="flex items-center space-x-2 text-gray-600 hover:text-red-600 text-sm transition-colors duration-200">
                            <i class="fas fa-chevron-right text-xs"></i>
                            <span>Liên hệ & tư vấn</span>
                        </a>
                        <a href="#" class="flex items-center space-x-2 text-gray-600 hover:text-red-600 text-sm transition-colors duration-200">
                            <i class="fas fa-chevron-right text-xs"></i>
                            <span>Hướng dẫn mua hàng</span>
                        </a>
                        <a href="#" class="flex items-center space-x-2 text-gray-600 hover:text-red-600 text-sm transition-colors duration-200">
                            <i class="fas fa-chevron-right text-xs"></i>
                            <span>Chính sách đổi trả</span>
                        </a>
                        <a href="#" class="flex items-center space-x-2 text-gray-600 hover:text-red-600 text-sm transition-colors duration-200">
                            <i class="fas fa-chevron-right text-xs"></i>
                            <span>Bảo hành sản phẩm</span>
                        </a>
                        <a href="#" class="flex items-center space-x-2 text-gray-600 hover:text-red-600 text-sm transition-colors duration-200">
                            <i class="fas fa-chevron-right text-xs"></i>
                            <span>Câu hỏi thường gặp</span>
                        </a>
                    </nav>
                </div>

                <!-- Contact Section -->
                <div class="space-y-4">
                    <h6 class="text-gray-900 font-semibold text-sm uppercase tracking-wider">Thông tin liên hệ</h6>
                    <div class="space-y-2 text-sm">
                        <div class="flex items-start space-x-2 p-2 bg-white rounded-lg border border-gray-100">
                            <i class="fas fa-map-marker-alt text-red-600 mt-0.5 flex-shrink-0 text-xs"></i>
                            <div class="min-w-0">
                                <p class="font-medium text-gray-800 mb-0.5 text-xs">Địa chỉ</p>
                                <span class="text-gray-600 text-xs leading-tight">140 Lê Trọng Tấn, Q.Tân Phú, HCM</span>
                            </div>
                        </div>

                        <div class="flex items-start space-x-2 p-2 bg-white rounded-lg border border-gray-100">
                            <i class="fas fa-phone text-red-600 mt-0.5 flex-shrink-0 text-xs"></i>
                            <div class="min-w-0">
                                <p class="font-medium text-gray-800 mb-0.5 text-xs">Hotline</p>
                                <a href="tel:0123456789" class="text-gray-600 hover:text-red-600 transition-colors text-xs">
                                    0123 456 789
                                </a>
                            </div>
                        </div>

                        <div class="flex items-start space-x-2 p-2 bg-white rounded-lg border border-gray-100">
                            <i class="fas fa-envelope text-red-600 mt-0.5 flex-shrink-0 text-xs"></i>
                            <div class="min-w-0">
                                <p class="font-medium text-gray-800 mb-0.5 text-xs">Email</p>
                                <a href="/cdn-cgi/l/email-protection#7f161119103f0c0f100d0b0c0b100d1a511c1012" class="text-gray-600 hover:text-red-600 transition-colors text-xs break-all">
                                    <span class="__cf_email__" data-cfemail="751c1b131a3506051a070106011a07105b161a18">[email&#160;protected]</span>
                                </a>
                            </div>
                        </div>

                        <div class="flex items-start space-x-2 p-2 bg-white rounded-lg border border-gray-100">
                            <i class="fas fa-clock text-red-600 mt-0.5 flex-shrink-0 text-xs"></i>
                            <div class="min-w-0">
                                <p class="font-medium text-gray-800 mb-0.5 text-xs">Giờ mở cửa</p>
                                <span class="text-gray-600 text-xs">8:00 - 22:00</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Google Map Section - Separate Column -->
                <div class="space-y-4 xl:col-span-1">
                    <h6 class="text-gray-900 font-semibold text-sm uppercase tracking-wider">Vị trí cửa hàng</h6>
                    <div class="relative rounded-lg overflow-hidden shadow-md border border-gray-200">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.0947544866876!2d106.62608231476333!3d10.794238592305463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752929f6160001%3A0x669b9f9e1c4e7123!2zMTQwIEzDqiBUcuG7jW5nIFThuqVuLCBUw6JuIFBow7osIFRo4buDIG3DtG5nIEhv4buTIENow60gTWluaCwgVmnhu4t0IE5hbQ!5e0!3m2!1svi!2s!4v1693891234567!5m2!1svi!2s"
                            width="100%"
                            height="200"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            title="Vị trí SportStore">
                        </iframe>

                        <!-- Quick action button -->
                        <div class="absolute bottom-2 right-2">
                            <a href="https://www.google.com/maps/dir//140+Lê+Trọng+Tấn,+Quận+Tân+Phú,+TP.HCM"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="bg-red-600 hover:bg-red-700 text-white px-2 py-1 rounded text-xs font-medium transition-colors flex items-center space-x-1">
                                <i class="fas fa-directions text-xs"></i>
                                <span>Chỉ đường</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="border-t border-gray-200 mt-10 pt-6">
                <div class="flex flex-col sm:flex-row justify-between items-center space-y-3 sm:space-y-0">
                    <div class="flex flex-col sm:flex-row items-center space-y-2 sm:space-y-0 sm:space-x-6">
                        <p class="text-gray-600 text-sm">
                            © <?php echo e(date('Y')); ?> SportStore. Tất cả quyền được bảo lưu.
                        </p>
                        <div class="flex space-x-4 text-xs">
                            <a href="#" class="text-gray-500 hover:text-red-600 transition-colors">Điều khoản sử dụng</a>
                            <span class="text-gray-300">|</span>
                            <a href="#" class="text-gray-500 hover:text-red-600 transition-colors">Chính sách bảo mật</a>
                        </div>
                    </div>
                    <div class="flex items-center space-x-2 text-sm text-gray-600">
                        <span>Thiết kế bởi</span>
                        <a href="#"
                            onclick="showDesignerMessage(event)"
                            class="text-red-600 hover:text-red-700 transition-colors font-medium">
                            Cikiv Hehe
                        </a>
                        <i class="fas fa-heart text-red-500 animate-pulse"></i>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
    // ============================================
    // ADVANCED SEARCH FUNCTIONALITY
    // ============================================
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('searchInput');
        const resultsDropdown = document.getElementById('searchResultsDropdown');
        const resultsContainer = document.getElementById('searchResultsContainer');
        const clearBtn = document.getElementById('clearSearchBtn');
        const loadingSpinner = document.getElementById('searchLoadingSpinner');
        
        if (!searchInput) return;
        
        let searchTimeout;
        let currentRequest = null;

        // Event: Input change
        searchInput.addEventListener('input', function(e) {
            const query = e.target.value.trim();
            
            if (query.length > 0) {
                clearBtn.classList.remove('hidden');
            } else {
                clearBtn.classList.add('hidden');
                hideResults();
                return;
            }
            
            clearTimeout(searchTimeout);
            
            if (query.length < 2) {
                hideResults();
                return;
            }
            
            searchTimeout = setTimeout(() => {
                performSearch(query);
            }, 300);
        });

        // Event: Clear button
        clearBtn.addEventListener('click', function() {
            searchInput.value = '';
            clearBtn.classList.add('hidden');
            hideResults();
            searchInput.focus();
        });

        // Event: Click outside to close
        document.addEventListener('click', function(e) {
            if (!searchInput.contains(e.target) && !resultsDropdown.contains(e.target)) {
                hideResults();
            }
        });

        // Event: Escape key
        searchInput.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                hideResults();
            } else if (e.key === 'Enter') {
                const query = searchInput.value.trim();
                if (query.length >= 2) {
                    window.location.href = `/products?search=${encodeURIComponent(query)}`;
                }
            }
        });

        /**
         * Perform search
         */
        function performSearch(query) {
            if (currentRequest) {
                currentRequest.abort();
            }
            
            loadingSpinner.classList.remove('hidden');
            clearBtn.classList.add('hidden');
            
            const controller = new AbortController();
            currentRequest = controller;
            
            fetch(`/api/chatbot/autocomplete?query=${encodeURIComponent(query)}`, {
                method: 'GET',
                headers: {
                    'Accept': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                signal: controller.signal
            })
            .then(response => response.json())
            .then(data => {
                loadingSpinner.classList.add('hidden');
                clearBtn.classList.remove('hidden');
                
                if (data.success && data.products.length > 0) {
                    displayResults(data.products, query);
                } else {
                    displayNoResults(query);
                }
            })
            .catch(error => {
                if (error.name !== 'AbortError') {
                    console.error('Search error:', error);
                    loadingSpinner.classList.add('hidden');
                    clearBtn.classList.remove('hidden');
                }
            })
            .finally(() => {
                currentRequest = null;
            });
        }

        /**
         * Display results - MỞ TAB MỚI
         */
        function displayResults(products, query) {
            let html = `
                <div class="p-2 bg-gray-50 border-b border-gray-200">
                    <p class="text-xs text-gray-600">
                        <i class="fas fa-check-circle text-green-500 mr-1"></i>
                        Tìm thấy <strong class="text-red-600">${products.length}</strong> sản phẩm
                    </p>
                </div>
            `;
            
            products.forEach(product => {
                const highlightedName = highlightText(product.name, query);
                const stockBadge = product.in_stock 
                    ? `<span class="text-xs text-green-600 bg-green-50 px-2 py-0.5 rounded-full">
                        <i class="fas fa-check-circle"></i> Còn ${product.stock_qty}
                    </span>`
                    : `<span class="text-xs text-red-600 bg-red-50 px-2 py-0.5 rounded-full">
                        <i class="fas fa-times-circle"></i> Hết hàng
                    </span>`;
                
                html += `
                    <a href="${product.url}" 
                    target="_blank"
                    rel="noopener noreferrer"
                    class="flex items-center gap-3 p-3 hover:bg-gray-50 transition-all border-b border-gray-100 last:border-b-0 group">
                        
                        <!-- Product Image -->
                        <img src="${product.image}" 
                            alt="${product.name}"
                            class="w-14 h-14 object-cover rounded border border-gray-200 flex-shrink-0"
                            onerror="this.src='/images/no-image.png'">
                        
                        <!-- Product Info -->
                        <div class="flex-1 min-w-0">
                            <h3 class="text-sm font-medium text-gray-900 truncate mb-1">
                                ${highlightedName}
                            </h3>
                            <p class="text-xs text-gray-500 mb-1">
                                <i class="fas fa-tag mr-1"></i>${product.brand}
                            </p>
                            <div class="flex items-center gap-2">
                                <span class="text-sm font-bold text-red-600">${product.formatted_price}</span>
                                ${stockBadge}
                            </div>
                        </div>
                        
                        <!-- External Link Icon -->
                        <div class="flex-shrink-0">
                            <i class="fas fa-external-link-alt text-gray-400 group-hover:text-red-600 transition-colors text-sm"></i>
                        </div>
                    </a>
                `;
            });
            
            html += `
                <div class="p-3 bg-gray-50 border-t">
                    <a href="/products?search=${encodeURIComponent(query)}" 
                    target="_blank"
                    rel="noopener noreferrer"
                    class="block w-full py-2 px-4 bg-red-600 hover:bg-red-700 text-white text-center rounded-lg text-sm font-medium transition-colors">
                        <i class="fas fa-search mr-2"></i>Xem tất cả kết quả
                        <i class="fas fa-external-link-alt ml-2 text-xs"></i>
                    </a>
                </div>
            `;
            
            resultsContainer.innerHTML = html;
            showResults();
        }

        /**
         * Display no results
         */
        function displayNoResults(query) {
            resultsContainer.innerHTML = `
                <div class="p-8 text-center">
                    <i class="fas fa-search text-gray-300 text-4xl mb-3"></i>
                    <p class="text-sm text-gray-600 mb-2">Không tìm thấy "<strong>${query}</strong>"</p>
                    <button onclick="document.getElementById('searchInput').value=''; document.getElementById('searchInput').focus();"
                            class="text-red-600 hover:text-red-700 text-sm font-medium mt-2">
                        <i class="fas fa-redo mr-1"></i>Thử từ khóa khác
                    </button>
                </div>
            `;
            showResults();
        }

        /**
         * Highlight text
         */
        function highlightText(text, query) {
            if (!text || !query) return text;
            const regex = new RegExp(`(${query})`, 'gi');
            return text.replace(regex, '<span class="bg-yellow-100 text-red-600 font-semibold px-0.5 rounded">$1</span>');
        }

        function showResults() {
            resultsDropdown.classList.remove('hidden');
        }

        function hideResults() {
            resultsDropdown.classList.add('hidden');
        }
    });
    </script>

    <style>
        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        #searchResultsDropdown {
            animation: slideDown 0.2s ease-out;
        }
    </style>

    <!-- Custom JavaScript -->
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script>
        // Mobile menu toggle
        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobileMenu');
            const mobileMenuIcon = document.getElementById('mobileMenuIcon');

            mobileMenu.classList.toggle('hidden');

            // Change icon
            if (mobileMenu.classList.contains('hidden')) {
                mobileMenuIcon.className = 'fas fa-bars text-lg';
            } else {
                mobileMenuIcon.className = 'fas fa-times text-lg';
            }
        }

        // Mobile search toggle
        function toggleMobileSearch() {
            const mobileSearchBar = document.getElementById('mobileSearchBar');
            mobileSearchBar.classList.toggle('hidden');
        }

        // Mobile categories toggle
        function toggleMobileCategories() {
            const mobileCategories = document.getElementById('mobileCategories');
            const categoriesChevron = document.getElementById('categoriesChevron');

            mobileCategories.classList.toggle('hidden');
            categoriesChevron.classList.toggle('rotate-180');
        }

        // Loading spinner functions
        function showLoading() {
            document.getElementById('loadingSpinner').classList.remove('hidden');
            document.getElementById('loadingSpinner').classList.add('flex');
        }

        function hideLoading() {
            document.getElementById('loadingSpinner').classList.add('hidden');
            document.getElementById('loadingSpinner').classList.remove('flex');
        }

        // Toggle giỏ hàng - chuyển đến trang giỏ hàng
        function toggleCart() {
            <?php if(auth()->guard()->check()): ?>
            window.location.href = "<?php echo e(route('cart.index')); ?>";
            <?php else: ?>
            alert('Vui lòng đăng nhập để xem giỏ hàng');
            window.location.href = "<?php echo e(route('login')); ?>";
            <?php endif; ?>
        }
        // Cập nhật số lượng giỏ hàng khi trang load
        document.addEventListener('DOMContentLoaded', function() {
            <?php if(auth()->guard()->check()): ?>
            updateCartCount();
            <?php endif; ?>
        });

        // Hàm cập nhật số lượng giỏ hàng
        function updateCartCount() {
            fetch("<?php echo e(route('cart.count')); ?>", {
                    method: 'GET',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'application/json'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    const cartCountElement = document.getElementById('cartCount');
                    if (cartCountElement) {
                        cartCountElement.textContent = data.count;
                    }
                })
                .catch(error => {
                    console.error('Error updating cart count:', error);
                });
        }
        // Hàm thêm sản phẩm vào giỏ hàng (gọi từ trang chi tiết sản phẩm)
        function addToCart(productVariantId, quantity = 1) {
            <?php if(auth()->guard()->guest()): ?>
            alert('Vui lòng đăng nhập để thêm sản phẩm vào giỏ hàng');
            window.location.href = "<?php echo e(route('login')); ?>";
            return;
            <?php endif; ?>

            $.ajax({
                url: "<?php echo e(route('cart.add')); ?>",
                type: 'POST',
                data: {
                    _token: '<?php echo e(csrf_token()); ?>',
                    product_variant_id: productVariantId,
                    quantity: quantity
                },
                success: function(response) {
                    if (response.success) {
                        // Cập nhật số lượng trên header
                        $('#cartCount').text(response.cartCount);

                        // Hiển thị thông báo
                        showNotification(response.message, 'success');
                    }
                },
                error: function(xhr) {
                    showNotification('Có lỗi xảy ra. Vui lòng thử lại!', 'error');
                }
            });
        }

        // Hàm hiển thị thông báo
        function showNotification(message, type) {
            const bgColor = type === 'success' ? 'bg-green-500' : 'bg-red-500';
            const notification = $(`
                <div class="fixed top-4 right-4 ${bgColor} text-white px-6 py-3 rounded-lg shadow-lg z-50 notification-popup">
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-${type === 'success' ? 'check-circle' : 'exclamation-circle'}"></i>
                        <span>${message}</span>
                    </div>
                </div>
            `);

            $('body').append(notification);

            setTimeout(function() {
                notification.fadeOut(300, function() {
                    $(this).remove();
                });
            }, 3000);
        }

        // Wishlist functionality
        function toggleWishlist() {
            alert('Danh sách yêu thích đang được phát triển!');
        }

        // Initialize page
        document.addEventListener('DOMContentLoaded', function() {
            // Hide loading after page load
            hideLoading();

            // Close mobile menu when clicking outside
            document.addEventListener('click', function(event) {
                const mobileMenu = document.getElementById('mobileMenu');
                const mobileSearchBar = document.getElementById('mobileSearchBar');

                if (!event.target.closest('nav') && !mobileMenu.classList.contains('hidden')) {
                    mobileMenu.classList.add('hidden');
                    document.getElementById('mobileMenuIcon').className = 'fas fa-bars text-lg';
                }

                if (!event.target.closest('nav') && !mobileSearchBar.classList.contains('hidden')) {
                    mobileSearchBar.classList.add('hidden');
                }
            });

            // Add smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {

                    const href = this.getAttribute('href');

                    // Không thực hiện scroll nếu chỉ là "#"
                    if (href === "#" || href.trim() === "") return;

                    e.preventDefault();

                    const target = document.querySelector(href);
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });

            // Form validation enhancement
            const forms = document.querySelectorAll('form');
            forms.forEach(form => {
                form.addEventListener('submit', function() {
                    showLoading();
                });
            });

            // Search functionality
            const searchInput = document.getElementById('searchInput');
            if (searchInput) {
                searchInput.addEventListener('keypress', function(e) {
                    if (e.key === 'Enter') {
                        e.preventDefault();
                        performSearch(this.value);
                    }
                });
            }
        });

        // Search function
        function performSearch(query) {
            if (query.trim()) {
                showLoading();
                // Implement search logic here
                console.log('Searching for:', query);
                // For now, just hide loading after a delay
                setTimeout(() => {
                    hideLoading();
                    alert(`Tìm kiếm cho: "${query}"`);
                }, 1000);
            }
        }

        // Back to top functionality (if needed)
        window.addEventListener('scroll', function() {
            const backToTop = document.getElementById('backToTop');
            if (backToTop) {
                if (window.pageYOffset > 300) {
                    backToTop.classList.remove('hidden');
                } else {
                    backToTop.classList.add('hidden');
                }
            }
        });

        function showDesignerMessage(event) {
            event.preventDefault();

            // Tạo thông báo đẹp
            const message = document.createElement('div');
            message.innerHTML = `
                <div class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50" onclick="this.remove()">
                    <div class="bg-white rounded-2xl p-8 mx-4 max-w-md text-center shadow-2xl transform animate-bounce">
                        <div class="text-6xl mb-4">💖</div>
                        <h3 class="text-2xl font-bold text-red-600 mb-3">Xin chào bạn!</h3>
                        <p class="text-gray-700 text-lg mb-6">Chào mừng bạn đến với shop của tôi, hehê! 😄</p>
                        <div class="flex justify-center space-x-2 text-2xl mb-4">
                            <span class="animate-pulse">❤️</span>
                            <span class="animate-bounce">💕</span>
                            <span class="animate-pulse">💖</span>
                            <span class="animate-bounce">💗</span>
                        </div>
                        <button onclick="this.closest('.fixed').remove()" 
                                class="bg-red-600 hover:bg-red-700 text-white px-6 py-2 rounded-full font-medium transition-colors">
                            Cảm ơn bạn! 🥰
                        </button>
                    </div>
                </div>
            `;

            document.body.appendChild(message);
        }
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const searchInput = document.getElementById("searchInput");
            const searchForm = document.getElementById("headerSearchForm");

            if (searchInput) {
                searchInput.addEventListener("keypress", function(e) {
                    if (e.key === "Enter") {
                        e.preventDefault();

                        sessionStorage.setItem("isFiltering", "true");
                        applySearchTransition();
                        searchForm.submit();
                    }
                });
            }

            function applySearchTransition() {
                const overlay = document.createElement("div");
                overlay.style.cssText = `
            position: fixed;
            inset: 0;
            background: #ffffff;
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity .2s ease-in-out;
        `;
                overlay.innerHTML = `
            <div>
                <div style="width:48px;height:48px;border:3px solid #eee;border-top-color:#dc2626;border-radius:50%;animation:spin .8s linear infinite;margin:auto"></div>
            </div>
        `;
                const css = document.createElement("style");
                css.textContent = "@keyframes spin{to{transform:rotate(360deg)}}";
                document.head.appendChild(css);
                document.body.appendChild(overlay);

                requestAnimationFrame(() => overlay.style.opacity = 1);
            }

            // không bị flash CSS
            if (sessionStorage.getItem("isFiltering") === "true") {
                document.documentElement.style.visibility = "visible";
                sessionStorage.removeItem("isFiltering");
            }
        });

        document.addEventListener("DOMContentLoaded", function() {

            // Nếu URL có chứa anchor (#contact)
            if (window.location.hash) {
                const target = document.querySelector(window.location.hash);

                if (target) {
                    // Chặn jump mặc định
                    window.scrollTo(0, 0);

                    // Smooth scroll sau khi page load xong
                    setTimeout(() => {
                        target.scrollIntoView({
                            behavior: "smooth",
                            block: "start"
                        });
                    }, 300); // delay nhẹ để CSS/JS load xong
                }
            }
        });
    </script>


    <?php echo $__env->yieldPushContent('scripts'); ?>

    <!-- Chatbot Widget -->
    <!-- Chatbot Toggle Button -->
    <div class="fixed bottom-6 right-6 z-50">
        <button id="chatbot-toggle"
            class="bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 
                   text-white w-16 h-16 rounded-full shadow-2xl 
                   flex items-center justify-center 
                   transition-all duration-300 transform hover:scale-110 
                   focus:outline-none focus:ring-4 focus:ring-red-300">
            <i class="fas fa-comments text-2xl"></i>
        </button>
    </div>

    <!-- Chatbot Window -->
    <div id="chatbot-window"
        class="fixed bottom-24 right-6 w-96 bg-white rounded-2xl shadow-2xl hidden z-50 
            animate-slideUp overflow-hidden border border-gray-200">

        <!-- Header -->
        <div class="bg-gradient-to-r from-red-600 to-red-700 text-white p-4 flex justify-between items-center">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center">
                    <i class="fas fa-robot text-red-600 text-xl"></i>
                </div>
                <div>
                    <h3 class="font-bold text-lg">SportStore AI</h3>
                    <p class="text-xs text-white/80">Trợ lý tư vấn</p>
                </div>
            </div>
            <button id="chatbot-close" class="text-white hover:text-gray-200 transition-colors">
                <i class="fas fa-times text-xl"></i>
            </button>
        </div>

        <!-- Messages Container -->
        <div id="chatbot-messages"
            class="h-96 overflow-y-auto p-4 space-y-3 bg-gray-50 
                scrollbar-thin scrollbar-thumb-gray-300 scrollbar-track-gray-100">
            <!-- Welcome Message -->
            <div class="flex gap-2 animate-fadeIn">
                <div class="w-8 h-8 bg-red-600 rounded-full flex items-center justify-center flex-shrink-0">
                    <i class="fas fa-robot text-white text-sm"></i>
                </div>
                <div class="bg-white rounded-lg p-3 shadow-sm max-w-xs">
                    <p class="text-sm text-gray-800">
                        👋 Xin chào! Tôi là trợ lý AI của SportStore.<br><br>
                        Tôi có thể giúp bạn:<br>
                        • Tìm kiếm sản phẩm<br>
                        • Tư vấn size và màu sắc<br>
                        • Giải đáp thắc mắc<br><br>
                        Bạn cần hỗ trợ gì? 😊
                    </p>
                </div>
            </div>
        </div>

        <!-- Input Form -->
        <form id="chatbot-form" class="p-4 border-t border-gray-200 bg-white">
            <div class="flex gap-2">
                <input type="text"
                    id="chatbot-input"
                    placeholder="Nhập câu hỏi của bạn..."
                    class="flex-1 px-4 py-2.5 border border-gray-300 rounded-lg 
                          focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent
                          text-sm"
                    required
                    autocomplete="off">
                <button type="submit"
                    id="chatbot-submit"
                    class="bg-red-600 hover:bg-red-700 text-white px-5 py-2.5 rounded-lg 
                           transition-all duration-300 transform hover:scale-105
                           focus:outline-none focus:ring-2 focus:ring-red-500
                           disabled:opacity-50 disabled:cursor-not-allowed">
                    <i class="fas fa-paper-plane"></i>
                </button>
            </div>
        </form>
    </div>

    <!-- ============================================ -->
    <!-- CHATBOT JAVASCRIPT -->
    <!-- ============================================ -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // DOM Elements
            const toggle = document.getElementById('chatbot-toggle');
            const chatWindow = document.getElementById('chatbot-window');
            const closeBtn = document.getElementById('chatbot-close');
            const form = document.getElementById('chatbot-form');
            const input = document.getElementById('chatbot-input');
            const messages = document.getElementById('chatbot-messages');
            const submitBtn = document.getElementById('chatbot-submit');

            // Check if elements exist
            if (!toggle || !chatWindow || !closeBtn || !form || !input || !messages || !submitBtn) {
                console.error('Chatbot: Some elements not found');
                return;
            }

            // Toggle chat window
            toggle.addEventListener('click', () => {
                chatWindow.classList.toggle('hidden');
                if (!chatWindow.classList.contains('hidden')) {
                    input.focus();

                    // Hide global loading spinner when chatbot opens
                    const globalLoader = document.getElementById('loadingSpinner');
                    if (globalLoader) {
                        globalLoader.classList.remove('flex');
                        globalLoader.classList.add('hidden');
                    }
                }
            });

            // Close chat window
            closeBtn.addEventListener('click', () => {
                chatWindow.classList.add('hidden');
            });

            // Handle form submit
            form.addEventListener('submit', async (e) => {
                e.preventDefault();

                const message = input.value.trim();
                if (!message) return;

                // Hide the global loading spinner
                const globalLoader = document.getElementById('loadingSpinner');
                if (globalLoader) {
                    globalLoader.classList.remove('flex');
                    globalLoader.classList.add('hidden');
                }

                // Disable input while processing
                input.disabled = true;
                submitBtn.disabled = true;

                // Add user message
                addMessage(message, 'user');
                input.value = '';

                // Show typing indicator
                const typingId = addTypingIndicator();

                try {
                    const response = await fetch('/chatbot/chat', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                            'Accept': 'application/json'
                        },
                        body: JSON.stringify({
                            message: message
                        })
                    });

                    // Remove typing indicator
                    removeTypingIndicator(typingId);

                    if (!response.ok) {
                        throw new Error(`HTTP error! status: ${response.status}`);
                    }

                    const data = await response.json();

                    if (data.success) {
                        // Message already formatted as HTML from controller
                        addMessage(data.message, 'bot');
                    } else {
                        addMessage('❌ Xin lỗi, đã có lỗi xảy ra. Vui lòng thử lại.', 'bot');
                        console.error('Chatbot error:', data);
                    }
                } catch (error) {
                    console.error('Chatbot fetch error:', error);
                    removeTypingIndicator(typingId);
                    addMessage('❌ Không thể kết nối với server. Vui lòng kiểm tra kết nối và thử lại.', 'bot');
                } finally {
                    // Re-enable input
                    input.disabled = false;
                    submitBtn.disabled = false;
                    input.focus();
                }
            });

            /**
             * Add message to chat
             */
            function addMessage(text, sender) {
                const messageDiv = document.createElement('div');
                messageDiv.className = `flex gap-2 ${sender === 'user' ? 'justify-end' : ''} animate-fadeIn`;

                if (sender === 'bot') {
                    messageDiv.innerHTML = `
                <div class="w-8 h-8 bg-red-600 rounded-full flex items-center justify-center flex-shrink-0">
                    <i class="fas fa-robot text-white text-sm"></i>
                </div>
                <div class="bg-white rounded-lg p-3 shadow-sm max-w-xs">
                    <div class="text-sm text-gray-800 leading-relaxed chatbot-message">${text}</div>
                </div>
            `;
                } else {
                    messageDiv.innerHTML = `
                <div class="bg-red-600 text-white rounded-lg p-3 shadow-sm max-w-xs">
                    <p class="text-sm">${escapeHtml(text)}</p>
                </div>
            `;
                }

                messages.appendChild(messageDiv);
                scrollToBottom();
            }

            /**
             * Add typing indicator
             */
            function addTypingIndicator() {
                const id = 'typing-' + Date.now();
                const typingDiv = document.createElement('div');
                typingDiv.id = id;
                typingDiv.className = 'flex gap-2 animate-fadeIn';
                typingDiv.innerHTML = `
            <div class="w-8 h-8 bg-red-600 rounded-full flex items-center justify-center flex-shrink-0">
                <i class="fas fa-robot text-white text-sm"></i>
            </div>
            <div class="bg-white rounded-lg p-3 shadow-sm">
                <div class="flex gap-1">
                    <div class="w-2 h-2 bg-gray-400 rounded-full animate-bounce"></div>
                    <div class="w-2 h-2 bg-gray-400 rounded-full animate-bounce" style="animation-delay: 0.2s"></div>
                    <div class="w-2 h-2 bg-gray-400 rounded-full animate-bounce" style="animation-delay: 0.4s"></div>
                </div>
            </div>
        `;
                messages.appendChild(typingDiv);
                scrollToBottom();
                return id;
            }

            /**
             * Remove typing indicator
             */
            function removeTypingIndicator(id) {
                const element = document.getElementById(id);
                if (element) {
                    element.remove();
                }
            }

            /**
             * Escape HTML to prevent XSS (only for user messages)
             */
            function escapeHtml(text) {
                const div = document.createElement('div');
                div.textContent = text;
                return div.innerHTML;
            }

            /**
             * Scroll to bottom of messages
             */
            function scrollToBottom() {
                messages.scrollTop = messages.scrollHeight;
            }

            // Close chatbot when clicking outside (optional)
            document.addEventListener('click', (e) => {
                if (!chatWindow.contains(e.target) && !toggle.contains(e.target)) {
                    if (!chatWindow.classList.contains('hidden')) {
                        // Uncomment to enable close on outside click
                        // chatWindow.classList.add('hidden');
                    }
                }
            });

            console.log('✅ Chatbot initialized successfully');
        });
    </script>

    <!-- ============================================ -->
    <!-- CHATBOT STYLES -->
    <!-- ============================================ -->
    <style>
        /* Animations */
        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .animate-slideUp {
            animation: slideUp 0.3s ease-out;
        }

        .animate-fadeIn {
            animation: fadeIn 0.3s ease-out;
        }

        /* Scrollbar styling */
        .scrollbar-thin::-webkit-scrollbar {
            width: 6px;
        }

        .scrollbar-thin::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }

        .scrollbar-thin::-webkit-scrollbar-thumb {
            background: #d1d5db;
            border-radius: 10px;
        }

        .scrollbar-thin::-webkit-scrollbar-thumb:hover {
            background: #9ca3af;
        }

        /* Chatbot message links */
        .chatbot-message a {
            color: #dc2626;
            text-decoration: underline;
            transition: color 0.2s;
        }

        .chatbot-message a:hover {
            color: #991b1b;
        }

        /* Chatbot button pulse effect */
        #chatbot-toggle {
            position: relative;
        }

        #chatbot-toggle::before {
            content: '';
            position: absolute;
            inset: -4px;
            border-radius: 50%;
            background: linear-gradient(45deg, #dc2626, #991b1b);
            opacity: 0;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {

            0%,
            100% {
                opacity: 0;
                transform: scale(1);
            }

            50% {
                opacity: 0.3;
                transform: scale(1.1);
            }
        }

        /* Mobile responsive *<?php /**PATH D:\HUIT\HK7\PHP\DoAn\website-sports-store-main\resources\views/layouts/app.blade.php ENDPATH**/ ?>