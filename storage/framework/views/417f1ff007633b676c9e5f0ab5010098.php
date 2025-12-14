<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hóa Đơn #<?php echo e($order->order_no); ?></title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'DejaVu Sans', Arial, sans-serif;
            font-size: 13px;
            line-height: 1.6;
            color: #333;
            padding: 20px;
        }

        .invoice-container {
            max-width: 900px;
            margin: 0 auto;
            background: white;
        }

        /* Header */
        .invoice-header {
            display: table;
            width: 100%;
            margin-bottom: 30px;
            border-bottom: 3px solid #dc2626;
            padding-bottom: 20px;
        }

        .company-info {
            display: table-cell;
            width: 50%;
            vertical-align: top;
        }

        .company-logo {
            font-size: 32px;
            font-weight: bold;
            color: #dc2626;
            margin-bottom: 5px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .company-logo::before {
            content: "";
            font-size: 36px;
        }

        .company-details {
            font-size: 12px;
            color: #666;
            line-height: 2;
        }

        .company-details div {
            margin-bottom: 3px;
        }

        .detail-icon {
            display: inline-block;
            width: 16px;
            margin-right: 8px;
        }

        .invoice-info {
            display: table-cell;
            width: 50%;
            vertical-align: top;
            text-align: right;
        }

        .invoice-title {
            font-size: 32px;
            font-weight: bold;
            color: #dc2626;
            margin-bottom: 10px;
        }

        .invoice-meta {
            font-size: 12px;
            color: #666;
        }

        /* Customer Info */
        .customer-section {
            display: table;
            width: 100%;
            margin-bottom: 30px;
        }

        .bill-to,
        .ship-to {
            display: table-cell;
            width: 50%;
            vertical-align: top;
            padding: 15px;
            background: #f9fafb;
            border-radius: 8px;
        }

        .bill-to {
            margin-right: 10px;
        }

        .section-title {
            font-size: 14px;
            font-weight: bold;
            color: #dc2626;
            margin-bottom: 10px;
            text-transform: uppercase;
        }

        .customer-details {
            font-size: 12px;
            line-height: 1.8;
        }

        .customer-name {
            font-weight: bold;
            font-size: 14px;
            color: #111;
            margin-bottom: 5px;
        }

        /* Order Items Table */
        .items-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }

        .items-table thead {
            background: #dc2626;
            color: white;
        }

        .items-table th {
            padding: 12px;
            text-align: left;
            font-weight: bold;
            font-size: 13px;
            text-transform: uppercase;
        }

        .items-table th:last-child,
        .items-table td:last-child {
            text-align: right;
        }

        .items-table tbody tr {
            border-bottom: 1px solid #e5e7eb;
        }

        .items-table tbody tr:last-child {
            border-bottom: 2px solid #dc2626;
        }

        .items-table td {
            padding: 12px;
            font-size: 12px;
            vertical-align: top;
        }

        /* Product Image */
        .product-image-wrapper {
            width: 60px;
            height: 60px;
            border-radius: 6px;
            overflow: hidden;
            border: 2px solid #e5e7eb;
            background: #f9fafb;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .product-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .no-image {
            color: #9ca3af;
            font-size: 24px;
        }

        .product-info-cell {
            display: flex;
            gap: 12px;
            align-items: flex-start;
        }

        .product-details {
            flex: 1;
        }

        .product-name {
            font-weight: 600;
            color: #111;
            margin-bottom: 6px;
            font-size: 13px;
        }

        .product-variant {
            font-size: 11px;
            color: #666;
            line-height: 1.6;
        }

        .text-right {
            text-align: right;
        }

        .text-center {
            text-align: center;
        }

        /* Summary */
        .summary-section {
            display: table;
            width: 100%;
            margin-bottom: 30px;
        }

        .summary-left {
            display: table-cell;
            width: 60%;
            vertical-align: top;
        }

        .summary-right {
            display: table-cell;
            width: 40%;
            vertical-align: top;
            padding-left: 20px;
        }

        .summary-table {
            width: 100%;
            font-size: 13px;
        }

        .summary-table tr {
            height: 35px;
        }

        .summary-table td {
            padding: 8px 0;
        }

        .summary-table td:last-child {
            text-align: right;
            font-weight: 600;
        }

        .summary-table .total-row {
            border-top: 2px solid #dc2626;
            font-size: 16px;
            font-weight: bold;
            color: #dc2626;
        }

        .summary-table .total-row td {
            padding-top: 15px;
        }

        /* Payment Info */
        .payment-info {
            background: #fef2f2;
            border: 1px solid #fecaca;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 20px;
        }

        .payment-info-title {
            font-weight: bold;
            color: #dc2626;
            margin-bottom: 8px;
            font-size: 14px;
        }

        .payment-method,
        .payment-status {
            font-size: 12px;
            margin-bottom: 5px;
        }

        .status-badge {
            display: inline-block;
            padding: 4px 12px;
            border-radius: 12px;
            font-size: 11px;
            font-weight: bold;
        }

        .status-paid {
            background: #d1fae5;
            color: #065f46;
        }

        .status-pending {
            background: #fef3c7;
            color: #92400e;
        }

        /* Notes */
        .notes-section {
            background: #fffbeb;
            border-left: 4px solid #f59e0b;
            padding: 15px;
            margin-bottom: 30px;
            font-size: 12px;
            color: #92400e;
        }

        .notes-title {
            font-weight: bold;
            margin-bottom: 8px;
        }

        /* Footer */
        .invoice-footer {
            text-align: center;
            padding-top: 20px;
            border-top: 2px solid #e5e7eb;
            font-size: 11px;
            color: #666;
        }

        .thank-you {
            font-size: 18px;
            font-weight: bold;
            color: #dc2626;
            margin-bottom: 10px;
        }

        /* Print Styles */
        @media print {
            body {
                padding: 0;
            }

            .invoice-container {
                max-width: 100%;
            }

            @page {
                margin: 15mm;
                size: A4;
            }

            .product-image-wrapper {
                print-color-adjust: exact;
                -webkit-print-color-adjust: exact;
            }
        }

        /* Status Badge Colors */
        .order-status {
            display: inline-block;
            padding: 6px 12px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: bold;
            margin-top: 5px;
        }

        .status-1 {
            background: #fef3c7;
            color: #92400e;
        }

        .status-2 {
            background: #dbeafe;
            color: #1e40af;
        }

        .status-3 {
            background: #e9d5ff;
            color: #6b21a8;
        }

        .status-4 {
            background: #d1fae5;
            color: #065f46;
        }

        .status-5 {
            background: #fee2e2;
            color: #991b1b;
        }
    </style>
