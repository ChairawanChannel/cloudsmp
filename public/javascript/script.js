let currentSlide = 0;
const slides = document.querySelectorAll(".carousel-slide");
const totalSlides = slides.length;

function showSlide(index) {
    slides.forEach((slide) => {
        slide.classList.remove("active");
    });
    slides[index].classList.add("active");
}

function nextSlide() {
    currentSlide = (currentSlide + 1) % totalSlides;
    showSlide(currentSlide);
}

function prevSlide() {
    currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
    showSlide(currentSlide);
}

// Auto Carousel
setInterval(nextSlide, 3000); // Change slide every 3 seconds

// Initialize the first slide as active
showSlide(currentSlide);

//turning off right click on page
document.addEventListener("contextmenu", function (e) {
    e.preventDefault();
});

//turning off selecting text
document.addEventListener("selectstart", function (e) {
    e.preventDefault();
});

// smut scroll
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
        e.preventDefault();

        const targetID = this.getAttribute("href");
        const targetElement = document.querySelector(targetID);

        if (targetElement) {
            targetElement.scrollIntoView({
                behavior: "smooth",
                block: "start",
            });
        }
    });
});

//back to top
const backToTopButton = document.getElementById("backToTop");

window.onscroll = function () {
    if (window.scrollY > 300) {
        backToTopButton.style.display = "flex";
    } else {
        backToTopButton.style.display = "none";
    }
};

// Smooth scroll ke atas saat tombol Back to Top diklik
backToTopButton.addEventListener("click", function () {
    window.scrollTo({
        top: 0,
        behavior: "smooth",
    });
});

// toggle dropdown
function toggleDropdown() {
    const dropdown = document.getElementById("profileDropdown");
    dropdown.style.display =
        dropdown.style.display === "none" ? "block" : "none";
}

// nutup dropdown kalau ngeklik di luar
window.onclick = function (event) {
    if (!event.target.closest(".profile")) {
        document.getElementById("profileDropdown").style.display = "none";
    }
};

// player count in server
async function fetchPlayerCount() {
    try {
        // URL endpoint dengan IP server Minecraft kamu
        const response = await fetch(
            "https://api.mcsrvstat.us/3/node3.quenssshost.my.id:25526"
        );
        const data = await response.json();

        // Mengecek apakah server online dan menampilkan jumlah player
        if (data.online) {
            document.getElementById(
                "playerCount"
            ).innerText = `ONLINE PLAYER: ${data.players.online}`;
        } else {
            document.getElementById("playerCount").innerText =
                "SERVER STATUS: OFFLINE";
        }
    } catch (error) {
        console.error("Gagal mengambil data dari server", error);
        document.getElementById("playerCount").innerText =
            "Gagal mengambil data server";
    }
}

// Panggil fungsi fetchPlayerCount saat halaman dimuat
window.onload = fetchPlayerCount;

// Notification Start
// Function to show the alert notification
function showAlert() {
    document.getElementById("alert-notification").style.display = "flex";
}

// Function to close the alert notification
function closeAlert() {
    document.getElementById("alert-notification").style.display = "none";
}

// Show the alert notification every 5 minutes (300,000 ms)
setInterval(showAlert, 300000);

// Optional: Show the alert immediately on page load
showAlert();

// Notification End

// button join server function
document.getElementById("join-server").addEventListener("click", function () {
    const serverIP = "play.cloudsmp.com"; // Ganti dengan IP server Minecraft Anda

    navigator.clipboard
        .writeText(serverIP)
        .then(function () {
            // Tampilkan notifikasi sukses
            showNotification("IP server berhasil disalin ke clipboard!");
        })
        .catch(function (error) {
            console.error("Gagal menyalin IP server:", error);
        });
});

// Fungsi untuk menampilkan notifikasi
function showNotification(message) {
    const notification = document.getElementById("notification");
    const notificationText = document.getElementById("notification-text");

    notificationText.textContent = message;
    notification.style.display = "flex";

    // Sembunyikan notifikasi setelah 3 detik
    setTimeout(closeNotification, 3000);
}

// Fungsi untuk menutup notifikasi
function closeNotification() {
    document.getElementById("notification").style.display = "none";
}
