<?php 
$page_title = "About Us";
$current_page = "about";
include 'includes/header.php'; 
?>
    <div class="w-full bg-white pb-20">
      <!-- Header Banner -->
      <div class="bg-blue-900 py-16 px-4 text-center">
        <h1 class="text-3xl md:text-5xl font-extrabold text-white mb-4">About the College</h1>
        <div class="w-24 h-1 bg-yellow-500 mx-auto rounded-full"></div>
        <p class="mt-4 text-blue-200 text-lg max-w-2xl mx-auto">
          A legacy of academic excellence and holistic development.
        </p>
      </div>

      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-12 md:mt-20">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
          <div>
            <h2 class="text-3xl font-bold text-gray-900 mb-6 relative pb-4">
              Our Heritage & History
              <span class="absolute bottom-0 left-0 w-16 h-1 bg-yellow-500 rounded"></span>
            </h2>
            <p class="text-gray-600 leading-relaxed mb-6">
              Vidyavardhini was established in 1971 by the late Padmashri Bhausaheb Vartak to provide higher education opportunities to the students of Vasai and surrounding rural areas. The institution started with Annasaheb Vartak College of Arts, and soon expanded to include Commerce and Science faculties to meet the growing educational needs of the region.
            </p>
            <p class="text-gray-600 leading-relaxed mb-6">
              Today, Vidyavardhini is an umbrella organization managing several institutions, catering to over 7000 students annually. Our focus has always been to empower students, not just with degrees, but with the necessary skills to navigate life's challenges.
            </p>
            <ul class="space-y-3">
              <li class="flex items-start gap-3">
                <i data-lucide="check-circle-2" class="text-blue-600 flex-shrink-0 mt-1 w-5 h-5"></i>
                <span class="text-gray-700 font-medium">Affiliated to University of Mumbai</span>
              </li>
              <li class="flex items-start gap-3">
                <i data-lucide="check-circle-2" class="text-blue-600 flex-shrink-0 mt-1 w-5 h-5"></i>
                <span class="text-gray-700 font-medium">Re-accredited by NAAC with 'B' Grade</span>
              </li>
              <li class="flex items-start gap-3">
                <i data-lucide="check-circle-2" class="text-blue-600 flex-shrink-0 mt-1 w-5 h-5"></i>
                <span class="text-gray-700 font-medium">Vast campus spanning over 10 acres</span>
              </li>
            </ul>
          </div>
          
          <div class="grid grid-cols-2 gap-4">
            <div class="bg-blue-50 p-6 rounded-2xl flex flex-col items-center text-center">
              <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center text-white mb-4">
                <i data-lucide="target" class="w-8 h-8"></i>
              </div>
              <h3 class="text-xl font-bold text-gray-900 mb-2">Our Mission</h3>
              <p class="text-sm text-gray-600">To impart quality higher education to the youth, making them self-reliant, responsible, and ethical citizens.</p>
            </div>
            
            <div class="bg-yellow-50 p-6 rounded-2xl flex flex-col items-center text-center mt-8">
              <div class="w-16 h-16 bg-yellow-500 rounded-full flex items-center justify-center text-blue-900 mb-4">
                <i data-lucide="shield" class="w-8 h-8"></i>
              </div>
              <h3 class="text-xl font-bold text-gray-900 mb-2">Our Vision</h3>
              <p class="text-sm text-gray-600">To emerge as an institution of excellence integrating modern scientific knowledge with enduring social values.</p>
            </div>
            
            <div class="bg-green-50 p-6 rounded-2xl flex flex-col items-center text-center">
              <div class="w-16 h-16 bg-green-600 rounded-full flex items-center justify-center text-white mb-4">
                <i data-lucide="book-open" class="w-8 h-8"></i>
              </div>
              <h3 class="text-xl font-bold text-gray-900 mb-2">Core Values</h3>
              <p class="text-sm text-gray-600">Integrity, Academic Freedom, Social Responsibility, and Continuous Learning.</p>
            </div>
            
            <div class="bg-purple-50 p-6 rounded-2xl flex flex-col items-center text-center mt-8">
              <div class="w-16 h-16 bg-purple-600 rounded-full flex items-center justify-center text-white mb-4">
                <i data-lucide="award" class="w-8 h-8"></i>
              </div>
              <h3 class="text-xl font-bold text-gray-900 mb-2">Quality Policy</h3>
              <p class="text-sm text-gray-600">Commitment to continuous quality improvement and meeting the expectations of all stakeholders.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php include 'includes/footer.php'; ?>
