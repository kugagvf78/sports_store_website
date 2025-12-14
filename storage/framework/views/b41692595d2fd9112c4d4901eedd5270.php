<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Mã OTP Xác Thực - SportStore</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            line-height: 1.6;
            color: #333333;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #f3f4f6 0%, #e5e7eb 100%);
        }
        .email-wrapper {
            max-width: 600px;
            margin: 40px auto;
            background-color: #ffffff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        }
        .header {
            background: linear-gradient(135deg, #dc2626 0%, #b91c1c 50%, #991b1b 100%);
            padding: 50px 30px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        .header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.1"%3E%3Cpath d="M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');
            opacity: 0.15;
        }
        .header-content {
            position: relative;
            z-index: 1;
        }
        .logo {
            font-size: 36px;
            font-weight: 900;
            color: #ffffff;
            margin: 0 0 10px 0;
            letter-spacing: -1px;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }
        .logo-subtitle {
            color: rgba(255, 255, 255, 0.95);
            font-size: 14px;
            font-weight: 500;
            letter-spacing: 2px;
            text-transform: uppercase;
        }
        .content {
            padding: 45px 35px;
        }
        .greeting {
            font-size: 20px;
            font-weight: 700;
            color: #1f2937;
            margin: 0 0 20px 0;
        }
        .message {
            color: #4b5563;
            font-size: 15px;
            line-height: 1.7;
            margin: 0 0 35px 0;
        }
        .otp-container {
            background: linear-gradient(135deg, #fef2f2 0%, #fee2e2 100%);
            border: 3px solid #dc2626;
            border-radius: 16px;
            padding: 35px;
            text-align: center;
            margin: 35px 0;
            position: relative;
            box-shadow: 0 4px 20px rgba(220, 38, 38, 0.15);
        }
        .otp-label {
            font-size: 12px;
            color: #991b1b;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: 700;
            margin-bottom: 18px;
        }
        .otp-code {
            font-size: 48px;
            font-weight: 800;
            letter-spacing: 16px;
            color: #dc2626;
            font-family: 'Courier New', monospace;
            margin: 0;
            user-select: all;
            text-shadow: 0 2px 4px rgba(220, 38, 38, 0.1);
        }
        .otp-expire {
            font-size: 14px;
            color: #991b1b;
            margin-top: 18px;
            font-weight: 600;
        }
        .timer-icon {
            display: inline-block;
            font-size: 16px;
            margin-right: 6px;
        }
        .warning-box {
            background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%);
            border-left: 5px solid #f59e0b;
            padding: 25px;
            margin: 35px 0;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(245, 158, 11, 0.1);
        }
        .warning-box .warning-title {
            font-weight: 700;
            color: #92400e;
            font-size: 15px;
            margin: 0 0 15px 0;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .warning-icon {
            font-size: 18px;
        }
        .warning-box ul {
            margin: 0;
            padding-left: 20px;
            color: #78350f;
            font-size: 14px;
            line-height: 1.8;
        }
        .warning-box li {
            margin: 10px 0;
        }
        .warning-box strong {
            color: #92400e;
            font-weight: 700;
        }
        .security-notice {
            background: linear-gradient(135deg, #f3f4f6 0%, #e5e7eb 100%);
            border-radius: 12px;
            padding: 25px;
            margin: 35px 0;
            text-align: center;
            border: 2px solid #d1d5db;
        }
        .security-notice p {
            margin: 0;
            color: #4b5563;
            font-size: 14px;
            line-height: 1.7;
            font-weight: 500;
        }
        .shield-icon {
            font-size: 20px;
            margin-right: 8px;
        }
        .cta-button {
            display: inline-block;
            background: linear-gradient(135deg, #dc2626 0%, #b91c1c 100%);
            color: #ffffff;
            padding: 16px 40px;
            border-radius: 12px;
            text-decoration: none;
            font-weight: 700;
            font-size: 15px;
            margin: 25px 0;
            box-shadow: 0 4px 15px rgba(220, 38, 38, 0.3);
            transition: all 0.3s ease;
        }
        .footer {
            background: linear-gradient(135deg, #1f2937 0%, #111827 100%);
            padding: 35px 30px;
            text-align: center;
        }
        .footer-text {
            color: #9ca3af;
            font-size: 13px;
            line-height: 1.8;
            margin: 0 0 20px 0;
        }
        .social-links {
            margin: 25px 0;
        }
        .social-links a {
            display: inline-block;
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            margin: 0 6px;
            line-height: 40px;
            color: #ffffff;
            text-decoration: none;
            font-size: 16px;
            transition: all 0.3s ease;
        }
        .contact-info {
            color: #d1d5db;
            font-size: 13px;
            margin: 20px 0 0 0;
            line-height: 1.8;
        }
        .contact-info strong {
            color: #ffffff;
            font-weight: 600;
        }
        .divider {
            height: 1px;
            background: linear-gradient(to right, transparent, rgba(255,255,255,0.1), transparent);
            margin: 25px 0;
        }
        .signature {
            margin-top: 35px;
            padding-top: 25px;
            border-top: 2px solid #e5e7eb;
        }
        .signature p {
            margin: 8px 0;
            color: #4b5563;
            font-size: 15px;
            line-height: 1.6;
        }
        .signature strong {
            color: #dc2626;
            font-weight: 700;
            font-size: 16px;
        }
        @media only screen and (max-width: 600px) {
            .email-wrapper {
                margin: 20px 10px;
                border-radius: 12px;
            }
            .header {
                padding: 40px 20px;
            }
            .logo {
                font-size: 30px;
            }
            .content {
                padding: 35px 25px;
            }
            .otp-code {
                font-size: 40px;
                letter-spacing: 10px;
            }
            .footer {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>
    <div class="email-wrapper">
        <!-- Header -->
        <div class="header">
            <div class="header-content">
                <div class="logo">
                    <i class="fas fa-running"></i>
                    <span>SportStore</span>
                </div>
                <div class="logo-subtitle">Athletic Excellence</div>
            </div>
        </div>

        <!-- Content -->
        <div class="content">
            <p class="greeting">👋 Xin chào<?php echo e($userName ? ' ' . $userName : ''); ?>!</p>
            
            <p class="message">
                Chúng tôi nhận được yêu cầu đặt lại mật khẩu cho tài khoản <strong>SportStore</strong> của bạn. 
                Để đảm bảo an toàn, vui lòng sử dụng mã OTP bên dưới để xác thực:
            </p>

            <!-- OTP Box -->
            <div class="otp-container">
                <div class="otp-label">🔐 Mã Xác Thực OTP</div>
                <div class="otp-code"><?php echo e($otp); ?></div>
                <div class="otp-expire">
                    <span class="timer-icon">⏱️</span>
                    Có hiệu lực trong <strong>5 phút</strong>
                </div>
            </div>

            <!-- Warning -->
            <div class="warning-box">
                <div class="warning-title">
                    <span class="warning-icon">⚠️</span>
                    <span>Lưu ý quan trọng về bảo mật</span>
                </div>
                <ul>
                    <li>Mã OTP này <strong>chỉ có hiệu lực trong 5 phút</strong> kể từ khi nhận được</li>
                    <li><strong>Không chia sẻ</strong> mã này với bất kỳ ai, kể cả nhân viên SportStore</li>
                    <li>Nếu bạn <strong>không thực hiện</strong> yêu cầu này, vui lòng bỏ qua email và đổi mật khẩu ngay</li>
                    <li>Mỗi mã OTP chỉ được sử dụng <strong>một lần duy nhất</strong></li>
                </ul>
            </div>

            <!-- Security Notice -->
            <div class="security-notice">
                <p>
                    <span class="shield-icon">🛡️</span>
                    <strong>Cam kết bảo mật:</strong> SportStore không bao giờ yêu cầu mật khẩu, mã PIN hoặc thông tin thẻ ngân hàng qua email. Nếu nhận được email đáng ngờ, vui lòng liên hệ ngay với chúng tôi.
                </p>
            </div>

            <!-- Signature -->
            <div class="signature">
                <p>Trân trọng,</p>
                <p><strong>Đội ngũ SportStore</strong></p>
                <p style="color: #6b7280; font-size: 13px; margin-top: 12px;">
                    "Đồng hành cùng đam mê thể thao của bạn"
                </p>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p class="footer-text">
                <strong>SPORTSTORE - HỆ THỐNG THỜI TRANG THÊ THAO</strong><br>
                Email này được gửi tự động, vui lòng không trả lời trực tiếp.
            </p>

            <div class="divider"></div>

            <div class="contact-info">
                <strong>📍 Địa chỉ:</strong> 140 Lê Trọng Tấn, Tân Phú, TP.HCM<br>
                <strong>📞 Hotline:</strong> 0123 456 789 (8:00 - 22:00 hàng ngày)<br>
                <strong>✉️ Email:</strong> support@sportstore.vn
            </div>

            <div class="social-links">
                <a href="#" title="Facebook">f</a>
                <a href="#" title="Instagram">📷</a>
                <a href="#" title="YouTube">▶</a>
                <a href="#" title="TikTok">🎵</a>
            </div>

            <p class="footer-text" style="font-size: 12px; color: #6b7280; margin-top: 25px;">
                © 2025 SportStore. All rights reserved.<br>
                Bạn nhận được email này vì đã đăng ký tài khoản tại SportStore.
            </p>
        </div>
    </div>
</body>
</html><?php /**PATH D:\HUIT\HK7\PHP\DoAn\website-sports-store-main\resources\views/emails/otp.blade.php ENDPATH**/ ?>