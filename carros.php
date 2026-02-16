<?php require 'header.php'; ?>

<link rel="stylesheet" href="css/carros.css">

<h2 class="estoque">Estoque de Veículos</h2>


<div class="tabs">
    <button class="tab active" data-category="all">Todos</button>
    <button class="tab" data-category="sedan">Sedãs</button>
    <button class="tab" data-category="suv">SUVs</button>
    <button class="tab" data-category="hatch">Hatchs</button>
    <button class="tab" data-category="pickup">Picapes</button>
    <button class="tab" data-category="electric">Elétricos</button>
</div>

<div class="carros-grid">

    <div class="carro-card" data-category="sedan">
        <img src="img/carro3.jpg" alt="Honda Civic 2020">
        <h3>Honda Civic 2020</h3>
        <p class="preco">R$ 98.900</p>
        <button class="btn-detalhes" data-carro="civic">Ver Detalhes</button>
    </div>

    <div class="carro-card" data-category="sedan">
        <img src="img/carro1.jpg" alt="Chevrolet cruze LTZ 2021">
        <h3>Chevrolet cruze LTZ</h3>
        <p class="preco">R$ 92.500</p>
        <button class="btn-detalhes" data-carro="corolla">Ver Detalhes</button>
    </div>

    <div class="carro-card" data-category="suv">
        <img src="img/carro4.jpg" alt="Skyline r34">
        <h3>Skyline R34</h3>
        <p class="preco">R$ 1,5M</p>
        <button class="btn-detalhes" data-carro="compass">Ver Detalhes</button>
    </div>

    <div class="carro-card" data-category="hatch">
        <img src="img/carro5.jpg" alt="Audi r8">
        <h3>Audi r8</h3>
        <p class="preco">R$ 760.000</p>
        <button class="btn-detalhes" data-carro="onix">Ver Detalhes</button>
    </div>

    <div class="carro-card" data-category="pickup">
        <img src="img/carro6.jpg" alt="fastback">
        <h3>Fiat Fastback</h3>
        <p class="preco">R$ 189.900</p>
        <button class="btn-detalhes" data-carro="s10">Ver Detalhes</button>
    </div>

    <div class="carro-card" data-category="electric">
        <img src="img/carro7.jpg" alt="Chevrolet Bolt EV">
        <h3>Chevrolet Bolt EV</h3>
        <p class="preco">R$ 159.900</p>
        <button class="btn-detalhes" data-carro="bolt">Ver Detalhes</button>
    </div>

   
</div>


<script src="js/carros.js"></script>

<?php require 'footer.php'; ?>
