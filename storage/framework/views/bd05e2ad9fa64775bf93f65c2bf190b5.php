<?php if(isset($provinces)): ?>
<!-- Alpine.js Data - Di chuyển lên đầu để bao toàn bộ component -->
<div x-data="{
    showAddModal: false,
    showEditModal: false,
    showDeleteModal: false,
    editingAddress: null,
    deletingAddressId: null,
    provinces: <?php echo \Illuminate\Support\Js::from($provinces)->toHtml() ?>,
    districts: [],
    selectedProvinceId: null,
    
    async loadDistricts(provinceId) {
        if (!provinceId) {
            this.districts = [];
            return;
        }
        try {
            const response = await fetch(`/profile/addresses/districts/${provinceId}`);
            const data = await response.json();
            if (data.success) {
                this.districts = data.districts;
            }
        } catch (error) {
            console.error('Error loading districts:', error);
        }
    },
    
    async editAddress(addressId) {
        try {
            const response = await fetch(`/profile/addresses/${addressId}`);
            const data = await response.json();
            if (data.success) {
                this.editingAddress = data.address;
                await this.loadDistricts(data.address.province_id);
                this.showEditModal = true;
            }
        } catch (error) {
            console.error('Error loading address:', error);
        }
    },
    
    confirmDelete(addressId) {
        this.deletingAddressId = addressId;
        this.showDeleteModal = true;
    },
    
    closeAddModal() {
        this.showAddModal = false;
        this.districts = [];
        this.selectedProvinceId = null;
    },
    
    closeEditModal() {
        this.showEditModal = false;
        this.editingAddress = null;
        this.districts = [];
    }
}">
    <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
        <!-- Header -->
        <div class="flex items-center justify-between mb-6">
            <div>
                <h1 class="text-2xl font-bold text-gray-900">Sổ địa chỉ</h1>
                <p class="text-gray-600 text-sm mt-1">Quản lý địa chỉ giao hàng của bạn</p>
            </div>
            <button @click="showAddModal = true"
                class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg transition-colors duration-200 flex items-center gap-2">
                <i class="fas fa-plus"></i>
                <span>Thêm địa chỉ mới</span>
            </button>
        </div>

        <!-- Danh sách địa chỉ -->
        <?php if($addresses->isEmpty()): ?>
        <div class="text-center py-12">
            <i class="fas fa-map-marker-alt text-gray-300 text-6xl mb-4"></i>
            <p class="text-gray-500 text-lg mb-2">Chưa có địa chỉ nào</p>
            <p class="text-gray-400 text-sm mb-6">Thêm địa chỉ để thuận tiện cho việc đặt hàng</p>
            <button @click="showAddModal = true"
                class="bg-red-600 hover:bg-red-700 text-white px-6 py-2 rounded-lg transition-colors duration-200">
                Thêm địa chỉ đầu tiên
            </button>
        </div>
        <?php else: ?>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <?php $__currentLoopData = $addresses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $address): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="border border-gray-200 rounded-lg p-4 hover:border-red-300 transition-colors duration-200 relative">
                <!-- Badge mặc định -->
                <?php if($address->is_default): ?>
                <span class="absolute top-4 right-4 bg-red-100 text-red-600 text-xs font-semibold px-3 py-1 rounded-full">
                    Mặc định
                </span>
                <?php endif; ?>

                <!-- Thông tin -->
                <div class="mb-4 <?php echo e($address->is_default ? 'pr-24' : ''); ?>">
                    <h3 class="font-semibold text-gray-900 text-lg mb-1"><?php echo e($address->full_name); ?></h3>
                    <p class="text-gray-600 text-sm mb-2">
                        <i class="fas fa-phone w-4 text-gray-400"></i>
                        <?php echo e($address->phone); ?>

                    </p>
                    <p class="text-gray-700 text-sm leading-relaxed">
                        <i class="fas fa-map-marker-alt w-4 text-gray-400"></i>
                        <?php echo e($address->address); ?>, <?php echo e($address->district->name); ?>, <?php echo e($address->province->name); ?>

                        <?php if($address->postal_code): ?>
                        <span class="text-gray-500">(<?php echo e($address->postal_code); ?>)</span>
                        <?php endif; ?>
                    </p>
                </div>

                <!-- Actions -->
                <div class="flex items-center gap-2 pt-3 border-t border-gray-100">
                    <?php if(!$address->is_default): ?>
                    <form action="<?php echo e(route('profile.addresses.set-default', $address->id)); ?>" method="POST" class="inline">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <button type="submit"
                            class="text-sm text-blue-600 hover:text-blue-700 hover:underline">
                            Đặt làm mặc định
                        </button>
                    </form>
                    <span class="text-gray-300">|</span>
                    <?php endif; ?>

                    <button @click="editAddress(<?php echo e($address->id); ?>)"
                        class="text-sm text-gray-600 hover:text-gray-800 hover:underline">
                        Chỉnh sửa
                    </button>

                    <span class="text-gray-300">|</span>

                    <button @click="confirmDelete(<?php echo e($address->id); ?>)"
                        class="text-sm text-red-600 hover:text-red-700 hover:underline">
                        Xóa
                    </button>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <?php endif; ?>

        <!-- Modal Thêm địa chỉ -->
        <div x-show="showAddModal"
            x-cloak
            @click.self="closeAddModal()"
            class="fixed inset-0 z-50 overflow-y-auto backdrop-blur-sm bg-black/20 flex items-center justify-center p-4">
            <div x-show="showAddModal"
                x-transition:enter="ease-out duration-300"
                x-transition:enter-start="opacity-0 scale-95"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="ease-in duration-200"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-95"
                @click.stop
                class="bg-white rounded-lg shadow-xl w-full max-w-2xl max-h-[90vh] flex flex-col">

                <form action="<?php echo e(route('profile.addresses.store')); ?>" method="POST" class="flex flex-col h-full">
                    <?php echo csrf_field(); ?>
                    <!-- Header -->
                    <div class="px-6 py-4 border-b border-gray-200 flex-shrink-0">
                        <div class="flex items-center justify-between">
                            <h3 class="text-xl font-semibold text-gray-900">Thêm địa chỉ mới</h3>
                            <button type="button" @click="closeAddModal()" class="text-gray-400 hover:text-gray-600">
                                <i class="fas fa-times text-xl"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Body -->
                    <div class="px-6 py-4 overflow-y-auto flex-1">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <!-- Họ và tên -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Họ và tên <span class="text-red-500">*</span>
                                </label>
                                <input type="text" name="full_name" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent">
                            </div>

                            <!-- Số điện thoại -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Số điện thoại <span class="text-red-500">*</span>
                                </label>
                                <input type="text" name="phone" required placeholder="0912345678"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent">
                            </div>

                            <!-- Tỉnh/Thành phố -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Tỉnh/Thành phố <span class="text-red-500">*</span>
                                </label>
                                <select name="province_id" required
                                    @change="loadDistricts($event.target.value)"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent">
                                    <option value="">-- Chọn tỉnh/thành phố --</option>
                                    <template x-for="province in provinces" :key="province.id">
                                        <option :value="province.id" x-text="province.name"></option>
                                    </template>
                                </select>
                            </div>

                            <!-- Quận/Huyện -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Quận/Huyện <span class="text-red-500">*</span>
                                </label>
                                <select name="district_id" required
                                    :disabled="districts.length === 0"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent disabled:bg-gray-100">
                                    <option value="">-- Chọn quận/huyện --</option>
                                    <template x-for="district in districts" :key="district.id">
                                        <option :value="district.id" x-text="district.name"></option>
                                    </template>
                                </select>
                            </div>

                            <!-- Địa chỉ cụ thể -->
                            <div class="md:col-span-2">
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Địa chỉ cụ thể <span class="text-red-500">*</span>
                                </label>
                                <input type="text" name="address" required placeholder="Số nhà, tên đường..."
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent">
                            </div>

                            <!-- Mã bưu điện -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Mã bưu điện
                                </label>
                                <input type="text" name="postal_code" placeholder="700000"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent">
                            </div>

                            <!-- Đặt làm mặc định -->
                            <div class="md:col-span-2">
                                <label class="flex items-center cursor-pointer">
                                    <input type="checkbox" name="is_default" value="1"
                                        class="w-4 h-4 text-red-600 border-gray-300 rounded focus:ring-red-500">
                                    <span class="ml-2 text-sm text-gray-700">Đặt làm địa chỉ mặc định</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Footer -->
                    <div class="px-6 py-4 border-t border-gray-200 flex justify-end gap-3 flex-shrink-0">
                        <button type="button" @click="closeAddModal()"
                            class="px-4 py-2 text-gray-700 bg-gray-100 hover:bg-gray-200 rounded-lg transition-colors duration-200">
                            Hủy
                        </button>
                        <button type="submit"
                            class="px-6 py-2 bg-red-600 hover:bg-red-700 text-white rounded-lg transition-colors duration-200">
                            Thêm địa chỉ
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Modal Chỉnh sửa địa chỉ -->
        <div x-show="showEditModal"
            x-cloak
            @click.self="closeEditModal()"
            class="fixed inset-0 z-50 overflow-y-auto backdrop-blur-sm bg-black/20 flex items-center justify-center p-4">
            <div x-show="showEditModal"
                x-transition:enter="ease-out duration-300"
                x-transition:enter-start="opacity-0 scale-95"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="ease-in duration-200"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-95"
                @click.stop
                class="bg-white rounded-lg shadow-xl w-full max-w-2xl max-h-[90vh] flex flex-col">

                <form :action="`/profile/addresses/${editingAddress?.id}`" method="POST" class="flex flex-col h-full">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <!-- Header -->
                    <div class="px-6 py-4 border-b border-gray-200 flex-shrink-0">
                        <div class="flex items-center justify-between">
                            <h3 class="text-xl font-semibold text-gray-900">Chỉnh sửa địa chỉ</h3>
                            <button type="button" @click="closeEditModal()" class="text-gray-400 hover:text-gray-600">
                                <i class="fas fa-times text-xl"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Body -->
                    <div class="px-6 py-4 overflow-y-auto flex-1">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <!-- Họ và tên -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Họ và tên <span class="text-red-500">*</span>
                                </label>
                                <input type="text" name="full_name" required
                                    :value="editingAddress?.full_name"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent">
                            </div>

                            <!-- Số điện thoại -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Số điện thoại <span class="text-red-500">*</span>
                                </label>
                                <input type="text" name="phone" required
                                    :value="editingAddress?.phone"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent">
                            </div>

                            <!-- Tỉnh/Thành phố -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Tỉnh/Thành phố <span class="text-red-500">*</span>
                                </label>
                                <select name="province_id" required
                                    @change="loadDistricts($event.target.value)"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent">
                                    <option value="">-- Chọn tỉnh/thành phố --</option>
                                    <template x-for="province in provinces" :key="province.id">
                                        <option :value="province.id"
                                            :selected="province.id === editingAddress?.province_id"
                                            x-text="province.name"></option>
                                    </template>
                                </select>
                            </div>

                            <!-- Quận/Huyện -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Quận/Huyện <span class="text-red-500">*</span>
                                </label>
                                <select name="district_id" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent">
                                    <option value="">-- Chọn quận/huyện --</option>
                                    <template x-for="district in districts" :key="district.id">
                                        <option :value="district.id"
                                            :selected="district.id === editingAddress?.district_id"
                                            x-text="district.name"></option>
                                    </template>
                                </select>
                            </div>

                            <!-- Địa chỉ cụ thể -->
                            <div class="md:col-span-2">
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Địa chỉ cụ thể <span class="text-red-500">*</span>
                                </label>
                                <input type="text" name="address" required
                                    :value="editingAddress?.address"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent">
                            </div>

                            <!-- Mã bưu điện -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Mã bưu điện
                                </label>
                                <input type="text" name="postal_code"
                                    :value="editingAddress?.postal_code"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent">
                            </div>

                            <!-- Đặt làm mặc định -->
                            <div class="md:col-span-2">
                                <label class="flex items-center cursor-pointer">
                                    <input type="checkbox" name="is_default" value="1"
                                        :checked="editingAddress?.is_default"
                                        class="w-4 h-4 text-red-600 border-gray-300 rounded focus:ring-red-500">
                                    <span class="ml-2 text-sm text-gray-700">Đặt làm địa chỉ mặc định</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Footer -->
                    <div class="px-6 py-4 border-t border-gray-200 flex justify-end gap-3 flex-shrink-0">
                        <button type="button" @click="closeEditModal()"
                            class="px-4 py-2 text-gray-700 bg-gray-100 hover:bg-gray-200 rounded-lg transition-colors duration-200">
                            Hủy
                        </button>
                        <button type="submit"
                            class="px-6 py-2 bg-red-600 hover:bg-red-700 text-white rounded-lg transition-colors duration-200">
                            Cập nhật
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Modal Xác nhận xóa -->
        <div x-show="showDeleteModal"
            x-cloak
            @click.self="showDeleteModal = false"
            class="fixed inset-0 z-50 overflow-y-auto backdrop-blur-sm bg-black/20 flex items-center justify-center p-4">
            <div x-show="showDeleteModal"
                x-transition:enter="ease-out duration-300"
                x-transition:enter-start="opacity-0 scale-95"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="ease-in duration-200"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-95"
                @click.stop
                class="bg-white rounded-lg shadow-xl w-full max-w-md">

                <div class="px-6 py-4">
                    <div class="flex items-center mb-4">
                        <div class="flex-shrink-0 w-12 h-12 bg-red-100 rounded-full flex items-center justify-center">
                            <i class="fas fa-exclamation-triangle text-red-600 text-xl"></i>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-gray-900">Xác nhận xóa</h3>
                            <p class="text-sm text-gray-600 mt-1">Bạn có chắc chắn muốn xóa địa chỉ này?</p>
                        </div>
                    </div>
                </div>

                <div class="px-6 py-4 bg-gray-50 flex justify-end gap-3 rounded-b-lg">
                    <button type="button" @click="showDeleteModal = false"
                        class="px-4 py-2 text-gray-700 bg-white border border-gray-300 hover:bg-gray-50 rounded-lg transition-colors duration-200">
                        Hủy
                    </button>
                    <form :action="`/profile/addresses/${deletingAddressId}`" method="POST" class="inline">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit"
                            class="px-4 py-2 bg-red-600 hover:bg-red-700 text-white rounded-lg transition-colors duration-200">
                            Xóa
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    [x-cloak] {
        display: none !important;
    }
</style>


<!-- Đảm bảo Alpine.js được load -->
<?php if(!isset($alpineLoaded)): ?>
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
<?php endif; ?>
<?php endif; ?><?php /**PATH D:\HUIT\HK7\PHP\DoAn\website-sports-store-main\resources\views/client/profile/sections/addresses.blade.php ENDPATH**/ ?>