<!doctype html>
<html class="h-full bg-white dark:bg-gray-900">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>COPit! - Loading</title>
  </head>
  <body class="h-full">
    <div class="min-h-full flex flex-col justify-center px-6 py-12 lg:px-8">
      <div class="sm:mx-auto sm:w-full sm:max-w-sm text-center">
        <!-- COPit! Logo -->
        <div class="mb-12">

          <div class="mt-2 text-sm text-gray-500 dark:text-gray-400">with clothes hanger icon</div>
        </div>
        
        <!-- Loading Bar -->
        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3 mb-8">
          <div class="bg-gray-600 h-3 rounded-full animate-pulse loading-bar" style="width: 0%"></div>
        </div>
        
        <!-- Loading Text -->
        <p class="text-gray-600 dark:text-gray-300 loading-text">Preparing your experience...</p>
      </div>
    </div>

    <script>
      // Animate loading bar
      const loadingBar = document.querySelector('.loading-bar');
      const loadingText = document.querySelector('.loading-text');
      
      const loadingMessages = [
        'Preparing your experience...',
        'Setting up your account...',
        'Loading thrift treasures...',
        'Almost ready...'
      ];
      
      let progress = 0;
      let messageIndex = 0;
      
      const loadingInterval = setInterval(() => {
        progress += Math.random() * 15;
        
        if (progress >= 100) {
          progress = 100;
          clearInterval(loadingInterval);
          
          // Redirect after completion
          setTimeout(() => {
            const redirectUrl = new URLSearchParams(window.location.search).get('redirect') || 'login.php';
            window.location.href = redirectUrl;
          }, 500);
        }
        
        loadingBar.style.width = progress + '%';
        
        // Update loading message
        if (progress > 25 && messageIndex === 0) {
          loadingText.textContent = loadingMessages[1];
          messageIndex = 1;
        } else if (progress > 50 && messageIndex === 1) {
          loadingText.textContent = loadingMessages[2];
          messageIndex = 2;
        } else if (progress > 75 && messageIndex === 2) {
          loadingText.textContent = loadingMessages[3];
          messageIndex = 3;
        }
      }, 200);
      
      // Add CSS animation
      const style = document.createElement('style');
      style.textContent = `
        .loading-bar {
          transition: width 0.3s ease-in-out;
        }
        
        @keyframes pulse {
          0%, 100% { opacity: 1; }
          50% { opacity: 0.5; }
        }
        
        .animate-pulse {
          animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }
      `;
      document.head.appendChild(style);
    </script>
  </body>
</html>
