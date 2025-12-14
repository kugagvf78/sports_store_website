document.addEventListener("DOMContentLoaded",function(){const l=document.querySelector('meta[name="csrf-token"]').content;function c(a){const e=document.getElementById("wishlist-count");e&&(e.textContent=a,e.style.transition="all 0.3s",e.style.transform="scale(1.2)",setTimeout(()=>{e.style.transform="scale(1)"},200))}function r(a,e="info"){const s=document.querySelector(".notification-toast");s&&s.remove();const t=document.createElement("div");t.className=`notification-toast fixed top-20 right-4 px-6 py-4 rounded-2xl shadow-lg border z-50 transition-all duration-300 transform translate-x-full bg-white ${e==="success"?"border-green-400 text-green-700":e==="error"?"border-red-400 text-red-700":"border-blue-400 text-blue-700"}`,t.innerHTML=`
            <div class="flex items-center space-x-3">
                <div class="flex-shrink-0">
                    <i class="fas ${e==="success"?"fa-check-circle text-green-500":e==="error"?"fa-exclamation-circle text-red-500":"fa-info-circle text-blue-500"} text-2xl"></i>
                </div>
                <div class="flex-1">
                    <p class="font-medium">${a}</p>
                </div>
                <button onclick="this.parentElement.parentElement.remove()" class="flex-shrink-0 ml-3 hover:opacity-80">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        `,document.body.appendChild(t),setTimeout(()=>{t.classList.remove("translate-x-full"),t.classList.add("translate-x-0")},10),setTimeout(()=>{t.style.transform="translateX(400px)",t.style.opacity="0",setTimeout(()=>t.remove(),300)},4e3)}document.querySelectorAll(".remove-wishlist").forEach(a=>{a.addEventListener("click",async function(e){e.preventDefault();const s=this.dataset.wishlistId,t=this.closest(".wishlist-item"),i=t.querySelector("h3 a")?.textContent.trim()||"sản phẩm";o(s,i,t)})}),document.querySelectorAll(".add-to-wishlist").forEach(a=>{a.addEventListener("click",async function(e){e.preventDefault();const s=this.dataset.productId;if(this.classList.contains("active")){const i=this.dataset.wishlistId;i&&n(i,this)}else d(s,this)})});async function d(a,e){e.disabled=!0;try{const t=await(await fetch("/wishlist",{method:"POST",headers:{"Content-Type":"application/json","X-CSRF-TOKEN":l},body:JSON.stringify({product_id:a})})).json();t.success?(e.classList.add("active"),e.dataset.wishlistId=t.wishlistId,e.querySelector("i")&&e.querySelector("i").classList.replace("fa-heart-o","fa-heart"),c(t.wishlistCount),r(t.message||"Đã thêm vào danh sách yêu thích!","success")):r(t.message||"Không thể thêm vào yêu thích!","error")}catch(s){console.error("Error:",s),r("Có lỗi xảy ra. Vui lòng thử lại!","error")}finally{e.disabled=!1}}async function n(a,e=null,s=null){try{const i=await(await fetch(`/wishlist/${a}`,{method:"DELETE",headers:{"Content-Type":"application/json","X-CSRF-TOKEN":l}})).json();i.success?(e&&(e.classList.remove("active"),delete e.dataset.wishlistId,e.querySelector("i")&&e.querySelector("i").classList.replace("fa-heart","fa-heart-o")),s&&(s.style.opacity="0",s.style.transform="translateX(100%)",s.style.transition="all 0.3s ease-out",setTimeout(()=>{s.remove(),document.querySelectorAll(".wishlist-item").length===0&&setTimeout(()=>location.reload(),500)},300)),c(i.wishlistCount),r(i.message||"Đã xóa khỏi danh sách yêu thích!","success")):r(i.message||"Xóa thất bại!","error")}catch(t){console.error("Error:",t),r("Có lỗi xảy ra. Vui lòng thử lại!","error")}}function o(a,e,s){const t=document.createElement("div");t.className="fixed inset-0 z-50 flex items-center justify-center p-4 backdrop-blur-sm bg-black/30";const i=document.createElement("div");i.className="bg-white rounded-2xl shadow-2xl max-w-md w-full transform scale-95 opacity-0 transition-all duration-300 ease-out",i.innerHTML=`
            <div class="p-6">
                <div class="flex items-center justify-center w-12 h-12 mx-auto bg-red-100 rounded-full mb-4">
                    <i class="fas fa-trash-alt text-red-600 text-xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 text-center mb-2">Xóa sản phẩm?</h3>
                <p class="text-gray-600 text-center mb-6">
                    Bạn có chắc chắn muốn xóa <span class="font-semibold text-red-500">${e}</span> khỏi danh sách yêu thích?
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
        `,t.appendChild(i),document.body.appendChild(t),setTimeout(()=>{i.classList.remove("scale-95","opacity-0"),i.classList.add("scale-100","opacity-100")},10),i.querySelector(".cancel-btn").addEventListener("click",()=>t.remove()),t.addEventListener("click",u=>{u.target===t&&t.remove()}),i.querySelector(".confirm-btn").addEventListener("click",()=>{t.remove(),n(a,null,s)})}});document.addEventListener("DOMContentLoaded",async()=>{const l=document.querySelector('meta[name="csrf-token"]')?.content,c=document.querySelectorAll(".toggle-wishlist");if(!(!l||c.length===0))try{const r=Array.from(c).map(o=>o.dataset.productId),n=await(await fetch("/wishlist/status",{method:"POST",headers:{"Content-Type":"application/json","X-CSRF-TOKEN":l},body:JSON.stringify({product_ids:r})})).json();n.success&&Array.isArray(n.wishlistItems)&&c.forEach(o=>{const a=parseInt(o.dataset.productId),e=o.querySelector("i");n.wishlistItems.includes(a)?(o.classList.add("active"),e&&(e.classList.remove("far"),e.classList.add("fas"))):(o.classList.remove("active"),e&&(e.classList.remove("fas"),e.classList.add("far")))})}catch(r){console.error("Wishlist status check error:",r)}});
