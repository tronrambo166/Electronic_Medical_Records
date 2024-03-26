
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $general->sitename($pageTitle ?? '404 | page not found') }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="{{ asset('assets/errors')}}/css/bootstrap.min.css">
    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="{{getImage(imagePath()['logoIcon']['path'] .'/favicon.png')}}">
    <!-- line-awesome-icon css -->
    <link rel="stylesheet" href="{{ asset('assets/errors')}}/css/line-awesome.min.css">
    <style>

        html {
            font-size: 100%;
            scroll-behavior: smooth;
        }

        body {
            background-color: white;
            font-family: "Exo 2", sans-serif;
            font-size: 16px;
            font-weight: 500;
            line-height: 1.5em;
            color: #6B768A;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            min-height: 100vh;
            overflow-x: hidden;
        }

        a {
            display: inline-block;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        blockquote {
            margin: 0 0 1.3em;
        }

        p {
            margin-bottom: 15px;
            line-height: 1.7em;
        }
        p:last-child {
            margin-bottom: 0px;
        }
        @media only screen and (max-width: 1199px) {
        p {
            line-height: 1.7em;
        }
        }
        img {
            max-width: 100%;
            height: auto;
        }
        button:focus,
        input:focus,
        textarea:focus {
            outline: none;
        }
        button, input[type=submit], input[type=reset], input[type=button] {
            border: none;
            cursor: pointer;
        }
        input, textarea {
            padding: 12px 25px;
            width: 100%;
        }
        span {
            display: inline-block;
        }
        a, a:focus, a:hover {
            text-decoration: none;
            color: inherit;
        }
        blockquote {
            background-color: #FFF6E6;
            padding: 20px;
            color: #353448;
            border-radius: 3px;
            font-weight: 500;
            font-style: italic;
            position: relative;
        }
        blockquote .quote-icon {
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            font-size: 120px;
            opacity: 0.1;
        }
        h2{
            font-weight: 600;
            margin: 0;
            line-height: 1.4;
        }
        .btn--base {
            margin-top: 20px;
            position: relative;
            background: #6B768A;
            -webkit-box-shadow: 0 0 0 #39ac31;
            box-shadow: 0 0 0 #39ac31;
            border: 1px solid transparent;
            color: #fff;
            padding: 3px 20px;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 500;
            text-align: center;
            -webkit-transition: all ease 0.5s;
            transition: all ease 0.5s;
        }
        .btn--base.active {
            background: transparent;
            position: relative;
            border: 1px solid #d6d6d6;
            font-weight: 600;
            color: #353448;
        }
        .btn--base.active:focus, .btn--base.active:hover {
            color: #353448;
            -webkit-box-shadow: none;
            box-shadow: none;
        }
        .btn--base:focus, .btn--base:hover {
            color: #fff;
            -webkit-box-shadow: 0 0 24px -6px #4582ff;
            box-shadow: 0 0 24px -6px #4582ff;
        }

.writing {
    width: 320px;
    height: 200px;
    background-color: #3f3f3f;
    border: 1px solid #bbbbbb;
    border-radius: 6px 6px 4px 4px;
    position: relative;
}

.writing .topbar{
    position: absolute;
    width: 100%;
    height: 12px;
    background-color: #f1f1f1;
    border-top-left-radius: 4px;
    border-top-right-radius: 4px;
}

.writing .topbar div{
    height: 6px;
    width: 6px;
    border-radius: 50%;
    margin: 3px;
    float: left;
}

.writing .topbar div.green{
    background-color: #60d060;
}
.writing .topbar div.red{
    background-color: red;
}
.writing .topbar div.yellow{
    background-color: #e6c015;
}

.writing .code {
    padding: 15px;
}

.writing .code ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

.writing .code ul li {
    background-color: #9e9e9e;
    width: 0;
    height: 7px;
    border-radius: 6px;
    margin: 10px 0;
}

.container {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    height: 100vh;
    width: 100%;
    -webkit-transition: -webkit-transform .5s;
    transition: -webkit-transform .5s;
    transition: transform .5s;
    transition: transform .5s, -webkit-transform .5s;
}

.stack-container {
    position: relative;
    width: 420px;
    height: 210px;
    -webkit-transition: width 1s, height 1s;
    transition: width 1s, height 1s;
}

.pokeup {
    -webkit-transition: all .3s ease;
    transition: all .3s ease;
}

.pokeup:hover {
    -webkit-transform: translateY(-10px);
            transform: translateY(-10px);
    -webkit-transition: .3s ease;
    transition: .3s ease;
}


.error {
    width: 400px;
    padding: 40px;
    text-align: center;
}

.error h1 {
    font-size: 125px;
    padding: 0;
    margin: 0;
    font-weight: 700;
}

.error h2 {
    margin: -30px 0 0 0;
    padding: 0px;
    font-size: 47px;
    letter-spacing: 12px;
}

.perspec {
    -webkit-perspective: 1000px;
            perspective: 1000px;
}

.writeLine{
    -webkit-animation: writeLine .4s linear forwards;
            animation: writeLine .4s linear forwards;
}

.explode{
    -webkit-animation: explode .5s ease-in-out forwards;
            animation: explode .5s ease-in-out forwards;
}

.card {
    -webkit-animation: tiltcard .5s ease-in-out 1s forwards;
            animation: tiltcard .5s ease-in-out 1s forwards;
    position: absolute;
}

@-webkit-keyframes tiltcard {
    0% {
        -webkit-transform: rotateY(0deg);
                transform: rotateY(0deg);
    }

    100% {
        -webkit-transform: rotateY(-30deg);
                transform: rotateY(-30deg);
    }
}

@keyframes tiltcard {
    0% {
        -webkit-transform: rotateY(0deg);
                transform: rotateY(0deg);
    }

    100% {
        -webkit-transform: rotateY(-30deg);
                transform: rotateY(-30deg);
    }
}

@-webkit-keyframes explode {
    0% {
        -webkit-transform: translate(0, 0) scale(1);
                transform: translate(0, 0) scale(1);
    }

    100% {
        -webkit-transform: translate(var(--spreaddist), var(--vertdist)) scale(var(--scaledist));
                transform: translate(var(--spreaddist), var(--vertdist)) scale(var(--scaledist));
    }
}

@keyframes explode {
    0% {
        -webkit-transform: translate(0, 0) scale(1);
                transform: translate(0, 0) scale(1);
    }

    100% {
        -webkit-transform: translate(var(--spreaddist), var(--vertdist)) scale(var(--scaledist));
                transform: translate(var(--spreaddist), var(--vertdist)) scale(var(--scaledist));
    }
}

@-webkit-keyframes writeLine {
    0% {
        width:0;
    }

    100% {
        width: var(--linelength);
    }
}

@keyframes writeLine {
    0% {
        width:0;
    }

    100% {
        width: var(--linelength);
    }
}

@media screen and (max-width: 1000px) {
    .container {
      -webkit-transform: scale(.85);
              transform: scale(.85);
    }
  }

  @media screen and (max-width: 850px) {
    .container {
      -webkit-transform: scale(.75);
              transform: scale(.75);
    }
  }

  @media screen and (max-width: 775px) {
    .container {
      -ms-flex-wrap: wrap-reverse;
          flex-wrap: wrap-reverse;
      -webkit-box-align: inherit;
          -ms-flex-align: inherit;
              align-items: inherit;
    }
  }

  @media screen and (max-width: 370px) {
    .container {
        -webkit-transform: scale(.6);
                transform: scale(.6);
      }
  }

    </style>


</head>
<body>

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div class="container">
    <div class="error">
        <h1>500</h1>
        <h2>error</h2>
        <p>Ruh-roh, something just isn't right... Time to paw through your logs and get down and dirty in your
            stack-trace;)</p>
            <a href="#0" class="btn--base"><i class="las la-spinner"></i> Refresh</a>
    </div>
    <div class="stack-container">
        <div class="card-container">
            <div class="perspec" style="--spreaddist: 125px; --scaledist: .75; --vertdist: -25px;">
                <div class="card">
                    <div class="writing">
                        <div class="topbar">
                            <div class="red"></div>
                            <div class="yellow"></div>
                            <div class="green"></div>
                        </div>
                        <div class="code">
                            <ul>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-container">
            <div class="perspec" style="--spreaddist: 100px; --scaledist: .8; --vertdist: -20px;">
                <div class="card">
                    <div class="writing">
                        <div class="topbar">
                            <div class="red"></div>
                            <div class="yellow"></div>
                            <div class="green"></div>
                        </div>
                        <div class="code">
                            <ul>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-container">
            <div class="perspec" style="--spreaddist:75px; --scaledist: .85; --vertdist: -15px;">
                <div class="card">
                    <div class="writing">
                        <div class="topbar">
                            <div class="red"></div>
                            <div class="yellow"></div>
                            <div class="green"></div>
                        </div>
                        <div class="code">
                            <ul>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-container">
            <div class="perspec" style="--spreaddist: 50px; --scaledist: .9; --vertdist: -10px;">
                <div class="card">
                    <div class="writing">
                        <div class="topbar">
                            <div class="red"></div>
                            <div class="yellow"></div>
                            <div class="green"></div>
                        </div>
                        <div class="code">
                            <ul>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-container">
            <div class="perspec" style="--spreaddist: 25px; --scaledist: .95; --vertdist: -5px;">
                <div class="card">
                    <div class="writing">
                        <div class="topbar">
                            <div class="red"></div>
                            <div class="yellow"></div>
                            <div class="green"></div>
                        </div>
                        <div class="code">
                            <ul>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-container">
            <div class="perspec" style="--spreaddist: 0px; --scaledist: 1; --vertdist: 0px;">
                <div class="card">
                    <div class="writing">
                        <div class="topbar">
                            <div class="red"></div>
                            <div class="yellow"></div>
                            <div class="green"></div>
                        </div>
                        <div class="code">
                            <ul>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->




