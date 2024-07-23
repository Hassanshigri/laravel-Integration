<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <style>
        body, html {
          height: 100%;
          margin: 0;
        }

        .bgimg {
          background-image: url('/w3images/forestbridge.jpg');
          height: 100%;
          background-position: center;
          background-size: cover;
          position: relative;
          color: black;
          font-family: "Courier New", Courier, monospace;
          font-size: 25px;
        }

        .topleft {
          position: absolute;
          top: 0;
          left: 16px;
        }

        .bottomleft {
          position: absolute;
          bottom: 0;
          left: 16px;
        }

        .middle {
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          text-align: center;
        }

        hr {
          margin: auto;
          width: 40%;
        }
        </style>
        <body>

        <div class="bgimg">
          <div class="topleft">
            <p>php</p>
          </div>
          <div class="middle">
            <h1>Wellcome to</h1>
            <hr>
            <p>CRUD Operation</p>
          </div>
          <div class="bottomleft">
            <p>Lets create a Employ registration Form</p>
            <a href="/create">lets go</a>
          </div>
        </div>

</body>
</html>
