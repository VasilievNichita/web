document.addEventListener("DOMContentLoaded", () => {
    const sliderContainer = document.querySelector(".slider-container");
    const slides = document.querySelectorAll(".trainer");
    const prevBtn = document.getElementById("prevBtn");
    const nextBtn = document.getElementById("nextBtn");

    let currentIndex = 0;
    let totalSlides = slides.length;

    function updateSlider() {
        sliderContainer.style.transform = `translateX(-${currentIndex * 100}%)`;
    }


    function handleNext() {
        currentIndex = (currentIndex + 1) % totalSlides;
        updateSlider();
    }

    function handlePrev() {
        currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
        updateSlider();
    }

    nextBtn.addEventListener("click", handleNext);
    prevBtn.addEventListener("click", handlePrev);

    function updateSliderHeight() {
        const activeSlide = slides[currentIndex];
        sliderContainer.style.height = `${activeSlide.offsetHeight}px`;
    }

    window.addEventListener('resize', updateSliderHeight);
    updateSliderHeight();

    // Улучшенный автоплей
    let autoSlideInterval;
    
    // function startAutoPlay() {
    //     autoSlideInterval = setInterval(handleNext, 10000);
    // }
    
    function stopAutoPlay() {
        clearInterval(autoSlideInterval);
    }

    startAutoPlay();

    sliderContainer.addEventListener('mouseenter', stopAutoPlay);
    sliderContainer.addEventListener('mouseleave', startAutoPlay);
});