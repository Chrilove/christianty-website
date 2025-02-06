<html>
<head>
    <title>SUB-9</title>
    <style>
        
        <?php 
        
        $bgColor = "#F0F8FF";  
        $hour = date("H");
        
        if ($hour >= 6 && $hour < 12) {
            // Pagi: Gunakan warna latar belakang terang dan teks gelap
            $bgColor = "#00FFFF";  // Warna latar belakang pagi
        } elseif ($hour >= 12 && $hour < 18) {
            // Siang: Gunakan warna latar belakang berbeda dan teks terang
            $bgColor = "#F0F8FF";  // Warna latar belakang siang
        } else {
            // Malam: Gunakan warna latar belakang gelap dan teks terang
            $bgColor = "#F0FFFF";  // Warna latar belakang malam
        }
        ?>

        body {
            background-color: <?php echo $bgColor; ?>;
            color: <?php echo $textColor; ?>; 
            text-align: justify;
            font-family: Times NEw
        }

        h3 {
            text-align: center; 
            font-family: Georgia, serif; 
        }

        .subtitle {
            text-align: center; 
            font-size: 14px; 
            font-style: italic;
        }
    </style>
</head>
<body>

    <h3><i>"Factors Influencing the Development of Transportation"</i></h3>
    <div class="subtitle">
        <font size="1"><i>Faktor-faktor yang Mempengaruhi Perkembangan Transportasi</i></font>
    </div>
    <hr>

    <?php 
    echo "Perkembangan transportasi dipengaruhi oleh berbagai faktor, mulai dari kemajuan teknologi, kebutuhan ekonomi, hingga kebijakan pemerintah. Inovasi teknologi 
    seperti mesin uap, kendaraan bermotor, dan pesawat terbang telah meningkatkan efisiensi dan kenyamanan sistem transportasi. Selain itu, pertumbuhan ekonomi global 
    mendorong kebutuhan akan transportasi barang dan penumpang yang cepat dan efisien, sementara pembangunan infrastruktur seperti jalan raya, bandara, dan pelabuhan 
    memfasilitasi mobilitas yang lebih baik. Faktor sosial juga penting, di mana urbanisasi dan kebutuhan masyarakat akan transportasi massal mendorong pengembangan 
    sistem transportasi yang lebih terjangkau dan mudah diakses. <br><br>
    Selain itu, perubahan lingkungan dan isu keberlanjutan semakin memengaruhi arah perkembangan transportasi, dengan teknologi ramah lingkungan seperti mobil listrik 
    dan transportasi berbasis energi terbarukan yang semakin diutamakan. Kebijakan pemerintah dan regulasi terkait transportasi, seperti pajak, keselamatan, dan insentif 
    untuk teknologi baru, juga memiliki peran besar dalam menentukan arah industri ini. Faktor globalisasi mempercepat konektivitas antarnegara, sehingga transportasi 
    internasional menjadi lebih penting, mendorong inovasi dalam sistem transportasi yang lebih terhubung dan efisien."; 
    ?>

</body>  
</html>
