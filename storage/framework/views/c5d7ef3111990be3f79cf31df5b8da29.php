<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'SportStore Admin'); ?></title>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


    <?php echo $__env->yieldPushContent('styles'); ?>

    <!-- Vite -->

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        /* Hiệu ứng transition mượt */
        [x-cloak] {
            display: none;
        }

        .card {
            background-color: white;
            border: 1px solid #e5e7eb;
            border-radius: 0.75rem;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
            padding: 1rem;
        }

        .btn-red {
            background-color: #dc2626;
            color: #fff;
            font-weight: 500;
            border-radius: 0.5rem;
            padding: 0.5rem 1rem;
            transition: all 0.2s;
        }

        .btn-red:hover {
            background-color: #b91c1c;
        }

        .link-default {
            color: #e5e7eb;
            /* text-gray-200 */
            background-color: transparent;
            border-radius: 0.5rem;
            display: flex;
            align-items: center;
            transition: all 0.2s;
        }

        .link-default:hover {
            background-color: rgba(255, 255, 255, 0.1);
            color: #fff;
        }

        .link-active {
            background-color: #f87171;
            /* red-400 */
            color: white;
            font-weight: 600;
            border-radius: 0.5rem;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.15);
        }

        .link-sub {
            color: #d1d5db;
            transition: all 0.2s;
        }

        .link-sub:hover {
            color: #fff;
            background-color: rgba(255, 255, 255, 0.1);
        }

        .link-active-sub {
            background-color: #fca5a5;
            color: #fff;
            font-weight: 600;
        }
    </style>


    <?php echo $__env->yieldPushContent('styles'); ?>
</head>