</head>

<body>
    <div class="invoice-container">
        <!-- Header -->
        <div class="invoice-header">
            <div class="company-info">
                <div class="company-logo">SportStore</div>
                <div class="company-details">
                    <div><span class="detail-icon">📍</span>123 Đường ABC, Quận 1, TP.HCM</div>
                    <div><span class="detail-icon">📞</span>0123 456 789</div>
                    <div><span class="detail-icon">📧</span>dinhthithaoly12345@sportstore.com</div>
                    <div><span class="detail-icon">⏰</span>8:00 - 22:00 (T2-CN)</div>
                </div>
            </div>
            <div class="invoice-info">
                <div class="invoice-title">HÓA ĐƠN</div>
                <div class="invoice-meta">
                    <strong>Mã đơn hàng:</strong> #<?php echo e($order->order_no); ?><br>
                    <strong>Ngày đặt:</strong> <?php echo e($order->created_at->format('d/m/Y H:i')); ?><br>
                    <?php if($order->status): ?>
                    <span class="order-status status-<?php echo e($order->status_id); ?>">
                        <?php echo e($order->status->name); ?>

                    </span>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <!-- Customer Information -->
        <div class="customer-section">
            <div class="bill-to">
                <div class="section-title">Thông Tin Khách Hàng</div>
                <div class="customer-details">
                    <div class="customer-name"><?php echo e($order->user->name); ?></div>
                    <div>Email: <?php echo e($order->user->email); ?></div>
                    <div>Điện thoại: <?php echo e($order->user->phone ?? 'N/A'); ?></div>
                </div>
            </div>

            <?php if($order->address): ?>
            <div class="ship-to">
                <div class="section-title">Địa Chỉ Giao Hàng</div>
                <div class="customer-details">
                    <div class="customer-name">
                        <?php echo e($order->address->full_name ?? $order->address->recipient_name ?? ''); ?>

                    </div>
                    <div><?php echo e($order->address->phone ?? ''); ?></div>
                    <div>
                        <?php echo e($order->address->address ?? $order->address->address_line ?? ''); ?><br>
                        <?php echo e($order->address->district->name ?? ''); ?>,
                        <?php echo e($order->address->province->name ?? ''); ?>

                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>

        <!-- Order Items -->
        <table class="items-table">
            <thead>
                <tr>
                    <th width="5%">STT</th>
                    <th width="50%">Sản Phẩm</th>
                    <th width="12%" class="text-center">Số Lượng</th>
                    <th width="15%" class="text-right">Đơn Giá</th>
                    <th width="18%" class="text-right">Thành Tiền</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $order->orderItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td class="text-center"><?php echo e($index + 1); ?></td>
                    <td>
                        <div class="product-info-cell">
                            <div class="product-image-wrapper">
                                <?php if($item->productVariant && $item->productVariant->product && $item->productVariant->product->images->first()): ?>
                                <img src="<?php echo e(asset('images/products/' . $item->productVariant->product->images->first()->url)); ?>"
                                    alt="<?php echo e($item->product_name); ?>"
                                    class="product-image">
                                <?php else: ?>
                                <span class="no-image">📦</span>
                                <?php endif; ?>
                            </div>
                            <div class="product-details">
                                <div class="product-name"><?php echo e($item->product_name); ?></div>
                                <?php if($item->productVariant): ?>
                                <div class="product-variant">
                                    SKU: <?php echo e($item->productVariant->sku); ?>

                                    <?php if($item->productVariant->color): ?>
                                    | Màu: <?php echo e($item->productVariant->color); ?>

                                    <?php endif; ?>
                                    <?php if($item->productVariant->size): ?>
                                    | Size: <?php echo e($item->productVariant->size); ?>

                                    <?php endif; ?>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </td>
                    <td class="text-center"><?php echo e($item->quantity); ?></td>
                    <td class="text-right"><?php echo e(number_format($item->price, 0, ',', '.')); ?>đ</td>
                    <td class="text-right"><?php echo e(number_format($item->price * $item->quantity, 0, ',', '.')); ?>đ</td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

        <!-- Summary -->
        <div class="summary-section">
            <div class="summary-left">
                <?php if($order->payment): ?>
                <div class="payment-info">
                    <div class="payment-info-title">Thông Tin Thanh Toán</div>
                    <div class="payment-method">
                        <strong>Phương thức:</strong>
                        <?php if($order->payment->payment_method == 'cod'): ?>
                        Thanh toán khi nhận hàng (COD)
                        <?php elseif($order->payment->payment_method == 'bank_transfer'): ?>
                        Chuyển khoản ngân hàng
                        <?php elseif($order->payment->payment_method == 'vnpay'): ?>
                        VNPay
                        <?php else: ?>
                        Khác
                        <?php endif; ?>
                    </div>
                    <div class="payment-status">
                        <strong>Trạng thái:</strong>
                        <span class="status-badge <?php echo e($order->payment->payment_status == 'paid' ? 'status-paid' : 'status-pending'); ?>">
                            <?php echo e($order->payment->payment_status == 'paid' ? 'Đã thanh toán' : 'Chưa thanh toán'); ?>

                        </span>
                    </div>
                </div>
                <?php endif; ?>

                <?php if($order->note): ?>
                <div class="notes-section">
                    <div class="notes-title">Ghi Chú:</div>
                    <div><?php echo e($order->note); ?></div>
                </div>
                <?php endif; ?>
            </div>

            <div class="summary-right">
                <table class="summary-table">
                    <tr>
                        <td>Tạm tính:</td>
                        <td><?php echo e(number_format($order->orderItems->sum(function($item) { return $item->price * $item->quantity; }), 0, ',', '.')); ?>đ</td>
                    </tr>
                    <tr>
                        <td>Phí vận chuyển:</td>
                        <td><?php echo e(number_format($order->shipping_fee ?? 0, 0, ',', '.')); ?>đ</td>
                    </tr>
                    <?php if($order->discount_amount > 0): ?>
                    <tr style="color: #16a34a;">
                        <td>Giảm giá:</td>
                        <td>-<?php echo e(number_format($order->discount_amount, 0, ',', '.')); ?>đ</td>
                    </tr>
                    <?php endif; ?>
                    <tr class="total-row">
                        <td>TỔNG CỘNG:</td>
                        <td><?php echo e(number_format($order->total_amount, 0, ',', '.')); ?>đ</td>
                    </tr>
                </table>
            </div>
        </div>

        <!-- Footer -->
        <div class="invoice-footer">
            <div class="thank-you">Cảm ơn quý khách đã mua hàng!</div>
            <p>Đây là hóa đơn điện tử, vui lòng liên hệ với chúng tôi nếu có bất kỳ thắc mắc nào.</p>
            <p style="margin-top: 10px;">
                <strong>📞 Hotline:</strong> 0123 456 789 |
                <strong>📧 Email:</strong> support@sportstore.com |
                <strong>🌐 Website:</strong> www.sportstore.com
            </p>
            <p style="margin-top: 8px; font-style: italic; color: #999;">
                ⏰ Giờ làm việc: 8:00 - 22:00 (Thứ 2 - Chủ Nhật)
            </p>
        </div>
    </div>

    <script>
        // Auto print when page loads
        window.onload = function() {
            window.print();
        }
    </script>
</body>

</html><?php /**PATH D:\HUIT\HK7\PHP\DoAn\website-sports-store-main\resources\views/client/orders/invoice.blade.php ENDPATH**/ ?>