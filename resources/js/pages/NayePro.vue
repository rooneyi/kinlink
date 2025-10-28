<template>
    <div class="relative bg-[#f8faff] font-inter text-[#212121] overflow-x-hidden">
        <!-- Navbar -->
        <Header :user="$page.props.auth.user" />

        <!-- Background Canvas -->
        <canvas id="background-canvas" class="fixed top-0 left-0 w-full h-full pointer-events-none z-0"></canvas>

        <!-- Hero Section -->
        <section class="relative text-center py-[140px] sm:py-20 overflow-hidden z-10">
            <div class="container mx-auto px-6 flex flex-col items-center">
                <!-- Badge -->
                <Badge class="mb-7 bg-white/80 backdrop-blur-md text-[#616161] border border-[#e3e8ed] px-6 py-2 rounded-3xl shadow-md uppercase font-semibold gap-2 inline-flex">
                    <i class="fas fa-crown text-teal-600"></i>
                    Naye Pro
                </Badge>

                <!-- Title -->
                <h1 class="text-[clamp(2.6rem,9vw,3.6rem)] font-extrabold mb-4 leading-[1.05] animate-fade-up">
                    Abonnez-vous et profitez des
                    <span class="text-teal-600">opportunités</span> du digital !
                </h1>

                <!-- Subtitle -->
                <p class="text-[clamp(1.2rem,2.5vw,1.45rem)] text-[#616161] max-w-[750px] mb-14 leading-relaxed animate-fade-up">
                    Naye Business vous donne accès à de multiples opportunités dans différents domaines du digital.
                </p>

                <!-- Hero Image -->
                <div class="relative w-full max-w-[900px] mt-20">
                    <img
                        src="/assets/img/logo-principal.png"
                        alt="Hero"
                        class="w-full rounded-xl border border-[#e3e8ed] shadow-[0_15px_35px_rgba(0,0,0,0.08),0_5px_15px_rgba(0,0,0,0.04)] transition-transform duration-300 ease-out hover:-translate-y-1"
                    />
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <!-- Features Section -->
        <section class="relative py-20 px-6 backdrop-blur-md bg-gradient-to-b from-white/90 to-teal-50/30 border-l border-r border-b border-[#e3e8ed] shadow-sm z-10">
            <div class="container mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-3xl sm:text-4xl font-extrabold mb-4">
                        Profitez de nos
                        <span class="inline-block bg-teal-50 px-4 py-1 rounded-full text-teal-600 font-bold">offres</span> !
                    </h2>
                    <p class="text-[#616161] max-w-[700px] mx-auto">
                        Choisissez la formule qui correspond à vos besoins et accédez à tous les avantages Naye Pro.
                    </p>
                </div>

                <!-- Features Grid -->
                <div class="grid md:grid-cols-3 gap-10">
                    <!-- CARD TEMPLATE -->
                    <div
                        class="group relative p-10 rounded-3xl border border-transparent bg-white/80 backdrop-blur-xl shadow-[0_8px_25px_rgba(0,0,0,0.05)]
                transition-all duration-500 hover:shadow-[0_15px_40px_rgba(0,128,128,0.15)] hover:-translate-y-3 overflow-hidden"
                    >
                        <!-- Gradient Glow -->
                        <div
                            class="absolute inset-0 opacity-0 group-hover:opacity-100 transition duration-500 bg-gradient-to-br from-teal-100/40 to-transparent pointer-events-none"
                        ></div>

                        <!-- Icon -->
                        <div class="relative z-10 mb-6 w-14 h-14 flex items-center justify-center bg-gradient-to-tr from-teal-50 to-white border border-teal-100 rounded-xl shadow-sm">
                            <i class="fas fa-bolt text-teal-600 text-xl"></i>
                        </div>

                        <!-- Title -->
                        <h3 class="relative z-10 text-2xl font-bold mb-4 text-gray-800 flex items-center gap-2">
                            <i class="fas fa-bolt text-teal-600"></i>
                            Offre Naye Moko
                        </h3>

                        <!-- Badge -->
                        <Badge
                            class="relative z-10 mb-5 bg-gradient-to-r from-teal-50 to-white text-teal-700 border border-teal-200 px-4 py-2 rounded-3xl inline-flex gap-2 items-center font-medium"
                        >
                            <i class="fas fa-coins"></i> 8$ = 165 crédits
                        </Badge>

                        <!-- Infos -->
                        <p class="relative z-10 text-[#616161] mb-6 text-sm flex items-center">
                            <i class="fas fa-hourglass-half text-teal-600 mr-2"></i>
                            Valable 1 mois
                        </p>

                        <!-- Avantages -->
                        <ul class="relative z-10 text-[#616161] space-y-2 mb-8 text-sm">
                            <li><i class="fas fa-check-circle text-teal-600 mr-2"></i> Accès aux missions</li>
                            <li><i class="fas fa-check-circle text-teal-600 mr-2"></i> Accès aux formations</li>
                            <li><i class="fas fa-check-circle text-teal-600 mr-2"></i> Accès aux événements</li>
                        </ul>

                        <!-- Bouton -->
                        <Button
                            class="relative z-10 w-full rounded-full py-3 bg-gradient-to-r from-teal-600 to-teal-700 hover:from-teal-700 hover:to-teal-800 text-white font-semibold shadow-md hover:shadow-lg transition-all duration-300"
                        >
                            S'abonner
                        </Button>
                    </div>

                    <!-- Naye Illimité -->
                    <div
                        class="group relative p-10 rounded-3xl border border-transparent bg-white/80 backdrop-blur-xl shadow-[0_8px_25px_rgba(0,0,0,0.05)]
                transition-all duration-500 hover:shadow-[0_15px_40px_rgba(2,119,189,0.15)] hover:-translate-y-3 overflow-hidden"
                    >
                        <div
                            class="absolute inset-0 opacity-0 group-hover:opacity-100 transition duration-500 bg-gradient-to-br from-blue-100/40 to-transparent pointer-events-none"
                        ></div>

                        <div class="relative z-10 mb-6 w-14 h-14 flex items-center justify-center bg-gradient-to-tr from-blue-50 to-white border border-blue-100 rounded-xl shadow-sm">
                            <i class="fas fa-infinity text-[#0277bd] text-xl"></i>
                        </div>

                        <h3 class="relative z-10 text-2xl font-bold mb-4 text-gray-800 flex items-center gap-2">
                            <i class="fas fa-infinity text-[#0277bd]"></i>
                            Offre Naye Illimité
                        </h3>

                        <Badge
                            class="relative z-10 mb-5 bg-gradient-to-r from-[#b3e5fc] to-[#e1f5fe] text-[#0277bd] border border-[#b3e5fc] px-4 py-2 rounded-3xl inline-flex gap-2 items-center font-medium"
                        >
                            <i class="fas fa-infinity"></i> 5$ / Mois = Accès illimité
                        </Badge>

                        <p class="relative z-10 text-[#616161] mb-6 text-sm">
                            <i class="fas fa-pause-circle text-[#0277bd] mr-2"></i> Peut être mise en standby à volonté.
                        </p>

                        <Button
                            class="relative z-10 w-full rounded-full py-3 bg-gradient-to-r from-[#0277bd] to-[#01579b] text-white font-semibold shadow-md hover:shadow-lg transition-all duration-300"
                        >
                            S'abonner
                        </Button>
                    </div>

                    <!-- Essai Gratuit -->
                    <div
                        class="group relative p-10 rounded-3xl border border-transparent bg-white/80 backdrop-blur-xl shadow-[0_8px_25px_rgba(0,0,0,0.05)]
                transition-all duration-500 hover:shadow-[0_15px_40px_rgba(0,128,128,0.15)] hover:-translate-y-3 overflow-hidden"
                    >
                        <div
                            class="absolute inset-0 opacity-0 group-hover:opacity-100 transition duration-500 bg-gradient-to-br from-teal-100/40 to-transparent pointer-events-none"
                        ></div>

                        <div class="relative z-10 mb-6 w-14 h-14 flex items-center justify-center bg-gradient-to-tr from-teal-50 to-white border border-teal-100 rounded-xl shadow-sm">
                            <i class="fas fa-gift text-teal-600 text-xl"></i>
                        </div>

                        <h3 class="relative z-10 text-2xl font-bold mb-4 text-gray-800 flex items-center gap-2">
                            <i class="fas fa-gift text-teal-600"></i>
                            1 Mois d’essai gratuit !
                        </h3>

                        <Badge
                            class="relative z-10 mb-5 bg-gradient-to-r from-teal-50 to-white text-teal-700 border border-teal-200 px-4 py-2 rounded-3xl inline-flex gap-2 items-center font-medium"
                        >
                            <i class="fas fa-gift"></i> Essai gratuit
                        </Badge>

                        <p class="relative z-10 text-[#616161] mb-6 text-sm">
                            <i class="fas fa-check-circle text-teal-600 mr-2"></i> Profitez des services Naye Pro gratuitement pendant un mois.
                        </p>

                        <Button
                            variant="outline"
                            class="relative z-10 w-full rounded-full py-3 bg-gradient-to-r from-[#0277bd] to-[#01579b] text-white font-semibold shadow-md hover:shadow-lg transition-all duration-300"
                        >
                            Profiter de l’offre <i class="fas fa-gift ml-1"></i>
                        </Button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <Footer />
    </div>
