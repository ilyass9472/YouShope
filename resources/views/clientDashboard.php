<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Chronoswiss Watches
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <style>
   .slide-container {
            transition: transform 0.5s ease-in-out;
        }
        .dot-indicator {
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .product-info {
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.5s ease-in-out;
        }
        .product-info.active {
            opacity: 1;
            transform: translateY(0);
        }
        .product-image {
            transition: all 0.5s ease-in-out;
        }
        .navigation-arrow {
            cursor: pointer;
            transition: all 0.2s ease;
        }
        .navigation-arrow:hover {
            transform: scale(1.1);
        }
  </style>
 </head>
 <body class="bg-gradient-to-r from-gray-900 to-gray-800 text-white flex flex-col justify-center items-center h-screen overflow-hidden">
  <!-- Header Navigation -->
  <div class="absolute top-0 left-0 w-full p-6 flex justify-between items-center z-10">
   <div class="text-2xl font-light tracking-widest">
    CHRONOSWISS
   </div>
   <div class="hidden md:flex gap-8">
    <a class="text-sm uppercase tracking-wider" href="/watchesProduct">
     Watches
    </a>
    <a class="text-sm uppercase tracking-wider" href="#">
     Warranty &amp; Service
    </a>
    <a class="text-sm uppercase tracking-wider" href="#">
     Stores
    </a>
   </div>
   <div class="flex gap-4 items-center">
    <select class="bg-black/40 text-white p-2 rounded-full text-xs">
     <option>
      EUR
     </option>
     <option>
      USD
     </option>
     <option>
      CHF
     </option>
    </select>
    <select class="bg-black/40 text-white p-2 rounded-full text-xs">
     <option>
      ENG
     </option>
     <option>
      DEU
     </option>
     <option>
      FRA
     </option>
    </select>
    <img alt="Heart icon" class="w-5 h-5 filter invert" height="20" src="https://storage.googleapis.com/a1aa/image/0sswEpCEXmPfJe5Vnj0pEvT5HB1fptVCNatj9xb1zro.jpg" width="20"/>
    <img alt="Account icon" class="w-5 h-5 filter invert" height="20" src="https://storage.googleapis.com/a1aa/image/csiGcCBkE7Rf9dqrkVdyln3eIlgj_lclOZNKpB32IZ8.jpg" width="20"/>
    <img alt="Cart icon" class="w-5 h-5 filter invert" height="20" src="https://storage.googleapis.com/a1aa/image/ZWN65Z5p1VPN_pOCnJcfZTMHIY9AX0TCZ8FMsV6WY7k.jpg" width="20"/>
   </div>
  </div>
  <!-- Main Content Area -->
  <div class="w-full h-full flex flex-col justify-center items-center relative">
   <!-- Product Showcase -->
   <div class="w-full h-[70vh] relative overflow-hidden">
    <!-- Slide Container -->
    <div class="slide-container flex h-full w-full" id="slide-container">
     <!-- Product Slides -->
     <div class="product-slide min-w-full h-full flex items-center justify-center relative">
      <div class="max-w-6xl w-full flex flex-col md:flex-row items-center">
       <!-- Product Info -->
       <div class="w-full md:w-1/3 px-8 md:px-4 mb-8 md:mb-0 product-info active" id="info-0">
        <div class="inline-block bg-black/40 text-xs px-4 py-1 rounded-full mb-5">
         LIMITED TO 100 PIECES
        </div>
        <div class="text-gray-400 text-sm mb-4">
         Ref. CH-1234
        </div>
        <h1 class="text-5xl font-light leading-tight mb-7">
         Flying Regulator
        </h1>
        <p class="text-gray-400 mb-6">
         A masterpiece of horology with a unique design and exceptional craftsmanship.
        </p>
        <button class="bg-yellow-500 text-black font-bold px-6 py-2 rounded-full text-sm">
         12,500.00 €
        </button>
       </div>
       <!-- Product Image -->
       <div class="w-full md:w-2/3 flex justify-center product-image">
        <img alt="Flying Regulator watch with a unique design and exceptional craftsmanship" class="max-h-[60vh] object-contain" height="600" src="https://storage.googleapis.com/a1aa/image/e-0IxsxUZ8t-FzeKRihQ93Y6d23RCeD8U-sqFc1bMvQ.jpg" width="600"/>
       </div>
      </div>
     </div>
     <div class="product-slide min-w-full h-full flex items-center justify-center relative">
      <div class="max-w-6xl w-full flex flex-col md:flex-row items-center">
       <!-- Product Info -->
       <div class="w-full md:w-1/3 px-8 md:px-4 mb-8 md:mb-0 product-info" id="info-1">
        <div class="inline-block bg-black/40 text-xs px-4 py-1 rounded-full mb-5">
         STANDARD COLLECTION
        </div>
        <div class="text-gray-400 text-sm mb-4">
         Ref. CH-5678
        </div>
        <h1 class="text-5xl font-light leading-tight mb-7">
         Sirius Chronograph
        </h1>
        <p class="text-gray-400 mb-6">
         A classic chronograph with a timeless design and modern functionality.
        </p>
        <button class="bg-yellow-500 text-black font-bold px-6 py-2 rounded-full text-sm">
         8,900.00 €
        </button>
       </div>
       <!-- Product Image -->
       <div class="w-full md:w-2/3 flex justify-center product-image">
        <img alt="Sirius Chronograph watch with a timeless design and modern functionality" class="max-h-[60vh] object-contain" height="600" src="https://storage.googleapis.com/a1aa/image/Ujr7pSiT3_9goxuwNZBO-9lgaaxJ1m4v4zl4JkkxC-E.jpg" width="600"/>
       </div>
      </div>
     </div>
     <div class="product-slide min-w-full h-full flex items-center justify-center relative">
      <div class="max-w-6xl w-full flex flex-col md:flex-row items-center">
       <!-- Product Info -->
       <div class="w-full md:w-1/3 px-8 md:px-4 mb-8 md:mb-0 product-info" id="info-2">
        <div class="inline-block bg-black/40 text-xs px-4 py-1 rounded-full mb-5">
         LIMITED TO 50 PIECES
        </div>
        <div class="text-gray-400 text-sm mb-4">
         Ref. CH-9101
        </div>
        <h1 class="text-5xl font-light leading-tight mb-7">
         Opus Skeleton
        </h1>
        <p class="text-gray-400 mb-6">
         An intricate skeleton watch showcasing the beauty of its inner mechanics.
        </p>
        <button class="bg-yellow-500 text-black font-bold px-6 py-2 rounded-full text-sm">
         15,000.00 €
        </button>
       </div>
       <!-- Product Image -->
       <div class="w-full md:w-2/3 flex justify-center product-image">
        <img alt="Opus Skeleton watch showcasing the beauty of its inner mechanics" class="max-h-[60vh] object-contain" height="600" src="https://storage.googleapis.com/a1aa/image/T03LoL8W7djqDFm_SdTyjWbI-p34C71OPcOcmUmfPUk.jpg" width="600"/>
       </div>
      </div>
     </div>
    </div>
   </div>
   <!-- Navigation Controls -->
   <div class="flex justify-between items-center w-full px-8 md:px-20 absolute bottom-8">
    <!-- Dots Navigation -->
    <div class="flex gap-4 items-center">
     <div class="w-3 h-3 bg-white rounded-full dot-indicator" data-index="0">
     </div>
     <div class="w-3 h-3 bg-white/30 rounded-full dot-indicator" data-index="1">
     </div>
     <div class="w-3 h-3 bg-white/30 rounded-full dot-indicator" data-index="2">
     </div>
    </div>
    <!-- Arrow Navigation -->
    <div class="flex gap-6 items-center">
     <div class="navigation-arrow flex items-center justify-center w-12 h-12 bg-black/40 rounded-full" id="prev-btn">
      <svg class="h-6 w-6" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
       <path d="M15 19l-7-7 7-7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
       </path>
      </svg>
     </div>
     <div class="navigation-arrow flex items-center justify-center w-12 h-12 bg-black/40 rounded-full" id="next-btn">
      <svg class="h-6 w-6" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
       <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
       </path>
      </svg>
     </div>
    </div>
   </div>
  </div>
  <script>
   // Variables
        const slideContainer = document.getElementById('slide-container');
        const slides = document.querySelectorAll('.product-slide');
        const prevBtn = document.getElementById('prev-btn');
        const nextBtn = document.getElementById('next-btn');
        const dotIndicators = document.querySelectorAll('.dot-indicator');
        const productInfos = document.querySelectorAll('.product-info');
        let currentIndex = 0;
        const totalSlides = slides.length;

        // Initialize
        updateSlidePosition();

        // Event Listeners
        prevBtn.addEventListener('click', prevSlide);
        nextBtn.addEventListener('click', nextSlide);

        // Add click events to dots
        dotIndicators.forEach(dot => {
            dot.addEventListener('click', () => {
                const index = parseInt(dot.getAttribute('data-index'));
                goToSlide(index);
            });
        });

        // Touch events for swipe
        let touchStartX = 0;
        let touchEndX = 0;

        slideContainer.addEventListener('touchstart', (e) => {
            touchStartX = e.changedTouches[0].screenX;
        });

        slideContainer.addEventListener('touchend', (e) => {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
        });

        // Keyboard navigation
        document.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowRight') {
                nextSlide();
            } else if (e.key === 'ArrowLeft') {
                prevSlide();
            }
        });

        // Functions
        function updateSlidePosition() {
            // Update slide container position
            slideContainer.style.transform = `translateX(-${currentIndex * 100}%)`;

            // Update dot indicators
            dotIndicators.forEach((dot, i) => {
                if (i === currentIndex) {
                    dot.classList.add('bg-white');
                    dot.classList.remove('bg-white/30');
                    dot.classList.add('active');
                    dot.style.width = '36px';
                    dot.style.borderRadius = '16px';
                } else {
                    dot.classList.remove('bg-white');
                    dot.classList.add('bg-white/30');
                    dot.classList.remove('active');
                    dot.style.width = '12px';
                    dot.style.borderRadius = '50%';
                }
            });

            // Update product info visibility
            productInfos.forEach((info, i) => {
                if (i === currentIndex) {
                    info.classList.add('active');
                } else {
                    info.classList.remove('active');
                }
            });
        }

        function nextSlide() {
            currentIndex = (currentIndex + 1) % totalSlides;
            updateSlidePosition();
        }

        function prevSlide() {
            currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
            updateSlidePosition();
        }

        function goToSlide(index) {
            currentIndex = index;
            updateSlidePosition();
        }

        function handleSwipe() {
            const swipeThreshold = 50;
            if (touchEndX < touchStartX - swipeThreshold) {
                nextSlide();
            }
            if (touchEndX > touchStartX + swipeThreshold) {
                prevSlide();
            }
        }

        // Optional: Auto-advance slides
        // Uncomment the following block to enable
        /*
        setInterval(() => {
            nextSlide();
        }, 5000);
        */
  </script>
 </body>
</html>
