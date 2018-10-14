# Ratchet PHP WebSockets Setup
Ratchet is a loosely coupled PHP library providing developers with tools to create real time, bi-directional applications between clients and servers over WebSockets.

## Start socket server 
```
php src/socket.php 
```

## Open Browser
Open multiples browsers and load the path to the index.html file. Open a console window in chrome with the shorcut
Ctrl + J. Make sure the script with the comment Socket Server is uncommented and the one with Pusher Server is commented

## Sending Messages
In your browser console type the command below to send messages to all connected clients
```
conn.send('My name is winni');
```

## Pushing Messages
When a user, be it yourself in your admin or a user posting a comment on your blog, does a POST through a form submission or AJAX we want that change to immediately be pushed to all other visitors on that page. We will add real-time updates to our site without disrupting your code base or affecting its current stability.

## Start pusher server 
```
php src/socket-pusher-server.php 
```

## Open Browser
Open 3 browsers and serve the path to blog.php with php's server eg localhost:8000 in one of the opened browsers. Open a console window in chrome with the shorcut
Ctrl + J in the other two and open index.html using the path to the file.
Make sure the script with the comment Pusher Server is uncomment and the one with Socket Server is commented.
Fill the form in blog.php and submit, check the other two subcribed browsers for the push messages in the console.

## Resources
- http://socketo.me/
- http://socketo.me/docs/push
- https://developer.mozilla.org/en-US/docs/Web/API/WebSocket