console.log('Hola Mundo');
let $EndpointProd = '';
const handleclick = (id) => {
    console.log('Click' + id);
    switch (id) {
        case 1:
            $EndpointProd = 'mochila-manoslibres';
            location.assign("http://localhost/PruebaWilliamR/"+$EndpointProd);
            break;
        case 4:
            $EndpointProd = 'botas-adventure';
            location.assign("http://localhost/PruebaWilliamR/"+$EndpointProd);
            break;
        case 5:
            $EndpointProd = 'botas-deportivas';
            location.assign("http://localhost/PruebaWilliamR/"+$EndpointProd);
            break;
        case 6:
            $EndpointProd = 'carpa-camping';
            location.assign("http://localhost/PruebaWilliamR/"+$EndpointProd);
            break;
        case 7:
            $EndpointProd = 'busos-adventure';
            location.assign("http://localhost/PruebaWilliamR/"+$EndpointProd);    
            break;
        case 8:
            $EndpointProd = 'kit-de-supervivencia';
            location.assign("http://localhost/PruebaWilliamR/"+$EndpointProd);
            break;
        case 9:
            $EndpointProd = 'ropa-deportiva';
            location.assign("http://localhost/PruebaWilliamR/"+$EndpointProd);
            break;
        case 10:
            $EndpointProd = 'producto-morral-pc-14';
            location.assign("http://localhost/PruebaWilliamR/"+$EndpointProd);
            break;
        case 11:
            $EndpointProd = 'reloj-black-diamond';
            location.assign("http://localhost/PruebaWilliamR/"+$EndpointProd);
            break;
        case 12:
            $EndpointProd = 'reloj-deportivo';
            location.assign("http://localhost/PruebaWilliamR/"+$EndpointProd);
            break;
        case 13:
            $EndpointProd = 'kit-de-ejercicio-en-casa';
            location.assign("http://localhost/PruebaWilliamR/"+$EndpointProd);
            break;
        case 14:
            $EndpointProd = 'kit-carga-solar';
            location.assign("http://localhost/PruebaWilliamR/"+$EndpointProd);    
            break;
        case 15:
            $EndpointProd = 'morral-urban';
            location.assign("http://localhost/PruebaWilliamR/"+$EndpointProd);
            break;
        case 16:
            $EndpointProd = 'billetera-en-cuero';
            location.assign("http://localhost/PruebaWilliamR/"+$EndpointProd);
            break;
    }
    console.log($EndpointProd);
    return $EndpointProd;
}
