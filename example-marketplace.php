<?php
// Example usage of the template system
require_once 'template.php';

// Example content for a marketplace page
$content = '
<div class="p-6">
    <div class="max-w-7xl mx-auto">
        <!-- Header -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-2">Marketplace</h1>
            <p class="text-gray-600 dark:text-gray-400">Discover amazing thrift finds and place your bids</p>
        </div>

        <!-- Search Bar -->
        <div class="mb-8">
            <div class="relative max-w-md">
                <input type="text" placeholder="Search items..." 
                       class="w-full px-4 py-2 pl-10 pr-4 text-gray-900 bg-white border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-transparent dark:bg-gray-800 dark:text-white dark:border-gray-600">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Items Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            <!-- Item Card 1 -->
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                <div class="h-48 bg-gray-200 dark:bg-gray-700 flex items-center justify-center">
                    <span class="text-gray-400">Item Image</span>
                </div>
                <div class="p-4">
                    <h3 class="font-semibold text-gray-900 dark:text-white mb-2">Vintage Denim Jacket</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-3">Classic 90s denim jacket in excellent condition</p>
                    <div class="flex justify-between items-center">
                        <span class="text-lg font-bold text-gray-900 dark:text-white">$25</span>
                        <span class="text-sm text-gray-500 dark:text-gray-400">2h left</span>
                    </div>
                </div>
            </div>

            <!-- Item Card 2 -->
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                <div class="h-48 bg-gray-200 dark:bg-gray-700 flex items-center justify-center">
                    <span class="text-gray-400">Item Image</span>
                </div>
                <div class="p-4">
                    <h3 class="font-semibold text-gray-900 dark:text-white mb-2">Designer Handbag</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-3">Authentic designer handbag, barely used</p>
                    <div class="flex justify-between items-center">
                        <span class="text-lg font-bold text-gray-900 dark:text-white">$150</span>
                        <span class="text-sm text-gray-500 dark:text-gray-400">5h left</span>
                    </div>
                </div>
            </div>

            <!-- Item Card 3 -->
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                <div class="h-48 bg-gray-200 dark:bg-gray-700 flex items-center justify-center">
                    <span class="text-gray-400">Item Image</span>
                </div>
                <div class="p-4">
                    <h3 class="font-semibold text-gray-900 dark:text-white mb-2">Retro Sneakers</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-3">Classic sneakers from the 80s, great condition</p>
                    <div class="flex justify-between items-center">
                        <span class="text-lg font-bold text-gray-900 dark:text-white">$45</span>
                        <span class="text-sm text-gray-500 dark:text-gray-400">1d left</span>
                    </div>
                </div>
            </div>

            <!-- Item Card 4 -->
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                <div class="h-48 bg-gray-200 dark:bg-gray-700 flex items-center justify-center">
                    <span class="text-gray-400">Item Image</span>
                </div>
                <div class="p-4">
                    <h3 class="font-semibold text-gray-900 dark:text-white mb-2">Vintage Watch</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-3">Swiss-made vintage watch, fully functional</p>
                    <div class="flex justify-between items-center">
                        <span class="text-lg font-bold text-gray-900 dark:text-white">$200</span>
                        <span class="text-sm text-gray-500 dark:text-gray-400">3d left</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Load More Button -->
        <div class="text-center mt-8">
            <button class="px-6 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-500 transition-colors">
                Load More Items
            </button>
        </div>
    </div>
</div>
';

// Custom scripts for this page
$customScripts = '
<script>
// Add any page-specific JavaScript here
console.log("Marketplace page loaded");
</script>
';

// Render the page using the template system
renderPage("Marketplace - COPit!", $content, true, '', $customScripts);
?>
