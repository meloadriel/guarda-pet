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
                <img class="absolute bottom-[-25px] rotate-180" src="{{ asset('img/div patas.png') }}" alt="">
            </div>

        </div>
        <div class="flex w-[100%] h-[100vh] bg-[#71D4FF]">
            <div class="flex w-[1200px] mx-auto justify-between relative items-center">
                <div class="flex flex-col items-center">
                    <span class="text-white font-bold text-4xl pb-6 w-[500px] text-center"> Sou cidadão e quero cadastrar um pet
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
                <img class="absolute bottom-[-25px] " src="{{ asset('img/div patas.png') }}" alt="">
            </div>

        </div>
    </home>

    <script src="https://kit.fontawesome.com/573e44f26e.js" crossorigin="anonymous"></script>
</body>

</html>
