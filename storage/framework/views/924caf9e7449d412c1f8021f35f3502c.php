<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Language" content="pt-BR">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="title" content="Raios Vitais - Centro de Estética Corporal e Facial">
    <meta name="author" content="Raios Vitais">
    <meta name="keywords" content="Raios Vitais, centro de estética, tratamentos corporais, tratamentos faciais, bem-estar, relaxamento, cuidados personalizados, beleza, autoestima, agendamento online">
    <meta name="description" content="Raios Vitais é um centro de estética corporal e facial dedicado a proporcionar bem-estar, relaxamento e cuidados personalizados. Oferecemos uma variedade de tratamentos para realçar sua beleza e autoestima. Agende seu horário e descubra o cuidado que você merece!">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
    <title>Raios Vitais</title>
</head>
<body class="bg-[url(<?php echo e(asset('assets/img/fundo.png')); ?>)] bg-fixed bg-contain font-[Cinzel_Decorative] scroll-smooth min-h-screen">
    <!-- Navbar -->
     <header class="fixed top-0 right-0 left-0 z-50 shadow-md">
        <nav class="flex items-center justify-between relative bg-white w-full py-2 px-6 shadow-md">
            <div class="flex items-center space-x-4 w-full relative">
                <div class="hidden md:flex items-center justify-center ml-4 mt-2 mb-2">
                    <img class="size-auto rounded-full" src="<?php echo e(asset('assets/img/Logo.png')); ?>" alt="Logo Raios Vitais">
                </div>
                <div class="flex flex-col md:hidden text-center w-full relative mr-4 mt-2 mb-2">
                    <h1 class="text-pink-500 text-lg font-semibold">Raios Vitais</h1>
                    <h3 class="text-pink-500 text-sm font-semibold">Centro de Estética Corporal e Facial</h3>
                </div>
                <div class="hidden md:flex flex-col text-center w-full relative mr-4">
                    <h1 class="text-pink-500 text-3xl font-semibold">Raios Vitais</h1>
                    <h3 class="text-pink-500 text-base font-semibold">Centro de Estética Corporal e Facial</h3>
                </div>
            </div>
            <button data-collapse-toggle="navbar-cta" type="button" class="inline-flex lg:hidden items-center justify-center hover:bg-gray-200/50 hover:border-2 border-gray-200/75 rounded-xl p-2 w-10 h-10" aria-controls="navbar-cta" aria-expanded="false">
                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14"/></svg>
            </button>
            <div class="hidden lg:flex lg:justify-end relative w-full mr-4 mt-2 mb-2" id="navbar-cta">
                <ul class="flex flex-col lg:flex-row items-center justify-end gap-2 text-pink-400 text-lg font-semibold border-2 rounded-4xl bg-neutral-secondary-soft lg:space-x-8 rtl:space-x-reverse lg:border-0 lg:bg-neutral-primary p-4 lg:p-0 ml-4 mr-4 mt-2 mb-2">
                    <li><a href="#inicio" class="border-b-2 border-transparent hover:border-pink-600">Início</a></li>
                    <li><a href="#servicos" class="border-b-2 border-transparent hover:border-pink-600">Serviços</a></li>
                    <li><a href="#profissionais" class="border-b-2 border-transparent hover:border-pink-600">Profissionais</a></li>
                    <li><a href="#contato" class="border-b-2 border-transparent hover:border-pink-600">Contato</a></li>
                    <li>
                        <a href="https://wa.me/+5511992179843" class="flex items-center justify-center text-center text-white bg-pink-500/80 hover:bg-pink-500 rounded-4xl md:rounded-full shadow-md px-4 py-2">
                            <img class="hidden lg:flex size-7 mr-2" src="<?php echo e(asset('assets/img/calendario.png')); ?>" alt="Ícone de calendário para agendamento">
                            Agendar pelo WhatsApp
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
     </header>
    <main class="flex flex-col items-center justify-center w-full pt-28 lg:pt-36" id="inicio">
        <!-- Carrossel -->
        <div id="default-carousel" class="relative w-full shadow-xl mb-6" data-carousel="slide" data-carousel-interval="6000">
            <!-- Carousel wrapper -->
            <div class="relative h-73 lg:h-110 overflow-hidden bg-linear-to-r from-rose-400/50 via-rose-100/50 to-white/50">
                <!-- Item 1 -->
                <article class="hidden duration-1000 ease-in-out" data-carousel-item="active">
                    <div class="flex flex-row items-center justify-center h-full w-full">
                        <div class="flex flex-col w-full lg:w-1/2 items-center justify-center text-center">
                            <h3 class="text-lg lg:text-xl text-pink-500 font-bold">Bem-estar e estética para o seu dia a dia</h3>
                            <p class="text-medium lg:text-lg text-rose-500 font-semibold leading-relaxed w-9/10 lg:w-8/10 mt-2">
                                Aqui você encontra tratamentos corporais e faciais que ajudam a relaxar, aliviar o estresse e renovar as energias do dia a dia.
                                Cada atendimento é feito com carinho e atenção, para que você se sinta bem, confiante e ainda mais bonita.
                            </p>
                            <button class="hidden md:flex text-white font-semibold bg-rose-400 hover:bg-rose-500 rounded-full shadow-md py-2 px-4 mt-4">
                                <a href="https://wa.me/+5511992179843">Saiba mais</a>
                            </button>
                        </div>
                        <div class="hidden md:flex w-full lg:w-1/2 justify-center">
                            <img class="max-h-full w-auto object-contain" src="<?php echo e(asset('assets/img/slide1.jpg')); ?>" alt="Mulher relaxando durante um tratamento facial" loading="lazy"/>
                        </div>
                    </div>
                </article>
                <!-- Item 2 -->
                <article class="hidden duration-1000 ease-in-out" data-carousel-item>
                    <div class="flex flex-row items-center justify-center h-full w-full">
                        <div class="flex flex-col w-full lg:w-1/2 items-center justify-center text-center">
                            <h3 class="text-lg lg:text-xl text-pink-500 font-bold">Por que escolher a Raios Vitais?</h3>
                            <p class="text-medium lg:text-lg text-rose-500 font-semibold leading-relaxed w-9/10 lg:w-8/10 mt-2">
                                Cuidar de si mesma vai além da estética — é um momento de pausa, renovação e bem-estar.
                                Na Raios Vitais, cada detalhe é pensado para proporcionar uma experiência acolhedora, relaxante e transformadora.
                            </p>
                            <button class="hidden md:flex text-white font-semibold bg-rose-400 hover:bg-rose-500 rounded-full shadow-md py-2 px-4 mt-4">
                                <a href="https://wa.me/+5511992179843">Saiba mais</a>
                            </button>
                        </div>
                        <div class="hidden md:flex w-full lg:w-1/2 justify-center">
                            <img class="max-h-full w-auto object-contain" src="<?php echo e(asset('assets/img/slide2.jpg')); ?>" alt="Profissional aplicando tratamento estético em cliente" loading="lazy"/>
                        </div>
                    </div>
                </article>
                <!-- Item 3 -->
                <article class="hidden duration-1000 ease-in-out" data-carousel-item>
                    <div class="flex flex-row items-center justify-center h-full w-full">
                        <div class="flex flex-col w-full lg:w-1/2 items-center justify-center text-center">
                            <h3 class="text-lg lg:text-xl text-pink-500 font-bold">Cuidar de você é nossa prioridade!</h3>
                            <p class="text-medium lg:text-lg text-rose-500 font-semibold leading-relaxed w-9/10 lg:w-8/10 mt-2">
                                Na Raios Vitais, acreditamos que cada pessoa merece um cuidado especial.
                                Nossos profissionais estão sempre prontos para ouvir suas necessidades e oferecer o melhor tratamento.
                            </p>
                            <button class="hidden md:flex text-white font-semibold bg-rose-400 hover:bg-rose-500 rounded-full shadow-md py-2 px-4 mt-4">
                                <a href="https://wa.me/+5511992179843">Saiba mais</a>
                            </button>
                        </div>
                        <div class="hidden md:flex w-full lg:w-1/2 justify-center">
                            <img class="max-h-full w-auto object-contain" src="<?php echo e(asset('assets/img/slide3.jpg')); ?>" alt="Mulher sorrindo após um tratamento de beleza" loading="lazy"/>
                        </div>
                    </div>
                </article>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gray-800/30 hover:bg-gray-950/50">
                    <svg class="w-5 h-5 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m15 19-7-7 7-7"/></svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gray-800/30 hover:bg-gray-950/50">
                    <svg class="w-5 h-5 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7"/></svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
        <!-- Serviços -->
        <section class="flex flex-col items-center justify-center bg-linear-to-r from-rose-400/50 via-rose-300/50 to-rose-100/50 w-full mt-6 mb-2" id="servicos">
            <div class="flex flex-col items-center justify-center rounded-lg w-full xl:w-5/6 mt-2 mb-2">
                <h2 class="text-3xl font-extrabold text-pink-600 text-center border-b-3 mt-8">Serviços</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 text-center gap-8 py-2 px-4 mt-6 w-9/10">
                    <article class="flex-1 bg-white/50 rounded-lg shadow-md p-4">
                        <h3 class="text-xl text-center font-bold text-pink-500 h-auto">Relaxamento nas Costas</h3>
                        <img class="size-auto rounded-lg mt-2" src="<?php echo e(asset('assets/img/servico1.jpg')); ?>" alt="Pessoa recebendo massagem relaxante nas costas" loading="lazy">
                        <p class="text-rose-500 font-semibold mt-2">
                            Alivia tensões musculares e promove uma sensação profunda de relaxamento, 
                            ideal para quem sofre com estresse e dores na região.
                        </p>
                    </article>
                    <article class="flex-1 bg-white/50 rounded-lg shadow-md p-4">
                        <h3 class="text-xl text-center font-bold text-pink-500 h-auto">Tratamento Facial</h3>
                        <img class="size-auto rounded-lg mt-2" src="<?php echo e(asset('assets/img/servico2.jpeg')); ?>" alt="Tratamento facial com aplicação de máscara" loading="lazy">
                        <p class="text-rose-500 font-semibold mt-2">
                            Cuida da pele do rosto, ajudando na hidratação, revitalização 
                            e proporcionando uma aparência mais saudável e iluminada.
                        </p>
                    </article>
                    <article class="flex-1 bg-white/50 rounded-lg shadow-md p-4">
                        <h3 class="text-xl text-center font-bold text-pink-500 h-auto">Spa dos Pés</h3>
                        <img class="size-auto rounded-lg mt-2" src="<?php echo e(asset('assets/img/servico3.jpeg')); ?>" alt="Pés recebendo tratamento de spa" loading="lazy">
                        <p class="text-rose-500 font-semibold mt-2">
                            Proporciona descanso e bem-estar, aliviando o cansaço 
                            e deixando os pés mais leves, macios e relaxados.
                        </p>
                    </article>
                    <article class="flex-1 bg-white/50 rounded-lg shadow-md p-4">
                        <h3 class="text-xl text-center font-bold text-pink-500 h-auto">Massagem Relaxante</h3>
                        <img class="size-auto rounded-lg mt-2" src="<?php echo e(asset('assets/img/slide1.jpg')); ?>" alt="Pessoa recebendo massagem relaxante" loading="lazy">
                        <p class="text-rose-500 font-semibold mt-2">
                            Proporciona alívio para tensões e estresse, promovendo um estado de relaxamento profundo.
                        </p>
                    </article>
                    <article class="flex-1 bg-white/50 rounded-lg shadow-md p-4">
                        <h3 class="text-xl text-center font-bold text-pink-500 h-auto">Hidratação Corporal</h3>
                        <img class="size-auto rounded-lg mt-2" src="<?php echo e(asset('assets/img/slide2.jpg')); ?>" alt="Pele hidratada e suave" loading="lazy">
                        <p class="text-rose-500 font-semibold mt-2">
                            Nutre e hidrata a pele do corpo, deixando-a mais macia, suave e revitalizada.
                        </p>
                    </article>
                    <article class="flex-1 bg-white/50 rounded-lg shadow-md p-4">
                        <h3 class="text-xl text-center font-bold text-pink-500 h-auto">Limpeza de Pele</h3>
                        <img class="size-auto rounded-lg mt-2" src="<?php echo e(asset('assets/img/slide3.jpg')); ?>" alt="Limpeza de pele profunda" loading="lazy">
                        <p class="text-rose-500 font-semibold mt-2">
                            Remove impurezas e células mortas, ajudando a desobstruir os poros e melhorar a textura da pele.
                        </p>
                    </article>
                </div>
                    <a class="bg-rose-400 hover:bg-rose-500 duration-150 text-white text-center font-semibold rounded-full w-xs py-2 px-4 mt-8 mb-2" href="https://wa.me/+5511992179843">
                        <button class="text-lg cursor-pointer">Agendar um horário</button>
                    </a>
            </div>
            <!-- Profissionais -->
             <div class="flex flex-col items-center justify-center w-full mt-2 mb-2" id="profissionais">
                <h2 class="text-3xl font-extrabold text-pink-600 text-center border-b-3 mt-4">Nossos Profissionais</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 text-center gap-8 py-2 px-4 mt-6 w-9/10">
                    <article class="flex flex-col items-center bg-white/50 rounded-lg shadow-md p-4">
                        <img class="size-7/10 rounded-full border-4 border-red-300 mt-2" src="<?php echo e(asset('assets/img/profissional1.jpg')); ?>" alt="Foto da profissional Fernanda, pedóloga" loading="lazy">
                        <h4 class="text-xl text-center font-bold text-pink-500 bg-red-300/30 border-2 border-red-200 rounded-4xl w-full mt-4">Fernanda</h4>
                        <p class="text-rose-500 font-semibold border-2 border-red-200 bg-red-300/30 rounded-xl mt-4 p-2">
                            Pedóloga experiente, especializada em cuidados com os pés. Atua com foco na saúde,
                            conforto e bem-estar, oferecendo atendimentos que unem técnica e atenção.
                        </p>
                    </article>
                    <article class="flex flex-col items-center bg-white/50 rounded-lg shadow-md p-4">
                        <img class="size-7/10 rounded-full border-4 border-red-300 mt-2" src="<?php echo e(asset('assets/img/profissional2.jpg')); ?>" alt="Foto da profissional Alice, esteticista" loading="lazy">
                        <h4 class="text-xl text-center font-bold text-pink-500 bg-red-300/30 border-2 border-red-200 rounded-4xl w-full mt-4">Alice</h4>
                        <p class="text-rose-500 font-semibold border-2 border-red-200 bg-red-300/30 rounded-2xl mt-4 p-2">
                            Esteticista dedicada, apaixonada por realçar a beleza e a autoestima. Realiza
                            procedimentos faciais e corporais com foco em qualidade e resultados visíveis.
                        </p>
                    </article>
                    <article class="flex flex-col items-center bg-white/50 rounded-lg shadow-md p-4">
                        <img class="size-7/10 rounded-full border-4 border-red-300 mt-2" src="<?php echo e(asset('assets/img/profissional3.jpg')); ?>" alt="Foto da profissional Debora, massagista" loading="lazy">
                        <h4 class="text-xl text-center font-bold text-pink-500 bg-red-300/30 border-2 border-red-200 rounded-4xl w-full mt-4">Debora</h4>
                        <p class="text-rose-500 font-semibold border-2 border-red-200 bg-red-300/30 rounded-2xl mt-4 p-2">
                            Massagista, especialista em relaxamento e alívio de tensões musculares. 
                            Seus atendimentos combinam técnica e sensibilidade, promovendo bem-estar físico e mental.
                        </p>
                    </article>
                </div>
             </div>
        </section>
    </main>
    <!-- footer -->
    <footer class="shadow-md w-full" id="contato">
        <div class="grid grid-cols-1 lg:grid-cols-2 items-center justify-center w-full mt-8 mb-2">
            <div class="flex flex-col items-center justify-center bg-linear-to-r from-rose-400/50 via-rose-300/50 to-rose-100/50 w-full h-full mt-2 mb-2">
                <h2 class="text-3xl font-extrabold text-pink-600 text-center border-b-3">Contato</h2>
                <div class="flex items-start justify-center w-full md:w-2/3 gap-4 mt-4 mb-2">
                    <aside class="hidden md:flex flex-col items-start justify-start">
                        <img class="size-20 inline-block mr-2" src="<?php echo e(asset('assets/img/telefone.png')); ?>" alt="Ícone de telefone" loading="lazy">
                        <img class="size-20 inline-block mr-4" src="<?php echo e(asset('assets/img/email.png')); ?>" alt="Ícone de e-mail" loading="lazy">
                        <img class="size-20 inline-block mr-4" src="<?php echo e(asset('assets/img/gps.png')); ?>" alt="Ícone de localização" loading="lazy">
                    </aside>
                    <aside class="hidden md:flex flex-col items-start justify-center gap-y-4 md:gap-10 pl-2 mt-2">
                        <p class="text-rose-500 text-xl">(11) 2205-5026<br> (11) 99217-9843</p>
                        <p class="text-rose-500 text-xl">nardja_sol@hotmail.com</p>
                        <p class="text-rose-500 text-xl mt-1">Estrada de Itaquera Guaianazes 461 f,<br> São Paulo, SP, Brazil, 08246000</p>
                    </aside>
                    <!-- copia para mobile -->
                    <aside class="flex flex-col items-center md:hidden justify-center gap-y-4 md:gap-10 pl-2 mt-2">
                        <h3 class="flex text-rose-500 text-xl font-bold">Telefone:</h3>
                        <p class="text-rose-500 text-lg">(11) 2205-5026<br> (11) 99217-9843</p>
                        <h3 class="flex text-rose-500 text-xl font-bold">E-mail:</h3>
                        <p class="text-rose-500 text-lg">nardja_sol@hotmail.com</p>
                        <h3 class="flex text-rose-500 text-xl font-bold">Endereço:</h3>
                        <p class="text-rose-500 text-lg">Estrada de Itaquera Guaianazes 461 f,<br> São Paulo, SP, Brazil, 08246000</p>
                    </aside>
                </div>
                <div class="flex items-center justify-center text-center gap-12 px-4 w-full">
                    <a class="flex items-center justify-center text-center" href="https://www.instagram.com/raiosvitais/">
                        <img class="size-20 inline-block" src="<?php echo e(asset('assets/img/instagram.png')); ?>" alt="Ícone do Instagram" loading="lazy">
                        <span class="hidden lg:flex text-rose-500 text-xl">Instagram</span>
                    </a>
                    <a class="flex items-center justify-center text-center" href="https://wa.me/+5511992179843">
                        <img class="size-20 inline-block" src="<?php echo e(asset('assets/img/whatsapp.png')); ?>" alt="Ícone do WhatsApp" loading="lazy">
                        <span class="hidden lg:flex text-rose-500 text-xl">WhatsApp</span>
                    </a>
                    <a class="flex items-center justify-center text-center" href="https://www.facebook.com/raiosvitais">
                        <img class="size-20 inline-block" src="<?php echo e(asset('assets/img/facebook.png')); ?>" alt="Ícone do Facebook" loading="lazy">
                        <span class="hidden lg:flex text-rose-500 text-xl">Facebook</span>
                    </a>
                </div>
                <div class="flex items-center justify-center text-center mt-4">
                    <p class="text-rose-500 text-lg md:text-xl"><strong>Horário de Atendimento:</strong><br>Segunda a Sexta: 9:00 às 19:00 | Sábado: 9:00 às 17:00 | Domingo: Fechado</p>
                </div>
            </div>
            <div class="hidden lg:flex items-center justify-end">
                <img class="size-auto" src="<?php echo e(asset('assets/img/clinica.jpg')); ?>" alt="Fachada da clínica Raios Vitais" loading="lazy">
            </div>
        </div>
        <div class="flex items-center justify-center">
            <p class="text-rose-600 text-center text-sm md:text-md mt-2">
                <strong>
                    &copy; 2026 Raios Vitais. Todos os direitos reservados.
                </strong>
            </p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js" defer></script>
</body>
</html>
<?php /**PATH D:\2026\Fatec\DesenvolvimentoWeb\PacoteVitalicio\RaiosVitaisCinco\RaiosVitaisLaravel\resources\views/home.blade.php ENDPATH**/ ?>