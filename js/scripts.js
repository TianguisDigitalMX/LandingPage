
(function () {
  const overlay = document.getElementById('overlay');

  // Factor de movimiento (ajusta para más/menos intensidad)
  const strength = 20; // px de desplazamiento máximo desde el centro

  // Estado para rAF
  let mouseX = 0, mouseY = 0;
  let targetX = 0, targetY = 0;
  let ticking = false;

  // Normaliza posición del cursor a [-1, 1] desde el centro
  function onMouseMove(e) {
    const vw = window.innerWidth;
    const vh = window.innerHeight;

    // Coordenadas relativas al centro
    const relX = (e.clientX - vw / 2) / (vw / 2);
    const relY = (e.clientY - vh / 2) / (vh / 2);

    // Movimiento inverso: si el cursor va a la derecha (+), el fondo va a la izquierda (-)
    targetX = -relX * strength;
    targetY = -relY * strength;

    if (!ticking) {
      ticking = true;
      requestAnimationFrame(update);
    }
  }

  // Suavizado (lerp) para movimiento fluido
  function update() {
    const lerp = 0.12; // suavizado (0-1)
    mouseX += (targetX - mouseX) * lerp;
    mouseY += (targetY - mouseY) * lerp;

    // Actualiza background-position usando desplazamiento desde el centro
    // 50% es el centro; sumamos el offset calculado
    overlay.style.backgroundPosition = `calc(50% + ${mouseX}px) calc(50% + ${mouseY}px)`;

    // Si aún no hemos llegado al objetivo, seguimos animando
    if (Math.abs(targetX - mouseX) > 0.1 || Math.abs(targetY - mouseY) > 0.1) {
      requestAnimationFrame(update);
    } else {
      ticking = false;
    }
  }

  // Fallback para touch: mueve lentamente con el scroll
  function onScroll() {
    const scrolled = window.scrollY || 0;
    // Desplazamiento suave inverso al scroll
    const y = -(scrolled * 0.1);
    overlay.style.backgroundPosition = `50% calc(50% + ${y}px)`;
  }

  // Listeners
  window.addEventListener('mousemove', onMouseMove, { passive: true });
  window.addEventListener('scroll', onScroll, { passive: true });

  // Recalcular al redimensionar (opcional)
  window.addEventListener('resize', () => {
    // Reinicia objetivos para evitar saltos
    targetX = 0;
    targetY = 0;
  });
})();