<!-- bootstrap js -->
<script src="assets/js/bootstrap.bundle.min.js"></script>




<script>
    const stackContainer = document.querySelector('.stack-container');
const cardNodes = document.querySelectorAll('.card-container');
const perspecNodes = document.querySelectorAll('.perspec');
const perspec = document.querySelector('.perspec');
const card = document.querySelector('.card');

let counter = stackContainer.children.length;

//function to generate random number
function randomIntFromInterval(min, max) {
    return Math.floor(Math.random() * (max - min + 1) + min);
}

//after tilt animation, fire the explode animation
card.addEventListener('animationend', function () {
    perspecNodes.forEach(function (elem, index) {
        elem.classList.add('explode');
    });
});

//after explode animation do a bunch of stuff
perspec.addEventListener('animationend', function (e) {
    if (e.animationName === 'explode') {
        cardNodes.forEach(function (elem, index) {

            //add hover animation class
            elem.classList.add('pokeup');

            //add event listner to throw card on click
            elem.addEventListener('click', function () {
                let updown = [800, -800]
                let randomY = updown[Math.floor(Math.random() * updown.length)];
                let randomX = Math.floor(Math.random() * 1000) - 1000;
                elem.style.transform = `translate(${randomX}px, ${randomY}px) rotate(-540deg)`
                elem.style.transition = "transform 1s ease, opacity 2s";
                elem.style.opacity = "0";
                counter--;
                if (counter === 0) {
                    stackContainer.style.width = "0";
                    stackContainer.style.height = "0";
                }
            });

            //generate random number of lines of code between 4 and 10 and add to each card
            let numLines = randomIntFromInterval(5, 10);

            //loop through the lines and add them to the DOM
            for (let index = 0; index < numLines; index++) {
                let lineLength = randomIntFromInterval(25, 97);
                var node = document.createElement("li");
                node.classList.add('node-' + index);
                elem.querySelector('.code ul').appendChild(node).setAttribute('style', '--linelength: ' + lineLength + '%;');

                //draw lines of code 1 by 1
                if (index == 0) {
                    elem.querySelector('.code ul .node-' + index).classList.add('writeLine');
                } else {
                    elem.querySelector('.code ul .node-' + (index - 1)).addEventListener('animationend', function (e) {
                        elem.querySelector('.code ul .node-' + index).classList.add('writeLine');
                    });
                }
            }
        });
    }
});
</script>



</body>
</html>

