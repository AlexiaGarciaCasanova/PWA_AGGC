
//Definir los caches a utilizar
const CACHE_APP_SHELL = 'App-Shellv1';
const CACHE_DINAMICO = 'Cache-dinamicov1';
const CACHE_INMUTABLE = 'Cache-inmutablev1'

self.addEventListener('install', event =>{
    console.log('Se instala SW.. nuevo');
    
    //Creacion del caché 
    const cacheAppShell = caches.open(CACHE_APP_SHELL).then(cache => {
        return cache.addAll([
            '/',
            'index.html',
            'pages/carrito.php',
            'pages/cuenta.php',
            'css/estilo.css',
            'css/estilo2.css',
            'js/app.js',
            'img/img-1.jpg',
            'img/img-2.jpg',
            'img/img-3.jpg',
            'img/img-4.jpg',
            'img/img-5.jpg',
            'img/img-6.jpg',

        ]);
    });
    //Guardamos elementos_inmutables
    const cacheInmutable = caches.open(CACHE_INMUTABLE).then(cache => {
        return cache.addAll([
            'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css',
            'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css',
            'https://fonts.googleapis.com/icon?family=Material+Icons',
            'https://mdbootstrap.com/'
        ]);
    });
    event.waitUntil(cacheAppShell);
});

self.addEventListener('activate', event =>{
    console.log('El SW se ha activado');
});

self.addEventListener('fetch', event =>{
    //console.log(event.request.url);
    //estrategia de gestion del cache, Cache Only
    //event.respondWith(
     //   caches.match(event.request)
    //);
   
    //estrategia del cache - Cache y despues Red 
    event.respondWith(caches.match(event.request)
    .then(res => {
        if(res) return res; 
        else {
            console.log('No se encontro en el cache el', event.request.url);
            //si la resp no existe 
            //traerla de el sitio o el origen
            fetch(event.request).then(nuevoElemento => { 
                caches.open(CACHE_DINAMICO).then(cache => {
                    cache.put(event.request, nuevoElemento);
                });
            });
            return nuevoElemento.clone();
        }
    })
    .catch(error => {
        console.log('Error en el fetch, ', error);
    })
    );
});
