const r={baseUrl:"/orders",csrfToken:document.querySelector('meta[name="csrf-token"]')?.content};async function c(e){if((await Swal.fire({title:"Xác nhận hủy đơn",html:`
            <div class="text-left">
                <p class="text-gray-700 mb-3">Bạn có chắc chắn muốn hủy đơn hàng này?</p>
                <div class="bg-yellow-50 border-l-4 border-yellow-400 p-3 rounded">
                    <p class="text-sm text-yellow-800">
                        <i class="fas fa-info-circle mr-2"></i>
                        Sản phẩm sẽ được hoàn trả vào kho sau khi hủy.
                    </p>
                </div>
            </div>
        `,icon:"warning",showCancelButton:!0,confirmButtonColor:"#dc2626",cancelButtonColor:"#6b7280",confirmButtonText:'<i class="fas fa-times-circle mr-2"></i>Hủy đơn',cancelButtonText:'<i class="fas fa-arrow-left mr-2"></i>Quay lại',reverseButtons:!0,customClass:{popup:"rounded-xl",confirmButton:"px-6 py-3 rounded-lg font-medium",cancelButton:"px-6 py-3 rounded-lg font-medium"}})).isConfirmed){Swal.fire({title:"Đang xử lý...",html:'<div class="flex justify-center"><div class="animate-spin rounded-full h-12 w-12 border-4 border-red-600 border-t-transparent"></div></div>',showConfirmButton:!1,allowOutsideClick:!1,allowEscapeKey:!1});try{const n=await(await fetch(`${r.baseUrl}/${e}/cancel`,{method:"POST",headers:{"Content-Type":"application/json","X-CSRF-TOKEN":r.csrfToken}})).json();n.success?(x(e,n.order),l("Hủy đơn hàng thành công!")):s(n.message)}catch(t){console.error("Cancel order error:",t),s("Có lỗi xảy ra. Vui lòng thử lại!")}}}async function d(e){if((await Swal.fire({title:"Mua lại đơn hàng",text:"Bạn muốn mua lại các sản phẩm trong đơn hàng này?",icon:"question",showCancelButton:!0,confirmButtonColor:"#dc2626",cancelButtonColor:"#6b7280",confirmButtonText:'<i class="fas fa-shopping-cart mr-2"></i>Mua lại',cancelButtonText:'<i class="fas fa-times mr-2"></i>Hủy',customClass:{popup:"rounded-xl",confirmButton:"px-6 py-3 rounded-lg font-medium",cancelButton:"px-6 py-3 rounded-lg font-medium"}})).isConfirmed){Swal.fire({title:"Đang xử lý...",html:'<div class="flex justify-center"><div class="animate-spin rounded-full h-12 w-12 border-4 border-red-600 border-t-transparent"></div></div>',showConfirmButton:!1,allowOutsideClick:!1});try{const n=await(await fetch(`${r.baseUrl}/${e}/reorder`,{method:"POST",headers:{"Content-Type":"application/json","X-CSRF-TOKEN":r.csrfToken}})).json();n.success?(await Swal.fire({icon:"success",title:"Thành công!",text:n.message,confirmButtonColor:"#dc2626",confirmButtonText:'<i class="fas fa-shopping-cart mr-2"></i>Xem giỏ hàng',showCancelButton:!0,cancelButtonText:"Đóng",customClass:{popup:"rounded-xl",confirmButton:"px-6 py-3 rounded-lg font-medium",cancelButton:"px-6 py-3 rounded-lg font-medium"}})).isConfirmed&&(window.location.href="/cart"):s(n.message)}catch(t){console.error("Reorder error:",t),s("Có lỗi xảy ra. Vui lòng thử lại!")}}}async function u(e){const o=document.getElementById("orderDetailModal"),t=document.getElementById("orderDetailContent");if(!o||!t){console.error("Modal elements not found");return}o.style.display="flex",t.innerHTML='<div class="flex justify-center py-12"><div class="animate-spin rounded-full h-12 w-12 border-4 border-red-600 border-t-transparent"></div></div>';try{const n=await fetch(`${r.baseUrl}/${e}`,{headers:{"X-Requested-With":"XMLHttpRequest"}});if(n.ok){const i=await n.text();t.innerHTML=i}else throw new Error("Failed to load order details")}catch(n){console.error("Load order detail error:",n),t.innerHTML=`
            <div class="text-center py-12 text-red-600">
                <i class="fas fa-exclamation-circle text-4xl mb-4"></i>
                <p>Không thể tải chi tiết đơn hàng</p>
            </div>
        `}}function a(){const e=document.getElementById("orderDetailModal");e&&(e.style.display="none")}function f(e){window.location.href=`${r.baseUrl}/${e}/review`}function m(e){Swal.fire({title:"Theo dõi đơn hàng",html:`
            <div class="text-left space-y-4">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-check text-green-600 text-xl"></i>
                    </div>
                    <div>
                        <p class="font-semibold text-gray-900">Đơn hàng đã được xác nhận</p>
                        <p class="text-sm text-gray-600">Đã xác nhận và đang chuẩn bị</p>
                    </div>
                </div>
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-check text-green-600 text-xl"></i>
                    </div>
                    <div>
                        <p class="font-semibold text-gray-900">Đã đóng gói</p>
                        <p class="text-sm text-gray-600">Sản phẩm đã được đóng gói</p>
                    </div>
                </div>
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center animate-pulse">
                        <i class="fas fa-truck text-blue-600 text-xl"></i>
                    </div>
                    <div>
                        <p class="font-semibold text-gray-900">Đang giao hàng</p>
                        <p class="text-sm text-gray-600">Shipper đang trên đường giao</p>
                    </div>
                </div>
                <div class="flex items-center gap-4 opacity-50">
                    <div class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-box-open text-gray-400 text-xl"></i>
                    </div>
                    <div>
                        <p class="font-semibold text-gray-900">Đã giao hàng</p>
                        <p class="text-sm text-gray-600">Chờ giao hàng thành công</p>
                    </div>
                </div>
            </div>
        `,icon:"info",confirmButtonColor:"#dc2626",confirmButtonText:'<i class="fas fa-check mr-2"></i>Đóng',customClass:{popup:"rounded-xl",confirmButton:"px-6 py-3 rounded-lg font-medium"},width:"600px"})}function p(e){Swal.fire({title:"Liên hệ hỗ trợ",html:`
            <div class="text-left">
                <p class="text-gray-700 mb-4">Bạn cần hỗ trợ gì về đơn hàng này?</p>
                <div class="space-y-3">
                    <a href="tel:1900xxxx" class="block p-3 bg-blue-50 rounded-lg border border-blue-200 hover:bg-blue-100 cursor-pointer transition">
                        <div class="flex items-center gap-3">
                            <i class="fas fa-phone text-blue-600 text-xl"></i>
                            <div>
                                <p class="font-semibold text-gray-900">Gọi hotline</p>
                                <p class="text-sm text-gray-600">1900 xxxx</p>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="block p-3 bg-green-50 rounded-lg border border-green-200 hover:bg-green-100 cursor-pointer transition">
                        <div class="flex items-center gap-3">
                            <i class="fab fa-facebook-messenger text-green-600 text-xl"></i>
                            <div>
                                <p class="font-semibold text-gray-900">Chat với chúng tôi</p>
                                <p class="text-sm text-gray-600">Phản hồi trong vài phút</p>
                            </div>
                        </div>
                    </a>
                    <a href="mailto:support@example.com" class="block p-3 bg-orange-50 rounded-lg border border-orange-200 hover:bg-orange-100 cursor-pointer transition">
                        <div class="flex items-center gap-3">
                            <i class="fas fa-envelope text-orange-600 text-xl"></i>
                            <div>
                                <p class="font-semibold text-gray-900">Gửi email</p>
                                <p class="text-sm text-gray-600">support@example.com</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        `,showConfirmButton:!1,showCloseButton:!0,customClass:{popup:"rounded-xl"},width:"500px"})}async function g(e){if((await Swal.fire({title:"Xác nhận đã nhận hàng",text:"Bạn đã nhận được hàng và hài lòng với sản phẩm?",icon:"question",showCancelButton:!0,confirmButtonColor:"#10b981",cancelButtonColor:"#6b7280",confirmButtonText:'<i class="fas fa-check mr-2"></i>Đã nhận hàng',cancelButtonText:"Hủy",customClass:{popup:"rounded-xl",confirmButton:"px-6 py-3 rounded-lg font-medium",cancelButton:"px-6 py-3 rounded-lg font-medium"}})).isConfirmed)try{const n=await(await fetch(`${r.baseUrl}/${e}/confirm-received`,{method:"POST",headers:{"Content-Type":"application/json","X-CSRF-TOKEN":r.csrfToken}})).json();n.success?(l("Xác nhận đã nhận hàng thành công!"),setTimeout(()=>location.reload(),1500)):s(n.message)}catch(t){console.error("Confirm received error:",t),s("Có lỗi xảy ra. Vui lòng thử lại!")}}function x(e,o){const t=document.getElementById(`order-${e}`);if(!t)return;const n=t.querySelector(".order-status"),i=t.querySelector(".order-actions");n&&o.status&&(n.className="order-status px-4 py-2 rounded-full text-sm font-semibold bg-red-100 text-red-800 flex items-center gap-2",n.innerHTML=`
            <i class="fas fa-times-circle"></i>
            <span class="status-name">${o.status.name}</span>
        `),i&&(i.innerHTML=`
            <button onclick="viewOrderDetail(${e})" 
                   class="flex-1 sm:flex-none px-6 py-3 border-2 border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 hover:border-gray-400 transition-all duration-200 font-medium shadow-sm hover:shadow">
                <i class="fas fa-eye mr-2"></i>Chi tiết
            </button>
            <button onclick="reorder(${e})" 
                    class="flex-1 sm:flex-none px-6 py-3 border-2 border-red-600 text-red-600 rounded-lg hover:bg-red-50 transition-all duration-200 font-medium shadow-sm hover:shadow">
                <i class="fas fa-redo mr-2"></i>Mua lại
            </button>
        `),t.classList.add("animate-pulse"),setTimeout(()=>{t.classList.remove("animate-pulse")},1e3)}function l(e){Swal.fire({icon:"success",title:"Thành công!",text:e,confirmButtonColor:"#dc2626",confirmButtonText:'<i class="fas fa-check mr-2"></i>Đóng',customClass:{popup:"rounded-xl",confirmButton:"px-6 py-3 rounded-lg font-medium"}})}function s(e){Swal.fire({icon:"error",title:"Lỗi!",text:e||"Có lỗi xảy ra. Vui lòng thử lại!",confirmButtonColor:"#dc2626",confirmButtonText:'<i class="fas fa-times mr-2"></i>Đóng',customClass:{popup:"rounded-xl",confirmButton:"px-6 py-3 rounded-lg font-medium"}})}document.addEventListener("DOMContentLoaded",function(){const e=document.getElementById("orderDetailModal");e&&e.addEventListener("click",function(o){o.target===this&&a()}),document.addEventListener("keydown",function(o){o.key==="Escape"&&a()})});window.cancelOrder=c;window.contactSupport=p;window.reorder=d;window.reviewOrder=f;window.trackOrder=m;window.confirmReceived=g;window.closeOrderDetail=a;window.openOrderDetail=u;
