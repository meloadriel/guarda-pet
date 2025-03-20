<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guarda-pet</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
</head>

<body>
    <header class="w-full h-24 bg-[#F58634] flex relative overflow-hidden">
        <div class="w-full max-w-[1200px] mx-auto flex justify-center items-center md:justify-between px-4">
            <a href="{{ route('index')}}">
                <img class="w-[180px] mt-2 " src="{{ asset('img/logo.png') }}" alt="">
            </a>

            <button id="menu-toggle" class="md:hidden text-white text-2xl absolute right-6">
                <i class="fa-solid fa-bars"></i>
            </button>

            <ul id="menu" class="hidden md:flex flex-col md:flex-row md:items-center md:gap-4 absolute md:relative top-24 md:top-auto left-0 w-full md:w-auto bg-[#F58634] md:bg-transparent md:static p-4 md:p-0 z-10">
                <a href="{{ route('adote') }}" class="text-white text-xl font-semibold p-4">Adote um pet</a>
                <a class="text-white text-xl font-semibold p-4">Cadastrar ONG</a>
                <a class="text-white text-xl font-semibold p-4">Adotados</a>
                <a class="text-white text-xl font-semibold p-4">Transparência Pets</a>
                <a class="text-white text-xl font-semibold p-4 flex items-center gap-2">
                    <i class="fa-solid fa-right-to-bracket"></i> Entrar
                </a>
            </ul>
        </div>
    </header>
    <div class="w-full h-[100vh] bg-white flex flex-col gap-16">
        <div class="flex w-[1200px] justify-start mx-auto items-start gap-16 pt-16">
            <div class="flex flex-col items-center justify-center">
                <img class="rounded-2xl mb-4" src="{{ asset('img/gato.png') }}" alt="">
                <div class="flex gap-4">
                    <div class="w-3 h-3 rounded-full bg-[#0098DA]"></div>
                    <div class="w-3 h-3 rounded-full bg-[#49494950]"></div>
                </div>
            </div>
            <div class="flex flex-col gap-4">
                <h2 class="font-bold text-3xl text-[#0098DA]">Yuri Alberto</h2>
                <div class="flex flex-col gap-[10px]">
                    <span class="text-xs text-black"><b>Raça:</b> Sem Raça Definida</span>
                    <span class="text-xs text-black"><b>Sexo:</b> Macho</span>
                    <span class="text-xs text-black"><b>Porte:</b> Pequeno</span>
                    <span class="text-xs text-black"><b>Cor Predominante:</b> Laranja </span>
                    <span class="text-xs text-black"><b>Idade aproximada:</b> 7 meses </span>
                    <span class="text-xs text-black"><b>Data de nascimento aproximada:</b> 07/07/2023 </span>
                    <span class="text-xs text-black"><b>Data da vermifugação:</b> 12/12/2023 </span>
                    <span class="text-xs text-black"><b>Data da vacina antirrábica:</b> 26/01/2024 </span>
                    <span class="text-xs text-black"><b>Castrado:</b> Sim </span>
                    <span class="text-xs text-black"><b>Sociável com outros animais?</b> Sim </span>
                    <span class="text-xs text-black"><b>Sociável com pessoas?</b> Sim </span>
                </div>
            </div>
        </div>
        <div class="flex w-[1200px] justify-start mx-auto flex-col">
            <span class="text-[#0098DA] font-bold text-3xl mb-4">Sobre o pet</span>
            <p class="text-base mb-8">Esse gatinho laranjinha é como um raio de sol peludo, cheio de alegria e amor para compartilhar! 🧡🐾
                Ele é brincalhão, curioso e adora explorar cada cantinho da casa, sempre pronto para correr atrás de bolinhas, brincar de esconde-esconde
                ou caçar fios soltos. Quando a energia acaba, ele se transforma no mestre da soneca, escolhendo o lugar mais aconchegante – seja
                uma almofada, o colo de alguém ou até uma pilha de roupas – para adormecer enquanto ronrona baixinho. Um verdadeiro companheiro
                carinhoso e cheio de personalidade, perfeito para quem busca momentos de diversão e calmaria. Adote e leve essa doçura para casa! 🏡💤</p>
            <span class="text-xs">Clique abaixo para adotar!</span>
        </div>
        <a href="" alt="" class="w-[250px] h-[50px] bg-[#49494950] rounded-lg self-center flex items-center justify-center">
            <span class="text-white font-medium text-lg">Quero adotar</span>
        </a>
    </div>
    <footer class="w-full h-28 bg-[#0098DA] flex items-center justify-center">
        <span class="text-white text-3xl">Desenvolvido por <b>DITIN</b></span>
    </footer>
    <script src="https://kit.fontawesome.com/573e44f26e.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script>
        document.getElementById('menu-toggle').addEventListener('click', function () {
            document.getElementById('menu').classList.toggle('hidden');
        });
    </script>

</body>

</html>
