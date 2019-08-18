<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="div1">
        <?php
        $my_var = 66;
        $b = "22";
        $c = "abc";
        echo $my_var + $b; //單純數字相加
        echo "<br />";
        echo $my_var + $c; //66+0
        ?>
    </div>
    <div class="div2">
        <?php
        $n = 'name';
        $$n = 'jason';
        //等同$name = 'jason'
        echo $name;
        //要點用變數來當值,不要用
        ?>
    </div>
    <div class="div3">
        <?php
        $a = 'jason';
        echo "abc,$a"; //單純字串相加
        echo '<br/>';
        echo 'abc,$a'; //不會印出變數的內容
        ?>
    </div>
    <div class="div4">
        <?php
        $a = "Victor";
        echo "Hello,$a123<br/>"; //會變成變數這裡是未定義
        echo "Hello,{$a}123<br/>"; //在"裡面變數顯示
        echo "Hello,${a}123<br/>"; //在"裡面變數顯示
        echo $a . '<br/>'; //點符號是用來字串相接
        ?>
    </div>
    <div class="div5">
        <?php
        echo "a\b\"'c\d\\" . '<br/>'; //  a\b"c\'d\
        echo 'a\b\"c\'d\\'; // a\b\"c'd\
        ?>
    </div>
    <div class="div6">

    </div>
    <div class="div7">
        <?php
        ?>
    </div>
    <div class="div8">
        <?php
        ?>
    </div>
    <div class="div9">
        <?php
        ?>
    </div>
    <div class="div10">
        <?php
        ?>
    </div>


    <script>
        let div6 = document.querySelector('.div6')

        class Person { //class類型
            constructor(name = 'noname', age = 20) {
                this.name = name;
                this.age = age;
            }
            toJson() {
                let obj = {
                    name: this.name,
                    age: this.age,
                }
                return JSON.stringify(obj)
            }
        }


        let p1 = new Person('bill', 25);
        let p2 = new Person('jason', 26);

        div6.innerHTML = p1.toJson() + '<br>';
        div6.innerHTML += p2.toJson() + '<br>';




        class Animal {
            constructor() {


            }
            eat() {
                return 'eat';
            }
        }

        class Cat extends Animal {
            mow() {
                return 'mow'
            }
        }

        class Fish extends Animal {
            swim() {
                return 'fish swims'
            }
        }

        class Whale extends Animal {
            swim() {
                return 'whale swims';
            }
        }
        let div7 = document.querySelector('.div7')
        let div8 = document.querySelector('.div8')
        let a1 = new Fish;
        let a2 = new Whale;
        let animals = [
            new Fish(),
            new Whale(),
            new Cat(),
        ]

        animals.forEach(function(ani) {
            if (ani.mow) {
                div8.innerHTML += ani.mow() + '<br>';
            }
        });
        div7.innerHTML = a1.swim() + '<br>';
        div7.innerHTML += a2.swim() + '<br>';




        //es5
        let div9 = document.querySelector('.div9')

        function Man(name, age) {
            this.name = name;
            this.age = age;
            this.toJson = () => {
                return JSON.stringify({
                    name: this.name,
                    age: this.age,
                });
            };
            console.log(this)
        }

        Man.prototype.toString = function() {
            return JSON.stringify({
                name: this.name,
                age: this.age,
            });
        };
        // Person.prototype.toString = function() {
        //     return JSON.stringify({
        //         name: this.name,
        //         age: this.age,
        //     });
        // };
        var m1 = new Man('bill', 20);
        div9.innerHTML = m1.toJson() + '<br>';
        div9.innerHTML += m1 + '<br>';
        //這樣寫第二個涵式抓不到值
    </script>
</body>

</html>