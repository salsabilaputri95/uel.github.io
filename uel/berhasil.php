<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <style>
        body {
            font-family: Poppins;
            min-height: 100vh;
            background: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .popup {
            display: none;
            position: fixed;
            top: 20%;
            left: 50%;
            transform: translateX(-50%);
            background: white;
            border: 1px solid black;
            box-shadow: 0.5rem 1.5rem rgba(0, 0, 0, 0.1);;
            border-radius: 25px;
            padding: 20px;
            text-align: center;
        }

        .img {
            width: 112px;
            margin-top: 20px;
        }

        .title {
            font-weight: 500;
            font-size: 24px;
            letter-spacing: 0.05em;
            margin: 20px 0;
        }

        .para {
            font-weight: 500;
            font-size: 18px;
            line-height: 30px;
            letter-spacing: 0.05em;
        }

        .button {
            background: #32ba7c;
            color: white;
            padding: 10px 20px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: bold;
            font-size: 18px;
            margin-top: 20px;
        }
    </style>
    <title>Berhasil</title>
</head>
<body>
    <main>
        <div class="popup" id="success">
            <div class="imgbox">
                <img src="checked.png" alt="" class="img">
            </div>
            <div class="title">
                <h3>Success!</h3>
            </div>
            <p class="para">Anda berhasil melakukan pembayaran</p>
            <a href="../index.php" class="button">Kembali</a>
        </div>
    </main>

    <script>
        // Tampilkan pop-up saat halaman dimuat
        window.onload = function () {
            var successPopup = document.getElementById("success");
            successPopup.style.display = "block";
        };
    </script>
</body>
</html>
