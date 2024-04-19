<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    /*// center screen*/
    .center {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    h1 {
        font-size: 20px;
        color: red;
    }

</style>
<script type="text/javascript">
    var _smartsupp = _smartsupp || {};
    _smartsupp.key = '{{ env('SMARTSUPP_KEY') }}';
    window.smartsupp||(function(d) {
        var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
        s=d.getElementsByTagName('script')[0];c=d.createElement('script');
        c.type='text/javascript';c.charset='utf-8';c.async=true;
        c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
    })(document);
</script>
<style>
    #chat-widget-container {
        bottom: 55px !important;
    }
</style>
<body>
    <div class="center">
        <h1>Phòng đã đóng cửa, Vui lòng quay lại sau</h1>
    </div>
</body>
</html>
