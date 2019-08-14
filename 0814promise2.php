<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
    <div id="info"></div>
<body>
    <script>
        let info = document.querySelector('#info');

        function fn1(fn2) {
            info.innerHTML += '1<br>';
            setTimeout(function() {
                info.innerHTML += '2<br>';
                fn2();
                info.innerHTML += '3<br>';
            }, 1000);
            info.innerHTML += '4<br>';
        }
        fn1(function(){
            info.innerHTML += 'fn2<br>';
        });
    </script>
</body>

</html>