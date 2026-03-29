<?php 
$page_title = "Academics";
$current_page = "academics";
include 'includes/header.php'; 
?>
    <div class="w-full bg-gray-50 pb-24">
      <div class="bg-blue-900 py-16 px-4 text-center">
        <h1 class="text-3xl md:text-5xl font-extrabold text-white mb-4">Academic Programs</h1>
        <div class="w-24 h-1 bg-yellow-500 mx-auto rounded-full"></div>
        <p class="mt-4 text-blue-200 text-lg max-w-2xl mx-auto">
          Explore our wide range of undergraduate and postgraduate courses affiliated with the University of Mumbai.
        </p>
      </div>

      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <!-- Faculty of Arts -->
          <div class="p-8 rounded-2xl shadow-sm border-2 transition-all duration-300 group border-blue-200 hover:border-blue-500 bg-white">
            <div class="mb-6"><i data-lucide="book" class="text-blue-600 w-10 h-10"></i></div>
            <h2 class="text-2xl font-bold text-gray-900 mb-3">Faculty of Arts</h2>
            <p class="text-gray-600 mb-6 text-sm leading-relaxed">Offering undergraduate and postgraduate programs focusing on literature, history, economics, and humanities.</p>
            
            <h3 class="font-semibold text-gray-800 mb-3 uppercase tracking-wider text-xs">Programs Offered:</h3>
            <ul class="space-y-2 mb-8">
              <li class="flex items-center text-sm text-gray-700"><span class="w-1.5 h-1.5 rounded-full bg-gray-400 mr-2"></span>B.A. (English, Marathi, Hindi)</li>
              <li class="flex items-center text-sm text-gray-700"><span class="w-1.5 h-1.5 rounded-full bg-gray-400 mr-2"></span>B.A. (History, Political Science)</li>
              <li class="flex items-center text-sm text-gray-700"><span class="w-1.5 h-1.5 rounded-full bg-gray-400 mr-2"></span>B.A. (Economics, Sociology)</li>
              <li class="flex items-center text-sm text-gray-700"><span class="w-1.5 h-1.5 rounded-full bg-gray-400 mr-2"></span>M.A. (History, Marathi)</li>
            </ul>
            
            <button class="flex items-center gap-2 text-sm font-bold text-blue-700 group-hover:text-blue-900 transition-colors mt-auto cursor-pointer">
              View Syllabus & Details <i data-lucide="chevron-right" class="w-4 h-4"></i>
            </button>
          </div>

          <!-- Faculty of Commerce -->
          <div class="p-8 rounded-2xl shadow-sm border-2 transition-all duration-300 group border-green-200 hover:border-green-500 bg-white">
            <div class="mb-6"><i data-lucide="calculator" class="text-green-600 w-10 h-10"></i></div>
            <h2 class="text-2xl font-bold text-gray-900 mb-3">Faculty of Commerce</h2>
            <p class="text-gray-600 mb-6 text-sm leading-relaxed">A comprehensive foundation in accounting, finance, and business management principles.</p>
            
            <h3 class="font-semibold text-gray-800 mb-3 uppercase tracking-wider text-xs">Programs Offered:</h3>
            <ul class="space-y-2 mb-8">
              <li class="flex items-center text-sm text-gray-700"><span class="w-1.5 h-1.5 rounded-full bg-gray-400 mr-2"></span>B.Com (Regular)</li>
              <li class="flex items-center text-sm text-gray-700"><span class="w-1.5 h-1.5 rounded-full bg-gray-400 mr-2"></span>M.Com (Accountancy)</li>
              <li class="flex items-center text-sm text-gray-700"><span class="w-1.5 h-1.5 rounded-full bg-gray-400 mr-2"></span>M.Com (Business Management)</li>
            </ul>
            
            <button class="flex items-center gap-2 text-sm font-bold text-blue-700 group-hover:text-blue-900 transition-colors mt-auto cursor-pointer">
              View Syllabus & Details <i data-lucide="chevron-right" class="w-4 h-4"></i>
            </button>
          </div>

          <!-- Faculty of Science -->
          <div class="p-8 rounded-2xl shadow-sm border-2 transition-all duration-300 group border-purple-200 hover:border-purple-500 bg-white">
            <div class="mb-6"><i data-lucide="flask-conical" class="text-purple-600 w-10 h-10"></i></div>
            <h2 class="text-2xl font-bold text-gray-900 mb-3">Faculty of Science</h2>
            <p class="text-gray-600 mb-6 text-sm leading-relaxed">Rigorous academic training combined with extensive practical laboratory sessions.</p>
            
            <h3 class="font-semibold text-gray-800 mb-3 uppercase tracking-wider text-xs">Programs Offered:</h3>
            <ul class="space-y-2 mb-8">
              <li class="flex items-center text-sm text-gray-700"><span class="w-1.5 h-1.5 rounded-full bg-gray-400 mr-2"></span>B.Sc. (Physics, Chemistry)</li>
              <li class="flex items-center text-sm text-gray-700"><span class="w-1.5 h-1.5 rounded-full bg-gray-400 mr-2"></span>B.Sc. (Mathematics, Botany)</li>
              <li class="flex items-center text-sm text-gray-700"><span class="w-1.5 h-1.5 rounded-full bg-gray-400 mr-2"></span>B.Sc. (Zoology)</li>
              <li class="flex items-center text-sm text-gray-700"><span class="w-1.5 h-1.5 rounded-full bg-gray-400 mr-2"></span>M.Sc. (Chemistry)</li>
            </ul>
            
            <button class="flex items-center gap-2 text-sm font-bold text-blue-700 group-hover:text-blue-900 transition-colors mt-auto cursor-pointer">
              View Syllabus & Details <i data-lucide="chevron-right" class="w-4 h-4"></i>
            </button>
          </div>

          <!-- Faculty of Management -->
          <div class="p-8 rounded-2xl shadow-sm border-2 transition-all duration-300 group border-orange-200 hover:border-orange-500 bg-white">
            <div class="mb-6"><i data-lucide="briefcase" class="text-orange-600 w-10 h-10"></i></div>
            <h2 class="text-2xl font-bold text-gray-900 mb-3">Self-Financing Courses</h2>
            <p class="text-gray-600 mb-6 text-sm leading-relaxed">Specialized undergraduate degrees tailored for modern corporate and financial sectors.</p>
            
            <h3 class="font-semibold text-gray-800 mb-3 uppercase tracking-wider text-xs">Programs Offered:</h3>
            <ul class="space-y-2 mb-8">
              <li class="flex items-center text-sm text-gray-700"><span class="w-1.5 h-1.5 rounded-full bg-gray-400 mr-2"></span>B.M.S (Management Studies)</li>
              <li class="flex items-center text-sm text-gray-700"><span class="w-1.5 h-1.5 rounded-full bg-gray-400 mr-2"></span>B.B.I (Banking & Insurance)</li>
            </ul>
            
            <button class="flex items-center gap-2 text-sm font-bold text-blue-700 group-hover:text-blue-900 transition-colors mt-auto cursor-pointer">
              View Syllabus & Details <i data-lucide="chevron-right" class="w-4 h-4"></i>
            </button>
          </div>

          <!-- IT & Computer Science -->
          <div class="p-8 rounded-2xl shadow-sm border-2 transition-all duration-300 group border-cyan-200 hover:border-cyan-500 bg-white">
            <div class="mb-6"><i data-lucide="monitor-play" class="text-cyan-600 w-10 h-10"></i></div>
            <h2 class="text-2xl font-bold text-gray-900 mb-3">IT & Computer Science</h2>
            <p class="text-gray-600 mb-6 text-sm leading-relaxed">Advanced technological studies designed to prepare students for the fast-paced IT industry.</p>
            
            <h3 class="font-semibold text-gray-800 mb-3 uppercase tracking-wider text-xs">Programs Offered:</h3>
            <ul class="space-y-2 mb-8">
              <li class="flex items-center text-sm text-gray-700"><span class="w-1.5 h-1.5 rounded-full bg-gray-400 mr-2"></span>B.Sc. Information Technology</li>
              <li class="flex items-center text-sm text-gray-700"><span class="w-1.5 h-1.5 rounded-full bg-gray-400 mr-2"></span>B.Sc. Computer Science</li>
              <li class="flex items-center text-sm text-gray-700"><span class="w-1.5 h-1.5 rounded-full bg-gray-400 mr-2"></span>M.Sc. Information Technology</li>
            </ul>
            
            <button class="flex items-center gap-2 text-sm font-bold text-blue-700 group-hover:text-blue-900 transition-colors mt-auto cursor-pointer">
              View Syllabus & Details <i data-lucide="chevron-right" class="w-4 h-4"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
<?php include 'includes/footer.php'; ?>