<body class="font-inter bg-white text-gray-900 antialiased"
    x-data="{
        sidebarOpen: localStorage.getItem('sidebarOpen') === 'true',
        toggleSidebar() {
            this.sidebarOpen = !this.sidebarOpen;
            localStorage.setItem('sidebarOpen', this.sidebarOpen);
        }
    }" x-cloak>

    <!-- Loading Spinner -->
    <div id="loadingSpinner" class="fixed inset-0 bg-white/90 hidden items-center justify-center z-50">
        <div class="animate-spin rounded-full h-12 w-12 border-b-2 border-red-600"></div>
        <span class="sr-only">Đang tải...</span>
    </div>

    <!-- Sidebar -->
    <aside class="fixed inset-y-0 left-0 w-64 bg-gradient-to-b from-gray-900 via-gray-800 to-gray-900 text-white z-30 transform transition-transform duration-300 ease-in-out shadow-2xl"
        :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full lg:translate-x-0'">

        <!-- Logo & Brand -->
        <div class="flex items-center justify-between px-6 h-20 border-b border-gray-700/50 backdrop-blur-sm">
            <a href="<?php echo e(route('admin.dashboard')); ?>" class="flex items-center space-x-3 group">
                <div class="w-10 h-10 bg-gradient-to-br from-red-500 to-red-600 rounded-xl flex items-center justify-center shadow-lg group-hover:shadow-red-500/50 transition-all duration-300 group-hover:scale-110">
                    <i class="fas fa-running text-xl"></i>
                </div>
                <div class="flex flex-col">
                    <span class="text-xl font-bold bg-gradient-to-r from-white to-gray-300 bg-clip-text text-transparent">SportStore</span>
                    <span class="text-xs text-gray-400">Admin Panel</span>
                </div>
            </a>
            <button @click="toggleSidebar()" class="lg:hidden text-gray-400 hover:text-white transition-colors">
                <i class="fas fa-times text-xl"></i>
            </button>
        </div>

        <!-- Navigation -->
        <nav class="px-0 py-6 overflow-y-auto h-[calc(100vh-5rem)]"
            x-data="{
            openProducts: JSON.parse(localStorage.getItem('openProducts')) ?? false,
            toggleProducts() {
                this.openProducts = !this.openProducts;
                localStorage.setItem('openProducts', JSON.stringify(this.openProducts));
            },
            openPermission: JSON.parse(localStorage.getItem('openPermission')) ?? false,
            togglePermission() {
                this.openPermission = !this.openPermission;
                localStorage.setItem('openPermission', JSON.stringify(this.openPermission));
            }
        }">

            <!-- 🏠 Dashboard -->
            <?php if(auth()->user()->hasGroup('dashboard')): ?>
            <a href="<?php echo e(route('admin.dashboard')); ?>"
                class="group flex items-center px-5 py-3 mr-3 transition-all duration-200
            <?php echo e(request()->routeIs('admin.dashboard')
                ? 'bg-black text-white border-l-4 border-red-600 rounded-r-3xl shadow-inner'
                : 'text-gray-300 hover:bg-gray-900 hover:text-white rounded-r-3xl hover:mr-2'); ?>">
                <i class="fas fa-home text-base w-5"></i>
                <span class="ml-3 font-medium text-sm">Dashboard</span>
            </a>
            <?php endif; ?>

            <!-- 📦 Sản phẩm + Danh mục + Thương hiệu -->
            <?php if(auth()->user()->hasGroup('product') || auth()->user()->hasGroup('category') || auth()->user()->hasGroup('brand')): ?>
            <div class="mr-3">
                <button @click="toggleProducts()" class="group w-full flex items-center justify-between px-5 py-3 mr-3 transition-all duration-200
                <?php echo e(request()->routeIs('admin.products.*') || request()->routeIs('admin.categories.*') || request()->routeIs('admin.brands.*')
                    ? 'bg-black text-white border-l-4 border-red-600 rounded-r-3xl shadow-inner'
                    : 'text-gray-300 hover:bg-gray-900 hover:text-white rounded-r-3xl hover:mr-2'); ?>">
                    <div class="flex items-center">
                        <i class="fas fa-box text-base w-5"></i>
                        <span class="ml-3 font-medium text-sm">Danh mục</span>
                    </div>
                    <i class="fas transition-transform duration-300 text-xs" :class="openProducts ? 'fa-chevron-up' : 'fa-chevron-down'"></i>
                </button>

                <div x-show="openProducts" x-collapse class="ml-0 pl-10 border-l border-gray-700/50">
                    <?php if(auth()->user()->hasGroup('product')): ?>
                    <a href="<?php echo e(route('admin.products.index')); ?>" class="group flex items-center py-2.5 pl-3 transition-all duration-200
                    <?php echo e(request()->routeIs('admin.products.*')
                        ? 'bg-black text-white border-l-4 border-red-600 rounded-r-3xl shadow-inner'
                        : 'text-gray-400 hover:bg-gray-900 hover:text-white rounded-r-3xl hover:mr-2'); ?>">
                        <i class="fas fa-list text-sm w-5"></i>
                        <span class="ml-3 text-sm font-medium">Danh sách sản phẩm</span>
                    </a>
                    <?php endif; ?>

                    <?php if(auth()->user()->hasGroup('category')): ?>
                    <a href="<?php echo e(route('admin.categories.index')); ?>" class="group flex items-center py-2.5 pl-3 transition-all duration-200
                    <?php echo e(request()->routeIs('admin.categories.*')
                        ? 'bg-black text-white border-l-4 border-red-600 rounded-r-3xl shadow-inner'
                        : 'text-gray-400 hover:bg-gray-900 hover:text-white rounded-r-3xl hover:mr-2'); ?>">
                        <i class="fas fa-tags text-sm w-5"></i>
                        <span class="ml-3 text-sm font-medium">Loại sản phẩm</span>
                    </a>
                    <?php endif; ?>

                    <?php if(auth()->user()->hasGroup('brand')): ?>
                    <a href="<?php echo e(route('admin.brands.index')); ?>" class="group flex items-center py-2.5 pl-3 transition-all duration-200
                    <?php echo e(request()->routeIs('admin.brands.*')
                        ? 'bg-black text-white border-l-4 border-red-600 rounded-r-3xl shadow-inner'
                        : 'text-gray-400 hover:bg-gray-900 hover:text-white rounded-r-3xl hover:mr-2'); ?>">
                        <i class="fas fa-certificate text-sm w-5"></i>
                        <span class="ml-3 text-sm font-medium">Thương hiệu</span>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
            <?php endif; ?>

            <!-- 🛒 Đơn hàng -->
            <?php if(auth()->user()->hasGroup('order')): ?>
            <a href="<?php echo e(route('admin.orders.index')); ?>" class="group flex items-center px-5 py-3 mr-3 transition-all duration-200
            <?php echo e(request()->routeIs('admin.orders.*')
                ? 'bg-black text-white border-l-4 border-red-600 rounded-r-3xl shadow-inner'
                : 'text-gray-300 hover:bg-gray-900 hover:text-white rounded-r-3xl hover:mr-2'); ?>">
                <i class="fas fa-shopping-cart text-base w-5"></i>
                <span class="ml-3 font-medium text-sm">Đơn hàng</span>
            </a>
            <?php endif; ?>

            <!-- 👥 Khách hàng -->
            <?php if(auth()->user()->hasGroup('customer')): ?>
            <a href="<?php echo e(route('admin.customers.index')); ?>" class="group flex items-center px-5 py-3 mr-3 transition-all duration-200
            <?php echo e(request()->routeIs('admin.customers.*')
                ? 'bg-black text-white border-l-4 border-red-600 rounded-r-3xl shadow-inner'
                : 'text-gray-300 hover:bg-gray-900 hover:text-white rounded-r-3xl hover:mr-2'); ?>">
                <i class="fas fa-users text-base w-5"></i>
                <span class="ml-3 font-medium text-sm">Khách hàng</span>
            </a>
            <?php endif; ?>

            <!-- 🧑‍💼 Quản trị viên -->
            <?php if(auth()->user()->hasGroup('admin')): ?>
            <a href="<?php echo e(route('admin.admins.index')); ?>" class="group flex items-center px-5 py-3 mr-3 transition-all duration-200
            <?php echo e(request()->routeIs('admin.admins.*')
                ? 'bg-black text-white border-l-4 border-red-600 rounded-r-3xl shadow-inner'
                : 'text-gray-300 hover:bg-gray-900 hover:text-white rounded-r-3xl hover:mr-2'); ?>">
                <i class="fas fa-user-shield text-base w-5"></i>
                <span class="ml-3 font-medium text-sm">Quản trị viên</span>
            </a>
            <?php endif; ?>

            <!-- 🔐 Phân quyền -->
            <?php if(auth()->user()->hasGroup('permission')): ?>
            <div class="mr-3">
                <button @click="togglePermission()" class="group w-full flex items-center justify-between px-5 py-3 mr-3 transition-all duration-200
                <?php echo e(request()->routeIs('admin.permissions.*') || request()->routeIs('admin.permission_groups.*') 
                    ? 'bg-black text-white border-l-4 border-red-600 rounded-r-3xl shadow-inner'
                    : 'text-gray-300 hover:bg-gray-900 hover:text-white rounded-r-3xl hover:mr-2'); ?>">
                    <div class="flex items-center">
                        <i class="fas fa-lock text-base w-5"></i>
                        <span class="ml-3 font-medium text-sm">Phân quyền</span>
                    </div>
                    <i class="fas transition-transform duration-300 text-xs"
                        :class="openPermission ? 'fa-chevron-up' : 'fa-chevron-down'"></i>
                </button>

                <div x-show="openPermission" x-collapse class="ml-0 pl-10 border-l border-gray-700/50">
                    <a href="<?php echo e(route('admin.permissions.index')); ?>" class="group flex items-center py-2.5 pl-3 transition-all duration-200
                    <?php echo e(request()->routeIs('admin.permissions.*')
                        ? 'bg-black text-white border-l-4 border-red-600 rounded-r-3xl shadow-inner'
                        : 'text-gray-400 hover:bg-gray-900 hover:text-white rounded-r-3xl hover:mr-2'); ?>">
                        <i class="fas fa-key text-sm w-5"></i>
                        <span class="ml-3 text-sm font-medium">Danh sách quyền</span>
                    </a>

                    <a href="<?php echo e(route('admin.permission_groups.index')); ?>" class="group flex items-center py-2.5 pl-3 transition-all duration-200
                    <?php echo e(request()->routeIs('admin.permission_groups.*')
                        ? 'bg-black text-white border-l-4 border-red-600 rounded-r-3xl shadow-inner'
                        : 'text-gray-400 hover:bg-gray-900 hover:text-white rounded-r-3xl hover:mr-2'); ?>">
                        <i class="fas fa-users-cog text-sm w-5"></i>
                        <span class="ml-3 text-sm font-medium">Danh sách nhóm quyền</span>
                    </a>
                </div>
            </div>
            <?php endif; ?>
        </nav>
    </aside>


    <!-- Main -->
    <div class="lg:pl-64 flex flex-col min-h-screen">

        <!-- Topbar -->
        <header class="bg-white border-b border-gray-200 h-16 flex items-center justify-between px-6 sticky top-0 z-20">
            <div class="flex items-center space-x-4">
                <button @click="toggleSidebar()" class="lg:hidden text-gray-600 hover:text-red-600">
                    <i class="fas fa-bars text-lg"></i>
                </button>
                <h1 class="text-lg font-semibold text-gray-800"><?php echo $__env->yieldContent('page-title', ''); ?></h1>
            </div>

            <div class="flex items-center space-x-4">

                <div class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="flex items-center space-x-2 focus:outline-none">
                        <div class="w-9 h-9 rounded-full overflow-hidden border border-gray-200">
                            <?php if(Auth::user()->avatar && file_exists(public_path('uploads/avatars/' . Auth::user()->avatar))): ?>
                            <img src="<?php echo e(asset('uploads/avatars/' . Auth::user()->avatar)); ?>" class="w-full h-full object-cover">
                            <?php else: ?>
                            <div class="w-full h-full bg-red-600 text-white flex items-center justify-center font-bold">
                                <?php echo e(strtoupper(substr(Auth::user()->username, 0, 1))); ?>

                            </div>
                            <?php endif; ?>
                        </div>
                        <span class="hidden md:block text-sm font-medium"><?php echo e(Auth::user()->username); ?></span>
                        <i class="fas fa-chevron-down text-xs hidden md:block"></i>
                    </button>

                    <div x-show="open" @click.away="open = false"
                        class="absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-lg shadow-lg py-2 z-50">
                        <a href="<?php echo e(route('admin.profile.edit')); ?>" class="block px-4 py-2 text-sm hover:bg-red-50 hover:text-red-600">
                            <i class="fas fa-user-circle mr-2"></i> Hồ sơ
                        </a>
                        <a href="<?php echo e(route('home')); ?>" class="block px-4 py-2 text-sm hover:bg-red-50 hover:text-red-600">
                            <i class="fas fa-cog mr-2"></i> Trang chủ
                        </a>
                        <div class="border-t border-gray-100 my-1"></div>
                        <form action="<?php echo e(route('logout')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-red-50">
                                <i class="fas fa-sign-out-alt mr-2"></i> Đăng xuất
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </header>

        <!-- Nội dung chính -->
        <main class="flex-1 p-6 bg-gray-100">
            <?php echo $__env->yieldContent('content'); ?>
        </main>

        <!-- Footer -->
        <footer class="bg-[#f9fafb] border-t border-gray-200 text-sm text-gray-500 py-4 text-center">
            © <?php echo e(date('Y')); ?> SportStore Admin. All rights reserved.
        </footer>
    </div>

    <?php if($errors->any()): ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            <?php $__currentLoopData = $errors-> all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            showNotification(<?php echo json_encode($error, 15, 512) ?>, 'error');
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        });
    </script>
    <?php endif; ?>

    <?php if(session('success')): ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            showNotification(<?php echo json_encode(session('success'), 15, 512) ?>, 'success');
        });
    </script>
    <?php endif; ?>

    <?php if(session('error')): ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            showNotification(<?php echo json_encode(session('error'), 15, 512) ?>, 'error');
        });
    </script>
    <?php endif; ?>


    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

</body>

</html><?php /**PATH D:\HUIT\HK7\PHP\DoAn\website-sports-store-main\resources\views/layouts/admin.blade.php ENDPATH**/ ?>