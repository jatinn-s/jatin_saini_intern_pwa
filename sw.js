self.addEventListener("install", e => {
	e.waitUntil(
        caches.open("static").then(cache => {
        	return cache.addAll(["http://localhost/codeigniter/assets/index.js","http://localhost/codeigniter/index.php/Hello","http://localhost/codeigniter/assets/manifest.json","http://localhost/codeigniter/sw.js"])
        })    
    );
});


self.addEventListener("fetch", e => {
	e.respondWith(
         caches.match(e.request).then(response => {
         	return response || fetch(e.request);
         })
	);
});