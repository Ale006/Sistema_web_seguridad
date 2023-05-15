function paginarNoticias() {
    const noticiasContainer = document.getElementById("noticias-contenedor");
    const noticias = noticiasContainer.querySelectorAll("article");
    const paginacion = document.getElementById("paginacion-noticias");
    const noticiasPorPagina = 5;
    const totalPaginas = Math.ceil(noticias.length / noticiasPorPagina);
  
    let paginaActual = 1;
  
    function mostrarNoticias() {
      noticias.forEach((noticia, index) => {
        const inicio = (paginaActual - 1) * noticiasPorPagina;
        const fin = inicio + noticiasPorPagina - 1;
        if (index >= inicio && index <= fin) {
          noticia.style.display = "block";
        } else {
          noticia.style.display = "none";
        }
      });
    }
  
    function mostrarBotones() {
      let botonesHtml = "";
  
      for (let i = 1; i <= totalPaginas; i++) {
        if (i === paginaActual) {
          botonesHtml += `<button class="active">${i}</button>`;
        } else {
          botonesHtml += `<button>${i}</button>`;
        }
      }
  
      paginacion.innerHTML = botonesHtml;
      const botones = paginacion.querySelectorAll("button");
  
      botones.forEach((boton, index) => {
        boton.addEventListener("click", () => {
          paginaActual = index + 1;
          mostrarNoticias();
          mostrarBotones();
        });
      });
    }
  
    mostrarNoticias();
    mostrarBotones();
  }
  
  paginarNoticias();
  