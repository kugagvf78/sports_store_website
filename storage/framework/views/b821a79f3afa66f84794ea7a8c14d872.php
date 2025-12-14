<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <style>
        body {
            margin: 0;
            padding: 0;
            background: #f5f5f7;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        a {
            color: #0066cc;
            text-decoration: none;
        }

        * {
            box-sizing: border-box;
        }
    </style>
</head>

<body>

    <table cellpadding="0" cellspacing="0" style="max-width: 600px; margin: 40px auto; background: #fff; border-radius: 8px; overflow: hidden;">

        <!-- HEADER -->
        <tr>
            <td style="
            padding: 48px 40px;
            background: linear-gradient(135deg, #e02424, #ff4d6d);
            color: white;
            text-align: center;
        ">
                <div style="font-size: 36px; font-weight: 800; letter-spacing: -1px; margin-bottom: 6px;">
                    Sport<span style="color: #ffe5e5;">Store</span>
                </div>

                <p style="margin: 0; font-size: 15px; opacity: 0.9;">
                     Bạn có một liên hệ mới từ khách hàng
                </p>
            </td>
        </tr>

        <!-- BODY -->
        <tr>
            <td style="padding: 40px 40px 48px;">

                <h2 style="margin: 0 0 20px; font-size: 18px; font-weight: 600; color: #1d1d1f;">
                    Thông tin khách hàng
                </h2>

                <table width="100%">
                    <tr>
                        <td style="padding: 12px 0; border-bottom: 1px solid #f0f0f0;">
                            <div style="font-size: 13px; color: #888;">Họ tên</div>
                            <div style="font-size: 16px; font-weight: 500; color:#1d1d1f;">
                                <?php echo e($name); ?>

                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding: 12px 0; border-bottom: 1px solid #f0f0f0;">
                            <div style="font-size: 13px; color: #888;">Email</div>
                            <div style="font-size: 16px; font-weight: 500;">
                                <a href="mailto:<?php echo e($email); ?>"><?php echo e($email); ?></a>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding: 12px 0; border-bottom: 1px solid #f0f0f0;">
                            <div style="font-size: 13px; color: #888;">Số điện thoại</div>
                            <div style="font-size: 16px; font-weight: 500;">
                                <?php echo e($phone ?? 'Không cung cấp'); ?>

                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding: 12px 0;">
                            <div style="font-size: 13px; color: #888;">Chủ đề</div>
                            <div style="font-size: 16px; font-weight: 500;">
                                <?php echo e($subject); ?>

                            </div>
                        </td>
                    </tr>
                </table>

                <!-- MESSAGE -->
                <h2 style="margin: 32px 0 16px; font-size: 18px; font-weight: 600;">
                    Nội dung tin nhắn
                </h2>

                <div style="padding: 20px; background: #f5f5f7; border-radius: 8px; border-left: 3px solid #e02424;">
                    <p style="margin: 0; font-size: 15px; line-height: 1.6; color:#1d1d1f;">
                        <?php echo nl2br(e($content)); ?>

                    </p>
                </div>

                <!-- BUTTON -->
                <div style="text-align:center; margin-top: 28px;">
                    <a href="mailto:<?php echo e($email); ?>"
                        style="display:inline-block; padding: 14px 32px; background:#e02424; color:#fff;
                          font-weight:600; font-size:15px; border-radius:8px; text-decoration:none;">
                        Trả lời khách hàng
                    </a>
                </div>

            </td>
        </tr>

        <!-- FOOTER -->
        <tr>
            <td style="background:#f5f5f7; padding: 32px 40px; text-align:center;">
                <p style="margin:0; font-size:14px; font-weight:600;">SportStore</p>
                <p style="margin:4px 0 16px; font-size:13px; color:#777;">Cửa hàng thể thao hàng đầu</p>
                <p style="margin:0; font-size:12px; color:#999;">
                    Email tự động từ hệ thống liên hệ — vui lòng không trả lời trực tiếp email này.
                </p>
                <p style="margin-top:16px; font-size:11px; color:#aaa;">© 2025 SportStore</p>
            </td>
        </tr>

    </table>

</body>

</html><?php /**PATH D:\HUIT\HK7\PHP\DoAn\website-sports-store-main\resources\views/emails/contact.blade.php ENDPATH**/ ?>