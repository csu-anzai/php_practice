<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <div class="info"></div>

    <script>
        let info = document.querySelector('.info')

        let promise1 = new Promise((resolve, reject) => {
            info.innerHTML += '1<br>';
            setTimeout(function() {
                info.innerHTML += '2<br>';
                resolve('hello');
            }, 0)
            info.innerHTML += '3<br>';
        });

        promise1.catch(function(result) {
            info.innerHTML += `${result}<br>`;
        });
    </script>
</body>

</html>