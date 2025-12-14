document.addEventListener("DOMContentLoaded",function(){const l=document.querySelector('meta[name="csrf-token"]').content;function h(c){return c.toLocaleString("vi-VN")+"đ"}function f(c,n){const e=document.querySelector(`.decrease-qty[data-item-id="${c}"]`);e&&(n<=1?(e.disabled=!0,e.classList.add("opacity-50","cursor-not-allowed")):(e.disabled=!1,e.classList.remove("opacity-50","cursor-not-allowed")))}function a(){const c=document.querySelectorAll(".item-checkbox:checked");let n=0,e=0;c.forEach(r=>{const i=r.dataset.itemId,d=document.querySelector(`.quantity-input[data-item-id="${i}"]`),u=parseFloat(r.dataset.price),m=parseInt(d.value);n+=u*m,e++}),document.getElementById("cart-subtotal").textContent=h(n),document.getElementById("cart-total").textContent=h(n),document.getElementById("checkout-item-count").textContent=e,document.getElementById("selected-count").textContent=e;const t=document.getElementById("checkout-btn"),o=document.getElementById("delete-selected-btn");return e>0?(t.disabled=!1,o.disabled=!1):(t.disabled=!0,o.disabled=!0),{total:n,count:e}}const y=document.getElementById("select-all");y&&y.addEventListener("change",function(){document.querySelectorAll(".item-checkbox").forEach(n=>{n.checked=this.checked}),a()}),document.querySelectorAll(".item-checkbox").forEach(c=>{c.addEventListener("change",function(){a();const n=document.querySelectorAll(".item-checkbox"),e=document.querySelectorAll(".item-checkbox:checked"),t=document.getElementById("select-all");t&&(t.checked=n.length===e.length)})});function p(c,n){const e=document.querySelector(`.increase-qty[data-item-id="${c}"]`),t=document.querySelector(`.decrease-qty[data-item-id="${c}"]`);e.disabled=!0,t.disabled=!0,fetch(`/cart/update/${c}`,{method:"PUT",headers:{"Content-Type":"application/json","X-CSRF-TOKEN":l},body:JSON.stringify({quantity:n})}).then(o=>{if(!o.ok)throw new Error("Lỗi cập nhật");return o.json()}).then(o=>{if(o.success){const r=document.querySelector(`.quantity-input[data-item-id="${c}"]`);r.value=n;const i=document.querySelector(`.item-subtotal[data-item-id="${c}"]`);i&&(i.textContent=h(o.subtotal));const d=document.querySelector(`.item-checkbox[data-item-id="${c}"]`);d&&(d.dataset.quantity=n);const u=document.getElementById("cartCount");u&&(u.textContent=o.cartCount);const m=document.getElementById("totalItems");m&&(m.textContent=o.cartCount),a(),e.disabled=!1,t.disabled=!1,f(c,n)}}).catch(o=>{console.error("Lỗi:",o),alert("Có lỗi xảy ra. Vui lòng thử lại!"),e.disabled=!1,t.disabled=!1})}document.querySelectorAll(".increase-qty, .decrease-qty").forEach(c=>{c.addEventListener("click",function(){const n=this.dataset.itemId,e=document.querySelector(`.quantity-input[data-item-id="${n}"]`);let t=parseInt(e.value);if(this.classList.contains("increase-qty"))t++;else if(this.classList.contains("decrease-qty")&&t>1)t--;else return;p(n,t)})});function s(c,n="info"){const e=document.querySelector(".notification-toast");e&&e.remove();const t=document.createElement("div");t.className=`notification-toast fixed top-20 right-4 px-6 py-4 rounded-2xl shadow-lg border z-50 transition-all duration-300 transform translate-x-0 bg-white ${n==="success"?"border-green-400 text-green-700":n==="error"?"border-red-400 text-red-700":"border-blue-400 text-blue-700"}`,t.innerHTML=`
            <div class="flex items-center space-x-3">
                <div class="flex-shrink-0">
                    <i class="fas ${n==="success"?"fa-check-circle text-green-500":n==="error"?"fa-exclamation-circle text-red-500":"fa-info-circle text-blue-500"} text-2xl"></i>
                </div>
                <div class="flex-1">
                    <p class="font-medium">${c}</p>
                </div>
                <button onclick="this.parentElement.parentElement.remove()" class="flex-shrink-0 ml-3 hover:opacity-80">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        `,document.body.appendChild(t),setTimeout(()=>{t.classList.add("translate-x-0")},10),setTimeout(()=>{t.style.transform="translateX(400px)",t.style.opacity="0",setTimeout(()=>{document.body.contains(t)&&document.body.removeChild(t)},300)},4e3)}function g(c,n){const e=document.createElement("div");e.className=`
            fixed inset-0 z-50 flex items-center justify-center p-4 
            backdrop-blur-sm bg-black/30
        `;const t=document.createElement("div");t.className=`
            bg-white rounded-2xl shadow-2xl max-w-md w-full transform scale-95 opacity-0 
            transition-all duration-300 ease-out
        `,t.innerHTML=`
            <div class="p-6">
                <div class="flex items-center justify-center w-12 h-12 mx-auto bg-red-100 rounded-full mb-4">
                    <i class="fas fa-trash-alt text-red-600 text-xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 text-center mb-2">Xóa sản phẩm?</h3>
                <p class="text-gray-600 text-center mb-6">
                    Bạn có chắc chắn muốn xóa <span class="font-semibold text-red-500">${n}</span> khỏi giỏ hàng?
                </p>
                <div class="flex gap-3">
                    <button class="cancel-btn flex-1 px-4 py-3 bg-gray-100 text-gray-700 rounded-lg font-medium hover:bg-gray-200 transition">
                        Hủy
                    </button>
                    <button class="confirm-btn flex-1 px-4 py-3 bg-red-600 text-white rounded-lg font-medium hover:bg-red-700 transition">
                        Xóa
                    </button>
                </div>
            </div>
        `,e.appendChild(t),document.body.appendChild(e),setTimeout(()=>{t.classList.remove("scale-95","opacity-0"),t.classList.add("scale-100","opacity-100")},10),t.querySelector(".cancel-btn").addEventListener("click",()=>e.remove()),e.addEventListener("click",o=>{o.target===e&&e.remove()}),t.querySelector(".confirm-btn").addEventListener("click",()=>{e.remove(),E(c)})}function v(){const n=document.querySelectorAll(".item-checkbox:checked").length;if(n===0)return;const e=document.createElement("div");e.className=`
            fixed inset-0 z-50 flex items-center justify-center p-4 
            backdrop-blur-sm bg-black/30
        `;const t=document.createElement("div");t.className=`
            bg-white rounded-2xl shadow-2xl max-w-md w-full transform scale-95 opacity-0 
            transition-all duration-300 ease-out
        `,t.innerHTML=`
            <div class="p-6">
                <div class="flex items-center justify-center w-12 h-12 mx-auto bg-red-100 rounded-full mb-4">
                    <i class="fas fa-trash-alt text-red-600 text-xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 text-center mb-2">Xóa ${n} sản phẩm?</h3>
                <p class="text-gray-600 text-center mb-6">
                    Bạn có chắc chắn muốn xóa <span class="font-semibold text-red-500">${n} sản phẩm</span> đã chọn khỏi giỏ hàng?
                </p>
                <div class="flex gap-3">
                    <button class="cancel-btn flex-1 px-4 py-3 bg-gray-100 text-gray-700 rounded-lg font-medium hover:bg-gray-200 transition">
                        Hủy
                    </button>
                    <button class="confirm-btn flex-1 px-4 py-3 bg-red-600 text-white rounded-lg font-medium hover:bg-red-700 transition">
                        Xóa tất cả
                    </button>
                </div>
            </div>
        `,e.appendChild(t),document.body.appendChild(e),setTimeout(()=>{t.classList.remove("scale-95","opacity-0"),t.classList.add("scale-100","opacity-100")},10),t.querySelector(".cancel-btn").addEventListener("click",()=>e.remove()),e.addEventListener("click",o=>{o.target===e&&e.remove()}),t.querySelector(".confirm-btn").addEventListener("click",()=>{e.remove(),k()})}const x=document.getElementById("delete-selected-btn");x&&x.addEventListener("click",v);function k(){const c=document.querySelectorAll(".item-checkbox:checked"),n=Array.from(c).map(e=>e.dataset.itemId);n.length!==0&&fetch("/cart/remove-multiple",{method:"POST",headers:{"Content-Type":"application/json","X-CSRF-TOKEN":l},body:JSON.stringify({item_ids:n})}).then(e=>{if(!e.ok)throw new Error("Network response was not ok");return e.json()}).then(e=>{e.success?(n.forEach(t=>{const o=document.querySelector(`.cart-item[data-item-id="${t}"]`);o&&(o.style.opacity="0",o.style.transform="translateX(100%)",o.style.transition="all 0.3s ease-out",setTimeout(()=>o.remove(),300))}),setTimeout(()=>{if(document.querySelectorAll(".cart-item").length===0)location.reload();else{const t=document.getElementById("cartCount"),o=document.getElementById("totalItems");t&&(t.textContent=e.cartCount),o&&(o.textContent=e.cartCount),a();const r=document.getElementById("select-all");r&&(r.checked=!1),s(`Đã xóa ${n.length} sản phẩm khỏi giỏ hàng`,"success")}},300)):s(e.message||"Xóa sản phẩm thất bại!","error")}).catch(e=>{console.error("Error:",e),s("Có lỗi xảy ra. Vui lòng thử lại!","error")})}document.querySelectorAll(".remove-item").forEach(c=>{c.addEventListener("click",function(){const n=this.dataset.itemId,e=this.closest(".cart-item").querySelector("h3 a").textContent.trim();g(n,e)})});function E(c){const n=document.querySelector(`.cart-item[data-item-id="${c}"]`);fetch(`/cart/remove/${c}`,{method:"DELETE",headers:{"Content-Type":"application/json","X-CSRF-TOKEN":l}}).then(e=>{if(!e.ok)throw new Error("Network response was not ok");return e.json()}).then(e=>{e.success?(n.style.opacity="0",n.style.transform="translateX(100%)",n.style.transition="all 0.3s ease-out",setTimeout(()=>{if(n.remove(),document.querySelectorAll(".cart-item").length===0)setTimeout(()=>location.reload(),1e3);else{const t=document.getElementById("cartCount"),o=document.getElementById("totalItems");t&&(t.textContent=e.cartCount),o&&(o.textContent=e.cartCount),a()}},300)):s(e.message||"Xóa sản phẩm thất bại!","error")}).catch(e=>{console.error("Error:",e),s("Có lỗi xảy ra. Vui lòng thử lại!","error")})}const b=document.getElementById("checkout-btn");b&&b.addEventListener("click",function(){const c=document.querySelectorAll(".item-checkbox:checked"),n=Array.from(c).map(e=>e.dataset.itemId);if(n.length===0){s("Vui lòng chọn sản phẩm để thanh toán","error");return}fetch("/cart/save-selected",{method:"POST",headers:{"Content-Type":"application/json","X-CSRF-TOKEN":l},body:JSON.stringify({selected_items:n})}).then(e=>e.json()).then(e=>{e.success&&(window.location.href="/checkout")}).catch(e=>{console.error("Error:",e),s("Có lỗi xảy ra. Vui lòng thử lại!","error")})}),document.querySelectorAll(".quantity-input").forEach(c=>{const n=c.dataset.itemId,e=parseInt(c.value);f(n,e)}),a()});
