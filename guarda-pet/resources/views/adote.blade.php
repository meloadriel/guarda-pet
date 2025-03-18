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
    <header class="w-full h-24 bg-[#F58634] flex  relative overflow-hidden">
        <div class="w-[1200px] mx-auto flex items-center justify-between">
            <img class="w-[180px] mt-2" src="{{ asset('img/logo.png') }}" alt="">
            <ul class="">
                <a href="{{ route('adote') }}" alt='' class="text-white text-xl font-semibold p-4"">Adote um
                    pet</a>
                <a class="text-white text-xl font-semibold p-4"">Cadastrar ONG</a>
                <a class="text-white text-xl font-semibold p-4"">Adotados</a>
                <a class="text-white text-xl font-semibold p-4"">Transparência Pets</a>
                <a class="text-white text-xl font-semibold p-4"> <i class="fa-solid fa-right-to-bracket"></i>
                    Entrar</a>

            </ul>
        </div>
    </header>
    <div class="w-full h-28 bg-[#71D4FF] flex items-center justify-center">
        <span class="text-white text-3xl font-bold">Adote um pet</span>
    </div>
    <home class="flex flex-col items-center text-5xl pt-16">
        <div class="w-[1200px] flex flex-wrap justify-center gap-2 pb-16">
            <x-card nome="Chico Moedas" sexo="Macho" idade="8 Meses" porte="Pequeno"
                descricao="Esse gatinho laranjinha é como um raio de sol
peludo, cheio de alegria e amor para
compartilhar! 🧡🐾
Ele é brincalhão, curioso e adora explorar cada
cantinho da casa, sempre pronto para correr
atrás de bolinhas, brincar de esconde-esconde
ou caçar fios soltos. Quando a energia acaba,
ele se transforma no mestre da soneca,
escolhendo o lugar mais aconchegante – seja
uma almofada, o colo de alguém ou até uma
pilha de roupas – para adormecer enquanto
ronrona baixinho. Um verdadeiro companheiro
carinhoso e cheio de personalidade, perfeito
para quem busca momentos de diversão e calmaria.
Adote e leve essa doçura para casa! 🏡💤"></x-card>
            <x-card nome="Chico Moedas" sexo="Macho" idade="8 Meses" porte="Pequeno"
                descricao="Esse gatinho laranjinha é como um raio de sol
    peludo, cheio de alegria e amor para
    compartilhar! 🧡🐾
    Ele é brincalhão, curioso e adora explorar cada
    cantinho da casa, sempre pronto para correr
    atrás de bolinhas, brincar de esconde-esconde
    ou caçar fios soltos. Quando a energia acaba,
    ele se transforma no mestre da soneca,
    escolhendo o lugar mais aconchegante – seja
    uma almofada, o colo de alguém ou até uma
    pilha de roupas – para adormecer enquanto
    ronrona baixinho. Um verdadeiro companheiro
    carinhoso e cheio de personalidade, perfeito
    para quem busca momentos de diversão e calmaria.
    Adote e leve essa doçura para casa! 🏡💤"></x-card>
            <x-card nome="Chico Moedas" sexo="Macho" idade="8 Meses" porte="Pequeno"
                descricao="Esse gatinho laranjinha é como um raio de sol
    peludo, cheio de alegria e amor para
    compartilhar! 🧡🐾
    Ele é brincalhão, curioso e adora explorar cada
    cantinho da casa, sempre pronto para correr
    atrás de bolinhas, brincar de esconde-esconde
    ou caçar fios soltos. Quando a energia acaba,
    ele se transforma no mestre da soneca,
    escolhendo o lugar mais aconchegante – seja
    uma almofada, o colo de alguém ou até uma
    pilha de roupas – para adormecer enquanto
    ronrona baixinho. Um verdadeiro companheiro
    carinhoso e cheio de personalidade, perfeito
    para quem busca momentos de diversão e calmaria.
    Adote e leve essa doçura para casa! 🏡💤"></x-card>
            <x-card nome="Chico Moedas" sexo="Macho" idade="8 Meses" porte="Pequeno"
                descricao="Esse gatinho laranjinha é como um raio de sol
    peludo, cheio de alegria e amor para
    compartilhar! 🧡🐾
    Ele é brincalhão, curioso e adora explorar cada
    cantinho da casa, sempre pronto para correr
    atrás de bolinhas, brincar de esconde-esconde
    ou caçar fios soltos. Quando a energia acaba,
    ele se transforma no mestre da soneca,
    escolhendo o lugar mais aconchegante – seja
    uma almofada, o colo de alguém ou até uma
    pilha de roupas – para adormecer enquanto
    ronrona baixinho. Um verdadeiro companheiro
    carinhoso e cheio de personalidade, perfeito
    para quem busca momentos de diversão e calmaria.
    Adote e leve essa doçura para casa! 🏡💤"></x-card>
            <x-card nome="Chico Moedas" sexo="Macho" idade="8 Meses" porte="Pequeno"
                descricao="Esse gatinho laranjinha é como um raio de sol
    peludo, cheio de alegria e amor para
    compartilhar! 🧡🐾
    Ele é brincalhão, curioso e adora explorar cada
    cantinho da casa, sempre pronto para correr
    atrás de bolinhas, brincar de esconde-esconde
    ou caçar fios soltos. Quando a energia acaba,
    ele se transforma no mestre da soneca,
    escolhendo o lugar mais aconchegante – seja
    uma almofada, o colo de alguém ou até uma
    pilha de roupas – para adormecer enquanto
    ronrona baixinho. Um verdadeiro companheiro
    carinhoso e cheio de personalidade, perfeito
    para quem busca momentos de diversão e calmaria.
    Adote e leve essa doçura para casa! 🏡💤"></x-card>
            <x-card nome="Chico Moedas" sexo="Macho" idade="8 Meses" porte="Pequeno"
                descricao="Esse gatinho laranjinha é como um raio de sol
    peludo, cheio de alegria e amor para
    compartilhar! 🧡🐾
    Ele é brincalhão, curioso e adora explorar cada
    cantinho da casa, sempre pronto para correr
    atrás de bolinhas, brincar de esconde-esconde
    ou caçar fios soltos. Quando a energia acaba,
    ele se transforma no mestre da soneca,
    escolhendo o lugar mais aconchegante – seja
    uma almofada, o colo de alguém ou até uma
    pilha de roupas – para adormecer enquanto
    ronrona baixinho. Um verdadeiro companheiro
    carinhoso e cheio de personalidade, perfeito
    para quem busca momentos de diversão e calmaria.
    Adote e leve essa doçura para casa! 🏡💤"></x-card>
        </div>
        <footer class="w-full h-28 bg-[#0098DA] flex items-center justify-center">
            <span class="text-white text-3xl">Desenvolvido por <b>DITIN</b></span>
        </footer>
    </home>
    <script src="https://kit.fontawesome.com/573e44f26e.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</body>

</html>
