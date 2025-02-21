
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Platform</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        @keyframes pulse-glow {
            0%, 100% { box-shadow: 0 0 20px rgba(147, 197, 253, 0.3); }
            50% { box-shadow: 0 0 30px rgba(147, 197, 253, 0.5); }
        }
        .pulse-glow {
            animation: pulse-glow 3s infinite;
        }
        .nav-link::after {
            content: '';
            display: block;
            width: 0;
            height: 2px;
            background: #93c5fd;
            transition: width .3s;
            margin-top: 2px;
        }
        .nav-link:hover::after {
            width: 100%;
        }
    </style>
</head>
<body class="font-['Inter']">
    <!-- Navbar -->
    <nav class="bg-slate-900 shadow-lg fixed w-full z-10">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="#" class="text-2xl font-semibold text-white relative group">
                        <span class="before:content-[''] before:absolute before:-bottom-2 before:left-0 before:w-0 before:h-0.5 before:bg-blue-300 before:transition-all before:duration-300 group-hover:before:w-full">
                            EventFlow
                        </span>
                    </a>
                </div>
                
                <!-- Navigation Links -->
                <div class="hidden md:flex space-x-6">
                    <a href="#" class="nav-link text-gray-300 hover:text-blue-300 transition duration-300 text-lg">Home</a>
                    <a href="#" class="nav-link text-gray-300 hover:text-blue-300 transition duration-300 text-lg">About</a>
                    <a href="#" class="nav-link text-gray-300 hover:text-blue-300 transition duration-300 text-lg">Contact</a>
                    <a href="#" class="nav-link text-gray-300 hover:text-blue-300 transition duration-300 text-lg">Events</a>
                </div>

                <!-- Auth Buttons -->
                <div class="hidden md:flex items-center space-x-4">
                    <a href="#" class="text-gray-300 hover:text-blue-300 transition duration-300 text-lg">Login</a>
                    <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded-md text-lg font-medium hover:bg-blue-700 transition duration-300">
                        Register
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="h-screen bg-cover bg-center relative" 
             style="background-image: url('https://images.unsplash.com/photo-1505236858219-8359eb29e329?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80');">
        <div class="absolute inset-0 bg-slate-900/90"></div>
        
        <!-- Decorative Elements -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute top-20 left-10 w-12 h-12 bg-blue-300/10 rounded-full animate-float"></div>
            <div class="absolute bottom-20 right-10 w-12 h-12 bg-blue-300/10 rounded-full animate-float" style="animation-delay: 2s;"></div>
        </div>

        <div class="relative h-full w-full flex items-center">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h1 class="text-4xl md:text-5xl font-semibold text-white mb-4 tracking-tight">
                    Plan Your Events with 
                    <span class="text-blue-300">Simplicity</span>
                </h1>
                <p class="text-xl text-gray-300 mb-6 max-w-2xl mx-auto font-light">
                    Streamlined event management platform for seamless planning and organization.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="#" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-md text-lg font-medium hover:bg-blue-700 transition duration-300">
                        Get Started
                    </a>
                    <a href="#" class="inline-block border border-blue-300 text-blue-300 px-6 py-3 rounded-md text-lg font-medium hover:bg-blue-300/10 transition duration-300">
                        Learn More
                    </a>
                </div>
            </div>
        </div>
    </section>
</body>
</html>