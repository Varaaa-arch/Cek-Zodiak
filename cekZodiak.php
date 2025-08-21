<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cek Zodiak Kamu</title>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Arial', sans-serif;
        background: rgba(0,0,0,1);
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        color: #fff;
    }

    .container {
        padding: 40px 40px;
        border-radius: 15px;
        text-align: center;
        width: 400px;
    }

    h2 {
        margin-bottom: 30px;
    }

    form {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .form-group {
        display: flex;
        flex-direction: column;
        margin-bottom: 15px;
        width: 100%;
        max-width: 200px;
    }

    label {
        font-weight: bold;
        margin-bottom: 5px; 
        text-align: center;
        text-align: left;
    }

    input[type="number"] {
        padding: 8px;
        border-radius: 6px;
        border: none;
        font-size: 16px;
        text-align: center;
    }

    input[type="submit"] {
        margin-top: 25px; 
        padding: 10px 25px;
        border: none;
        border-radius: 12px;
        background-color: #ff9800;
        color: white;
        font-size: 16px;
        cursor: pointer;
        transition: 0.3s;
    }

    input[type="submit"]:hover {
        background-color: #e68900;
    }

    .result {
        margin-top: 25px;
        background: rgba(255,255,255,0.2);
        padding: 15px;
        border-radius: 10px;
    }
</style>
</head>
<body>
<div class="container">
    <h2>Ayo Kita Cek Zodiak Mu</h2>
    <form method="post" id="zodiakForm">
        <div class="form-group">
            <label for="tanggal">Masukin Tanggal Lahir</label>
            <input type="number" id="tanggal" name="tanggal" min="1" max="31" required>
        </div>

        <div class="form-group">
            <label for="bulan">Masukin Bulan Lahir</label>
            <input type="number" id="bulan" name="bulan" min="1" max="12" required>
        </div>

        <input type="submit" value="Cek Zodiak">
    </form>

    <div class="result" id="result">
        <?php
            $zodiak = "";
            $sifat = "";

            if (isset($_POST['tanggal']) && isset($_POST['bulan'])) {
                $tanggal = (int)$_POST['tanggal'];
                $bulan   = (int)$_POST['bulan'];
            
                if (($bulan === 12 && $tanggal >= 22) || ($bulan === 1 && $tanggal <= 20)) {
                    $zodiak = "Capricorn";
                } elseif (($bulan === 1 && $tanggal >= 21) || ($bulan === 2 && $tanggal <= 19)) {
                    $zodiak = "Aquarius";
                } elseif (($bulan === 2 && $tanggal >= 20) || ($bulan === 3 && $tanggal <= 20)) {
                    $zodiak = "Pisces";
                } elseif (($bulan === 3 && $tanggal >= 21) || ($bulan === 4 && $tanggal <= 19)) {
                    $zodiak = "Aries";
                } elseif (($bulan === 4 && $tanggal >= 20) || ($bulan === 5 && $tanggal <= 20)) {
                    $zodiak = "Taurus";
                } elseif (($bulan === 5 && $tanggal >= 21) || ($bulan === 6 && $tanggal <= 21)) {
                    $zodiak = "Gemini";
                } elseif (($bulan === 6 && $tanggal >= 22) || ($bulan === 7 && $tanggal <= 22)) {
                    $zodiak = "Cancer";
                } elseif (($bulan === 7 && $tanggal >=  23) || ($bulan === 8 && $tanggal <= 23 )) {
                    $zodiak = "Virgo";
                } elseif (($bulan === 9 && $tanggal >= 23) || ($bulan === 10 && $tanggal <= 23)) {
                    $zodiak = "Libra";
                } elseif (($bulan === 10 && $tanggal >= 24) || $bulan === 11 && $tanggal <= 22) {
                    $zodiak = "Scorpio";
                } elseif (($bulan === 11 && $tanggal >= 23) || $bulan === 12 && $tanggal <= 21) {
                    $zodiak = "Sagitarius";
                } else {
                    $zodiak = "Tolong input yang bener, sesuai tanggal mu!";
                };
            
                $deksripsi = [
                    "Capricorn"=> "Disiplin, pekerja keras, ambisius",
                    "Aquarius"=>"Inovatif, mandiri, humanis",
                    "Pisces"=>"Empati, kreatif, sensitif",
                    "Aries"=>"Berani, penuh energi, suka tantangan",
                    "Taurus"=>"Setia, sabar, suka kenyamanan",
                    "Gemini"=>"Lincah, komunikatif, penasaran",
                    "Cancer"=>"Sensitif, penyayang, intuitif",
                    "Virgo"=>"Perfeksionis, analitis, rapi",
                    "Libra"=>"Adil, diplomatis, sosial",
                    "Scorpio"=>"Intens, misterius, fokus",
                    "Sagitarius"=>"Optimis, petualang, bebas"
                ];

                if (isset($deksripsi[$zodiak])) {
                    $sifat = $deksripsi[$zodiak];
                };
            };
        ?>
        <?php
            if ($zodiak != "") {
            echo "<h3>Zodiak Kamu: $zodiak</h3>";
            echo "<p>Sifat: $sifat</p>";
            };
        ?>
    </div>
</div>
</body>
</html>
