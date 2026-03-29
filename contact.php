<?php

$page_title = "Contact Us";
$current_page = "contact";

$success_msg = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name'] ?? '');
    $success_msg = "Thank you, $name! Your message has been received.";
}

include 'includes/header.php';

?>
    <div class="w-full bg-gray-50 pb-24">
      <div class="bg-blue-900 py-16 px-4 text-center">
        <h1 class="text-3xl md:text-5xl font-extrabold text-white mb-4">Contact Us</h1>
        <div class="w-24 h-1 bg-yellow-500 mx-auto rounded-full"></div>
        <p class="mt-4 text-blue-200 text-lg max-w-2xl mx-auto">
          We are here to help and answer any questions you might have.
        </p>
      </div>

      <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 mt-12">
        <?php if (!empty($success_msg)): ?>
            <div class="bg-green-100 text-green-800 p-4 rounded-lg mb-8 font-medium shadow-sm flex items-center gap-3 border border-green-200">
                <i data-lucide="check-circle" class="w-5 h-5 text-green-600"></i>
                <?php echo $success_msg; ?>
            </div>
        <?php
endif; ?>
        
        <div class="bg-white p-8 md:p-10 rounded-2xl shadow-sm border border-gray-100">
            <form action="contact.php" method="POST" class="space-y-6">
                <div>
                    <label for="name" class="block font-semibold text-gray-800 mb-2 text-sm">Full Name</label>
                    <input type="text" id="name" name="name" class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all" required placeholder="Aman Gupta">
                </div>
                <div>
                    <label for="email" class="block font-semibold text-gray-800 mb-2 text-sm">Email Address</label>
                    <input type="email" id="email" name="email" class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all" required placeholder="aman@example.com">
                </div>
                <div>
                    <label for="subject" class="block font-semibold text-gray-800 mb-2 text-sm">Subject</label>
                    <select id="subject" name="subject" class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all text-gray-700 bg-white">
                        <option value="admission">Admission Inquiry</option>
                        <option value="academics">Academic Programs</option>
                        <option value="general">General Information</option>
                    </select>
                </div>
                <div>
                    <label for="message" class="block font-semibold text-gray-800 mb-2 text-sm">Message</label>
                    <textarea id="message" name="message" rows="5" class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all" required placeholder="How can we help you?"></textarea>
                </div>
                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3.5 rounded-lg shadow-md transition-all flex items-center justify-center gap-2 cursor-pointer">
                    Send Message <i data-lucide="send" class="w-4 h-4"></i>
                </button>
            </form>
        </div>
      </div>
    </div>
<?php include 'includes/footer.php'; ?>