</template>

<script setup>
import Header from '@/components/Header.vue'
import Footer from '@/components/Footer.vue'
import Button from '@/components/ui/button/Button.vue'
import Badge from '@/components/ui/Badge.vue'

// Animated background logic
import { onMounted, onBeforeUnmount } from 'vue'

onMounted(() => {
    const canvas = document.getElementById('background-canvas')
    if (!canvas) return
    const ctx = canvas.getContext('2d')
    let dots = []
    let mouse = { x: window.innerWidth / 2, y: window.innerHeight / 2 }
    let time = 0
    let animationFrameId

    const resize = () => {
        canvas.width = window.innerWidth
        canvas.height = window.innerHeight
        dots = []
        const spacing = 50
        for (let x = 0; x < canvas.width + spacing; x += spacing) {
            for (let y = 0; y < canvas.height + spacing; y += spacing) {
                dots.push({ ox: x, oy: y, x, y })
            }
        }
    }

    const animate = () => {
        ctx.clearRect(0, 0, canvas.width, canvas.height)
        time += 0.005
        const mouseStrength = 150
        const breathStrength = 3
        const dotSize = 1.2
        ctx.fillStyle = 'rgba(0,0,0,0.05)'
        dots.forEach(dot => {
            const dx = dot.ox - mouse.x
            const dy = dot.oy - mouse.y
            const dist = Math.sqrt(dx * dx + dy * dy)
            const parallaxX = (dx / dist) * (mouseStrength / Math.max(dist, 100))
            const parallaxY = (dy / dist) * (mouseStrength / Math.max(dist, 100))
            const breath = Math.sin(time * 0.5 + dot.oy * 0.01) * breathStrength
            dot.x = dot.ox + parallaxX
            dot.y = dot.oy + parallaxY + breath
            ctx.beginPath()
            ctx.arc(dot.x, dot.y, dotSize, 0, Math.PI * 2)
            ctx.fill()
        })
        animationFrameId = requestAnimationFrame(animate)
    }

    const mouseMoveHandler = (e) => {
        mouse.x = e.clientX
        mouse.y = e.clientY
    }

    window.addEventListener('resize', resize)
    window.addEventListener('mousemove', mouseMoveHandler)
    resize()
    animate()

    onBeforeUnmount(() => {
        cancelAnimationFrame(animationFrameId)
        window.removeEventListener('resize', resize)
        window.removeEventListener('mousemove', mouseMoveHandler)
    })
})
</script>

<style>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap');

.animate-fade-up {
    opacity: 0;
    transform: translateY(20px);
    animation: fadeUp 0.8s forwards;
}
@keyframes fadeUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>
