@include('partials.navbar')

<!-- Feedback Section -->
@if (session('success'))
    <div class="alert alert-success">
        <i class="fa fa-check-circle"></i>
        <span>
            <strong>Berhasil!</strong> {{ session('success') }}
        </span>
        <button class="close-btn" onclick="this.parentElement.style.display='none';">&times;</button>
    </div>
@elseif(session('error'))
    <div class="alert alert-danger">
        <i class="fa fa-times-circle"></i>
        <span>
            <strong>Error!</strong> {{ session('error') }}
        </span>
        <button class="close-btn" onclick="this.parentElement.style.display='none';">&times;</button>
    </div>
@endif
<div id="feedback" class="feedback">
    <h2 class="title-feedback">Feedback</h2>
    <p class="description-content-in-heading">
        Berikan feedback untuk server dan website ini agar kami semakin maju!
    </p>
    <div class="feedback-container">
        <form action="{{ url('/feedback') }}" method="post">
            @csrf <!-- Token CSRF untuk melindungi form -->

            <label for="gamertag">GamerTag:</label>
            <input type="text" id="gamertag" name="gamertag" value="{{ session('gamertag') }}" readonly>

            <label for="feedback">Feedback:</label><br />
            <textarea id="feedback" name="feedback" required autocomplete="off"></textarea><br />

            <input type="submit" value="Kirim" />
        </form>
    </div>
</div>
<!-- Feedback End -->

@include('partials.footer')
