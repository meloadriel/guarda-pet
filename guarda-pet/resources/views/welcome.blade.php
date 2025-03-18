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
                <span class="text-white text-xl font-semibold p-4"">Adote um pet</span>
                <span class="text-white text-xl font-semibold p-4"">Cadastrar ONG</span>
                <span class="text-white text-xl font-semibold p-4"">Adotados</span>
                <span class="text-white text-xl font-semibold p-4"">Transparência Pets</span>
                <span class="text-white text-xl font-semibold p-4"> <i class="fa-solid fa-right-to-bracket"></i>
                    Entrar</span>

            </ul>
        </div>
    </header>
    <home class="bg-[#71D4FF] h-[100vh] flex flex-col">
        <div class="relative flex w-[1200px] mx-auto items-center justify-between">
            <div class="flex flex-col ">
                <span class="text-white font-extrabold text-9xl pb-16"> Guarda Pet <i
                        class="fa-solid fa-paw text-[#F58634] text-6xl"></i></span>
                <p class="text-white font-semibold text-2xl pb-4"> Que tal compartilhar amor e cuidados? </p>
                <p class="text-white font-semibold text-2xl w-[760px] pb-4"> Se você ama animais e quer adotar um
                    cachorrinho ou
                    gatinho, está no lugar certo! </p>
                <p class="text-white font-semibold text-2xl w-[760px]"> Aqui no Guarda Pet, a Prefeitura de São
                    Cristóvão une
                    tecnologia, dedicação e paixão pelos animais para ajudar
                    você a encontrar o companheiro ideal e encher sua vida
                    de amor. </p>
            </div>
            <img class="mb-10 mt-10"src="{{ asset('img/imagens home.png') }}" alt="">
            <div class="w-full flex absolute bottom-[-25px] -left-150">
                <img class="" src="{{ asset('img/div patas.png') }}" alt="">
                <img class="" src="{{ asset('img/div patas.png') }}" alt="">
            </div>
        </div>
        <div class="flex w-[100%] h-[100vh] bg-[#FFB178]">
            <div class="flex w-[1200px] mx-auto justify-between relative items-center">
                <div class="flex flex-col">
                    <span class="text-white font-bold text-4xl pb-6"> Quero Adotar um animalzinho </span>
                    <p class="text-white text-2xl pb-4 w-[513px]"> Procurando um novo amigo para adoção?
                        Clique no botão abaixo e descubra os
                        nossos pets cheios de amor para dar! </p>
                    <a class="w-[460px] h-[75px] bg-[#0098DA] rounded-[12px] flex items-center justify-center"
                        href="">
                        <span class="font-bold text-white text-3xl">Procurar</span>
                    </a>
                </div>
                <img class="pt-5 " src="{{ asset('img/adota 1.png') }}" alt="">
                <div class="w-full flex absolute bottom-[-25px] -left-150">
                    <img class="rotate-180" src="{{ asset('img/div patas.png') }}" alt="">
                    <img class="rotate-180" src="{{ asset('img/div patas.png') }}" alt="">
                </div>
            </div>

        </div>
        <div class="flex w-[100%] h-[100vh] bg-[#71D4FF]">
            <div class="flex w-[1200px] mx-auto justify-between relative items-center">
                <div class="flex flex-col items-center">
                    <span class="text-white font-bold text-4xl pb-6 w-[500px] text-center"> Sou cidadão e quero
                        cadastrar um pet
                        para adoção </span>
                    <a class="w-[445px] h-[70px] bg-[#F58634] rounded-[12px] flex items-center justify-center mb-6"
                        href="">
                        <span class="font-bold text-white text-3xl">Acessar</span>
                    </a>
                    <p class="text-white text-2xl pb-4 w-[340px] text-center"> Veja aqui como colocar
                        um animalzinho para adoção. </p>
                </div>
                <img class="" src="{{ asset('img/adota 2.png') }}" alt="">
                <div class="flex flex-col items-center">
                    <span class="text-white font-bold text-4xl pb-6 text-center"> Conecta São Cristóvão </span>
                    <a class="w-[445px] h-[70px] bg-[#F58634] rounded-[12px] flex items-center justify-center mb-6"
                        href="">
                        <span class="font-bold text-white text-3xl">Acessar</span>
                    </a>
                    <p class="text-white text-2xl w-[325px] text-center"> Veja aqui todos os serviços para o seu
                        pet </p>
                </div>
                <div class="w-full flex absolute bottom-[-25px] -left-150">
                    <img class="" src="{{ asset('img/div patas.png') }}" alt="">
                    <img class="" src="{{ asset('img/div patas.png') }}" alt="">
                </div>
            </div>
        </div>
        <div class="flex w-[100%] h-[100vh] bg-[#FFB178]">
            <div class="flex w-[1200px] mx-auto justify-center relative items-center">
                <div class="flex flex-col items-center">
                    <span class="text-white font-bold text-4xl pb-6 pt-10 "> Sobre o programa</span>
                    <p class="text-white text-2xl pb-6 w-[950px] "> O <span class="text-[#0098DA] font-bold">Guarda
                            Pet</span> é um jeito especial e uma experiência
                        nova para tornar a adoção de
                        cães e gatos ainda mais simples e prática. Tudo isso por meio da tecnologia unindo
                        o coração de quem deseja receber em casa um novo amigo e quem precisa dessa
                        onda de afeto e cuidados. </p>
                    <p class="text-white text-2xl pb-6 w-[950px] "> Agora você pode conhecer o bichinho no <span
                            class="text-[#0098DA] font-bold">conforto da sua casa!</span> A gente faz uma
                        <span class="text-[#0098DA] font-bold">chamada de vídeo</span> para mostrar o pet que você se
                        interessou aqui mesmo na nossa
                        galeria.
                    </p>
                    <p class="text-white text-2xl pb-10 w-[950px] "> O mais importante é que esses bichinhos recebam um
                        lar acolhedor e que juntos
                        vocês construam muitas histórias lindas para contar!
                    </p>
                </div>
                <div class="w-full flex absolute bottom-[-25px] -left-150">
                    <img class="rotate-180" src="{{ asset('img/div patas.png') }}" alt="">
                    <img class="rotate-180" src="{{ asset('img/div patas.png') }}" alt="">
                </div>
            </div>

        </div>
        <div class="flex flex-col items-center text-5xl pt-16">
            <h2 class="text-[#0098DA] font-bold pb-8">Nossas Estrelas</h2>
            <div class="flex justify-between w-[1200px]">
                <x-card nome="Yuri Alberto" sexo="Macho" idade="5 Meses" porte="Pequeno"
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
            <div class="w-[390px] h-[60px] bg-[#F58634] flex items-center justify-center rounded-xl m-8">
                <span class="text-2xl font-bold text-white">Ver todos</span>
            </div>
            <span class="text-4xl font-bold text-[#0098DA] mb-8">Fale Conosco</span>
            <div class="w-[1200px] h-[130px] bg-[#71D4FF80] mb-20 rounded-3xl flex justify-between items-center p-10">
                <div class="flex flex-col">
                    <span class="text-sm font-bold text-[#018bc7]">Nosso Contatos:</span>
                    <span class="text-sm font-bold text-[#018bc7]">Email:<b
                            class="text-[#034C6B]">guardapet@saocristovao.se.gov.br</b>
                    </span>
                </div>
                <div class="w-[315px] h-[55px] bg-[#0098DA] rounded-xl flex items-center justify-center ">
                    <i class="fa-brands fa-whatsapp text-white text-2xl m-2"></i>
                    <span class="text-white font-medium text-2xl">Whatsapp</span>
                </div>
            </div>
            <footer class="w-full h-28 bg-[#0098DA] flex items-center justify-center">
                <span class="text-white text-3xl">Desenvolvido por <b>DITIN</b></span>
            </footer>
        </div>
    </home>
    <script src="https://kit.fontawesome.com/573e44f26e.js" crossorigin="anonymous"></script>
</body>

</html>
