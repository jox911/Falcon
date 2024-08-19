document.getElementById('learnMore')?.addEventListener('click', function() {
    const moreInfo = document.getElementById('moreInfo');
    if (moreInfo.style.display === 'none') {
        moreInfo.style.display = 'block';
        this.textContent = 'اقرأ أقل';
    } else {
        moreInfo.style.display = 'none';
        this.textContent = 'اقرأ المزيد';
    }
});

document.getElementById('contactForm')?.addEventListener('submit', function(event) {
    event.preventDefault();
    alert('تم إرسال رسالتك! سنرد عليك قريباً.');
});
