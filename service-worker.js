// service-worker.js

const CACHE_NAME = 'your-website-cache-v1';
const urlsToCache = [
  '/',
  '/path/to/your/styles.css',
  '/path/to/your/scripts.js',
  '/path/to/your/images/icon.png'
];

self.addEventListener('install', event => {
  event.waitUntil(
    caches.open(CACHE_NAME).then(cache => {
      return cache.addAll(urlsToCache);
    })
  );
});

self.addEventListener('fetch', event => {
  event.respondWith(
    caches.match(event.request).then(response => {
      return response || fetch(event.request);
    })
  );
});
