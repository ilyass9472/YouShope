<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Chronoswiss Watches</title>
        <script src="https://cdn.tailwindcss.com"></script>
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
    <div class="text-2xl font-light tracking-widest">CHRONOSWISS</div>
    <div class="hidden md:flex gap-8">
      <a href="#" class="text-sm uppercase tracking-wider">Watches</a>
      <a href="#" class="text-sm uppercase tracking-wider">Warranty & Service</a>
      <a href="#" class="text-sm uppercase tracking-wider">Stores</a>
    </div>
    <div class="flex gap-4 items-center">
      <select class="bg-black/40 text-white p-2 rounded-full text-xs">
        <option>EUR</option>
        <option>USD</option>
        <option>CHF</option>
      </select>
      <select class="bg-black/40 text-white p-2 rounded-full text-xs">
        <option>ENG</option>
        <option>DEU</option>
        <option>FRA</option>
      </select>
      <img src="/api/placeholder/20/20" alt="Heart" class="w-5 h-5 filter invert">
      <img src="/api/placeholder/20/20" alt="Account" class="w-5 h-5 filter invert">
      <img src="/api/placeholder/20/20" alt="Cart" class="w-5 h-5 filter invert">
    </div>
  </div>
  
  <!-- Main Content Area -->
  <div class="w-full h-full flex flex-col justify-center items-center relative">
    <!-- Product Showcase -->
    <div class="w-full h-[70vh] relative overflow-hidden">
      <!-- Slide Container -->
      <div id="slide-container" class="slide-container flex h-full w-full">
        <!-- Product Slides -->
        <div class="product-slide min-w-full h-full flex items-center justify-center relative">
          <div class="max-w-6xl w-full flex flex-col md:flex-row items-center">
            <!-- Product Info -->
            <div class="w-full md:w-1/3 px-8 md:px-4 mb-8 md:mb-0 product-info active" id="info-0">
              <div class="inline-block bg-black/40 text-xs px-4 py-1 rounded-full mb-5">LIMITED TO 30 PIECES</div>
              <div class="text-gray-400 text-sm mb-4">CH-9001.1-SILV</div>
              <h1 class="text-5xl font-light leading-tight mb-7">FLYING<br>REGULATOR<br>CLASSIC</h1>
              <p class="text-gray-400 mb-6">A masterpiece of modern horology with classic design elements.</p>
              <button class="bg-yellow-500 text-black font-bold px-6 py-2 rounded-full text-sm">EXPLORE</button>
            </div>
            
            <!-- Product Image -->
            <div class="w-full md:w-2/3 flex justify-center product-image">
              <img src="https://images.pexels.com/photos/190819/pexels-photo-190819.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Flying Regulator Classic" class="max-h-[60vh] object-contain">
            </div>
          </div>
        </div>
        
        <div class="product-slide min-w-full h-full flex items-center justify-center relative">
          <div class="max-w-6xl w-full flex flex-col md:flex-row items-center">
            <div class="w-full md:w-1/3 px-8 md:px-4 mb-8 md:mb-0 product-info" id="info-1">
              <div class="inline-block bg-black/40 text-xs px-4 py-1 rounded-full mb-5">NEW COLLECTION</div>
              <div class="text-gray-400 text-sm mb-4">CH-8523.5-BLUE</div>
              <h1 class="text-5xl font-light leading-tight mb-7">SPACE<br>TIMER<br>MOON</h1>
              <p class="text-gray-400 mb-6">Inspired by celestial bodies with a unique moonphase complication.</p>
              <button class="bg-yellow-500 text-black font-bold px-6 py-2 rounded-full text-sm">EXPLORE</button>
            </div>
            <div class="w-full md:w-2/3 flex justify-center product-image bg-cover bg-center" 
     style="background-image: url('https://images.pexels.com/photos/190819/pexels-photo-190819.jpeg?auto=compress&cs=tinysrgb&w=600'); height: 60vh;">
    <img src="https://via.placeholder.com/300" alt="Space Timer Moon" class="max-h-full object-contain">
