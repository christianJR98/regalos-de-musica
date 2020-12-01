


function createFooter(){    
    let URLROOT = 'http://musicgifts.atwebpages.com';

    const item = document.createElement('div');
    
    item.classList.add('container');

    item.innerHTML = `
        <div class="row">
            <div class="col-md-6 mt-3"><a href="${URLROOT}/politicaCookies">Politica de Cookies</a></div>
        </div>

        <div class="text-center pb-2">
            <small class="text-center">
            &#169; ${new Date().getFullYear()} Christian Tabs. Todos los drechos reservados
            </small>
        </div>
    `;
    document.getElementById('footer-main').appendChild(item);
}

function initialize(){
    createFooter();
}

initialize();
