<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Raios Vitais</title>
</head>
<body class="bg-contain scroll-smooth min-h-screen bg-fixed bg-repeat bg-center" style="background-image: url('<?php echo e(asset('assets/img/fundo.png')); ?>')">
    <!-- Navbar -->
     <header class="fixed top-0 right-0 left-0 z-50 shadow-md">
        <nav class="flex items-center justify-between relative bg-white w-full py-4 px-6 shadow-md">
            <div class="flex items-center space-x-4 w-full relative">
                <div class="flex items-center justify-center ml-4 mt-2 mb-2">
                    <img class="size-auto rounded-full" src="<?php echo e(asset('assets/img/Logo.png')); ?>" alt="Logo Raios Vitais">
                </div>
                <div class="text-center w-full relative mr-4">
                    <h1 class="text-pink-500 text-3xl font-semibold">Raios Vitais</h1>
                    <h3 class="text-pink-500 font-semibold">Centro de Estética Corporal e Facial</h3>
                </div>
            </div>
            <div class="justify-end relative w-full mr-4 mt-2 mb-2">
                <ul class="flex items-center justify-end space-x-6 text-pink-400 hover:text-pink-600 text-lg font-semibold mr-4 mt-2 mb-2">
                    <li><a href="#inicio" class="border-b-2 border-transparent hover:border-pink-600">Início</a></li>
                    <li><a href="#servicos" class="border-b-2 border-transparent hover:border-pink-600">Serviços</a></li>
                    <li><a href="#profissionais" class="border-b-2 border-transparent hover:border-pink-600">Profissionais</a></li>
                    <li>
                        <button class="flex items-center justify-center cursor-pointer text-white bg-pink-500/80 hover:bg-pink-500 rounded-full shadow-md px-4 py-2">
                            <a href="https://wa.me/+5511992179843" class="flex items-center justify-center w-full h-full">
                                <img class="size-7 mr-2" src="<?php echo e(asset('assets/img/calendario.png')); ?>" alt="Icone de calendario">
                                Agendar pelo WhatsApp
                            </a>
                        </button>
                    </li>
                </ul>
            </div>
        </nav>
     </header>
    <main class="pt-32 flex flex-col items-center justify-center w-full" id="inicio">
        <!-- Carrossel -->
        <div class="flex items-end relative w-full h-auto overflow-hidden shadow-md mb-6">
            <div class="flex overflow-x-auto bg-linear-to-r from-rose-400/50 via-white/50 gap-6 snap-x snap-mandatory scroll-smooth scrollbar-hide items-center md:flex-row md:gap-4 w-full h-full transition-transform duration-500 ease-in-out relative">
                <article class="flex md:flex-row shrink-0 lg:gap-6 gap-4 w-full items-center text-center relative">
                    <div class="flex flex-col w-1/2 items-center justify-center relative">
                        <h3 class="text-xl text-pink-500 font-bold">Bem-estar e estética para o seu dia a dia</h3>
                        <p class="text-lg text-rose-500 font-semibold leading-relaxed w-8/10 mt-2">
                            Aqui você encontra tratamentos corporais e faciais que ajudam a relaxar, aliviar o estresse e renovar as energias do dia a dia.
                            Cada atendimento é feito com carinho e atenção, para que você se sinta bem, confiante e ainda mais bonita.
                        </p>
                        <button class="text-white font-semibold bg-rose-400 hover:bg-rose-500 rounded-full shadow-md py-2 px-4 mt-4">Saiba mais</button>
                    </div>
                    <div class="flex w-1/2 relative">
                        <img class="size-auto" src="<?php echo e(asset('assets/img/slide1.jpg')); ?>" alt="Imagem de slide 1"/>
                    </div>
                </article>
                <article class="flex md:flex-row shrink-0 md:gap-4 w-full items-center text-center relative">
                    <div class="flex flex-col w-1/2 items-center justify-center relative">
                        <h3 class="text-xl text-pink-500 font-bold">Por que escolher a Raios Vitais?</h3>
                        <p class="text-lg text-rose-500 font-semibold leading-relaxed w-8/10 mt-2">
                            Cuidar de si mesma vai além da estética — é um momento de pausa, renovação e bem-estar.
                            Na Raios Vitais, cada detalhe é pensado para proporcionar uma experiência acolhedora, relaxante e transformadora.
                        </p>
                        <button class="text-white font-semibold bg-rose-400 hover:bg-rose-500 rounded-full shadow-md py-2 px-4 mt-4">Saiba mais</button>
                    </div>
                    <div class="flex w-1/2 relative">
                        <img class="size-auto" src="<?php echo e(asset('assets/img/slide2.jpg')); ?>" alt="Imagem de slide 2"/>
                    </div>
                </article> 
                <article class="flex md:flex-row shrink-0 md:gap-4 w-full items-center text-center relative">
                    <div class="flex flex-col w-1/2 items-center justify-center relative">
                        <h3 class="text-xl text-pink-500 font-bold">Cuidar de você é nossa prioridade!</h3>
                        <p class="text-lg text-rose-500 font-semibold leading-relaxed w-8/10 mt-2">
                            Na Raios Vitais, acreditamos que cada pessoa merece um cuidado especial.
                            Nossos profissionais estão sempre prontos para ouvir suas necessidades e oferecer o melhor tratamento.
                        </p>
                        <button class="text-white font-semibold bg-rose-400 hover:bg-rose-500 rounded-full shadow-md py-2 px-4 mt-4">Saiba mais</button>
                    </div>
                    <div class="flex w-1/2 relative">
                        <img class="size-auto" src="<?php echo e(asset('assets/img/slide3.jpg')); ?>" alt="Imagem de slide 3"/>
                    </div>
                </article>
            </div>
            <!-- Botões de Navegação -->
            <button class="ml-4 size-8 absolute left-0 top-1/2 -translate-y-1/2 hover:bg-rose-300 hover:rounded-full">
                &#10094;
            </button>
            <button class="mr-4 size-8 absolute right-0 top-1/2 -translate-y-1/2 hover:bg-rose-300 hover:rounded-full">
                &#10095;
            </button>
        </div>
        <!-- Serviços -->
        <section class="flex flex-col items-center justify-center bg-linear-to-r from-rose-400/50 via-rose-300/50 to-rose-100/50 w-full mt-6 mb-2" id="servicos">
            <div class="flex flex-col items-center justify-center rounded-lg w-full xl:w-5/6 mt-2 mb-2">
                <h2 class="text-3xl font-extrabold text-pink-600 text-center mt-8">Serviços</h2>
                <div class="grid grid-cols-2 lg:grid-cols-3 text-center gap-6 py-2 px-4 mt-6 w-full">
                    <article class="flex-1 bg-white/50 rounded-lg shadow-md p-4">
                        <h3 class="text-xl text-center font-bold text-pink-500 h-auto">Relaxamento nas Costas</h3>
                        <img src="<?php echo e(asset('assets/img/servico1.jpg')); ?>" alt="Relaxamento nas Costas" class="size-auto rounded-lg mt-2">
                        <p class="text-rose-500 font-semibold mt-2">
                            Alivia tensões musculares e promove uma sensação profunda de relaxamento, 
                            ideal para quem sofre com estresse e dores na região.
                        </p>
                    </article>
                    <article class="flex-1 bg-white/50 rounded-lg shadow-md p-4">
                        <h3 class="text-xl text-center font-bold text-pink-500 h-auto">Tratamento Facial</h3>
                        <img src="<?php echo e(asset('assets/img/servico2.jpeg')); ?>" alt="Tratamento Facial" class="size-auto rounded-lg mt-2">
                        <p class="text-rose-500 font-semibold mt-2">
                            Cuida da pele do rosto, ajudando na hidratação, revitalização 
                            e proporcionando uma aparência mais saudável e iluminada.
                        </p>
                    </article>
                    <article class="flex-1 bg-white/50 rounded-lg shadow-md p-4">
                        <h3 class="text-xl text-center font-bold text-pink-500 h-auto">Spa dos Pés</h3>
                        <img src="<?php echo e(asset('assets/img/servico3.jpeg')); ?>" alt="Spa dos Pés" class="size-auto rounded-lg mt-2">
                        <p class="text-rose-500 font-semibold mt-2">
                            Proporciona descanso e bem-estar, aliviando o cansaço 
                            e deixando os pés mais leves, macios e relaxados.
                        </p>
                    </article>
                    <article class="flex-1 bg-white/50 rounded-lg shadow-md p-4">
                        <h3 class="text-xl text-center font-bold text-pink-500 h-auto">Massagem Relaxante</h3>
                        <img src="<?php echo e(asset('assets/img/slide1.jpg')); ?>" alt="Massagem Relaxante" class="size-auto rounded-lg mt-2">
                        <p class="text-rose-500 font-semibold mt-2">
                            Proporciona alívio para tensões e estresse, promovendo um estado de relaxamento profundo.
                        </p>
                    </article>
                    <article class="flex-1 bg-white/50 rounded-lg shadow-md p-4">
                        <h3 class="text-xl text-center font-bold text-pink-500 h-auto">Hidratação Corporal</h3>
                        <img src="<?php echo e(asset('assets/img/slide2.jpg')); ?>" alt="Hidratação Corporal" class="size-auto rounded-lg mt-2">
                        <p class="text-rose-500 font-semibold mt-2">
                            Nutre e hidrata a pele do corpo, deixando-a mais macia, suave e revitalizada.
                        </p>
                    </article>
                    <article class="flex-1 bg-white/50 rounded-lg shadow-md p-4">
                        <h3 class="text-xl text-center font-bold text-pink-500 h-auto">Limpeza de Pele</h3>
                        <img src="<?php echo e(asset('assets/img/slide3.jpg')); ?>" alt="Limpeza de Pele" class="size-auto rounded-lg mt-2">
                        <p class="text-rose-500 font-semibold mt-2">
                            Remove impurezas e células mortas, ajudando a desobstruir os poros e melhorar a textura da pele.
                        </p>
                    </article>
                </div>
                    <a href="https://wa.me/+5511992179843" class="bg-rose-400 hover:bg-rose-500 duration-150 text-white text-center font-semibold rounded-full w-xs py-2 px-4 mt-6 mb-8">
                        <button class="cursor-pointer">Agendar um horário</button>
                    </a>
            </div>
            <!-- Profissionais -->
             <div class="flex flex-col items-center justify-center rounded-lg w-full xl:w-5/6 mt-2 mb-2" id="profissionais">
                <h2 class="text-3xl font-extrabold text-pink-600 text-center mt-4">Nossos Profissionais</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 text-center gap-6 py-2 px-4 mt-6 w-full">
                    <article class="flex flex-col items-center bg-white/50 rounded-lg shadow-md p-4">
                        <h4 class="text-xl text-center font-bold text-pink-500">Fernanda</h4>
                        <img src="<?php echo e(asset('assets/img/profissional1.jpg')); ?>" alt="Profissional 1" class="size-2/3 rounded-full mt-2">
                        <p class="text-rose-500 font-semibold mt-2">
                            Pedóloga experiente, especializada em cuidados com os pés. Atua com foco na saúde,
                            conforto e bem-estar, oferecendo atendimentos que unem técnica e atenção.
                        </p>
                    </article>
                    <article class="flex flex-col items-center bg-white/50 rounded-lg shadow-md p-4">
                        <h4 class="text-xl text-center font-bold text-pink-500">Alice</h4>
                        <img src="<?php echo e(asset('assets/img/profissional2.jpg')); ?>" alt="Profissional 2" class="size-2/3 rounded-full mt-2">
                        <p class="text-rose-500 font-semibold mt-2">
                            Esteticista dedicada, apaixonada por realçar a beleza e a autoestima. Realiza 
                            procedimentos faciais e corporais com foco em qualidade e resultados visíveis.
                        </p>
                    </article>
                    <article class="flex flex-col items-center bg-white/50 rounded-lg shadow-md p-4">
                        <h4 class="text-xl text-center font-bold text-pink-500">Debora</h4>
                        <img src="<?php echo e(asset('assets/img/profissional3.jpg')); ?>" alt="Profissional 3" class="size-2/3 rounded-full mt-2">
                        <p class="text-rose-500 font-semibold mt-2">
                            Massagista, especialista em relaxamento e alívio de tensões musculares. 
                            Seus atendimentos combinam técnica e sensibilidade, promovendo bem-estar físico e mental.
                        </p>
                    </article>
                </div>
             </div>
        </section>
    </main>
    <!-- footer -->
    <footer class="shadow-md w-full">
        <div class="grid grid-cols-2 items-center justify-center w-full mt-6 mb-2">
            <div class="flex flex-col items-center justify-center bg-linear-to-r from-rose-400/50 via-rose-300/50 to-rose-100/50 w-full h-full mt-2 mb-2">
                <h2 class="text-3xl font-extrabold text-pink-600 text-center mt-4 mb-4">Contato</h2>
                <div class="flex items-start justify-center w-2/3 gap-4 mb-2">
                    <aside class="flex flex-col items-start justify-start">
                        <img src="<?php echo e(asset('assets/img/telefone.png')); ?>" alt="icone de telefone" class="size-20 inline-block mr-2">
                        <img src="<?php echo e(asset('assets/img/email.png')); ?>" alt="icone de email" class="size-20 inline-block mr-4">
                        <img src="<?php echo e(asset('assets/img/gps.png')); ?>" alt="icone de endereco" class="size-20 inline-block mr-4">
                    </aside>
                    <aside class="flex flex-col items-start justify-center gap-10 pl-2 mt-2">
                        <p class="text-rose-500 text-xl">(11) 2205-5026<br> (11) 99217-9843</p>
                        <p class="text-rose-500 text-xl">nardja_sol@hotmail.com</p>
                        <p class="text-rose-500 text-xl mt-1">Estrada de Itaquera Guaianazes 461 f,<br> São Paulo, SP, Brazil, 08246000</p>
                    </aside>
                </div>
                <div class="flex items-center justify-center text-center gap-12 px-4 w-full">
                    <a href="https://www.instagram.com/raiosvitais/" class="flex items-center justify-center text-center">
                        <img src="<?php echo e(asset('assets/img/instagram.png')); ?>" alt="icone de instagram" class="size-20 inline-block">
                        <span class="text-rose-500 text-xl">Instagram</span>
                    </a>
                    <a href="https://wa.me/+5511992179843" class="flex items-center justify-center text-center">
                        <img src="<?php echo e(asset('assets/img/whatsapp.png')); ?>" alt="icone de whatsapp" class="size-20 inline-block">
                        <span class="text-rose-500 text-xl">WhatsApp</span>
                    </a>
                    <a href="https://www.facebook.com/raiosvitais" class="flex items-center justify-center text-center">
                        <img src="<?php echo e(asset('assets/img/facebook.png')); ?>" alt="icone de facebook" class="size-20 inline-block">
                        <span class="text-rose-500 text-xl">Facebook</span>
                    </a>
                </div>
                <div class="flex items-center justify-center text-center mt-4">
                    <p class="text-rose-500 text-xl"><strong>Horário de Atendimento:</strong><br>Segunda a Sexta: 9:00 às 19:00 | Sábado: 9:00 às 17:00 | Domingo: Fechado</p>
                </div>
            </div>
            <div class="flex items-center justify-end">
                <img src="<?php echo e(asset('assets/img/clinica.jpg')); ?>" alt="Fachada Raios Vitais" class="size-auto">
            </div>
        </div>
        <div class="flex items-center justify-center">
            <p class="text-rose-600 text-center text-md mt-2">
                <strong>
                    &copy; 2026 Raios Vitais. Todos os direitos reservados.
                </strong>
            </p>
        </div>
    </footer>
</body>
</html><?php /**PATH D:\2026\Fatec\DesenvolvimentoWeb\PacoteVitalicio\RaiosVitaisQuatro\RaiosVitaisLaravel\resources\views/home.blade.php ENDPATH**/ ?>