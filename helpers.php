 <?php
    /**
     * Get the path
     * @param string $path
     * @return string
     */
    function basePath($path = '')
    {
        return __DIR__ . '/' . $path;
    }

    /**
     * Load a view
     * @param string $name 
     * @return void
     */

    function loadView($name)
    {

        // let check if d file exits 
        $viewPath = basePath("views/{$name}.view.php");
        if (file_exists($viewPath)) {
            require $viewPath;
        } else {
            echo "The view {$name}.view.php does not exist";
        }
    }

    /**
     * Load a partial view
     * @param string $name 
     * @return void
     */

    function loadPartial($name)
    {
        $partialPath = basePath("views/partials/{$name}.php");
        if (file_exists($partialPath)) {
            require $partialPath;
        } else {
            echo "The partial view {$name}.php does not exist";
        }
    }
