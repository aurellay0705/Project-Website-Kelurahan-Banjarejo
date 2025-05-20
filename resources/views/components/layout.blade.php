<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /* Background tetap di halaman */
        body {
            background-image: url('https://kelurahan-banjarejo.madiunkota.go.id/wp-content/uploads/2024/10/White-with-Photo-Join-the-Club-Social-Media-2720-x-2720-piksel-6.png');
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
            font-family: 'sans-serif';
        }

        /* Styling untuk memastikan konten berada di atas background */
        section {
            position: relative;
            z-index: 1;
        }

        .bg-overlay {
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.7); /* Memberikan layer hitam transparan di atas background */
            z-index: -1; /* Pastikan overlay berada di bawah konten */
        }
    </style>
</head>
<body>
    
</body>
</html>