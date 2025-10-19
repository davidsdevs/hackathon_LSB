<?php
// Notifications UI - COPit!
require_once 'template.php';

// Mock data for demonstration
$notifications = [
    [
        'id' => 1,
        'type' => 'message',
        'title' => 'New Message',
        'body' => 'Sarah Johnson sent you a message about the vintage denim jacket',
        'timestamp' => '2 minutes ago',
        'read' => false,
        'icon' => 'message'
    ],
    [
        'id' => 2,
        'type' => 'bid',
        'title' => 'New Bid',
        'body' => 'Mike Chen placed a bid of $45 on your retro sneakers',
        'timestamp' => '15 minutes ago',
        'read' => false,
        'icon' => 'bid'
    ],
    [
        'id' => 3,
        'type' => 'price_drop',
        'title' => 'Price Drop Alert',
        'body' => 'The designer handbag you\'re watching dropped to $120',
        'timestamp' => '1 hour ago',
        'read' => true,
        'icon' => 'price_drop'
    ],
    [
        'id' => 4,
        'type' => 'message',
        'title' => 'New Message',
        'body' => 'Emma Wilson wants to meet up for the vintage watch',
        'timestamp' => '2 hours ago',
        'read' => true,
        'icon' => 'message'
    ],
    [
        'id' => 5,
        'type' => 'bid',
        'title' => 'Bid Won',
        'body' => 'Congratulations! You won the auction for the leather jacket',
        'timestamp' => '3 hours ago',
        'read' => true,
        'icon' => 'bid'
    ],
    [
        'id' => 6,
        'type' => 'system',
        'title' => 'Welcome to COPit!',
        'body' => 'Complete your profile to start buying and selling',
        'timestamp' => '1 day ago',
        'read' => true,
        'icon' => 'system'
    ]
];

$unreadCount = count(array_filter($notifications, function($n) { return !$n['read']; }));

