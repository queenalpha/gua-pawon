<div>
  <section class="w-full bg-white py-12 px-6 md:px-24" id="kontak">
    <div class="max-w-7xl mx-auto grid md:grid-cols-3 gap-12 items-start">
      <div class="md:col-span-1">
        <h2 class="text-2xl font-bold mb-6">{{__('contacts/index.hubungi-kami')}}</h2>
        <h3 class="text-base font-semibold mb-2">{{__('contacts/index.saran-masukan')}}</h3>
        <p class="text-base text-gray-700">{{__('contacts/index.berikan-kami-saran')}}
        </p>
      </div>

      <div class="md:col-span-1 border-r pr-8">
        <!-- Form Kontak Livewire -->
        <form wire:submit.prevent="submit" class="space-y-6">
          <input type="email" placeholder="Email"
            class="w-full border-0 border-b border-black outline-none py-1 placeholder:text-black text-sm"
            wire:model.defer="email" required />

          <input type="text" placeholder="{{__('contacts/index.nama')}}"
            class="w-full border-0 border-b border-black outline-none py-1 placeholder:text-black text-sm"
            wire:model.defer="name" required />

          <input type="tel" placeholder="{{__('contacts/index.telp')}}"
            class="w-full border-0 border-b border-black outline-none py-1 placeholder:text-black text-sm"
            wire:model.defer="telp" />

          <input type="text" placeholder="{{__('contacts/index.subjek')}}"
            class="w-full border-0 border-b border-black outline-none py-1 placeholder:text-black text-sm"
            wire:model.defer="subject" required />

          <textarea placeholder="{{__('contacts/index.pesan')}}"
            class="w-full border-0 border-b border-black outline-none py-0 placeholder:text-black h-15 resize-none text-sm"
            wire:model.defer="messages" required></textarea>

          <button type="submit"
            class="w-full bg-black text-white py-2 rounded-full mt-1 hover:bg-gray-800 transition">{{__('contacts/index.kirim')}}</button>
        </form>


        @if (session()->has('success'))
        <div class="fixed top-10 right-4 z-50">
          <div id="toast-success"
          class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow-sm dark:text-gray-400 dark:bg-gray-800"
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
          <div class="ms-3 text-sm font-normal">{{ session('success') }}</div>
          <button type="button" onclick="document.getElementById('toast-success')?.remove()"
            class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
            aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
          </button>

          </div>
        </div>
      @endif

      </div>

      <div class="md:col-span-1">
        <div class="mb-4">
          <p class="font-semibold">{{__('contacts/index.no-kontak')}}</p>
          <p class="flex items-center mt-1">
            <img src="{{ Vite::asset('resources/img/phone-call.png') }}" class="w-4 h-4 mr-2 object-contain"
              alt="Phone Call Icon" style="width: 1rem; height: 1rem;">{{__('contacts/index.number')}}8227804942
          </p>
        </div>
        <div>
          <p class="font-semibold">{{__('contacts/index.kunjungi-kami')}}</p>
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
  document.addEventListener('DOMContentLoaded', function () {
    const closeBtn = document.querySelector('[data-dismiss-target="#toast-success"]');
    const toast = document.querySelector('#toast-success');

    if (closeBtn && toast) {
      closeBtn.addEventListener('click', function () {
        toast.remove(); // atau: toast.style.display = 'none';
      });
    }
  });
</script>