<footer class="bg-light mt-2">
    <div class="container d-flex justify-content-between align-items-center flex-wrap py-4 text-center text-md-start">
        <p class="mb-0">&copy; Sérgio Oliveira <?php echo date('Y'); ?></p>
        <ul class="social d-flex mb-0 list-unstyled gap-3">
            <li><a href="https://www.tiktok.com/@jogadorcoco" target="_blank" rel="noopener noreferrer" class="text-decoration-none">TikTok</a></li>
            <li><a href="https://www.instagram.com/jogadorcoco/" target="_blank" rel="noopener noreferrer" class="text-decoration-none">Instagram</a></li>
            <li><a href="https://x.com/vaidarcoco" target="_blank" rel="noopener noreferrer" class="text-decoration-none">X</a></li>
        </ul>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

<script>
    function updateClockAndDate() {
        const now = new Date();

        // Formata o horário HH:MM:SS
        const time = now.toLocaleTimeString('pt-BR', {
            hour12: false
        });

        // Formata a data (ex: terça-feira, 8 de julho de 2025)
        const options = {
            weekday: 'long',
            year: 'numeric',
            month: 'long',
            day: 'numeric'
        };
        const date = now.toLocaleDateString('pt-BR', options);

        document.getElementById('clock').textContent = time;
        document.getElementById('date').textContent = date.charAt(0).toUpperCase() + date.slice(1);
    }

    // Atualiza a cada 1 segundo
    setInterval(updateClockAndDate, 1000);

    // Atualiza imediatamente ao carregar
    updateClockAndDate();
</script>

<script>
    const ball = document.querySelector('.fourstarball img');

    let rotating = false;
    let startTime = null;
    let currentAngle = 0;
    let animationId;
    let angleOffset = 0; // guarda o ângulo acumulado ao pausar

    function rotate(timestamp) {
        if (!startTime) startTime = timestamp;

        const elapsed = timestamp - startTime;

        // Calcula o ângulo total baseado no tempo + o offset anterior
        currentAngle = (elapsed * 0.09) + angleOffset;

        ball.style.transform = `rotate(${currentAngle}deg)`;
        animationId = requestAnimationFrame(rotate);
    }

    ball.addEventListener('click', () => {
        if (!rotating) {
            rotating = true;
            startTime = null; // reinicia o tempo para contar desde o clique
            animationId = requestAnimationFrame(rotate);
        } else {
            rotating = false;
            cancelAnimationFrame(animationId);
            angleOffset = currentAngle; // guarda o ângulo atual para continuar depois
        }
    });
</script>


</body>

</html>