// Content for notifications page
$content = '
<div class="max-w-4xl mx-auto p-6">
    <!-- Header -->
    <div class="mb-8">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-2">Notifications</h1>
                <p class="text-gray-600 dark:text-gray-400">Stay updated with your latest activities</p>
            </div>
            <div class="flex items-center space-x-3">
                <button id="markAllReadBtn" class="px-4 py-2 text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white border border-gray-300 dark:border-gray-600 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">
                    Mark All Read
                </button>
                <button id="testNotificationBtn" class="px-4 py-2 bg-amber-600 text-white rounded-lg hover:bg-amber-500 transition-colors">
                    Test Notification
                </button>
                <button class="p-2 text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Notification Settings -->
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 mb-8">
        <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Notification Settings</h2>
        
        <div class="space-y-4">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="font-medium text-gray-900 dark:text-white">Push Notifications</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400">Receive notifications even when the app is closed</p>
                </div>
                <button id="enablePushBtn" class="px-4 py-2 bg-amber-600 text-white rounded-lg hover:bg-amber-500 transition-colors">
                    Enable Push Notifications
                </button>
            </div>
            
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="font-medium text-gray-900 dark:text-white">Message Notifications</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400">Get notified when you receive new messages</p>
                </div>
                <label class="relative inline-flex items-center cursor-pointer">
                    <input type="checkbox" id="messageNotifications" class="sr-only peer" checked>
                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-amber-300 dark:peer-focus:ring-amber-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[\'\'] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-amber-600"></div>
                </label>
            </div>
            
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="font-medium text-gray-900 dark:text-white">Bid Notifications</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400">Get notified when someone bids on your items</p>
                </div>
                <label class="relative inline-flex items-center cursor-pointer">
                    <input type="checkbox" id="bidNotifications" class="sr-only peer" checked>
                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-amber-300 dark:peer-focus:ring-amber-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[\'\'] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-amber-600"></div>
                </label>
            </div>
            
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="font-medium text-gray-900 dark:text-white">Price Drop Notifications</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400">Get notified when items you\'re watching drop in price</p>
                </div>
                <label class="relative inline-flex items-center cursor-pointer">
                    <input type="checkbox" id="priceDropNotifications" class="sr-only peer" checked>
                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-amber-300 dark:peer-focus:ring-amber-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[\'\'] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-amber-600"></div>
                </label>
            </div>
        </div>
    </div>

    <!-- Notifications List -->
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md">
        <div class="p-6 border-b border-gray-200 dark:border-gray-700">
            <div class="flex items-center justify-between">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white">Recent Notifications</h2>
                <span id="unreadCount" class="bg-amber-500 text-white text-sm px-2 py-1 rounded-full">' . $unreadCount . '</span>
            </div>
        </div>
        
        <div id="notificationsList" class="divide-y divide-gray-200 dark:divide-gray-700">
            ' . generateNotificationsList($notifications) . '
        </div>
    </div>
</div>

<!-- Test Notification Modal -->
<div id="testNotificationModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50">
    <div class="flex items-center justify-center min-h-screen p-4">
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-xl max-w-md w-full">
            <div class="p-6">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Test Notification</h3>
                    <button id="closeTestModalBtn" class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Title:</label>
                        <input type="text" id="testTitle" placeholder="Notification title..." 
                               class="w-full px-3 py-2 text-gray-900 bg-gray-100 dark:bg-gray-700 dark:text-white border border-gray-200 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500"
                               value="Test Notification">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Message:</label>
                        <textarea id="testMessage" rows="3" placeholder="Notification message..." 
                                  class="w-full px-3 py-2 text-gray-900 bg-gray-100 dark:bg-gray-700 dark:text-white border border-gray-200 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500">This is a test notification from COPit!</textarea>
                    </div>
                </div>
                
                <div class="flex justify-end space-x-3 mt-6">
                    <button id="cancelTestBtn" class="px-4 py-2 text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">
                        Cancel
                    </button>
                    <button id="sendTestBtn" class="px-4 py-2 bg-amber-600 text-white rounded-lg hover:bg-amber-500 transition-colors">
                        Send Test
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
';

// Helper function to generate notifications list
function generateNotificationsList($notifications) {
    if (empty($notifications)) {
        return '
        <div class="p-8 text-center text-gray-500 dark:text-gray-400">
            <svg class="w-16 h-16 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-5 5v-5zM4.828 7l2.586 2.586a2 2 0 002.828 0L12.828 7H4.828z"></path>
            </svg>
            <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-2">No notifications yet</h3>
            <p>You will see your notifications here when they arrive</p>
        </div>';
    }
    
    $html = '';
    foreach ($notifications as $notification) {
        $unreadClass = !$notification['read'] ? 'bg-amber-50 dark:bg-amber-900/20 border-l-4 border-l-amber-500' : '';
        $iconClass = getNotificationIcon($notification['type']);
        
        $html .= '
        <div class="notification-item p-4 hover:bg-gray-50 dark:hover:bg-gray-700 cursor-pointer ' . $unreadClass . '" 
             data-notification-id="' . $notification['id'] . '">
            <div class="flex items-start space-x-3">
                <div class="flex-shrink-0">
                    <div class="w-8 h-8 rounded-full flex items-center justify-center ' . $iconClass['bg'] . '">
                        <svg class="w-4 h-4 ' . $iconClass['text'] . '" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            ' . $iconClass['path'] . '
                        </svg>
                    </div>
                </div>
                <div class="flex-1 min-w-0">
                    <div class="flex items-center justify-between">
                        <h4 class="text-sm font-medium text-gray-900 dark:text-white">' . htmlspecialchars($notification['title']) . '</h4>
                        <span class="text-xs text-gray-500 dark:text-gray-400">' . $notification['timestamp'] . '</span>
                    </div>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">' . htmlspecialchars($notification['body']) . '</p>
                    ' . (!$notification['read'] ? '<div class="mt-2"><span class="inline-block w-2 h-2 bg-amber-500 rounded-full"></span></div>' : '') . '
                </div>
            </div>
        </div>';
    }
    
    return $html;
}

// Helper function to get notification icon
function getNotificationIcon($type) {
    $icons = [
        'message' => [
            'bg' => 'bg-blue-100 dark:bg-blue-900/20',
            'text' => 'text-blue-600 dark:text-blue-400',
            'path' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>'
        ],
        'bid' => [
            'bg' => 'bg-green-100 dark:bg-green-900/20',
            'text' => 'text-green-600 dark:text-green-400',
            'path' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>'
        ],
        'price_drop' => [
            'bg' => 'bg-red-100 dark:bg-red-900/20',
            'text' => 'text-red-600 dark:text-red-400',
            'path' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 17h8m0 0V9m0 8l-8-8-4 4-6-6"></path>'
        ],
        'system' => [
            'bg' => 'bg-purple-100 dark:bg-purple-900/20',
            'text' => 'text-purple-600 dark:text-purple-400',
            'path' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>'
        ],
        'default' => [
            'bg' => 'bg-gray-100 dark:bg-gray-700',
            'text' => 'text-gray-600 dark:text-gray-400',
            'path' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-5 5v-5zM4.828 7l2.586 2.586a2 2 0 002.828 0L12.828 7H4.828z"></path>'
        ]
    ];
    
    return $icons[$type] ?? $icons['default'];
}

// Custom scripts for notifications functionality
$customScripts = '
<script>
// Simple UI interactions for notifications
document.addEventListener("DOMContentLoaded", function() {
    setupEventListeners();
});

function setupEventListeners() {
    // Mark all as read
    const markAllReadBtn = document.getElementById("markAllReadBtn");
    if (markAllReadBtn) {
        markAllReadBtn.addEventListener("click", function() {
            // Remove unread styling from all notifications
            document.querySelectorAll(".notification-item").forEach(item => {
                item.classList.remove("bg-amber-50", "dark:bg-amber-900/20", "border-l-4", "border-l-amber-500");
                const unreadDot = item.querySelector(".bg-amber-500");
                if (unreadDot) {
                    unreadDot.remove();
                }
            });
            
            // Update unread count
            const unreadCount = document.getElementById("unreadCount");
            if (unreadCount) {
                unreadCount.textContent = "0";
                unreadCount.style.display = "none";
            }
            
            // Show success message
            showToast("All notifications marked as read");
        });
    }
    
    // Test notification
    const testNotificationBtn = document.getElementById("testNotificationBtn");
    if (testNotificationBtn) {
        testNotificationBtn.addEventListener("click", function() {
            document.getElementById("testNotificationModal").classList.remove("hidden");
        });
    }
    
    // Close test modal
    const closeTestModalBtn = document.getElementById("closeTestModalBtn");
    const cancelTestBtn = document.getElementById("cancelTestBtn");
    if (closeTestModalBtn) {
        closeTestModalBtn.addEventListener("click", closeTestModal);
    }
    if (cancelTestBtn) {
        cancelTestBtn.addEventListener("click", closeTestModal);
    }
    
    // Send test notification
    const sendTestBtn = document.getElementById("sendTestBtn");
    if (sendTestBtn) {
        sendTestBtn.addEventListener("click", sendTestNotification);
    }
    
    // Enable push notifications
    const enablePushBtn = document.getElementById("enablePushBtn");
    if (enablePushBtn) {
        enablePushBtn.addEventListener("click", enablePushNotifications);
    }
    
    // Notification item clicks
    document.addEventListener("click", function(e) {
        const notificationItem = e.target.closest(".notification-item");
        if (notificationItem) {
            // Mark as read
            notificationItem.classList.remove("bg-amber-50", "dark:bg-amber-900/20", "border-l-4", "border-l-amber-500");
            const unreadDot = notificationItem.querySelector(".bg-amber-500");
            if (unreadDot) {
                unreadDot.remove();
            }
            
            // Update unread count
            updateUnreadCount();
        }
    });
}

function closeTestModal() {
    document.getElementById("testNotificationModal").classList.add("hidden");
}

function sendTestNotification() {
    const title = document.getElementById("testTitle").value.trim();
    const message = document.getElementById("testMessage").value.trim();
    
    if (!title || !message) {
        showToast("Please fill in both title and message", "error");
        return;
    }
    
    // Close modal
    closeTestModal();
    
    // Show success message
    showToast("Test notification sent!");
    
    // In a real app, this would send the notification
    console.log("Test notification:", { title, message });
}

function enablePushNotifications() {
    if (!("Notification" in window)) {
        showToast("This browser does not support notifications", "error");
        return;
    }
    
    if (Notification.permission === "granted") {
        showToast("Push notifications are already enabled!");
        return;
    }
    
    if (Notification.permission === "denied") {
        showToast("Push notifications have been blocked. Please enable them in your browser settings.", "error");
        return;
    }
    
    Notification.requestPermission().then(function(permission) {
        if (permission === "granted") {
            showToast("Push notifications enabled successfully!");
            const enablePushBtn = document.getElementById("enablePushBtn");
            if (enablePushBtn) {
                enablePushBtn.textContent = "Push Enabled";
                enablePushBtn.disabled = true;
            }
        } else {
            showToast("Push notifications permission denied", "error");
        }
    });
}

function updateUnreadCount() {
    const unreadItems = document.querySelectorAll(".notification-item.bg-amber-50, .notification-item.dark\\:bg-amber-900\\/20");
    const unreadCount = document.getElementById("unreadCount");
    
    if (unreadCount) {
        unreadCount.textContent = unreadItems.length;
        if (unreadItems.length === 0) {
            unreadCount.style.display = "none";
        } else {
            unreadCount.style.display = "inline-block";
        }
    }
}

function showToast(message, type = "success") {
    // Create toast element
    const toast = document.createElement("div");
    toast.className = "fixed top-4 right-4 z-50 px-4 py-2 rounded-lg shadow-lg transition-all duration-300 transform translate-x-full";
    
    if (type === "success") {
        toast.classList.add("bg-green-500", "text-white");
    } else if (type === "error") {
        toast.classList.add("bg-red-500", "text-white");
    }
    
    toast.textContent = message;
    document.body.appendChild(toast);
    
    // Animate in
    setTimeout(() => {
        toast.classList.remove("translate-x-full");
    }, 100);
    
    // Remove after 3 seconds
    setTimeout(() => {
        toast.classList.add("translate-x-full");
        setTimeout(() => {
            document.body.removeChild(toast);
        }, 300);
    }, 3000);
}
</script>
';

// Render the notifications page
renderPage("Notifications - COPit!", $content, true, '', $customScripts);
?>