document.addEventListener("DOMContentLoaded", function() {
    const headerBanner = document.querySelector('.aspect-ratio-169');
    const images = headerBanner.querySelectorAll('img');
    let currentIndex = 0;
    const imageCount = images.length;
    const slideDuration = 2000; // Thời gian chuyển đổi mỗi ảnh (3 giây)

    setInterval(() => {
        images[currentIndex].style.opacity = 0; // Ẩn ảnh hiện tại
        currentIndex = (currentIndex + 1) % imageCount; // Chuyển sang ảnh tiếp theo
        images[currentIndex].style.opacity = 1; // Hiển thị ảnh mới
    }, slideDuration);
});

    
function loadPage(page) {
    var iframe = document.getElementById('contentFrame');
    iframe.src = page;

    iframe.onload = function() {
        iframe.style.height = iframe.contentWindow.document.body.scrollHeight + 'px';
        iframe.style.width = iframe.contentWindow.document.body.scrollWidth + 'px';
    };
}
    