<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Michel's Portfolio</title>
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>tailwind.config = { theme: { fontFamily: { sans: ['Instrument Sans', 'ui-sans-serif', 'system-ui'], }, } }</script>
    <style>
      /* Animated "tech" background overlay */
      body {
        background: linear-gradient(135deg, #161619 0%, #220000 100%) fixed;
      }
      .glow {
        box-shadow: 0 0 24px 4px #ff1a1a55, 0 2px 8px 1px #fa222255;
      }
      .neon {
        text-shadow: 0 0 8px #ff2d55, 0 0 2px #ff5454;
      }
    </style>
</head>
<body class="min-h-screen font-sans text-white flex flex-col">
    <!-- Animated red lines background (SVG or divs) -->
    <div class="fixed inset-0 pointer-events-none z-0">
        <svg width="100%" height="100%" class="w-full h-full absolute" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <linearGradient id="redglow" x1="0" y1="0" x2="100%" y2="100%">
                    <stop stop-color="#4B0000"/>
                    <stop offset="1" stop-color="#000" stop-opacity="0.2"/>
                </linearGradient>
            </defs>
            <rect x="0" y="0" width="100%" height="100%" fill="url(#redglow)"/>
            <line x1="10%" y1="0" x2="10%" y2="100%" stroke="#ff2d55" stroke-width="2" opacity="0.1" />
            <line x1="80%" y1="0" x2="80%" y2="100%" stroke="#ff2d55" stroke-width="2" opacity="0.18" />
            <line x1="60%" y1="0" x2="20%" y2="100%" stroke="#771111" stroke-width="1" opacity="0.15" />
            <line x1="0" y1="60%" x2="100%" y2="80%" stroke="#ff2d55" stroke-width="2" opacity="0.15" />
        </svg>
    </div>

    <!-- Navbar -->
    <nav class="relative z-10 backdrop-blur-md bg-black/60 border-b border-red-800 shadow-lg text-white p-5 flex justify-between items-center uppercase tracking-wide select-none">
        <div class="flex items-center gap-3">
            <span class="inline-flex bg-gradient-to-br from-[#ff1a1a] to-[#700909] neon rounded-lg w-11 h-11 items-center justify-center text-xl font-bold glow">M</span>
            <span class="font-extrabold text-2xl tracking-wider ml-1 neon">Michel</span>
            
        </div>
        <ul class="flex gap-8 font-semibold text-md">
            <li><a href="#about" class="hover:text-red-400 transition">About</a></li>
            <li><a href="#projects" class="hover:text-red-400 transition">Projects</a></li>
            <li><a href="#resume" class="hover:text-red-400 transition">Resume</a></li>
            <li><a href="#contact" class="hover:text-red-400 transition">Contact</a></li>
        </ul>
    </nav>
    
    <!-- Hero -->
    <header class="container mx-auto px-4 pt-16 pb-12 text-center flex flex-col items-center gap-6 z-10">
        <!-- <img src="https://i.pravatar.cc/256?u=michel" alt="Profile" class="w-40 h-40 rounded-full border-4 border-red-800 glow mb-4 shadow-lg"> -->
        <h1 class="text-5xl md:text-6xl font-extrabold tracking-tighter neon text-red-500">Hi, I'm Michel</h1>
        <div class="flex gap-4 text-2xl justify-center pb-2">
            <a href="#" class="hover:text-red-500"><i class="fab fa-linkedin"></i></a>
            <a href="#" class="hover:text-red-500"><i class="fab fa-github"></i></a>
            <a href="#" class="hover:text-red-500"><i class="fab fa-twitter"></i></a>
        </div>
        <div class="max-w-2xl bg-black/60 rounded-2xl px-8 py-5 mt-2 text-lg shadow-xl border border-red-900">
            Welcome to my portfolio! I'm a passionate developer who loves building things on the web. Below you can find my work and info about me.
        </div>
        <a href="#projects" class="uppercase mt-4 bg-gradient-to-r from-red-800 to-red-400 text-white font-bold py-3 px-10 tracking-widest rounded-lg shadow-lg neon border border-red-700 hover:from-red-600 hover:to-red-500 transition">View My Work</a>
    </header>
    <main class="container mx-auto px-4 flex-1 z-10">
        <!-- About Section -->
        <section id="about" class="mb-16 mt-10 max-w-3xl mx-auto dark border border-red-800 rounded-xl p-10 bg-black/80 shadow-2xl">
            <h2 class="text-3xl font-bold neon text-red-500 mb-4">About Me</h2>
            <p class="text-gray-200 text-lg">I'm a junior developer based in The Netherlands with experience in Laravel, TailwindCSS, and modern web frameworks. Tech and code are my passion. I love clean UI, cyberpunk, and turning coffee into code.</p>
        </section>
        <!-- Projects Section -->
        <section id="projects" class="mb-16">
            <h2 class="text-3xl font-extrabold neon text-red-500 mb-8 text-center tracking-tighter">Projects</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
                <!-- Project Card -->
                <div class="bg-[#120101] border border-red-700 rounded-lg shadow-2xl neon hover:shadow-red-500/40 hover:scale-105 hover:shadow-3xl transition duration-300 p-6 flex flex-col techy-card">
                    <!-- <img src="https://source.unsplash.com/400x220/?red,tech,code&sig=1" alt="Project Screenshot" class="rounded-md mb-4 border border-red-900 shadow"> -->
                    <h3 class="font-bold text-xl mb-2 text-red-400">Project Title</h3>
                    <h3 class="font-bold text-xl mb-2 text-red-400">An laravel based jukebox system</h3>
                    <p class="text-gray-400 mb-3 flex-grow">    .</p>
                    <a href="#" class="text-red-300 hover:text-white font-semibold underline">View project</a>
                </div>
                <div class="bg-[#120101] border border-red-700 rounded-lg shadow-2xl neon hover:shadow-red-500/40 hover:scale-105 hover:shadow-3xl transition duration-300 p-6 flex flex-col techy-card">
                    <!-- <img src="https://source.unsplash.com/400x220/?matrix,code,programmer&sig=2" alt="Project Screenshot" class="rounded-md mb-4 border border-red-900 shadow"> -->
                    <h3 class="font-bold text-xl mb-2 text-red-400">An HTML based portfolio website</h3>
                    <p class="text-gray-400 mb-3 flex-grow">it was a private project to create a portfolio website using HTML.</p>
                    <a href="#" class="text-red-300 hover:text-white font-semibold underline">View project</a>
                </div>
                <div class="bg-[#120101] border border-red-700 rounded-lg shadow-2xl neon hover:shadow-red-500/40 hover:scale-105 hover:shadow-3xl transition duration-300 p-6 flex flex-col techy-card">
                    <!-- <img src="https://source.unsplash.com/400x220/?matrix,code,programmer&sig=2" alt="Project Screenshot" class="rounded-md mb-4 border border-red-900 shadow"> -->
                    <h3 class="font-bold text-xl mb-2 text-red-400">multiple text based adventure games using python</h3>
                    <p class="text-gray-400 mb-3 flex-grow">it was a school project to create multiple text based adventure games using python.</p>
                    <a href="#" class="text-red-300 hover:text-white font-semibold underline">View project</a>
                </div>
                <!-- Extend with more project cards as needed -->
            </div>
        </section>
        <!-- Resume Section -->
        <section id="resume" class="mb-16 flex flex-col items-center mx-auto max-w-xl border border-red-800 rounded-xl p-10 bg-black/80 shadow-2xl">
            <h2 class="text-3xl font-bold neon text-red-500 mb-4">Download My Resume</h2>
            <a href="/storage/Michel's CV.pdf" download class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-red-900 to-red-500 text-white font-bold rounded-lg shadow-lg glow neon border border-red-700 hover:from-red-700 hover:to-red-400 hover:text-black transition">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 mr-3">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M7 10l5 5m0 0l5-5m-5 5V4" />
                </svg>
                Download Resume (PDF)
            </a>
            <!-- <p class="text-base text-gray-500 mt-2">(Make sure your resume is uploaded to <code>storage/Michel's CV.pdf</code>)</p> -->
        </section>
        <!-- Contact Section -->
        <section id="contact" class="mb-12 max-w-2xl mx-auto border border-red-800 rounded-xl p-10 bg-black/80 shadow-2xl">
            <h2 class="text-3xl font-bold neon text-red-500 mb-4">Contact</h2>
            <form action="#" method="POST" class="space-y-6">
                <input type="text" placeholder="Your Name" required class="w-full px-5 py-3 bg-black/60 border border-red-800 rounded-lg focus:ring-2 focus:ring-red-400 outline-none shadow text-white">
                <input type="email" placeholder="Your Email" required class="w-full px-5 py-3 bg-black/60 border border-red-800 rounded-lg focus:ring-2 focus:ring-red-400 outline-none shadow text-white">
                <textarea placeholder="Your Message" required class="w-full px-5 py-3 bg-black/60 border border-red-800 rounded-lg focus:ring-2 focus:ring-red-400 outline-none shadow text-white"></textarea>
                <button type="submit" class="bg-gradient-to-r from-red-900 to-red-600 text-white neon font-bold py-3 px-12 rounded-lg shadow hover:from-red-800 hover:to-red-400 hover:text-black transition text-lg">Send Message</button>
            </form>
        </section>
    </main>
    <footer class="w-full border-t border-red-800 py-7 text-center relative z-10 bg-black/70">
        <div class="mb-3 flex justify-center gap-6 text-xl">
            <a href="#" class="hover:text-red-400"><i class="fab fa-linkedin"></i></a>
            <a href="#" class="hover:text-red-400"><i class="fab fa-github"></i></a>
            <a href="#" class="hover:text-red-400"><i class="fab fa-twitter"></i></a>
        </div>
        <span class="text-gray-400">&copy; {{ date('Y') }} Michel. All rights reserved.</span>
    </footer>
    <script src="https://kit.fontawesome.com/7ff662c8d4.js" crossorigin="anonymous"></script>
</body>
</html>
