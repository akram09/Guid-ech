var staticCacheName = "pwa-v" + new Date().getTime();
var filesToCache = [
    '/offline',
    '/css/app.css',
    '/js/app.js',
    '/images/icons/icon-72x72.png',
    '/images/icons/icon-114x114.png',
    '/images/icons/icon-150x150.png',
    '/images/icons/icon-180x180.png',
    '/images/icons/icon-310x310.png',
    '/affichageDisplay/css/bootstrap.min.css',
    '/affichageDisplay/css/mdb.min.css',
    '/affichageDisplay/css/style.min.css',
    '/affichageDisplay/js/jquery-3.3.1.min.js',
    '/affichageDisplay/js/popper.min.js',
    '/affichageDisplay/js/bootstrap.min.js',
    '/affichageDisplay/js/mdb.min.js',
];

// Cache on install
self.addEventListener("install", event => {
    this.skipWaiting();
    event.waitUntil(
        caches.open(staticCacheName)
            .then(cache => {
                return cache.addAll(filesToCache);
            })
    )
});

// Clear cache on activate
self.addEventListener('activate', event => {
    event.waitUntil(
        caches.keys().then(cacheNames => {
            return Promise.all(
                cacheNames
                    .filter(cacheName => (cacheName.startsWith("pwa-")))
                    .filter(cacheName => (cacheName !== staticCacheName))
                    .map(cacheName => caches.delete(cacheName))
            );
        })
    );
});

// Serve from Cache
self.addEventListener("fetch", event => {
    event.respondWith(
        caches.match(event.request)
            .then(response => {
                return response || fetch(event.request);
            })
            .catch(() => {
                return caches.match('offline');
            })
    )
});