</div>

          </div>
        </div>
        
        <div class="product-slide min-w-full h-full flex items-center justify-center relative">
          <div class="max-w-6xl w-full flex flex-col md:flex-row items-center">
            <div class="w-full md:w-1/3 px-8 md:px-4 mb-8 md:mb-0 product-info" id="info-2">
              <div class="inline-block bg-black/40 text-xs px-4 py-1 rounded-full mb-5">LIMITED TO 50 PIECES</div>
              <div class="text-gray-400 text-sm mb-4">CH-9343.2-CUBK</div>
              <h1 class="text-5xl font-light leading-tight mb-7">SPACE<br>TIMER<br>JUPITER</h1>
              <p class="text-gray-400 mb-6">Bold design with a distinctive dial inspired by Jupiter's surface.</p>
              <button class="bg-yellow-500 text-black font-bold px-6 py-2 rounded-full text-sm">EXPLORE</button>
            </div>
            <div class="w-full md:w-2/3 flex justify-center product-image">
              <img src="/api/placeholder/800/600" alt="Space Timer Jupiter" class="max-h-[60vh] object-contain">
            </div>
          </div>
        </div>
        
        <div class="product-slide min-w-full h-full flex items-center justify-center relative">
          <div class="max-w-6xl w-full flex flex-col md:flex-row items-center">
            <div class="w-full md:w-1/3 px-8 md:px-4 mb-8 md:mb-0 product-info" id="info-3">
              <div class="inline-block bg-black/40 text-xs px-4 py-1 rounded-full mb-5">HERITAGE COLLECTION</div>
              <div class="text-gray-400 text-sm mb-4">CH-6721.8-GOLD</div>
              <h1 class="text-5xl font-light leading-tight mb-7">FLYING<br>GRAND<br>REGULATOR</h1>
              <p class="text-gray-400 mb-6">The pinnacle of watchmaking tradition with modern execution.</p>
              <button class="bg-yellow-500 text-black font-bold px-6 py-2 rounded-full text-sm">EXPLORE</button>
            </div>
            <div class="w-full md:w-2/3 flex justify-center product-image">
              <img src="/api/placeholder/800/600" alt="Flying Grand Regulator" class="max-h-[60vh] object-contain">
            </div>
          </div>
        </div>
        
        <div class="product-slide min-w-full h-full flex items-center justify-center relative">
          <div class="max-w-6xl w-full flex flex-col md:flex-row items-center">
            <div class="w-full md:w-1/3 px-8 md:px-4 mb-8 md:mb-0 product-info" id="info-4">
              <div class="inline-block bg-black/40 text-xs px-4 py-1 rounded-full mb-5">SKELETON SERIES</div>
              <div class="text-gray-400 text-sm mb-4">CH-4752.1-GBLK</div>
              <h1 class="text-5xl font-light leading-tight mb-7">OPUS<br>CHRONOGRAPH<br>SKELETON</h1>
              <p class="text-gray-400 mb-6">A technical marvel with exposed movement and chronograph function.</p>
              <button class="bg-yellow-500 text-black font-bold px-6 py-2 rounded-full text-sm">EXPLORE</button>
            </div>
            <div class="w-full md:w-2/3 flex justify-center product-image">
              <img src="/api/placeholder/800/600" alt="Opus Chronograph Skeleton" class="max-h-[60vh] object-contain">
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Navigation Controls -->
    <div class="flex justify-between items-center w-full px-8 md:px-20 absolute bottom-8">
      <!-- Dots Navigation -->
      <div class="flex gap-4 items-center">
        <div class="w-3 h-3 bg-white rounded-full dot-indicator active" data-index="0"></div>
        <div class="w-3 h-3 bg-white/30 rounded-full dot-indicator" data-index="1"></div>
        <div class="w-3 h-3 bg-white/30 rounded-full dot-indicator" data-index="2"></div>
        <div class="w-3 h-3 bg-white/30 rounded-full dot-indicator" data-index="3"></div>
        <div class="w-3 h-3 bg-white/30 rounded-full dot-indicator" data-index="4"></div>
      </div>
      
      <!-- Arrow Navigation -->
      <div class="flex gap-6 items-center">
        <div id="prev-btn" class="navigation-arrow flex items-center justify-center w-12 h-12 bg-black/40 rounded-full">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
          </svg>
        </div>
        <div id="next-btn" class="navigation-arrow flex items-center justify-center w-12 h-12 bg-black/40 rounded-full">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
          </svg>
        </div>
      </div>
    </div>
  </div>
  @extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white shadow-lg rounded-lg p-6">
         

            @if(session('success'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6" role="alert">
                    <p>{{ session('success') }}</p>
                </div>
            @endif

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @forelse ($watches as $watch)
                    <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                        <div class="w-full h-48 bg-gray-200 flex items-center justify-center rounded-md overflow-hidden">
                            @if($watch->photo)
                                <img src="{{ asset('storage/' . $watch->photo) }}" alt="{{ $watch->model }}" class="w-full h-full object-cover">
                            @else
                                <span class="text-gray-500 text-sm">Aucune image</span>
                            @endif
                        </div>
                        <h3 class="mt-4 text-lg font-semibold">{{ $watch->model }}</h3>
                        <p class="text-gray-600">Réf: {{ $watch->reference }}</p>
                        <p class="text-gray-800 font-bold">{{ number_format($watch->price, 2, ',', ' ') }} €</p>
                        <p class="text-sm {{ $watch->is_limited ? 'text-yellow-600' : 'text-gray-500' }}">
                            {{ $watch->is_limited ? 'Édition Limitée' : 'Standard' }}
                        </p>
                        <div class="mt-4 flex justify-between">
                            <a href="{{ route('watches.show', $watch) }}" class="text-blue-600 hover:text-blue-900">Voir</a>
                            <a href="{{ route('watches.edit', $watch) }}" class="text-yellow-600 hover:text-yellow-900">Modifier</a>
                            <form action="{{ route('watches.destroy', $watch) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette montre?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900">Supprimer</button>
                            </form>
                        </div>
                    </div>
                @empty
                    <p class="text-gray-500 col-span-full text-center">Aucune montre trouvée.</p>
                @endforelse
            </div>

            <div class="mt-6">
                {{ $watches->links() }}
            </div>
        </div>
    </div>
</div>
@endsection

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
    
    // Auto-advance slides (uncomment to enable)
    /*
    setInterval(() => {
      nextSlide();
    }, 5000);
    */
  </script>

  </div>
</body>
</html>