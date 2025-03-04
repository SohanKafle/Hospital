<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hospital</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
</head>

<body class="font-[raleway]">
    <div class="min-h-screen bg-gray-100">
        <!-- Top bar for Social and Contact Info -->
        <div class="px-8 bg-primary hidden md:block p-1">
            <div class="xl:max-w-7xl w-full mx-auto grid grid-cols-2 h-8">
                <div class="font-[poppins]">
                    <div class="flex items-center h-full justify-left text-sm font-medium text-secondary">
                        <div class="pr-4">
                            <i class="ri-phone-fill"></i>
                            <span>
                                <a href="tel:+977-9811225321" class="hover:text-gray-100">+977-9811225321</a>
                            </span>
                        </div>
                        <div>
                            <i class="ri-map-pin-fill"></i>
                            <span>
                                <a href="https://www.google.com/maps?q=Chitwan,+Nepal" target="_blank"
                                    class="hover:text-gray-100">Chitwan, Nepal</a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end items-center space-x-3">
                    <a href="#" target="_blank" class="group">
                        <div
                            class="group-hover:-translate-y-1 duration-300 transition ease-in-out delay-75 bg-white h-6 w-6 rounded-full relative flex items-center justify-center">
                            <i class="ri-facebook-fill text-indigo-600"></i>
                        </div>
                    </a>
                    <a href="#" target="_blank" class="group">
                        <div
                            class="group-hover:-translate-y-1 duration-300 transition ease-in-out delay-75 bg-white h-6 w-6 rounded-full relative flex items-center justify-center">
                            <i class="ri-instagram-fill text-pink-600"></i>
                        </div>
                    </a>
                    <a href="#" target="_blank" class="group">
                        <div
                            class="group-hover:-translate-y-1 duration-300 transition ease-in-out delay-75 bg-white h-6 w-6 rounded-full relative flex items-center justify-center">
                            <i class="ri-whatsapp-fill text-green-700"></i>
                        </div>
                    </a>
                    <a href="#" target="_blank" class="group">
                        <div
                            class="group-hover:-translate-y-1 duration-300 transition ease-in-out delay-75 bg-white h-6 w-6 rounded-full relative flex items-center justify-center">
                            <i class="ri-twitter-fill text-blue-700"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Main Navigation Bar -->
        <div class="px-6 w-full bg-secondary sticky top-0 z-30 p-2 shadow-lg">
            <div class="xl:max-w-7xl w-full mx-auto font-bold flex justify-between items-center p-2">
                <div class="flex items-center space-x-4">
                    <a href="/">
                        <img src="images/hos.png" alt="logo" class="w-32 md:w-40">
                    </a>
                </div>

                <!-- Menu Links (Right) -->
                <div class="hidden md:flex justify-end w-full">
                    <ul class="flex space-x-6">
                        <li class="group relative">
                            <a href="/" class="hover:text-primary">
                                Home
                            </a>
                            <div
                                class="bg-primary absolute bottom-0 h-[3px] w-full transform scale-x-0 origin-right transition-transform duration-300 ease-in group-hover:scale-x-100 group-hover:origin-left">
                            </div>
                        </li>
                        <li class="group relative">
                            <a href="#" class="hover:text-primary">
                                About Us
                            </a>
                            <div
                                class="bg-primary absolute bottom-0 h-[3px] w-full transform scale-x-0 origin-right transition-transform duration-300 ease-in group-hover:scale-x-100 group-hover:origin-left">
                            </div>
                        </li>
                        <li class="group relative">
                            <a href="#" class="hover:text-primary">
                                Doctors
                            </a>
                            <div
                                class="bg-primary absolute bottom-0 h-[3px] w-full transform scale-x-0 origin-right transition-transform duration-300 ease-in group-hover:scale-x-100 group-hover:origin-left">
                            </div>
                        </li>
                        <li class="group relative">
                            <a href="#" class="hover:text-primary">
                                Departments
                            </a>
                            <div
                                class="bg-primary absolute bottom-0 h-[3px] w-full transform scale-x-0 origin-right transition-transform duration-300 ease-in group-hover:scale-x-100 group-hover:origin-left">
                            </div>
                        </li>
                        <li class="group relative">
                            <a href="#" class="hover:text-primary">
                                Our Services
                            </a>
                            <div
                                class="bg-primary absolute bottom-0 h-[3px] w-full transform scale-x-0 origin-right transition-transform duration-300 ease-in group-hover:scale-x-100 group-hover:origin-left">
                            </div>
                        </li>
                        <li class="group relative">
                            <a href="#" class="hover:text-primary">
                                Contact
                            </a>
                            <div
                                class="bg-primary absolute bottom-0 h-[3px] w-full transform scale-x-0 origin-right transition-transform duration-300 ease-in group-hover:scale-x-100 group-hover:origin-left">
                            </div>
                        </li>
                    </ul>
                </div>


                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button class="text-black p-1 rounded-lg border-2 border-gray-300 hover:border-primary hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-primary transition-all duration-200" id="mobile-menu-button">
                        <i class="ri-menu-line text-3xl"></i>
                    </button>
                </div>
                
            </div>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="fixed z-50 transform -translate-x-full transition-transform duration-300">
            <div class="bg-secondary p-4 w-64 h-full font-medium">
                <ul class="space-y-4">
                    <li><a href="/" class="block hover:text-primary border-b border-gray-300 pb-2">Home</a></li>
                    <li><a href="#" class="block hover:text-primary border-b border-gray-300 pb-2">About Us</a></li>
                    <li><a href="#" class="block hover:text-primary border-b border-gray-300 pb-2">Doctors</a></li>
                    <li><a href="#" class="block hover:text-primary border-b border-gray-300 pb-2">Departments</a></li>
                    <li><a href="#" class="block hover:text-primary border-b border-gray-300 pb-2">Our Services</a></li>
                    <li><a href="#" class="block hover:text-primary border-b border-gray-300 pb-2">Contact</a></li>
                </ul>
                
            </div>
        </div>



        <main>
            @yield('content')
        </main>
    </div>

    <!-- Link Swiper's JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper('.swiper-container', {
            loop: true, // Allow looping of slides
            autoplay: {
                delay: 3000, // Slide change delay in ms (3 seconds)
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>

    <script>
        // Get the mobile menu and the button to toggle visibility
const mobileMenu = document.getElementById('mobile-menu');
const mobileMenuButton = document.getElementById('mobile-menu-button');

// Toggle the mobile menu visibility
mobileMenuButton.addEventListener('click', (e) => {
    e.stopPropagation(); // Prevents the click event from bubbling up to the document
    const isOpen = mobileMenu.classList.contains('translate-x-0');
    
    if (isOpen) {
        // Close the mobile menu
        mobileMenu.classList.remove('translate-x-0');
        mobileMenu.classList.add('-translate-x-full');
    } else {
        // Open the mobile menu
        mobileMenu.classList.remove('-translate-x-full');
        mobileMenu.classList.add('translate-x-0');
    }
});

// Close the mobile menu when clicking outside of it
document.addEventListener('click', (e) => {
    if (!mobileMenu.contains(e.target) && e.target !== mobileMenuButton) {
        mobileMenu.classList.remove('translate-x-0');
        mobileMenu.classList.add('-translate-x-full');
    }
});

    </script>
</body>

</html>
