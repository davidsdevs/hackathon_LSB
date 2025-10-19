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
