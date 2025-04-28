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
        <form class="space-y-6">
          <input type="email" placeholder="Email"
            class="w-full border-0 border-b border-black outline-none py-1 placeholder:text-black text-sm" />
          <input type="text" placeholder="Nama"
            class="w-full border-0 border-b border-black outline-none py-1 placeholder:text-black text-sm" />
          <input type="tel" placeholder="No. Telp"
            class="w-full border-0 border-b border-black outline-none py-1 placeholder:text-black text-sm" />
          <textarea placeholder="Pesan"
            class="w-full border-0 border-b border-black outline-none py-0 placeholder:text-black h-8 resize-none text-sm"></textarea>
          <button type="submit"
            class="w-full bg-black text-white py-2 rounded-full mt-1 hover:bg-gray-800 transition">Kirim</button>
        </form>
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
              <a href="https://maps.app.goo.gl/pgiBAj3uKo1RiaJd9" class="hover:text-blue text-blue">Balai Pelestarian Kebudayaan Wilayah IX |
              Jl. Cinambo Jl. Ujungberung No.136 40293 Bandung Jawa Barat</a>
          </p>
        </div>
      </div>

    </div>
  </section>

</div>