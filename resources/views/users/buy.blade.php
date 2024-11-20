<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cloud SMP - Pilihan Pembelian</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>

<body>
    @include('partials.navbar')

    <!-- Buy Options Start -->
    <div class="buy-options">
        <h2 class="title-buy">Pilih Platform Pembelian</h2>
        <p class="description-buy">
            Silakan pilih platform untuk melanjutkan pembelian rank atau top-up Anda.
        </p>
        <div class="options-container">
            <a href="https://chat.whatsapp.com/Bix23TSwcDjK1PvK5lmpSj" target="_blank" class="buy-option whatsapp">
                <i class="fab fa-whatsapp"></i>
                <span>Beli via WhatsApp</span>
            </a>
            <a href="https://discord.gg/xYdWWxREPZ" target="_blank" class="buy-option discord">
                <i class="fab fa-discord"></i>
                <span>Beli via Discord</span>
            </a>
        </div>
    </div>
    <!-- Buy Options End -->

    @include('partials.footer')
</body>

</html>
