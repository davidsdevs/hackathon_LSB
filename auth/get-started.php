<!doctype html>
<html class="h-full bg-white dark:bg-gray-900">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>COPit! - Get Started</title>
  </head>
  <body class="h-full">
    <div class="min-h-full flex flex-col justify-center px-6 py-12 lg:px-8">
      <div class="sm:mx-auto sm:w-full sm:max-w-sm text-center">
        <!-- COPit! Logo -->
      
        
        <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-16">
          See it, Like it, COP it!
        </h2>
        
        <button onclick="getStarted()" class="w-full bg-amber-600 text-white py-4 px-8 rounded-xl font-bold text-lg hover:bg-amber-500 transition-colors shadow-lg">
          Get Started
        </button>
        
        <div class="mt-8">
          <a href="onboarding.php" class="text-gray-600 hover:text-gray-500 dark:text-gray-400 dark:hover:text-gray-300 text-sm">
            ← Back to onboarding
          </a>
        </div>
      </div>
    </div>

    <script>
      function getStarted() {
        // Show loading animation
        document.body.innerHTML = `
          <div class="min-h-full flex flex-col justify-center px-6 py-12 lg:px-8">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm text-center">
              <div class="mb-8">
                <h1 class="text-4xl font-bold text-gray-900 dark:text-white">
                  COP<span class="text-gray-600">it</span>.
                </h1>
              </div>
              
              <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2 mb-8">
                <div class="bg-gray-600 h-2 rounded-full animate-pulse" style="width: 30%"></div>
              </div>
              
              <p class="text-gray-600 dark:text-gray-300">Loading your experience...</p>
            </div>
          </div>
        `;
        
        // Redirect after loading animation
        setTimeout(() => {
          window.location.href = 'login.php';
        }, 2000);
      }
    </script>
  </body>
</html>
