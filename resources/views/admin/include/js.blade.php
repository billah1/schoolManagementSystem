<script src="{{asset('/')}}admin/assets/node_modules/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{asset('/')}}admin/assets/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{asset('/')}}admin/dist/js/perfect-scrollbar.jquery.min.js"></script>
<!--Wave Effects -->
<script src="{{asset('/')}}admin/dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="{{asset('/')}}admin/dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="{{asset('/')}}admin/dist/js/custom.min.js"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!--morris JavaScript -->
<script src="{{asset('/')}}admin/assets/node_modules/raphael/raphael-min.js"></script>
<script src="{{asset('/')}}admin/assets/node_modules/morrisjs/morris.min.js"></script>
<script src="{{asset('/')}}admin/assets/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
<!-- Popup message jquery -->
<script src="{{asset('/')}}admin/assets/node_modules/toast-master/js/jquery.toast.js"></script>
<!-- Chart JS -->
{{--<script src="{{asset('/')}}admin/dist/js/dashboard1.js"></script>--}}
{{--<script src="{{asset('/')}}admin/assets/node_modules/toast-master/js/jquery.toast.js"></script>--}}


{{--<script>--}}
{{--    // JavaScript for animated background--}}
{{--    document.addEventListener("DOMContentLoaded", function() {--}}
{{--        const canvas = document.createElement("canvas");--}}
{{--        document.body.appendChild(canvas);--}}

{{--        const ctx = canvas.getContext("2d");--}}

{{--        // Set canvas size--}}
{{--        canvas.width = window.innerWidth;--}}
{{--        canvas.height = window.innerHeight;--}}

{{--        const colors = ['#3498db', '#e74c3c', '#1abc9c', '#f39c12', '#9b59b6'];--}}

{{--        function createParticle() {--}}
{{--            return {--}}
{{--                x: Math.random() * canvas.width,--}}
{{--                y: Math.random() * canvas.height,--}}
{{--                radius: Math.random() * 5 + 1,--}}
{{--                color: colors[Math.floor(Math.random() * colors.length)],--}}
{{--                speedX: Math.random() * 3 - 1.5,--}}
{{--                speedY: Math.random() * 3 - 1.5--}}
{{--            };--}}
{{--        }--}}

{{--        function draw() {--}}
{{--            ctx.clearRect(0, 0, canvas.width, canvas.height);--}}

{{--            particles.forEach(particle => {--}}
{{--                ctx.fillStyle = particle.color;--}}
{{--                ctx.beginPath();--}}
{{--                ctx.arc(particle.x, particle.y, particle.radius, 0, Math.PI * 2);--}}
{{--                ctx.fill();--}}

{{--                particle.x += particle.speedX;--}}
{{--                particle.y += particle.speedY;--}}

{{--                if (particle.radius > 0.2) particle.radius -= 0.1;--}}
{{--            });--}}

{{--            particles = particles.filter(particle => particle.radius > 0.2);--}}

{{--            while (particles.length < maxParticles) {--}}
{{--                particles.push(createParticle());--}}
{{--            }--}}

{{--            requestAnimationFrame(draw);--}}
{{--        }--}}

{{--        let particles = [];--}}
{{--        const maxParticles = 50;--}}

{{--        for (let i = 0; i < maxParticles; i++) {--}}
{{--            particles.push(createParticle());--}}
{{--        }--}}

{{--        draw();--}}

{{--        // Resize canvas when the window is resized--}}
{{--        window.addEventListener('resize', function() {--}}
{{--            canvas.width = window.innerWidth;--}}
{{--            canvas.height = window.innerHeight;--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}
