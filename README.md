# Ratchet PHP Setup

## Start socket server 
```
php src/socket.php 
```

## Open Browser
Open multiples browsers and load the path to the index.html file. Open a console window in chrome with the shorcut
Ctrl + J.

## Sending Messages
In your browser console type the command below to send messages to all connected clients
```
conn.send('My name is winni');
```

## Pushing Messages
When a user, be it yourself in your admin or a user posting a comment on your blog, does a POST through a form submission or AJAX we want that change to immediately be pushed to all other visitors on that page. We will add real-time updates to our site without disrupting your code base or affecting its current stability.

## Resources
- http://socketo.me/
- http://socketo.me/docs/push
- https://developer.mozilla.org/en-US/docs/Web/API/WebSocket