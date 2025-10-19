<?php
// Navigation Component - Responsive Dock/Sidebar
?>
<nav class="fixed bottom-0 left-0 right-0 z-50 lg:relative lg:top-0 lg:left-0 lg:right-auto lg:bottom-auto lg:w-64 lg:h-screen lg:flex lg:flex-col">
  <!-- Mobile Dock -->
  <div class="lg:hidden bg-white dark:bg-gray-900 border-t border-gray-200 dark:border-gray-700 px-4 py-2">
    <div class="flex justify-around items-center">
      <!-- Marketplace -->
      <a href="/marketplace" class="flex flex-col items-center space-y-1 p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors">
        <div class="w-6 h-6 flex items-center justify-center">
          <svg class="w-5 h-5 text-gray-600 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
          </svg>
        </div>
        <span class="text-xs text-gray-600 dark:text-gray-400">Marketplace</span>
      </a>

      <!-- Live -->
      <a href="/live" class="flex flex-col items-center space-y-1 p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors">
        <div class="w-6 h-6 flex items-center justify-center">
          <svg class="w-5 h-5 text-gray-600 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
          </svg>
        </div>
        <span class="text-xs text-gray-600 dark:text-gray-400">Live</span>
      </a>

      <!-- Plus Button -->
      <button class="flex flex-col items-center space-y-1 p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors">
        <div class="w-8 h-8 bg-gray-600 dark:bg-gray-500 rounded-full flex items-center justify-center">
          <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
          </svg>
        </div>
        <span class="text-xs text-gray-600 dark:text-gray-400">Add</span>
      </button>

      <!-- Messages -->
      <a href="messaging.php" class="flex flex-col items-center space-y-1 p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors relative">
        <div class="w-6 h-6 flex items-center justify-center">
          <svg class="w-5 h-5 text-gray-600 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
          </svg>
        </div>
        <span class="text-xs text-gray-600 dark:text-gray-400">Messages</span>
        <!-- Message Badge -->
        <div class="absolute -top-1 -right-1 w-3 h-3 bg-blue-500 rounded-full" id="messageBadge" style="display: none;"></div>
      </a>

      <!-- Notifications -->
      <a href="notifications.php" class="flex flex-col items-center space-y-1 p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors relative">
        <div class="w-6 h-6 flex items-center justify-center">
          <svg class="w-5 h-5 text-gray-600 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-5 5v-5zM4.828 7l2.586 2.586a2 2 0 002.828 0L12.828 7H4.828z"></path>
          </svg>
        </div>
        <span class="text-xs text-gray-600 dark:text-gray-400">Alerts</span>
        <!-- Notification Badge -->
        <div class="absolute -top-1 -right-1 w-3 h-3 bg-red-500 rounded-full" id="notificationBadge"></div>
      </a>

      <!-- Profile -->
      <a href="/profile" class="flex flex-col items-center space-y-1 p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors">
        <div class="w-6 h-6 flex items-center justify-center">
          <svg class="w-5 h-5 text-gray-600 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
          </svg>
        </div>
        <span class="text-xs text-gray-600 dark:text-gray-400">Profile</span>
      </a>
    </div>
  </div>

  <!-- Desktop Sidebar -->
  <div class="hidden lg:flex lg:flex-col lg:h-full bg-white dark:bg-gray-900 border-r border-gray-200 dark:border-gray-700">
    <!-- Logo/Brand -->
    <div class="p-6 border-b border-gray-200 dark:border-gray-700">
      <h1 class="text-xl font-bold text-gray-900 dark:text-white">
        COP<span class="text-gray-600">it</span>.
      </h1>
    </div>

    <!-- Navigation Items -->
    <div class="flex-1 px-4 py-6 space-y-2">
      <!-- Marketplace -->
      <a href="/marketplace" class="flex items-center space-x-3 px-3 py-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors group">
        <div class="w-5 h-5 flex items-center justify-center">
          <svg class="w-5 h-5 text-gray-600 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
          </svg>
        </div>
        <span class="text-sm font-medium text-gray-700 dark:text-gray-300 group-hover:text-gray-900 dark:group-hover:text-white">Marketplace</span>
      </a>

      <!-- Live -->
      <a href="/live" class="flex items-center space-x-3 px-3 py-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors group">
        <div class="w-5 h-5 flex items-center justify-center">
          <svg class="w-5 h-5 text-gray-600 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
          </svg>
        </div>
        <span class="text-sm font-medium text-gray-700 dark:text-gray-300 group-hover:text-gray-900 dark:group-hover:text-white">Live</span>
      </a>

      <!-- Add Item -->
      <button class="w-full flex items-center space-x-3 px-3 py-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors group">
        <div class="w-5 h-5 flex items-center justify-center">
          <svg class="w-5 h-5 text-gray-600 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
          </svg>
        </div>
        <span class="text-sm font-medium text-gray-700 dark:text-gray-300 group-hover:text-gray-900 dark:group-hover:text-white">Add Item</span>
      </button>

      <!-- Messages -->
      <a href="messaging.php" class="flex items-center space-x-3 px-3 py-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors group relative">
        <div class="w-5 h-5 flex items-center justify-center">
          <svg class="w-5 h-5 text-gray-600 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
          </svg>
        </div>
        <span class="text-sm font-medium text-gray-700 dark:text-gray-300 group-hover:text-gray-900 dark:group-hover:text-white">Messages</span>
        <!-- Message Badge -->
        <div class="absolute left-8 top-2 w-2 h-2 bg-blue-500 rounded-full" id="desktopMessageBadge" style="display: none;"></div>
      </a>

      <!-- Notifications -->
      <a href="notifications.php" class="flex items-center space-x-3 px-3 py-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors group relative">
        <div class="w-5 h-5 flex items-center justify-center">
          <svg class="w-5 h-5 text-gray-600 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-5 5v-5zM4.828 7l2.586 2.586a2 2 0 002.828 0L12.828 7H4.828z"></path>
          </svg>
        </div>
        <span class="text-sm font-medium text-gray-700 dark:text-gray-300 group-hover:text-gray-900 dark:group-hover:text-white">Notifications</span>
        <!-- Notification Badge -->
        <div class="absolute left-8 top-2 w-2 h-2 bg-red-500 rounded-full" id="desktopNotificationBadge"></div>
      </a>

      <!-- Profile -->
      <a href="/profile" class="flex items-center space-x-3 px-3 py-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors group">
        <div class="w-5 h-5 flex items-center justify-center">
          <svg class="w-5 h-5 text-gray-600 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
          </svg>
        </div>
        <span class="text-sm font-medium text-gray-700 dark:text-gray-300 group-hover:text-gray-900 dark:group-hover:text-white">Profile</span>
      </a>
    </div>

    <!-- User Info / Settings -->
    <div class="p-4 border-t border-gray-200 dark:border-gray-700">
      <div class="flex items-center space-x-3 px-3 py-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors group cursor-pointer">
        <div class="w-8 h-8 bg-gray-200 dark:bg-gray-700 rounded-full flex items-center justify-center">
          <svg class="w-4 h-4 text-gray-600 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
          </svg>
        </div>
        <div class="flex-1 min-w-0">
          <p class="text-sm font-medium text-gray-900 dark:text-white truncate">John Doe</p>
          <p class="text-xs text-gray-500 dark:text-gray-400 truncate">john@example.com</p>
        </div>
        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
        </svg>
      </div>
    </div>
  </div>
</nav>
