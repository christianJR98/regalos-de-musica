
let URLROOT = 'http://musicgifts.atwebpages.com';

let rutas = {
    instrumentos:{
        kalimbas: `${URLROOT}/productos/kalimbas`,
        flautas: `${URLROOT}/productos/flautas`
    },
    ropa:{
        camisas: `${URLROOT}/productos/camisas`,
        blusas: `${URLROOT}/productos/blusas`,
        calcetines: `${URLROOT}/productos/calcetines`,
        bufandas: `${URLROOT}/productos/bufandas`,
        vestidos: `${URLROOT}/productos/vestidos`,
        leggins: `${URLROOT}/productos/leggins`
    },
    accesorios:{
        collares: `${URLROOT}/productos/collares`,
        anillos: `${URLROOT}/productos/anillos`,
        pulseras: `${URLROOT}/productos/pulseras`,
        aretes: `${URLROOT}/productos/aretes`
    },
    tazas: `${URLROOT}/productos/tazas`,
    auriculares: `${URLROOT}/productos/auriculares`,
    otros:{
        almohadas:`${URLROOT}/productos/almohadas`,
        llaveros: `${URLROOT}/productos/llaveros`,
        separadores:`${URLROOT}/productos/separadores`,
        decoracion:`${URLROOT}/productos/decoracion`
    }
}

let activeClases = ["inicio","instrumentos","ropa","accesorios","tazas","auriculares","otros"];

function createNavbar(active){
    const item = document.createElement('div');

    item.classList.add('container');

    item.innerHTML = `
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link ${active===activeClases[activeClases.indexOf("inicio")]?"active":""}" href="${URLROOT}"><i class="fas fa-home"></i> Inicio</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle ${active===activeClases[activeClases.indexOf("instrumentos")]?"active":""}" href="#" id="navbarDropdownMenuLink " data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Instrumentos
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="${rutas.instrumentos.kalimbas}">Kalimbas</a>
                        <a class="dropdown-item" href="${rutas.instrumentos.flautas}">Flautas</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle ${active===activeClases[activeClases.indexOf("ropa")]?"active":""}" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Ropa
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                        <a class="dropdown-item" href="${rutas.ropa.camisas}">Camisas</a>
                        <a class="dropdown-item" href="${rutas.ropa.blusas}">Blusas</a>
                        <a class="dropdown-item" href="${rutas.ropa.calcetines}">Calcetas y Calcetines</a>
                        <a class="dropdown-item" href="${rutas.ropa.bufandas}">Bufandas</a>
                        <a class="dropdown-item" href="${rutas.ropa.vestidos}">Vestidos</a>
                        <a class="dropdown-item" href="${rutas.ropa.leggins}">Leggins</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle ${active===activeClases[activeClases.indexOf("accesorios")]?"active":""}" href="#" id="navbarDropdownMenuLink3" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Accesorios
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink3">
                        <a class="dropdown-item" href="${rutas.accesorios.collares}">Collares</a>
                        <a class="dropdown-item" href="${rutas.accesorios.anillos}">Anillos</a>
                        <a class="dropdown-item" href="${rutas.accesorios.pulseras}">Pulseras</a>
                        <a class="dropdown-item" href="${rutas.accesorios.aretes}">Aretes</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link ${active===activeClases[activeClases.indexOf("tazas")]?"active":""}" href="${rutas.tazas}">Tazas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ${active===activeClases[activeClases.indexOf("auriculares")]?"active":""}" href="${rutas.auriculares}">Auriculares</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle ${active===activeClases[activeClases.indexOf("otros")]?"active":""}" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Otros
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="${rutas.otros.almohadas}">Almohadas y Cojines</a>
                        <a class="dropdown-item" href="${rutas.otros.llaveros}">Llaveros</a>
                        <a class="dropdown-item" href="${rutas.otros.separadores}">Separadores</a>
                        <a class="dropdown-item" href="${rutas.otros.decoracion}">Decoracion</a>
                    
                    </div>
                </li>
            </ul>
        </div>
    `;
    document.getElementById('navbar').appendChild(item);
}
