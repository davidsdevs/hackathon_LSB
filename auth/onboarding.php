<!doctype html>
<html class="h-full bg-white dark:bg-gray-900">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>COPit! - Onboarding</title>
  </head>
  <body class="h-full">
    <div class="min-h-full flex flex-col justify-center px-6 py-12 lg:px-8">
      <!-- Step 1: Welcome -->
      <div id="step-1" class="onboarding-step">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm text-center">
          <!-- COPit! Logo -->
        
          
          <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">
            Welcome to COPit!
          </h2>
          
          <p class="text-gray-600 dark:text-gray-300 mb-8 leading-relaxed">
            Discover the thrill of competitive thrift shopping with our unique Mine-Steal-Lock system.
          </p>
          
          <!-- Progress dots -->
          <div class="flex justify-center space-x-2 mb-8">
            <div class="w-2 h-2 bg-gray-600 rounded-full"></div>
            <div class="w-2 h-2 bg-gray-300 dark:bg-gray-600 rounded-full"></div>
            <div class="w-2 h-2 bg-gray-300 dark:bg-gray-600 rounded-full"></div>
            <div class="w-2 h-2 bg-gray-300 dark:bg-gray-600 rounded-full"></div>
          </div>
          
          <button onclick="nextStep()" class="w-full bg-gray-600 text-white py-3 px-6 rounded-lg font-semibold hover:bg-gray-500 transition-colors">
            Next
          </button>
        </div>
      </div>

      <!-- Step 2: Mine-Steal-Lock System -->
      <div id="step-2" class="onboarding-step hidden">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm text-center">
          <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-8">
            How it works?
          </h2>
          
          <!-- Thief Character Illustration -->
          <div class="mb-8 flex justify-center">
            <div class="w-32 h-32 bg-gray-100 dark:bg-gray-800 rounded-full flex items-center justify-center">
              <div class="text-6xl">🕵️</div>
            </div>
          </div>
          
          <div class="space-y-4 mb-8 text-left">
            <div class="flex items-center space-x-3">
              <div class="w-8 h-8 bg-gray-100 dark:bg-gray-900 rounded-full flex items-center justify-center">
                <span class="text-gray-600 dark:text-gray-400 font-bold">1</span>
              </div>
              <span class="text-gray-700 dark:text-gray-300 font-medium">Mine - Instantly claim an item</span>
            </div>
            <div class="flex items-center space-x-3">
              <div class="w-8 h-8 bg-gray-100 dark:bg-gray-900 rounded-full flex items-center justify-center">
                <span class="text-gray-600 dark:text-gray-400 font-bold">2</span>
              </div>
              <span class="text-gray-700 dark:text-gray-300 font-medium">Steal - Outbid and take it</span>
            </div>
            <div class="flex items-center space-x-3">
              <div class="w-8 h-8 bg-gray-100 dark:bg-gray-900 rounded-full flex items-center justify-center">
                <span class="text-gray-600 dark:text-gray-400 font-bold">3</span>
              </div>
              <span class="text-gray-700 dark:text-gray-300 font-medium">Lock - Secure the item at the highest price</span>
            </div>
          </div>
          
          <!-- Progress dots -->
          <div class="flex justify-center space-x-2 mb-8">
            <div class="w-2 h-2 bg-gray-300 dark:bg-gray-600 rounded-full"></div>
            <div class="w-2 h-2 bg-gray-600 rounded-full"></div>
            <div class="w-2 h-2 bg-gray-300 dark:bg-gray-600 rounded-full"></div>
            <div class="w-2 h-2 bg-gray-300 dark:bg-gray-600 rounded-full"></div>
          </div>
          
          <div class="flex space-x-4">
            <button onclick="prevStep()" class="flex-1 bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-300 py-3 px-6 rounded-lg font-semibold hover:bg-gray-300 dark:hover:bg-gray-600 transition-colors">
              Back
            </button>
            <button onclick="nextStep()" class="flex-1 bg-gray-600 text-white py-3 px-6 rounded-lg font-semibold hover:bg-gray-500 transition-colors">
              Next
            </button>
          </div>
        </div>
      </div>

      <!-- Step 3: Bidding System -->
      <div id="step-3" class="onboarding-step hidden">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm text-center">
          <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-8">
            How it works?
          </h2>
          
          <!-- Thief Character Illustration -->
          <div class="mb-8 flex justify-center">
            <div class="w-32 h-32 bg-gray-100 dark:bg-gray-800 rounded-full flex items-center justify-center">
              <div class="text-6xl">🕵️</div>
            </div>
          </div>
          
          <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4">
            Bid and Win!
          </h3>
          
          <p class="text-gray-600 dark:text-gray-300 mb-8 leading-relaxed">
            Place your bids and stay on top. The highest bidder takes the win when the timer runs out!
          </p>
          
          <!-- Progress dots -->
          <div class="flex justify-center space-x-2 mb-8">
            <div class="w-2 h-2 bg-gray-300 dark:bg-gray-600 rounded-full"></div>
            <div class="w-2 h-2 bg-gray-300 dark:bg-gray-600 rounded-full"></div>
            <div class="w-2 h-2 bg-gray-600 rounded-full"></div>
            <div class="w-2 h-2 bg-gray-300 dark:bg-gray-600 rounded-full"></div>
          </div>
          
          <div class="flex space-x-4">
            <button onclick="prevStep()" class="flex-1 bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-300 py-3 px-6 rounded-lg font-semibold hover:bg-gray-300 dark:hover:bg-gray-600 transition-colors">
              Back
            </button>
            <button onclick="nextStep()" class="flex-1 bg-gray-600 text-white py-3 px-6 rounded-lg font-semibold hover:bg-gray-500 transition-colors">
              Next
            </button>
          </div>
        </div>
      </div>

      <!-- Step 4: Get Started -->
      <div id="step-4" class="onboarding-step hidden">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm text-center">
          <!-- COPit! Logo -->
          <div class="mb-8">
            <h1 class="text-4xl font-bold text-gray-900 dark:text-white">
              COP<span class="text-gray-600">it</span>.
            </h1>
            <div class="mt-2 text-sm text-gray-500 dark:text-gray-400">with clothes hanger icon</div>
          </div>
          
          <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-8">
            See it, Like it, COP it!
          </h2>
          
          <!-- Progress dots -->
          <div class="flex justify-center space-x-2 mb-8">
            <div class="w-2 h-2 bg-gray-300 dark:bg-gray-600 rounded-full"></div>
            <div class="w-2 h-2 bg-gray-300 dark:bg-gray-600 rounded-full"></div>
            <div class="w-2 h-2 bg-gray-300 dark:bg-gray-600 rounded-full"></div>
            <div class="w-2 h-2 bg-gray-600 rounded-full"></div>
          </div>
          
          <div class="flex space-x-4">
            <button onclick="prevStep()" class="flex-1 bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-300 py-3 px-6 rounded-lg font-semibold hover:bg-gray-300 dark:hover:bg-gray-600 transition-colors">
              Back
            </button>
            <button onclick="getStarted()" class="flex-1 bg-amber-600 text-white py-3 px-6 rounded-lg font-semibold hover:bg-amber-500 transition-colors">
              Get Started
            </button>
          </div>
        </div>
      </div>
    </div>

    <script>
      let currentStep = 1;
      const totalSteps = 4;

      function showStep(step) {
        // Hide all steps
        document.querySelectorAll('.onboarding-step').forEach(el => {
          el.classList.add('hidden');
        });
        
        // Show current step
        document.getElementById(`step-${step}`).classList.remove('hidden');
      }

      function nextStep() {
        if (currentStep < totalSteps) {
          currentStep++;
          showStep(currentStep);
        }
      }

      function prevStep() {
        if (currentStep > 1) {
          currentStep--;
          showStep(currentStep);
        }
      }

      function getStarted() {
        // Redirect to main app or login
        window.location.href = 'login.php';
      }

      // Initialize
      showStep(1);
    </script>
  </body>
</html>
