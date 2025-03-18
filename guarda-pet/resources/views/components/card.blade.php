<div class="w-[290px] h-[515px] border-2 border-[#0098DA] rounded-3xl overflow-hidden relative flex items-end">
    <div class="h-[220px] overflow-hidden absolute top-0 z-0">
        <img src="{{ asset('img/cat.png') }}" alt="gato">
    </div>
    <div class="w-[290px] h-[330px] rounded-t-3xl bg-white z-1 p-6 flex flex-col ">
        <div class="flex justify-between mb-4">
            <div class="flex flex-col">
                <span class="text-[#0098DA] font-bold text-xl">{{ $nome }}</span>
                <p class="text-xs text-black/60">{{ $sexo }} * {{ $idade }} * {{ $porte }}</p>
            </div>
            <div x-data="{ favorito: false }"
    @click="favorito = !favorito"
    class="w-8 h-8 border-[#0098DA] border-1 rounded-full flex items-center justify-center cursor-pointer transition-all duration-300"
    :class="favorito ? 'bg-[#0098da]' : 'bg-white'">
    <i class="fa-solid fa-heart text-base transition-all duration-300"
       :class="favorito ? 'text-white' : 'text-[#0098DA]'"></i>
</div>
        </div>
        <div class="mb-2">
            <p class="text-[11px] text-black/80">
                {{ $descricao }}
            </p>
        </div>
        <div class="w-[240px] h-[40px] bg-[#F58634] rounded-sm flex items-center justify-center">
            <span class="text-base font-medium text-white">Em processo de adoção
            </span>
        </div>
        <img class="w-[68px] -top-1 -right-0 absolute" src="{{ asset('img/pet.png') }}" alt="">
    </div>   <!-- The biggest battle is the war against ignorance. - Mustafa Kemal Atatürk -->
</div>
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
