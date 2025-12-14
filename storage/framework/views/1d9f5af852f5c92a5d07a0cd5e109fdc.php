<style>
    body {
        background: linear-gradient(135deg, #f5f5f5 0%, #ffffff 100%);
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: "Segoe UI", sans-serif;
    }

    .error-403-container {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 60px;
        max-width: 1300px;
        width: 100%;
        height: 70vh;
        padding: 40px;
        background: #fff;
        border-radius: 20px;
        box-shadow: 0 10px 35px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }

    .error-text {
        flex: 1;
    }

    .error-text h1 {
        font-size: 54px;
        font-weight: 800;
        color: #c62828;
        margin-bottom: 5px;
    }

    .error-text h2 {
        font-size: 36px;
        font-weight: 700;
        color: #222;
        margin-bottom: 15px;
    }

    .error-text p {
        font-size: 16px;
        color: #555;
        line-height: 1.6;
        margin-bottom: 30px;
    }

    .error-btn {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 12px 28px;
        background: linear-gradient(135deg, #c62828, #e53935);
        color: #fff;
        border-radius: 50px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
        box-shadow: 0 8px 20px rgba(198, 40, 40, 0.25);
    }

    .error-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 30px rgba(198, 40, 40, 0.35);
        color: #fff;
    }

    .error-image {
        flex: 1;
        text-align: center;
    }

    .error-image img {
        width: 100%;
        max-width: 420px;
        animation: float 3s ease-in-out infinite;
    }

    @keyframes float {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-12px);
        }
    }

    @media (max-width: 768px) {
        .error-403-container {
            flex-direction: column-reverse;
            text-align: center;
            padding: 30px 20px;
        }

        .error-text h1 {
            font-size: 42px;
        }

        .error-text h2 {
            font-size: 28px;
        }

        .error-image img {
            max-width: 300px;
        }
    }
</style>

<body class="error-page-403">
    <div class="error-403-container">
        <div class="error-text">
            <h1>Ooops...</h1>
            <h2>Không có quyền truy cập</h2>
            <p>
                Bạn không có quyền truy cập vào trang này.<br>
                Vui lòng liên hệ quản trị viên nếu bạn nghĩ đây là lỗi.
            </p>

            <a href="<?php echo e(route('admin.dashboard')); ?>" class="error-btn">
                <i class="fa-solid fa-arrow-left"></i> Quay lại trang chủ
            </a>
        </div>

        <div class="error-image">
            <img src="<?php echo e(asset('images/errors/bg403.png')); ?>" alt="403 Forbidden">
        </div>
    </div>
</body><?php /**PATH D:\HUIT\HK7\PHP\DoAn\website-sports-store-main\resources\views/errors/403.blade.php ENDPATH**/ ?>