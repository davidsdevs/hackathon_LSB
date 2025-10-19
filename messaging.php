<?php
// Messaging UI - COPit!
require_once 'template.php';

// Mock data for demonstration
$conversations = [
    [
        'id' => 1,
        'user_name' => 'Sarah Johnson',
        'user_avatar' => 'SJ',
        'last_message' => 'Thanks for the quick response!',
        'timestamp' => '2m ago',
        'unread_count' => 2,
        'online' => true
    ],
    [
        'id' => 2,
        'user_name' => 'Mike Chen',
        'user_avatar' => 'MC',
        'last_message' => 'Is this item still available?',
        'timestamp' => '15m ago',
        'unread_count' => 0,
        'online' => false
    ],
    [
        'id' => 3,
        'user_name' => 'Emma Wilson',
        'user_avatar' => 'EW',
        'last_message' => 'Perfect! I\'ll take it.',
        'timestamp' => '1h ago',
        'unread_count' => 1,
        'online' => true
    ],
    [
        'id' => 4,
        'user_name' => 'Alex Rodriguez',
        'user_avatar' => 'AR',
        'last_message' => 'Can you ship to Canada?',
        'timestamp' => '3h ago',
        'unread_count' => 0,
        'online' => false
    ]
];

$currentConversation = [
    'id' => 1,
    'user_name' => 'Sarah Johnson',
    'user_avatar' => 'SJ',
    'online' => true,
    'messages' => [
        [
            'id' => 1,
            'sender' => 'other',
            'message' => 'Hi! I\'m interested in the vintage denim jacket you listed.',
            'timestamp' => '10:30 AM',
            'read' => true
        ],
        [
            'id' => 2,
            'sender' => 'me',
            'message' => 'Hi Sarah! Yes, it\'s still available. It\'s in excellent condition.',
            'timestamp' => '10:32 AM',
            'read' => true
        ],
        [
            'id' => 3,
            'sender' => 'other',
            'message' => 'That\'s great! What size is it?',
            'timestamp' => '10:35 AM',
            'read' => true
        ],
        [
            'id' => 4,
            'sender' => 'me',
            'message' => 'It\'s a medium. The measurements are 20" chest and 25" length.',
            'timestamp' => '10:36 AM',
            'read' => true
        ],
        [
            'id' => 5,
            'sender' => 'other',
            'message' => 'Perfect! That should fit me well. Can we meet up today?',
            'timestamp' => '10:38 AM',
            'read' => true
        ],
        [
            'id' => 6,
            'sender' => 'me',
            'message' => 'Sure! I\'m free after 3 PM. Where would you like to meet?',
            'timestamp' => '10:40 AM',
            'read' => true
        ],
        [
            'id' => 7,
            'sender' => 'other',
            'message' => 'How about the coffee shop on Main Street?',
            'timestamp' => '10:42 AM',
            'read' => true
        ],
        [
            'id' => 8,
            'sender' => 'me',
            'message' => 'Sounds good! I\'ll see you there at 3:30 PM.',
            'timestamp' => '10:43 AM',
            'read' => true
        ],
        [
            'id' => 9,
            'sender' => 'other',
            'message' => 'Thanks for the quick response!',
            'timestamp' => '10:45 AM',
            'read' => false
        ]
    ]
];

// Content for messaging page
$content = '
<div class="flex h-full">
    <!-- Conversations Sidebar -->
    <div class="w-80 bg-white dark:bg-gray-800 border-r border-gray-200 dark:border-gray-700 flex flex-col">
        <!-- Header -->
        <div class="p-4 border-b border-gray-200 dark:border-gray-700">
            <div class="flex items-center justify-between">
                <h2 class="text-xl font-bold text-gray-900 dark:text-white">Messages</h2>
                <div class="flex items-center space-x-2">
                    <button class="p-2 text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                    </button>
                    <button class="p-2 text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                        </svg>
                    </button>
                </div>
            </div>
            
            <!-- Search -->
            <div class="mt-4">
                <div class="relative">
                    <input type="text" placeholder="Search conversations..." 
                           class="w-full px-3 py-2 pl-10 text-sm text-gray-900 bg-gray-100 dark:bg-gray-700 dark:text-white border border-gray-200 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Conversations List -->
        <div class="flex-1 overflow-y-auto">
            ' . generateConversationsList($conversations) . '
        </div>
    </div>
    
    <!-- Chat Area -->
    <div class="flex-1 flex flex-col">
        <!-- Chat Header -->
        <div class="p-4 border-b border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-3">
                    <div class="relative">
                        <div class="w-10 h-10 bg-amber-500 rounded-full flex items-center justify-center">
                            <span class="text-white font-semibold text-sm">' . $currentConversation['user_avatar'] . '</span>
                        </div>
                        <div class="absolute -bottom-1 -right-1 w-3 h-3 bg-green-500 border-2 border-white dark:border-gray-800 rounded-full"></div>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900 dark:text-white">' . $currentConversation['user_name'] . '</h3>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Online</p>
                    </div>
                </div>
                <div class="flex items-center space-x-2">
                    <button class="p-2 text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                    </button>
                    <button class="p-2 text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                        </svg>
                    </button>
                    <button class="p-2 text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Messages Area -->
        <div class="flex-1 p-4 overflow-y-auto bg-gray-50 dark:bg-gray-900">
            <div class="space-y-4">
                ' . generateMessagesList($currentConversation['messages']) . '
            </div>
        </div>
        
        <!-- Message Input -->
        <div class="p-4 border-t border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800">
            <div class="flex items-center space-x-3">
                <button class="p-2 text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"></path>
                    </svg>
                </button>
                <div class="flex-1">
                    <input type="text" placeholder="Type a message..." 
                           class="w-full px-3 py-2 text-gray-900 bg-gray-100 dark:bg-gray-700 dark:text-white border border-gray-200 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500">
                </div>
                <button class="px-4 py-2 bg-amber-600 text-white rounded-lg hover:bg-amber-500 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>
