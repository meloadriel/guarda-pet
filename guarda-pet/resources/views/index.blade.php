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
            <a href="{{ route('index') }}">
                <img class="w-[180px] mt-2 " src="{{ asset('img/logo.png') }}" alt="">
            </a>

            <button id="menu-toggle" class="md:hidden text-white text-2xl absolute right-6">
                <i class="fa-solid fa-bars"></i>
            </button>

            <ul id="menu"
                class="hidden md:flex flex-col md:flex-row md:items-center md:gap-4 absolute md:relative top-24 md:top-auto left-0 w-full md:w-auto bg-[#F58634] md:bg-transparent md:static p-4 md:p-0 z-10">
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
    <home class="flex flex-col w-full ">
        <div class="flex w-[100%] h-fit bg-[#71D4FF] p-4 py-8 md:p-0">
            <div class="w-full relative flex md:mx-auto items-center md:justify-between lg:w-[1200px]">
                <div class="flex flex-col">
                    <span class="text-white font-extrabold text-9xl pb-16 hidden md:block"> Guarda Pet <i
                            class="fa-solid fa-paw text-[#F58634] text-6xl"></i></span>
                    <p class="text-white font-semibold md:text-2xl pb-4 w-[230px] md:w-full text-lg"> Que tal
                        compartilhar amor e
                        cuidados? </p>
                    <p class="text-white font-semibold text-base md:text-lg w-[180px] md:w-[760px] pb-4"> Se você ama
                        animais e quer
                        adotar um
                        cachorrinho ou
                        gatinho, está no lugar certo! </p>
                    <p class="text-white font-semibold text-2xl hidden md:block w-[760px]"> Aqui no Guarda Pet, a
                        Prefeitura de São
                        Cristóvão une
                        tecnologia, dedicação e paixão pelos animais para ajudar
                        você a encontrar o companheiro ideal e encher sua vida
                        de amor. </p>
                </div>
                <img class="md:hidden block absolute right-0" src="{{ asset('img/img 1 mobile.png') }}" alt="">
                <img class="mb-10 mt-10 sm:block hidden"src="{{ asset('img/imagens home.png') }}" alt="">
                <div class="w-full flex absolute md:bottom-[-25px] md:-left-150 -bottom-10">
                    <img class="hidden md:block" src="{{ asset('img/div patas.png') }}" alt="">
                    <img class="md:scale-100 scale-180" src="{{ asset('img/div patas.png') }}" alt="">
                </div>
            </div>
        </div>
        <div class=" w-[100%] h-fit bg-[#ffb178] py-10 md:hidden flex ">
            <div class="w-full relative flex items-center justify-end">
                <div class="flex flex-col py-10">
                    <p class="text-white font-semibold text-sm w-[210px] "> Aqui no <b class="text-[#71d4ff]">Guarda
                            Pet</b>, a
                        Prefeitura de São
                        Cristóvão une
                        tecnologia, dedicação e paixão pelos animais para ajudar
                        você a encontrar o companheiro ideal e encher sua vida
                        de amor. </p>
                </div>
                <img class="md:hidden block absolute left-0" src="{{ asset('img/img 2 mobile.png') }}" alt="">
                <img class="mb-10 mt-10 sm:block hidden"src="{{ asset('img/imagens home.png') }}" alt="">
                <div class="w-full flex absolute md:bottom-[-25px] md:-left-150 -bottom-12">
                    <img class="hidden md:block" src="{{ asset('img/div patas.png') }}" alt="">
                    <img class="md:scale-100 scale-180 rotate-180" src="{{ asset('img/div patas.png') }}"
                        alt="">
                </div>
            </div>
        </div>
        <div class="flex w-[100%]  h-fit md:bg-[#ffb178] bg-[#71d4ff] py-8 md:p-0">
            <div class="flex md:flex-row flex-col lg:w-[1200px] w-full mx-auto justify-between relative items-center">
                <div class="flex flex-col items-center gap-3">
                    <span class="text-white font-bold md:text-4xl md:pb-6 text-center md:text-start"> Quero Adotar um
                        animalzinho </span>
                    <p
                        class="text-white text-base md:text-2xl md:pb-4 md:w-[513px] w-[320px] text-center md:text-start">
                        Procurando um novo amigo para adoção?
                        Clique no botão abaixo e descubra os
                        nossos pets cheios de amor para dar! </p>
                    <a class="w-[290px] h-[60px] md:w-[460px] md:h-[75px] md:m-0 m-2 bg-[#F58634] md:bg-[#0098DA] rounded-[12px] flex items-center justify-center"
                        href="{{ route('adote') }}">
                        <span class="font-bold text-white text-3xl">Procurar</span>
                    </a>
                </div>
                <img class="pt-5 " src="{{ asset('img/adota 1.png') }}" alt="">
                <div class="w-full flex absolute md:bottom-[-25px] md:-left-150 -bottom-10">
                    <img class="hidden md:block md:rotate-180" src="{{ asset('img/div patas.png') }}" alt="">
                    <img class="md:scale-100 scale-180 md:rotate-180 " src="{{ asset('img/div patas.png') }}"
                        alt="">
                </div>
            </div>

        </div>
        <div class="flex w-[100%]  h-fit md:bg-[#71d4ff] bg-[#ffb178]  md:p-0">
            <div class="flex lg:w-[1200px] w-full mx-auto md:justify-between justify-center relative items-center ">
                <div class="flex flex-col md:items-center items-start p-4 md:p-0 md:mt-0 md:mb-0 mt-10 mb-50">
                    <span class="text-white font-bold md:text-4xl md:pb-6 md:w-[500px] text-center w-[350px] text-4xl">
                        Sou cidadão e quero
                        cadastrar um pet
                        para adoção </span>
                    <div class="flex flex-col items-center">
                        <a class="md:w-[445px] md:h-[70px] md:bg-[#F58634] bg-[#0098DA] rounded-[12px] flex items-center justify-center md:mt-0 mt-10 mb-2 md:mb-6 w-[230px] h-[50px]"
                            href="">
                            <span class="font-bold text-white md:text-3xl text-xl">Acessar</span>
                        </a>
                        <p class="text-white md:text-2xl md:pb-4 md:w-[340px] text-center w-[230px] text-base"> Veja
                            aqui como colocar
                            um animalzinho para adoção. </p>
                    </div>
                </div>
                <img class="md:relative absolute md:right-0 -right-4 -bottom-5 md:-bottom-4 "
                    src="{{ asset('img/adota 2.png') }}" alt="">
                <div class="md:flex md:flex-col items-center hidden md:block">
                    <span class="text-white font-bold text-4xl pb-6 text-center"> Conecta São Cristóvão </span>
                    <a class="w-[445px] h-[70px] bg-[#F58634] rounded-[12px] flex items-center justify-center mb-6"
                        href="">
                        <span class="font-bold text-white text-3xl">Acessar</span>
                    </a>
                    <p class="text-white text-2xl w-[325px] text-center"> Veja aqui todos os serviços para o seu
                        pet </p>
                </div>
                <div class="w-full flex absolute md:bottom-[-25px] md:-left-150 -bottom-2">
                    <img class="hidden md:block" src="{{ asset('img/div patas.png') }}" alt="">
                    <img class="md:scale-100 scale-180 md:rotate-0 rotate-180 "
                        src="{{ asset('img/div patas.png') }}" alt="">
                </div>
            </div>
        </div>
        <div class=" flex w-[100%]  h-fit md:hidden  bg-[#71d4ff] p-4 py-16 ">
            <div class="items-center flex flex-col gap-6 relative">
                <span class="text-white font-bold text-4xl text-center"> Conecta São Cristóvão </span>
                <p class="text-white font-light text-xl w-[280px] text-center"> Veja aqui todos os serviços para o seu
                    pet </p>
                <a class="w-[280px] h-[55px] bg-[#F58634] rounded-[12px] flex items-center justify-center"
                    href="">
                    <span class="font-bold text-white text-2xl">Acessar</span>
                </a>
                <div class="w-full flex absolute md:-left-150 -bottom-18">
                    <img class="hidden md:block" src="{{ asset('img/div patas.png') }}" alt="">
                    <img class="scale-180 "
                        src="{{ asset('img/div patas.png') }}" alt="">
                </div>
            </div>
        </div>
        <div class="flex w-[100%] h-fit bg-[#FFB178]">
            <div class="flex lg:w-[1200px] w-full mx-auto justify-center relative items-center">
                <div class="flex flex-col items-center gap-4">
                    <span class="text-white font-bold md:text-4xl md:pb-6 md:pt-10 text-3xl pt-8  "> Sobre o programa</span>
                    <p class="text-white md:text-2xl md:pb-6 md:w-[950px] text-lg w-[380px]"> O <span class="text-[#0098DA] font-bold">Guarda
                            Pet</span> é um jeito especial e uma experiência
                        nova para tornar a adoção de
                        cães e gatos ainda mais simples e prática. Tudo isso por meio da tecnologia unindo
                        o coração de quem deseja receber em casa um novo amigo e quem precisa dessa
                        onda de afeto e cuidados. </p>
                    <p class="text-white md:text-2xl md:pb-6 md:w-[950px] text-lg w-[380px]"> Agora você pode conhecer o bichinho no <span
                            class="text-[#0098DA] font-bold">conforto da sua casa!</span> A gente faz uma
                        <span class="text-[#0098DA] font-bold">chamada de vídeo</span> para mostrar o pet que você se
                        interessou aqui mesmo na nossa
                        galeria.
                    </p>
                    <p class="text-white md:text-2xl md:pb-10 md:w-[950px] text-lg w-[380px] pb-8"> O mais importante é que esses bichinhos recebam um
                        lar acolhedor e que juntos
                        vocês construam muitas histórias lindas para contar!
                    </p>
                </div>
                <div class="w-full flex absolute md:bottom-[-25px] md:-left-150 -bottom-2">
                    <img class="hidden md:block rotate-180" src="{{ asset('img/div patas.png') }}" alt="">
                    <img class="md:scale-100 scale-180 rotate-180 "
                        src="{{ asset('img/div patas.png') }}" alt="">
                </div>
            </div>

        </div>
        <div class="flex flex-col items-center text-5xl pt-16 bg-white">
            <h2 class="text-[#0098DA] font-bold pb-8">Nossas Estrelas</h2>
            <div class="flex md:flex-row  flex-col md:justify-between lg:w-[1200px] w-full items-center gap-6">
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
            <a href="{{ route('adote') }}"alt=''
                class="w-[160px] h-[35px] md:w-[390px] md:h-[60px] bg-[#F58634] flex items-center justify-center rounded-xl m-8">
                <span class="md:text-2xl md:font-bold text-white text-base">Ver todos</span>
            </a>
            <span class="text-4xl font-bold text-[#0098DA] mb-8">Fale Conosco</span>
            <div class="relative w-[380px] h-[190px] md:w-[1200px] md:h-[130px] bg-[#71D4FF80] mb-20 rounded-xl md:rounded-3xl flex md:flex-row flex-col md:justify-between md:items-center md:p-10 items-center justify-center gap-8">
                <div class="flex flex-col">
                    <span class="md:relative absolute text-sm font-bold md:top-0 md:left-0 top-3 left-4 text-[#018bc7]">Nosso Contatos:</span>
                    <span class="text-sm font-bold text-[#018bc7]">Email:<b
                            class="text-[#034C6B]">guardapet@saocristovao.se.gov.br</b>
                    </span>
                </div>
                <a class="w-[315px] h-[55px] bg-[#0098DA] rounded-xl flex items-center justify-center "href=""
                    alt=''>
                    <i class="fa-brands fa-whatsapp text-white text-2xl m-2"></i>
                    <span class="text-white font-medium text-2xl">Whatsapp</span>
                </a>
            </div>
            <footer class="w-full h-28 bg-[#0098DA] flex items-center justify-center">
                <span class="text-white text-3xl">Desenvolvido por <b>DITIN</b></span>
            </footer>
        </div>
    </home>
    <script src="https://kit.fontawesome.com/573e44f26e.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</body>

</html>
