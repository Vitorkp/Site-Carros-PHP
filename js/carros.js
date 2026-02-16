// carros.js

// abas / filtro
const tabs = document.querySelectorAll('.tab');
const carros = document.querySelectorAll('.carro-card');

tabs.forEach(tab => {
  tab.addEventListener('click', () => {
    tabs.forEach(t => t.classList.remove('active'));
    tab.classList.add('active');
    const cat = tab.dataset.category;
    carros.forEach(c => {
      if (cat === 'all' || c.dataset.category === cat) c.style.display = 'block';
      else c.style.display = 'none';
    });
  });
});

// modal
const modal = document.getElementById('modal');
const modalTitulo = document.getElementById('modalTitulo');
const modalImg = document.getElementById('modalImg');
const modalDescricao = document.getElementById('modalDescricao');
const modalSpecs = document.getElementById('modalSpecs');
const fecharModal = document.getElementById('fecharModal');

// informações - edite/adicione conforme quiser
const infoCarros = {
  civic: {
    nome: "Honda Civic 2020",
    img: "img/civic.jpg",
    descricao: "Motor 2.0, câmbio CVT, interior em ótimo estado. Revisões em dia.",
    specs: "50.000 km • Gasolina/Flex • 4 portas"
  },
  corolla: {
    nome: "Toyota Corolla 2019",
    img: "img/corolla.jpg",
    descricao: "Sedã econômico, conforto para família, baixo consumo.",
    specs: "60.000 km • Gasolina • 4 portas"
  },
  compass: {
    nome: "Jeep Compass 2021",
    img: "img/compass.jpg",
    descricao: "SUV completo, sensores, multimídia e ótimo estado.",
    specs: "35.000 km • Flex • 5 lugares"
  },
  onix: {
    nome: "Chevrolet Onix 2022",
    img: "img/onix.jpg",
    descricao: "Hatch moderno com conectividade e baixo consumo.",
    specs: "18.000 km • Flex • 5 portas"
  },
  s10: {
    nome: "Chevrolet S10 High Country",
    img: "img/s10.jpg",
    descricao: "Picape robusta, ideal para trabalho e lazer, cabine dupla.",
    specs: "80.000 km • Diesel • 4x4"
  },
  bolt: {
    nome: "Chevrolet Bolt EV",
    img: "img/bolt.jpg",
    descricao: "Elétrico com boa autonomia e revisões em concessionária.",
    specs: "Autonomia ~420 km • Elétrico"
  }
};

// abrir modal ao clicar no botão
document.querySelectorAll('.btn-detalhes').forEach(btn => {
  btn.addEventListener('click', () => {
    const key = btn.dataset.carro;
    const info = infoCarros[key];
    if (!info) return;
    modalTitulo.textContent = info.nome;
    modalImg.src = info.img;
    modalDescricao.textContent = info.descricao;
    modalSpecs.textContent = info.specs;
    modal.style.display = 'flex';
  });
});

// fechar
fecharModal.addEventListener('click', () => modal.style.display = 'none');
window.addEventListener('click', e => {
  if (e.target === modal) modal.style.display = 'none';
});
