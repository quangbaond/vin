<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
sdsadsadsad
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/4.7.4/socket.io.js" integrity="sha512-tE1z+95+lMCGwy+9PnKgUSIeHhvioC9lMlI7rLWU0Ps3XTdjRygLcy4mLuL0JAoK4TLdQEyP0yOl/9dMOqpH/Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    const socket = io('{{ env('APP_SOCKET_URL') }}');
    socket.on('admin', (data) => {
        console.log(data);
    });
</script>
</body>
</html>
