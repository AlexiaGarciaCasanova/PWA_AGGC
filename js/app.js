//Validar si podemos tener SW
if (navigator.serviceWorker) {
    console.log("Si esta disponible el trabajo con Service Worker ")
//instalar el serviceWorker
     navigator.serviceWorker.register('sw.js');
}else{
    console.log("No esta disponible el trabajo con Service Worker en este Browser");
}