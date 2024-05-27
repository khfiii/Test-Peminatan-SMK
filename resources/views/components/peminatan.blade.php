@if ($soals->isNotEmpty())
<div id="peminatan" class="py-8 flex justify-center">
    <div class="w-full text-center flex flex-col items-center justify-center space-y-4">
        <div class="heading">
            <h2 class="font-bold text-lg uppercase text-coklat sm:text-2xl">Program peminatan</h2>
        </div>

        <div class="subheading px-5 sm:max-w-xl">
            <p class="text-coklat sm:font-medium">Pilih salah satu tes peminatan yang tersedia dibawah ini untuk
                mengetahui
                minat dan bakat kamu berdasarkan jurusan yang tersedia</p>
        </div>

        <div class="grid grid-rows-7 sm:grid-cols-4 gap-4 sm:gap-4 w-full px-6 sm:px-[5rem] py-4">
            @foreach ($soals as $soal)
                <div class="inline-flex p-2 gap-2 rounded-sm border shadow-md">
                    <div class="space-y-1 text-start">
                        <p class="text-sm text-coklat font-medium">{{ $soal->jurusan->nama_jurusan }}</p>
                        <div>
                            <small>{{ $soal->nama_soal }}</small>
                        </div>
                        <a href="{{ route('biodata', ['soal' => $soal]) }}"
                            class="btn btn-xs {{ SetColor::jurusan($soal->jurusan->nama_jurusan) }} text-white rounded-md">
                            Mulai
                            Test</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@else
<div class="mt-32 flex w-full flex-wrap items-center justify-center gap-16">
  <div class="grid w-60 gap-4">
    <img src="{{ Vite::asset('resources/images/empty.svg') }}" alt="" class="w-52 sm:w-[20rem] rounded">
    <div>
      <h2 class="pb-1 text-center text-base font-semibold leading-relaxed text-coklat">Yah, Belum ada test peminatan</h2>
      <p class="pb-4 text-center text-sm font-normal leading-snug text-coklat">Soal sedang dibuat..</p>
      <p></p>
    </div>
  </div>
</div>

@endif