';

// Helper function to generate conversations list
function generateConversationsList($conversations) {
    $html = '';
    foreach ($conversations as $conversation) {
        $unreadClass = $conversation['unread_count'] > 0 ? 'bg-amber-50 dark:bg-amber-900/20' : '';
        $onlineIndicator = $conversation['online'] ? '<div class="absolute -bottom-1 -right-1 w-3 h-3 bg-green-500 border-2 border-white dark:border-gray-800 rounded-full"></div>' : '';
        
        $html .= '
        <div class="conversation-item p-4 border-b border-gray-200 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-700 cursor-pointer ' . $unreadClass . '">
            <div class="flex items-center space-x-3">
                <div class="relative">
                    <div class="w-10 h-10 bg-amber-500 rounded-full flex items-center justify-center">
                        <span class="text-white font-semibold text-sm">' . $conversation['user_avatar'] . '</span>
                    </div>
                    ' . $onlineIndicator . '
                </div>
                <div class="flex-1 min-w-0">
                    <div class="flex items-center justify-between">
                        <h4 class="text-sm font-medium text-gray-900 dark:text-white truncate">' . $conversation['user_name'] . '</h4>
                        <span class="text-xs text-gray-500 dark:text-gray-400">' . $conversation['timestamp'] . '</span>
                    </div>
                    <p class="text-sm text-gray-600 dark:text-gray-400 truncate">' . htmlspecialchars($conversation['last_message']) . '</p>
                    ' . ($conversation['unread_count'] > 0 ? '<div class="flex justify-end mt-1"><span class="bg-amber-500 text-white text-xs px-2 py-1 rounded-full">' . $conversation['unread_count'] . '</span></div>' : '') . '
                </div>
            </div>
        </div>';
    }
    
    return $html;
}

// Helper function to generate messages list
function generateMessagesList($messages) {
    $html = '';
    foreach ($messages as $message) {
        $isFromMe = $message['sender'] === 'me';
        $messageClass = $isFromMe ? 'justify-end' : 'justify-start';
        $bubbleClass = $isFromMe ? 'bg-amber-500 text-white' : 'bg-white dark:bg-gray-700 text-gray-900 dark:text-white';
        $readIndicator = $isFromMe && $message['read'] ? '<div class="flex justify-end mt-1"><svg class="w-3 h-3 text-amber-100" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg></div>' : '';
        
        $html .= '
        <div class="flex ' . $messageClass . '">
            <div class="max-w-xs lg:max-w-md px-4 py-2 rounded-lg ' . $bubbleClass . ' shadow-sm">
                <p class="text-sm">' . htmlspecialchars($message['message']) . '</p>
                <p class="text-xs mt-1 ' . ($isFromMe ? 'text-amber-100' : 'text-gray-500 dark:text-gray-400') . '">' . $message['timestamp'] . '</p>
                ' . $readIndicator . '
            </div>
        </div>';
    }
    
    return $html;
}

// Custom scripts for messaging functionality
$customScripts = '
<script>
// Simple UI interactions for messaging
document.addEventListener("DOMContentLoaded", function() {
    // Add click handlers to conversation items
    document.querySelectorAll(".conversation-item").forEach(item => {
        item.addEventListener("click", function() {
            // Remove active class from all items
            document.querySelectorAll(".conversation-item").forEach(i => i.classList.remove("bg-amber-50", "dark:bg-amber-900/20"));
            // Add active class to clicked item
            this.classList.add("bg-amber-50", "dark:bg-amber-900/20");
        });
    });
    
    // Message input enter key handler
    const messageInput = document.querySelector("input[placeholder=\'Type a message...\']");
    if (messageInput) {
        messageInput.addEventListener("keypress", function(e) {
            if (e.key === "Enter" && this.value.trim()) {
                // In a real app, this would send the message
                console.log("Sending message:", this.value);
                this.value = "";
            }
        });
    }
    
    // Send button handler
    const sendButton = document.querySelector("button[class*=\'bg-amber-600\']");
    if (sendButton) {
        sendButton.addEventListener("click", function() {
            const input = document.querySelector("input[placeholder=\'Type a message...\']");
            if (input && input.value.trim()) {
                console.log("Sending message:", input.value);
                input.value = "";
            }
        });
    }
});
</script>
';

// Render the messaging page
renderPage("Messages - COPit!", $content, true, '', $customScripts);
?>