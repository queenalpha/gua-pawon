<div>
  <section class="w-full bg-white py-12 px-6 md:px-24">
    <div class="max-w-7xl mx-auto grid md:grid-cols-3 gap-12 items-start">
      <div class="md:col-span-1">
        <h2 class="text-2xl font-bold mb-6">Hubungi Kami</h2>
        <h3 class="text-base font-semibold mb-2">Saran dan Masukan</h3>
        <p class="text-base text-gray-700">Berikan kami saran dan masukan demi pengembangan website yang lebih baik lagi
        </p>
      </div>

      <div class="md:col-span-1 border-r pr-8">
        <!-- Form Kontak Livewire -->
        <div wire:key="contact-form-{{$resetKey}}">
          <form wire:submit.prevent="submit" class="space-y-6">
            <input type="email" placeholder="Email"
              class="w-full border-0 border-b border-black outline-none py-1 placeholder:text-black text-sm focus:ring-0"
              wire:model.defer="email" required />

            <input type="text" placeholder="Nama"
              class="w-full border-0 border-b border-black outline-none py-1 placeholder:text-black text-sm focus:ring-0"
              wire:model.defer="name" required />

            <input type="tel" placeholder="No Telepon"
              class="w-full border-0 border-b border-black outline-none py-1 placeholder:text-black text-sm focus:ring-0"
              wire:model.defer="telp" />

            <input type="text" placeholder="Subject"
              class="w-full border-0 border-b border-black outline-none py-1 placeholder:text-black text-sm focus:ring-0"
              wire:model.defer="subject" required />

            <textarea placeholder="Pesan"
              class="w-full border-0 border-b border-black outline-none py-0 placeholder:text-black h-15 resize-none text-sm"
              wire:model.defer="messages" required></textarea>

            <button type="submit"
              class="w-full bg-black text-white py-2 rounded-full mt-1 hover:bg-gray-800 transition flex justify-center items-center gap-2"
              wire:loading.attr="disabled" wire:target="submit">

              <!-- Text normal -->
              <span wire:loading.remove wire:target="submit">Kirim</span>

              <!-- Spinner & Text while loading -->
              <span wire:loading wire:target="submit" class="flex items-center justify-center">
                <svg class="animate-spin h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                  viewBox="0 0 24 24">
                  <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                  <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8H4z"></path>
                </svg>
                <span>Proses...</span>
              </span>
            </button>


          </form>
        </div>


        @if (session()->has('success'))
          <div class="fixed top-10 right-4 z-50">
            <div id="toast-success"
            class="flex items-center w-full max-w-xs p-4 mb-4 text-white bg-white rounded-lg shadow-sm border border-orange-600"
            role="alert">
            <div
              class="inline-flex items-center justify-center shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
              <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
              viewBox="0 0 20 20">
              <path
                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
              </svg>
              <span class="sr-only">Check icon</span>
            </div>
            <div class="ms-3 text-sm font-normal text-black">{{ session('success') }}</div>
            </div>
          </div>
        @endif

      </div>

      <div class="md:col-span-1">
        <div class="mb-4">
          <p class="font-semibold">Nomor Kontak</p>
          <p class="flex items-center mt-1">
            <img src="{{ Vite::asset('resources/img/phone-call.png') }}" class="w-4 h-4 mr-2 object-contain"
              alt="Phone Call Icon" style="width: 1rem; height: 1rem;">08227804942
          </p>
        </div>
        <div>
          <p class="font-semibold">Kunjungi kami</p>
          <p class="flex items-center mt-1">
            <img src="{{ Vite::asset('resources/img/placeholder.png') }}" class="w-4 h-4 mr-2 object-contain"
              alt="Location Icon" style="width: 1rem; height: 1rem;">
            <a href="https://maps.app.goo.gl/pgiBAj3uKo1RiaJd9" class="hover:text-blue text-blue">Balai Pelestarian
              Kebudayaan Wilayah IX | Jl. Cinambo Jl. Ujungberung No.136 40293 Bandung Jawa Barat</a>
          </p>
        </div>
      </div>

    </div>
  </section>
</div>


<script>
  function initToastAutoHide() {
    const toast = document.querySelector('#toast-success');

    if (toast) {
      setTimeout(() => {
        toast.remove();
      }, 3000);

      const closeBtn = toast.querySelector('[data-dismiss-target="#toast-success"]');
      if (closeBtn) {
        closeBtn.addEventListener('click', () => {
          toast.remove();
        });
      }
    }
  }

  document.addEventListener('DOMContentLoaded', function () {
    initToastAutoHide();

    const observer = new MutationObserver(() => {
      initToastAutoHide();
    });

    observer.observe(document.body, { childList: true, subtree: true });
  });

</script>