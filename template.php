<?php
/**
 * Template System for COPit!
 * Reusable component system for consistent layouts
 */

class Template {
    private $title;
    private $content;
    private $showNavigation;
    private $customHead;
    private $customScripts;

    public function __construct($title = 'COPit!', $showNavigation = true) {
        $this->title = $title;
        $this->showNavigation = $showNavigation;
        $this->content = '';
        $this->customHead = '';
        $this->customScripts = '';
    }

    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }

    public function setContent($content) {
        $this->content = $content;
        return $this;
    }

    public function addCustomHead($html) {
        $this->customHead .= $html;
        return $this;
    }

    public function addCustomScripts($html) {
        $this->customScripts .= $html;
        return $this;
    }

    public function render() {
        ob_start();
        ?>
<!doctype html>
<html class="h-full bg-white dark:bg-gray-900">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <!-- PWA Meta Tags -->
    <meta name="application-name" content="COPit!" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="default" />
    <meta name="apple-mobile-web-app-title" content="COPit!" />
    <meta name="description" content="A marketplace platform for discovering and purchasing products" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="msapplication-config" content="/browserconfig.xml" />
    <meta name="msapplication-TileColor" content="#f59e0b" />
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="theme-color" content="#f59e0b" />
    
    <!-- Apple Touch Icons -->
    <link rel="apple-touch-icon" href="/assets/icon-192.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="/assets/icon-144.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/icon-192.png" />
    <link rel="apple-touch-icon" sizes="167x167" href="/assets/icon-144.png" />
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/icon-48.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/icon-48.png" />
    <link rel="shortcut icon" href="/favicon.ico" />
    
    <!-- Web App Manifest -->
    <link rel="manifest" href="/manifest.json" />
    
    <!-- Microsoft Tiles -->
    <meta name="msapplication-TileImage" content="/assets/icon-144.png" />
    
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    
    <title><?php echo htmlspecialchars($this->title); ?></title>
    <?php echo $this->customHead; ?>
</head>
<body class="h-full">
    <div class="flex h-full">
        <?php if ($this->showNavigation): ?>
            <?php include 'components/navigation.php'; ?>
        <?php endif; ?>
        
        <!-- Main Content Area -->
        <main class="flex-1 overflow-auto <?php echo $this->showNavigation ? 'lg:ml-0' : ''; ?>">
            <div class="min-h-full">
                <?php echo $this->content; ?>
            </div>
        </main>
    </div>

    <?php echo $this->customScripts; ?>
    
    <!-- PWA Service Worker Registration -->
    <script>
        // Register service worker
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', () => {
                navigator.serviceWorker.register('/sw.js')
                    .then((registration) => {
                        console.log('SW registered: ', registration);
                        
                        // Check for updates
                        registration.addEventListener('updatefound', () => {
                            const newWorker = registration.installing;
                            newWorker.addEventListener('statechange', () => {
                                if (newWorker.state === 'installed' && navigator.serviceWorker.controller) {
                                    // New content is available, show update notification
                                    if (confirm('New version available! Reload to update?')) {
                                        window.location.reload();
                                    }
                                }
                            });
                        });
                    })
                    .catch((registrationError) => {
                        console.log('SW registration failed: ', registrationError);
                    });
            });
        }

        // PWA Install Prompt
        let deferredPrompt;
        let installButton;

        window.addEventListener('beforeinstallprompt', (e) => {
            console.log('PWA install prompt triggered');
            // Prevent Chrome 67 and earlier from automatically showing the prompt
            e.preventDefault();
            // Stash the event so it can be triggered later
            deferredPrompt = e;
            
            // Show install button or banner
            showInstallPromotion();
        });

        function showInstallPromotion() {
            // Create install button if it doesn't exist
            if (!installButton) {
                installButton = document.createElement('button');
                installButton.textContent = 'Install COPit!';
                installButton.className = 'fixed bottom-4 right-4 bg-amber-600 text-white px-4 py-2 rounded-lg shadow-lg hover:bg-amber-500 transition-colors z-50';
                installButton.onclick = installApp;
                document.body.appendChild(installButton);
            }
        }

        function installApp() {
            if (deferredPrompt) {
                // Show the install prompt
                deferredPrompt.prompt();
                
                // Wait for the user to respond to the prompt
                deferredPrompt.userChoice.then((choiceResult) => {
                    if (choiceResult.outcome === 'accepted') {
                        console.log('User accepted the install prompt');
                    } else {
                        console.log('User dismissed the install prompt');
                    }
                    deferredPrompt = null;
                    
                    // Hide install button
                    if (installButton) {
                        installButton.remove();
                        installButton = null;
                    }
                });
            }
        }

        // Track PWA installation
        window.addEventListener('appinstalled', (evt) => {
            console.log('PWA was installed');
            // Hide install button
            if (installButton) {
                installButton.remove();
                installButton = null;
            }
        });

        // Handle PWA display mode changes
        window.addEventListener('resize', () => {
            if (window.matchMedia('(display-mode: standalone)').matches) {
                console.log('Running as PWA');
            } else {
                console.log('Running in browser');
            }
        });
    </script>
</body>
</html>
        <?php
        return ob_get_clean();
    }

    public function renderPage() {
        echo $this->render();
    }
}

/**
 * Helper function to quickly create a page with template
 */
function renderPage($title, $content, $showNavigation = true, $customHead = '', $customScripts = '') {
    $template = new Template($title, $showNavigation);
    $template->setContent($content);
    
    if ($customHead) {
        $template->addCustomHead($customHead);
    }
    
    if ($customScripts) {
        $template->addCustomScripts($customScripts);
    }
    
    $template->renderPage();
}

/**
 * Helper function to get template HTML without rendering
 */
function getTemplate($title, $content, $showNavigation = true, $customHead = '', $customScripts = '') {
    $template = new Template($title, $showNavigation);
    $template->setContent($content);
    
    if ($customHead) {
        $template->addCustomHead($customHead);
    }
    
    if ($customScripts) {
        $template->addCustomScripts($customScripts);
    }
    
    return $template->render();
}
