<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Grand Emily Hotel</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="text-white">
    
        <!-- Main Container -->
        <div class="relative min-h-screen bg-cover bg-center" 
            style="background-image: url('https://images.pexels.com/photos/4065133/pexels-photo-4065133.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2');">
            
            <!-- Overlay -->
            <div class="absolute inset-0 bg-black/50"></div>
    
            <!-- Navigation -->
            <nav class="absolute w-full flex justify-between items-center px-8 py-4 z-50">
                <button class="text-white text-sm uppercase tracking-wider">Menu</button>
                <a href="#" class="text-white text-sm uppercase tracking-wider"></a>
                <div class="flex space-x-6">
                    <a href="#" class="text-white text-sm uppercase tracking-wider hover:underline">Our Locations</a>
                    <a href="#" class="text-white text-sm uppercase tracking-wider hover:underline">SHOPE Now</a>
                </div>
            </nav>
    
            <!-- Hero Section -->
            <div class="relative flex flex-col items-center justify-center text-center min-h-screen px-6">
                
                <!-- Hotel Name -->
                <h1 class="text-5xl md:text-7xl font-light tracking-widest mb-6">
                    Vous êtes le secret de notre créativité
                </h1>
    
                <!-- Navigation Links -->
                <div class="flex items-center space-x-8 text-lg uppercase tracking-wider mb-8">
                    <a href="#" class="hover:underline">Suites</a>
                    <span>•</span>
                    <a href="#" class="hover:underline">PRODUCTS</a>
                </div>
    
                <!-- CTA Button -->
                <a href="/products/index" class="px-8 py-3 border border-white text-sm uppercase tracking-wider hover:bg-white hover:text-black transition-all duration-300">
                    Let's Go
                </a>
    
                <!-- Description -->
                <p class="absolute bottom-12 max-w-2xl mx-auto text-sm px-4 text-gray-300">
                    Youshope est la solution idéale pour les probléme qui créent leur société en ligne,
                     Notre solution pour vendre en ligne vous permet de développer votre site e-commerce efficacement. 
                     Profitez en effet de fonctionnalités avancées pour promouvoir votre boutique en ligne et booster vos ventes.
                </p>
            </div>
        </div>
    
    </body>
    </html>
    