<?php include 'head.php'; ?>
    <!-- Top Bar -->
    <div class="bg-blue-950 text-white text-xs md:text-sm py-2 px-4 md:px-8 flex flex-col md:flex-row justify-between items-center z-50 relative">
      <div class="flex gap-4 md:gap-6 mb-2 md:mb-0">
        <span class="flex items-center gap-1 md:gap-2">
          <i data-lucide="phone" class="text-yellow-400 w-3.5 h-3.5"></i>
          +91 250 233 2017
        </span>
        <span class="flex items-center gap-1 md:gap-2">
          <i data-lucide="mail" class="text-yellow-400 w-3.5 h-3.5"></i>
          tpo@avc.ac.in
        </span>
      </div>
      <div class="flex gap-4 items-center font-medium">
        <a href="#" class="hover:text-yellow-400 transition-colors">Alumni</a>
        <div class="w-px h-4 bg-gray-500"></div>
        <a href="#" class="hover:text-yellow-400 transition-colors">Student Portal</a>
        <div class="w-px h-4 bg-gray-500"></div>
        <a href="#" class="hover:text-yellow-400 transition-colors">Staff Login</a>
      </div>
    </div>

    <!-- Main Header -->
    <header class="bg-white shadow-sm sticky top-0 z-40">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center py-4">
          <!-- Logo area -->
          <a href="index.php" class="flex items-center gap-3 md:gap-4">
            <img src="logo-college.png" alt="College Logo" class="h-12 md:h-16 w-auto object-contain flex-shrink-0 drop-shadow-sm" />
            <div class="flex flex-col">
              <h1 class="text-lg md:text-2xl font-bold text-blue-950 leading-tight">
                Vidyavardhini's A. V. College
              </h1>
              <p class="text-[10px] md:text-xs text-gray-500 font-medium hidden sm:block">
                Affiliated to University of Mumbai | NAAC Accredited 'B' Grade
              </p>
            </div>
          </a>

          <!-- Desktop Navigation -->
          <nav class="hidden md:flex items-center gap-8">
            <a href="index.php" class="text-sm font-semibold tracking-wide uppercase transition-colors hover:text-blue-600 <?= ($current_page == 'home') ? 'text-blue-700' : 'text-gray-700' ?>">Home</a>
            <a href="about.php" class="text-sm font-semibold tracking-wide uppercase transition-colors hover:text-blue-600 <?= ($current_page == 'about') ? 'text-blue-700' : 'text-gray-700' ?>">About Us</a>
            <a href="academics.php" class="text-sm font-semibold tracking-wide uppercase transition-colors hover:text-blue-600 <?= ($current_page == 'academics') ? 'text-blue-700' : 'text-gray-700' ?>">Academics</a>
            <a href="admissions.php" class="text-sm font-semibold tracking-wide uppercase transition-colors hover:text-blue-600 <?= ($current_page == 'admissions') ? 'text-blue-700' : 'text-gray-700' ?>">Admissions</a>
            <a href="contact.php" class="text-sm font-semibold tracking-wide uppercase transition-colors hover:text-blue-600 <?= ($current_page == 'contact') ? 'text-blue-700' : 'text-gray-700' ?>">Contact</a>
            <a href="admissions.php" class="bg-yellow-500 hover:bg-yellow-400 text-blue-950 font-bold px-5 py-2.5 rounded-md text-sm transition-all shadow-sm">
              Apply Now
            </a>
          </nav>

          <!-- Mobile Menu Button -->
          <button id="mobile-menu-btn" class="md:hidden p-2 rounded-md text-gray-600 hover:text-blue-900 focus:outline-none">
            <i data-lucide="menu" class="w-7 h-7"></i>
          </button>
        </div>
      </div>

      <!-- Mobile Navigation -->
      <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100 px-4 py-4 space-y-4 shadow-lg absolute w-full z-50">
        <a href="index.php" class="block px-3 py-2 rounded-md text-base font-medium <?= ($current_page == 'home') ? 'text-blue-700 bg-blue-50' : 'text-gray-700 hover:bg-gray-50' ?>">Home</a>
        <a href="about.php" class="block px-3 py-2 rounded-md text-base font-medium <?= ($current_page == 'about') ? 'text-blue-700 bg-blue-50' : 'text-gray-700 hover:bg-gray-50' ?>">About Us</a>
        <a href="academics.php" class="block px-3 py-2 rounded-md text-base font-medium <?= ($current_page == 'academics') ? 'text-blue-700 bg-blue-50' : 'text-gray-700 hover:bg-gray-50' ?>">Academics</a>
        <a href="admissions.php" class="block px-3 py-2 rounded-md text-base font-medium <?= ($current_page == 'admissions') ? 'text-blue-700 bg-blue-50' : 'text-gray-700 hover:bg-gray-50' ?>">Admissions</a>
        <a href="contact.php" class="block px-3 py-2 rounded-md text-base font-medium <?= ($current_page == 'contact') ? 'text-blue-700 bg-blue-50' : 'text-gray-700 hover:bg-gray-50' ?>">Contact</a>
        <a href="admissions.php" class="block w-full text-center bg-yellow-500 text-blue-950 font-bold px-4 py-3 rounded-md mt-4">Apply Now</a>
      </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow">
