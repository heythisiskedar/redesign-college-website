<?php
$page_title = "Home";
$current_page = "home";
include 'includes/header.php';
?>
<div class="w-full">
  <!-- Hero Section -->
  <section class="relative h-[80vh] min-h-[600px] flex items-center justify-center bg-gray-900 overflow-hidden">
    <!-- Background Image Overlay -->
    <div class="absolute inset-0 z-0">
      <img src="college-image.jpg" alt="Vidyavardhini Campus Background" class="w-full h-full object-cover opacity-40">
    </div>

    <!-- Hero Content -->
    <div class="relative z-10 text-center max-w-4xl px-4 sm:px-6 lg:px-8 mx-auto mt-16">
      <span
        class="inline-block py-1 px-3 rounded-full bg-yellow-500 text-blue-950 text-xs sm:text-sm font-bold tracking-widest uppercase mb-6 shadow-sm">
        Empowering Minds Since 1971
      </span>
      <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold text-white mb-6 leading-tight drop-shadow-lg">
        Welcome to Vidyavardhini’s
        <span class="block text-yellow-400 mt-2">Annasaheb Vartak College</span>
      </h1>
      <p class="text-lg md:text-xl text-gray-200 mb-10 max-w-2xl mx-auto font-light leading-relaxed">
        A premier institution in Vasai, committed to holistic education, academic excellence, and character building
        across Arts, Commerce, and Science.
      </p>
      <div class="flex flex-col sm:flex-row gap-4 justify-center">
        <a href="admissions.php"
          class="bg-yellow-500 hover:bg-yellow-400 text-blue-950 font-bold px-8 py-3.5 rounded-md text-base transition-all shadow-lg hover:shadow-xl flex items-center justify-center gap-2">
          Explore Admissions <i data-lucide="arrow-right" class="w-5 h-5"></i>
        </a>
        <a href="about.php"
          class="bg-white/10 hover:bg-white/20 backdrop-blur-sm border-2 border-white/50 text-white font-semibold px-8 py-3.5 rounded-md text-base transition-all flex items-center justify-center">
          Virtual Campus Tour
        </a>
      </div>
    </div>
  </section>

  <!-- Main Content Area - Notices and Quick Links -->
  <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 -mt-16 relative z-20">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

      <!-- Notice Board -->
      <div
        class="lg:col-span-2 bg-white rounded-xl shadow-xl overflow-hidden border border-gray-100 flex flex-col h-[500px]">
        <div class="bg-blue-900 p-5 flex justify-between items-center">
          <h2 class="text-xl font-bold text-white flex items-center gap-2">
            <i data-lucide="file-text" class="text-yellow-400 w-6 h-6"></i> Latest Announcements
          </h2>
          <a href="#" class="text-sm text-blue-200 hover:text-white transition-colors flex items-center gap-1">
            View All <i data-lucide="chevron-right" class="w-4 h-4"></i>
          </a>
        </div>

        <div class="flex-grow p-0 overflow-y-auto">
          <ul class="divide-y divide-gray-100">
            <li class="p-5 hover:bg-blue-50/50 transition-colors group">
              <div class="flex items-start gap-4">
                <div class="flex-shrink-0 bg-gray-50 border border-gray-200 rounded-lg p-2 text-center w-16">
                  <span class="block text-xl font-bold text-blue-900 leading-none mb-1">24</span>
                  <span class="block text-xs uppercase text-gray-500 font-semibold">Mar</span>
                </div>
                <div>
                  <a href="#"
                    class="text-gray-800 font-medium group-hover:text-blue-700 transition-colors line-clamp-2">FYBA/BCOM/BSC
                    Semester II Regular Exam Time Table 2026</a>
                  <span
                    class="inline-block mt-2 px-2 py-0.5 bg-red-100 text-red-700 text-xs font-bold rounded">NEW</span>
                </div>
              </div>
            </li>
            <li class="p-5 hover:bg-blue-50/50 transition-colors group">
              <div class="flex items-start gap-4">
                <div class="flex-shrink-0 bg-gray-50 border border-gray-200 rounded-lg p-2 text-center w-16">
                  <span class="block text-xl font-bold text-blue-900 leading-none mb-1">22</span>
                  <span class="block text-xs uppercase text-gray-500 font-semibold">Mar</span>
                </div>
                <div>
                  <a href="#"
                    class="text-gray-800 font-medium group-hover:text-blue-700 transition-colors line-clamp-2">Notice
                    regarding submission of ATKT forms for Semester I & III</a>
                  <span
                    class="inline-block mt-2 px-2 py-0.5 bg-red-100 text-red-700 text-xs font-bold rounded">NEW</span>
                </div>
              </div>
            </li>
            <li class="p-5 hover:bg-blue-50/50 transition-colors group">
              <div class="flex items-start gap-4">
                <div class="flex-shrink-0 bg-gray-50 border border-gray-200 rounded-lg p-2 text-center w-16">
                  <span class="block text-xl font-bold text-blue-900 leading-none mb-1">15</span>
                  <span class="block text-xs uppercase text-gray-500 font-semibold">Mar</span>
                </div>
                <div>
                  <a href="#"
                    class="text-gray-800 font-medium group-hover:text-blue-700 transition-colors line-clamp-2">Guidelines
                    for TY Online Examinations (University of Mumbai)</a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>

      <!-- Quick Links / Important Highlights -->
      <div class="space-y-6">
        <div class="bg-blue-50 rounded-xl p-6 border border-blue-100">
          <h3 class="text-lg font-bold text-blue-900 mb-4 flex items-center gap-2">
            <i data-lucide="globe" class="text-blue-600 w-5 h-5"></i> Principal's Message
          </h3>
          <p class="text-sm text-gray-700 leading-relaxed italic mb-4">
            "Our aim is not just imparting academic knowledge, but shaping individuals who are responsible citizens
            equipped with ethics and modern skills to face global challenges."
          </p>
          <div class="flex items-center gap-3">
            <div>
              <p class="text-sm font-bold text-gray-900">Dr. Arvind N. Patil</p>
              <p class="text-xs text-gray-500">Principal</p>
            </div>
          </div>
        </div>

        <div class="grid grid-cols-2 gap-4">
          <a href="academics.php"
            class="bg-white p-4 rounded-xl shadow-sm border border-gray-100 hover:border-blue-300 hover:shadow-md transition-all flex flex-col items-center text-center gap-2 group">
            <div
              class="w-12 h-12 bg-blue-100 text-blue-700 rounded-full flex items-center justify-center group-hover:bg-blue-600 group-hover:text-white transition-colors">
              <i data-lucide="book-open" class="w-6 h-6"></i>
            </div>
            <span class="text-sm font-semibold text-gray-800">UG Programs</span>
          </a>
          <a href="academics.php"
            class="bg-white p-4 rounded-xl shadow-sm border border-gray-100 hover:border-blue-300 hover:shadow-md transition-all flex flex-col items-center text-center gap-2 group">
            <div
              class="w-12 h-12 bg-purple-100 text-purple-700 rounded-full flex items-center justify-center group-hover:bg-purple-600 group-hover:text-white transition-colors">
              <i data-lucide="graduation-cap" class="w-6 h-6"></i>
            </div>
            <span class="text-sm font-semibold text-gray-800">PG Programs</span>
          </a>
          <a href="#"
            class="bg-white p-4 rounded-xl shadow-sm border border-gray-100 hover:border-blue-300 hover:shadow-md transition-all flex flex-col items-center text-center gap-2 group">
            <div
              class="w-12 h-12 bg-green-100 text-green-700 rounded-full flex items-center justify-center group-hover:bg-green-600 group-hover:text-white transition-colors">
              <i data-lucide="calendar" class="w-6 h-6"></i>
            </div>
            <span class="text-sm font-semibold text-gray-800">Academic Calendar</span>
          </a>
          <a href="#"
            class="bg-white p-4 rounded-xl shadow-sm border border-gray-100 hover:border-blue-300 hover:shadow-md transition-all flex flex-col items-center text-center gap-2 group">
            <div
              class="w-12 h-12 bg-orange-100 text-orange-700 rounded-full flex items-center justify-center group-hover:bg-orange-600 group-hover:text-white transition-colors">
              <i data-lucide="users" class="w-6 h-6"></i>
            </div>
            <span class="text-sm font-semibold text-gray-800">Student Corner</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Stats Section -->
  <section class="bg-blue-900 py-16 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
        <div class="space-y-2">
          <h4 class="text-4xl md:text-5xl font-extrabold text-yellow-400">50+</h4>
          <p class="text-sm md:text-base text-blue-200 uppercase tracking-wide font-medium">Years of Excellence</p>
        </div>
        <div class="space-y-2">
          <h4 class="text-4xl md:text-5xl font-extrabold text-yellow-400">7000+</h4>
          <p class="text-sm md:text-base text-blue-200 uppercase tracking-wide font-medium">Active Students</p>
        </div>
        <div class="space-y-2">
          <h4 class="text-4xl md:text-5xl font-extrabold text-yellow-400">15+</h4>
          <p class="text-sm md:text-base text-blue-200 uppercase tracking-wide font-medium">Academic Programs</p>
        </div>
        <div class="space-y-2">
          <h4 class="text-4xl md:text-5xl font-extrabold text-yellow-400">100+</h4>
          <p class="text-sm md:text-base text-blue-200 uppercase tracking-wide font-medium">Dedicated Faculty</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Campus Life & Facilities Image Grid -->
  <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
    <div class="text-center mb-12">
      <h2 class="text-3xl font-bold text-gray-900 mb-4">Campus Life at AVC</h2>
      <div class="w-24 h-1 bg-yellow-500 mx-auto rounded-full"></div>
      <p class="mt-4 text-gray-600 max-w-2xl mx-auto">
        Experience a vibrant campus atmosphere with modern infrastructure designed to foster academic and
        extracurricular excellence.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <div class="relative group rounded-xl overflow-hidden shadow-lg h-64 lg:col-span-2">
        <img src="https://images.shiksha.com/mediadata/images/1590145543php658Qed.png" alt="Central Library"
          class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/80 via-gray-900/20 to-transparent"></div>
        <div class="absolute bottom-0 left-0 p-6">
          <h3 class="text-xl font-bold text-white mb-1">State-of-the-art Library</h3>
          <p class="text-gray-300 text-sm">Rich collection of books, journals, and digital resources.</p>
        </div>
      </div>

      <div class="relative group rounded-xl overflow-hidden shadow-lg h-64">
        <img src="https://avcjr.ac.in/wp-content/uploads/2022/05/WhatsApp-Image-2022-05-13-at-1.24.02-PM.jpeg"
          alt="Science Labs" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/80 via-gray-900/20 to-transparent"></div>
        <div class="absolute bottom-0 left-0 p-6">
          <h3 class="text-xl font-bold text-white mb-1">Modern Labs</h3>
          <p class="text-gray-300 text-sm">Well-equipped science and IT labs.</p>
        </div>
      </div>

      <div class="relative group rounded-xl overflow-hidden shadow-lg h-64">
        <img src="https://nipun-vartak.web.app/assets/college4.jpg" alt="Student Life"
          class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/80 via-gray-900/20 to-transparent"></div>
        <div class="absolute bottom-0 left-0 p-6">
          <h3 class="text-xl font-bold text-white mb-1">Vibrant Culture</h3>
          <p class="text-gray-300 text-sm">Extracurricular activities and fests.</p>
        </div>
      </div>

      <div class="relative group rounded-xl overflow-hidden shadow-lg h-64 lg:col-span-2">
        <div class="absolute inset-0 bg-blue-900 flex flex-col justify-center items-center text-center p-8">
          <h3 class="text-2xl font-bold text-white mb-4">Ready to shape your future?</h3>
          <p class="text-blue-200 mb-6 max-w-lg">Join thousands of successful alumni who have built their careers with
            the foundation laid at Vidyavardhini.</p>
          <a href="admissions.php"
            class="bg-yellow-500 hover:bg-yellow-400 text-blue-950 font-bold px-6 py-3 rounded-md transition-colors shadow-sm">
            Start Admission Process
          </a>
        </div>
      </div>
    </div>
  </section>
</div>
<?php include 'includes/footer.php'; ?>