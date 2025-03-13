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
    <header class="w-[100%] h-24 bg-[#F58634] flex  relative overflow-hidden">
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
    <home class="bg-[#71D4FF] h-[100vh] flex">
        <div class="flex w-[1200px] mx-auto items-center justify-between">
            <div class="flex flex-col pb-45">
                <span class="text-white font-extrabold text-9xl pb-16"> Guarda Pet <i class="fa-solid fa-paw text-[#F58634] text-6xl"></i></span>
                <p class="text-white font-semibold text-2xl pb-4"> Que tal compartilhar amor e cuidados? </p>
                <p class="text-white font-semibold text-2xl w-[760px] pb-4"> Se você ama animais e quer adotar um cachorrinho ou
                    gatinho, está no lugar certo! </p>
                <p class="text-white font-semibold text-2xl w-[760px]"> Aqui no Guarda Pet, a Prefeitura de São Cristóvão une
                    tecnologia, dedicação e paixão pelos animais para ajudar
                    você a encontrar o companheiro ideal e encher sua vida
                    de amor. </p>
            </div>
            <img class="mb-30"src="{{asset('img/imagens home.png')}}" alt="">
        </div>
    </home>


    <script src="https://kit.fontawesome.com/573e44f26e.js" crossorigin="anonymous"></script>
</body>

</html>
